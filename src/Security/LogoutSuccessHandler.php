<?php

namespace App\Security;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    private $entityManager;
    private $urlGenerator;
    private $security;

    public function __construct(
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator,
        Security $security
    ) {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->security = $security;
    }

    public function onLogoutSuccess(Request $request): Response
    {
        $user = $this->security->getUser();
        if ($user) {
            $user->setStatus('notloged');
            $this->entityManager->flush();
        }

        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }
}