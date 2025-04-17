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

/* gestion_de_reservation/evenement/show.html.twig */
class __TwigTemplate_fea8d26c503e6560e48fc438f5a8ae8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_de_reservation/evenement/show.html.twig", 1);
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

        yield "Event Details -
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "\t<div class=\"container py-5\">
\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<h1 class=\"mb-5\">Event Details</h1>
\t\t</div>

\t\t";
        // line 14
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "\t\t\t<div class=\"alert alert-success alert-dismissible fade show\">
\t\t\t\t";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\">
\t\t\t\t";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
\t\t<div class=\"card shadow-sm\">
\t\t\t";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 29, $this->source); })()), "imagePath", [], "any", false, false, false, 29)) {
            // line 30
            yield "\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 30, $this->source); })()), "imagePath", [], "any", false, false, false, 30))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "\" style=\"height: 300px; object-fit: cover;\">
\t\t\t";
        } else {
            // line 32
            yield "\t\t\t\t<div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 300px;\">
\t\t\t\t\t<i class=\"bi bi-calendar-event text-secondary\" style=\"font-size: 5rem;\"></i>
\t\t\t\t</div>
\t\t\t";
        }
        // line 36
        yield "
\t\t\t<div class=\"card-body\">
\t\t\t\t<h2 class=\"card-title mb-4\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
        yield "</h2>
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-tag me-2\"></i>Type:</strong>
\t\t\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt me-2\"></i>Location:</strong>
\t\t\t\t\t\t\t";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "lieuEvenement", [], "any", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 48), "html", null, true)) : ("Not specified"));
        yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-range me-2\"></i>Dates:</strong>
\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 52, $this->source); })()), "dateDebut", [], "any", false, false, false, 52), "M d, Y"), "html", null, true);
        yield "
\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 54, $this->source); })()), "dateFin", [], "any", false, false, false, 54), "M d, Y"), "html", null, true);
        yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-people me-2\"></i>Guests:</strong>
\t\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 60, $this->source); })()), "nombreInvite", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-cash-coin me-2\"></i>Budget:</strong>
\t\t\t\t\t\t\t";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 64, $this->source); })()), "budgetPrevu", [], "any", false, false, false, 64)) {
            // line 65
            yield "\t\t\t\t\t\t\t\t\$";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 65, $this->source); })()), "budgetPrevu", [], "any", false, false, false, 65), 2, ".", ","), "html", null, true);
            yield "
\t\t\t\t\t\t\t";
        } else {
            // line 67
            yield "\t\t\t\t\t\t\t\tNot specified
\t\t\t\t\t\t\t";
        }
        // line 69
        yield "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73)) {
            // line 74
            yield "\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h5 class=\"text-primary\">Description</h5>
\t\t\t\t\t\t<p>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 79
        yield "
\t\t\t\t";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 80, $this->source); })()), "activities", [], "any", false, false, false, 80)) {
            // line 81
            yield "\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h5 class=\"text-primary\">Planned Activities</h5>
\t\t\t\t\t\t<p>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 83, $this->source); })()), "activities", [], "any", false, false, false, 83), "html", null, true);
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 86
        yield "
\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t<a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"btn btn-outline-secondary\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-left me-1\"></i>
\t\t\t\t\t\tBack to List
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_select", ["event_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle me-1\"></i>
\t\t\t\t\t\tSelect This Event
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "gestion_de_reservation/evenement/show.html.twig";
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
        return array (  274 => 92,  267 => 88,  263 => 86,  257 => 83,  253 => 81,  251 => 80,  248 => 79,  242 => 76,  238 => 74,  236 => 73,  230 => 69,  226 => 67,  220 => 65,  218 => 64,  211 => 60,  202 => 54,  197 => 52,  190 => 48,  183 => 44,  174 => 38,  170 => 36,  164 => 32,  156 => 30,  154 => 29,  150 => 27,  140 => 23,  137 => 22,  133 => 21,  130 => 20,  120 => 16,  117 => 15,  112 => 14,  105 => 8,  92 => 7,  79 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event Details -
\t{{ evenement.nom }}
{% endblock %}

{% block body %}
\t<div class=\"container py-5\">
\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<h1 class=\"mb-5\">Event Details</h1>
\t\t</div>

\t\t{# Flash messages #}
\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success alert-dismissible fade show\">
\t\t\t\t{{ message }}
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t{% endfor %}

\t\t{% for message in app.flashes('error') %}
\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\">
\t\t\t\t{{ message }}
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t{% endfor %}

\t\t<div class=\"card shadow-sm\">
\t\t\t{% if evenement.imagePath %}
\t\t\t\t<img src=\"{{ asset('uploads/events/' ~ evenement.imagePath) }}\" class=\"card-img-top\" alt=\"{{ evenement.nom }}\" style=\"height: 300px; object-fit: cover;\">
\t\t\t{% else %}
\t\t\t\t<div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 300px;\">
\t\t\t\t\t<i class=\"bi bi-calendar-event text-secondary\" style=\"font-size: 5rem;\"></i>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"card-body\">
\t\t\t\t<h2 class=\"card-title mb-4\">{{ evenement.nom }}</h2>
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-tag me-2\"></i>Type:</strong>
\t\t\t\t\t\t\t{{ evenement.type }}</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt me-2\"></i>Location:</strong>
\t\t\t\t\t\t\t{{ evenement.lieuEvenement ?? 'Not specified' }}</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-range me-2\"></i>Dates:</strong>
\t\t\t\t\t\t\t{{ evenement.dateDebut|date('M d, Y') }}
\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t{{ evenement.dateFin|date('M d, Y') }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-people me-2\"></i>Guests:</strong>
\t\t\t\t\t\t\t{{ evenement.nombreInvite }}</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<i class=\"bi bi-cash-coin me-2\"></i>Budget:</strong>
\t\t\t\t\t\t\t{% if evenement.budgetPrevu %}
\t\t\t\t\t\t\t\t\${{ evenement.budgetPrevu|number_format(2, '.', ',') }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tNot specified
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% if evenement.description %}
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h5 class=\"text-primary\">Description</h5>
\t\t\t\t\t\t<p>{{ evenement.description }}</p>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if evenement.activities %}
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<h5 class=\"text-primary\">Planned Activities</h5>
\t\t\t\t\t\t<p>{{ evenement.activities }}</p>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t<a href=\"{{ path('app_evenement_index') }}\" class=\"btn btn-outline-secondary\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-left me-1\"></i>
\t\t\t\t\t\tBack to List
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_evenement_select', {'event_id': evenement.id}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle me-1\"></i>
\t\t\t\t\t\tSelect This Event
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "gestion_de_reservation/evenement/show.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\gestion_de_reservation\\evenement\\show.html.twig");
    }
}
