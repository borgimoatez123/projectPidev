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

/* home/Sponsor.html.twig */
class __TwigTemplate_972a959adcc260e2bcc1eb1243e2789b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Sponsor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/Sponsor.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/Sponsor.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "MeetNTrip - Event Management
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "\t";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "\t<!-- Hero Section -->


\t<!-- Services Section -->

\t<!-- Spinner Start -->
\t\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\"> <div class=\"spinner-grow text-primary\" role=\"status\"></div>
\t</div>
\t<!-- Spinner End -->
 

\t<!-- Topbar Start -->
\t<div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
\t\t<div class=\"row gx-0 align-items-center\">
\t\t\t<div class=\"col-lg-5 text-center text-lg-start mb-lg-0\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted me-4\">
\t\t\t\t\t\t<i class=\"fas fa-envelope text-secondary me-2\"></i>contact@meetntrip.com</a>
\t\t\t\t\t<a href=\"#\" class=\"text-muted me-0\">
\t\t\t\t\t\t<i class=\"fas fa-phone-alt text-secondary me-2\"></i>+01234567890</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 row-cols-1 text-center mb-2 mb-lg-0\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-twitter fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin-in fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-instagram fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-youtube fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 text-center text-lg-end\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted me-2\">Help</a>
\t\t\t\t\t<small>
\t\t\t\t\t\t/
\t\t\t\t\t</small>
\t\t\t\t\t<a href=\"#\" class=\"text-muted mx-2\">Support</a>
\t\t\t\t\t<small>
\t\t\t\t\t\t/
\t\t\t\t\t</small>
\t\t\t\t\t<a href=\"#\" class=\"text-muted ms-2\">Contact</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
 
\t<!-- Navbar & Hero Start -->
\t<div class=\"container-fluid nav-bar p-0\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0\">
\t\t\t<a href=\"\" class=\"navbar-brand p-0\">
\t\t\t\t<h1 class=\"display-5 text-secondary m-0\">MeetNTrip</h1>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
\t\t\t\t<span class=\"fa fa-bars\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<div class=\"navbar-nav ms-auto py-0\">
                    <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"#\" class=\"nav-item nav-link\">About</a>
                    <a href=\"#\" class=\"nav-item nav-link\">Service</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                            <span class=\"dropdown-toggle\">Event</span>
                        </a>
                        <div class=\"dropdown-menu m-0\">
                             
\t\t\t\t\t  
\t\t\t\t\t
\t\t\t\t\t\t\t <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_demandes");
        yield "\" class=\"dropdown-item\">Event_Sponsor</a>
\t\t\t\t\t\t\t  
                         </div>
                    </div>
                    <a href=\"#\" class=\"nav-item nav-link\">Contact</a>
                </div>
                <button class=\"btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\">
                    <i class=\"fas fa-search\"></i>
                </button>
                ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103)) {
            // line 104
            yield "                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <span>Welcome, ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true);
            yield "</span>
                        </a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Profile</a>
                            <a href=\"";
            // line 110
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"dropdown-item\">Logout</a>
                          
                        </div>
                    </div>
                ";
        } else {
            // line 115
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0 me-2\">Login</a>
                    <a href=\"";
            // line 116
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-outline-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0\">Register</a>
                ";
        }
        // line 118
        yield "        </div>
\t\t</nav>
\t</div>
\t<!-- Navbar & Hero End -->

