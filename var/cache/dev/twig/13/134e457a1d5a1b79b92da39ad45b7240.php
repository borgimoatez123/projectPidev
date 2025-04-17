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

/* gestion_de_reservation/booking/update_conference.html.twig */
class __TwigTemplate_947e2cc6376b2ff70424d7f612a63ccc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_conference.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_conference.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/update_conference.html.twig", 1);
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

        yield "Update Conference Location";
        
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
        <h1 class=\"text-center mb-5 wow fadeInUp\">Select Conference Location in ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>
        
        <div class=\"row g-4\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 11
            yield "                ";
            $context["locationData"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["conferenceImages"]) || array_key_exists("conferenceImages", $context) ? $context["conferenceImages"] : (function () { throw new RuntimeError('Variable "conferenceImages" does not exist.', 11, $this->source); })()), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11) == CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 11)); }));
            // line 12
            yield "                <div class=\"col-lg-4 col-md-6 wow fadeInUp\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"";
            // line 15
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locationData"] ?? null), "fontimage", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 15, $this->source); })()), "fontimage", [], "any", false, false, false, 15)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 15, $this->source); })()), "fontimage", [], "any", false, false, false, 15), "html", null, true)) : ("/images/default-conference.jpg"));
            yield "\" 
                                 alt=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "\" 
                                 class=\"img-fluid\"
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "city", [], "any", false, false, false, 25), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"text-end\">
                                        <div class=\"text-muted small\">per day</div>
                                        <h4 class=\"text-success mb-0\">\$";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "pricePerDay", [], "any", false, false, false, 29), 2), "html", null, true);
            yield "</h4>
                                    </div>
                                </div>
                                
                                <div class=\"bg-light p-3 rounded mb-3\">
                                    <p class=\"mb-0\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 34), 0, 100), "html", null, true);
            yield "...</p>
                                </div>
                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showLocationDetails('";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 40), "html", null, true);
            yield "')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <form action=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_process", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "bookingId", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" method=\"POST\">
                                    <input type=\"hidden\" name=\"location_id\" value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"conference_price\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "pricePerDay", [], "any", false, false, false, 46), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                        <i class=\"fas fa-check-circle me-1\"></i>
                                        Select Venue
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Details Modal -->
                <div class=\"modal fade\" id=\"locationModal-";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 58), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 62), "html", null, true);
            yield "</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                ";
            // line 66
            if ((isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 66, $this->source); })())) {
                // line 67
                yield "                                <div id=\"carousel-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 67), "html", null, true);
                yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 69, $this->source); })()), "images", [], "any", false, false, false, 69));
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
                    // line 70
                    yield "                                            <div class=\"carousel-item ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 70)) {
                        yield "active";
                    }
                    yield "\">
                                                <img src=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                    yield "\" class=\"d-block w-100 rounded\" 
                                                     alt=\"Venue image ";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72), "html", null, true);
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
                // line 76
                yield "                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 77), "html", null, true);
                yield "\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 80), "html", null, true);
                yield "\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                                ";
            }
            // line 85
            yield "                                
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Address</h5>
                                        <p>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                                        
                                        <h5><i class=\"fas fa-users text-info me-2\"></i>Capacity</h5>
                                        <p>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "capacity", [], "any", false, false, false, 92), "html", null, true);
            yield " people</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Full Description</h5>
                                        <p>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 96), "html", null, true);
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
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "        </div>
        
        <div class=\"text-center mt-5\">
            <a href=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_select", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 107, $this->source); })()), "bookingId", [], "any", false, false, false, 107), "type" => "transport"]), "html", null, true);
        yield "\" 
               class=\"btn btn-primary btn-lg me-3\">
                Next: Select Transport
            </a>
            <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bookings_list");
        yield "\" class=\"btn btn-secondary btn-lg\">
                Cancel
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    function showLocationDetails(locationId) {
        new bootstrap.Modal(document.getElementById(`locationModal-\${locationId}`)).show();
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
        return "gestion_de_reservation/booking/update_conference.html.twig";
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
        return array (  355 => 119,  342 => 118,  325 => 111,  318 => 107,  313 => 104,  299 => 96,  292 => 92,  286 => 89,  280 => 85,  272 => 80,  266 => 77,  263 => 76,  245 => 72,  241 => 71,  234 => 70,  217 => 69,  211 => 67,  209 => 66,  202 => 62,  195 => 58,  180 => 46,  176 => 45,  172 => 44,  165 => 40,  156 => 34,  148 => 29,  141 => 25,  134 => 21,  126 => 16,  122 => 15,  117 => 12,  114 => 11,  110 => 10,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Update Conference Location{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 wow fadeInUp\">Select Conference Location in {{ eventLocation }}</h1>
        
        <div class=\"row g-4\">
            {% for location in locations %}
                {% set locationData = conferenceImages|filter(l => l.name == location.name)|first %}
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"{{ locationData.fontimage ?? '/images/default-conference.jpg' }}\" 
                                 alt=\"{{ location.name }}\" 
                                 class=\"img-fluid\"
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">{{ location.name }}</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>{{ location.city }}
                                    </div>
                                    <div class=\"text-end\">
                                        <div class=\"text-muted small\">per day</div>
                                        <h4 class=\"text-success mb-0\">\${{ location.pricePerDay|number_format(2) }}</h4>
                                    </div>
                                </div>
                                
                                <div class=\"bg-light p-3 rounded mb-3\">
                                    <p class=\"mb-0\">{{ location.description|slice(0, 100) }}...</p>
                                </div>
                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showLocationDetails('{{ location.locationId }}')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <form action=\"{{ path('app_booking_update_process', {'id': booking.bookingId}) }}\" method=\"POST\">
                                    <input type=\"hidden\" name=\"location_id\" value=\"{{ location.locationId }}\">
                                    <input type=\"hidden\" name=\"conference_price\" value=\"{{ location.pricePerDay }}\">
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                        <i class=\"fas fa-check-circle me-1\"></i>
                                        Select Venue
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Details Modal -->
                <div class=\"modal fade\" id=\"locationModal-{{ location.locationId }}\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">{{ location.name }}</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                {% if locationData %}
                                <div id=\"carousel-{{ location.locationId }}\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        {% for image in locationData.images %}
                                            <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                                <img src=\"{{ image }}\" class=\"d-block w-100 rounded\" 
                                                     alt=\"Venue image {{ loop.index }}\" 
                                                     style=\"height: 400px; object-fit: cover;\">
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-{{ location.locationId }}\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-{{ location.locationId }}\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                                {% endif %}
                                
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Address</h5>
                                        <p>{{ location.address }}</p>
                                        
                                        <h5><i class=\"fas fa-users text-info me-2\"></i>Capacity</h5>
                                        <p>{{ location.capacity }} people</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Full Description</h5>
                                        <p>{{ location.description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <div class=\"text-center mt-5\">
            <a href=\"{{ path('app_booking_update_select', {'id': booking.bookingId, 'type': 'transport'}) }}\" 
               class=\"btn btn-primary btn-lg me-3\">
                Next: Select Transport
            </a>
            <a href=\"{{ path('app_bookings_list') }}\" class=\"btn btn-secondary btn-lg\">
                Cancel
            </a>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    function showLocationDetails(locationId) {
        new bootstrap.Modal(document.getElementById(`locationModal-\${locationId}`)).show();
    }
    </script>
{% endblock %}", "gestion_de_reservation/booking/update_conference.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\update_conference.html.twig");
    }
}
