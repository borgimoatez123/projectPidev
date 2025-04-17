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

/* gestion_de_reservation/conference_location/index.html.twig */
class __TwigTemplate_5289a2414cb7aa6b7f7f2ffdd30fd07e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/conference_location/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/conference_location/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/conference_location/index.html.twig", 1);
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

        yield "Select Conference Location - MeetNTrip";
        
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
        <h1 class=\"text-center mb-5 wow fadeInUp\">Select Conference Location in ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</h1>

        <div class=\"row g-4\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 19
            yield "                ";
            $context["locationData"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["conferenceImages"]) || array_key_exists("conferenceImages", $context) ? $context["conferenceImages"] : (function () { throw new RuntimeError('Variable "conferenceImages" does not exist.', 19, $this->source); })()), function ($__l__) use ($context, $macros) { $context["l"] = $__l__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["l"]) || array_key_exists("l", $context) ? $context["l"] : (function () { throw new RuntimeError('Variable "l" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19) == CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 19)); }));
            // line 20
            yield "                <div class=\"col-lg-4 col-md-6 wow fadeInUp\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"";
            // line 23
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["locationData"] ?? null), "fontimage", [], "any", true, true, false, 23) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 23, $this->source); })()), "fontimage", [], "any", false, false, false, 23)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 23, $this->source); })()), "fontimage", [], "any", false, false, false, 23), "html", null, true)) : ("/images/default-conference.jpg"));
            yield "\" 
                                 alt=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "\" 
                                 class=\"img-fluid\"
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>
                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 29), "html", null, true);
            yield "</h5>
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-map-marker-alt me-1\"></i>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "city", [], "any", false, false, false, 33), "html", null, true);
            yield "
                                    </div>
                                    <div class=\"text-end\">
                                        <div class=\"text-muted small\">per day</div>
                                        <h4 class=\"text-success mb-0\">\$";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "pricePerDay", [], "any", false, false, false, 37), 2), "html", null, true);
            yield "</h4>
                                    </div>
                                </div>
                                
                                <div class=\"bg-light p-3 rounded mb-3\">
                                    <p class=\"mb-0\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 42), 0, 100), "html", null, true);
            yield "...</p>
                                </div>
                            </div>

                            <div class=\"mt-auto\">
                                <button class=\"btn btn-outline-primary w-100 mb-2\" 
                                        onclick=\"showLocationDetails('";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 48), "html", null, true);
            yield "')\">
                                    <i class=\"fas fa-images me-1\"></i>
                                    View Details
                                </button>
                                <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conference_location_select", ["location_id" => CoreExtension::getAttribute($this->env, $this->source,             // line 53
