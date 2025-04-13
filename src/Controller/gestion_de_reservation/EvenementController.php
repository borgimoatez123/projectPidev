<?php

namespace App\Controller\gestion_de_reservation;

use App\Entity\gestion_de_reservation\Evenement;
use App\Repository\gestion_de_reservation\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class EvenementController extends AbstractController
{
    #[Route('/event', name: 'app_evenement_index')]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('gestion_de_reservation/evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/evenement/select', name: 'app_evenement_select')]
    public function selectEvent(Request $request, EvenementRepository $evenementRepository): Response
    {
        $eventId = $request->query->get('event_id');

        if (!$eventId) {
            $this->addFlash('error', 'No event selected.');
            return $this->redirectToRoute('app_evenement_index');
        }

        $event = $evenementRepository->find($eventId);

        if (!$event) {
            $this->addFlash('error', 'Event not found.');
            return $this->redirectToRoute('app_evenement_index');
        }

        return $this->redirectToRoute('app_flights', [
            'lieuEvenement' => $event->getLieuEvenement(),
            'date_debut' => $event->getDateDebut()->format('Y-m-d'),
            'date_fin' => $event->getDateFin()->format('Y-m-d'),
            'nombre_invite' => $event->getNombreInvite(),
            'userid' => $event->getUser()?->getId(),
            'id_evenement' => $event->getId(),
        ]);
    }

    #[Route('/evenement/{id}', name: 'app_evenement_show')]
    public function show(int $id, EvenementRepository $evenementRepository): Response
    {
        $evenement = $evenementRepository->find($id);
        
        if (!$evenement) {
            throw $this->createNotFoundException('Event not found');
        }
        
        return $this->render('gestion_de_reservation/evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }
} 