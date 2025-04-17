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

/* gestion_de_reservation/booking/update_hotel.html.twig */
class __TwigTemplate_dbe0de986b9be0ba7b266050f6f1e845 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_hotel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_hotel.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/update_hotel.html.twig", 1);
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

        yield "Update Hotel Selection";
        
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
        yield "    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 wow fadeInUp\">Select Hotel in ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>
        
        <div class=\"row g-4\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 11
            yield "                ";
            $context["hotelData"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["hotelImages"]) || array_key_exists("hotelImages", $context) ? $context["hotelImages"] : (function () { throw new RuntimeError('Variable "hotelImages" does not exist.', 11, $this->source); })()), function ($__h__) use ($context, $macros) { $context["h"] = $__h__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11) == CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 11)); }));
            // line 12
            yield "                <div class=\"col-lg-4 col-md-6 wow fadeInUp\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"";
            // line 15
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hotelData"] ?? null), "frontimage", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotelData"]) || array_key_exists("hotelData", $context) ? $context["hotelData"] : (function () { throw new RuntimeError('Variable "hotelData" does not exist.', 15, $this->source); })()), "frontimage", [], "any", false, false, false, 15)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotelData"]) || array_key_exists("hotelData", $context) ? $context["hotelData"] : (function () { throw new RuntimeError('Variable "hotelData" does not exist.', 15, $this->source); })()), "frontimage", [], "any", false, false, false, 15), "html", null, true)) : ("/images/default-hotel.jpg"));
            yield "\" 
                                 alt=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "\" 
                                 class=\"img-fluid\"
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 25), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"text-end\">
                                        <div class=\"text-muted small\">per night</div>
                                        <h4 class=\"text-success mb-0\">\$";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "pricePerNight", [], "any", false, false, false, 29), 2), "html", null, true);
            yield "</h4>
                                    </div>
                                </div>
                                
                                <div class=\"rating mb-3\">
                                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                yield "                                        ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "rating", [], "any", false, false, false, 35))) {
                    // line 36
                    yield "                                            <i class=\"fas fa-star text-warning\"></i>
                                        ";
                } else {
                    // line 38
                    yield "                                            <i class=\"far fa-star text-warning\"></i>
                                        ";
                }
                // line 40
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                                    <span class=\"ms-2 text-muted\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "rating", [], "any", false, false, false, 41), "html", null, true);
            yield "/5)</span>
                                </div>
                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showHotelDetails('";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 47), "html", null, true);
            yield "')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <form action=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_process", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 51, $this->source); })()), "bookingId", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" method=\"POST\">
                                    <input type=\"hidden\" name=\"hotel_id\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 52), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"hotel_price\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "pricePerNight", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                        <i class=\"fas fa-check-circle me-1\"></i>
                                        Select Hotel
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hotel Details Modal -->
                <div class=\"modal fade\" id=\"hotelModal-";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 65), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 69), "html", null, true);
            yield "</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                ";
            // line 73
            if ((isset($context["hotelData"]) || array_key_exists("hotelData", $context) ? $context["hotelData"] : (function () { throw new RuntimeError('Variable "hotelData" does not exist.', 73, $this->source); })())) {
                // line 74
                yield "                                <div id=\"carousel-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 74), "html", null, true);
                yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hotelData"]) || array_key_exists("hotelData", $context) ? $context["hotelData"] : (function () { throw new RuntimeError('Variable "hotelData" does not exist.', 76, $this->source); })()), "images", [], "any", false, false, false, 76));
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
                    // line 77
                    yield "                                            <div class=\"carousel-item ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 77)) {
                        yield "active";
                    }
                    yield "\">
                                                <img src=\"";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                    yield "\" class=\"d-block w-100 rounded\" 
                                                     alt=\"Hotel image ";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 79), "html", null, true);
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
                // line 83
                yield "                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 84), "html", null, true);
                yield "\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 87), "html", null, true);
                yield "\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                                ";
            }
            // line 92
            yield "                                
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Location</h5>
                                        <p>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 96), "html", null, true);
            yield "</p>
                                        
                                        <h5><i class=\"fas fa-star text-warning me-2\"></i>Rating</h5>
                                        <p>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "rating", [], "any", false, false, false, 99), "html", null, true);
            yield "/5</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Description</h5>
                                        <p>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "description", [], "any", false, false, false, 103), "html", null, true);
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
        // line 111
        yield "        </div>
        
        <div class=\"text-center mt-5\">
            <a href=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_select", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 114, $this->source); })()), "bookingId", [], "any", false, false, false, 114), "type" => "conference"]), "html", null, true);
        yield "\" 
               class=\"btn btn-primary btn-lg\">
                Next: Select Conference Location
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
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

        // line 123
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    function showHotelDetails(hotelId) {
        new bootstrap.Modal(document.getElementById(`hotelModal-\${hotelId}`)).show();
    }
    </script>
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
        return "gestion_de_reservation/booking/update_hotel.html.twig";
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
        return array (  371 => 123,  358 => 122,  340 => 114,  335 => 111,  321 => 103,  314 => 99,  308 => 96,  302 => 92,  294 => 87,  288 => 84,  285 => 83,  267 => 79,  263 => 78,  256 => 77,  239 => 76,  233 => 74,  231 => 73,  224 => 69,  217 => 65,  202 => 53,  198 => 52,  194 => 51,  187 => 47,  177 => 41,  171 => 40,  167 => 38,  163 => 36,  160 => 35,  156 => 34,  148 => 29,  141 => 25,  134 => 21,  126 => 16,  122 => 15,  117 => 12,  114 => 11,  110 => 10,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Update Hotel Selection{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 wow fadeInUp\">Select Hotel in {{ eventLocation }}</h1>
        
        <div class=\"row g-4\">
            {% for hotel in hotels %}
                {% set hotelData = hotelImages|filter(h => h.name == hotel.name)|first %}
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"{{ hotelData.frontimage ?? '/images/default-hotel.jpg' }}\" 
                                 alt=\"{{ hotel.name }}\" 
                                 class=\"img-fluid\"
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">{{ hotel.name }}</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>{{ hotel.city }}
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
                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showHotelDetails('{{ hotel.hotelId }}')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <form action=\"{{ path('app_booking_update_process', {'id': booking.bookingId}) }}\" method=\"POST\">
                                    <input type=\"hidden\" name=\"hotel_id\" value=\"{{ hotel.hotelId }}\">
                                    <input type=\"hidden\" name=\"hotel_price\" value=\"{{ hotel.pricePerNight }}\">
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                        <i class=\"fas fa-check-circle me-1\"></i>
                                        Select Hotel
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hotel Details Modal -->
                <div class=\"modal fade\" id=\"hotelModal-{{ hotel.hotelId }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">{{ hotel.name }}</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                {% if hotelData %}
                                <div id=\"carousel-{{ hotel.hotelId }}\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        {% for image in hotelData.images %}
                                            <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                                <img src=\"{{ image }}\" class=\"d-block w-100 rounded\" 
                                                     alt=\"Hotel image {{ loop.index }}\" 
                                                     style=\"height: 400px; object-fit: cover;\">
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-{{ hotel.hotelId }}\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-{{ hotel.hotelId }}\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                                {% endif %}
                                
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Location</h5>
                                        <p>{{ hotel.city }}</p>
                                        
                                        <h5><i class=\"fas fa-star text-warning me-2\"></i>Rating</h5>
                                        <p>{{ hotel.rating }}/5</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Description</h5>
                                        <p>{{ hotel.description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <div class=\"text-center mt-5\">
            <a href=\"{{ path('app_booking_update_select', {'id': booking.bookingId, 'type': 'conference'}) }}\" 
               class=\"btn btn-primary btn-lg\">
                Next: Select Conference Location
            </a>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    function showHotelDetails(hotelId) {
        new bootstrap.Modal(document.getElementById(`hotelModal-\${hotelId}`)).show();
    }
    </script>
{% endblock %}", "gestion_de_reservation/booking/update_hotel.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\update_hotel.html.twig");
    }
}
