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

/* gestion_de_reservation/booking_admin/show.html.twig */
class __TwigTemplate_95690c04e17b1ce71351d3da3ba5f7eb extends Template
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
            'admin' => [$this, 'block_admin'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "gestion_de_reservation/booking_admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking_admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking_admin/show.html.twig"));

        $this->parent = $this->loadTemplate("gestion_de_reservation/booking_admin/base.html.twig", "gestion_de_reservation/booking_admin/show.html.twig", 1);
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

        yield "Booking Details #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
            <h3 class=\"mb-0\">Booking #";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "</h3>
            <span class=\"badge ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 10, $this->source); })()), "status", [], "any", false, false, false, 10) == "confirmed")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 10, $this->source); })()), "status", [], "any", false, false, false, 10) == "not_confirmed")) {
            yield "bg-danger";
        } else {
            yield "bg-warning";
        }
        yield " fs-6\">
                ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "status", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 11, $this->source); })()), "status", [], "any", false, false, false, 11), "pending")) : ("pending"))), "html", null, true);
        yield "
            </span>
        </div>
        
        <div class=\"card-body\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["error"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
            <div class=\"row g-4\">
                <!-- Basic Information -->
                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-info-circle me-2\"></i>Basic Information
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Booking Date:</span>
                                <span class=\"fw-bold\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "bookingDate", [], "any", false, false, false, 40), "Y-m-d H:i"), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">User Email:</span>
                                <span class=\"fw-bold\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "userEmail", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Total Price:</span>
                                <span class=\"fw-bold text-primary\">\$";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 48, $this->source); })()), "priceTotal", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Flight Details -->
                ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 55, $this->source); })()), "airlines", [], "any", false, false, false, 55)) {
            // line 56
            yield "                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-plane me-2\"></i>Flight Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Airline:</span>
                                <span class=\"fw-bold\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 64, $this->source); })()), "airlines", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Departure:</span>
                                <span class=\"fw-bold\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 68, $this->source); })()), "departureTime", [], "any", false, false, false, 68), "H:i"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Return:</span>
                                <span class=\"fw-bold\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 72, $this->source); })()), "backTime", [], "any", false, false, false, 72), "H:i"), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 78
        yield "
                <!-- Hotel Details -->
                ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 80, $this->source); })()), "hotelName", [], "any", false, false, false, 80)) {
            // line 81
            yield "                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-hotel me-2\"></i>Hotel Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Hotel:</span>
                                <span class=\"fw-bold\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 89, $this->source); })()), "hotelName", [], "any", false, false, false, 89), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">City:</span>
                                <span class=\"fw-bold\">";
            // line 93
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "hotel", [], "any", false, true, false, 93), "city", [], "any", true, true, false, 93) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 93, $this->source); })()), "hotel", [], "any", false, false, false, 93), "city", [], "any", false, false, false, 93)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 93, $this->source); })()), "hotel", [], "any", false, false, false, 93), "city", [], "any", false, false, false, 93), "html", null, true)) : ("N/A"));
            yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 99
        yield "
                <!-- Conference Details -->
                ";
        // line 101
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 101, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 101)) {
            // line 102
            yield "                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-building me-2\"></i>Conference Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Location:</span>
                                <span class=\"fw-bold\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 110, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">City:</span>
                                <span class=\"fw-bold\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 114, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 114), "city", [], "any", false, false, false, 114), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Capacity:</span>
                                <span class=\"fw-bold\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 118, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 118), "capacity", [], "any", false, false, false, 118), "html", null, true);
            yield " people</span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 124
        yield "
                <!-- Event Details -->
                ";
        // line 126
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 126, $this->source); })()), "evenement", [], "any", false, false, false, 126)) {
            // line 127
            yield "                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-calendar-alt me-2\"></i>Event Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Event:</span>
                                <span class=\"fw-bold\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 135, $this->source); })()), "evenement", [], "any", false, false, false, 135), "nom", [], "any", false, false, false, 135), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Start Date:</span>
                                <span class=\"fw-bold\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 139, $this->source); })()), "evenement", [], "any", false, false, false, 139), "dateDebut", [], "any", false, false, false, 139), "Y-m-d"), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">End Date:</span>
                                <span class=\"fw-bold\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 143, $this->source); })()), "evenement", [], "any", false, false, false, 143), "dateFin", [], "any", false, false, false, 143), "Y-m-d"), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 149
        yield "            </div>

            ";
        // line 151
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 151, $this->source); })()), "status", [], "any", false, false, false, 151) != "confirmed") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 151, $this->source); })()), "status", [], "any", false, false, false, 151) != "not_confirmed"))) {
            // line 152
            yield "            <div class=\"mt-4 text-center\">
                <form action=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_update_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bookings_list");
            yield "\">
                    <button type=\"submit\" name=\"status\" value=\"confirmed\" class=\"btn btn-success btn-lg me-3\">
                        <i class=\"fas fa-check me-2\"></i>Confirm Booking
                    </button>
                    <button type=\"submit\" name=\"status\" value=\"not_confirmed\" class=\"btn btn-danger btn-lg\">
                        <i class=\"fas fa-times me-2\"></i>Reject Booking
                    </button>
                </form>
            </div>
            ";
        }
        // line 164
        yield "        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bookings_list");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Back to List
        </a>
    </div>
