<?php

namespace App\Controller\gestion_de_reservation;
use App\Entity\gestion_user\User;
use App\Entity\Gestion_Evenement\Evenement;
use App\Repository\Gestion_evenement\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
 

#[AsController]
class EvenementController extends AbstractController
{
    #[Route('/event', name: 'app_evenement_index')]
    public function index(EvenementRepository $evenementRepository): Response
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            return $this->redirectToRoute('app_home');
        }
    
        /** @var User $user */
        $user = $this->getUser();
    
        $evenements = $evenementRepository->findByUser($user);
    
        return $this->render('gestion_de_reservation/evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }
    

    #[Route('/evenement/select', name: 'app_evenement_select')]
    public function selectEvent(Request $request, EvenementRepository $evenementRepository): Response
    {
        $eventId = $request->query->get('id');

        if (!$eventId) {
            $this->addFlash('error', 'No event selected.');
            return $this->redirectToRoute('app_evenement_index');
        }

        $event = $evenementRepository->find($eventId);

        if (!$event) {
            $this->addFlash('error', 'Event not found.');
            return $this->redirectToRoute('app_evenement_index');
        }

        // Debug the event data being passed
        $this->addFlash('debug', sprintf(
            'Passing event data - ID: %d, Name: %s, Location: %s',
            $event->getId(),
            $event->getNom(),
            $event->getLieuEvenement()
        ));

        return $this->redirectToRoute('app_flights', [
            'lieuEvenement' => $event->getLieuEvenement(),
            'date_debut' => $event->getDateDebut()->format('Y-m-d'),
            'date_fin' => $event->getDateFin()->format('Y-m-d'),
            'nombre_invite' => $event->getNombreInvite(),
            'userid' => $event->getUser()?->getId(),
            'id_evenement' => $event->getId(),
            'name_evenement' => $event->getNom(),
            'description' => $event->getDescription(),
            'type_evenement' => $event->getType()
            // Removed status_evenement since getStatus() doesn't exist
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
    
    // In your event selection/booking action in EvenementController
    public function bookEvent(Evenement $evenement): Response
    {
        // Debug parameters before redirecting
        $parameters = [
            'lieuEvenement' => $evenement->getLieuEvenement(),
            'date_debut' => $evenement->getDateDebut()->format('Y-m-d'),
            'date_fin' => $evenement->getDateFin()->format('Y-m-d'),
            'nombre_invite' => $evenement->getNombreInvite(),
            'userid' => $this->getUser()->getId(),
            'id_evenement' => $evenement->getId()
        ];
        
        $this->addFlash('debug', 'Redirecting with parameters: ' . print_r($parameters, true));

        return $this->redirectToRoute('app_flights', $parameters);
    }
}