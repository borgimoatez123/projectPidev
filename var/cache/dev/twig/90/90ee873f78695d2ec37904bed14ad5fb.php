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

/* Gestion_Evennement/Navbar.html.twig */
class __TwigTemplate_c3acbccfb6a0ffa36cbec045138b54b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/Navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/Navbar.html.twig"));

        // line 1
        yield "<!-- Navbar & Hero Start -->
<div class=\"container-fluid nav-bar p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0\">
        <a href=\"\" class=\"navbar-brand p-0\">
            <h1 class=\"display-5 text-secondary m-0\"><img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand-logo.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">MeetNTrip</h1>
            <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"fa fa-bars\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto py-0\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"service.html\" class=\"nav-item nav-link\">Service</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\"><span class=\"dropdown-toggle\">Pages</span></a>
                    <div class=\"dropdown-menu m-0\">
                        <!-- Show \"Créer événement\" for Admin and Client -->
                             <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenements");
        yield "\" class=\"dropdown-item\">Event_Create</a>
                             <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"dropdown-item\">Event_Reservation</a>
                             <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bookings_list");
        yield "\" class=\"dropdown-item\"> list of reservation </a>
                             ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            yield "                             <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bookings_by_user", ["userid" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"dropdown-item\">Payment</a>
                         ";
        }
        // line 27
        yield "                        
                     
                    
                        <!-- Link for reclamation page -->
                        <a href=\"#\" class=\"dropdown-item\">Réclamation</a>
                    </div>
                    
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            
            <button class=\"btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
            ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            yield "            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <span>Welcome, ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
            yield "</span>
                </a>
                <div class=\"dropdown-menu m-0\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        ";
        } else {
            // line 50
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0 me-2\">Login</a>
            <a href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0\">Register</a>
        ";
        }
        // line 53
        yield "</div>
         </div>
    </nav>
</div>
<!-- Navbar & Hero End -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Gestion_Evennement/Navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  140 => 53,  135 => 51,  130 => 50,  123 => 46,  116 => 42,  112 => 40,  110 => 39,  96 => 27,  90 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  66 => 14,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar & Hero Start -->
<div class=\"container-fluid nav-bar p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0\">
        <a href=\"\" class=\"navbar-brand p-0\">
            <h1 class=\"display-5 text-secondary m-0\"><img src=\"{{ asset('img/brand-logo.png') }}\" class=\"img-fluid\" alt=\"\">MeetNTrip</h1>
            <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"fa fa-bars\"></span>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto py-0\">
                <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"service.html\" class=\"nav-item nav-link\">Service</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\"><span class=\"dropdown-toggle\">Pages</span></a>
                    <div class=\"dropdown-menu m-0\">
                        <!-- Show \"Créer événement\" for Admin and Client -->
                             <a href=\"{{ path('client_evenements') }}\" class=\"dropdown-item\">Event_Create</a>
                             <a href=\"{{ path('app_evenement_index') }}\" class=\"dropdown-item\">Event_Reservation</a>
                             <a href=\"{{ path('app_bookings_list') }}\" class=\"dropdown-item\"> list of reservation </a>
                             {% if app.user %}
                             <a href=\"{{ path('bookings_by_user', {'userid': app.user.id}) }}\" class=\"dropdown-item\">Payment</a>
                         {% endif %}
                        
                     
                    
                        <!-- Link for reclamation page -->
                        <a href=\"#\" class=\"dropdown-item\">Réclamation</a>
                    </div>
                    
                </div>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
            
            <button class=\"btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search\"></i></button>
            {% if app.user %}
            <div class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <span>Welcome, {{ app.user.nom }}</span>
                </a>
                <div class=\"dropdown-menu m-0\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"{{ path('app_logout') }}\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        {% else %}
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0 me-2\">Login</a>
            <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0\">Register</a>
        {% endif %}
</div>
         </div>
    </nav>
</div>
<!-- Navbar & Hero End -->", "Gestion_Evennement/Navbar.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\Gestion_Evennement\\Navbar.html.twig");
    }
}