\t<!-- Carousel Start -->
\t<div class=\"carousel-header\">
\t\t<div id=\"carouselId\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-bs-target=\"#carouselId\" data-bs-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-bs-target=\"#carouselId\" data-bs-slide-to=\"1\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t<img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<div class=\"text-center p-4\" style=\"max-width: 900px;\">
\t\t\t\t\t\t\t<h4 class=\"text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.1s\">Solution For All Type Of Events</h4>
\t\t\t\t\t\t\t<h1 class=\"display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.3s\">Event Management Starts Here!</h1>
\t\t\t\t\t\t\t<p class=\"text-white mb-4 mb-md-5 fs-5 wow fadeInUp\" data-wow-delay=\"0.5s\">Professional event management services for corporate events, conferences, and special occasions.</p>
\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp\" data-wow-delay=\"0.7s\" href=\"#\">More Details</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<div class=\"text-center p-4\" style=\"max-width: 900px;\">
\t\t\t\t\t\t\t<h5 class=\"text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.1s\">Solution For All Type Of Events</h5>
\t\t\t\t\t\t\t<h1 class=\"display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.3s\">Best Event Management Services</h1>
\t\t\t\t\t\t\t<p class=\"text-white mb-4 mb-md-5 fs-5 wow fadeInUp\" data-wow-delay=\"0.5s\">Comprehensive event planning and management solutions for your business needs.</p>
\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp\" data-wow-delay=\"0.7s\" href=\"#\">More Details</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bg-secondary wow fadeInLeft\" data-wow-delay=\"0.2s\" aria-hidden=\"false\"></span>
\t\t\t\t<span class=\"visually-hidden-focusable\">Previous</span>
\t\t\t</button>
\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bg-secondary wow fadeInRight\" data-wow-delay=\"0.2s\" aria-hidden=\"false\"></span>
\t\t\t\t<span class=\"visually-hidden-focusable\">Next</span>
\t\t\t</button>
\t\t</div>
\t</div>
\t<!-- Carousel End -->
\t<section class=\"hero\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h1 class=\"display-4 fw-bold mb-4\">Plan Your Perfect Event with MeetNTrip</h1>
\t\t\t\t\t<p class=\"lead mb-4\">From corporate meetings to social gatherings, we make event planning simple and stress-free.</p>
\t\t\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t\t\t<a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"btn btn-primary btn-lg\">Book an Event</a>
\t\t\t\t\t\t<a href=\"#services\" class=\"btn btn-outline-primary btn-lg\">Our Services</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<img src=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-image.jpg"), "html", null, true);
        yield "\" alt=\"Event Planning\" class=\"img-fluid rounded shadow\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"services\" class=\"services py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t<h2 class=\"display-5 fw-bold\">Our Services</h2>
\t\t\t\t<p class=\"lead text-muted\">Comprehensive event management solutions for every occasion</p>
\t\t\t</div>
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<i class=\"fas fa-briefcase fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h3>Corporate Events</h3>
\t\t\t\t\t\t<p>Professional event management for conferences, meetings, and corporate gatherings.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<i class=\"fas fa-glass-cheers fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h3>Social Events</h3>
\t\t\t\t\t\t<p>Memorable celebrations for weddings, birthdays, and special occasions.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<i class=\"fas fa-map-marked-alt fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h3>Venue Booking</h3>
\t\t\t\t\t\t<p>Access to premium venues and locations for your events.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- About Section -->
\t<section id=\"about\" class=\"about py-5 bg-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<img src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-image.jpg"), "html", null, true);
        yield "\" alt=\"About MeetNTrip\" class=\"img-fluid rounded shadow\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h2 class=\"display-5 fw-bold mb-4\">Why Choose MeetNTrip?</h2>
\t\t\t\t\t<p class=\"lead mb-4\">We're dedicated to making your event planning experience seamless and enjoyable.</p>
\t\t\t\t\t<div class=\"d-flex flex-column gap-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>Professional event planning team</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>Wide range of venue options</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>Customized event solutions</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>24/7 customer support</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Call to Action -->
\t<section class=\"cta py-5\">
\t\t<div class=\"container text-center\">
\t\t\t<h2 class=\"display-5 fw-bold mb-4\">Ready to Plan Your Event?</h2>
\t\t\t<p class=\"lead mb-4\">Let's create something amazing together</p>
\t\t\t<a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"btn btn-primary btn-lg\">Get Started</a>
\t\t</div>
\t</section>

\t<!-- Modal Search Start -->
\t<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-fullscreen\">
\t\t\t<div class=\"modal-content rounded-0\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h4 class=\"modal-title text-secondary mb-0\" id=\"exampleModalLabel\">Search by keyword</h4>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body d-flex align-items-center\">
\t\t\t\t\t<div class=\"input-group w-75 mx-auto d-flex\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
\t\t\t\t\t\t<span id=\"search-icon-1\" class=\"input-group-text p-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Modal Search End -->

