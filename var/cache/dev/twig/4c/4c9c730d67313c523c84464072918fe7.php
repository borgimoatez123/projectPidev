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

/* gestion_de_reservation/booking/update_transport.html.twig */
class __TwigTemplate_024a2db74267d24e56e85c92fede82e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_transport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking/update_transport.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "gestion_de_reservation/booking/update_transport.html.twig", 1);
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

        yield "Update Transport Selection";
        
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
        <h1 class=\"text-center mb-4 wow fadeInUp\">Select Transport for ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLocation"]) || array_key_exists("eventLocation", $context) ? $context["eventLocation"] : (function () { throw new RuntimeError('Variable "eventLocation" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>

        <div class=\"row g-4\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 11
            yield "                <div class=\"col-lg-4 col-md-6 transport-card\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transportImages"]) || array_key_exists("transportImages", $context) ? $context["transportImages"] : (function () { throw new RuntimeError('Variable "transportImages" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "type", [], "any", false, false, false, 14) == CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 14))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "image", [], "any", false, false, false, 14), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\" 
                                 alt=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 15), "html", null, true);
            yield "\" 
                                 class=\"img-fluid\" 
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>

                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary text-capitalize\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 21), "html", null, true);
            yield "</h5>
                            
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-tag me-1\"></i>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "type", [], "any", false, false, false, 26), "html", null, true);
            yield "
                                    </div>
                                    <h4 class=\"text-success mb-0\">
                                        \$";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "price", [], "any", false, false, false, 29), 2), "html", null, true);
            yield "
                                    </h4>
                                </div>

                                ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 33)) {
                // line 34
                yield "                                    <div class=\"bg-light p-3 rounded\">
                                        <h6 class=\"text-primary mb-3\">
                                            <i class=\"fas fa-info-circle me-2\"></i>Description
                                        </h6>
                                        <p class=\"mb-0\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "description", [], "any", false, false, false, 38), "html", null, true);
                yield "</p>
                                    </div>
                                ";
            }
            // line 41
            yield "                            </div>

                            <div class=\"mt-auto\">
                                <form action=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_update_process", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 44, $this->source); })()), "bookingId", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" method=\"POST\" class=\"w-100\">
                                    <input type=\"hidden\" name=\"transport_id\" value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "transportId", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"transport_price\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "price", [], "any", false, false, false, 46), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                        <i class=\"fas fa-check-circle me-1\"></i>
                                        Select Transport
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </div>

        <div class=\"mt-4 text-center\">
            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bookings_list");
        yield "\" class=\"btn btn-outline-secondary btn-lg px-5\">Cancel</a>
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
        return "gestion_de_reservation/booking/update_transport.html.twig";
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
        return array (  210 => 60,  205 => 57,  188 => 46,  184 => 45,  180 => 44,  175 => 41,  169 => 38,  163 => 34,  161 => 33,  154 => 29,  148 => 26,  140 => 21,  131 => 15,  118 => 14,  113 => 11,  109 => 10,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block title %}Update Transport Selection{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <h1 class=\"text-center mb-4 wow fadeInUp\">Select Transport for {{ eventLocation }}</h1>

        <div class=\"row g-4\">
            {% for transport in transports %}
                <div class=\"col-lg-4 col-md-6 transport-card\">
                    <div class=\"card h-100 shadow-sm\">
                        <div class=\"card-img-top position-relative overflow-hidden\" style=\"height: 200px;\">
                            <img src=\"{% for t in transportImages %}{% if t.type == transport.type %}{{ t.image }}{% endif %}{% endfor %}\" 
                                 alt=\"{{ transport.type }}\" 
                                 class=\"img-fluid\" 
                                 style=\"object-fit: cover; width: 100%; height: 100%\">
                        </div>

                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title text-primary text-capitalize\">{{ transport.type }}</h5>
                            
                            <div class=\"card-text mb-3\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"badge bg-primary bg-opacity-10 text-primary p-2\">
                                        <i class=\"fas fa-tag me-1\"></i>{{ transport.type }}
                                    </div>
                                    <h4 class=\"text-success mb-0\">
                                        \${{ transport.price|number_format(2) }}
                                    </h4>
                                </div>

                                {% if transport.description %}
                                    <div class=\"bg-light p-3 rounded\">
                                        <h6 class=\"text-primary mb-3\">
                                            <i class=\"fas fa-info-circle me-2\"></i>Description
                                        </h6>
                                        <p class=\"mb-0\">{{ transport.description }}</p>
                                    </div>
                                {% endif %}
                            </div>

                            <div class=\"mt-auto\">
                                <form action=\"{{ path('app_booking_update_process', {'id': booking.bookingId}) }}\" method=\"POST\" class=\"w-100\">
                                    <input type=\"hidden\" name=\"transport_id\" value=\"{{ transport.transportId }}\">
                                    <input type=\"hidden\" name=\"transport_price\" value=\"{{ transport.price }}\">
                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                        <i class=\"fas fa-check-circle me-1\"></i>
                                        Select Transport
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"mt-4 text-center\">
            <a href=\"{{ path('app_bookings_list') }}\" class=\"btn btn-outline-secondary btn-lg px-5\">Cancel</a>
        </div>
    </div>
{% endblock %}", "gestion_de_reservation/booking/update_transport.html.twig", "C:\\Users\\borgi\\Downloads\\New folder (58)\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_reservation\\booking\\update_transport.html.twig");
    }
}
