<?php
namespace App\Controller\Gestion_Evennement;

use App\Entity\Gestion_Evenement\Evenement;
use App\Entity\gestion_user\{User,UserRole};
use App\Form\AdminEvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
 
 final class AdminController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // ✅ Display all events
    #[Route('/admin/evenements', name: 'admin_evenements')]
 
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

     
        // Ajouter la vérification du rôle dans chaque méthode
if (!$this->isGranted('ROLE_ADMIN')) {
    return $this->redirectToRoute('app_home');
}

        $evenements = $this->entityManager->getRepository(Evenement::class)->findAll();

        // Create an array of edit forms
        $editForms = [];
        foreach ($evenements as $event) {
            $editForms[$event->getId()] = $this->createForm(AdminEvenementType::class, $event)->createView();
        }

        return $this->render('Gestion_Evennement/admin/index.html.twig', [
            'evenements' => $evenements,
            'form' => $this->createForm(AdminEvenementType::class, new Evenement())->createView(),
            'editForms' => $editForms
        ]);
    }

    // ✅ Display events by user_id
    #[Route('/admin/evenements/user/{id}', name: 'admin_evenements_par_user')]
    public function indexParUser(int $id): Response
    {
        $user = $this->entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash('error1', 'User not found.');
            return $this->redirectToRoute('admin_evenements');
        }

        $evenements = $this->entityManager->getRepository(Evenement::class)
            ->findBy(['user' => $user]);

        $editForms = [];
        foreach ($evenements as $event) {
            $editForms[$event->getId()] = $this->createForm(AdminEvenementType::class, $event)->createView();
        }

        return $this->render('Gestion_Evennement/admin/index.html.twig', [
            'evenements' => $evenements,
            'form' => $this->createForm(AdminEvenementType::class, new Evenement())->createView(),
            'editForms' => $editForms,
            'user' => $user
        ]);
    }

    // ✅ Create a new event
    #[Route('/admin/evenement/new', name: 'admin_evenement_new', methods: ['POST'])]
    public function new(Request $request): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(AdminEvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dateDebut = $evenement->getDateDebut();
            $dateFin = $evenement->getDateFin();

            if ($dateFin <= $dateDebut) {
                $this->addFlash('error1', 'End date must be after start date.');
                return $this->redirectToRoute('admin_evenements');
            }

            // Assign the logged-in user
            $user = $this->getUser();
            $evenement->setUser($user);

            // Handle image upload
            $imageFile = $form->get('imagePath')->getData();
            if ($imageFile) {
                try {
                    if (!in_array($imageFile->getMimeType(), ['image/jpeg', 'image/png'])) {
                        $this->addFlash('error1', 'Invalid format. Only JPEG and PNG are allowed.');
                        return $this->redirectToRoute('admin_evenements');
                    }

                    if ($imageFile->getSize() > 5 * 1024 * 1024) {
                        $this->addFlash('error1', 'Maximum size is 5MB.');
                        return $this->redirectToRoute('admin_evenements');
                    }

                    $newFilename = uniqid().'.'.$imageFile->guessExtension();
                    $imageFile->move($this->getParameter('event_images_directory'), $newFilename);
                    $evenement->setImagePath($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error1', 'Image upload error: '.$e->getMessage());
                    return $this->redirectToRoute('admin_evenements');
                }
            }

            $this->entityManager->persist($evenement);
            $this->entityManager->flush();
            $this->addFlash('success1', 'Event successfully created!');
            return $this->redirectToRoute('admin_evenements');
        }

        return $this->redirectToRoute('admin_evenements');
    }

    // ✅ Edit an event
    #[Route('/admin/evenement/{id}/edit', name: 'admin_evenement_edit', methods: ['POST'])]
public function edit(Request $request, int $id): Response
{
    $evenement = $this->entityManager->getRepository(Evenement::class)->find($id);

    if (!$evenement) {
        $this->addFlash('error1', 'Event not found!');
        return $this->redirectToRoute('admin_evenements');
    }

    $form = $this->createForm(AdminEvenementType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('imagePath')->getData();
        if ($imageFile) {
            if ($evenement->getImagePath()) {
                $oldImage = $this->getParameter('event_images_directory') . '/' . $evenement->getImagePath();
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move($this->getParameter('event_images_directory'), $newFilename);
            $evenement->setImagePath($newFilename);
        }

        $this->entityManager->flush();
        $this->addFlash('success1', 'Event updated successfully!');
    }

    return $this->redirectToRoute('admin_evenements');
}

    // ✅ Delete an event
    #[Route('/admin/evenement/{id}/delete', name: 'admin_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, int $id): Response
    {
        $evenement = $this->entityManager->getRepository(Evenement::class)->find($id);
    
        if (!$evenement) {
            $this->addFlash('error', 'Event not found.');
            return $this->redirectToRoute('admin_evenements');
        }
    
        $user = $this->getUser();
        if ($evenement->getUser() !== $user) {
            $this->addFlash('error', 'You can only delete your own events.');
            return $this->redirectToRoute('admin_evenements');
        }
    
             $this->entityManager->remove($evenement);
            $this->entityManager->flush();
            $this->addFlash('success', 'Event successfully deleted!');
        
    
        return $this->redirectToRoute('admin_evenements');}
    

    // ✅ Accept an event
    #[Route('/admin/evenement/{id}/accept', name: 'admin_evenement_accept', methods: ['POST'])]
    public function acceptEvent(int $id, Request $request): Response
    {
        // Récupérer l'événement par son ID
        $evenement = $this->entityManager->getRepository(Evenement::class)->find($id);

        if (!$evenement) {
            $this->addFlash('error1', 'Event not found.');
            return $this->redirectToRoute('admin_evenements');
        }

        // Valider l'événement
        $evenement->setValidated(1);
        $this->entityManager->flush();

        // Message de succès et redirection
        $this->addFlash('success1', 'Event accepted!');
        return $this->redirectToRoute('admin_evenements');
    }
    // ✅ Reject an event
    #[Route('/admin/evenement/{id}/reject', name: 'admin_evenement_reject', methods: ['POST'])]
    public function rejectEvent(int $id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'événement par son ID
        $evenement = $entityManager->getRepository(Evenement::class)->find($id);
    
        if (!$evenement) {
            $this->addFlash('error1', 'Event not found!');
            return $this->redirectToRoute('admin_evenements');
        }
    
        // Mettre à jour l'état de l'événement
        $evenement->setValidated(0);
        $entityManager->flush();
    
        $this->addFlash('success1', 'Event rejected!');
        return $this->redirectToRoute('admin_evenements');
    }
}