</div>

<style>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.bg-light {
    background-color: #f8f9fa !important;
}
.card-title {
    color: #0d6efd;
}
.text-muted {
    color: #6c757d !important;
}
.fw-bold {
    font-weight: 600 !important;
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
        return "gestion_de_reservation/booking_admin/show.html.twig";
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
        return array (  379 => 168,  373 => 164,  360 => 154,  356 => 153,  353 => 152,  351 => 151,  347 => 149,  338 => 143,  331 => 139,  324 => 135,  314 => 127,  312 => 126,  308 => 124,  299 => 118,  292 => 114,  285 => 110,  275 => 102,  273 => 101,  269 => 99,  260 => 93,  253 => 89,  243 => 81,  241 => 80,  237 => 78,  228 => 72,  221 => 68,  214 => 64,  204 => 56,  202 => 55,  192 => 48,  185 => 44,  178 => 40,  165 => 29,  155 => 25,  152 => 24,  148 => 23,  145 => 22,  135 => 18,  132 => 17,  128 => 16,  120 => 11,  110 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'gestion_de_reservation/booking_admin/base.html.twig' %}

{% block title %}Booking Details #{{ booking.id }}{% endblock %}

{% block admin %}
<div class=\"container-fluid py-4\">
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
            <h3 class=\"mb-0\">Booking #{{ booking.id }}</h3>
            <span class=\"badge {% if booking.status == 'confirmed' %}bg-success{% elseif booking.status == 'not_confirmed' %}bg-danger{% else %}bg-warning{% endif %} fs-6\">
                {{ booking.status|default('pending')|upper }}
            </span>
        </div>
        
        <div class=\"card-body\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            <div class=\"row g-4\">
                <!-- Basic Information -->
                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-info-circle me-2\"></i>Basic Information
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Booking Date:</span>
                                <span class=\"fw-bold\">{{ booking.bookingDate|date('Y-m-d H:i') }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">User Email:</span>
                                <span class=\"fw-bold\">{{ booking.userEmail }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Total Price:</span>
                                <span class=\"fw-bold text-primary\">\${{ booking.priceTotal }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Flight Details -->
                {% if booking.airlines %}
                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-plane me-2\"></i>Flight Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Airline:</span>
                                <span class=\"fw-bold\">{{ booking.airlines }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Departure:</span>
                                <span class=\"fw-bold\">{{ booking.departureTime|date('H:i') }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Return:</span>
                                <span class=\"fw-bold\">{{ booking.backTime|date('H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- Hotel Details -->
                {% if booking.hotelName %}
                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-hotel me-2\"></i>Hotel Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Hotel:</span>
                                <span class=\"fw-bold\">{{ booking.hotelName }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">City:</span>
                                <span class=\"fw-bold\">{{ booking.hotel.city ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- Conference Details -->
                {% if booking.conferenceLocation %}
                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-building me-2\"></i>Conference Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Location:</span>
                                <span class=\"fw-bold\">{{ booking.conferenceLocation.name }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">City:</span>
                                <span class=\"fw-bold\">{{ booking.conferenceLocation.city }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Capacity:</span>
                                <span class=\"fw-bold\">{{ booking.conferenceLocation.capacity }} people</span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}

                <!-- Event Details -->
                {% if booking.evenement %}
                <div class=\"col-md-6\">
                    <div class=\"card h-100 border-0 bg-light\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title border-bottom pb-2 mb-3\">
                                <i class=\"fas fa-calendar-alt me-2\"></i>Event Details
                            </h5>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Event:</span>
                                <span class=\"fw-bold\">{{ booking.evenement.nom }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"text-muted\">Start Date:</span>
                                <span class=\"fw-bold\">{{ booking.evenement.dateDebut|date('Y-m-d') }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">End Date:</span>
                                <span class=\"fw-bold\">{{ booking.evenement.dateFin|date('Y-m-d') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>

            {% if booking.status != 'confirmed' and booking.status != 'not_confirmed' %}
            <div class=\"mt-4 text-center\">
                <form action=\"{{ path('admin_booking_update_status', {'id': booking.id}) }}\" method=\"POST\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"redirect\" value=\"{{ path('admin_bookings_list') }}\">
                    <button type=\"submit\" name=\"status\" value=\"confirmed\" class=\"btn btn-success btn-lg me-3\">
                        <i class=\"fas fa-check me-2\"></i>Confirm Booking
                    </button>
                    <button type=\"submit\" name=\"status\" value=\"not_confirmed\" class=\"btn btn-danger btn-lg\">
                        <i class=\"fas fa-times me-2\"></i>Reject Booking
                    </button>
                </form>
            </div>
            {% endif %}
        </div>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('admin_bookings_list') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Back to List
        </a>
    </div>
</div>

<style>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.bg-light {
    background-color: #f8f9fa !important;
}
.card-title {
    color: #0d6efd;
}
.text-muted {
    color: #6c757d !important;
}
.fw-bold {
    font-weight: 600 !important;
}
</style>
{% endblock %}
", "gestion_de_reservation/booking_admin/show.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\gestion_de_reservation\\booking_admin\\show.html.twig");
    }
}
