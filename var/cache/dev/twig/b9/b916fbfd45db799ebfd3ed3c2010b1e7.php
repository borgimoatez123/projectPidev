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

/* event/index.html.twig */
class __TwigTemplate_23aad05d333d62239b3dceaf032c626a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
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

        yield "Events - MeetNTrip
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<!-- Page Header Start -->
\t<div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t<div class=\"container text-center py-5\">
\t\t\t<h1 class=\"display-3 text-white mb-4 animated slideInDown\">Events</h1>
\t\t\t<nav aria-label=\"breadcrumb animated slideInDown\">
\t\t\t\t<ol class=\"breadcrumb justify-content-center mb-0\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item text-primary\" aria-current=\"page\">Events</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<!-- Page Header End -->

\t<!-- Events Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"row g-4\">
\t\t\t\t<!-- Event 1 -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"service-item rounded overflow-hidden\">
\t\t\t\t\t\t<div class=\"position-relative p-4\">
\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-alt fa-2x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">Corporate Conference</h4>
\t\t\t\t\t\t\t<p>Professional business conferences and corporate events management services.</p>
\t\t\t\t\t\t\t<a class=\"small fw-medium\" href=\"#\">Read More<i class=\"fa fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Event 2 -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"service-item rounded overflow-hidden\">
\t\t\t\t\t\t<div class=\"position-relative p-4\">
\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users fa-2x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">Team Building</h4>
\t\t\t\t\t\t\t<p>Organize engaging team building activities and corporate retreats.</p>
\t\t\t\t\t\t\t<a class=\"small fw-medium\" href=\"#\">Read More<i class=\"fa fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Event 3 -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"service-item rounded overflow-hidden\">
\t\t\t\t\t\t<div class=\"position-relative p-4\">
\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-chalkboard-teacher fa-2x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">Training Workshop</h4>
\t\t\t\t\t\t\t<p>Professional development workshops and training sessions.</p>
\t\t\t\t\t\t\t<a class=\"small fw-medium\" href=\"#\">Read More<i class=\"fa fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Events End -->
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
        return "event/index.html.twig";
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
        return array (  110 => 14,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Events - MeetNTrip
{% endblock %}

{% block body %}
\t<!-- Page Header Start -->
\t<div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
\t\t<div class=\"container text-center py-5\">
\t\t\t<h1 class=\"display-3 text-white mb-4 animated slideInDown\">Events</h1>
\t\t\t<nav aria-label=\"breadcrumb animated slideInDown\">
\t\t\t\t<ol class=\"breadcrumb justify-content-center mb-0\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item text-primary\" aria-current=\"page\">Events</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</div>
\t</div>
\t<!-- Page Header End -->

\t<!-- Events Start -->
\t<div class=\"container-xxl py-5\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tclass=\"row g-4\">
\t\t\t\t<!-- Event 1 -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"service-item rounded overflow-hidden\">
\t\t\t\t\t\t<div class=\"position-relative p-4\">
\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-alt fa-2x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">Corporate Conference</h4>
\t\t\t\t\t\t\t<p>Professional business conferences and corporate events management services.</p>
\t\t\t\t\t\t\t<a class=\"small fw-medium\" href=\"#\">Read More<i class=\"fa fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Event 2 -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"service-item rounded overflow-hidden\">
\t\t\t\t\t\t<div class=\"position-relative p-4\">
\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users fa-2x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">Team Building</h4>
\t\t\t\t\t\t\t<p>Organize engaging team building activities and corporate retreats.</p>
\t\t\t\t\t\t\t<a class=\"small fw-medium\" href=\"#\">Read More<i class=\"fa fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Event 3 -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
\t\t\t\t\t<div class=\"service-item rounded overflow-hidden\">
\t\t\t\t\t\t<div class=\"position-relative p-4\">
\t\t\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-chalkboard-teacher fa-2x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"mb-3\">Training Workshop</h4>
\t\t\t\t\t\t\t<p>Professional development workshops and training sessions.</p>
\t\t\t\t\t\t\t<a class=\"small fw-medium\" href=\"#\">Read More<i class=\"fa fa-arrow-right ms-2\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Events End -->
{% endblock %}
", "event/index.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\event\\index.html.twig");
    }
}
