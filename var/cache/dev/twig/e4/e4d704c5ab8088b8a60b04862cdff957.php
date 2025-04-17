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

/* Gestion_Evennement/client/index.html.twig */
class __TwigTemplate_387d4197b4eeee604a107b9fa9d29f90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/client/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "Gestion_Evennement/client/index.html.twig", 1);
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

        yield "Manage Events";
        
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
        yield " 
<div class=\"container\">
    <h1 class=\"text-center mb-4\">Create Events</h1>

    <!-- Messages flash -->
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Success!</strong> ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "    
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Error!</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    
    <!-- Auto-hide after 4 seconds -->
    <script>
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                // Smooth fade out
                alert.classList.remove('show');
                alert.classList.add('fade');
                // Then remove from DOM after animation ends (optional)
                setTimeout(() => alert.remove(), 500);
            });
        }, 4000); // 4 seconds
    </script>

    <!-- Ajout d'un événement -->
    <button type=\"button\" class=\"btn btn-meeet mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#eventModal\">
        Add Event
    </button>

    <!-- Modal pour Ajouter un Nouveau Event -->
    <div class=\"modal fade\" id=\"eventModal\" tabindex=\"-1\" aria-labelledby=\"eventModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"eventModalLabel\">New Event</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-container\">

                    <!-- Ajout du logo -->
    <div class=\"form-logo\">
        <img  src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand-logo.png"), "html", null, true);
        yield "\"  alt=\"MeetNTrip Logo\">
    </div>
    ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_new"), "attr" => ["class" => "form-container"]]);
        yield "
    <div class=\"form-group\">
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), 'label');
        yield "
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), 'label');
        yield "
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "type", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "nombreInvite", [], "any", false, false, false, 70), 'label');
        yield "
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nombreInvite", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dateDebut", [], "any", false, false, false, 75), 'label');
        yield "
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "dateDebut", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "dateFin", [], "any", false, false, false, 80), 'label');
        yield "
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "dateFin", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), 'label');
        yield "
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 90), 'label');
        yield "
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "budgetPrevu", [], "any", false, false, false, 95), 'label');
        yield "
                        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "budgetPrevu", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "activities", [], "any", false, false, false, 100), 'label');
        yield "
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "activities", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                
                    <div class=\"form-group\">
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "imagePath", [], "any", false, false, false, 105), 'label');
        yield "
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "imagePath", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
                    </div>
                
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        yield "
            </div>

                </div>
            </div>
        </div>
    </div>
  
    <!-- Affichage des événements -->
    <div class=\"row\">
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 121
            yield "            <div class=\"col-md-4\">
                <div class=\"card shadow-sm border rounded-4 p-3 mb-4\" style=\"border: 3px solid #e02454;  \">
                    ";
            // line 123
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imagePath", [], "any", false, false, false, 123)) {
                // line 124
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imagePath", [], "any", false, false, false, 124))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
                    ";
            } else {
                // line 126
                yield "                        <div class=\"card-img-top bg-secondary\" style=\"height: 200px; display: flex; align-items: center; justify-content: center;\">
                            <span class=\"text-white\">No Image</span>
                        </div>
                    ";
            }
            // line 130
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 131), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\"><strong>Description:</strong>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 132), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 132)) > 100)) ? ("...") : (""))), "html", null, true);
            yield "</p>
                        <p><strong>Type:</strong> ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 133), "html", null, true);
            yield "</p>
                        <p><strong>Location:</strong> ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieuEvenement", [], "any", false, false, false, 134), "html", null, true);
            yield "</p>
                        <p><strong>Budget:</strong> ";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "budgetPrevu", [], "any", false, false, false, 135), "html", null, true);
            yield " \$</p>

                    
                        <style>
                            .btn-meeet{
                                background-color: #003a66 !important;
                                border-color: #e02454;
                                color: white !important;
                            }
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
                        
                        <div class=\"d-flex flex-wrap align-items-center gap-2 mt-2\">
                            <!-- Bouton Modifier -->
                            <button type=\"button\" class=\"btn btn-meet\" data-bs-toggle=\"modal\" data-bs-target=\"#editEventModal";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 157), "html", null, true);
            yield "\">
                                Edit
                            </button>
                        
                            <!-- Bouton Delete -->
                            <form action=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 162)]), "html", null, true);
            yield "\" method=\"POST\" class=\"m-0 p-0\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 163))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-meet\">Delete</button>
                            </form>
                        
                            <!-- Bouton Demande Sponsoring -->
                            <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_d_sponsor", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"btn btn-meet\">
                                Faire une demande de Sponsoring
                            </a>
                        
                            <!-- Bouton Gérer Employés -->
                            <a href=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assign_employees_to_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 173)]), "html", null, true);
            yield "\" class=\"btn btn-meet\">
                                Gérer Employés
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Modal pour modifier l'événement -->
            <div class=\"modal fade\" id=\"editEventModal";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 183), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editEventModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 183), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editEventModalLabel";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 187), "html", null, true);
            yield "\">Edit Event</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-container\">
                                <!-- Ajout du logo -->
                                <div class=\"text-center my-3\">
                                    <img src=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand-logo.png"), "html", null, true);
            yield "\" alt=\"MeetNTrip Logo\" class=\"img-fluid\" style=\"max-width: 200px;\">
                                </div>
                                    
                                ";
            // line 197
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 197, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 197), [], "array", false, false, false, 197), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 198
$context["event"], "id", [], "any", false, false, false, 198)]), "method" => "POST", "attr" => ["enctype" => "multipart/form-data", "class" => "form-container"]]);
            // line 201
            yield "
                            
                                <div class=\"form-group\">
                                    ";
            // line 204
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 204, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 204), [], "array", false, false, false, 204), "nom", [], "any", false, false, false, 204), 'label');
            yield "
                                    ";
            // line 205
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 205, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 205), [], "array", false, false, false, 205), "nom", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 209
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 209, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 209), [], "array", false, false, false, 209), "type", [], "any", false, false, false, 209), 'label');
            yield "
                                    ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 210, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 210), [], "array", false, false, false, 210), "type", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 214
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 214, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 214), [], "array", false, false, false, 214), "nombreInvite", [], "any", false, false, false, 214), 'label');
            yield "
                                    ";
            // line 215
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 215, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 215), [], "array", false, false, false, 215), "nombreInvite", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 219
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 219, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 219), [], "array", false, false, false, 219), "dateDebut", [], "any", false, false, false, 219), 'label');
            yield "
                                    ";
            // line 220
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 220, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 220), [], "array", false, false, false, 220), "dateDebut", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 224
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 224, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 224), [], "array", false, false, false, 224), "dateFin", [], "any", false, false, false, 224), 'label');
            yield "
                                    ";
            // line 225
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 225, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 225), [], "array", false, false, false, 225), "dateFin", [], "any", false, false, false, 225), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 229
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 229, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 229), [], "array", false, false, false, 229), "description", [], "any", false, false, false, 229), 'label');
            yield "
                                    ";
            // line 230
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 230, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 230), [], "array", false, false, false, 230), "description", [], "any", false, false, false, 230), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 234
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 234, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 234), [], "array", false, false, false, 234), "lieuEvenement", [], "any", false, false, false, 234), 'label');
            yield "
                                    ";
            // line 235
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 235, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 235), [], "array", false, false, false, 235), "lieuEvenement", [], "any", false, false, false, 235), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 239
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 239, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 239), [], "array", false, false, false, 239), "budgetPrevu", [], "any", false, false, false, 239), 'label');
            yield "
                                    ";
            // line 240
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 240, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 240), [], "array", false, false, false, 240), "budgetPrevu", [], "any", false, false, false, 240), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 244
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 244, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 244), [], "array", false, false, false, 244), "activities", [], "any", false, false, false, 244), 'label');
            yield "
                                    ";
            // line 245
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 245, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 245), [], "array", false, false, false, 245), "activities", [], "any", false, false, false, 245), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 249
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 249, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 249), [], "array", false, false, false, 249), "imagePath", [], "any", false, false, false, 249), 'label');
            yield "
                                    ";
            // line 250
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 250, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 250), [], "array", false, false, false, 250), "imagePath", [], "any", false, false, false, 250), 'widget', ["attr" => ["class" => "form-control-file"]]);
            yield "
                                </div>
                            
                                <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                            
                                ";
            // line 255
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 255, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 255), [], "array", false, false, false, 255), 'form_end');
            yield "
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "    
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
        return "Gestion_Evennement/client/index.html.twig";
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
        return array (  576 => 263,  562 => 255,  554 => 250,  550 => 249,  543 => 245,  539 => 244,  532 => 240,  528 => 239,  521 => 235,  517 => 234,  510 => 230,  506 => 229,  499 => 225,  495 => 224,  488 => 220,  484 => 219,  477 => 215,  473 => 214,  466 => 210,  462 => 209,  455 => 205,  451 => 204,  446 => 201,  444 => 198,  443 => 197,  437 => 194,  427 => 187,  418 => 183,  405 => 173,  397 => 168,  389 => 163,  385 => 162,  377 => 157,  352 => 135,  348 => 134,  344 => 133,  340 => 132,  336 => 131,  333 => 130,  327 => 126,  321 => 124,  319 => 123,  315 => 121,  311 => 120,  298 => 110,  291 => 106,  287 => 105,  280 => 101,  276 => 100,  269 => 96,  265 => 95,  258 => 91,  254 => 90,  247 => 86,  243 => 85,  236 => 81,  232 => 80,  225 => 76,  221 => 75,  214 => 71,  210 => 70,  203 => 66,  199 => 65,  192 => 61,  188 => 60,  183 => 58,  178 => 56,  144 => 24,  134 => 20,  131 => 19,  127 => 18,  124 => 17,  114 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Manage Events{% endblock %}

{% block body %}
 
<div class=\"container\">
    <h1 class=\"text-center mb-4\">Create Events</h1>

    <!-- Messages flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Success!</strong> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Error!</strong> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
    
    <!-- Auto-hide after 4 seconds -->
    <script>
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                // Smooth fade out
                alert.classList.remove('show');
                alert.classList.add('fade');
                // Then remove from DOM after animation ends (optional)
                setTimeout(() => alert.remove(), 500);
            });
        }, 4000); // 4 seconds
    </script>

    <!-- Ajout d'un événement -->
    <button type=\"button\" class=\"btn btn-meeet mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#eventModal\">
        Add Event
    </button>

    <!-- Modal pour Ajouter un Nouveau Event -->
    <div class=\"modal fade\" id=\"eventModal\" tabindex=\"-1\" aria-labelledby=\"eventModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"eventModalLabel\">New Event</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-container\">

                    <!-- Ajout du logo -->
    <div class=\"form-logo\">
        <img  src=\"{{ asset('img/brand-logo.png') }}\"  alt=\"MeetNTrip Logo\">
    </div>
    {{ form_start(form, {'method': 'POST', 'action': path('client_evenement_new'), 'attr': {'class': 'form-container'}}) }}
    <div class=\"form-group\">
                        {{ form_label(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.type) }}
                        {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.nombreInvite) }}
                        {{ form_widget(form.nombreInvite, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.dateDebut) }}
                        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.dateFin) }}
                        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.description) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.lieuEvenement) }}
                        {{ form_widget(form.lieuEvenement, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.budgetPrevu) }}
                        {{ form_widget(form.budgetPrevu, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.activities) }}
                        {{ form_widget(form.activities, {'attr': {'class': 'form-control'}}) }}
                    </div>
                
                    <div class=\"form-group\">
                        {{ form_label(form.imagePath) }}
                        {{ form_widget(form.imagePath, {'attr': {'class': 'form-control-file'}}) }}
                    </div>
                
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                {{ form_end(form) }}
            </div>

                </div>
            </div>
        </div>
    </div>
  
    <!-- Affichage des événements -->
    <div class=\"row\">
        {% for event in evenements %}
            <div class=\"col-md-4\">
                <div class=\"card shadow-sm border rounded-4 p-3 mb-4\" style=\"border: 3px solid #e02454;  \">
                    {% if event.imagePath %}
                        <img src=\"{{ asset('uploads/events/' ~ event.imagePath) }}\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
                    {% else %}
                        <div class=\"card-img-top bg-secondary\" style=\"height: 200px; display: flex; align-items: center; justify-content: center;\">
                            <span class=\"text-white\">No Image</span>
                        </div>
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ event.nom }}</h5>
                        <p class=\"card-text\"><strong>Description:</strong>{{ event.description|slice(0, 100) ~ (event.description|length > 100 ? '...' : '') }}</p>
                        <p><strong>Type:</strong> {{ event.type }}</p>
                        <p><strong>Location:</strong> {{ event.lieuEvenement }}</p>
                        <p><strong>Budget:</strong> {{ event.budgetPrevu }} \$</p>

                    
                        <style>
                            .btn-meeet{
                                background-color: #003a66 !important;
                                border-color: #e02454;
                                color: white !important;
                            }
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
                        
                        <div class=\"d-flex flex-wrap align-items-center gap-2 mt-2\">
                            <!-- Bouton Modifier -->
                            <button type=\"button\" class=\"btn btn-meet\" data-bs-toggle=\"modal\" data-bs-target=\"#editEventModal{{ event.id }}\">
                                Edit
                            </button>
                        
                            <!-- Bouton Delete -->
                            <form action=\"{{ path('client_evenement_delete', {'id': event.id}) }}\" method=\"POST\" class=\"m-0 p-0\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                <button type=\"submit\" class=\"btn btn-meet\">Delete</button>
                            </form>
                        
                            <!-- Bouton Demande Sponsoring -->
                            <a href=\"{{ path('app_d_sponsor', {'id': event.id}) }}\" class=\"btn btn-meet\">
                                Faire une demande de Sponsoring
                            </a>
                        
                            <!-- Bouton Gérer Employés -->
                            <a href=\"{{ path('assign_employees_to_event', { id: event.id }) }}\" class=\"btn btn-meet\">
                                Gérer Employés
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Modal pour modifier l'événement -->
            <div class=\"modal fade\" id=\"editEventModal{{ event.id }}\" tabindex=\"-1\" aria-labelledby=\"editEventModalLabel{{ event.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editEventModalLabel{{ event.id }}\">Edit Event</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-container\">
                                <!-- Ajout du logo -->
                                <div class=\"text-center my-3\">
                                    <img src=\"{{ asset('img/brand-logo.png') }}\" alt=\"MeetNTrip Logo\" class=\"img-fluid\" style=\"max-width: 200px;\">
                                </div>
                                    
                                {{ form_start(editForms[event.id], {
                                    'action': path('client_evenement_edit', {'id': event.id}),
                                    'method': 'POST',
                                    'attr': {'enctype': 'multipart/form-data', 'class': 'form-container'}
                                }) }}
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].nom) }}
                                    {{ form_widget(editForms[event.id].nom, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].type) }}
                                    {{ form_widget(editForms[event.id].type, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].nombreInvite) }}
                                    {{ form_widget(editForms[event.id].nombreInvite, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].dateDebut) }}
                                    {{ form_widget(editForms[event.id].dateDebut, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].dateFin) }}
                                    {{ form_widget(editForms[event.id].dateFin, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].description) }}
                                    {{ form_widget(editForms[event.id].description, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].lieuEvenement) }}
                                    {{ form_widget(editForms[event.id].lieuEvenement, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].budgetPrevu) }}
                                    {{ form_widget(editForms[event.id].budgetPrevu, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].activities) }}
                                    {{ form_widget(editForms[event.id].activities, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            
                                <div class=\"form-group\">
                                    {{ form_label(editForms[event.id].imagePath) }}
                                    {{ form_widget(editForms[event.id].imagePath, {'attr': {'class': 'form-control-file'}}) }}
                                </div>
                            
                                <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                            
                                {{ form_end(editForms[event.id]) }}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    
{% endblock %}
", "Gestion_Evennement/client/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\Gestion_Evennement\\client\\index.html.twig");
    }
}
