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

/* gestion_de_reservation/booking_admin/list.html.twig */
class __TwigTemplate_1c6dc6687018c63ebd7b2f79279312b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking_admin/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_reservation/booking_admin/list.html.twig"));

        $this->parent = $this->loadTemplate("gestion_de_reservation/booking_admin/base.html.twig", "gestion_de_reservation/booking_admin/list.html.twig", 1);
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

        yield "Admin - Bookings List
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<div class=\"container mt-4\">
\t\t<h1 class=\"mb-4\">Bookings Management</h1>

\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["error"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>User Email</th>
\t\t\t\t\t\t<th>Booking Date</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t<th>Total Price</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<style>
\t\t\t\t\t.container-fluid {
\t\t\t\t\t\tpadding-left: 270px; /* أو حسب حجم السايدبار */
\t\t\t\t\t\tpadding-top:50px
\t\t\t\t\t}</style>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 41
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "userName", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"badge ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 46) == "confirmed")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 46) == "not_confirmed")) {
                yield "bg-danger";
            } else {
                yield "bg-warning";
            }
            yield "\">
\t\t\t\t\t\t\t\t\t";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 47), "pending")) : ("pending")), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\$";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\tView Details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">No bookings found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
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
        return "gestion_de_reservation/booking_admin/list.html.twig";
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
        return array (  226 => 63,  217 => 59,  215 => 58,  204 => 52,  199 => 50,  193 => 47,  183 => 46,  178 => 44,  174 => 43,  170 => 42,  167 => 41,  162 => 40,  141 => 21,  132 => 18,  129 => 17,  125 => 16,  122 => 15,  113 => 12,  110 => 11,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'gestion_de_reservation/booking_admin/base.html.twig' %}

{% block title %}Admin - Bookings List
{% endblock %}

{% block admin %}
\t<div class=\"container mt-4\">
\t\t<h1 class=\"mb-4\">Bookings Management</h1>

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% for message in app.flashes('error') %}
\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>User Email</th>
\t\t\t\t\t\t<th>Booking Date</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t<th>Total Price</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<style>
\t\t\t\t\t.container-fluid {
\t\t\t\t\t\tpadding-left: 270px; /* أو حسب حجم السايدبار */
\t\t\t\t\t\tpadding-top:50px
\t\t\t\t\t}</style>
\t\t\t\t<tbody>
\t\t\t\t\t{% for booking in bookings %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ booking.id }}</td>
\t\t\t\t\t\t\t<td>{{ booking.userName}}</td>
\t\t\t\t\t\t\t<td>{{ booking.bookingDate|date('Y-m-d H:i') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"badge {% if booking.status == 'confirmed' %}bg-success{% elseif booking.status == 'not_confirmed' %}bg-danger{% else %}bg-warning{% endif %}\">
\t\t\t\t\t\t\t\t\t{{ booking.status|default('pending') }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>\${{ booking.priceTotal }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_booking_show', {'id': booking.id}) }}\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\tView Details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\" class=\"text-center\">No bookings found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}
", "gestion_de_reservation/booking_admin/list.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\gestion_de_reservation\\booking_admin\\list.html.twig");
    }
}
