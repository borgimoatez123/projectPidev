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

/* gestion_de_reservation/booking/update_flight.html.twig */
class __TwigTemplate_8e87b3e159d8e7f1e03669281cf3ea12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_flight.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_flight.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/update_flight.html.twig", 1);
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

        yield "Select Flight";
        
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
        yield "    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Select Flight for ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>

        <!-- Filter Buttons -->
        <div class=\"mb-4 text-center\">
            <button class=\"btn btn-primary mx-1 filter-btn\" data-category=\"all\">All</button>
            <button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Economy\">Economy</button>
            <button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Business\">Business</button>
            <button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"First Class\">First Class</button>
        </div>

        <form method=\"POST\" action=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_process", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 17, $this->source); })()), "bookingId", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\">
            <div class=\"row g-4\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new RuntimeError('Variable "flights" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 20
            yield "                    <div class=\"col-lg-4 col-md-6 flight-card\" data-category=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "type", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body d-flex flex-column\">
                                ";
            // line 24
            yield "                                <div class=\"airline-logo-container mb-3\">
                                    <img src=\"";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["airlineLogos"]) || array_key_exists("airlineLogos", $context) ? $context["airlineLogos"] : (function () { throw new RuntimeError('Variable "airlineLogos" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["airline"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["airline"], "airline", [], "any", false, false, false, 25) == CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 25))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["airline"], "logo", [], "any", false, false, false, 25), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['airline'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\" 
                                         alt=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 26), "html", null, true);
            yield " logo\" 
                                         class=\"img-fluid rounded-top\" 
                                         style=\"height: 200px; object-fit: cover;\">
                                </div>

                                ";
            // line 32
            yield "                                <h5 class=\"card-title text-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "destination", [], "any", false, false, false, 32), "html", null, true);
            yield "</h5>
                                <div class=\"card-text mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fas fa-plane fa-fw me-2 text-secondary\"></i>
                                        <span class=\"fw-bold\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                                    </div>
                                    
                                    <div class=\"row g-2\">
                                        <div class=\"col-6\">
                                            <div class=\"bg-light p-2 rounded\">
                                                <small class=\"text-muted\">Departure</small>
                                                <div class=\"fw-bold\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "departureTime", [], "any", false, false, false, 43), "H:i"), "html", null, true);
            yield "</div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"bg-light p-2 rounded\">
                                                <small class=\"text-muted\">Return</small>
                                                <div class=\"fw-bold\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "backTime", [], "any", false, false, false, 49), "H:i"), "html", null, true);
            yield "</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                        <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                            <i class=\"fas fa-tag me-1\"></i>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "type", [], "any", false, false, false, 56), "html", null, true);
            yield "
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"text-muted small\">Total Price</div>
                                            <h4 class=\"text-success mb-0\">\$";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "price", [], "any", false, false, false, 60), 2), "html", null, true);
            yield "</h4>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 66
            yield "                                <div class=\"mt-auto\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"flight_id\" 
                                               value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "flightId", [], "any", false, false, false, 69), "html", null, true);
            yield "\" id=\"flight_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "flightId", [], "any", false, false, false, 69), "html", null, true);
            yield "\"
                                               ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 70, $this->source); })()), "flight", [], "any", false, false, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 70, $this->source); })()), "flight", [], "any", false, false, false, 70), "flightId", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "flightId", [], "any", false, false, false, 70)))) {
                yield "checked";
            }
            yield ">
                                        <label class=\"form-check-label\" for=\"flight_";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "flightId", [], "any", false, false, false, 71), "html", null, true);
            yield "\">
                                            Select this flight
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flight'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "            </div>

            ";
        // line 83
        yield "            <div class=\"mt-4 text-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">Next: Select Hotel</button>
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bookings_list");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5\">Cancel</a>
            </div>
        </form>
    </div>

    ";
        // line 90
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 91
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <script>
            document.querySelectorAll('.filter-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var category = this.getAttribute('data-category');
                    document.querySelectorAll('.filter-btn').forEach(function(b) {
                        b.classList.remove('btn-primary');
                        b.classList.add('btn-outline-primary');
                    });
                    this.classList.remove('btn-outline-primary');
                    this.classList.add('btn-primary');
                    document.querySelectorAll('.flight-card').forEach(function(card) {
                        if (category === 'all' || card.getAttribute('data-category') === category) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
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
        return "gestion_de_reservation/booking/update_flight.html.twig";
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
        return array (  280 => 91,  257 => 90,  249 => 85,  245 => 83,  241 => 80,  226 => 71,  220 => 70,  214 => 69,  209 => 66,  201 => 60,  194 => 56,  184 => 49,  175 => 43,  165 => 36,  157 => 32,  149 => 26,  136 => 25,  133 => 24,  126 => 20,  122 => 19,  117 => 17,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Select Flight{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Select Flight for {{ eventLocation }}</h1>

        <!-- Filter Buttons -->
        <div class=\"mb-4 text-center\">
            <button class=\"btn btn-primary mx-1 filter-btn\" data-category=\"all\">All</button>
            <button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Economy\">Economy</button>
            <button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"Business\">Business</button>
            <button class=\"btn btn-outline-primary mx-1 filter-btn\" data-category=\"First Class\">First Class</button>
        </div>

        <form method=\"POST\" action=\"{{ path('app_booking_update_process', {'id': booking.bookingId}) }}\">
            <div class=\"row g-4\">
                {% for flight in flights %}
                    <div class=\"col-lg-4 col-md-6 flight-card\" data-category=\"{{ flight.type }}\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body d-flex flex-column\">
                                {# Airline Logo Section #}
                                <div class=\"airline-logo-container mb-3\">
                                    <img src=\"{% for airline in airlineLogos %}{% if airline.airline == flight.airline %}{{ airline.logo }}{% endif %}{% endfor %}\" 
                                         alt=\"{{ flight.airline }} logo\" 
                                         class=\"img-fluid rounded-top\" 
                                         style=\"height: 200px; object-fit: cover;\">
                                </div>

                                {# Flight Details #}
                                <h5 class=\"card-title text-primary\">{{ flight.destination }}</h5>
                                <div class=\"card-text mb-3\">
                                    <div class=\"d-flex align-items-center mb-2\">
                                        <i class=\"fas fa-plane fa-fw me-2 text-secondary\"></i>
                                        <span class=\"fw-bold\">{{ flight.airline }}</span>
                                    </div>
                                    
                                    <div class=\"row g-2\">
                                        <div class=\"col-6\">
                                            <div class=\"bg-light p-2 rounded\">
                                                <small class=\"text-muted\">Departure</small>
                                                <div class=\"fw-bold\">{{ flight.departureTime|date('H:i') }}</div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"bg-light p-2 rounded\">
                                                <small class=\"text-muted\">Return</small>
                                                <div class=\"fw-bold\">{{ flight.backTime|date('H:i') }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"d-flex justify-content-between align-items-center mt-3\">
                                        <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                            <i class=\"fas fa-tag me-1\"></i>{{ flight.type }}
                                        </div>
                                        <div class=\"text-end\">
                                            <div class=\"text-muted small\">Total Price</div>
                                            <h4 class=\"text-success mb-0\">\${{ flight.price|number_format(2) }}</h4>
                                        </div>
                                    </div>
                                </div>

                                {# Selection Radio Button #}
                                <div class=\"mt-auto\">
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"flight_id\" 
                                               value=\"{{ flight.flightId }}\" id=\"flight_{{ flight.flightId }}\"
                                               {% if booking.flight and booking.flight.flightId == flight.flightId %}checked{% endif %}>
                                        <label class=\"form-check-label\" for=\"flight_{{ flight.flightId }}\">
                                            Select this flight
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            {# Form buttons remain the same #}
            <div class=\"mt-4 text-center\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg px-5\">Next: Select Hotel</button>
                <a href=\"{{ path('app_bookings_list') }}\" class=\"btn btn-outline-secondary btn-lg px-5\">Cancel</a>
            </div>
        </form>
    </div>

    {% block javascripts %}
        {{ parent() }}
        <script>
            document.querySelectorAll('.filter-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var category = this.getAttribute('data-category');
                    document.querySelectorAll('.filter-btn').forEach(function(b) {
                        b.classList.remove('btn-primary');
                        b.classList.add('btn-outline-primary');
                    });
                    this.classList.remove('btn-outline-primary');
                    this.classList.add('btn-primary');
                    document.querySelectorAll('.flight-card').forEach(function(card) {
                        if (category === 'all' || card.getAttribute('data-category') === category) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        </script>
    {% endblock %}
{% endblock %}", "gestion_de_reservation/booking/update_flight.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\update_flight.html.twig");
    }
}
