<?php

namespace App\Controller\gestion_de_depence;

use App\Entity\gestion_de_reservation\Booking;
use App\Entity\gestion_de_depence\Transaction;
use App\Entity\gestion_de_depence\Statistiques;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaidBookingsController extends AbstractController
{
    #[Route('/admin/paid-bookings', name: 'admin_paid_bookings')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Get all bookings with status 'payed'
        $paidBookings = $entityManager->getRepository(Booking::class)
            ->createQueryBuilder('b')
            ->where('b.status = :status')
            ->setParameter('status', 'payed')
            ->orderBy('b.booking_date', 'DESC')
            ->getQuery()
            ->getResult();

        // Calculate total revenue from paid bookings
        $totalRevenue = array_reduce($paidBookings, function($carry, $booking) {
            return $carry + $booking->getPriceTotal();
        }, 0);

        // Get statistics data
        $statistics = $entityManager->getRepository(Statistiques::class)->findAll();
        
        // Calculate hotel distribution
        $hotelStats = [];
        foreach ($statistics as $stat) {
            $hotelName = $stat->getHotelName();
            $hotelStats[$hotelName] = isset($hotelStats[$hotelName]) ? 
                $hotelStats[$hotelName] + 1 : 1;
        }
        $hotelPercentages = $this->calculatePercentages($hotelStats);

        // Calculate transport distribution
        $transportStats = [];
        foreach ($statistics as $stat) {
            $transportType = $stat->getTransportType();
            $transportStats[$transportType] = isset($transportStats[$transportType]) ? 
                $transportStats[$transportType] + 1 : 1;
        }
        $transportPercentages = $this->calculatePercentages($transportStats);

        // Calculate sponsoring distribution
        $sponsoringStats = ['Sponsored' => 0, 'Not Sponsored' => 0];
        foreach ($statistics as $stat) {
            if ($stat->isSponsoring()) {
                $sponsoringStats['Sponsored']++;
            } else {
                $sponsoringStats['Not Sponsored']++;
            }
        }
        $sponsoringPercentages = $this->calculatePercentages($sponsoringStats);

        // Get transactions
        $transactions = $entityManager->getRepository(Transaction::class)
            ->createQueryBuilder('t')
            ->orderBy('t.dateTransaction', 'DESC')
            ->getQuery()
            ->getResult();

        // In the index method
        return $this->render('gestion_de_depence/paid_bookings/index.html.twig', [
            'paidBookings' => $paidBookings,
            'totalRevenue' => $totalRevenue,
            'transactions' => $transactions,
            'stats' => [
                'hotels' => $hotelPercentages,
                'transport' => $transportPercentages,
                'sponsoring' => $sponsoringPercentages
            ]
        ]);
    }

    private function calculatePercentages(array $data): array
    {
        $total = array_sum($data);
        if ($total === 0) {
            return array_map(function() { return '0%'; }, $data);
        }
        
        return array_map(function($value) use ($total) {
            return round(($value / $total) * 100, 1) . '%';
        }, $data);
    }
}