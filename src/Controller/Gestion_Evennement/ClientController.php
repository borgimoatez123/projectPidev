<?php

namespace App\Controller\Gestion_Evennement;
 
use App\Entity\gestion_user\User;
use  App\Repository\Gestion_evenement\EvenementRepository;
use App\Entity\Gestion_Evenement\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

 final class ClientController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Display only the events of the connected user
    #[Route('/client/evenements', name: 'client_evenements')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_CLIENT');

        if (!$this->isGranted('ROLE_CLIENT')) {
            return $this->redirectToRoute('app_home');
        }
        $user = $this->getUser(); // Get the connected user

        // Filter events for the connected user
        $evenements = $this->entityManager->getRepository(Evenement::class)->findBy(['user' => $user]);

        // Create an array of edit forms
        $editForms = [];
        foreach ($evenements as $event) {
            $editForms[$event->getId()] = $this->createForm(EvenementType::class, $event)->createView();
        }
        $this->denyAccessUnlessGranted('ROLE_CLIENT');

        return $this->render('Gestion_Evennement/client/index.html.twig', [
            'evenements' => $evenements,
            'form' => $this->createForm(EvenementType::class, new Evenement())->createView(),
            'editForms' => $editForms
        ]);
    }

    //  Create a new event
    #[Route('/client/evenement/new', name: 'client_evenement_new', methods: [ 'POST'])]

    public function new(Request $request): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
 
        if ($form->isSubmitted() && $form->isValid()) {
            $dateDebut = $evenement->getDateDebut();
            $dateFin = $evenement->getDateFin();

            if ($dateFin <= $dateDebut) {
                $this->addFlash('error', 'The end date must be after the start date.');
                return $this->redirectToRoute('client_evenements');
            }

            // Assign the connected user
            $user = $this->getUser();
            $evenement->setUser($user);

            // Handle image upload
            $imageFile = $form->get('imagePath')->getData();
            if ($imageFile) {
                try {
                    if (!in_array($imageFile->getMimeType(), ['image/jpeg', 'image/png'])) {
                        $this->addFlash('error', 'Invalid format. Only JPEG and PNG are accepted.');
                        return $this->redirectToRoute('client_evenements');
                    }

                    if ($imageFile->getSize() > 5 * 1024 * 1024) {
                        $this->addFlash('error', 'Maximum size is 5MB.');
                        return $this->redirectToRoute('client_evenements');
                    }

                    $newFilename = uniqid().'.'.$imageFile->guessExtension();
                    $imageFile->move($this->getParameter('event_images_directory'), $newFilename);
                    $evenement->setImagePath($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Image upload error: '.$e->getMessage());
                    return $this->redirectToRoute('client_evenements');
                }
            }

            $this->entityManager->persist($evenement);
            $this->entityManager->flush();
            dump($evenement); // To see the data before redirecting

            $this->addFlash('success', 'Event successfully created!');
 
            return $this->redirectToRoute('client_evenements');
 
        }

        return $this->redirectToRoute('client_evenements');
    }

   // Edit an event
    #[Route('/client/evenement/{id}/edit', name: 'client_evenement_edit', methods: ['POST'])]
    #[Route('/edit/{id}', name: 'client_edit')]
    public function edit(Request $request, int $id): Response
    {
        $evenement = $this->entityManager->getRepository(Evenement::class)->find($id);
        
        if (!$evenement) {
            throw $this->createNotFoundException('Event not found');
        }

        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imagePath')->getData();
            if ($imageFile) {
                if ($evenement->getImagePath()) {
                    $oldImage = $this->getParameter('event_images_directory').'/'.$evenement->getImagePath();
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }

                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('event_images_directory'), $newFilename);
                $evenement->setImagePath($newFilename);
            }

            $this->entityManager->flush();
            $this->addFlash('success', 'Event successfully updated!');
            return $this->redirectToRoute('client_evenements');
        }

        return $this->redirectToRoute('client_evenements');
    }

    #[Route('/client/evenement/{id}/delete', name: 'client_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, int $id): Response
    {
        $evenement = $this->entityManager->getRepository(Evenement::class)->find($id);
    
        if (!$evenement) {
            $this->addFlash('error', 'Event not found.');
            return $this->redirectToRoute('client_evenements');
        }
    
        $user = $this->getUser();
        if ($evenement->getUser() !== $user) {
            $this->addFlash('error', 'You can only delete your own events.');
            return $this->redirectToRoute('client_evenements');
        }
    
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($evenement);
            $this->entityManager->flush();
            $this->addFlash('success', 'Event successfully deleted!');
        }
    
        return $this->redirectToRoute('client_evenements');
    }
    
    // src/Controller/EvenementController.php
      


}