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

/* gestion_de_reservation/transport/index.html.twig */
class __TwigTemplate_cf0f88e2d582c1a8c46cb3cfe45e2841 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "Gestion_Evennement/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/transport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/transport/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/transport/index.html.twig", 1);
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

        yield "Select Transport Option - MeetNTrip
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<!-- Spinner Start -->
\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t<div class=\"spinner-border text-secondary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t</div>
\t</div>
\t<!-- Spinner End -->

\t<div class=\"container py-5\">
\t\t<h1 class=\"text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Select Transport Option</h1>

\t\t<div class=\"bg-light rounded p-4 mb-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h4 class=\"text-primary mb-3\">Event Details</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"far fa-calendar-alt me-2\"></i>
\t\t\t\t\t\t<strong>Dates:</strong>
\t\t\t\t\t\t";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\tto
\t\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-users me-2\"></i>
\t\t\t\t\t\t<strong>Guests:</strong>
\t\t\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h4 class=\"text-primary mb-3\">Current Selection</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-plane me-2\"></i>
\t\t\t\t\t\t<strong>Flight:</strong>
\t\t\t\t\t\t#";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flight_id"]) || array_key_exists("flight_id", $context) ? $context["flight_id"] : (function () { throw new RuntimeError('Variable "flight_id" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-hotel me-2\"></i>
\t\t\t\t\t\t<strong>Hotel:</strong>
\t\t\t\t\t\t#";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hotel_id"]) || array_key_exists("hotel_id", $context) ? $context["hotel_id"] : (function () { throw new RuntimeError('Variable "hotel_id" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-building me-2\"></i>
\t\t\t\t\t\t<strong>Venue:</strong>
\t\t\t\t\t\t#";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["location_id"]) || array_key_exists("location_id", $context) ? $context["location_id"] : (function () { throw new RuntimeError('Variable "location_id" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 51
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 51, $this->source); })()))) {
            // line 52
            yield "\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"alert alert-info text-center py-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<i class=\"fas fa-bus-slash fa-3x text-primary mb-3\"></i>
\t\t\t\t\t<h4>No transport options available</h4>
\t\t\t\t\t<p class=\"mb-0\">Please check back later or contact support</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 60
            yield "\t\t\t<div class=\"row g-4\">
\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 61, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 62
                yield "\t\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.1 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62) * 0.1)), "html", null, true);
                yield "s\">
\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t<div class=\"card-img-top d-flex align-items-center justify-content-center\" style=\"height: 200px; overflow: hidden;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transportImages"]) || array_key_exists("transportImages", $context) ? $context["transportImages"] : (function () { throw new RuntimeError('Variable "transportImages" does not exist.', 65, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 65) == CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 65))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 65), "html", null, true);
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "\" 
\t\t\t\t\t\t\t\t\t alt=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 66), "html", null, true);
                yield "\" 
\t\t\t\t\t\t\t\t\t class=\"img-fluid\" 
\t\t\t\t\t\t\t\t\t style=\"object-fit: cover; width: 100%; height: 100%;\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-capitalize text-primary\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 72), "html", null, true);
                yield "</h5>
