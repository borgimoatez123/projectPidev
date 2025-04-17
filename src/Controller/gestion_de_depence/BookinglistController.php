<?php

namespace App\Controller\gestion_de_depence;

use App\Entity\gestion_de_reservation\Booking;
use App\Entity\gestion_de_depence\Transaction;
use App\Entity\gestion_de_depence\Statistiques;
use App\Entity\Gestion_Evenement\DemandeSponsoring;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

// Add these use statements at the top


class BookinglistController extends AbstractController
{
    #[Route('/bookings/user/{userid}', name: 'bookings_by_user')]
    public function showBookingsByUser(int $userid, EntityManagerInterface $entityManager): Response
    {
        $bookings = $entityManager->getRepository(Booking::class)
            ->createQueryBuilder('b')
            ->where('b.user = :userid')
            ->setParameter('userid', $userid)
            ->getQuery()
            ->getResult();

        return $this->render('gestion_de_depence/bookings_by_user.html.twig', [
            'bookings' => $bookings,
            'userid' => $userid
        ]);
    }

    #[Route('/bookings/search', name: 'bookings_search', methods: ['GET'])]
    public function searchBookings(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userid = $request->query->get('userid');
        $eventName = $request->query->get('event_name');

        $queryBuilder = $entityManager->getRepository(Booking::class)->createQueryBuilder('b')
            ->where('b.user = :userid')
            ->andWhere('b.name_evement LIKE :eventName')
            ->setParameter('userid', $userid)
            ->setParameter('eventName', '%' . $eventName . '%');

        $bookings = $queryBuilder->getQuery()->getResult();

        return $this->render('gestion_de_depence/_booking_rows.html.twig', [
            'bookings' => $bookings
        ]);
    }

    #[Route('/create-payment-session', name: 'create_payment_session', methods: ['POST'])]
    public function createPaymentSession(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        Stripe::setApiKey('sk_test_51Qwrrl4gBlnREYNzxG7WoyH1b3kYBMGx992KASpDQHj0jPJBtECuTxqGTvuDyTd9S9p75l9Pr7eR7WX40NEHAClY00nbIXdJuX');

        try {
            $baseUrl = $request->getSchemeAndHttpHost();
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => (int)$data['amount'],
                        'product_data' => [
                            'name' => 'Booking: ' . $data['eventName'],
                            'description' => 'Event Booking Payment',
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $baseUrl . '/payment/success?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $baseUrl . '/payment/cancel?session_id={CHECKOUT_SESSION_ID}',
                'customer_email' => $this->getUser()->getEmail(),
                'metadata' => [
                    'booking_id' => $data['bookingId']
                ]
            ]);

            return new JsonResponse(['id' => $session->id]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/payment/success', name: 'payment_success')]
    public function paymentSuccess(Request $request, EntityManagerInterface $entityManager): Response
    {
        try {
            $sessionId = $request->query->get('session_id');
            
            Stripe::setApiKey('sk_test_51Qwrrl4gBlnREYNzxG7WoyH1b3kYBMGx992KASpDQHj0jPJBtECuTxqGTvuDyTd9S9p75l9Pr7eR7WX40NEHAClY00nbIXdJuX');
            $session = Session::retrieve($sessionId);
            $bookingId = $session->metadata->booking_id;

            $booking = $entityManager->getRepository(Booking::class)->find($bookingId);
            if ($booking) {
                $entityManager->beginTransaction();
                try {
                    // Update booking status
                    $booking->setStatus('payed');
                    $entityManager->persist($booking);

                    // Create transaction record
                    $transaction = new Transaction();
                    $transaction->setIdUser($booking->getUser()->getId());
                    $transaction->setIdEvent($booking->getEvenement()->getId());
                    $transaction->setIdBooking($booking->getId());
                    $transaction->setPriceTotal($booking->getPriceTotal());
                    $transaction->setStatus('success');
                    $transaction->setDateTransaction(new \DateTime());
                    $entityManager->persist($transaction);

                    // Check if event has sponsoring
                    $hasSponsoring = $entityManager->getRepository(DemandeSponsoring::class)
                        ->count(['evenement' => $booking->getEvenement()]) > 0;

                    // Create statistics record
                    $statistiques = new Statistiques();
                    $statistiques->setIdUser($booking->getUser()->getId());
                    $statistiques->setHotelName($booking->getHotelName());
                    $statistiques->setTransportType($booking->getTransportType());
                    $statistiques->setSponsoring($hasSponsoring);
                    $statistiques->setPriceTotal($booking->getPriceTotal());
                    $statistiques->setStatus('payed');
                    
                    $entityManager->persist($statistiques);
                    $entityManager->flush();
                    $entityManager->commit();

                } catch (\Exception $e) {
                    $entityManager->rollback();
                    throw $e;
                }
            }

            $this->addFlash('success', 'Payment completed successfully!');
            return $this->redirectToRoute('bookings_by_user', ['userid' => $this->getUser()->getId()]);
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error updating booking status: ' . $e->getMessage());
            return $this->redirectToRoute('bookings_by_user', ['userid' => $this->getUser()->getId()]);
        }
    }

    #[Route('/payment/cancel', name: 'payment_cancel')]
    public function paymentCancel(): Response
    {
        $this->addFlash('error', 'Payment was cancelled.');
        return $this->redirectToRoute('bookings_by_user', ['userid' => $this->getUser()->getId()]);
    }

    #[Route('/create-checkout-session', name: 'create_checkout_session', methods: ['POST'])]
    public function createCheckoutSession(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $bookingId = $data['bookingId'];
        $amount = $data['amount'];

        Stripe::setApiKey('sk_test_51Qwrrl4gBlnREYNzxG7WoyH1b3kYBMGx992KASpDQHj0jPJBtECuTxqGTvuDyTd9S9p75l9Pr7eR7WX40NEHAClY00nbIXdJuX');

        try {
            $repository = $entityManager->getRepository(Booking::class);
            $booking = $repository->find($bookingId);

            if (!$booking) {
                return new JsonResponse(['error' => 'Booking not found'], JsonResponse::HTTP_NOT_FOUND);
            }

            $baseUrl = $request->getSchemeAndHttpHost();
            $checkoutSession = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $booking->getNameEvement(),
                                'description' => 'Event Booking Payment',
                            ],
                            'unit_amount' => $amount * 100,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => $baseUrl . '/payment/success?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $baseUrl . '/payment/cancel?session_id={CHECKOUT_SESSION_ID}',
                'metadata' => [
                    'booking_id' => $bookingId
                ]
            ]);

            return new JsonResponse(['sessionId' => $checkoutSession->id]);

        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }
}