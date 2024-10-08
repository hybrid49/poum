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

/* core/footer.html.twig */
class __TwigTemplate_89752a0dce4e46d18286d5e4fd0b288b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/footer.html.twig"));

        yield "<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<!-- Footer -->
<footer class=\"content-footer footer bg-footer-theme\">
    <div class=\"container-xxl\">
        <div
                class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
            <div>
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </div>
            <div class=\"d-none d-lg-inline-block\">


            </div>
        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<!-- Footer -->
<footer class=\"content-footer footer bg-footer-theme\">
    <div class=\"container-xxl\">
        <div
                class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\">
            <div>
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
{#                , made with ❤️ by <a href=\"https://pixinvent.com\" target=\"_blank\" class=\"fw-medium\">Pixinvent</a>#}
            </div>
            <div class=\"d-none d-lg-inline-block\">
{#                <a href=\"https://themeforest.net/licenses/standard\" class=\"footer-link me-4\" target=\"_blank\"#}
{#                >License</a#}
{#                >#}
{#                <a href=\"https://1.envato.market/pixinvent_portfolio\" target=\"_blank\" class=\"footer-link me-4\"#}
{#                >More Themes</a#}
{#                >#}

{#                <a#}
{#                        href=\"https://demos.pixinvent.com/vuexy-html-admin-template/documentation/\"#}
{#                        target=\"_blank\"#}
{#                        class=\"footer-link me-4\"#}
{#                >Documentation</a#}
{#                >#}

{#                <a href=\"https://pixinvent.ticksy.com/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\"#}
{#                >Support</a#}
{#                >#}
            </div>
        </div>
    </div>
</footer>", "core/footer.html.twig", "/home/paul/PhpstormProjects/poompoom/templates/core/footer.html.twig");
    }
}
