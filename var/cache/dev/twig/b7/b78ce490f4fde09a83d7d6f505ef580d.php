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

/* gestion_de_reservation/booking/update_special_requests.html.twig */
class __TwigTemplate_890c1c2ff351bcfd07a077021db2d27f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_special_requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_special_requests.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_de_reservation/booking/update_special_requests.html.twig", 1);
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

        yield "Update Special Requests";
        
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
        <h1>Special Requests</h1>
        
        <div class=\"card\">
            <div class=\"card-body\">
                <h3>Booking Summary</h3>
                
                ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 13, $this->source); })()), "flight", [], "any", false, false, false, 13)) {
            // line 14
            yield "                    <div class=\"mb-3\">
                        <h4>Flight</h4>
                        <p>Airline: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 16, $this->source); })()), "airlines", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                        <p>Departure: ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 17, $this->source); })()), "departureTime", [], "any", false, false, false, 17), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                        <p>Return: ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 18, $this->source); })()), "backTime", [], "any", false, false, false, 18), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 21
        yield "
                ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 22, $this->source); })()), "hotel", [], "any", false, false, false, 22)) {
            // line 23
            yield "                    <div class=\"mb-3\">
                        <h4>Hotel</h4>
                        <p>Name: ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 25, $this->source); })()), "hotelName", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
                        <p>Location: ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 26, $this->source); })()), "hotelLocation", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 29
        yield "
                ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 30, $this->source); })()), "conferenceLocation", [], "any", false, false, false, 30)) {
            // line 31
            yield "                    <div class=\"mb-3\">
                        <h4>Conference Location</h4>
                        <p>Name: ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 33, $this->source); })()), "conferenceName", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 36
        yield "
                ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 37, $this->source); })()), "transport", [], "any", false, false, false, 37)) {
            // line 38
            yield "                    <div class=\"mb-3\">
                        <h4>Transport</h4>
                        <p>Type: ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 40, $this->source); })()), "transport", [], "any", false, false, false, 40), "type", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                        <p>Description: ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 41, $this->source); })()), "transport", [], "any", false, false, false, 41), "description", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 44
        yield "
                <form action=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 45, $this->source); })()), "bookingId", [], "any", false, false, false, 45)]), "html", null, true);
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
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 54, $this->source); })()), "specialRequests", [], "any", false, false, false, 54), "html", null, true);
        yield "</textarea>
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <button type=\"submit\" class=\"btn btn-primary\">Complete Booking</button>
                        <a href=\"";
        // line 59
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
        return "gestion_de_reservation/booking/update_special_requests.html.twig";
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
        return array (  205 => 59,  197 => 54,  185 => 45,  182 => 44,  176 => 41,  172 => 40,  168 => 38,  166 => 37,  163 => 36,  157 => 33,  153 => 31,  151 => 30,  148 => 29,  142 => 26,  138 => 25,  134 => 23,  132 => 22,  129 => 21,  123 => 18,  119 => 17,  115 => 16,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Update Special Requests{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Special Requests</h1>
        
        <div class=\"card\">
            <div class=\"card-body\">
                <h3>Booking Summary</h3>
                
                {% if booking.flight %}
                    <div class=\"mb-3\">
                        <h4>Flight</h4>
                        <p>Airline: {{ booking.airlines }}</p>
                        <p>Departure: {{ booking.departureTime|date('Y-m-d H:i') }}</p>
                        <p>Return: {{ booking.backTime|date('Y-m-d H:i') }}</p>
                    </div>
                {% endif %}

                {% if booking.hotel %}
                    <div class=\"mb-3\">
                        <h4>Hotel</h4>
                        <p>Name: {{ booking.hotelName }}</p>
                        <p>Location: {{ booking.hotelLocation }}</p>
                    </div>
                {% endif %}

                {% if booking.conferenceLocation %}
                    <div class=\"mb-3\">
                        <h4>Conference Location</h4>
                        <p>Name: {{ booking.conferenceName }}</p>
                    </div>
                {% endif %}

                {% if booking.transport %}
                    <div class=\"mb-3\">
                        <h4>Transport</h4>
                        <p>Type: {{ booking.transport.type }}</p>
                        <p>Description: {{ booking.transport.description }}</p>
                    </div>
                {% endif %}

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
{% endblock %}", "gestion_de_reservation/booking/update_special_requests.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\update_special_requests.html.twig");
    }
}
