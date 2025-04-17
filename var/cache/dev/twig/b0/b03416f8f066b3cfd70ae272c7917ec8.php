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

/* gestion_de_reservation/booking/index.html.twig */
class __TwigTemplate_7481a58df18639466ac7ae69951aea89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/index.html.twig", 1);
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

        yield "Complete Your Booking - MeetNTrip
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
\t\t<h1 class=\"text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Complete Your Booking</h1>

\t\t<div class=\"card shadow-lg mb-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t<div class=\"card-header bg-primary text-white py-3\">
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t<i class=\"fas fa-clipboard-list me-2\"></i>
\t\t\t\t\tBooking Summary</h2>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t";
        // line 26
        if ((isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 26, $this->source); })())) {
            // line 27
            yield "\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plane me-2\"></i>
\t\t\t\t\t\t\t\t\tFlight</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Airline:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 35, $this->source); })()), "airline", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Destination:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 38, $this->source); })()), "destination", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Departure:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 41
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 41, $this->source); })()), "departureTime", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 41, $this->source); })()), "departureTime", [], "any", false, false, false, 41), "Y-m-d H:i"), "html", null, true)) : ("N/A"));
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Return:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 44
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 44, $this->source); })()), "backTime", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 44, $this->source); })()), "backTime", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true)) : ("N/A"));
            yield "</p>
\t\t\t\t\t\t\t\t\t<p class=\"h5 text-end\">
\t\t\t\t\t\t\t\t\t\t<strong>Price:</strong>
\t\t\t\t\t\t\t\t\t\t\$";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new RuntimeError('Variable "flight" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47), 2), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 52
        yield "
\t\t\t\t\t";
        // line 53
        if ((isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 53, $this->source); })())) {
            // line 54
            yield "\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-hotel me-2\"></i>
\t\t\t\t\t\t\t\t\tHotel</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Name:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Location:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 65, $this->source); })()), "location", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Price per night:</strong>
\t\t\t\t\t\t\t\t\t\t\$";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 68, $this->source); })()), "pricePerNight", [], "any", false, false, false, 68), 2), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Rating:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 72, $this->source); })()), "rating", [], "any", false, false, false, 72))) {
                    // line 73
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 75
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-star text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 77
                yield "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 83
        yield "
\t\t\t\t\t";
        // line 84
        if ((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 84, $this->source); })())) {
            // line 85
            yield "\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-building me-2\"></i>
\t\t\t\t\t\t\t\t\tVenue</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Name:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 93, $this->source); })()), "name", [], "any", false, false, false, 93), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Price per day:</strong>
\t\t\t\t\t\t\t\t\t\t\$";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 96, $this->source); })()), "pricePerDay", [], "any", false, false, false, 96), 2), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 97, $this->source); })()), "address", [], "any", false, false, false, 97)) {
                // line 98
                yield "\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<strong>Address:</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 100, $this->source); })()), "address", [], "any", false, false, false, 100), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            // line 102
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 106
        yield "
\t\t\t\t\t";
        // line 107
        if ((isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 107, $this->source); })())) {
            // line 108
            yield "\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112) == "Bus")) {
                yield "fa-bus
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 113
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 113, $this->source); })()), "type", [], "any", false, false, false, 113) == "Limousine")) {
                yield "fa-car
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
(isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 114, $this->source); })()), "type", [], "any", false, false, false, 114) == "Shuttle")) {
                yield "fa-shuttle-van
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 115
                yield "fa-taxi";
            }
            // line 116
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tme-2\"></i>
\t\t\t\t\t\t\t\t\tTransport
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Type:</strong>
\t\t\t\t\t\t\t\t\t\t";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 122, $this->source); })()), "type", [], "any", false, false, false, 122), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Price:</strong>
\t\t\t\t\t\t\t\t\t\t\$";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 125, $this->source); })()), "price", [], "any", false, false, false, 125), 2), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t";
            // line 126
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126)) {
                // line 127
                yield "\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<strong>Details:</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["transport"]) || array_key_exists("transport", $context) ? $context["transport"] : (function () { throw new RuntimeError('Variable "transport" does not exist.', 129, $this->source); })()), "description", [], "any", false, false, false, 129), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
            }
            // line 131
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 135
        yield "\t\t\t\t</div>

\t\t\t\t<div class=\"mt-4 p-3 bg-light rounded\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-primary\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle me-2\"></i>
\t\t\t\t\t\t\t\tEvent Details</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Dates:</strong>
\t\t\t\t\t\t\t\t";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\t\t\tto
\t\t\t\t\t\t\t\t";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Number of Guests:</strong>
\t\t\t\t\t\t\t\t";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 150, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 text-end\">
\t\t\t\t\t\t\t<h2 class=\"text-primary\">Total: \$";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["price_total"]) || array_key_exists("price_total", $context) ? $context["price_total"] : (function () { throw new RuntimeError('Variable "price_total" does not exist.', 153, $this->source); })()), 2), "html", null, true);
        yield "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card shadow-lg wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t<div class=\"card-header bg-primary text-white py-3\">
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t<i class=\"fas fa-edit me-2\"></i>
\t\t\t\t\tFinalize Booking</h2>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"POST\" action=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_save");
        yield "\">
