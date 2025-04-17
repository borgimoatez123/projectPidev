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

/* gestion_de_reservation/evenement/index.html.twig */
class __TwigTemplate_8975a944d62e9cda5f6589b6ade4f61e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/evenement/index.html.twig", 1);
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

        yield "Event Management - MeetNTrip
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
\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<h1 class=\"mb-5\">Available Events</h1>
\t\t</div>

\t\t";
        // line 21
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", ["success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            yield "\t\t\t<div class=\"alert alert-success alert-dismissible fade show\">
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
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\">
\t\t\t\t";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
\t\t<div class=\"row g-4\">
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 37
            yield "\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imagePath", [], "any", false, false, false, 39)) {
                // line 40
                yield "\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imagePath", [], "any", false, false, false, 40))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 40), "html", null, true);
                yield "\" style=\"height: 200px; object-fit: cover;\">
\t\t\t\t\t\t";
            } else {
                // line 42
                yield "\t\t\t\t\t\t\t<div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-event text-secondary\" style=\"font-size: 3rem;\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 46
            yield "
\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t<div class=\"card-text mb-3\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-tag me-2\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt me-2\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 55
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieuEvenement", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieuEvenement", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieuEvenement", [], "any", false, false, false, 55), "html", null, true)) : ("Not specified"));
            yield "</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-range me-2\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 58), "M d, Y"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 60), "M d, Y"), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people me-2\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nombreInvite", [], "any", false, false, false, 63), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\tguests</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-cash-coin me-2\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "budgetPrevu", [], "any", false, false, false, 67)) {
                // line 68
                yield "\t\t\t\t\t\t\t\t\t\t\$";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "budgetPrevu", [], "any", false, false, false, 68), 2, ".", ","), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 70
                yield "\t\t\t\t\t\t\t\t\t\tNot specified
\t\t\t\t\t\t\t\t\t";
            }
            // line 72
            yield "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_select", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
            // line 82
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 82)) {
                // line 83
                yield "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#eventModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 83), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
            }
            // line 88
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 95
            yield "\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 95)) {
                // line 96
                yield "\t\t\t\t\t<div class=\"modal fade\" id=\"eventModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 96), "html", null, true);
                yield "\" tabindex=\"-1\" aria-labelledby=\"eventModalLabel";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 96), "html", null, true);
                yield "\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header bg-primary text-white\">
\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"eventModalLabel";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 100), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 100), "html", null, true);
                yield "</h5>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary\">Description:</h6>
\t\t\t\t\t\t\t\t\t<p>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 105), "html", null, true);
                yield "</p>

\t\t\t\t\t\t\t\t\t";
                // line 107
                if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "activities", [], "any", false, false, false, 107)) {
                    // line 108
                    yield "\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary\">Planned Activities:</h6>
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "activities", [], "any", false, false, false, 110), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_select", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\tSelect This Event
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 124
            yield "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            yield "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-info text-center py-4\">
\t\t\t\t\t\t<i class=\"bi bi-calendar-x-fill display-5 text-primary mb-3\"></i>
\t\t\t\t\t\t<h4>No events available at this time</h4>
\t\t\t\t\t\t<p class=\"mb-0\">Check back later or create a new event</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        // line 138
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
\t<script src=\"";
        // line 146
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
        return "gestion_de_reservation/evenement/index.html.twig";
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
        return array (  398 => 146,  394 => 145,  390 => 144,  386 => 143,  382 => 142,  378 => 141,  371 => 138,  358 => 137,  345 => 133,  332 => 125,  327 => 124,  315 => 115,  310 => 112,  305 => 110,  301 => 108,  299 => 107,  294 => 105,  284 => 100,  274 => 96,  271 => 95,  263 => 88,  254 => 83,  252 => 82,  244 => 77,  237 => 72,  233 => 70,  227 => 68,  225 => 67,  218 => 63,  212 => 60,  207 => 58,  201 => 55,  195 => 52,  188 => 48,  184 => 46,  178 => 42,  170 => 40,  168 => 39,  164 => 37,  159 => 36,  155 => 34,  145 => 30,  142 => 29,  138 => 28,  135 => 27,  125 => 23,  122 => 22,  117 => 21,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Event Management - MeetNTrip
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
\t\t<div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<h1 class=\"mb-5\">Available Events</h1>
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

\t\t<div class=\"row g-4\">
\t\t\t{% for event in evenements %}
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t{% if event.imagePath %}
\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/events/' ~ event.imagePath) }}\" class=\"card-img-top\" alt=\"{{ event.nom }}\" style=\"height: 200px; object-fit: cover;\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-event text-secondary\" style=\"font-size: 3rem;\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ event.nom }}</h5>
\t\t\t\t\t\t\t<div class=\"card-text mb-3\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-tag me-2\"></i>
\t\t\t\t\t\t\t\t\t{{ event.type }}</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-geo-alt me-2\"></i>
\t\t\t\t\t\t\t\t\t{{ event.lieuEvenement ?? 'Not specified' }}</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-range me-2\"></i>
\t\t\t\t\t\t\t\t\t{{ event.dateDebut|date('M d, Y') }}
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t{{ event.dateFin|date('M d, Y') }}</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people me-2\"></i>
\t\t\t\t\t\t\t\t\t{{ event.nombreInvite }}
\t\t\t\t\t\t\t\t\tguests</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-cash-coin me-2\"></i>
\t\t\t\t\t\t\t\t\t{% if event.budgetPrevu %}
\t\t\t\t\t\t\t\t\t\t\${{ event.budgetPrevu|number_format(2, '.', ',') }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tNot specified
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_select', {'id': event.id}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\tSelect
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t{% if event.description %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#eventModal{{ event.id }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\tDetails
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{# Modal for event details #}
\t\t\t\t{% if event.description %}
\t\t\t\t\t<div class=\"modal fade\" id=\"eventModal{{ event.id }}\" tabindex=\"-1\" aria-labelledby=\"eventModalLabel{{ event.id }}\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-header bg-primary text-white\">
\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"eventModalLabel{{ event.id }}\">{{ event.nom }}</h5>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary\">Description:</h6>
\t\t\t\t\t\t\t\t\t<p>{{ event.description }}</p>

\t\t\t\t\t\t\t\t\t{% if event.activities %}
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-primary\">Planned Activities:</h6>
\t\t\t\t\t\t\t\t\t\t<p>{{ event.activities }}</p>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evenement_select', {'id': event.id}) }}\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle me-1\"></i>
\t\t\t\t\t\t\t\t\t\tSelect This Event
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-info text-center py-4\">
\t\t\t\t\t\t<i class=\"bi bi-calendar-x-fill display-5 text-primary mb-3\"></i>
\t\t\t\t\t\t<h4>No events available at this time</h4>
\t\t\t\t\t\t<p class=\"mb-0\">Check back later or create a new event</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
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
", "gestion_de_reservation/evenement/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\evenement\\index.html.twig");
    }
}
