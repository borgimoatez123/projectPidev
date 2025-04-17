<?php

namespace App\Controller\gestion_user;

use App\Entity\gestion_user\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\SecurityEvents;

class SecurityController extends AbstractController implements EventSubscriberInterface
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => 'onSecurityInteractiveLogin',
        ];
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event): void
    {
        $user = $event->getAuthenticationToken()->getUser();

        // 🔐 Vérification de type pour éviter les erreurs
        if (!$user instanceof User) {
            return;
        }

        switch ($user->getRole()) {
            case 'ADMIN':
                $user->setStatus('islogedadmin');
                break;
            case 'CLIENT':
                $user->setStatus('islogedclient');
                break;
            case 'SPONSOR':
                $user->setStatus('islogedsponsor');
                break;
            case 'EMPLOY':
                $user->setStatus('islogedemployee');
                break;
            default:
                $user->setStatus('notloged'); // fallback
        }

        $this->entityManager->flush();
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('gestion_user/security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Ce code ne sera jamais exécuté car Symfony gère la déconnexion automatiquement via firewall
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}