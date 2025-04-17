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

/* gestion_de_reservation/booking/list.html.twig */
class __TwigTemplate_f460e99b15bf9ac169d97c2e0a8d5ed3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/list.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/list.html.twig", 1);
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

        yield "My Bookings";
        
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
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "status", [], "any", false, false, false, 6) == "islogedclient"))) {
            // line 7
            yield "        <div class=\"container py-5\">
            <h1 class=\"text-center mb-5\">My Bookings</h1>

            <!-- Pending Bookings Section -->
            <div class=\"mb-5\">
                <h2 class=\"text-primary mb-4\">
                    <i class=\"fas fa-clock me-2\"></i>Pending Bookings
                </h2>
                ";
            // line 15
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["pendingBookings"]) || array_key_exists("pendingBookings", $context) ? $context["pendingBookings"] : (function () { throw new RuntimeError('Variable "pendingBookings" does not exist.', 15, $this->source); })()))) {
                // line 16
                yield "                    <div class=\"row g-4\">
                        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pendingBookings"]) || array_key_exists("pendingBookings", $context) ? $context["pendingBookings"] : (function () { throw new RuntimeError('Variable "pendingBookings" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                    // line 18
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18))) {
                        // line 19
                        yield "                                <div class=\"col-md-6 col-lg-4\">
                                    <div class=\"card h-100 shadow-sm hover-card\">
                                        <div class=\"card-header bg-warning bg-opacity-10\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <h5 class=\"card-title mb-0\">";
                        // line 23
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "evenement", [], "any", false, true, false, 23), "nom", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "evenement", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "evenement", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23)) : ("Booking #")) . CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 23)), "html", null, true);
                        yield "</h5>
                                                <span class=\"badge bg-warning\">";
                        // line 24
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 24), "html", null, true);
                        yield "</span>
                                            </div>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                                ";
                        // line 30
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
                        yield "
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-user text-primary me-2\"></i>
                                                ";
                        // line 34
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "userName", [], "any", false, false, false, 34), "html", null, true);
                        yield "
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"fas fa-tag text-primary me-2\"></i>
                                                \$";
                        // line 38
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 38), "html", null, true);
                        yield "
                                            </div>
                                        </div>
                                        <div class=\"card-footer bg-light\">
                                            <div class=\"d-flex justify-content-between\">
                                                <a href=\"";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_select", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 43), "type" => "flight"]), "html", null, true);
                        yield "\" 
                                                   class=\"btn btn-outline-primary btn-sm\">
                                                    <i class=\"fas fa-edit me-1\"></i>Update
                                                </a>
                                                <form action=\"";
                        // line 47
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                        yield "\" method=\"post\" 
                                                      onsubmit=\"return confirm('Are you sure you want to delete this booking?');\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 50
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 50))), "html", null, true);
                        yield "\">
                                                    <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                                        <i class=\"fas fa-trash-alt me-1\"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 60
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "                    </div>
                ";
            } else {
                // line 63
                yield "                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No pending bookings found.
                    </div>
                ";
            }
            // line 67
            yield "            </div>

            <!-- Confirmed Bookings Section -->
            <div class=\"mb-5\">
                <h2 class=\"text-success mb-4\">
                    <i class=\"fas fa-check-circle me-2\"></i>Confirmed Bookings
                </h2>
                ";
            // line 74
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["confirmedBookings"]) || array_key_exists("confirmedBookings", $context) ? $context["confirmedBookings"] : (function () { throw new RuntimeError('Variable "confirmedBookings" does not exist.', 74, $this->source); })()))) {
                // line 75
                yield "                    <div class=\"row g-4\">
                        ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["confirmedBookings"]) || array_key_exists("confirmedBookings", $context) ? $context["confirmedBookings"] : (function () { throw new RuntimeError('Variable "confirmedBookings" does not exist.', 76, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                    // line 77
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77))) {
                        // line 78
                        yield "                                <div class=\"col-md-6 col-lg-4\">
                                    <div class=\"card h-100 shadow-sm hover-card\">
                                        <div class=\"card-header bg-success bg-opacity-10\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <h5 class=\"card-title mb-0\">";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "evenement", [], "any", false, true, false, 82), "nom", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "evenement", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "evenement", [], "any", false, false, false, 82), "nom", [], "any", false, false, false, 82)) : ("Booking #")) . CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 82)), "html", null, true);
                        yield "</h5>
                                                <span class=\"badge bg-success\">";
                        // line 83
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 83), "html", null, true);
                        yield "</span>
                                            </div>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-calendar-alt text-success me-2\"></i>
                                                ";
                        // line 89
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true);
                        yield "
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-user text-success me-2\"></i>
                                                ";
                        // line 93
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "userName", [], "any", false, false, false, 93), "html", null, true);
                        yield "
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"fas fa-tag text-success me-2\"></i>
                                                \$";
                        // line 97
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 97), "html", null, true);
                        yield "
                                            </div>
                                        </div>
                                        <div class=\"card-footer bg-light\">
                                            <div class=\"d-flex justify-content-between\">
                                                <a href=\"";
                        // line 102
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_select", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 102), "type" => "flight"]), "html", null, true);
                        yield "\" 
                                                   class=\"btn btn-outline-success btn-sm\">
                                                    <i class=\"fas fa-edit me-1\"></i>Update
                                                </a>
                                                <form action=\"";
                        // line 106
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 106)]), "html", null, true);
                        yield "\" method=\"post\" 
                                                      onsubmit=\"return confirm('Are you sure you want to delete this booking?');\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 109
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 109))), "html", null, true);
                        yield "\">
                                                    <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                                        <i class=\"fas fa-trash-alt me-1\"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 119
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "                    </div>
                ";
            } else {
                // line 122
                yield "                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No confirmed bookings found.
                    </div>
                ";
            }
            // line 126
            yield "            </div>
        </div>

        <style>
            .hover-card {
                transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            }
            .hover-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }
            .card-header {
                border-bottom: none;
            }
            .card-footer {
                border-top: none;
            }
        </style>
    ";
        } else {
            // line 145
            yield "        <div class=\"container py-5 text-center\">
            <div class=\"alert alert-danger\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                Access denied. This page is only available for clients.
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gestion_de_reservation/booking/list.html.twig";
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
        return array (  333 => 145,  312 => 126,  306 => 122,  302 => 120,  296 => 119,  283 => 109,  277 => 106,  270 => 102,  262 => 97,  255 => 93,  248 => 89,  239 => 83,  235 => 82,  229 => 78,  226 => 77,  222 => 76,  219 => 75,  217 => 74,  208 => 67,  202 => 63,  198 => 61,  192 => 60,  179 => 50,  173 => 47,  166 => 43,  158 => 38,  151 => 34,  144 => 30,  135 => 24,  131 => 23,  125 => 19,  122 => 18,  118 => 17,  115 => 16,  113 => 15,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}My Bookings{% endblock %}

{% block body %}
    {% if app.user and app.user.status == 'islogedclient' %}
        <div class=\"container py-5\">
            <h1 class=\"text-center mb-5\">My Bookings</h1>

            <!-- Pending Bookings Section -->
            <div class=\"mb-5\">
                <h2 class=\"text-primary mb-4\">
                    <i class=\"fas fa-clock me-2\"></i>Pending Bookings
                </h2>
                {% if pendingBookings is not empty %}
                    <div class=\"row g-4\">
                        {% for booking in pendingBookings %}
                            {% if booking.user.id == app.user.id %}
                                <div class=\"col-md-6 col-lg-4\">
                                    <div class=\"card h-100 shadow-sm hover-card\">
                                        <div class=\"card-header bg-warning bg-opacity-10\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <h5 class=\"card-title mb-0\">{{ booking.evenement.nom ?? 'Booking #' ~ booking.id }}</h5>
                                                <span class=\"badge bg-warning\">{{ booking.status }}</span>
                                            </div>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-calendar-alt text-primary me-2\"></i>
                                                {{ booking.bookingDate|date('Y-m-d H:i:s') }}
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-user text-primary me-2\"></i>
                                                {{ booking.userName }}
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"fas fa-tag text-primary me-2\"></i>
                                                \${{ booking.priceTotal }}
                                            </div>
                                        </div>
                                        <div class=\"card-footer bg-light\">
                                            <div class=\"d-flex justify-content-between\">
                                                <a href=\"{{ path('app_booking_update_select', {'id': booking.id, 'type': 'flight'}) }}\" 
                                                   class=\"btn btn-outline-primary btn-sm\">
                                                    <i class=\"fas fa-edit me-1\"></i>Update
                                                </a>
                                                <form action=\"{{ path('app_booking_delete', {'id': booking.id}) }}\" method=\"post\" 
                                                      onsubmit=\"return confirm('Are you sure you want to delete this booking?');\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ booking.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                                        <i class=\"fas fa-trash-alt me-1\"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% else %}
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No pending bookings found.
                    </div>
                {% endif %}
            </div>

            <!-- Confirmed Bookings Section -->
            <div class=\"mb-5\">
                <h2 class=\"text-success mb-4\">
                    <i class=\"fas fa-check-circle me-2\"></i>Confirmed Bookings
                </h2>
                {% if confirmedBookings is not empty %}
                    <div class=\"row g-4\">
                        {% for booking in confirmedBookings %}
                            {% if booking.user.id == app.user.id %}
                                <div class=\"col-md-6 col-lg-4\">
                                    <div class=\"card h-100 shadow-sm hover-card\">
                                        <div class=\"card-header bg-success bg-opacity-10\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <h5 class=\"card-title mb-0\">{{ booking.evenement.nom ?? 'Booking #' ~ booking.bookingId }}</h5>
                                                <span class=\"badge bg-success\">{{ booking.status }}</span>
                                            </div>
                                        </div>
                                        <div class=\"card-body\">
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-calendar-alt text-success me-2\"></i>
                                                {{ booking.bookingDate|date('Y-m-d H:i:s') }}
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"far fa-user text-success me-2\"></i>
                                                {{ booking.userName }}
                                            </div>
                                            <div class=\"mb-3\">
                                                <i class=\"fas fa-tag text-success me-2\"></i>
                                                \${{ booking.priceTotal }}
                                            </div>
                                        </div>
                                        <div class=\"card-footer bg-light\">
                                            <div class=\"d-flex justify-content-between\">
                                                <a href=\"{{ path('app_booking_update_select', {'id': booking.id, 'type': 'flight'}) }}\" 
                                                   class=\"btn btn-outline-success btn-sm\">
                                                    <i class=\"fas fa-edit me-1\"></i>Update
                                                </a>
                                                <form action=\"{{ path('app_booking_delete', {'id': booking.bookingId}) }}\" method=\"post\" 
                                                      onsubmit=\"return confirm('Are you sure you want to delete this booking?');\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ booking.bookingId) }}\">
                                                    <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                                        <i class=\"fas fa-trash-alt me-1\"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% else %}
                    <div class=\"alert alert-info\">
                        <i class=\"fas fa-info-circle me-2\"></i>No confirmed bookings found.
                    </div>
                {% endif %}
            </div>
        </div>

        <style>
            .hover-card {
                transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            }
            .hover-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }
            .card-header {
                border-bottom: none;
            }
            .card-footer {
                border-top: none;
            }
        </style>
    {% else %}
        <div class=\"container py-5 text-center\">
            <div class=\"alert alert-danger\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                Access denied. This page is only available for clients.
            </div>
        </div>
    {% endif %}
{% endblock %}
", "gestion_de_reservation/booking/list.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\list.html.twig");
    }
}
