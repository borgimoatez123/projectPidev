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

/* gestion_de_reservation/hotel/index.html.twig */
class __TwigTemplate_2eb6a71f58afc7cb0084a46bbb184157 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/hotel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/hotel/index.html.twig", 1);
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

        yield "Hotels - MeetNTrip";
        
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
        yield "    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-secondary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Available Hotels</h1>

        <div class=\"bg-light rounded p-4 mb-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h4 class=\"text-primary mb-3\">Trip Details</h4>
                    <p>
                        <i class=\"fas fa-city me-2\"></i>
                        <strong>City:</strong>
                        ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</p>
                    <p>
                        <i class=\"far fa-calendar-alt me-2\"></i>
                        <strong>Event Dates:</strong>
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "
                        to
                        ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</p>
                    <p>
                        <i class=\"fas fa-users me-2\"></i>
                        <strong>Number of Guests:</strong>
                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-md-6\">
                    <h4 class=\"text-primary mb-3\">Flight Details</h4>
                    <p>
                        <i class=\"fas fa-plane me-2\"></i>
                        <strong>Flight ID:</strong>
                        ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flight_id"]) || array_key_exists("flight_id", $context) ? $context["flight_id"] : (function () { throw new RuntimeError('Variable "flight_id" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "</p>
                    <p>
                        <i class=\"far fa-clock me-2\"></i>
                        <strong>Departure:</strong>
                        ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["departure_time"]) || array_key_exists("departure_time", $context) ? $context["departure_time"] : (function () { throw new RuntimeError('Variable "departure_time" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "</p>
                    <p>
                        <i class=\"far fa-clock me-2\"></i>
                        <strong>Return:</strong>
                        ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["back_time"]) || array_key_exists("back_time", $context) ? $context["back_time"] : (function () { throw new RuntimeError('Variable "back_time" does not exist.', 49, $this->source); })()), "html", null, true);
        yield "</p>
                    <p>
                        <i class=\"fas fa-dollar-sign me-2\"></i>
                        <strong>Flight Price:</strong>
                        \$";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["flight_price"]) || array_key_exists("flight_price", $context) ? $context["flight_price"] : (function () { throw new RuntimeError('Variable "flight_price" does not exist.', 53, $this->source); })()), 2), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <div class=\"row g-4\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 60
            yield "                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotelImages"]) || array_key_exists("hotelImages", $context) ? $context["hotelImages"] : (function () { throw new RuntimeError('Variable "hotelImages" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["h"], "name", [], "any", false, false, false, 63) == CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 63))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "frontimage", [], "any", false, false, false, 63), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\" 
                                 alt=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "\" 
                                 class=\"img-fluid\" 
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 69), "html", null, true);
            yield "</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "location", [], "any", false, false, false, 73), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"text-end\">
                                        <div class=\"text-muted small\">per night</div>
                                        <h4 class=\"text-success mb-0\">\$";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "pricePerNight", [], "any", false, false, false, 77), 2), "html", null, true);
            yield "</h4>
                                    </div>
                                </div>
                                
                                <div class=\"rating mb-3\">
                                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                yield "                                        ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "rating", [], "any", false, false, false, 83))) {
                    // line 84
                    yield "                                            <i class=\"fas fa-star text-warning\"></i>
                                        ";
                } else {
                    // line 86
                    yield "                                            <i class=\"far fa-star text-warning\"></i>
                                        ";
                }
                // line 88
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                                    <span class=\"ms-2 text-muted\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "rating", [], "any", false, false, false, 89), "html", null, true);
            yield "/5)</span>
                                </div>

                                ";
            // line 92
            if (CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 92)) {
                // line 93
                yield "                                    <div class=\"bg-light p-3 rounded\">
                                        <h6 class=\"text-primary mb-3\">
                                            <i class=\"fas fa-info-circle me-2\"></i>Description
                                        </h6>
                                        <p class=\"mb-0\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 97), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 97)) > 100)) {
                    yield "...";
                }
                yield "</p>
                                    </div>
                                ";
            }
            // line 100
            yield "                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showHotelDetails('";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 104), "html", null, true);
            yield "')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_select", ["hotel_id" => CoreExtension::getAttribute($this->env, $this->source,             // line 109
$context["hotel"], "hotelId", [], "any", false, false, false, 109), "flight_id" =>             // line 110
(isset($context["flight_id"]) || array_key_exists("flight_id", $context) ? $context["flight_id"] : (function () { throw new RuntimeError('Variable "flight_id" does not exist.', 110, $this->source); })()), "departure_time" =>             // line 111
(isset($context["departure_time"]) || array_key_exists("departure_time", $context) ? $context["departure_time"] : (function () { throw new RuntimeError('Variable "departure_time" does not exist.', 111, $this->source); })()), "back_time" =>             // line 112
(isset($context["back_time"]) || array_key_exists("back_time", $context) ? $context["back_time"] : (function () { throw new RuntimeError('Variable "back_time" does not exist.', 112, $this->source); })()), "flight_price" =>             // line 113
(isset($context["flight_price"]) || array_key_exists("flight_price", $context) ? $context["flight_price"] : (function () { throw new RuntimeError('Variable "flight_price" does not exist.', 113, $this->source); })()), "userid" =>             // line 114
(isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 114, $this->source); })()), "id_evenement" =>             // line 115
(isset($context["id_evenement"]) || array_key_exists("id_evenement", $context) ? $context["id_evenement"] : (function () { throw new RuntimeError('Variable "id_evenement" does not exist.', 115, $this->source); })()), "date_debut" =>             // line 116
(isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 116, $this->source); })()), "date_fin" =>             // line 117
(isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 117, $this->source); })()), "city" =>             // line 118
(isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 118, $this->source); })()), "nombre_invite" =>             // line 119
(isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 119, $this->source); })())]), "html", null, true);
            // line 120
            yield "\" class=\"btn btn-primary w-100\">
                                    <i class=\"fas fa-check-circle me-1\"></i>
                                    Select Hotel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 128
        if (!$context['_iterated']) {
            // line 129
            yield "                <div class=\"col-12\">
                    <div class=\"alert alert-info text-center py-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <i class=\"fas fa-hotel fa-3x text-primary mb-3\"></i>
                        <h4>No hotels available in this city</h4>
                        <p class=\"mb-0\">Please try different search criteria</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hotel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "        </div>
    </div>
    ";
        // line 140
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 141
            yield "    <div class=\"modal fade\" id=\"hotelModal-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 141), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 145), "html", null, true);
            yield "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div id=\"carousel-";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 149), "html", null, true);
            yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotelImages"]) || array_key_exists("hotelImages", $context) ? $context["hotelImages"] : (function () { throw new RuntimeError('Variable "hotelImages" does not exist.', 151, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 152
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["h"], "name", [], "any", false, false, false, 152) == CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 152))) {
                    // line 153
                    yield "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "images", [], "any", false, false, false, 153));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 154
                        yield "                                        <div class=\"carousel-item ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 154)) {
                            yield "active";
                        }
                        yield "\">
                                            <img src=\"";
                        // line 155
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                        yield "\" class=\"d-block w-100 rounded\" 
                                                 alt=\"Hotel image ";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 156), "html", null, true);
                        yield "\" 
                                                 style=\"height: 400px; object-fit: cover;\">
                                        </div>
                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    yield "                                ";
                }
                // line 161
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 163), "html", null, true);
            yield "\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 166), "html", null, true);
            yield "\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        </button>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Location</h5>
                            <p>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "location", [], "any", false, false, false, 174), "html", null, true);
            yield "</p>
                            
                            <h5><i class=\"fas fa-star text-warning me-2\"></i>Rating</h5>
                            <p>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "rating", [], "any", false, false, false, 177), "html", null, true);
            yield "/5</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5><i class=\"fas fa-money-bill-wave text-success me-2\"></i>Pricing</h5>
                            <p>\$";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "pricePerNight", [], "any", false, false, false, 181), 2), "html", null, true);
            yield " per night</p>
                            
                            <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Full Description</h5>
                            <p>";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 184), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hotel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 194
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

        // line 195
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    function showHotelDetails(hotelId) {
        new bootstrap.Modal(document.getElementById(`hotelModal-\${hotelId}`)).show();
    }
    </script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
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
        return "gestion_de_reservation/hotel/index.html.twig";
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
        return array (  526 => 207,  522 => 206,  518 => 205,  514 => 204,  510 => 203,  498 => 195,  485 => 194,  462 => 184,  456 => 181,  449 => 177,  443 => 174,  432 => 166,  426 => 163,  423 => 162,  417 => 161,  414 => 160,  396 => 156,  392 => 155,  385 => 154,  367 => 153,  364 => 152,  360 => 151,  355 => 149,  348 => 145,  340 => 141,  335 => 140,  331 => 137,  318 => 129,  316 => 128,  304 => 120,  302 => 119,  301 => 118,  300 => 117,  299 => 116,  298 => 115,  297 => 114,  296 => 113,  295 => 112,  294 => 111,  293 => 110,  292 => 109,  291 => 108,  284 => 104,  278 => 100,  269 => 97,  263 => 93,  261 => 92,  254 => 89,  248 => 88,  244 => 86,  240 => 84,  237 => 83,  233 => 82,  225 => 77,  218 => 73,  211 => 69,  203 => 64,  190 => 63,  185 => 60,  180 => 59,  171 => 53,  164 => 49,  157 => 45,  150 => 41,  140 => 34,  133 => 30,  128 => 28,  121 => 24,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Hotels - MeetNTrip{% endblock %}

{% block body %}
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-secondary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">Available Hotels</h1>

        <div class=\"bg-light rounded p-4 mb-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h4 class=\"text-primary mb-3\">Trip Details</h4>
                    <p>
                        <i class=\"fas fa-city me-2\"></i>
                        <strong>City:</strong>
                        {{ city }}</p>
                    <p>
                        <i class=\"far fa-calendar-alt me-2\"></i>
                        <strong>Event Dates:</strong>
                        {{ date_debut }}
                        to
                        {{ date_fin }}</p>
                    <p>
                        <i class=\"fas fa-users me-2\"></i>
                        <strong>Number of Guests:</strong>
                        {{ nombre_invite }}</p>
                </div>
                <div class=\"col-md-6\">
                    <h4 class=\"text-primary mb-3\">Flight Details</h4>
                    <p>
                        <i class=\"fas fa-plane me-2\"></i>
                        <strong>Flight ID:</strong>
                        {{ flight_id }}</p>
                    <p>
                        <i class=\"far fa-clock me-2\"></i>
                        <strong>Departure:</strong>
                        {{ departure_time }}</p>
                    <p>
                        <i class=\"far fa-clock me-2\"></i>
                        <strong>Return:</strong>
                        {{ back_time }}</p>
                    <p>
                        <i class=\"fas fa-dollar-sign me-2\"></i>
                        <strong>Flight Price:</strong>
                        \${{ flight_price|number_format(2) }}</p>
                </div>
            </div>
        </div>

        <div class=\"row g-4\">
            {% for hotel in hotels %}
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"{% for h in hotelImages %}{% if h.name == hotel.name %}{{ h.frontimage }}{% endif %}{% endfor %}\" 
                                 alt=\"{{ hotel.name }}\" 
                                 class=\"img-fluid\" 
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">{{ hotel.name }}</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>{{ hotel.location }}
                                    </div>
                                    <div class=\"text-end\">
                                        <div class=\"text-muted small\">per night</div>
                                        <h4 class=\"text-success mb-0\">\${{ hotel.pricePerNight|number_format(2) }}</h4>
                                    </div>
                                </div>
                                
                                <div class=\"rating mb-3\">
                                    {% for i in 1..5 %}
                                        {% if i <= hotel.rating %}
                                            <i class=\"fas fa-star text-warning\"></i>
                                        {% else %}
                                            <i class=\"far fa-star text-warning\"></i>
                                        {% endif %}
                                    {% endfor %}
                                    <span class=\"ms-2 text-muted\">({{ hotel.rating }}/5)</span>
                                </div>

                                {% if hotel.description %}
                                    <div class=\"bg-light p-3 rounded\">
                                        <h6 class=\"text-primary mb-3\">
                                            <i class=\"fas fa-info-circle me-2\"></i>Description
                                        </h6>
                                        <p class=\"mb-0\">{{ hotel.description|slice(0, 100) }}{% if hotel.description|length > 100 %}...{% endif %}</p>
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showHotelDetails('{{ hotel.hotelId }}')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <a href=\"{{ path('app_hotel_select', { 
                                    'hotel_id': hotel.hotelId, 
                                    'flight_id': flight_id, 
                                    'departure_time': departure_time, 
                                    'back_time': back_time, 
                                    'flight_price': flight_price, 
                                    'userid': userid, 
                                    'id_evenement': id_evenement, 
                                    'date_debut': date_debut, 
                                    'date_fin': date_fin, 
                                    'city': city, 
                                    'nombre_invite': nombre_invite 
                                }) }}\" class=\"btn btn-primary w-100\">
                                    <i class=\"fas fa-check-circle me-1\"></i>
                                    Select Hotel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <div class=\"alert alert-info text-center py-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <i class=\"fas fa-hotel fa-3x text-primary mb-3\"></i>
                        <h4>No hotels available in this city</h4>
                        <p class=\"mb-0\">Please try different search criteria</p>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
    {# Add modals here inside the body block #}
    {% for hotel in hotels %}
    <div class=\"modal fade\" id=\"hotelModal-{{ hotel.hotelId }}\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ hotel.name }}</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div id=\"carousel-{{ hotel.hotelId }}\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            {% for h in hotelImages %}
                                {% if h.name == hotel.name %}
                                    {% for image in h.images %}
                                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                            <img src=\"{{ image }}\" class=\"d-block w-100 rounded\" 
                                                 alt=\"Hotel image {{ loop.index }}\" 
                                                 style=\"height: 400px; object-fit: cover;\">
                                        </div>
                                    {% endfor %}
                                {% endif %}
                            {% endfor %}
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-{{ hotel.hotelId }}\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-{{ hotel.hotelId }}\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        </button>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Location</h5>
                            <p>{{ hotel.location }}</p>
                            
                            <h5><i class=\"fas fa-star text-warning me-2\"></i>Rating</h5>
                            <p>{{ hotel.rating }}/5</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h5><i class=\"fas fa-money-bill-wave text-success me-2\"></i>Pricing</h5>
                            <p>\${{ hotel.pricePerNight|number_format(2) }} per night</p>
                            
                            <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Full Description</h5>
                            <p>{{ hotel.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    function showHotelDetails(hotelId) {
        new bootstrap.Modal(document.getElementById(`hotelModal-\${hotelId}`)).show();
    }
    </script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('assets/lib/wow/wow.min.js') }}\"></script>
    <script src=\"{{ asset('assets/lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('assets/lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('assets/lib/counterup/counterup.min.js') }}\"></script>
    <script src=\"{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
{% endblock %}
", "gestion_de_reservation/hotel/index.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\hotel\\index.html.twig");
    }
}