\t<!-- About Start -->
\t<div class=\"container-fluid py-5\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-xl-5 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"bg-light rounded\">
\t\t\t\t\t\t<img src=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-2.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" style=\"margin-bottom: -7px;\" alt=\"Image\">
\t\t\t\t\t\t<img src=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 border-bottom border-5 border-primary\" style=\"border-top-right-radius: 300px; border-top-left-radius: 300px;\" alt=\"Image\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-7 wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<h5 class=\"sub-title pe-3\">About the company</h5>
\t\t\t\t\t<h1 class=\"display-5 mb-4\">We're Trusted Event Management Agency.</h1>
\t\t\t\t\t<p class=\"mb-4\">We specialize in creating memorable events that leave lasting impressions. Our team of experienced professionals handles everything from corporate conferences to social gatherings with precision and creativity.</p>
\t\t\t\t\t<div class=\"row gy-4 align-items-center\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-6 d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-calendar-check fa-3x text-secondary\"></i>
\t\t\t\t\t\t\t<h5 class=\"ms-4\">Professional Event Planning</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-sm-6 d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-users fa-3x text-secondary\"></i>
\t\t\t\t\t\t\t<h5 class=\"ms-4\">Experienced Team</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4 col-md-3\">
\t\t\t\t\t\t\t<div class=\"bg-light text-center rounded p-3\">
\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trophy fa-4x text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h1 class=\"display-5 fw-bold mb-2\">10</h1>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Years of Experience</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-8 col-md-9\">
\t\t\t\t\t\t\t<div class=\"mb-5\">
\t\t\t\t\t\t\t\t<p class=\"text-primary h6 mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle text-secondary me-2\"></i>
\t\t\t\t\t\t\t\t\t100% Client Satisfaction</p>
\t\t\t\t\t\t\t\t<p class=\"text-primary h6 mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle text-secondary me-2\"></i>
\t\t\t\t\t\t\t\t\tProfessional Team</p>
\t\t\t\t\t\t\t\t<p class=\"text-primary h6 mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle text-secondary me-2\"></i>
\t\t\t\t\t\t\t\t\t24/7 Support</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t\t\t<div id=\"phone-tada\" class=\"d-flex align-items-center justify-content-center me-4\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"position-relative wow tada\" data-wow-delay=\".9s\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt text-primary fa-3x\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"position-absolute\" style=\"top: 0; left: 25px;\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment-dots text-secondary\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">Have any questions?</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary fw-bold fs-5\" style=\"letter-spacing: 2px;\">Free: +0123 456 7890</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- About End -->

\t<!-- Services Start -->
\t<div class=\"container-fluid service overflow-hidden pt-5\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"section-title text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<div class=\"sub-style\">
\t\t\t\t\t<h5 class=\"sub-title text-primary px-3\">Our Services</h5>
\t\t\t\t</div>
\t\t\t\t<h1 class=\"display-5 mb-4\">Comprehensive Event Management Solutions</h1>
\t\t\t\t<p class=\"mb-0\">We offer a wide range of event management services to meet your specific needs and requirements.</p>
\t\t\t</div>
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-6 col-xl-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"service-inner\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/service-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service-title\">
\t\t\t\t\t\t\t\t<div class=\"service-title-name\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center rounded p-3 mx-5 mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h4 text-white mb-0\">Corporate Events</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"btn bg-light text-secondary rounded-pill py-3 px-5 mb-4\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"service-content pb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-4 py-3\">Corporate Events</h4>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"px-4\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Professional event management for corporate meetings, conferences, and team building activities.</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill py-3 px-5\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-xl-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"service-inner\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/service-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service-title\">
\t\t\t\t\t\t\t\t<div class=\"service-title-name\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center rounded p-3 mx-5 mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h4 text-white mb-0\">Social Events</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"btn bg-light text-secondary rounded-pill py-3 px-5 mb-4\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"service-content pb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-4 py-3\">Social Events</h4>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"px-4\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Memorable social gatherings, parties, and celebrations tailored to your preferences.</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-xl-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"service-inner\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/service-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service-title\">
\t\t\t\t\t\t\t\t<div class=\"service-title-name\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center rounded p-3 mx-5 mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h4 text-white mb-0\">Venue Booking</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"btn bg-light text-secondary rounded-pill py-3 px-5 mb-4\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"service-content pb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-4 py-3\">Venue Booking</h4>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"px-4\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Access to premium venues and locations for your events, with full setup and support.</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Services End -->

