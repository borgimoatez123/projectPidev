<?php

namespace App\Controller\gestion_de_reservation;

use App\Entity\gestion_de_reservation\Hotel;
use App\Repository\gestion_de_reservation\HotelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelController extends AbstractController
{
    #[Route('/hotels', name: 'app_hotels')]
    public function index(HotelRepository $hotelRepository, Request $request): Response
    {
        // Get all query parameters
        $flightId = $request->query->get('flight_id');
        $departureTime = $request->query->get('departure_time');
        $backTime = $request->query->get('back_time');
        $flightPrice = $request->query->get('flight_price');
        $userId = $request->query->get('userid');
        $idEvenement = $request->query->get('id_evenement');
        $dateDebut = $request->query->get('date_debut');
        $dateFin = $request->query->get('date_fin');
        $city = $request->query->get('city');
        $nombreInvite = $request->query->get('nombre_invite');

        // Filter hotels by city if provided
        $hotels = $city ? $hotelRepository->findBy(['city' => $city]) : $hotelRepository->findAll();

        return $this->render('gestion_de_reservation/hotel/index.html.twig', [
            'hotels' => $hotels,
            'flight_id' => $flightId,
            'departure_time' => $departureTime,
            'back_time' => $backTime,
            'flight_price' => $flightPrice,
            'userid' => $userId,
            'id_evenement' => $idEvenement,
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'city' => $city,
            'nombre_invite' => $nombreInvite,
        ]);
    }

    #[Route('/hotels/select', name: 'app_hotel_select')]
    public function selectHotel(Request $request, HotelRepository $hotelRepository): Response
    {
        $hotelId = $request->query->get('hotel_id');
        
        if (!$hotelId) {
            $this->addFlash('error', 'Hotel ID is required');
            return $this->redirectToRoute('app_hotels');
        }

        $hotel = $hotelRepository->find($hotelId);
        
        if (!$hotel) {
            $this->addFlash('error', 'Hotel not found');
            return $this->redirectToRoute('app_hotels');
        }

        // Get all original query parameters
        $params = [
            'flight_id' => $request->query->get('flight_id'),
            'departure_time' => $request->query->get('departure_time'),
            'back_time' => $request->query->get('back_time'),
            'flight_price' => $request->query->get('flight_price'),
            'userid' => $request->query->get('userid'),
            'id_evenement' => $request->query->get('id_evenement'),
            'date_debut' => $request->query->get('date_debut'),
            'date_fin' => $request->query->get('date_fin'),
            'city' => $request->query->get('city'),
            'nombre_invite' => $request->query->get('nombre_invite'),
            'hotel_id' => $hotel->getHotelId(),
            'hotel_name' => $hotel->getName(),
            'hotel_price_per_night' => $hotel->getPricePerNight(),
        ];

        return $this->redirectToRoute('app_conference_locations', $params);
    }
} 