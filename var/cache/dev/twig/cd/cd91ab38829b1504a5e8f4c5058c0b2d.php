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

/* liste_produit.html.twig */
class __TwigTemplate_9a5c0846210314b94f87aee9e3f0d563 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produit.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from         $this->loadTemplate("core/header.html.twig", "liste_produit.html.twig", 2)->unwrap()->yield($context);
        // line 3
        yield "    <body>
        ";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 177
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
        yield from         $this->loadTemplate("core/menu.html.twig", "liste_produit.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "                    <!-- Layout container -->
                    <div class=\"layout-page\">
                        <!-- Navbar -->
                        ";
        // line 13
        yield from         $this->loadTemplate("core/navbar.html.twig", "liste_produit.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "                        <!-- / Navbar -->

                        <!-- Content wrapper -->
                        <div class=\"content-wrapper\">
                            <!-- Content -->
                            <div class=\"container-xxl flex-grow-1 container-p-y\">
                                <h4 class=\"py-3 mb-4\"><span class=\"text-muted fw-light\">eCommerce /</span> Product List</h4>

                                <!-- Product List Widget -->

                                <div class=\"card mb-4\">
                                    <div class=\"card-widget-separator-wrapper\">
                                        <div class=\"card-body card-widget-separator\">
                                            <div class=\"row gy-4 gy-sm-1\">
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div
                                                            class=\"d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0\">
                                                        <div>
                                                            <h6 class=\"mb-2\">In-store Sales</h6>
                                                            <h4 class=\"mb-2\">\$5,345.43</h4>
                                                            <p class=\"mb-0\">
                              <span class=\"text-muted me-2\">5k orders</span
                              ><span class=\"badge bg-label-success\">+5.7%</span>
                                                            </p>
                                                        </div>
                                                        <span class=\"avatar me-sm-4\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-smart-home text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                    <hr class=\"d-none d-sm-block d-lg-none me-4\" />
                                                </div>
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div
                                                            class=\"d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0\">
                                                        <div>
                                                            <h6 class=\"mb-2\">Website Sales</h6>
                                                            <h4 class=\"mb-2\">\$674,347.12</h4>
                                                            <p class=\"mb-0\">
                              <span class=\"text-muted me-2\">21k orders</span
                              ><span class=\"badge bg-label-success\">+12.4%</span>
                                                            </p>
                                                        </div>
                                                        <span class=\"avatar p-2 me-lg-4\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-device-laptop text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                    <hr class=\"d-none d-sm-block d-lg-none\" />
                                                </div>
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div
                                                            class=\"d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3\">
                                                        <div>
                                                            <h6 class=\"mb-2\">Discount</h6>
                                                            <h4 class=\"mb-2\">\$14,235.12</h4>
                                                            <p class=\"mb-0 text-muted\">6k orders</p>
                                                        </div>
                                                        <span class=\"avatar p-2 me-sm-4\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-gift text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div class=\"d-flex justify-content-between align-items-start\">
                                                        <div>
                                                            <h6 class=\"mb-2\">Affiliate</h6>
                                                            <h4 class=\"mb-2\">\$8,345.23</h4>
                                                            <p class=\"mb-0\">
                              <span class=\"text-muted me-2\">150 orders</span
                              ><span class=\"badge bg-label-danger\">-3.5%</span>
                                                            </p>
                                                        </div>
                                                        <span class=\"avatar p-2\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-wallet text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product List Table -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-title mb-0\">Filter</h5>
                                        <div class=\"d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0\">
                                            <div class=\"col-md-4 product_status\"></div>
                                            <div class=\"col-md-4 product_category\"></div>
                                            <div class=\"col-md-4 product_stock\"></div>
                                        </div>
                                    </div>
                                    <div class=\"card-datatable table-responsive\">
                                        <table class=\"datatables-products table\">
                                            <thead class=\"border-top\">
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Produit</th>
                                                <th>Catégorie</th>
                                                <th>Stock</th>
                                                <th>Qte</th>
                                                <th>Prix</th>
                                                <th>Fournisseur</th>
                                                <th>status</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- / Content -->

                            <!-- Footer -->
                            ";
        // line 136
        yield from         $this->loadTemplate("core/footer.html.twig", "liste_produit.html.twig", 136)->unwrap()->yield($context);
        // line 137
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
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/select2/select2.js"), "html", null, true);
        yield "\"></script>

            <!-- Main JS -->
            <script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

            <!-- Page JS -->
            <script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-ecommerce-product-list.js"), "html", null, true);
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
        return "liste_produit.html.twig";
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
        return array (  294 => 174,  288 => 171,  282 => 168,  278 => 167,  270 => 162,  266 => 161,  262 => 160,  258 => 159,  254 => 158,  250 => 157,  246 => 156,  242 => 155,  238 => 154,  219 => 137,  217 => 136,  93 => 14,  91 => 13,  86 => 10,  84 => 9,  78 => 5,  68 => 4,  55 => 177,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
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
                                <h4 class=\"py-3 mb-4\"><span class=\"text-muted fw-light\">eCommerce /</span> Product List</h4>

                                <!-- Product List Widget -->

                                <div class=\"card mb-4\">
                                    <div class=\"card-widget-separator-wrapper\">
                                        <div class=\"card-body card-widget-separator\">
                                            <div class=\"row gy-4 gy-sm-1\">
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div
                                                            class=\"d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0\">
                                                        <div>
                                                            <h6 class=\"mb-2\">In-store Sales</h6>
                                                            <h4 class=\"mb-2\">\$5,345.43</h4>
                                                            <p class=\"mb-0\">
                              <span class=\"text-muted me-2\">5k orders</span
                              ><span class=\"badge bg-label-success\">+5.7%</span>
                                                            </p>
                                                        </div>
                                                        <span class=\"avatar me-sm-4\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-smart-home text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                    <hr class=\"d-none d-sm-block d-lg-none me-4\" />
                                                </div>
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div
                                                            class=\"d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0\">
                                                        <div>
                                                            <h6 class=\"mb-2\">Website Sales</h6>
                                                            <h4 class=\"mb-2\">\$674,347.12</h4>
                                                            <p class=\"mb-0\">
                              <span class=\"text-muted me-2\">21k orders</span
                              ><span class=\"badge bg-label-success\">+12.4%</span>
                                                            </p>
                                                        </div>
                                                        <span class=\"avatar p-2 me-lg-4\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-device-laptop text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                    <hr class=\"d-none d-sm-block d-lg-none\" />
                                                </div>
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div
                                                            class=\"d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3\">
                                                        <div>
                                                            <h6 class=\"mb-2\">Discount</h6>
                                                            <h4 class=\"mb-2\">\$14,235.12</h4>
                                                            <p class=\"mb-0 text-muted\">6k orders</p>
                                                        </div>
                                                        <span class=\"avatar p-2 me-sm-4\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-gift text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                </div>
                                                <div class=\"col-sm-6 col-lg-3\">
                                                    <div class=\"d-flex justify-content-between align-items-start\">
                                                        <div>
                                                            <h6 class=\"mb-2\">Affiliate</h6>
                                                            <h4 class=\"mb-2\">\$8,345.23</h4>
                                                            <p class=\"mb-0\">
                              <span class=\"text-muted me-2\">150 orders</span
                              ><span class=\"badge bg-label-danger\">-3.5%</span>
                                                            </p>
                                                        </div>
                                                        <span class=\"avatar p-2\">
                            <span class=\"avatar-initial bg-label-secondary rounded\"
                            ><i class=\"ti-md ti ti-wallet text-body\"></i
                                ></span>
                          </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product List Table -->
                                <div class=\"card\">
                                    <div class=\"card-header\">
                                        <h5 class=\"card-title mb-0\">Filter</h5>
                                        <div class=\"d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0\">
                                            <div class=\"col-md-4 product_status\"></div>
                                            <div class=\"col-md-4 product_category\"></div>
                                            <div class=\"col-md-4 product_stock\"></div>
                                        </div>
                                    </div>
                                    <div class=\"card-datatable table-responsive\">
                                        <table class=\"datatables-products table\">
                                            <thead class=\"border-top\">
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Produit</th>
                                                <th>Catégorie</th>
                                                <th>Stock</th>
                                                <th>Qte</th>
                                                <th>Prix</th>
                                                <th>Fournisseur</th>
                                                <th>status</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
            <script src=\"{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/libs/select2/select2.js') }}\"></script>

            <!-- Main JS -->
            <script src=\"{{ asset('assets/js/main.js') }}\"></script>

            <!-- Page JS -->
            <script src=\"{{ asset('assets/js/app-ecommerce-product-list.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "liste_produit.html.twig", "/home/paul/PhpstormProjects/poompoom/templates/liste_produit.html.twig");
    }
}