\t<!-- Footer Start -->
\t<div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item d-flex flex-column\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Contact Info</h4>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt me-2\"></i>
\t\t\t\t\t\t\t123 Street, New York, USA</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-envelope me-2\"></i>
\t\t\t\t\t\t\tcontact@meetntrip.com</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-phone me-2\"></i>
\t\t\t\t\t\t\t+012 345 67890</a>
\t\t\t\t\t\t<a href=\"\" class=\"mb-3\">
\t\t\t\t\t\t\t<i class=\"fas fa-print me-2\"></i>
\t\t\t\t\t\t\t+012 345 67890</a>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-share fa-2x text-secondary me-2\"></i>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item d-flex flex-column\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Opening Time</h4>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<h6 class=\"text-muted mb-0\">Mon - Friday:</h6>
\t\t\t\t\t\t\t<p class=\"text-white mb-0\">09.00 am to 07.00 pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<h6 class=\"text-muted mb-0\">Satday:</h6>
\t\t\t\t\t\t\t<p class=\"text-white mb-0\">10.00 am to 05.00 pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<h6 class=\"text-muted mb-0\">Vacation:</h6>
\t\t\t\t\t\t\t<p class=\"text-white mb-0\">All Sunday is our vacation</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item d-flex flex-column\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Our Services</h4>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tCorporate Events</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tSocial Events</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tVenue Booking</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tEvent Planning</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tCatering Services</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tAudio Visual</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Newsletter</h4>
\t\t\t\t\t\t<p class=\"text-white mb-3\">Subscribe to our newsletter for the latest updates and offers.</p>
\t\t\t\t\t\t<div class=\"position-relative mx-auto rounded-pill\">
\t\t\t\t\t\t\t<input class=\"form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Enter your email\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2\">SignUp</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer End -->

\t<!-- Copyright Start -->
\t<div class=\"container-fluid copyright py-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-4 align-items-center\">
\t\t\t\t<div class=\"col-md-6 text-center text-md-start mb-md-0\">
\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t<a href=\"#\" class=\"border-bottom text-white\">
\t\t\t\t\t\t\t<i class=\"fas fa-copyright text-light me-2\"></i>MeetNTrip</a>, All right reserved.</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center text-md-end text-white\">
\t\t\t\t\tDesigned By
\t\t\t\t\t<a class=\"border-bottom text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Copyright End -->

