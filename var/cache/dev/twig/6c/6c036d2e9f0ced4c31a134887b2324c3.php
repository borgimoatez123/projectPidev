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

/* gestion_de_depence/bookings_by_user.html.twig */
class __TwigTemplate_c9e27756edc1998dffcb4c4e31424d41 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_depence/bookings_by_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_depence/bookings_by_user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_de_depence/bookings_by_user.html.twig", 1);
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

        yield "Your Bookings";
        
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
        yield "    <div class=\"container mt-4\">
        <h2>Your Bookings</h2>

        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <form id=\"searchForm\" class=\"input-group\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by event name...\">
                    <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                </form>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"bookingsTableBody\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 32
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 32) == "confirmed")) {
                // line 33
                yield "                            <tr>
                                <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                                <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "nameEvement", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                                <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingDate", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true);
                yield "</td>
                                <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                                <td>\$";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 38), "html", null, true);
                yield "</td>
                                <td>
                                    <button 
                                        class=\"btn btn-success pay-now\"
                                        data-booking-id=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 42), "html", null, true);
                yield "\"
                                        data-amount=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 43), "html", null, true);
                yield "\"
                                    >
                                        Pay Now
                                    </button>
                                </td>
                            </tr>
                        ";
            }
            // line 50
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                </tbody>
            </table>
        </div>
    </div>

    ";
        // line 56
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

        // line 57
        yield "    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var stripe = Stripe('pk_test_51Qwrrl4gBlnREYNzfUuXr4JMaNxTcDhQBYkE4VV4o9RcFNU7nyny0QhSDzlHGrh4gsPDtgnNF5lrOF83dwkKGPcz00sPo5cYsz');

        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('pay-now')) {
                const bookingId = e.target.dataset.bookingId;
                const amount = e.target.dataset.amount;

                fetch('/create-checkout-session', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ bookingId, amount }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.sessionId) {
                        stripe.redirectToCheckout({ sessionId: data.sessionId });
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });

        document.getElementById('searchForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const searchTerm = document.getElementById('searchInput').value;
            const userid = ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 86, $this->source); })()), "html", null, true);
        yield ";

            fetch(`/bookings/search?userid=\${userid}&event_name=\${encodeURIComponent(searchTerm)}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('bookingsTableBody').innerHTML = html;
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
        return "gestion_de_depence/bookings_by_user.html.twig";
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
        return array (  242 => 86,  211 => 57,  188 => 56,  181 => 51,  175 => 50,  165 => 43,  161 => 42,  154 => 38,  150 => 37,  146 => 36,  142 => 35,  138 => 34,  135 => 33,  132 => 32,  128 => 31,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Bookings{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h2>Your Bookings</h2>

        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <form id=\"searchForm\" class=\"input-group\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by event name...\">
                    <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                </form>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"bookingsTableBody\">
                    {% for booking in bookings %}
                        {% if booking.status == 'confirmed' %}
                            <tr>
                                <td>{{ booking.bookingId }}</td>
                                <td>{{ booking.nameEvement }}</td>
                                <td>{{ booking.bookingDate|date('Y-m-d') }}</td>
                                <td>{{ booking.status }}</td>
                                <td>\${{ booking.priceTotal }}</td>
                                <td>
                                    <button 
                                        class=\"btn btn-success pay-now\"
                                        data-booking-id=\"{{ booking.bookingId }}\"
                                        data-amount=\"{{ booking.priceTotal }}\"
                                    >
                                        Pay Now
                                    </button>
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    {% block javascripts %}
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var stripe = Stripe('pk_test_51Qwrrl4gBlnREYNzfUuXr4JMaNxTcDhQBYkE4VV4o9RcFNU7nyny0QhSDzlHGrh4gsPDtgnNF5lrOF83dwkKGPcz00sPo5cYsz');

        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('pay-now')) {
                const bookingId = e.target.dataset.bookingId;
                const amount = e.target.dataset.amount;

                fetch('/create-checkout-session', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ bookingId, amount }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.sessionId) {
                        stripe.redirectToCheckout({ sessionId: data.sessionId });
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        });

        document.getElementById('searchForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const searchTerm = document.getElementById('searchInput').value;
            const userid = {{ userid }};

            fetch(`/bookings/search?userid=\${userid}&event_name=\${encodeURIComponent(searchTerm)}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('bookingsTableBody').innerHTML = html;
                });
        });
    </script>
    {% endblock %}
{% endblock %}", "gestion_de_depence/bookings_by_user.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\gestion_de_depence\\bookings_by_user.html.twig");
    }
}
