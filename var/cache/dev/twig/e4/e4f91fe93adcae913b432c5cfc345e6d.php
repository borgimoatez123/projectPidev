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

/* Gestion_Evennement/admin/index.html.twig */
class __TwigTemplate_374ecaffd1b4a9b11eb43da89c1f0d42 extends Template
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
            'admin' => [$this, 'block_admin'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "Gestion_Evennement/admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/admin/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/admin/base.html.twig", "Gestion_Evennement/admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 4
        yield " 
<div class=\"container\">

    <h1 class=\"text-center mb-4\">Manage Events</h1>

    <!-- Affichage des messages flash -->
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success1"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Success!</strong> ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error1"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Error!</strong> ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    <script>
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
                    <!-- Message flash dans le modal -->
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "flashes", ["success1"], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 50
            yield "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "flashes", ["error1"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 57
            yield "                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "
                    <div class=\"form-container\">

                        <!-- Ajout du logo -->
                        <div class=\"text-center my-3\">
                            <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand-logo.png"), "html", null, true);
        yield "\" alt=\"MeetNTrip Logo\" class=\"img-fluid\" style=\"max-width: 200px;\">
                        </div>
                        
        ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_new"), "attr" => ["class" => "form-container"]]);
        yield "
        <div class=\"form-group\">
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'label');
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "type", [], "any", false, false, false, 77), 'label');
        yield "
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "type", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nombreInvite", [], "any", false, false, false, 82), 'label');
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "nombreInvite", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "dateDebut", [], "any", false, false, false, 87), 'label');
        yield "
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "dateDebut", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "dateFin", [], "any", false, false, false, 92), 'label');
        yield "
                            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "dateFin", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "description", [], "any", false, false, false, 97), 'label');
        yield "
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 102), 'label');
        yield "
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "budgetPrevu", [], "any", false, false, false, 107), 'label');
        yield "
                            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "budgetPrevu", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "activities", [], "any", false, false, false, 112), 'label');
        yield "
                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "activities", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                    
                        <div class=\"form-group\">
                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "imagePath", [], "any", false, false, false, 117), 'label');
        yield "
                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "imagePath", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
                        </div>
                    
                        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                    ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        yield "
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Affichage des événements -->
    <div class=\"row\">
        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 132
            yield "            <div class=\"col-md-4\">
                <div class=\"card shadow-sm border rounded-4 p-3 mb-4\" style=\"border: 3px solid #e02454; \">
                    ";
            // line 134
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imagePath", [], "any", false, false, false, 134)) {
                // line 135
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "imagePath", [], "any", false, false, false, 135))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
                    ";
            } else {
                // line 137
                yield "                        <div class=\"card-img-top bg-secondary\" style=\"height: 200px; display: flex; align-items: center; justify-content: center;\">
                            <span class=\"text-white\">No Image</span>
                        </div>
                    ";
            }
            // line 141
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 142), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 143), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 143)) > 100)) ? ("...") : (""))), "html", null, true);
            yield "</p>
                        <p><strong>Type:</strong> ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 144), "html", null, true);
            yield "</p>
                        <p><strong>Location:</strong> ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieuEvenement", [], "any", false, false, false, 145), "html", null, true);
            yield "</p>
                        <p><strong>Budget:</strong> ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "budgetPrevu", [], "any", false, false, false, 146), "html", null, true);
            yield " \$</p>
                        <style>
                            .container-fluid {
                                padding-left: 270px; /* أو حسب حجم السايدبار */
                                padding-top:50px
                            }
                            
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
                        <div class=\"d-flex gap-2\">
                            <!-- Accept Button -->
                            <form action=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-meet\">Accept</button>
                            </form>
                            <!-- Reject Button -->
                            <form action=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            yield "\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-meet\">Reject</button>
                            </form>
                        </div>

                        <!-- Edit Event Button -->
                        <button type=\"button\" class=\"btn btn-meet\" data-bs-toggle=\"modal\" data-bs-target=\"#editEventModal";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 180), "html", null, true);
            yield "\">
                            Edit
                        </button>

                        <!-- Delete Event Button -->
                        <form action=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 185)]), "html", null, true);
            yield "\" method=\"POST\" class=\"m-0 p-0\">
                            <input type=\"hidden\" name=\"_token\" >
                            <button type=\"submit\" class=\"btn btn-meet\">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal for Editing Event -->
            <div class=\"modal fade\" id=\"editEventModal";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 194), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editEventModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 194), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editEventModalLabel";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 198), "html", null, true);
            yield "\">Edit Event</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <!-- Message flash dans le modal -->
                            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "flashes", ["success1"], "method", false, false, false, 203));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 204
                yield "                                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                    ";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            yield "
                            ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "flashes", ["error1"], "method", false, false, false, 210));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 211
                yield "                                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                    ";
                // line 212
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "
                            <div class=\"form-container\">
                                <!-- Ajout du logo -->
                                <div class=\"text-center my-3\">
                                    <img src=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand-logo.png"), "html", null, true);
            yield "\" alt=\"MeetNTrip Logo\" class=\"img-fluid\" style=\"max-width: 200px;\">
                                </div>
                            
                                ";
            // line 223
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 223, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 223), [], "array", false, false, false, 223), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source,             // line 224
$context["event"], "id", [], "any", false, false, false, 224)]), "method" => "POST", "attr" => ["enctype" => "multipart/form-data", "class" => "form-container"]]);
            // line 227
            yield "
                            
                                <div class=\"form-group\">
                                    ";
            // line 230
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 230, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 230), [], "array", false, false, false, 230), "nom", [], "any", false, false, false, 230), 'label');
            yield "
                                    ";
            // line 231
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 231, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 231), [], "array", false, false, false, 231), "nom", [], "any", false, false, false, 231), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 235
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 235, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 235), [], "array", false, false, false, 235), "type", [], "any", false, false, false, 235), 'label');
            yield "
                                    ";
            // line 236
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 236, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 236), [], "array", false, false, false, 236), "type", [], "any", false, false, false, 236), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 240
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 240, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 240), [], "array", false, false, false, 240), "nombreInvite", [], "any", false, false, false, 240), 'label');
            yield "
                                    ";
            // line 241
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 241, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 241), [], "array", false, false, false, 241), "nombreInvite", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 245
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 245, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 245), [], "array", false, false, false, 245), "dateDebut", [], "any", false, false, false, 245), 'label');
            yield "
                                    ";
            // line 246
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 246, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 246), [], "array", false, false, false, 246), "dateDebut", [], "any", false, false, false, 246), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 250
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 250, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 250), [], "array", false, false, false, 250), "dateFin", [], "any", false, false, false, 250), 'label');
            yield "
                                    ";
            // line 251
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 251, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 251), [], "array", false, false, false, 251), "dateFin", [], "any", false, false, false, 251), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 255
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 255, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 255), [], "array", false, false, false, 255), "description", [], "any", false, false, false, 255), 'label');
            yield "
                                    ";
            // line 256
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 256, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 256), [], "array", false, false, false, 256), "description", [], "any", false, false, false, 256), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 260
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 260, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 260), [], "array", false, false, false, 260), "lieuEvenement", [], "any", false, false, false, 260), 'label');
            yield "
                                    ";
            // line 261
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 261, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 261), [], "array", false, false, false, 261), "lieuEvenement", [], "any", false, false, false, 261), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 265
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 265, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 265), [], "array", false, false, false, 265), "budgetPrevu", [], "any", false, false, false, 265), 'label');
            yield "
                                    ";
            // line 266
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 266, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 266), [], "array", false, false, false, 266), "budgetPrevu", [], "any", false, false, false, 266), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 270
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 270, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 270), [], "array", false, false, false, 270), "activities", [], "any", false, false, false, 270), 'label');
            yield "
                                    ";
            // line 271
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 271, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 271), [], "array", false, false, false, 271), "activities", [], "any", false, false, false, 271), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                </div>
                            
                                <div class=\"form-group\">
                                    ";
            // line 275
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 275, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 275), [], "array", false, false, false, 275), "imagePath", [], "any", false, false, false, 275), 'label');
            yield "
                                    ";
            // line 276
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 276, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 276), [], "array", false, false, false, 276), "imagePath", [], "any", false, false, false, 276), 'widget', ["attr" => ["class" => "form-control-file"]]);
            yield "
                                </div>
                            
                                <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                            
                                ";
            // line 281
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editForms"]) || array_key_exists("editForms", $context) ? $context["editForms"] : (function () { throw new RuntimeError('Variable "editForms" does not exist.', 281, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 281), [], "array", false, false, false, 281), 'form_end');
            yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var flashMessages = document.querySelectorAll(\"#flashModal .alert\");
        if (flashMessages.length > 0) {
            var flashModal = new bootstrap.Modal(document.getElementById(\"flashModal\"));
            flashModal.show();
        }
    });
</script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        yield "    </div>
</div></div>
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
        return "Gestion_Evennement/admin/index.html.twig";
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
        return array (  637 => 297,  615 => 281,  607 => 276,  603 => 275,  596 => 271,  592 => 270,  585 => 266,  581 => 265,  574 => 261,  570 => 260,  563 => 256,  559 => 255,  552 => 251,  548 => 250,  541 => 246,  537 => 245,  530 => 241,  526 => 240,  519 => 236,  515 => 235,  508 => 231,  504 => 230,  499 => 227,  497 => 224,  496 => 223,  490 => 220,  484 => 216,  474 => 212,  471 => 211,  467 => 210,  464 => 209,  454 => 205,  451 => 204,  447 => 203,  439 => 198,  430 => 194,  418 => 185,  410 => 180,  401 => 174,  394 => 170,  367 => 146,  363 => 145,  359 => 144,  355 => 143,  351 => 142,  348 => 141,  342 => 137,  336 => 135,  334 => 134,  330 => 132,  326 => 131,  314 => 122,  307 => 118,  303 => 117,  296 => 113,  292 => 112,  285 => 108,  281 => 107,  274 => 103,  270 => 102,  263 => 98,  259 => 97,  252 => 93,  248 => 92,  241 => 88,  237 => 87,  230 => 83,  226 => 82,  219 => 78,  215 => 77,  208 => 73,  204 => 72,  199 => 70,  193 => 67,  186 => 62,  176 => 58,  173 => 57,  169 => 56,  166 => 55,  156 => 51,  153 => 50,  149 => 49,  121 => 23,  111 => 19,  108 => 18,  104 => 17,  101 => 16,  91 => 12,  88 => 11,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/admin/base.html.twig' %}

{% block admin %}
 
<div class=\"container\">

    <h1 class=\"text-center mb-4\">Manage Events</h1>

    <!-- Affichage des messages flash -->
    {% for message in app.flashes('success1') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Success!</strong> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    {% for message in app.flashes('error1') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Error!</strong> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
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
                    <!-- Message flash dans le modal -->
                    {% for message in app.flashes('success1') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}

                    {% for message in app.flashes('error1') %}
                        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}

                    <div class=\"form-container\">

                        <!-- Ajout du logo -->
                        <div class=\"text-center my-3\">
                            <img src=\"{{ asset('img/brand-logo.png') }}\" alt=\"MeetNTrip Logo\" class=\"img-fluid\" style=\"max-width: 200px;\">
                        </div>
                        
        {{ form_start(form, {'method': 'POST', 'action': path('admin_evenement_new'), 'attr': {'class': 'form-container'}}) }}
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
                <div class=\"card shadow-sm border rounded-4 p-3 mb-4\" style=\"border: 3px solid #e02454; \">
                    {% if event.imagePath %}
                        <img src=\"{{ asset('uploads/events/' ~ event.imagePath) }}\" class=\"card-img-top\" alt=\"Event Image\" style=\"height: 200px; object-fit: cover;\">
                    {% else %}
                        <div class=\"card-img-top bg-secondary\" style=\"height: 200px; display: flex; align-items: center; justify-content: center;\">
                            <span class=\"text-white\">No Image</span>
                        </div>
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ event.nom }}</h5>
                        <p class=\"card-text\">{{ event.description|slice(0, 100) ~ (event.description|length > 100 ? '...' : '') }}</p>
                        <p><strong>Type:</strong> {{ event.type }}</p>
                        <p><strong>Location:</strong> {{ event.lieuEvenement }}</p>
                        <p><strong>Budget:</strong> {{ event.budgetPrevu }} \$</p>
                        <style>
                            .container-fluid {
                                padding-left: 270px; /* أو حسب حجم السايدبار */
                                padding-top:50px
                            }
                            
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
                        <div class=\"d-flex gap-2\">
                            <!-- Accept Button -->
                            <form action=\"{{ path('admin_evenement_accept', {'id': event.id}) }}\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-meet\">Accept</button>
                            </form>
                            <!-- Reject Button -->
                            <form action=\"{{ path('admin_evenement_reject', {'id': event.id}) }}\" method=\"POST\">
                                <button type=\"submit\" class=\"btn btn-meet\">Reject</button>
                            </form>
                        </div>

                        <!-- Edit Event Button -->
                        <button type=\"button\" class=\"btn btn-meet\" data-bs-toggle=\"modal\" data-bs-target=\"#editEventModal{{ event.id }}\">
                            Edit
                        </button>

                        <!-- Delete Event Button -->
                        <form action=\"{{ path('admin_evenement_delete', {'id': event.id}) }}\" method=\"POST\" class=\"m-0 p-0\">
                            <input type=\"hidden\" name=\"_token\" >
                            <button type=\"submit\" class=\"btn btn-meet\">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal for Editing Event -->
            <div class=\"modal fade\" id=\"editEventModal{{ event.id }}\" tabindex=\"-1\" aria-labelledby=\"editEventModalLabel{{ event.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editEventModalLabel{{ event.id }}\">Edit Event</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <!-- Message flash dans le modal -->
                            {% for message in app.flashes('success1') %}
                                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                    {{ message }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endfor %}

                            {% for message in app.flashes('error1') %}
                                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                    {{ message }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endfor %}

                            <div class=\"form-container\">
                                <!-- Ajout du logo -->
                                <div class=\"text-center my-3\">
                                    <img src=\"{{ asset('img/brand-logo.png') }}\" alt=\"MeetNTrip Logo\" class=\"img-fluid\" style=\"max-width: 200px;\">
                                </div>
                            
                                {{ form_start(editForms[event.id], {
                                    'action': path('admin_evenement_edit', {'id': event.id}),
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
            <script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var flashMessages = document.querySelectorAll(\"#flashModal .alert\");
        if (flashMessages.length > 0) {
            var flashModal = new bootstrap.Modal(document.getElementById(\"flashModal\"));
            flashModal.show();
        }
    });
</script>
        {% endfor %}
    </div>
</div></div>
{% endblock %}
 ", "Gestion_Evennement/admin/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\Gestion_Evennement\\admin\\index.html.twig");
    }
}