\t<!-- Back to Top -->
\t<a href=\"#\" class=\"btn btn-primary btn-lg-square back-to-top\">
\t\t<i class=\"fa fa-arrow-up\"></i>
\t</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 554
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 555
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<!-- JavaScript Libraries -->
\t<script src=\"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
\t
\t<!-- Template Javascript -->
\t<script src=\"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
\t
\t<script>
\t\t// Initialize WOW.js
\t\tnew WOW().init();
\t\t
\t\t// Initialize spinner
\t\t\$(window).on('load', function () {
\t\t\t\$('#spinner').fadeOut('slow');
\t\t});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/Sponsor.html.twig";
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
        return array (  788 => 563,  782 => 560,  778 => 559,  774 => 558,  770 => 557,  764 => 555,  751 => 554,  599 => 412,  570 => 386,  541 => 360,  462 => 284,  458 => 283,  424 => 252,  388 => 219,  343 => 177,  335 => 172,  303 => 143,  289 => 132,  273 => 118,  268 => 116,  263 => 115,  255 => 110,  248 => 106,  244 => 104,  242 => 103,  230 => 94,  216 => 83,  146 => 15,  133 => 14,  120 => 11,  116 => 10,  112 => 9,  108 => 8,  103 => 7,  90 => 6,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MeetNTrip - Event Management
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('lib/animate/animate.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block body %}
\t<!-- Hero Section -->


\t<!-- Services Section -->

\t<!-- Spinner Start -->
\t\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\"> <div class=\"spinner-grow text-primary\" role=\"status\"></div>
\t</div>
\t<!-- Spinner End -->
 

\t<!-- Topbar Start -->
\t<div class=\"container-fluid bg-primary px-5 d-none d-lg-block\">
\t\t<div class=\"row gx-0 align-items-center\">
\t\t\t<div class=\"col-lg-5 text-center text-lg-start mb-lg-0\">
\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted me-4\">
\t\t\t\t\t\t<i class=\"fas fa-envelope text-secondary me-2\"></i>contact@meetntrip.com</a>
\t\t\t\t\t<a href=\"#\" class=\"text-muted me-0\">
\t\t\t\t\t\t<i class=\"fas fa-phone-alt text-secondary me-2\"></i>+01234567890</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 row-cols-1 text-center mb-2 mb-lg-0\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-twitter fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin-in fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle me-2\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-instagram fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"btn btn-sm btn-outline-light btn-square rounded-circle\" href=\"\">
\t\t\t\t\t\t<i class=\"fab fa-youtube fw-normal text-secondary\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 text-center text-lg-end\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
\t\t\t\t\t<a href=\"#\" class=\"text-muted me-2\">Help</a>
\t\t\t\t\t<small>
\t\t\t\t\t\t/
\t\t\t\t\t</small>
\t\t\t\t\t<a href=\"#\" class=\"text-muted mx-2\">Support</a>
\t\t\t\t\t<small>
\t\t\t\t\t\t/
\t\t\t\t\t</small>
\t\t\t\t\t<a href=\"#\" class=\"text-muted ms-2\">Contact</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
 
\t<!-- Navbar & Hero Start -->
\t<div class=\"container-fluid nav-bar p-0\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0\">
\t\t\t<a href=\"\" class=\"navbar-brand p-0\">
\t\t\t\t<h1 class=\"display-5 text-secondary m-0\">MeetNTrip</h1>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
\t\t\t\t<span class=\"fa fa-bars\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<div class=\"navbar-nav ms-auto py-0\">
                    <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"#\" class=\"nav-item nav-link\">About</a>
                    <a href=\"#\" class=\"nav-item nav-link\">Service</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                            <span class=\"dropdown-toggle\">Event</span>
                        </a>
                        <div class=\"dropdown-menu m-0\">
                             
\t\t\t\t\t  
\t\t\t\t\t
\t\t\t\t\t\t\t <a href=\"{{ path('sponsor_demandes') }}\" class=\"dropdown-item\">Event_Sponsor</a>
\t\t\t\t\t\t\t  
                         </div>
                    </div>
                    <a href=\"#\" class=\"nav-item nav-link\">Contact</a>
                </div>
                <button class=\"btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\">
                    <i class=\"fas fa-search\"></i>
                </button>
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
\t\t</nav>
\t</div>
\t<!-- Navbar & Hero End -->

\t<!-- Carousel Start -->
\t<div class=\"carousel-header\">
\t\t<div id=\"carouselId\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-bs-target=\"#carouselId\" data-bs-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-bs-target=\"#carouselId\" data-bs-slide-to=\"1\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t<img src=\"{{ asset('img/carousel-1.jpg') }}\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<div class=\"text-center p-4\" style=\"max-width: 900px;\">
\t\t\t\t\t\t\t<h4 class=\"text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.1s\">Solution For All Type Of Events</h4>
\t\t\t\t\t\t\t<h1 class=\"display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.3s\">Event Management Starts Here!</h1>
\t\t\t\t\t\t\t<p class=\"text-white mb-4 mb-md-5 fs-5 wow fadeInUp\" data-wow-delay=\"0.5s\">Professional event management services for corporate events, conferences, and special occasions.</p>
\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp\" data-wow-delay=\"0.7s\" href=\"#\">More Details</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<img src=\"{{ asset('img/carousel-2.jpg') }}\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<div class=\"text-center p-4\" style=\"max-width: 900px;\">
\t\t\t\t\t\t\t<h5 class=\"text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.1s\">Solution For All Type Of Events</h5>
\t\t\t\t\t\t\t<h1 class=\"display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp\" data-wow-delay=\"0.3s\">Best Event Management Services</h1>
\t\t\t\t\t\t\t<p class=\"text-white mb-4 mb-md-5 fs-5 wow fadeInUp\" data-wow-delay=\"0.5s\">Comprehensive event planning and management solutions for your business needs.</p>
\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp\" data-wow-delay=\"0.7s\" href=\"#\">More Details</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon bg-secondary wow fadeInLeft\" data-wow-delay=\"0.2s\" aria-hidden=\"false\"></span>
\t\t\t\t<span class=\"visually-hidden-focusable\">Previous</span>
\t\t\t</button>
\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon bg-secondary wow fadeInRight\" data-wow-delay=\"0.2s\" aria-hidden=\"false\"></span>
\t\t\t\t<span class=\"visually-hidden-focusable\">Next</span>
\t\t\t</button>
\t\t</div>
\t</div>
\t<!-- Carousel End -->
\t<section class=\"hero\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h1 class=\"display-4 fw-bold mb-4\">Plan Your Perfect Event with MeetNTrip</h1>
\t\t\t\t\t<p class=\"lead mb-4\">From corporate meetings to social gatherings, we make event planning simple and stress-free.</p>
\t\t\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t\t\t<a href=\"{{ path('app_evenement_index') }}\" class=\"btn btn-primary btn-lg\">Book an Event</a>
\t\t\t\t\t\t<a href=\"#services\" class=\"btn btn-outline-primary btn-lg\">Our Services</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<img src=\"{{ asset('img/hero-image.jpg') }}\" alt=\"Event Planning\" class=\"img-fluid rounded shadow\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"services\" class=\"services py-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"text-center mb-5\">
\t\t\t\t<h2 class=\"display-5 fw-bold\">Our Services</h2>
\t\t\t\t<p class=\"lead text-muted\">Comprehensive event management solutions for every occasion</p>
\t\t\t</div>
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<i class=\"fas fa-briefcase fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h3>Corporate Events</h3>
\t\t\t\t\t\t<p>Professional event management for conferences, meetings, and corporate gatherings.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<i class=\"fas fa-glass-cheers fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h3>Social Events</h3>
\t\t\t\t\t\t<p>Memorable celebrations for weddings, birthdays, and special occasions.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<i class=\"fas fa-map-marked-alt fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h3>Venue Booking</h3>
\t\t\t\t\t\t<p>Access to premium venues and locations for your events.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- About Section -->
\t<section id=\"about\" class=\"about py-5 bg-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<img src=\"{{ asset('img/about-image.jpg') }}\" alt=\"About MeetNTrip\" class=\"img-fluid rounded shadow\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<h2 class=\"display-5 fw-bold mb-4\">Why Choose MeetNTrip?</h2>
\t\t\t\t\t<p class=\"lead mb-4\">We're dedicated to making your event planning experience seamless and enjoyable.</p>
\t\t\t\t\t<div class=\"d-flex flex-column gap-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>Professional event planning team</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>Wide range of venue options</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>Customized event solutions</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle text-primary me-3\"></i>
\t\t\t\t\t\t\t<span>24/7 customer support</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Call to Action -->
\t<section class=\"cta py-5\">
\t\t<div class=\"container text-center\">
\t\t\t<h2 class=\"display-5 fw-bold mb-4\">Ready to Plan Your Event?</h2>
\t\t\t<p class=\"lead mb-4\">Let's create something amazing together</p>
\t\t\t<a href=\"{{ path('app_evenement_index') }}\" class=\"btn btn-primary btn-lg\">Get Started</a>
\t\t</div>
\t</section>

\t<!-- Modal Search Start -->
\t<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-fullscreen\">
\t\t\t<div class=\"modal-content rounded-0\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h4 class=\"modal-title text-secondary mb-0\" id=\"exampleModalLabel\">Search by keyword</h4>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body d-flex align-items-center\">
\t\t\t\t\t<div class=\"input-group w-75 mx-auto d-flex\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
\t\t\t\t\t\t<span id=\"search-icon-1\" class=\"input-group-text p-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Modal Search End -->

\t<!-- About Start -->
\t<div class=\"container-fluid py-5\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-xl-5 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"bg-light rounded\">
\t\t\t\t\t\t<img src=\"{{ asset('img/about-2.png') }}\" class=\"img-fluid w-100\" style=\"margin-bottom: -7px;\" alt=\"Image\">
\t\t\t\t\t\t<img src=\"{{ asset('img/about-3.jpg') }}\" class=\"img-fluid w-100 border-bottom border-5 border-primary\" style=\"border-top-right-radius: 300px; border-top-left-radius: 300px;\" alt=\"Image\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-7 wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<h5 class=\"sub-title pe-3\">About the company</h5>
\t\t\t\t\t<h1 class=\"display-5 mb-4\">We're Trusted Event Management Agency.</h1>
\t\t\t\t\t<p class=\"mb-4\">We specialize in creating memorable events that leave lasting impressions. Our team of experienced professionals handles everything from corporate conferences to social gatherings with precision and creativity.</p>
\t\t\t\t\t<div class=\"row gy-4 align-items-center\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-6 d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-calendar-check fa-3x text-secondary\"></i>
\t\t\t\t\t\t\t<h5 class=\"ms-4\">Professional Event Planning</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-sm-6 d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-users fa-3x text-secondary\"></i>
\t\t\t\t\t\t\t<h5 class=\"ms-4\">Experienced Team</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4 col-md-3\">
\t\t\t\t\t\t\t<div class=\"bg-light text-center rounded p-3\">
\t\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trophy fa-4x text-primary\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h1 class=\"display-5 fw-bold mb-2\">10</h1>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">Years of Experience</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-8 col-md-9\">
\t\t\t\t\t\t\t<div class=\"mb-5\">
\t\t\t\t\t\t\t\t<p class=\"text-primary h6 mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle text-secondary me-2\"></i>
\t\t\t\t\t\t\t\t\t100% Client Satisfaction</p>
\t\t\t\t\t\t\t\t<p class=\"text-primary h6 mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle text-secondary me-2\"></i>
\t\t\t\t\t\t\t\t\tProfessional Team</p>
\t\t\t\t\t\t\t\t<p class=\"text-primary h6 mb-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle text-secondary me-2\"></i>
\t\t\t\t\t\t\t\t\t24/7 Support</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t\t\t<div id=\"phone-tada\" class=\"d-flex align-items-center justify-content-center me-4\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"position-relative wow tada\" data-wow-delay=\".9s\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone-alt text-primary fa-3x\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"position-absolute\" style=\"top: 0; left: 25px;\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment-dots text-secondary\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t<span class=\"text-primary\">Have any questions?</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-secondary fw-bold fs-5\" style=\"letter-spacing: 2px;\">Free: +0123 456 7890</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- About End -->

\t<!-- Services Start -->
\t<div class=\"container-fluid service overflow-hidden pt-5\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"section-title text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t<div class=\"sub-style\">
\t\t\t\t\t<h5 class=\"sub-title text-primary px-3\">Our Services</h5>
\t\t\t\t</div>
\t\t\t\t<h1 class=\"display-5 mb-4\">Comprehensive Event Management Solutions</h1>
\t\t\t\t<p class=\"mb-0\">We offer a wide range of event management services to meet your specific needs and requirements.</p>
\t\t\t</div>
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-6 col-xl-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"service-inner\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/service-1.jpg') }}\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service-title\">
\t\t\t\t\t\t\t\t<div class=\"service-title-name\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center rounded p-3 mx-5 mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h4 text-white mb-0\">Corporate Events</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"btn bg-light text-secondary rounded-pill py-3 px-5 mb-4\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"service-content pb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-4 py-3\">Corporate Events</h4>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"px-4\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Professional event management for corporate meetings, conferences, and team building activities.</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill py-3 px-5\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-xl-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"service-inner\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/service-2.jpg') }}\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service-title\">
\t\t\t\t\t\t\t\t<div class=\"service-title-name\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center rounded p-3 mx-5 mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h4 text-white mb-0\">Social Events</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"btn bg-light text-secondary rounded-pill py-3 px-5 mb-4\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"service-content pb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-4 py-3\">Social Events</h4>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"px-4\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Memorable social gatherings, parties, and celebrations tailored to your preferences.</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-xl-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t<div class=\"service-inner\">
\t\t\t\t\t\t\t<div class=\"service-img\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/service-3.jpg') }}\" class=\"img-fluid w-100 rounded\" alt=\"Image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service-title\">
\t\t\t\t\t\t\t\t<div class=\"service-title-name\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-primary text-center rounded p-3 mx-5 mb-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"h4 text-white mb-0\">Venue Booking</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"btn bg-light text-secondary rounded-pill py-3 px-5 mb-4\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"service-content pb-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-4 py-3\">Venue Booking</h4>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"px-4\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Access to premium venues and locations for your events, with full setup and support.</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary border-secondary rounded-pill text-white py-3 px-5\" href=\"#\">Explore More</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Services End -->

\t<!-- Footer Start -->
\t<div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row g-5\">
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item d-flex flex-column\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Contact Info</h4>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker-alt me-2\"></i>
\t\t\t\t\t\t\t123 Street, New York, USA</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-envelope me-2\"></i>
\t\t\t\t\t\t\tcontact@meetntrip.com</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-phone me-2\"></i>
\t\t\t\t\t\t\t+012 345 67890</a>
\t\t\t\t\t\t<a href=\"\" class=\"mb-3\">
\t\t\t\t\t\t\t<i class=\"fas fa-print me-2\"></i>
\t\t\t\t\t\t\t+012 345 67890</a>
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"fas fa-share fa-2x text-secondary me-2\"></i>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn mx-1\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item d-flex flex-column\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Opening Time</h4>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<h6 class=\"text-muted mb-0\">Mon - Friday:</h6>
\t\t\t\t\t\t\t<p class=\"text-white mb-0\">09.00 am to 07.00 pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<h6 class=\"text-muted mb-0\">Satday:</h6>
\t\t\t\t\t\t\t<p class=\"text-white mb-0\">10.00 am to 05.00 pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<h6 class=\"text-muted mb-0\">Vacation:</h6>
\t\t\t\t\t\t\t<p class=\"text-white mb-0\">All Sunday is our vacation</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item d-flex flex-column\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Our Services</h4>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tCorporate Events</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tSocial Events</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tVenue Booking</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tEvent Planning</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tCatering Services</a>
\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t<i class=\"fas fa-angle-right me-2\"></i>
\t\t\t\t\t\t\tAudio Visual</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-6 col-xl-3\">
\t\t\t\t\t<div class=\"footer-item\">
\t\t\t\t\t\t<h4 class=\"text-secondary mb-4\">Newsletter</h4>
\t\t\t\t\t\t<p class=\"text-white mb-3\">Subscribe to our newsletter for the latest updates and offers.</p>
\t\t\t\t\t\t<div class=\"position-relative mx-auto rounded-pill\">
\t\t\t\t\t\t\t<input class=\"form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Enter your email\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2\">SignUp</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer End -->

\t<!-- Copyright Start -->
\t<div class=\"container-fluid copyright py-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-4 align-items-center\">
\t\t\t\t<div class=\"col-md-6 text-center text-md-start mb-md-0\">
\t\t\t\t\t<span class=\"text-white\">
\t\t\t\t\t\t<a href=\"#\" class=\"border-bottom text-white\">
\t\t\t\t\t\t\t<i class=\"fas fa-copyright text-light me-2\"></i>MeetNTrip</a>, All right reserved.</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-center text-md-end text-white\">
\t\t\t\t\tDesigned By
\t\t\t\t\t<a class=\"border-bottom text-white\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Copyright End -->

\t<!-- Back to Top -->
\t<a href=\"#\" class=\"btn btn-primary btn-lg-square back-to-top\">
\t\t<i class=\"fa fa-arrow-up\"></i>
\t</a>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<!-- JavaScript Libraries -->
\t<script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
\t<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
\t<script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
\t<script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
\t
\t<!-- Template Javascript -->
\t<script src=\"{{ asset('js/main.js') }}\"></script>
\t
\t<script>
\t\t// Initialize WOW.js
\t\tnew WOW().init();
\t\t
\t\t// Initialize spinner
\t\t\$(window).on('load', function () {
\t\t\t\$('#spinner').fadeOut('slow');
\t\t});
\t</script>
{% endblock %}
", "home/Sponsor.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\home\\Sponsor.html.twig");
    }
}
