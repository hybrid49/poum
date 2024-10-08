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

/* calendar.html.twig */
class __TwigTemplate_6425ada9c4fa9e9ecaaa51412138abe5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from         $this->loadTemplate("core/header.html.twig", "calendar.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "    <body>
        ";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 171
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
        yield from         $this->loadTemplate("core/menu.html.twig", "calendar.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "                    <!-- Layout container -->
                    <div class=\"layout-page\">
                        <!-- Navbar -->
                        ";
        // line 13
        yield from         $this->loadTemplate("core/navbar.html.twig", "calendar.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                        <!-- / Navbar -->

                        <!-- Content wrapper -->
                        <div class=\"content-wrapper\">
                            <!-- Content -->

                            <div class=\"container-xxl flex-grow-1 container-p-y\">
                                <div class=\"card app-calendar-wrapper\">
                                    <div class=\"row g-0\">
                                        <!-- Calendar Sidebar -->
                                        <div class=\"col app-calendar-sidebar\" id=\"app-calendar-sidebar\">
                                            <div class=\"border-bottom p-4 my-sm-0 mb-3\">
                                                <div class=\"d-grid\">
                                                    <button
                                                            class=\"btn btn-primary btn-toggle-sidebar\"
                                                            data-bs-toggle=\"offcanvas\"
                                                            data-bs-target=\"#addEventSidebar\"
                                                            aria-controls=\"addEventSidebar\">
                                                        <i class=\"ti ti-plus me-1\"></i>
                                                        <span class=\"align-middle\">Add Event</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class=\"p-3\">
                                                <!-- inline calendar (flatpicker) -->
                                                <div class=\"inline-calendar\"></div>

                                                <hr class=\"container-m-nx mb-4 mt-3\" />

                                                <!-- Filter -->
                                                <div class=\"mb-3 ms-3\">
                                                    <small class=\"text-small text-muted text-uppercase align-middle\">Filter</small>
                                                </div>

                                                <div class=\"form-check mb-2 ms-3\">
                                                    <input
                                                            class=\"form-check-input select-all\"
                                                            type=\"checkbox\"
                                                            id=\"selectAll\"
                                                            data-value=\"all\"
                                                            checked />
                                                    <label class=\"form-check-label\" for=\"selectAll\">View All</label>
                                                </div>

                                                <div class=\"app-calendar-events-filter ms-3\">
                                                    <div class=\"form-check form-check-danger mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-concert\"
                                                                data-value=\"concert\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-concert\">Concert</label>
                                                    </div>
                                                    <div class=\"form-check mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-jeux\"
                                                                data-value=\"Jeux\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-jeux\">Jeux</label>
                                                    </div>
                                                    <div class=\"form-check form-check-warning mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-rdv\"
                                                                data-value=\"Rdv\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-rdv\">Rdv</label>
                                                    </div>
                                                    <div class=\"form-check form-check-success mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-reservation\"
                                                                data-value=\"Reservation\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-reservation\">Reservation</label>
                                                    </div>
                                                    <div class=\"form-check form-check-info\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-autre\"
                                                                data-value=\"autre\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-autre\">Autre</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Calendar Sidebar -->

                                        <!-- Calendar & Modal -->
                                        <div class=\"col app-calendar-content\">
                                            <div class=\"card shadow-none border-0\">
                                                <div class=\"card-body pb-0\">
                                                    <!-- FullCalendar -->
                                                    <div id=\"calendar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"app-overlay\"></div>
                                            <!-- FullCalendar Offcanvas -->
                                            ";
        // line 119
        yield from         $this->loadTemplate("calendar/modal.html.twig", "calendar.html.twig", 119)->unwrap()->yield($context);
        // line 120
        yield "                                        </div>
                                        <!-- /Calendar & Modal -->
                                    </div>
                                </div>
                            </div>
                            <!-- / Content -->

                            ";
        // line 127
        yield from         $this->loadTemplate("core/footer.html.twig", "calendar.html.twig", 127)->unwrap()->yield($context);
        // line 128
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
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>


            <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/fullcalendar/fullcalendar.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/select2/select2.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/moment/moment.js"), "html", null, true);
        yield "\"></script>

            <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

            <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-calendar-events.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-calendar.js"), "html", null, true);
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
        return "calendar.html.twig";
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
        return array (  309 => 168,  305 => 167,  300 => 165,  295 => 163,  291 => 162,  287 => 161,  283 => 160,  279 => 159,  275 => 158,  271 => 157,  265 => 154,  261 => 153,  257 => 152,  253 => 151,  249 => 150,  245 => 149,  241 => 148,  237 => 147,  233 => 146,  213 => 128,  211 => 127,  202 => 120,  200 => 119,  93 => 14,  91 => 13,  86 => 10,  84 => 9,  78 => 5,  68 => 4,  55 => 171,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
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

                            <div class=\"container-xxl flex-grow-1 container-p-y\">
                                <div class=\"card app-calendar-wrapper\">
                                    <div class=\"row g-0\">
                                        <!-- Calendar Sidebar -->
                                        <div class=\"col app-calendar-sidebar\" id=\"app-calendar-sidebar\">
                                            <div class=\"border-bottom p-4 my-sm-0 mb-3\">
                                                <div class=\"d-grid\">
                                                    <button
                                                            class=\"btn btn-primary btn-toggle-sidebar\"
                                                            data-bs-toggle=\"offcanvas\"
                                                            data-bs-target=\"#addEventSidebar\"
                                                            aria-controls=\"addEventSidebar\">
                                                        <i class=\"ti ti-plus me-1\"></i>
                                                        <span class=\"align-middle\">Add Event</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class=\"p-3\">
                                                <!-- inline calendar (flatpicker) -->
                                                <div class=\"inline-calendar\"></div>

                                                <hr class=\"container-m-nx mb-4 mt-3\" />

                                                <!-- Filter -->
                                                <div class=\"mb-3 ms-3\">
                                                    <small class=\"text-small text-muted text-uppercase align-middle\">Filter</small>
                                                </div>

                                                <div class=\"form-check mb-2 ms-3\">
                                                    <input
                                                            class=\"form-check-input select-all\"
                                                            type=\"checkbox\"
                                                            id=\"selectAll\"
                                                            data-value=\"all\"
                                                            checked />
                                                    <label class=\"form-check-label\" for=\"selectAll\">View All</label>
                                                </div>

                                                <div class=\"app-calendar-events-filter ms-3\">
                                                    <div class=\"form-check form-check-danger mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-concert\"
                                                                data-value=\"concert\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-concert\">Concert</label>
                                                    </div>
                                                    <div class=\"form-check mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-jeux\"
                                                                data-value=\"Jeux\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-jeux\">Jeux</label>
                                                    </div>
                                                    <div class=\"form-check form-check-warning mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-rdv\"
                                                                data-value=\"Rdv\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-rdv\">Rdv</label>
                                                    </div>
                                                    <div class=\"form-check form-check-success mb-2\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-reservation\"
                                                                data-value=\"Reservation\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-reservation\">Reservation</label>
                                                    </div>
                                                    <div class=\"form-check form-check-info\">
                                                        <input
                                                                class=\"form-check-input input-filter\"
                                                                type=\"checkbox\"
                                                                id=\"select-autre\"
                                                                data-value=\"autre\"
                                                                checked />
                                                        <label class=\"form-check-label\" for=\"select-autre\">Autre</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Calendar Sidebar -->

                                        <!-- Calendar & Modal -->
                                        <div class=\"col app-calendar-content\">
                                            <div class=\"card shadow-none border-0\">
                                                <div class=\"card-body pb-0\">
                                                    <!-- FullCalendar -->
                                                    <div id=\"calendar\"></div>
                                                </div>
                                            </div>
                                            <div class=\"app-overlay\"></div>
                                            <!-- FullCalendar Offcanvas -->
                                            {% include 'calendar/modal.html.twig' %}
                                        </div>
                                        <!-- /Calendar & Modal -->
                                    </div>
                                </div>
                            </div>
                            <!-- / Content -->

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


            <script src=\"{{ asset('assets/vendor/libs/fullcalendar/fullcalendar.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/select2/select2.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/moment/moment.js') }}\"></script>

            <script src=\"{{ asset('assets/js/main.js') }}\"></script>

            <script src=\"{{ asset('assets/js/app-calendar-events.js') }}\"></script>
            <script src=\"{{ asset('assets/js/app-calendar.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "calendar.html.twig", "/home/paul/PhpstormProjects/poompoom/templates/calendar.html.twig");
    }
}
