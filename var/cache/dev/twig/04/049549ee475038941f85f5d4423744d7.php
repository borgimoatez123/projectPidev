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

/* gestion_de_reservation/booking/update.html.twig */
class __TwigTemplate_21a0a66959a535738957712a49b65bde extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/update.html.twig", 1);
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

        yield "Update Booking";
        
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
        <h1>Update Booking</h1>
        <p>Event Location: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</p>
        
        <form method=\"POST\">
            <div class=\"form-group\">
                <label for=\"flight\">Flights to ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</label>
                <select name=\"flight_id\" class=\"form-control\">
                    <option value=\"\">Select Flight</option>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new RuntimeError('Variable "flights" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 16
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "flightId", [], "any", false, false, false, 16), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 16, $this->source); })()), "flight", [], "any", false, false, false, 16) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 16, $this->source); })()), "flight", [], "any", false, false, false, 16), "flightId", [], "any", false, false, false, 16) == CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "flightId", [], "any", false, false, false, 16)))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "airline", [], "any", false, false, false, 17), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["flight"], "departureTime", [], "any", false, false, false, 17), "Y-m-d H:i"), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flight'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"hotel\">Hotels in ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "</label>
                <select name=\"hotel_id\" class=\"form-control\">
                    <option value=\"\">Select Hotel</option>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 28
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 28), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 28, $this->source); })()), "hotel", [], "any", false, false, false, 28) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 28, $this->source); })()), "hotel", [], "any", false, false, false, 28), "hotelId", [], "any", false, false, false, 28) == CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "hotelId", [], "any", false, false, false, 28)))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "name", [], "any", false, false, false, 29), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 29), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hotel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"conference_location\">Conference Locations in ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</label>
                <select name=\"location_id\" class=\"form-control\">
                    <option value=\"\">Select Location</option>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conferenceLocations"]) || array_key_exists("conferenceLocations", $context) ? $context["conferenceLocations"] : (function () { throw new RuntimeError('Variable "conferenceLocations" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 40
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 40), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 40), "locationId", [], "any", false, false, false, 40) == CoreExtension::getAttribute($this->env, $this->source, $context["location"], "locationId", [], "any", false, false, false, 40)))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"transport\">Transport</label>
                <select name=\"transport_id\" class=\"form-control\">
                    <option value=\"\">Select Transport</option>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 52
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "transportId", [], "any", false, false, false, 52), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 52, $this->source); })()), "transport", [], "any", false, false, false, 52) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 52, $this->source); })()), "transport", [], "any", false, false, false, 52), "transportId", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "transportId", [], "any", false, false, false, 52)))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 53), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"special_requests\">Special Requests</label>
                <textarea name=\"special_requests\" class=\"form-control\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 61, $this->source); })()), "specialRequests", [], "any", false, false, false, 61), "html", null, true);
        yield "</textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Update Booking</button>
            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bookings_list");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
        </form>
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
        return "gestion_de_reservation/booking/update.html.twig";
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
        return array (  256 => 65,  249 => 61,  242 => 56,  233 => 53,  224 => 52,  220 => 51,  211 => 44,  202 => 41,  193 => 40,  189 => 39,  183 => 36,  177 => 32,  166 => 29,  157 => 28,  153 => 27,  147 => 24,  141 => 20,  130 => 17,  121 => 16,  117 => 15,  111 => 12,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Update Booking{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Update Booking</h1>
        <p>Event Location: {{ eventLocation }}</p>
        
        <form method=\"POST\">
            <div class=\"form-group\">
                <label for=\"flight\">Flights to {{ eventLocation }}</label>
                <select name=\"flight_id\" class=\"form-control\">
                    <option value=\"\">Select Flight</option>
                    {% for flight in flights %}
                        <option value=\"{{ flight.flightId }}\" {% if booking.flight and booking.flight.flightId == flight.flightId %}selected{% endif %}>
                            {{ flight.airline }} - {{ flight.departureTime|date('Y-m-d H:i') }}
                        </option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"hotel\">Hotels in {{ eventLocation }}</label>
                <select name=\"hotel_id\" class=\"form-control\">
                    <option value=\"\">Select Hotel</option>
                    {% for hotel in hotels %}
                        <option value=\"{{ hotel.hotelId }}\" {% if booking.hotel and booking.hotel.hotelId == hotel.hotelId %}selected{% endif %}>
                            {{ hotel.name }} - {{ hotel.city }}
                        </option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"conference_location\">Conference Locations in {{ eventLocation }}</label>
                <select name=\"location_id\" class=\"form-control\">
                    <option value=\"\">Select Location</option>
                    {% for location in conferenceLocations %}
                        <option value=\"{{ location.locationId }}\" {% if booking.conferenceLocation and booking.conferenceLocation.locationId == location.locationId %}selected{% endif %}>
                            {{ location.name }}
                        </option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"transport\">Transport</label>
                <select name=\"transport_id\" class=\"form-control\">
                    <option value=\"\">Select Transport</option>
                    {% for transport in transports %}
                        <option value=\"{{ transport.transportId }}\" {% if booking.transport and booking.transport.transportId == transport.transportId %}selected{% endif %}>
                            {{ transport.type }}
                        </option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"form-group\">
                <label for=\"special_requests\">Special Requests</label>
                <textarea name=\"special_requests\" class=\"form-control\">{{ booking.specialRequests }}</textarea>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Update Booking</button>
            <a href=\"{{ path('app_bookings_list') }}\" class=\"btn btn-secondary\">Cancel</a>
        </form>
    </div>
{% endblock %}", "gestion_de_reservation/booking/update.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\update.html.twig");
    }
}
