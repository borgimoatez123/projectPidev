<?php

namespace App\EventListener;

use App\Entity\gestion_user\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class LogoutListener
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function onLogout(LogoutEvent $event): void
    {
        $token = $event->getToken();

        if (!$token) {
            return;
        }

        $user = $token->getUser();

        // Vérifie que c'est bien ton entité User
        if ($user instanceof User) {
            $user->setStatus('notloged');
            $this->entityManager->flush();
        }
    }
}