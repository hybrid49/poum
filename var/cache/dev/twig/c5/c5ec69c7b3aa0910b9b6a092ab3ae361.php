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

/* base.html.twig */
class __TwigTemplate_97452ce25db35bbfc113f1ddb0935a67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from         $this->loadTemplate("core/header.html.twig", "base.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "    <body>
        ";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 65
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "            <!-- Layout wrapper -->
            <div class=\"layout-wrapper l ayout-content-navbar\">
                <div class=\"layout-container\">
                    <!-- Menu -->
                    ";
        // line 9
        yield from         $this->loadTemplate("core/menu.html.twig", "base.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "                    <!-- Layout container -->
                    <div class=\"layout-page\">
                        <!-- Navbar -->
                        ";
        // line 13
        yield from         $this->loadTemplate("core/navbar.html.twig", "base.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                        <!-- / Navbar -->

                        <!-- Content wrapper -->
                        <div class=\"content-wrapper\">
                            <!-- Content -->

                            <!-- / Content -->

                            <!-- Footer -->
                            ";
        // line 23
        yield from         $this->loadTemplate("core/footer.html.twig", "base.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "                            <!-- / Footer -->

                            <div class=\"content-backdrop fade\"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class=\"layout-overlay layout-menu-toggle\"></div>

                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class=\"drag-target\"></div>
            </div>
            <!-- / Layout wrapper -->

            <script src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/apex-charts/apexcharts.j"), "html", null, true);
        yield "s\"></script>
            <script src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>

            <!-- Main JS -->
            <script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

            <!-- Page JS -->
            <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  185 => 62,  179 => 59,  173 => 56,  169 => 55,  165 => 54,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  129 => 42,  125 => 41,  106 => 24,  104 => 23,  93 => 14,  91 => 13,  86 => 10,  84 => 9,  78 => 5,  68 => 4,  55 => 65,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include 'core/header.html.twig' %}
    <body>
        {% block body %}
            <!-- Layout wrapper -->
            <div class=\"layout-wrapper l ayout-content-navbar\">
                <div class=\"layout-container\">
                    <!-- Menu -->
                    {% include 'core/menu.html.twig' %}
                    <!-- Layout container -->
                    <div class=\"layout-page\">
                        <!-- Navbar -->
                        {% include 'core/navbar.html.twig' %}
                        <!-- / Navbar -->

                        <!-- Content wrapper -->
                        <div class=\"content-wrapper\">
                            <!-- Content -->

                            <!-- / Content -->

                            <!-- Footer -->
                            {% include 'core/footer.html.twig' %}
                            <!-- / Footer -->

                            <div class=\"content-backdrop fade\"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class=\"layout-overlay layout-menu-toggle\"></div>

                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class=\"drag-target\"></div>
            </div>
            <!-- / Layout wrapper -->

            <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/hammer/hammer.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/i18n/i18n.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>

            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src=\"{{ asset('assets/vendor/libs/apex-charts/apexcharts.j') }}s\"></script>
            <script src=\"{{ asset('assets/vendor/libs/swiper/swiper.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>

            <!-- Main JS -->
            <script src=\"{{ asset('assets/js/main.js') }}\"></script>

            <!-- Page JS -->
            <script src=\"{{ asset('assets/js/dashboards-analytics.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/paul/PhpstormProjects/poompoom/templates/base.html.twig");
    }
}
