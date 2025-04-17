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

/* gestion_de_reservation/flight/index.html.twig */
class __TwigTemplate_92c0f5d292013da0bd56491cd94f0d4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/flight/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/flight/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/flight/index.html.twig", 1);
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

        yield "Flights - MeetNTrip
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
\t\t<h1 class=\"text-center mb-4\">Available Flights</h1>

\t\t<!-- Filter Buttons -->
\t\t<div class=\"mb-4 text-center\">
\t\t\t<button class=\"btn btn-primary mx-1 filter-btn\" data-category=\"all\">All</button>
\t\t\t<button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Economy\">Economy</button>
\t\t\t<button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Business\">Business</button>
\t\t\t<button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"First Class\">First Class</button>
\t\t</div>

\t\t<div class=\"flight-info mb-4 p-4 bg-light rounded\">
\t\t\t<p><strong>Destination:</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t<p><strong>Event Dates:</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 28, $this->source); })()), "Y-m-d"), "html", null, true);
        yield " to ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 28, $this->source); })()), "Y-m-d"), "html", null, true);
        yield "</p>
\t\t\t<p><strong>Number of Guests:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t";
        // line 30
        if ((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })())) {
            // line 31
            yield "\t\t\t\t<p><strong>Event Name:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
\t\t\t";
        }
        // line 33
        yield "\t\t</div>

\t\t<div class=\"row g-4\" id=\"flight-list\">
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new RuntimeError('Variable "flights" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 37
            yield "\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp flight-card\" data-category=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "type", [], "any", false, false, false, 37), "html", null, true);
            yield "\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t";
            // line 41
            yield "\t\t\t\t\t\t\t<div class=\"airline-logo-container mb-3\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["airlineLogos"]) || array_key_exists("airlineLogos", $context) ? $context["airlineLogos"] : (function () { throw new RuntimeError('Variable "airlineLogos" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["airline"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["airline"], "airline", [], "any", false, false, false, 42) == CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 42))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["airline"], "logo", [], "any", false, false, false, 42), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['airline'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\" 
\t\t\t\t\t\t\t\t\t alt=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 43), "html", null, true);
            yield " logo\" 
\t\t\t\t\t\t\t\t\t class=\"img-fluid rounded-top\" 
\t\t\t\t\t\t\t\t\t style=\"height: 200px; object-fit: cover;\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 49
            yield "\t\t\t\t\t\t\t<h5 class=\"card-title text-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "destination", [], "any", false, false, false, 49), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t<div class=\"card-text mb-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plane fa-fw me-2 text-secondary\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 53), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light p-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Departure</small>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "departureTime", [], "any", false, false, false, 60), "H:i"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light p-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Return</small>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "backTime", [], "any", false, false, false, 66), "H:i"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mt-3\">