$context["location"], "locationId", [], "any", false, false, false, 53), "hotel_id" =>             // line 54
(isset($context["hotel_id"]) || array_key_exists("hotel_id", $context) ? $context["hotel_id"] : (function () { throw new RuntimeError('Variable "hotel_id" does not exist.', 54, $this->source); })()), "hotel_price" =>             // line 55
(isset($context["hotel_price"]) || array_key_exists("hotel_price", $context) ? $context["hotel_price"] : (function () { throw new RuntimeError('Variable "hotel_price" does not exist.', 55, $this->source); })()), "flight_id" =>             // line 56
(isset($context["flight_id"]) || array_key_exists("flight_id", $context) ? $context["flight_id"] : (function () { throw new RuntimeError('Variable "flight_id" does not exist.', 56, $this->source); })()), "flight_price" =>             // line 57
(isset($context["flight_price"]) || array_key_exists("flight_price", $context) ? $context["flight_price"] : (function () { throw new RuntimeError('Variable "flight_price" does not exist.', 57, $this->source); })()), "userid" =>             // line 58
(isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 58, $this->source); })()), "id_evenement" =>             // line 59
(isset($context["id_evenement"]) || array_key_exists("id_evenement", $context) ? $context["id_evenement"] : (function () { throw new RuntimeError('Variable "id_evenement" does not exist.', 59, $this->source); })()), "date_debut" =>             // line 60
(isset($context["date_debut"]) || array_key_exists("date_debut", $context) ? $context["date_debut"] : (function () { throw new RuntimeError('Variable "date_debut" does not exist.', 60, $this->source); })()), "date_fin" =>             // line 61
(isset($context["date_fin"]) || array_key_exists("date_fin", $context) ? $context["date_fin"] : (function () { throw new RuntimeError('Variable "date_fin" does not exist.', 61, $this->source); })()), "nombre_invite" =>             // line 62
(isset($context["nombre_invite"]) || array_key_exists("nombre_invite", $context) ? $context["nombre_invite"] : (function () { throw new RuntimeError('Variable "nombre_invite" does not exist.', 62, $this->source); })()), "conference_price" => CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["location"], "pricePerDay", [], "any", false, false, false, 63), "conference_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["location"], "name", [], "any", false, false, false, 64), "conference_city" => CoreExtension::getAttribute($this->env, $this->source,             // line 65
$context["location"], "city", [], "any", false, false, false, 65), "conference_capacity" => CoreExtension::getAttribute($this->env, $this->source,             // line 66
$context["location"], "capacity", [], "any", false, false, false, 66), "conference_description" => CoreExtension::getAttribute($this->env, $this->source,             // line 67
$context["location"], "description", [], "any", false, false, false, 67)]), "html", null, true);
            // line 68
            yield "\" class=\"btn btn-primary w-100\">
                                    <i class=\"fas fa-check-circle me-1\"></i>
                                    Select Venue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Details Modal -->
                <div class=\"modal fade\" id=\"locationModal-";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 78), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82), "html", null, true);
            yield "</h5>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"modal-body\">
                                ";
            // line 86
            if ((isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 86, $this->source); })())) {
                // line 87
                yield "                                <div id=\"carousel-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 87), "html", null, true);
                yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                    <div class=\"carousel-inner\">
                                        ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["locationData"]) || array_key_exists("locationData", $context) ? $context["locationData"] : (function () { throw new RuntimeError('Variable "locationData" does not exist.', 89, $this->source); })()), "images", [], "any", false, false, false, 89));
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
                    // line 90
                    yield "                                            <div class=\"carousel-item ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 90)) {
                        yield "active";
                    }
                    yield "\">
                                                <img src=\"";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                    yield "\" class=\"d-block w-100 rounded\" 
                                                     alt=\"Venue image ";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92), "html", null, true);
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
                // line 96
                yield "                                    </div>
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carousel-";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 97), "html", null, true);
                yield "\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carousel-";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 100), "html", null, true);
                yield "\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                </div>
                                ";
            }
            // line 105
            yield "                                
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Address</h5>
                                        <p>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 109), "html", null, true);
            yield "</p>
                                        
                                        <h5><i class=\"fas fa-users text-info me-2\"></i>Capacity</h5>
                                        <p>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "capacity", [], "any", false, false, false, 112), "html", null, true);
            yield " people</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h5><i class=\"fas fa-info-circle text-primary me-2\"></i>Full Description</h5>
                                        <p>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "description", [], "any", false, false, false, 116), "html", null, true);
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
        // line 124
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
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

        // line 129
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
        return "gestion_de_reservation/conference_location/index.html.twig";
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
        return array (  353 => 129,  340 => 128,  327 => 124,  313 => 116,  306 => 112,  300 => 109,  294 => 105,  286 => 100,  280 => 97,  277 => 96,  259 => 92,  255 => 91,  248 => 90,  231 => 89,  225 => 87,  223 => 86,  216 => 82,  209 => 78,  197 => 68,  195 => 67,  194 => 66,  193 => 65,  192 => 64,  191 => 63,  190 => 62,  189 => 61,  188 => 60,  187 => 59,  186 => 58,  185 => 57,  184 => 56,  183 => 55,  182 => 54,  181 => 53,  180 => 52,  173 => 48,  164 => 42,  156 => 37,  149 => 33,  142 => 29,  134 => 24,  130 => 23,  125 => 20,  122 => 19,  118 => 18,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Select Conference Location - MeetNTrip{% endblock %}

{% block body %}
    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-secondary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class=\"container py-5\">
        <h1 class=\"text-center mb-5 wow fadeInUp\">Select Conference Location in {{ city }}</h1>

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
                                <a href=\"{{ path('app_conference_location_select', {
                                    'location_id': location.locationId,
                                    'hotel_id': hotel_id,
                                    'hotel_price': hotel_price,
                                    'flight_id': flight_id,
                                    'flight_price': flight_price,
                                    'userid': userid,
                                    'id_evenement': id_evenement,
                                    'date_debut': date_debut,
                                    'date_fin': date_fin,
                                    'nombre_invite': nombre_invite,
                                    'conference_price': location.pricePerDay,
                                    'conference_name': location.name,
                                    'conference_city': location.city,
                                    'conference_capacity': location.capacity,
                                    'conference_description': location.description
                                }) }}\" class=\"btn btn-primary w-100\">
                                    <i class=\"fas fa-check-circle me-1\"></i>
                                    Select Venue
                                </a>
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
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    function showLocationDetails(locationId) {
        new bootstrap.Modal(document.getElementById(`locationModal-\${locationId}`)).show();
    }
    </script>
{% endblock %}
", "gestion_de_reservation/conference_location/index.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\conference_location\\index.html.twig");
    }
}
