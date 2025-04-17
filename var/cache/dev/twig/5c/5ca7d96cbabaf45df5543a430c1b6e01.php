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

/* gestion_de_depence/paid_bookings/index.html.twig */
class __TwigTemplate_363c67d2181a8270e5a7bd03ea1f1226 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'admin' => [$this, 'block_admin'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_depence/paid_bookings/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_de_depence/paid_bookings/index.html.twig"));

        $this->parent = $this->loadTemplate("gestion_de_reservation/booking_admin/base.html.twig", "gestion_de_depence/paid_bookings/index.html.twig", 1);
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

        yield "Paid Bookings Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<div class=\"container-fluidd \">
    <!-- Statistics Section -->
    <div class=\"row g-4 mb-4\">
        <div class=\" X col-12\">
            <div class=\"revenue-badge\">
                <h5 class=\"text-white mb-0\">Total Revenue: \$";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRevenue"]) || array_key_exists("totalRevenue", $context) ? $context["totalRevenue"] : (function () { throw new RuntimeError('Variable "totalRevenue" does not exist.', 16, $this->source); })()), 2), "html", null, true);
        yield "</h5>
            </div>
        </div>
        
        <div class=\"col-xl-4 col-md-6\">
            <div class=\"chart-cardd h-100 p-4\">
                <h6 class=\"stat-title\"><i class=\"fas fa-hotel me-2\"></i>Hotel Distribution</h6>
                <div class=\"chart-container\" style=\"height: 250px\">
                    <canvas id=\"hotelChart\"></canvas>
                </div>
            </div>
        </div>

        <div class=\"col-xl-4 col-md-6\">
            <div class=\"chart-cardd h-100 p-4\">
                <h6 class=\"stat-title\"><i class=\"fas fa-bus me-2\"></i>Transport Distribution</h6>
                <div class=\"chart-container\" style=\"height: 250px\">
                    <canvas id=\"transportChart\"></canvas>
                </div>
            </div>
        </div>

        <div class=\"col-xl-4 col-md-6\">
            <div class=\"chart-cardd h-100 p-4\">
                <h6 class=\"stat-title\"><i class=\"fas fa-hand-holding-usd me-2\"></i>Sponsoring Distribution</h6>
                <div class=\"chart-container\" style=\"height: 250px\">
                    <canvas id=\"sponsoringChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Paid Bookings Table -->
    <div class=\"card data-table border-0 shadow-sm\">
        <div class=\"card-header bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-receipt fa-lg text-primary me-3\"></i>
                    <h5 class=\"mb-0 table-title\">Paid Bookings Overview</h5>
                </div>
                <div class=\"d-flex gap-3\">
                    <div class=\"revenue-badge\">
                        <h5 class=\"text-white mb-0\">Bookings: ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["paidBookings"]) || array_key_exists("paidBookings", $context) ? $context["paidBookings"] : (function () { throw new RuntimeError('Variable "paidBookings" does not exist.', 58, $this->source); })())), "html", null, true);
        yield "</h5>
                    </div>
                    <div class=\"revenue-badge\">
                        <h5 class=\"text-white mb-0\">Revenue: \$";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalRevenue"]) || array_key_exists("totalRevenue", $context) ? $context["totalRevenue"] : (function () { throw new RuntimeError('Variable "totalRevenue" does not exist.', 61, $this->source); })()), 2), "html", null, true);
        yield "</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-body px-0\">
            <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Booking ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">User</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Event</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Amount</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paidBookings"]) || array_key_exists("paidBookings", $context) ? $context["paidBookings"] : (function () { throw new RuntimeError('Variable "paidBookings" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 80
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex px-3 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">#";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "bookingId", [], "any", false, false, false, 84), "html", null, true);
            yield "</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "userName", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                                    <p class=\"text-xs text-secondary mb-0\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "userEmail", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "nameEvement", [], "any", false, false, false, 93), "html", null, true);
            yield "</p>
                                </td>
                               
                                <td class=\"align-middle text-center\">
                                    <span class=\"text-secondary text-sm font-weight-bold\">
                                        \$";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "priceTotal", [], "any", false, false, false, 98), 2), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_booking_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" 
                                       class=\"btn btn-info btn-sm\" 
                                       data-toggle=\"tooltip\" 
                                       title=\"View Details\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 110
        if (!$context['_iterated']) {
            // line 111
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    <p class=\"text-secondary mb-0\">No paid bookings found</p>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Table -->
    <div class=\"card data-table border-0 shadow-sm mt-4\">
        <div class=\"card-header bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-exchange-alt fa-lg text-info me-3\"></i>
                    <h5 class=\"mb-0 table-title\">Transaction History Summary</h5>
                </div>
                <div class=\"revenue-badge\">
                    <h5 class=\"text-white mb-0\">Transactions: ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 132, $this->source); })())), "html", null, true);
        yield "</h5>
                </div>
            </div>
        </div>
        <div class=\"card-body px-0\">
            <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0 table-striped\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Transaction ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">User ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Event ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Booking ID</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Amount</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Status</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 151, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 152
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex px-3 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">#";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "idTransaction", [], "any", false, false, false, 156), "html", null, true);
            yield "</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "idUser", [], "any", false, false, false, 161), "html", null, true);
            yield "</p>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "idEvent", [], "any", false, false, false, 164), "html", null, true);
            yield "</p>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "idBooking", [], "any", false, false, false, 167), "html", null, true);
            yield "</p>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <span class=\"text-secondary text-sm font-weight-bold\">
                                        \$";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "priceTotal", [], "any", false, false, false, 171), 2), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <span class=\"badge badge-sm bg-";
            // line 175
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 175) == "completed")) ? ("success") : ("warning"));
            yield "\">
                                        ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 176), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <span class=\"text-secondary text-sm font-weight-bold\">
                                        ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "dateTransaction", [], "any", false, false, false, 181), "Y-m-d H:i"), "html", null, true);
            yield "
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 185
        if (!$context['_iterated']) {
            // line 186
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">
                                    <p class=\"text-secondary mb-0\">No transactions found</p>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 199
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

        // line 200
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tooltip initialization
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle=\"tooltip\"]'))
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Chart configuration
            const chartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#4a4a4a',
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.85)',
                        titleFont: { size: 14 },
                        bodyFont: { size: 12 }
                    }
                }
            };

            // Initialize Charts
            new Chart(document.getElementById('hotelChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(";
        // line 236
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 236, $this->source); })()), "hotels", [], "any", false, false, false, 236));
        yield "),
                    datasets: [{
                        data: Object.values(";
        // line 238
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 238, $this->source); })()), "hotels", [], "any", false, false, false, 238));
        yield ").map(v => parseFloat(v.replace('%', ''))),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
                    }]
                }
            });

            new Chart(document.getElementById('transportChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(";
        // line 247
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 247, $this->source); })()), "transport", [], "any", false, false, false, 247));
        yield "),
                    datasets: [{
                        data: Object.values(";
        // line 249
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 249, $this->source); })()), "transport", [], "any", false, false, false, 249));
        yield ").map(v => parseFloat(v.replace('%', ''))),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                    }]
                }
            });

            new Chart(document.getElementById('sponsoringChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(";
        // line 258
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 258, $this->source); })()), "sponsoring", [], "any", false, false, false, 258));
        yield "),
                    datasets: [{
                        data: Object.values(";
        // line 260
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 260, $this->source); })()), "sponsoring", [], "any", false, false, false, 260));
        yield ").map(v => parseFloat(v.replace('%', ''))),
                        backgroundColor: ['#4CAF50', '#FF5252']
                    }]
                }
            });
        });
    </script>

