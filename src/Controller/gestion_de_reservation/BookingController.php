<?php

namespace App\Controller\gestion_de_reservation;

use App\Entity\gestion_de_reservation\{Booking, Flight, Hotel, Transport, ConferenceLocation, Evenement, User};
use App\Repository\gestion_de_reservation\{FlightRepository, HotelRepository, TransportRepository, 
                 ConferenceLocationRepository, EvenementRepository, UserRepository, BookingRepository};
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, Response};
use Symfony\Component\Routing\Annotation\Route;

class BookingController extends AbstractController
{
    #[Route('/booking', name: 'app_booking')]
    public function index(
        Request $request,
        FlightRepository $flightRepository,
        HotelRepository $hotelRepository,
        TransportRepository $transportRepository,
        ConferenceLocationRepository $conferenceLocationRepository,
        EvenementRepository $evenementRepository,
        UserRepository $userRepository
    ): Response {
        // Get all query parameters
        $flightId = $request->query->get('flight_id');
        $flightPrice = $request->query->get('flight_price');
        $departureTime = $request->query->get('departure_time');
        $backTime = $request->query->get('back_time');
        $hotelId = $request->query->get('hotel_id');
        $hotelPrice = $request->query->get('hotel_price');
        $locationId = $request->query->get('location_id');
        $conferencePrice = $request->query->get('conference_price');
        $transportId = $request->query->get('transport_id');
        $transportPrice = $request->query->get('transport_price');
        $userId = $request->query->get('userid');
        $idEvenement = $request->query->get('id_evenement');
        $dateDebut = $request->query->get('date_debut');
        $dateFin = $request->query->get('date_fin');
        $nombreInvite = $request->query->get('nombre_invite');

        // Fetch related entities
        $flight = $flightId ? $flightRepository->find($flightId) : null;
        $hotel = $hotelId ? $hotelRepository->find($hotelId) : null;
        $transport = $transportId ? $transportRepository->find($transportId) : null;
        $location = $locationId ? $conferenceLocationRepository->find($locationId) : null;
        $evenement = $idEvenement ? $evenementRepository->find($idEvenement) : null;
        $user = $userId ? $userRepository->find($userId) : null;

        // Calculate total price
        $priceTotal = 0;
        if ($flightPrice) $priceTotal += floatval($flightPrice);
        if ($hotelPrice) $priceTotal += floatval($hotelPrice);
        if ($conferencePrice) $priceTotal += floatval($conferencePrice);
        if ($transportPrice) $priceTotal += floatval($transportPrice);

        return $this->render('gestion_de_reservation/booking/index.html.twig', [
            'flight' => $flight,
            'hotel' => $hotel,
            'transport' => $transport,
            'location' => $location,
            'evenement' => $evenement,
            'user' => $user,
            'flight_id' => $flightId,
            'flight_price' => $flightPrice,
            'departure_time' => $departureTime,
            'back_time' => $backTime,
            'hotel_id' => $hotelId,
            'hotel_price' => $hotelPrice,
            'location_id' => $locationId,
            'conference_price' => $conferencePrice,
            'transport_id' => $transportId,
            'transport_price' => $transportPrice,
            'userid' => $userId,
            'id_evenement' => $idEvenement,
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'nombre_invite' => $nombreInvite,
            'price_total' => $priceTotal,
        ]);
    }

