<?php

namespace App\Controller\gestion_de_reservation;

use App\Entity\gestion_de_reservation\Flight;
use App\Repository\gestion_de_reservation\FlightRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FlightController extends AbstractController
{
    #[Route('/flights', name: 'app_flights')]
    public function index(Request $request, FlightRepository $flightRepository): Response
    {
        $lieuEvenement = $request->query->get('lieuEvenement');
        $dateDebut = $request->query->get('date_debut');
        $dateFin = $request->query->get('date_fin');
        $nombreInvite = $request->query->get('nombre_invite');
        $userid = $request->query->get('userid');
        $idEvenement = $request->query->get('id_evenement');

        if ($lieuEvenement) {
            $flights = $flightRepository->findBy(['destination' => $lieuEvenement]);
        } else {
            $flights = $flightRepository->findAll();
        }

        return $this->render('gestion_de_reservation/flight/index.html.twig', [
            'flights' => $flights,
            'city' => $lieuEvenement,
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'nombre_invite' => $nombreInvite,
            'userid' => $userid,
            'id_evenement' => $idEvenement,
        ]);
    }

    #[Route('/flights/select', name: 'app_flight_select')]
    public function selectFlight(Request $request, FlightRepository $flightRepository): Response
    {
        $flightId = $request->query->get('flight_id');
        $city = $request->query->get('city');
        $dateDebut = $request->query->get('date_debut');
        $dateFin = $request->query->get('date_fin');
        $nombreInvite = $request->query->get('nombre_invite');
        $userid = $request->query->get('userid');
        $idEvenement = $request->query->get('id_evenement');

        if (!$flightId) {
            $this->addFlash('error', 'No flight selected.');
            return $this->redirectToRoute('app_flights', [
                'lieuEvenement' => $city,
                'date_debut' => $dateDebut,
                'date_fin' => $dateFin,
                'nombre_invite' => $nombreInvite,
                'userid' => $userid,
                'id_evenement' => $idEvenement,
            ]);
        }

        $flight = $flightRepository->find($flightId);

        if (!$flight) {
            $this->addFlash('error', 'Flight not found.');
            return $this->redirectToRoute('app_flights', [
                'lieuEvenement' => $city,
                'date_debut' => $dateDebut,
                'date_fin' => $dateFin,
                'nombre_invite' => $nombreInvite,
                'userid' => $userid,
                'id_evenement' => $idEvenement,
            ]);
        }

        return $this->redirectToRoute('app_hotels', [
            'flight_id' => $flight->getFlightId(),
            'departure_time' => $flight->getDepartureTime()?->format('H:i'),
            'back_time' => $flight->getBackTime()?->format('H:i'),
            'flight_price' => $flight->getPrice(),
            'userid' => $userid,
            'id_evenement' => $idEvenement,
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'city' => $city,
            'nombre_invite' => $nombreInvite,
        ]);
    }
} 