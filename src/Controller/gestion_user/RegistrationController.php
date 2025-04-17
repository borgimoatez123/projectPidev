<?php

namespace App\Controller\gestion_user;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use App\Entity\gestion_user\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
 class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setMotDePasse(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // Handle image upload
            if ($imageFile = $form->get('imageFile')->getData()) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/profile_pictures',
                        $newFilename
                    );
                    $user->setImage('uploads/profile_pictures/' . $newFilename);
                } catch (FileException $e) {
                    // Handle exception
                }
            }

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('gestion_user/registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}