\t\t\t\t\t\t\t\t<div class=\"card-text mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tag me-1\"></i>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 76), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\$";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "price", [], "any", false, false, false, 79), 2), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                // line 83
                if (CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 83)) {
                    // line 84
                    yield "\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle me-2\"></i>Description
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 88), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 91
                yield "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_select", ["transport_id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 95
$context["transport"], "transportId", [], "any", false, false, false, 95), "hotel_id" =>                 // line 96
(isset($context["hotel_id"]) || array_key_exists("hotel_id", $context) ? $context["hotel_id"] : (function () { throw new RuntimeError('Variable "hotel_id" does not exist.', 96, $this->source); })()), "hotel_price" =>                 // line 97
(isset($context["hotel_price"]) || array_key_exists("hotel_price", $context) ? $context["hotel_price"] : (function () { throw new RuntimeError('Variable "hotel_price" does not exist.', 97, $this->source); })()), "flight_id" =>                 // line 98
(isset($context["flight_id"]) || array_key_exists("flight_id", $context) ? $context["flight_id"] : (function () { throw new RuntimeError('Variable "flight_id" does not exist.', 98, $this->source); })()), "flight_price" =>                 // line 99
(isset($context["flight_price"]) || array_key_exists("flight_price", $context) ? $context["flight_price"] : (function () { throw new RuntimeError('Variable "flight_price" does not exist.', 99, $this->source); })()), "location_id" =>                 // line 100
(isset($context["location_id"]) || array_key_exists("location_id", $context) ? $context["location_id"] : (function () { throw new RuntimeError('Variable "location_id" does not exist.', 100, $this->source); })()), "userid" =>                 // line 101
(isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 101, $this->source); })()), "id_evenement" =>                 // line 102
(isset($context["id_evenement"]) || array_key_exists("id_evenement", $context) ? $context["id_evenement"] : (function () { throw new RuntimeError('Variable "id_evenement" does not exist.', 102, $this->source); })()), "date_debut" =>                 // line 103
(isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 103, $this->source); })()), "date_fin" =>                 // line 104
(isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 104, $this->source); })()), "nombre_invite" =>                 // line 105
(isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 105, $this->source); })())]), "html", null, true);
                // line 106
                yield "\" class=\"btn btn-primary w-100\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\tSelect Transport
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "\t\t\t</div>
\t\t";
        }
        // line 117
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
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

        // line 121
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "gestion_de_reservation/transport/index.html.twig";
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
        return array (  357 => 129,  353 => 128,  349 => 127,  345 => 126,  341 => 125,  337 => 124,  330 => 121,  317 => 120,  305 => 117,  301 => 115,  279 => 106,  277 => 105,  276 => 104,  275 => 103,  274 => 102,  273 => 101,  272 => 100,  271 => 99,  270 => 98,  269 => 97,  268 => 96,  267 => 95,  266 => 94,  261 => 91,  255 => 88,  249 => 84,  247 => 83,  240 => 79,  234 => 76,  227 => 72,  218 => 66,  205 => 65,  198 => 62,  181 => 61,  178 => 60,  168 => 52,  166 => 51,  158 => 46,  151 => 42,  144 => 38,  134 => 31,  127 => 27,  122 => 25,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Select Transport Option - MeetNTrip
{% endblock %}

{% block body %}
\t<!-- Spinner Start -->
\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t<div class=\"spinner-border text-secondary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t</div>
\t</div>
\t<!-- Spinner End -->

\t<div class=\"container py-5\">
\t\t<h1 class=\"text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Select Transport Option</h1>

\t\t<div class=\"bg-light rounded p-4 mb-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h4 class=\"text-primary mb-3\">Event Details</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"far fa-calendar-alt me-2\"></i>
\t\t\t\t\t\t<strong>Dates:</strong>
\t\t\t\t\t\t{{ date_debut }}
\t\t\t\t\t\tto
\t\t\t\t\t\t{{ date_fin }}</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-users me-2\"></i>
\t\t\t\t\t\t<strong>Guests:</strong>
\t\t\t\t\t\t{{ nombre_invite }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h4 class=\"text-primary mb-3\">Current Selection</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-plane me-2\"></i>
\t\t\t\t\t\t<strong>Flight:</strong>
\t\t\t\t\t\t#{{ flight_id }}</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-hotel me-2\"></i>
\t\t\t\t\t\t<strong>Hotel:</strong>
\t\t\t\t\t\t#{{ hotel_id }}</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fas fa-building me-2\"></i>
\t\t\t\t\t\t<strong>Venue:</strong>
\t\t\t\t\t\t#{{ location_id }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{% if transports is empty %}
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"alert alert-info text-center py-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<i class=\"fas fa-bus-slash fa-3x text-primary mb-3\"></i>
\t\t\t\t\t<h4>No transport options available</h4>
\t\t\t\t\t<p class=\"mb-0\">Please check back later or contact support</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"row g-4\">
\t\t\t\t{% for transport in transports %}
\t\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"{{ 0.1 + (loop.index * 0.1) }}s\">
\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t<div class=\"card-img-top d-flex align-items-center justify-content-center\" style=\"height: 200px; overflow: hidden;\">
\t\t\t\t\t\t\t\t<img src=\"{% for t in transportImages %}{% if t.type == transport.type %}{{ t.image }}{% endif %}{% endfor %}\" 
\t\t\t\t\t\t\t\t\t alt=\"{{ transport.type }}\" 
\t\t\t\t\t\t\t\t\t class=\"img-fluid\" 
\t\t\t\t\t\t\t\t\t style=\"object-fit: cover; width: 100%; height: 100%;\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-capitalize text-primary\">{{ transport.type }}</h5>
\t\t\t\t\t\t\t\t<div class=\"card-text mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tag me-1\"></i>{{ transport.type }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\${{ transport.price|number_format(2) }}
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{% if transport.description %}
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light p-3 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle me-2\"></i>Description
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">{{ transport.description }}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_transport_select', { 
\t\t\t\t\t\t\t\t\t\t'transport_id': transport.transportId, 
\t\t\t\t\t\t\t\t\t\t'hotel_id': hotel_id, 
\t\t\t\t\t\t\t\t\t\t'hotel_price': hotel_price, 
\t\t\t\t\t\t\t\t\t\t'flight_id': flight_id, 
\t\t\t\t\t\t\t\t\t\t'flight_price': flight_price, 
\t\t\t\t\t\t\t\t\t\t'location_id': location_id, 
\t\t\t\t\t\t\t\t\t\t'userid': userid, 
\t\t\t\t\t\t\t\t\t\t'id_evenement': id_evenement, 
\t\t\t\t\t\t\t\t\t\t'date_debut': date_debut, 
\t\t\t\t\t\t\t\t\t\t'date_fin': date_fin, 
\t\t\t\t\t\t\t\t\t\t'nombre_invite': nombre_invite 
\t\t\t\t\t\t\t\t\t}) }}\" class=\"btn btn-primary w-100\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\tSelect Transport
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t{% endif %}
\t</div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"{{ asset('assets/lib/wow/wow.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/lib/easing/easing.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/lib/waypoints/waypoints.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/lib/counterup/counterup.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/main.js') }}\"></script>
{% endblock %}
", "gestion_de_reservation/transport/index.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\transport\\index.html.twig");
    }
}