\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tag me-1\"></i>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "type", [], "any", false, false, false, 73), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small\">Total Price</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success mb-0\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "price", [], "any", false, false, false, 77), 2), "html", null, true);
            yield " TND </h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_flight_select", ["flight_id" => CoreExtension::getAttribute($this->env, $this->source,             // line 84
$context["flight"], "flightId", [], "any", false, false, false, 84), "city" =>             // line 85
(isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 85, $this->source); })()), "date_debut" =>             // line 86
(isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 86, $this->source); })()), "date_fin" =>             // line 87
(isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 87, $this->source); })()), "nombre_invite" =>             // line 88
(isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 88, $this->source); })()), "userid" =>             // line 89
(isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 89, $this->source); })()), "id_evenement" =>             // line 90
(isset($context["id_evenement"]) || array_key_exists("id_evenement", $context) ? $context["id_evenement"] : (function () { throw new RuntimeError('Variable "id_evenement" does not exist.', 90, $this->source); })())]), "html", null, true);
            // line 91
            yield "\" class=\"btn btn-primary w-100\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\tSelect Flight
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        // line 99
        if (!$context['_iterated']) {
            // line 100
            yield "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-info text-center py-4\">
\t\t\t\t\t\t<i class=\"fas fa-plane-slash fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h4>No flights available for this destination</h4>
\t\t\t\t\t\t<p class=\"mb-0\">Please try different search criteria</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flight'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        // line 113
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<script>
\t\tdocument.querySelectorAll('.filter-btn').forEach(function(btn) {
\t\t\tbtn.addEventListener('click', function() {
\t\t\t\tvar category = this.getAttribute('data-category');
\t\t\t\tdocument.querySelectorAll('.filter-btn').forEach(function(b) {
\t\t\t\t\tb.classList.remove('btn-primary');
\t\t\t\t\tb.classList.add('btn-outline-primary');
\t\t\t\t});
\t\t\t\tthis.classList.remove('btn-outline-primary');
\t\t\t\tthis.classList.add('btn-primary');
\t\t\t\tdocument.querySelectorAll('.flight-card').forEach(function(card) {
\t\t\t\t\tif (category === 'all' || card.getAttribute('data-category') === category) {
\t\t\t\t\t\tcard.style.display = '';
\t\t\t\t\t} else {
\t\t\t\t\t\tcard.style.display = 'none';
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
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
        return "gestion_de_reservation/flight/index.html.twig";
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
        return array (  302 => 113,  289 => 112,  276 => 108,  263 => 100,  261 => 99,  249 => 91,  247 => 90,  246 => 89,  245 => 88,  244 => 87,  243 => 86,  242 => 85,  241 => 84,  240 => 83,  231 => 77,  224 => 73,  214 => 66,  205 => 60,  195 => 53,  187 => 49,  179 => 43,  166 => 42,  163 => 41,  156 => 37,  151 => 36,  146 => 33,  140 => 31,  138 => 30,  134 => 29,  128 => 28,  124 => 27,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Flights - MeetNTrip
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
\t\t<h1 class=\"text-center mb-4\">Available Flights</h1>

\t\t<!-- Filter Buttons -->
\t\t<div class=\"mb-4 text-center\">
\t\t\t<button class=\"btn btn-primary mx-1 filter-btn\" data-category=\"all\">All</button>
\t\t\t<button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Economy\">Economy</button>
\t\t\t<button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Business\">Business</button>
\t\t\t<button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"First Class\">First Class</button>
\t\t</div>

\t\t<div class=\"flight-info mb-4 p-4 bg-light rounded\">
\t\t\t<p><strong>Destination:</strong> {{ city }}</p>
\t\t\t<p><strong>Event Dates:</strong> {{ date_debut|date('Y-m-d') }} to {{ date_fin|date('Y-m-d') }}</p>
\t\t\t<p><strong>Number of Guests:</strong> {{ nombre_invite }}</p>
\t\t\t{% if event %}
\t\t\t\t<p><strong>Event Name:</strong> {{ event.nom }}</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"row g-4\" id=\"flight-list\">
\t\t\t{% for flight in flights %}
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp flight-card\" data-category=\"{{ flight.type }}\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t{# Airline Logo Section #}
\t\t\t\t\t\t\t<div class=\"airline-logo-container mb-3\">
\t\t\t\t\t\t\t\t<img src=\"{% for airline in airlineLogos %}{% if airline.airline == flight.airline %}{{ airline.logo }}{% endif %}{% endfor %}\" 
\t\t\t\t\t\t\t\t\t alt=\"{{ flight.airline }} logo\" 
\t\t\t\t\t\t\t\t\t class=\"img-fluid rounded-top\" 
\t\t\t\t\t\t\t\t\t style=\"height: 200px; object-fit: cover;\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# Flight Details #}
\t\t\t\t\t\t\t<h5 class=\"card-title text-primary\">{{ flight.destination }}</h5>
\t\t\t\t\t\t\t<div class=\"card-text mb-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-2\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plane fa-fw me-2 text-secondary\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">{{ flight.airline }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light p-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Departure</small>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">{{ flight.departureTime|date('H:i') }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light p-2 rounded\">
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Return</small>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">{{ flight.backTime|date('H:i') }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mt-3\">
\t\t\t\t\t\t\t\t\t<div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-tag me-1\"></i>{{ flight.type }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small\">Total Price</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-success mb-0\">{{ flight.price|number_format(2) }} TND </h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_flight_select', { 
\t\t\t\t\t\t\t\t\t'flight_id': flight.flightId, 
\t\t\t\t\t\t\t\t\t'city': city, 
\t\t\t\t\t\t\t\t\t'date_debut': date_debut, 
\t\t\t\t\t\t\t\t\t'date_fin': date_fin, 
\t\t\t\t\t\t\t\t\t'nombre_invite': nombre_invite, 
\t\t\t\t\t\t\t\t\t'userid': userid, 
\t\t\t\t\t\t\t\t\t'id_evenement': id_evenement 
\t\t\t\t\t\t\t\t}) }}\" class=\"btn btn-primary w-100\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\tSelect Flight
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-info text-center py-4\">
\t\t\t\t\t\t<i class=\"fas fa-plane-slash fa-3x text-primary mb-3\"></i>
\t\t\t\t\t\t<h4>No flights available for this destination</h4>
\t\t\t\t\t\t<p class=\"mb-0\">Please try different search criteria</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script>
\t\tdocument.querySelectorAll('.filter-btn').forEach(function(btn) {
\t\t\tbtn.addEventListener('click', function() {
\t\t\t\tvar category = this.getAttribute('data-category');
\t\t\t\tdocument.querySelectorAll('.filter-btn').forEach(function(b) {
\t\t\t\t\tb.classList.remove('btn-primary');
\t\t\t\t\tb.classList.add('btn-outline-primary');
\t\t\t\t});
\t\t\t\tthis.classList.remove('btn-outline-primary');
\t\t\t\tthis.classList.add('btn-primary');
\t\t\t\tdocument.querySelectorAll('.flight-card').forEach(function(card) {
\t\t\t\t\tif (category === 'all' || card.getAttribute('data-category') === category) {
\t\t\t\t\t\tcard.style.display = '';
\t\t\t\t\t} else {
\t\t\t\t\t\tcard.style.display = 'none';
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "gestion_de_reservation/flight/index.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\flight\\index.html.twig");
    }
}
