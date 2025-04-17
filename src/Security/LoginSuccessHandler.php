<?php namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private RouterInterface $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        $roles = $token->getRoleNames();

        if (in_array('ROLE_ADMIN', $roles)) {
            return new RedirectResponse($this->router->generate('app_admin'));
        }

        if (in_array('ROLE_CLIENT', $roles)) {
            return new RedirectResponse($this->router->generate('app_client'));
        }

        if (in_array('ROLE_SPONSOR', $roles)) {
            return new RedirectResponse($this->router->generate('app_sponsor'));
        }

        if (in_array('ROLE_EMPLOY', $roles)) {
            return new RedirectResponse($this->router->generate('App_employe'));
        }

        // Si aucun rôle reconnu
        return new RedirectResponse($this->router->generate('app_home'));
    }
}