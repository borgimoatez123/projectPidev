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

/* Gestion_Evennement/employe/employe.html.twig */
class __TwigTemplate_bf9b411f4e350794e69a014b48108a20 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/employe/employe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/employe/employe.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "Gestion_Evennement/employe/employe.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assignations"]) || array_key_exists("assignations", $context) ? $context["assignations"] : (function () { throw new RuntimeError('Variable "assignations" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["assignation"]) {
            // line 6
            yield "        ";
            $context["event"] = CoreExtension::getAttribute($this->env, $this->source, $context["assignation"], "event", [], "any", false, false, false, 6);
            // line 7
            yield "        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border rounded-4 p-3 mb-4\" style=\"border: 3px solid #e02454;\">
                ";
            // line 9
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "imagePath", [], "any", false, false, false, 9)) {
                // line 10
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "imagePath", [], "any", false, false, false, 10))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
                ";
            } else {
                // line 12
                yield "                    <div class=\"card-img-top bg-secondary\" style=\"height: 200px; display: flex; align-items: center; justify-content: center;\">
                        <span class=\"text-white\">No Image</span>
                    </div>
                ";
            }
            // line 16
            yield "                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\"><strong>Description:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18)) > 100)) ? ("...") : (""))), "html", null, true);
            yield "</p>
                    <p><strong>Type:</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
                    <p><strong>Location:</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                    <p><strong>Date début:</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "dateDebut", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            yield "</p>
                    <p><strong>Date fin:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "dateFin", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
            yield "</p>
                    <p><strong>Statut:</strong> 
                        ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["assignation"], "status", [], "any", false, false, false, 24) == "Accepted")) {
                // line 25
                yield "                            <span class=\"text-success\">Accepté</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 26
$context["assignation"], "status", [], "any", false, false, false, 26) == "Rejected")) {
                // line 27
                yield "                            <span class=\"text-danger\">Refusé</span>
                        ";
            } else {
                // line 29
                yield "                            <span class=\"text-warning\">En attente</span>
                        ";
            }
            // line 31
            yield "                    </p>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['assignation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "</div>

<style>
    .btn-meet {
        background-color: #003a66 !important;
        border-color: #e02454;
        color: white !important;
    }
    .btn-meet:hover {
        background-color: #c81e48 !important;
        border-color: #c81e48 !important;
    }
</style>
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
        return "Gestion_Evennement/employe/employe.html.twig";
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
        return array (  157 => 36,  147 => 31,  143 => 29,  139 => 27,  137 => 26,  134 => 25,  132 => 24,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  104 => 16,  98 => 12,  92 => 10,  90 => 9,  86 => 7,  83 => 6,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block body %}
<div class=\"row\">
    {% for assignation in assignations %}
        {% set event = assignation.event %}
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm border rounded-4 p-3 mb-4\" style=\"border: 3px solid #e02454;\">
                {% if event.imagePath %}
                    <img src=\"{{ asset('uploads/events/' ~ event.imagePath) }}\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
                {% else %}
                    <div class=\"card-img-top bg-secondary\" style=\"height: 200px; display: flex; align-items: center; justify-content: center;\">
                        <span class=\"text-white\">No Image</span>
                    </div>
                {% endif %}
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ event.nom }}</h5>
                    <p class=\"card-text\"><strong>Description:</strong> {{ event.description|slice(0, 100) ~ (event.description|length > 100 ? '...' : '') }}</p>
                    <p><strong>Type:</strong> {{ event.type }}</p>
                    <p><strong>Location:</strong> {{ event.lieuEvenement }}</p>
                    <p><strong>Date début:</strong> {{ event.dateDebut|date('d/m/Y') }}</p>
                    <p><strong>Date fin:</strong> {{ event.dateFin|date('d/m/Y') }}</p>
                    <p><strong>Statut:</strong> 
                        {% if assignation.status == 'Accepted' %}
                            <span class=\"text-success\">Accepté</span>
                        {% elseif assignation.status == 'Rejected' %}
                            <span class=\"text-danger\">Refusé</span>
                        {% else %}
                            <span class=\"text-warning\">En attente</span>
                        {% endif %}
                    </p>
                </div>
            </div>
        </div>
    {% endfor %}
</div>

<style>
    .btn-meet {
        background-color: #003a66 !important;
        border-color: #e02454;
        color: white !important;
    }
    .btn-meet:hover {
        background-color: #c81e48 !important;
        border-color: #c81e48 !important;
    }
</style>
{% endblock %}
", "Gestion_Evennement/employe/employe.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\Gestion_Evennement\\employe\\employe.html.twig");
    }
}