<style>
    // Add to existing styles
    .table-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #344767;
        letter-spacing: 0.025em;
        margin-left:60px:
    }
    .revenue-badge {
        background: linear-gradient(45deg, #2c9f42, #48bf53);
        border-radius: 0.5rem;
         margin-top:50px;
        min-width: 180px;
        text-align: center;
    }
    .fa-lg {
        font-size: 1.5em;
        vertical-align: -2px;
        
    }
    .chart-cardd {
        background: #fff;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
        transition: transform 0.3s ease;
        margin-left:100px:

    }
    .chart-card:hover {
        transform: translateY(-5px);
    }
    .stat-title {
        font-size: 1rem;
        font-weight: 600;
        color: #4a4a4a;
        margin-bottom: 1.5rem;
         margin-left:60px:

    }
    .data-table {
        border-radius: 0.75rem;
        overflow: hidden;
        margin-left:60px:

    }
 
    .table-header {
        background: #f8f9fa;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-left:60px:

    }
    .status-badge {
        font-size: 0.75rem;
         border-radius: 0.375rem;}
        
    
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
        return "gestion_de_depence/paid_bookings/index.html.twig";
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
        return array (  503 => 260,  498 => 258,  486 => 249,  481 => 247,  469 => 238,  464 => 236,  424 => 200,  411 => 199,  394 => 191,  384 => 186,  382 => 185,  373 => 181,  365 => 176,  361 => 175,  354 => 171,  347 => 167,  341 => 164,  335 => 161,  327 => 156,  321 => 152,  316 => 151,  294 => 132,  276 => 116,  266 => 111,  264 => 110,  251 => 102,  244 => 98,  236 => 93,  230 => 90,  226 => 89,  218 => 84,  212 => 80,  207 => 79,  186 => 61,  180 => 58,  135 => 16,  128 => 11,  115 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'gestion_de_reservation/booking_admin/base.html.twig' %}

{% block title %}Paid Bookings Management{% endblock %}

{% block stylesheets %}
    
   
{% endblock %}

{% block admin %}
<div class=\"container-fluidd \">
    <!-- Statistics Section -->
    <div class=\"row g-4 mb-4\">
        <div class=\" X col-12\">
            <div class=\"revenue-badge\">
                <h5 class=\"text-white mb-0\">Total Revenue: \${{ totalRevenue|number_format(2) }}</h5>
            </div>
        </div>
        
        <div class=\"col-xl-4 col-md-6\">
            <div class=\"chart-cardd h-100 p-4\">
                <h6 class=\"stat-title\"><i class=\"fas fa-hotel me-2\"></i>Hotel Distribution</h6>
                <div class=\"chart-container\" style=\"height: 250px\">
                    <canvas id=\"hotelChart\"></canvas>
                </div>
            </div>
        </div>

        <div class=\"col-xl-4 col-md-6\">
            <div class=\"chart-cardd h-100 p-4\">
                <h6 class=\"stat-title\"><i class=\"fas fa-bus me-2\"></i>Transport Distribution</h6>
                <div class=\"chart-container\" style=\"height: 250px\">
                    <canvas id=\"transportChart\"></canvas>
                </div>
            </div>
        </div>

        <div class=\"col-xl-4 col-md-6\">
            <div class=\"chart-cardd h-100 p-4\">
                <h6 class=\"stat-title\"><i class=\"fas fa-hand-holding-usd me-2\"></i>Sponsoring Distribution</h6>
                <div class=\"chart-container\" style=\"height: 250px\">
                    <canvas id=\"sponsoringChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Paid Bookings Table -->
    <div class=\"card data-table border-0 shadow-sm\">
        <div class=\"card-header bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-receipt fa-lg text-primary me-3\"></i>
                    <h5 class=\"mb-0 table-title\">Paid Bookings Overview</h5>
                </div>
                <div class=\"d-flex gap-3\">
                    <div class=\"revenue-badge\">
                        <h5 class=\"text-white mb-0\">Bookings: {{ paidBookings|length }}</h5>
                    </div>
                    <div class=\"revenue-badge\">
                        <h5 class=\"text-white mb-0\">Revenue: \${{ totalRevenue|number_format(2) }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-body px-0\">
            <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0 table-hover\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Booking ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">User</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Event</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Amount</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for booking in paidBookings %}
                            <tr>
                                <td>
                                    <div class=\"d-flex px-3 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">#{{ booking.bookingId }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">{{ booking.userName }}</p>
                                    <p class=\"text-xs text-secondary mb-0\">{{ booking.userEmail }}</p>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">{{ booking.nameEvement }}</p>
                                </td>
                               
                                <td class=\"align-middle text-center\">
                                    <span class=\"text-secondary text-sm font-weight-bold\">
                                        \${{ booking.priceTotal|number_format(2) }}
                                    </span>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <a href=\"{{ path('admin_booking_show', {'id': booking.id}) }}\" 
                                       class=\"btn btn-info btn-sm\" 
                                       data-toggle=\"tooltip\" 
                                       title=\"View Details\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    <p class=\"text-secondary mb-0\">No paid bookings found</p>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Table -->
    <div class=\"card data-table border-0 shadow-sm mt-4\">
        <div class=\"card-header bg-white border-0 py-3\">
            <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-exchange-alt fa-lg text-info me-3\"></i>
                    <h5 class=\"mb-0 table-title\">Transaction History Summary</h5>
                </div>
                <div class=\"revenue-badge\">
                    <h5 class=\"text-white mb-0\">Transactions: {{ transactions|length }}</h5>
                </div>
            </div>
        </div>
        <div class=\"card-body px-0\">
            <div class=\"table-responsive p-0\">
                <table class=\"table align-items-center mb-0 table-striped\">
                    <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Transaction ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">User ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Event ID</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Booking ID</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Amount</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Status</th>
                            <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for transaction in transactions %}
                            <tr>
                                <td>
                                    <div class=\"d-flex px-3 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">#{{ transaction.idTransaction }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">{{ transaction.idUser }}</p>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">{{ transaction.idEvent }}</p>
                                </td>
                                <td>
                                    <p class=\"text-sm font-weight-bold mb-0\">{{ transaction.idBooking }}</p>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <span class=\"text-secondary text-sm font-weight-bold\">
                                        \${{ transaction.priceTotal|number_format(2) }}
                                    </span>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <span class=\"badge badge-sm bg-{{ transaction.status == 'completed' ? 'success' : 'warning' }}\">
                                        {{ transaction.status }}
                                    </span>
                                </td>
                                <td class=\"align-middle text-center\">
                                    <span class=\"text-secondary text-sm font-weight-bold\">
                                        {{ transaction.dateTransaction|date('Y-m-d H:i') }}
                                    </span>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center py-4\">
                                    <p class=\"text-secondary mb-0\">No transactions found</p>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tooltip initialization
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle=\"tooltip\"]'))
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Chart configuration
            const chartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#4a4a4a',
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0,0,0,0.85)',
                        titleFont: { size: 14 },
                        bodyFont: { size: 12 }
                    }
                }
            };

            // Initialize Charts
            new Chart(document.getElementById('hotelChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys({{ stats.hotels|json_encode|raw }}),
                    datasets: [{
                        data: Object.values({{ stats.hotels|json_encode|raw }}).map(v => parseFloat(v.replace('%', ''))),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
                    }]
                }
            });

            new Chart(document.getElementById('transportChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys({{ stats.transport|json_encode|raw }}),
                    datasets: [{
                        data: Object.values({{ stats.transport|json_encode|raw }}).map(v => parseFloat(v.replace('%', ''))),
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
                    }]
                }
            });

            new Chart(document.getElementById('sponsoringChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys({{ stats.sponsoring|json_encode|raw }}),
                    datasets: [{
                        data: Object.values({{ stats.sponsoring|json_encode|raw }}).map(v => parseFloat(v.replace('%', ''))),
                        backgroundColor: ['#4CAF50', '#FF5252']
                    }]
                }
            });
        });
    </script>

<style>
    // Add to existing styles
    .table-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #344767;
        letter-spacing: 0.025em;
        margin-left:60px:
    }
    .revenue-badge {
        background: linear-gradient(45deg, #2c9f42, #48bf53);
        border-radius: 0.5rem;
         margin-top:50px;
        min-width: 180px;
        text-align: center;
    }
    .fa-lg {
        font-size: 1.5em;
        vertical-align: -2px;
        
    }
    .chart-cardd {
        background: #fff;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
        transition: transform 0.3s ease;
        margin-left:100px:

    }
    .chart-card:hover {
        transform: translateY(-5px);
    }
    .stat-title {
        font-size: 1rem;
        font-weight: 600;
        color: #4a4a4a;
        margin-bottom: 1.5rem;
         margin-left:60px:

    }
    .data-table {
        border-radius: 0.75rem;
        overflow: hidden;
        margin-left:60px:

    }
 
    .table-header {
        background: #f8f9fa;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-left:60px:

    }
    .status-badge {
        font-size: 0.75rem;
         border-radius: 0.375rem;}
        
    
</style>
{% endblock %}", "gestion_de_depence/paid_bookings/index.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\gestion_de_depence\\paid_bookings\\index.html.twig");
    }
}
