<?php
 namespace App\EventListener;

 use Symfony\Component\HttpFoundation\RedirectResponse;
 use Symfony\Component\Routing\RouterInterface;
 use Symfony\Component\Security\Core\Exception\AccessDeniedException;
 use Symfony\Component\HttpKernel\Event\ExceptionEvent;
 use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
 use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
 
 class AccessDeniedListener
 {
     private RouterInterface $router;
     private FlashBagInterface $flashBag;
 
     public function __construct(RouterInterface $router, FlashBagInterface $flashBag)
     {
         $this->router = $router;
         $this->flashBag = $flashBag;
     }
 
     public function onKernelException(ExceptionEvent $event): void
     {
         $exception = $event->getThrowable();
 
         if ($exception instanceof AccessDeniedHttpException || $exception instanceof AccessDeniedException) {
             // ✅ Add flash message directly
             $this->flashBag->add('error', 'You do not have permission to access this page.');
 
             $response = new RedirectResponse($this->router->generate('app_login'));
             $event->setResponse($response);
         }
     }
 }
 