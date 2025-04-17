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

/* Gestion_Evennement/employe/index.html.twig */
class __TwigTemplate_5b2a79ff439cf1a972404290b8a52be2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/employe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/employe/index.html.twig"));

        $this->parent = $this->loadTemplate("Gestion_Evennement/base.html.twig", "Gestion_Evennement/employe/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield " <!-- Affichage des messages flash -->
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", ["success2"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Success!</strong> ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["error2"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Error!</strong> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "<div class=\"container mt-4\">
    <h2 class=\"mb-4\">🧑‍💼 Affectation des employés pour l'événement : <strong>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</strong></h2>

    <!-- Liste des employés disponibles -->
    <h4>📋 Employés disponibles</h4>
    <table id=\"available-employees\" class=\"table table-bordered table-striped\">
        <thead class=\"table-dark\">
            <tr><th>Nom</th><th>Email</th><th>Action</th></tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 29
            yield "                <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "email", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
 
                    <td><button type=\"button\" class=\"btn btn-success add-btn\">➕ Ajouter</button></td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 35
        if (!$context['_iterated']) {
            // line 36
            yield "                <tr><td colspan=\"3\">Aucun employé disponible.</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </tbody>
    </table>

    <hr class=\"my-4\">

    <!-- Formulaire de validation des assignations -->
    <form method=\"post\" action=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_employee_assignments", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"assignments\" id=\"assignmentsInput\">

        <h4>✅ Employés sélectionnés</h4>
        <table id=\"selected-employees\" class=\"table table-hover\">
            <thead class=\"table-primary\">
                <tr>
                    <th>Nom</th>
                    <th>Rôle</th>
                     <th>Création</th>
                    <th>Dernière Mise à Jour</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 60
        yield "            </tbody>
        </table>

        <button type=\"submit\" class=\"btn btn-primary mt-3\">✅ Valider l'affectation</button>
    </form>
</div>

<script>
    const roles = [
        'Photographer', 
        'Security', 
        'Waiter', 
        'Coordinator', 
        'Host',
        'Technical Manager',
        'Master of Ceremonies',
        'Reception Manager',
        'Communication Officer',
        'Sound/Light Technician'
    ];

     const assignments = [];

    // Fonction pour générer l'heure actuelle au format compatible datetime-local
    function getNowDatetimeLocal() {
        return new Date().toISOString().slice(0, 16); // format: yyyy-MM-ddTHH:mm
    }

    document.querySelectorAll('.add-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const row = this.closest('tr');
            const id = row.dataset.id;
            const name = row.children[0].textContent;
            row.remove(); // remove from available list

            const now = getNowDatetimeLocal();

            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>\${name}</td>
                <td>
                    <select class=\"form-select role-select\" required>
                        <option value=\"\" disabled selected>Select a role</option>
                        \${roles.map(role => `<option value=\"\${role}\">\${role}</option>`).join('')}
                    </select>
                </td>
                
                <td><input type=\"datetime-local\" class=\"form-control date-start\" value=\"\${now}\" required></td>
                <td><input type=\"datetime-local\" class=\"form-control date-end\" value=\"\${now}\" required></td>
                <td><button type=\"button\" class=\"btn btn-danger remove-btn\">❌</button></td>
            `;

            newRow.dataset.employeeId = id;

            document.querySelector('#selected-employees tbody').appendChild(newRow);

            // Remove employee from the selected list
            newRow.querySelector('.remove-btn').addEventListener('click', function () {
                newRow.remove();
            });
        });
    });

    // 🎯 Encode the selected assignments into JSON on form submit
    document.querySelector('form').addEventListener('submit', function (e) {
        const rows = document.querySelectorAll('#selected-employees tbody tr');
        const result = [];

        let hasError = false;

        rows.forEach(row => {
            const dateStartInput = row.querySelector('.date-start');
            const dateEndInput = row.querySelector('.date-end');

            const dateStart = dateStartInput.value;
            const dateEnd = dateEndInput.value;

            if (new Date(dateEnd) <= new Date(dateStart)) {
                alert(\"⚠️ The end date must be later than the start date for employee: \" + row.children[0].textContent);
                hasError = true;
                return;
            }

            const assignment = {
                employeeId: row.dataset.employeeId,
                role: row.querySelector('.role-select').value,
                 dateStart: dateStart,
                dateEnd: dateEnd
            };

            result.push(assignment);
        });

        if (hasError) {
            e.preventDefault(); // Stop form submission
            return;
        }

        document.getElementById('assignmentsInput').value = JSON.stringify(result);
    });
</script>


<!-- Styling -->
<style>
    body { background-color: #f8f9fa; }
    h2, h4 { color: #343a40; }
    table { border-radius: 10px; overflow: hidden; }
    td, th { vertical-align: middle !important; text-align: center; }
</style>

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
        return "Gestion_Evennement/employe/index.html.twig";
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
        return array (  189 => 60,  171 => 44,  163 => 38,  156 => 36,  154 => 35,  145 => 31,  141 => 30,  136 => 29,  131 => 28,  119 => 19,  116 => 18,  106 => 14,  103 => 13,  99 => 12,  96 => 11,  86 => 7,  83 => 6,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Gestion_Evennement/base.html.twig' %}

{% block body %}
 <!-- Affichage des messages flash -->
    {% for message in app.flashes('success2') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>Success!</strong> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    {% for message in app.flashes('error2') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <strong>Error!</strong> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}
<div class=\"container mt-4\">
    <h2 class=\"mb-4\">🧑‍💼 Affectation des employés pour l'événement : <strong>{{ event.nom }}</strong></h2>

    <!-- Liste des employés disponibles -->
    <h4>📋 Employés disponibles</h4>
    <table id=\"available-employees\" class=\"table table-bordered table-striped\">
        <thead class=\"table-dark\">
            <tr><th>Nom</th><th>Email</th><th>Action</th></tr>
        </thead>
        <tbody>
            {% for emp in employees %}
                <tr data-id=\"{{ emp.id }}\">
                    <td>{{ emp.nom }}</td>
                    <td>{{ emp.email }}</td>
 
                    <td><button type=\"button\" class=\"btn btn-success add-btn\">➕ Ajouter</button></td>
                </tr>
            {% else %}
                <tr><td colspan=\"3\">Aucun employé disponible.</td></tr>
            {% endfor %}
        </tbody>
    </table>

    <hr class=\"my-4\">

    <!-- Formulaire de validation des assignations -->
    <form method=\"post\" action=\"{{ path('submit_employee_assignments', { id: event.id }) }}\">
        <input type=\"hidden\" name=\"assignments\" id=\"assignmentsInput\">

        <h4>✅ Employés sélectionnés</h4>
        <table id=\"selected-employees\" class=\"table table-hover\">
            <thead class=\"table-primary\">
                <tr>
                    <th>Nom</th>
                    <th>Rôle</th>
                     <th>Création</th>
                    <th>Dernière Mise à Jour</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {# Les lignes sélectionnées s’ajouteront ici dynamiquement #}
            </tbody>
        </table>

        <button type=\"submit\" class=\"btn btn-primary mt-3\">✅ Valider l'affectation</button>
    </form>
</div>

<script>
    const roles = [
        'Photographer', 
        'Security', 
        'Waiter', 
        'Coordinator', 
        'Host',
        'Technical Manager',
        'Master of Ceremonies',
        'Reception Manager',
        'Communication Officer',
        'Sound/Light Technician'
    ];

     const assignments = [];

    // Fonction pour générer l'heure actuelle au format compatible datetime-local
    function getNowDatetimeLocal() {
        return new Date().toISOString().slice(0, 16); // format: yyyy-MM-ddTHH:mm
    }

    document.querySelectorAll('.add-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const row = this.closest('tr');
            const id = row.dataset.id;
            const name = row.children[0].textContent;
            row.remove(); // remove from available list

            const now = getNowDatetimeLocal();

            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>\${name}</td>
                <td>
                    <select class=\"form-select role-select\" required>
                        <option value=\"\" disabled selected>Select a role</option>
                        \${roles.map(role => `<option value=\"\${role}\">\${role}</option>`).join('')}
                    </select>
                </td>
                
                <td><input type=\"datetime-local\" class=\"form-control date-start\" value=\"\${now}\" required></td>
                <td><input type=\"datetime-local\" class=\"form-control date-end\" value=\"\${now}\" required></td>
                <td><button type=\"button\" class=\"btn btn-danger remove-btn\">❌</button></td>
            `;

            newRow.dataset.employeeId = id;

            document.querySelector('#selected-employees tbody').appendChild(newRow);

            // Remove employee from the selected list
            newRow.querySelector('.remove-btn').addEventListener('click', function () {
                newRow.remove();
            });
        });
    });

    // 🎯 Encode the selected assignments into JSON on form submit
    document.querySelector('form').addEventListener('submit', function (e) {
        const rows = document.querySelectorAll('#selected-employees tbody tr');
        const result = [];

        let hasError = false;

        rows.forEach(row => {
            const dateStartInput = row.querySelector('.date-start');
            const dateEndInput = row.querySelector('.date-end');

            const dateStart = dateStartInput.value;
            const dateEnd = dateEndInput.value;

            if (new Date(dateEnd) <= new Date(dateStart)) {
                alert(\"⚠️ The end date must be later than the start date for employee: \" + row.children[0].textContent);
                hasError = true;
                return;
            }

            const assignment = {
                employeeId: row.dataset.employeeId,
                role: row.querySelector('.role-select').value,
                 dateStart: dateStart,
                dateEnd: dateEnd
            };

            result.push(assignment);
        });

        if (hasError) {
            e.preventDefault(); // Stop form submission
            return;
        }

        document.getElementById('assignmentsInput').value = JSON.stringify(result);
    });
</script>


<!-- Styling -->
<style>
    body { background-color: #f8f9fa; }
    h2, h4 { color: #343a40; }
    table { border-radius: 10px; overflow: hidden; }
    td, th { vertical-align: middle !important; text-align: center; }
</style>

{% endblock %}
", "Gestion_Evennement/employe/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\Gestion_Evennement\\employe\\index.html.twig");
    }
}
