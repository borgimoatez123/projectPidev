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

/* Gestion_Evennement/footer.html.twig */
class __TwigTemplate_02f52bf6d39469ea8a94a35287789e53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Gestion_Evennement/footer.html.twig"));

        // line 1
        yield "<!-- Footer Start -->
<div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-secondary mb-4\">Contact Info</h4>
                    <a href=\"\"><i class=\"fa fa-map-marker-alt me-2\"></i> 123 Street, New York, USA</a>
                    <a href=\"\"><i class=\"fas fa-envelope me-2\"></i> MeetNTrip@gmail.com</a>
                    <a href=\"\"><i class=\"fas fa-phone me-2\"></i> +012 345 67890</a>
                    <a href=\"\" class=\"mb-3\"><i class=\"fas fa-print me-2\"></i> +012 345 67890</a>
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-share fa-2x text-secondary me-2\"></i>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-secondary mb-4\">Opening Time</h4>
                    <div class=\"mb-3\">
                        <h6 class=\"text-muted mb-0\">Mon - Friday:</h6>
                        <p class=\"text-white mb-0\">09.00 am to 07.00 pm</p>
                    </div>
                    <div class=\"mb-3\">
                        <h6 class=\"text-muted mb-0\">Satday:</h6>
                        <p class=\"text-white mb-0\">10.00 am to 05.00 pm</p>
                    </div>
                    <div class=\"mb-3\">
                        <h6 class=\"text-muted mb-0\">Vacation:</h6>
                        <p class=\"text-white mb-0\">All Sunday is our vacation</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-secondary mb-4\">Our Services</h4>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Business</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Evaluation</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Migrate</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Study</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Counselling</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Work / Career</a>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item\">
                    <h4 class=\"text-secondary mb-4\">Newsletter</h4>
                    <p class=\"text-white mb-3\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class=\"position-relative mx-auto rounded-pill\">
                        <input class=\"form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Enter your email\">
                        <button type=\"button\" class=\"btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
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
        return "Gestion_Evennement/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Footer Start -->
<div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-secondary mb-4\">Contact Info</h4>
                    <a href=\"\"><i class=\"fa fa-map-marker-alt me-2\"></i> 123 Street, New York, USA</a>
                    <a href=\"\"><i class=\"fas fa-envelope me-2\"></i> MeetNTrip@gmail.com</a>
                    <a href=\"\"><i class=\"fas fa-phone me-2\"></i> +012 345 67890</a>
                    <a href=\"\" class=\"mb-3\"><i class=\"fas fa-print me-2\"></i> +012 345 67890</a>
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-share fa-2x text-secondary me-2\"></i>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"btn mx-1\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-secondary mb-4\">Opening Time</h4>
                    <div class=\"mb-3\">
                        <h6 class=\"text-muted mb-0\">Mon - Friday:</h6>
                        <p class=\"text-white mb-0\">09.00 am to 07.00 pm</p>
                    </div>
                    <div class=\"mb-3\">
                        <h6 class=\"text-muted mb-0\">Satday:</h6>
                        <p class=\"text-white mb-0\">10.00 am to 05.00 pm</p>
                    </div>
                    <div class=\"mb-3\">
                        <h6 class=\"text-muted mb-0\">Vacation:</h6>
                        <p class=\"text-white mb-0\">All Sunday is our vacation</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item d-flex flex-column\">
                    <h4 class=\"text-secondary mb-4\">Our Services</h4>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Business</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Evaluation</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Migrate</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Study</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Counselling</a>
                    <a href=\"#\" class=\"\"><i class=\"fas fa-angle-right me-2\"></i> Work / Career</a>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-6 col-xl-3\">
                <div class=\"footer-item\">
                    <h4 class=\"text-secondary mb-4\">Newsletter</h4>
                    <p class=\"text-white mb-3\">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class=\"position-relative mx-auto rounded-pill\">
                        <input class=\"form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Enter your email\">
                        <button type=\"button\" class=\"btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2\">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
", "Gestion_Evennement/footer.html.twig", "C:\\Users\\borgi\\Desktop\\New folder (3)\\integration final\\projectPidev-main\\projectPidev-main\\templates\\Gestion_Evennement\\footer.html.twig");
    }
}
