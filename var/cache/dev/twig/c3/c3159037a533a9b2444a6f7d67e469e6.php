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

/* Gestion_Evennement/d_sponsor/decision_sponsoring_sponsor.html.twig */
class __TwigTemplate_ed79d66ce103fe7a49e37e3f3da1ed00 extends Template
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
        return "Gestion_Evennement/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/d_sponsor/decision_sponsoring_sponsor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/d_sponsor/decision_sponsoring_sponsor.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "Gestion_Evennement/d_sponsor/decision_sponsoring_sponsor.html.twig", 1);
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

        yield "Event Sponsoring";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h2 class=\"text-center mb-4\"> Event Sponsoring</h2>
    </div>

    <div class=\"row\">
      ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                // line 15
                yield "          <div class=\"col-md-6 col-lg-4 d-flex\"> <!-- Responsive card -->
            <div class=\"card shadow-sm border rounded-4 p-3 mb-4 w-100\" style=\"border: 3px solid #e02454;\">
              ";
                // line 18
                yield "              ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 18), "imagePath", [], "any", false, false, false, 18)) {
                    // line 19
                    yield "                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 19), "imagePath", [], "any", false, false, false, 19))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
              ";
                } else {
                    // line 21
                    yield "                <div class=\"card-img-top bg-secondary d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                  <span class=\"text-white\">Aucune image</span>
                </div>
              ";
                }
                // line 25
                yield "
              ";
                // line 27
                yield "              <div class=\"card-body\">
                <h5 class=\"card-title\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
                yield "</h5>
                <p class=\"card-text text-muted\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 29), "description", [], "any", false, false, false, 29), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 29), "description", [], "any", false, false, false, 29)) > 100)) ? ("...") : (""))), "html", null, true);
                yield "</p>

                <ul class=\"list-unstyled mb-2\">
                  <li><strong>Type :</strong> ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 32), "type", [], "any", false, false, false, 32), "html", null, true);
                yield "</li>
                  <li><strong>Lieu :</strong> ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 33), "lieuEvenement", [], "any", false, false, false, 33), "html", null, true);
                yield "</li>
                  <li><strong>Budget :</strong> ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "evenement", [], "any", false, false, false, 34), "budgetPrevu", [], "any", false, false, false, 34), "html", null, true);
                yield " \$</li>
                </ul>

                <p>
                  <strong>Statut :</strong>
                  <span class=\"badge bg-";
                // line 39
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 39) == "Accepté")) {
                    yield "success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 39) == "Refusé")) {
                    yield "danger";
                } else {
                    yield "warning";
                }
                yield "\">
                    ";
                // line 40
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 40), "html", null, true)) : ("En attente"));
                yield "
                  </span>
                </p>

                ";
                // line 44
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 44) == "Refusé") && CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "justification", [], "any", false, false, false, 44))) {
                    // line 45
                    yield "                  <p class=\"text-danger\"><strong>Justification :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "justification", [], "any", false, false, false, 45), "html", null, true);
                    yield "</p>
                ";
                }
                // line 47
                yield "
                ";
                // line 49
                yield "                <div class=\"d-flex justify-content-between gap-2 mt-3\">
                  <form action=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_sponsoring_accepter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" method=\"POST\" class=\"w-50\">
                    <button type=\"submit\" class=\"btn btn-success btn-sm w-100\">Accepter</button>
                  </form>

                  <form action=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_sponsoring_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" method=\"POST\" class=\"w-50\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm w-100\">Refuser</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "      ";
        } else {
            // line 63
            yield "        <div class=\"col-12\">
          <p class=\"text-center text-muted\">Aucune demande de sponsoring pour l'instant.</p>
        </div>
      ";
        }
        // line 67
        yield "    </div>
  </div>
</div>
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
        return "Gestion_Evennement/d_sponsor/decision_sponsoring_sponsor.html.twig";
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
        return array (  228 => 67,  222 => 63,  219 => 62,  205 => 54,  198 => 50,  195 => 49,  192 => 47,  186 => 45,  184 => 44,  177 => 40,  167 => 39,  159 => 34,  155 => 33,  151 => 32,  145 => 29,  141 => 28,  138 => 27,  135 => 25,  129 => 21,  123 => 19,  120 => 18,  116 => 15,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Event Sponsoring{% endblock %}

{% block body %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h2 class=\"text-center mb-4\"> Event Sponsoring</h2>
    </div>

    <div class=\"row\">
      {% if demandes|length > 0 %}
        {% for demande in demandes %}
          <div class=\"col-md-6 col-lg-4 d-flex\"> <!-- Responsive card -->
            <div class=\"card shadow-sm border rounded-4 p-3 mb-4 w-100\" style=\"border: 3px solid #e02454;\">
              {# Image de l'événement #}
              {% if demande.evenement.imagePath %}
                <img src=\"{{ asset('uploads/events/' ~ demande.evenement.imagePath) }}\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
              {% else %}
                <div class=\"card-img-top bg-secondary d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                  <span class=\"text-white\">Aucune image</span>
                </div>
              {% endif %}

              {# Détails de l'événement #}
              <div class=\"card-body\">
                <h5 class=\"card-title\">{{ demande.evenement.nom }}</h5>
                <p class=\"card-text text-muted\">{{ demande.evenement.description|slice(0, 100) ~ (demande.evenement.description|length > 100 ? '...' : '') }}</p>

                <ul class=\"list-unstyled mb-2\">
                  <li><strong>Type :</strong> {{ demande.evenement.type }}</li>
                  <li><strong>Lieu :</strong> {{ demande.evenement.lieuEvenement }}</li>
                  <li><strong>Budget :</strong> {{ demande.evenement.budgetPrevu }} \$</li>
                </ul>

                <p>
                  <strong>Statut :</strong>
                  <span class=\"badge bg-{% if demande.statut == 'Accepté' %}success{% elseif demande.statut == 'Refusé' %}danger{% else %}warning{% endif %}\">
                    {{ demande.statut ?: 'En attente' }}
                  </span>
                </p>

                {% if demande.statut == 'Refusé' and demande.justification %}
                  <p class=\"text-danger\"><strong>Justification :</strong> {{ demande.justification }}</p>
                {% endif %}

                {# Actions #}
                <div class=\"d-flex justify-content-between gap-2 mt-3\">
                  <form action=\"{{ path('demande_sponsoring_accepter', {'id': demande.id}) }}\" method=\"POST\" class=\"w-50\">
                    <button type=\"submit\" class=\"btn btn-success btn-sm w-100\">Accepter</button>
                  </form>

                  <form action=\"{{ path('demande_sponsoring_refuser', {'id': demande.id}) }}\" method=\"POST\" class=\"w-50\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm w-100\">Refuser</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        {% endfor %}
      {% else %}
        <div class=\"col-12\">
          <p class=\"text-center text-muted\">Aucune demande de sponsoring pour l'instant.</p>
        </div>
      {% endif %}
    </div>
  </div>
</div>
{% endblock %}
", "Gestion_Evennement/d_sponsor/decision_sponsoring_sponsor.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\Gestion_Evennement\\d_sponsor\\decision_sponsoring_sponsor.html.twig");
    }
}