    #[Route('/booking/save', name: 'app_booking_save', methods: ['POST'])]
    public function save(
        Request $request,
        EntityManagerInterface $entityManager,
        FlightRepository $flightRepository,
        HotelRepository $hotelRepository,
        TransportRepository $transportRepository,
        ConferenceLocationRepository $conferenceLocationRepository,
        EvenementRepository $evenementRepository,
        UserRepository $userRepository
    ): Response {
        $booking = new Booking();
    
        // Set basic booking info
        $booking->setBookingDate(new \DateTime());
        $booking->setStatus('pending');
        $booking->setSpecialRequests($request->request->get('special_requests'));
    
        // Flight details
        $flightId = $request->request->get('flight_id');
        if ($flightId) {
            $flight = $flightRepository->find($flightId);
            if ($flight) {
                $booking->setFlight($flight);
                $booking->setAirlines($flight->getAirline());
                $booking->setDepartureTime($flight->getDepartureTime());
                $booking->setBackTime($flight->getBackTime());
                // Set individual flight price if available
                if (method_exists($flight, 'getPrice')) {
                    $booking->setFlightPrice($flight->getPrice());
                }
            }
        }
    
        // Hotel details
        $hotelId = $request->request->get('hotel_id');
        if ($hotelId) {
            $hotel = $hotelRepository->find($hotelId);
            if ($hotel) {
                $booking->setHotel($hotel);
                $booking->setHotelName($hotel->getName());
                $booking->setHotelLocation($hotel->getCity());
                // Set individual hotel price if available
                if (method_exists($hotel, 'getPricePerNight')) {
                    $booking->setHotelPricePerNight($hotel->getPricePerNight());
                } elseif (method_exists($hotel, 'getPrice')) {
                    $booking->setHotelPricePerNight($hotel->getPrice());
                }
                if (method_exists($hotel, 'getRating')) {
                    $booking->setHotelRating($hotel->getRating());
                }
            }
        }
    
        // Transport details
        $transportId = $request->request->get('transport_id');
        if ($transportId) {
            $transport = $transportRepository->find($transportId);
            if ($transport) {
                $booking->setTransport($transport);
                $booking->setTransportType($transport->getType());
                $booking->setTransportDescription($transport->getDescription());
                // Set individual transport price if available
                if (method_exists($transport, 'getPrice')) {
                    $booking->setTransportPrice($transport->getPrice());
                }
            }
        }
    
        // Conference location details
        $locationId = $request->request->get('location_id');
        if ($locationId) {
            $conferenceLocation = $conferenceLocationRepository->find($locationId);
            if ($conferenceLocation) {
                $booking->setConferenceLocation($conferenceLocation);
                $booking->setConferenceName($conferenceLocation->getName());
                // Set individual conference price if available
                if (method_exists($conferenceLocation, 'getPricePerDay')) {
                    $booking->setConferencePricePerDay($conferenceLocation->getPricePerDay());
                } elseif (method_exists($conferenceLocation, 'getPrice')) {
                    $booking->setConferencePricePerDay($conferenceLocation->getPrice());
                }
            }
        }
    
        // Event details
        $idEvenement = $request->request->get('id_evenement');
        if ($idEvenement) {
            $evenement = $evenementRepository->find($idEvenement);
            if ($evenement) {
                $booking->setEvenement($evenement);
                $booking->setNameEvement($evenement->getNom());
                $booking->setStartEvement($evenement->getDateDebut());
                $booking->setEndEvement($evenement->getDateFin());
                $nombreInvite = $request->request->get('nombre_invite');
                if ($nombreInvite !== null && $nombreInvite !== '') {
                    $booking->setNumberofInvites((int)$nombreInvite);
                }
            }
        }
    
        // User details
        $userId = $request->request->get('userid');
        if ($userId) {
            $user = $userRepository->find($userId);
            if ($user) {
                $booking->setUser($user);
                $booking->setUserName($user->getEmail() ?? $user->getFullName() ?? $user->getNom() ?? 'User #' . $userId);
            }
        }
    
        // Calculate and set total price
        $totalPrice = 0;
        $flightPrice = $request->request->get('flight_price', $request->query->get('flight_price'));
        if ($flightPrice !== null && $flightPrice !== '') {
            $totalPrice += floatval($flightPrice);
            if (method_exists($booking, 'setFlightPrice')) {
                $booking->setFlightPrice(floatval($flightPrice));
            }
        } elseif ($booking->getFlightPrice() !== null) {
            $totalPrice += $booking->getFlightPrice();
        }
        $hotelPrice = $request->request->get('hotel_price', $request->query->get('hotel_price'));
        if ($hotelPrice !== null && $hotelPrice !== '') {
            $totalPrice += floatval($hotelPrice);
            if (method_exists($booking, 'setHotelPricePerNight')) {
                $booking->setHotelPricePerNight(floatval($hotelPrice));
            }
        } elseif ($booking->getHotelPricePerNight() !== null) {
            $totalPrice += $booking->getHotelPricePerNight();
        }
        $conferencePrice = $request->request->get('conference_price', $request->query->get('conference_price'));
        if ($conferencePrice !== null && $conferencePrice !== '') {
            $totalPrice += floatval($conferencePrice);
            if (method_exists($booking, 'setConferencePricePerDay')) {
                $booking->setConferencePricePerDay(floatval($conferencePrice));
            }
        } elseif ($booking->getConferencePricePerDay() !== null) {
            $totalPrice += $booking->getConferencePricePerDay();
        }
        $transportPrice = $request->request->get('transport_price', $request->query->get('transport_price'));
        if ($transportPrice !== null && $transportPrice !== '') {
            $totalPrice += floatval($transportPrice);
            if (method_exists($booking, 'setTransportPrice')) {
                $booking->setTransportPrice(floatval($transportPrice));
            }
        } elseif ($booking->getTransportPrice() !== null) {
            $totalPrice += $booking->getTransportPrice();
        }
        // Debug: Check the calculated total price and its type
        $this->addFlash('debug', 'Calculated Total Price: ' . $totalPrice . ' (Type: ' . gettype($totalPrice) . ')');
        // Explicitly cast to float to ensure correct data type
        $booking->setPriceTotal((float)$totalPrice);
        // Debug: Confirm the value is set on the booking object
        $this->addFlash('debug2', 'Price Total Set on Booking: ' . ($booking->getPriceTotal() ?? 'not set'));
    
        // Persist and flush
        $entityManager->persist($booking);
        $entityManager->flush();
    
        // Flash message for success
        $this->addFlash('success', 'Booking successfully created');
    
        // Redirect to bookings list
        return $this->redirectToRoute('app_bookings_list');
    }

    #[Route('/bookings', name: 'app_bookings_list')]
    public function list(BookingRepository $bookingRepository): Response
    {
        return $this->render('gestion_de_reservation/booking/list.html.twig', [
            'pendingBookings' => $bookingRepository->findBy(['status' => 'pending']),
            'confirmedBookings' => $bookingRepository->findBy(['status' => 'confirmed']),
        ]);
    }

    #[Route('/booking/{id}', name: 'app_booking_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, int $id, BookingRepository $bookingRepository, EntityManagerInterface $entityManager): Response
    {
        $booking = $bookingRepository->find($id);
        
        if (!$booking) {
            $this->addFlash('error', 'Booking not found');
            return $this->redirectToRoute('app_bookings_list');
        }
        
        if ($this->isCsrfTokenValid('delete'.$booking->getBookingId(), $request->request->get('_token'))) {
            $entityManager->remove($booking);
            $entityManager->flush();
            $this->addFlash('success', 'Booking deleted successfully');
        } else {
            $this->addFlash('error', 'Invalid CSRF token');
        }

        return $this->redirectToRoute('app_bookings_list');
    }
}