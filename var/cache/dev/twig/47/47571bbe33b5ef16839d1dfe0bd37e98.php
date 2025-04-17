<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Gestion_Evennement/Sidbar.html.twig */
class __TwigTemplate_5aed5ab9aee609516f940d15d9747ba1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/Sidbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/Sidbar.html.twig"));

        // line 1
        yield "<!-- Topbar Start -->
<div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
    <div class=\"row gx-0 align-items-center\">
        <div class=\"col-lg-5 text-center text-lg-start mb-lg-0\">
            <div class=\"d-flex\">
                <a href=\"#\" class=\"text-muted me-4\"><i class=\"fas fa-envelope text-secondary me-2\"></i>MeetNTrip@gmail.com</a>
                <a href=\"#\" class=\"text-muted me-0\"><i class=\"fas fa-phone-alt text-secondary me-2\"></i>+01234567890</a>
            </div>
        </div>
        <div class=\"col-lg-3 row-cols-1 text-center mb-2 mb-lg-0\">
            <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-linkedin-in fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube fw-normal text-secondary\"></i></a>
            </div>
        </div>
        <div class=\"col-lg-4 text-center text-lg-end\">
            <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                <a href=\"#\" class=\"text-muted me-2\"> Help</a><small> / </small>
                <a href=\"#\" class=\"text-muted mx-2\"> Support</a><small> / </small>
                <a href=\"#\" class=\"text-muted ms-2\"> Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Gestion_Evennement/Sidbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Topbar Start -->
<div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
    <div class=\"row gx-0 align-items-center\">
        <div class=\"col-lg-5 text-center text-lg-start mb-lg-0\">
            <div class=\"d-flex\">
                <a href=\"#\" class=\"text-muted me-4\"><i class=\"fas fa-envelope text-secondary me-2\"></i>MeetNTrip@gmail.com</a>
                <a href=\"#\" class=\"text-muted me-0\"><i class=\"fas fa-phone-alt text-secondary me-2\"></i>+01234567890</a>
            </div>
        </div>
        <div class=\"col-lg-3 row-cols-1 text-center mb-2 mb-lg-0\">
            <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-twitter fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-facebook-f fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-linkedin-in fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\"><i class=\"fab fa-instagram fw-normal text-secondary\"></i></a>
                <a class=\"btn btn-sm btn-outline-light btn-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube fw-normal text-secondary\"></i></a>
            </div>
        </div>
        <div class=\"col-lg-4 text-center text-lg-end\">
            <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                <a href=\"#\" class=\"text-muted me-2\"> Help</a><small> / </small>
                <a href=\"#\" class=\"text-muted mx-2\"> Support</a><small> / </small>
                <a href=\"#\" class=\"text-muted ms-2\"> Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->", "Gestion_Evennement/Sidbar.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\Gestion_Evennement\\Sidbar.html.twig");
    }
}