\t\t\t\t\t";
        // line 169
        yield "\t\t\t\t\t<input type=\"hidden\" name=\"flight_id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flight_id"]) || array_key_exists("flight_id", $context) ? $context["flight_id"] : (function () { throw new RuntimeError('Variable "flight_id" does not exist.', 169, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"hotel_id\" value=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hotel_id"]) || array_key_exists("hotel_id", $context) ? $context["hotel_id"] : (function () { throw new RuntimeError('Variable "hotel_id" does not exist.', 170, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"transport_id\" value=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transport_id"]) || array_key_exists("transport_id", $context) ? $context["transport_id"] : (function () { throw new RuntimeError('Variable "transport_id" does not exist.', 171, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"location_id\" value=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["location_id"]) || array_key_exists("location_id", $context) ? $context["location_id"] : (function () { throw new RuntimeError('Variable "location_id" does not exist.', 172, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"userid\" value=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 173, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t";
        // line 175
        yield "\t\t\t\t\t<input type=\"hidden\" name=\"id_evenement\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_evenement"]) || array_key_exists("id_evenement", $context) ? $context["id_evenement"] : (function () { throw new RuntimeError('Variable "id_evenement" does not exist.', 175, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"date_debut\" value=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 176, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"date_fin\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 177, $this->source); })()), "html", null, true);
        yield "\">
\t\t\t\t\t<input type=\"hidden\" name=\"nombre_invite\" value=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 178, $this->source); })()), "html", null, true);
        yield "\">

\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<label for=\"special_requests\" class=\"form-label\">
\t\t\t\t\t\t\t<i class=\"fas fa-comment-dots me-2\"></i>
\t\t\t\t\t\t\tSpecial Requests</label>
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"special_requests\" name=\"special_requests\" rows=\"3\" placeholder=\"Any special requirements or notes...\"></textarea>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-check mb-4\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"terms\" required>
\t\t\t\t\t\t<label class=\"form-check-label\" for=\"terms\">
\t\t\t\t\t\t\t<i class=\"fas fa-file-signature me-2\"></i>
\t\t\t\t\t\t\tI agree to the terms and conditions
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle me-2\"></i>
\t\t\t\t\t\t\tConfirm Booking
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 207
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

        // line 208
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 216
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
        return "gestion_de_reservation/booking/index.html.twig";
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
        return array (  495 => 216,  491 => 215,  487 => 214,  483 => 213,  479 => 212,  475 => 211,  468 => 208,  455 => 207,  416 => 178,  412 => 177,  408 => 176,  403 => 175,  399 => 173,  395 => 172,  391 => 171,  387 => 170,  382 => 169,  378 => 167,  361 => 153,  355 => 150,  349 => 147,  344 => 145,  332 => 135,  326 => 131,  321 => 129,  317 => 127,  315 => 126,  311 => 125,  305 => 122,  297 => 116,  294 => 115,  289 => 114,  285 => 113,  281 => 112,  275 => 108,  273 => 107,  270 => 106,  264 => 102,  259 => 100,  255 => 98,  253 => 97,  249 => 96,  243 => 93,  233 => 85,  231 => 84,  228 => 83,  221 => 78,  215 => 77,  211 => 75,  207 => 73,  204 => 72,  200 => 71,  194 => 68,  188 => 65,  182 => 62,  172 => 54,  170 => 53,  167 => 52,  159 => 47,  153 => 44,  147 => 41,  141 => 38,  135 => 35,  125 => 27,  123 => 26,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Complete Your Booking - MeetNTrip
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
\t\t<h1 class=\"text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Complete Your Booking</h1>

\t\t<div class=\"card shadow-lg mb-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t<div class=\"card-header bg-primary text-white py-3\">
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t<i class=\"fas fa-clipboard-list me-2\"></i>
\t\t\t\t\tBooking Summary</h2>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t{% if flight %}
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plane me-2\"></i>
\t\t\t\t\t\t\t\t\tFlight</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Airline:</strong>
\t\t\t\t\t\t\t\t\t\t{{ flight.airline }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Destination:</strong>
\t\t\t\t\t\t\t\t\t\t{{ flight.destination }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Departure:</strong>
\t\t\t\t\t\t\t\t\t\t{{ flight.departureTime ? flight.departureTime|date('Y-m-d H:i') : 'N/A' }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Return:</strong>
\t\t\t\t\t\t\t\t\t\t{{ flight.backTime ? flight.backTime|date('Y-m-d H:i') : 'N/A' }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"h5 text-end\">
\t\t\t\t\t\t\t\t\t\t<strong>Price:</strong>
\t\t\t\t\t\t\t\t\t\t\${{ flight.price|number_format(2) }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if hotel %}
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-hotel me-2\"></i>
\t\t\t\t\t\t\t\t\tHotel</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Name:</strong>
\t\t\t\t\t\t\t\t\t\t{{ hotel.name }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Location:</strong>
\t\t\t\t\t\t\t\t\t\t{{ hotel.location }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Price per night:</strong>
\t\t\t\t\t\t\t\t\t\t\${{ hotel.pricePerNight|number_format(2) }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Rating:</strong>
\t\t\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t\t\t{% if i <= hotel.rating %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-star text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if location %}
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-building me-2\"></i>
\t\t\t\t\t\t\t\t\tVenue</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Name:</strong>
\t\t\t\t\t\t\t\t\t\t{{ location.name }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Price per day:</strong>
\t\t\t\t\t\t\t\t\t\t\${{ location.pricePerDay|number_format(2) }}</p>
\t\t\t\t\t\t\t\t\t{% if location.address %}
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<strong>Address:</strong>
\t\t\t\t\t\t\t\t\t\t\t{{ location.address }}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if transport %}
\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fas
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if transport.type == 'Bus' %}fa-bus
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif transport.type == 'Limousine' %}fa-car
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif transport.type == 'Shuttle' %}fa-shuttle-van
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}fa-taxi{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tme-2\"></i>
\t\t\t\t\t\t\t\t\tTransport
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Type:</strong>
\t\t\t\t\t\t\t\t\t\t{{ transport.type }}</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Price:</strong>
\t\t\t\t\t\t\t\t\t\t\${{ transport.price|number_format(2) }}</p>
\t\t\t\t\t\t\t\t\t{% if transport.description %}
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<strong>Details:</strong>
\t\t\t\t\t\t\t\t\t\t\t{{ transport.description }}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"mt-4 p-3 bg-light rounded\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h4 class=\"text-primary\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle me-2\"></i>
\t\t\t\t\t\t\t\tEvent Details</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Dates:</strong>
\t\t\t\t\t\t\t\t{{ date_debut }}
\t\t\t\t\t\t\t\tto
\t\t\t\t\t\t\t\t{{ date_fin }}</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Number of Guests:</strong>
\t\t\t\t\t\t\t\t{{ nombre_invite }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 text-end\">
\t\t\t\t\t\t\t<h2 class=\"text-primary\">Total: \${{ price_total|number_format(2) }}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"card shadow-lg wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t<div class=\"card-header bg-primary text-white py-3\">
\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t<i class=\"fas fa-edit me-2\"></i>
\t\t\t\t\tFinalize Booking</h2>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"POST\" action=\"{{ path('app_booking_save') }}\">
\t\t\t\t\t{# Hidden fields to pass all selection data #}
\t\t\t\t\t<input type=\"hidden\" name=\"flight_id\" value=\"{{ flight_id }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"hotel_id\" value=\"{{ hotel_id }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"transport_id\" value=\"{{ transport_id }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"location_id\" value=\"{{ location_id }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"userid\" value=\"{{ userid }}\">
\t\t\t\t\t{# Add hidden fields for event data #}
\t\t\t\t\t<input type=\"hidden\" name=\"id_evenement\" value=\"{{ id_evenement }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"date_debut\" value=\"{{ date_debut }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"date_fin\" value=\"{{ date_fin }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"nombre_invite\" value=\"{{ nombre_invite }}\">

\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<label for=\"special_requests\" class=\"form-label\">
\t\t\t\t\t\t\t<i class=\"fas fa-comment-dots me-2\"></i>
\t\t\t\t\t\t\tSpecial Requests</label>
\t\t\t\t\t\t<textarea class=\"form-control\" id=\"special_requests\" name=\"special_requests\" rows=\"3\" placeholder=\"Any special requirements or notes...\"></textarea>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-check mb-4\">
\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"terms\" required>
\t\t\t\t\t\t<label class=\"form-check-label\" for=\"terms\">
\t\t\t\t\t\t\t<i class=\"fas fa-file-signature me-2\"></i>
\t\t\t\t\t\t\tI agree to the terms and conditions
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn-lg px-5 py-3\">
\t\t\t\t\t\t\t<i class=\"fas fa-check-circle me-2\"></i>
\t\t\t\t\t\t\tConfirm Booking
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
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
", "gestion_de_reservation/booking/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\index.html.twig");
    }
}
