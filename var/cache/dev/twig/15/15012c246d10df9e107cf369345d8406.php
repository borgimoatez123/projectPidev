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

/* Gestion_Evennement/admin/Sidbar.html.twig */
class __TwigTemplate_36be82afeeab9231fff1db9d70a18905 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/admin/Sidbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/admin/Sidbar.html.twig"));

        // line 1
        yield "<aside class=\"left-sidebar\" style=\"background-color: #003a66 !important; border-right: 2px solid #e02454;\">
  <!-- Sidebar scroll-->
  <div>
    <!-- Logo -->
    <div class=\"brand-logo d-flex align-items-center justify-content-between px-4 py-3\">
      <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"navbar-brand p-0 text-white d-flex align-items-center\">
        <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand-logo.png"), "html", null, true);
        yield "\" class=\"img-fluid me-2\" style=\"height: 40px;\" alt=\"Logo\">
        <h1 class=\"fs-5 m-0\" style=\"color: #ffffff;\">Meet<span style=\"color: #e02454;\">N</span>Trip</h1>
      </a>
      <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer text-white\" id=\"sidebarCollapse\">
        <i class=\"ti ti-x fs-5\"></i>
      </div>
    </div>

    <!-- Sidebar navigation -->
    <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar id=\"sidebarnav\">
      <ul class=\"pt-3\" id=\"sidebarnav\">

        <li class=\"nav-small-cap text-white-50 px-4 mb-2\">
          <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
          <span class=\"hide-menu\">DASHBOARD</span>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
            <i class=\"ti ti-layout-dashboard me-2\"></i>
            <span class=\"hide-menu\">Dashboard</span>
          </a>
        </li>

        <li class=\"nav-small-cap text-white-50 px-4 mt-4 mb-2\">
          <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
          <span class=\"hide-menu\">MANAGEMENT</span>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenements");
        yield "\">
            <i class=\"ti ti-calendar-event me-2\"></i>
            <span class=\"hide-menu\">Event Management</span>
          </a>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bookings_list");
        yield "\">
            <i class=\"ti ti-book me-2\"></i>
            <span class=\"hide-menu\">Reservation Management</span>
          </a>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_paid_bookings");
        yield "\">
            <i class=\"ti ti-credit-card me-2\"></i>
            <span class=\"hide-menu\">Payment Management</span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Gestion_Evennement/admin/Sidbar.html.twig";
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
        return array (  115 => 51,  105 => 44,  95 => 37,  80 => 25,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"left-sidebar\" style=\"background-color: #003a66 !important; border-right: 2px solid #e02454;\">
  <!-- Sidebar scroll-->
  <div>
    <!-- Logo -->
    <div class=\"brand-logo d-flex align-items-center justify-content-between px-4 py-3\">
      <a href=\"{{ path('app_admin') }}\" class=\"navbar-brand p-0 text-white d-flex align-items-center\">
        <img src=\"{{ asset('img/brand-logo.png') }}\" class=\"img-fluid me-2\" style=\"height: 40px;\" alt=\"Logo\">
        <h1 class=\"fs-5 m-0\" style=\"color: #ffffff;\">Meet<span style=\"color: #e02454;\">N</span>Trip</h1>
      </a>
      <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer text-white\" id=\"sidebarCollapse\">
        <i class=\"ti ti-x fs-5\"></i>
      </div>
    </div>

    <!-- Sidebar navigation -->
    <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar id=\"sidebarnav\">
      <ul class=\"pt-3\" id=\"sidebarnav\">

        <li class=\"nav-small-cap text-white-50 px-4 mb-2\">
          <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
          <span class=\"hide-menu\">DASHBOARD</span>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"{{ path('app_admin') }}\">
            <i class=\"ti ti-layout-dashboard me-2\"></i>
            <span class=\"hide-menu\">Dashboard</span>
          </a>
        </li>

        <li class=\"nav-small-cap text-white-50 px-4 mt-4 mb-2\">
          <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
          <span class=\"hide-menu\">MANAGEMENT</span>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"{{ path('admin_evenements') }}\">
            <i class=\"ti ti-calendar-event me-2\"></i>
            <span class=\"hide-menu\">Event Management</span>
          </a>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"{{ path('admin_bookings_list') }}\">
            <i class=\"ti ti-book me-2\"></i>
            <span class=\"hide-menu\">Reservation Management</span>
          </a>
        </li>

        <li class=\"sidebar-item\">
          <a class=\"sidebar-link text-white px-4 py-2 d-flex align-items-center\" href=\"{{ path('admin_paid_bookings') }}\">
            <i class=\"ti ti-credit-card me-2\"></i>
            <span class=\"hide-menu\">Payment Management</span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
</aside>
", "Gestion_Evennement/admin/Sidbar.html.twig", "C:\\Users\\Cyrine\\Desktop\\MeetNtrip.tn\\projectPidev-main\\templates\\Gestion_Evennement\\admin\\Sidbar.html.twig");
    }
}
