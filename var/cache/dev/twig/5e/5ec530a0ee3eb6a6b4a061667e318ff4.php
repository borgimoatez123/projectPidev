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

/* gestion_de_reservation/booking/review.html.twig */
class __TwigTemplate_9f90cb4bded4229e097ecad81a102657 extends Template
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
        // line 3
        return "Gestion_Evennement/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/review.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/review.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/review.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Review Booking";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"container\">
        <h1>Review Your Booking</h1>
        
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <h3>Selected Services</h3>
                
                ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 15, $this->source); })()), "flight", [], "any", false, false, false, 15)) {
            // line 16
            yield "                    <div class=\"mb-3\">
                        <h4>Flight Details</h4>
                        <p>Airline: ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 18, $this->source); })()), "airlines", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                        <p>Departure: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 19, $this->source); })()), "departureTime", [], "any", false, false, false, 19), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                        <p>Return: ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 20, $this->source); })()), "backTime", [], "any", false, false, false, 20), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                        <p>Price: \$";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 21, $this->source); })()), "flight", [], "any", false, false, false, 21), "price", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 24
        yield "
                ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 25, $this->source); })()), "hotel", [], "any", false, false, false, 25)) {
            // line 26
            yield "                    <div class=\"mb-3\">
                        <h4>Hotel Details</h4>
                        <p>Name: ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 28, $this->source); })()), "hotelName", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                        <p>Location: ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 29, $this->source); })()), "hotelLocation", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
                        <p>Price: \$";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 30, $this->source); })()), "hotel", [], "any", false, false, false, 30), "pricePerNight", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 33
        yield "
                ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 34, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 34)) {
            // line 35
            yield "                    <div class=\"mb-3\">
                        <h4>Conference Location</h4>
                        <p>Name: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 37, $this->source); })()), "conferenceName", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                        <p>Price: \$";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 38, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 38), "pricePerDay", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 41
        yield "
                ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 42, $this->source); })()), "transport", [], "any", false, false, false, 42)) {
            // line 43
            yield "                    <div class=\"mb-3\">
                        <h4>Transport Details</h4>
                        <p>Type: ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 45, $this->source); })()), "transport", [], "any", false, false, false, 45), "type", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
                        <p>Description: ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 46, $this->source); })()), "transport", [], "any", false, false, false, 46), "description", [], "any", false, false, false, 46), "html", null, true);
            yield "</p>
                        <p>Price: \$";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 47, $this->source); })()), "transport", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 50
        yield "
                <div class=\"mb-3\">
                    <h4>Total Price: \$";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 52, $this->source); })()), "priceTotal", [], "any", false, false, false, 52), "html", null, true);
        yield "</h4>
                </div>

                <form action=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 55, $this->source); })()), "bookingId", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\" method=\"POST\">
                    <div class=\"form-group mb-4\">
                        <label for=\"special_requests\" class=\"form-label\">Special Requests:</label>
                        <textarea 
                            name=\"special_requests\" 
                            id=\"special_requests\" 
                            class=\"form-control\" 
                            rows=\"5\" 
                            placeholder=\"Enter any special requests or requirements...\"
                        >";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 64, $this->source); })()), "specialRequests", [], "any", false, false, false, 64), "html", null, true);
        yield "</textarea>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <button type=\"submit\" class=\"btn btn-primary\">Complete Booking</button>
                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bookings_list");
        yield "\" class=\"btn btn-secondary\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
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
        return "gestion_de_reservation/booking/review.html.twig";
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
        return array (  228 => 69,  220 => 64,  208 => 55,  202 => 52,  198 => 50,  192 => 47,  188 => 46,  184 => 45,  180 => 43,  178 => 42,  175 => 41,  169 => 38,  165 => 37,  161 => 35,  159 => 34,  156 => 33,  150 => 30,  146 => 29,  142 => 28,  138 => 26,  136 => 25,  133 => 24,  127 => 21,  123 => 20,  119 => 19,  115 => 18,  111 => 16,  109 => 15,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
 
 {% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Review Booking{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Review Your Booking</h1>
        
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <h3>Selected Services</h3>
                
                {% if booking.flight %}
                    <div class=\"mb-3\">
                        <h4>Flight Details</h4>
                        <p>Airline: {{ booking.airlines }}</p>
                        <p>Departure: {{ booking.departureTime|date('Y-m-d H:i') }}</p>
                        <p>Return: {{ booking.backTime|date('Y-m-d H:i') }}</p>
                        <p>Price: \${{ booking.flight.price }}</p>
                    </div>
                {% endif %}

                {% if booking.hotel %}
                    <div class=\"mb-3\">
                        <h4>Hotel Details</h4>
                        <p>Name: {{ booking.hotelName }}</p>
                        <p>Location: {{ booking.hotelLocation }}</p>
                        <p>Price: \${{ booking.hotel.pricePerNight }}</p>
                    </div>
                {% endif %}

                {% if booking.conferenceLocation %}
                    <div class=\"mb-3\">
                        <h4>Conference Location</h4>
                        <p>Name: {{ booking.conferenceName }}</p>
                        <p>Price: \${{ booking.conferenceLocation.pricePerDay }}</p>
                    </div>
                {% endif %}

                {% if booking.transport %}
                    <div class=\"mb-3\">
                        <h4>Transport Details</h4>
                        <p>Type: {{ booking.transport.type }}</p>
                        <p>Description: {{ booking.transport.description }}</p>
                        <p>Price: \${{ booking.transport.price }}</p>
                    </div>
                {% endif %}

                <div class=\"mb-3\">
                    <h4>Total Price: \${{ booking.priceTotal }}</h4>
                </div>

                <form action=\"{{ path('app_booking_update_final', {'id': booking.bookingId}) }}\" method=\"POST\">
                    <div class=\"form-group mb-4\">
                        <label for=\"special_requests\" class=\"form-label\">Special Requests:</label>
                        <textarea 
                            name=\"special_requests\" 
                            id=\"special_requests\" 
                            class=\"form-control\" 
                            rows=\"5\" 
                            placeholder=\"Enter any special requests or requirements...\"
                        >{{ booking.specialRequests }}</textarea>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <button type=\"submit\" class=\"btn btn-primary\">Complete Booking</button>
                        <a href=\"{{ path('app_bookings_list') }}\" class=\"btn btn-secondary\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "gestion_de_reservation/booking/review.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\review.html.twig");
    }
}
