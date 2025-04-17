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

/* Gestion_Evennement/admin/Navbar.html.twig */
class __TwigTemplate_1149264c7f44b067c4b54972c4f8ce0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/admin/Navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/admin/Navbar.html.twig"));

        // line 1
        yield "<div class=\"body-wrapper\">
  <!-- Header Start -->
  <header class=\"app-header\">
      <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
              <li class=\"nav-item d-block d-xl-none\">
                  <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                      <i class=\"ti ti-menu-2\"></i>
                  </a>
              </li>
              <li class=\"nav-item\">
                  <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                      <i class=\"ti ti-bell-ringing\"></i>
                      <div class=\"notification bg-primary rounded-circle\"></div>
                  </a>
              </li>
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
              <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
                   <li class=\"nav-item dropdown\">
                      <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                          <!-- Use Symfony's asset() function for the profile image -->
                          <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/profile/user-1.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                      </a>
                      <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                          <div class=\"message-body\">
                              <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                  <i class=\"ti ti-user fs-6\"></i>
                                  <p class=\"mb-0 fs-3\">My Profile</p>
                              </a>
                              <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                  <i class=\"ti ti-mail fs-6\"></i>
                                  <p class=\"mb-0 fs-3\">My Account</p>
                              </a>
                              <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                  <i class=\"ti ti-list-check fs-6\"></i>
                                  <p class=\"mb-0 fs-3\">My Task</p>
                              </a>
                              <!-- Logout Link -->
                              <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
  <!-- Header End -->
</div>
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
        return "Gestion_Evennement/admin/Navbar.html.twig";
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
        return array (  92 => 40,  72 => 23,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"body-wrapper\">
  <!-- Header Start -->
  <header class=\"app-header\">
      <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
              <li class=\"nav-item d-block d-xl-none\">
                  <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                      <i class=\"ti ti-menu-2\"></i>
                  </a>
              </li>
              <li class=\"nav-item\">
                  <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                      <i class=\"ti ti-bell-ringing\"></i>
                      <div class=\"notification bg-primary rounded-circle\"></div>
                  </a>
              </li>
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
              <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
                   <li class=\"nav-item dropdown\">
                      <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                          <!-- Use Symfony's asset() function for the profile image -->
                          <img src=\"{{ asset('assets/images/profile/user-1.jpg') }}\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                      </a>
                      <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                          <div class=\"message-body\">
                              <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                  <i class=\"ti ti-user fs-6\"></i>
                                  <p class=\"mb-0 fs-3\">My Profile</p>
                              </a>
                              <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                  <i class=\"ti ti-mail fs-6\"></i>
                                  <p class=\"mb-0 fs-3\">My Account</p>
                              </a>
                              <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                  <i class=\"ti ti-list-check fs-6\"></i>
                                  <p class=\"mb-0 fs-3\">My Task</p>
                              </a>
                              <!-- Logout Link -->
                              <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
  <!-- Header End -->
</div>
", "Gestion_Evennement/admin/Navbar.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\Gestion_Evennement\\admin\\Navbar.html.twig");
    }
}
