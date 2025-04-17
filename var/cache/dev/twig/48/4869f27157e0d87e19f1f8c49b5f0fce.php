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

/* gestion_user/user/index.html.twig */
class __TwigTemplate_7184aa9570ac257843603a27c543a975 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_user/user/index.html.twig"));

        $this->parent = $this->loadTemplate("gestion_de_reservation/booking_admin/base.html.twig", "gestion_user/user/index.html.twig", 1);
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

        yield "User List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    .container-fluid {
        padding-left: 270px;  
        padding-top:50px
    }
</style>
    <div class=\"container mt-4\">
        <h1>User Management</h1>

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary mb-3\">Create New User</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            yield "                <tr>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Edit</a>
                        <form method=\"post\" action=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" style=\"display: inline-block\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Are you sure?')\">Delete</button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </tbody>
        </table>
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
        return "gestion_user/user/index.html.twig";
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
        return array (  176 => 45,  164 => 39,  160 => 38,  156 => 37,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  132 => 30,  128 => 29,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'gestion_de_reservation/booking_admin/base.html.twig' %}

{% block title %}User List{% endblock %}

{% block admin %}
<style>
    .container-fluid {
        padding-left: 270px;  
        padding-top:50px
    }
</style>
    <div class=\"container mt-4\">
        <h1>User Management</h1>

        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary mb-3\">Create New User</a>

        <table class=\"table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.id }}</td>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.role }}</td>
                    <td>{{ user.status }}</td>
                    <td>
                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-primary\">Edit</a>
                        <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" style=\"display: inline-block\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                            <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Are you sure?')\">Delete</button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "gestion_user/user/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_user\\user\\index.html.twig");
    }
}
