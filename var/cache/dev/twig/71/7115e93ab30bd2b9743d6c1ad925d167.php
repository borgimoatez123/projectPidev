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

/* gestion_de_depence/_booking_rows.html.twig */
class __TwigTemplate_54805cc694f79c884a441ee055b6c152 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_depence/_booking_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_depence/_booking_rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 2
            yield "    <tr>
        <td>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 3), "html", null, true);
            yield "</td>
        <td>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "nameEvement", [], "any", false, false, false, 4), "html", null, true);
            yield "</td>
        <td>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 5), "Y-m-d"), "html", null, true);
            yield "</td>
        <td>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 6), "html", null, true);
            yield "</td>
        <td>\$";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 7), "html", null, true);
            yield "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gestion_de_depence/_booking_rows.html.twig";
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
        return array (  71 => 7,  67 => 6,  63 => 5,  59 => 4,  55 => 3,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for booking in bookings %}
    <tr>
        <td>{{ booking.bookingId }}</td>
        <td>{{ booking.nameEvement }}</td>
        <td>{{ booking.bookingDate|date('Y-m-d') }}</td>
        <td>{{ booking.status }}</td>
        <td>\${{ booking.priceTotal }}</td>
    </tr>
{% endfor %}", "gestion_de_depence/_booking_rows.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\gestion_de_depence\\_booking_rows.html.twig");
    }
}
