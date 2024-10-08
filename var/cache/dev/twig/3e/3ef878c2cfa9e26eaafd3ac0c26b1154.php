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

/* core/menu.html.twig */
class __TwigTemplate_73e849c818edc72b23d17c2857732cce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/menu.html.twig"));

        // line 1
        yield "<aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
    <div class=\"app-brand demo\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_accueil");
        yield "\" class=\"app-brand-link\">
            <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/poom/logo.png"), "html", null, true);
        yield "\" style=\"width: 25%;\">
            <span class=\"app-brand-text demo menu-text fw-bold\">POUM</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
            <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
            <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Apps & Pages -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\" data-i18n=\"Dashboard\">Dashboard</span>
        </li>
        <li class=\"menu-item ";
        // line 21
        if (CoreExtension::inFilter("accueil", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21))) {
            yield "active";
        }
        yield "\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_accueil");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-mail\"></i>
                <div data-i18n=\"Dashboards\">Dashboards</div>
            </a>
        </li>
        <!-- Apps & Pages -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\" data-i18n=\"Gestion\">Gestion</span>
        </li>
        <li class=\"menu-item ";
        // line 31
        if (CoreExtension::inFilter("calendar", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "attributes", [], "any", false, false, false, 31), "get", ["_route"], "method", false, false, false, 31))) {
            yield "active";
        }
        yield "\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_calendar");
        yield "\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-calendar\"></i>
                <div data-i18n=\"Calendar\">Calendar</div>
            </a>
        </li>
        <!-- e-commerce-app menu start -->
        <li class=\"menu-item ";
        // line 38
        if (CoreExtension::inFilter("products", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38))) {
            yield "active open";
        }
        yield "\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons ti ti-shopping-cart\"></i>
                <div data-i18n=\"Stock\">Stock</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item ";
        // line 44
        if (CoreExtension::inFilter("stock", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44))) {
            yield "active open";
        }
        yield "\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <div data-i18n=\"Produits\">Produits</div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item ";
        // line 49
        if (CoreExtension::inFilter("stock_list", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49))) {
            yield "active";
        }
        yield "\">
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_products_stock_list");
        yield "\" class=\"menu-link\">
                                <div data-i18n=\"liste\">liste</div>
                            </a>
                        </li>
                        <li class=\"menu-item ";
        // line 54
        if (CoreExtension::inFilter("add_produit", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54))) {
            yield "active";
        }
        yield "\">
                            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_products_stock_add_produit");
        yield "\" class=\"menu-link\">
                                <div data-i18n=\"Ajout Produit\">Ajout Produit</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-item ";
        // line 61
        if (CoreExtension::inFilter("reassort", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61))) {
            yield "active open";
        }
        yield "\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <div data-i18n=\"Commande\">Commande</div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item ";
        // line 66
        if (CoreExtension::inFilter("reassort", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", ["_route"], "method", false, false, false, 66))) {
            yield "active";
        }
        yield "\">
                            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_products_reassort");
        yield "\" class=\"menu-link\">
                                <div data-i18n=\"Réassort\">Réassort</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\" data-i18n=\"Organisation\">Organisation</span>
        </li>
        <li class=\"menu-item\">
            <a href=\"app-kanban.html\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-layout-kanban\"></i>
                <div data-i18n=\"Kanban\">Kanban</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/menu.html.twig";
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
        return array (  170 => 67,  164 => 66,  154 => 61,  145 => 55,  139 => 54,  132 => 50,  126 => 49,  116 => 44,  105 => 38,  96 => 32,  90 => 31,  78 => 22,  72 => 21,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
    <div class=\"app-brand demo\">
        <a href=\"{{ path('app_client_accueil') }}\" class=\"app-brand-link\">
            <img src=\"{{ asset('assets/img/poom/logo.png') }}\" style=\"width: 25%;\">
            <span class=\"app-brand-text demo menu-text fw-bold\">POUM</span>
        </a>

        <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
            <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
            <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
        </a>
    </div>

    <div class=\"menu-inner-shadow\"></div>

    <ul class=\"menu-inner py-1\">
        <!-- Apps & Pages -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\" data-i18n=\"Dashboard\">Dashboard</span>
        </li>
        <li class=\"menu-item {% if 'accueil' in app.request.attributes.get('_route') %}active{% endif %}\">
            <a href=\"{{ path('app_client_accueil') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-mail\"></i>
                <div data-i18n=\"Dashboards\">Dashboards</div>
            </a>
        </li>
        <!-- Apps & Pages -->
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\" data-i18n=\"Gestion\">Gestion</span>
        </li>
        <li class=\"menu-item {% if 'calendar' in app.request.attributes.get('_route') %}active{% endif %}\">
            <a href=\"{{ path('app_client_calendar') }}\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-calendar\"></i>
                <div data-i18n=\"Calendar\">Calendar</div>
            </a>
        </li>
        <!-- e-commerce-app menu start -->
        <li class=\"menu-item {% if 'products' in app.request.attributes.get('_route') %}active open{% endif %}\">
            <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                <i class=\"menu-icon tf-icons ti ti-shopping-cart\"></i>
                <div data-i18n=\"Stock\">Stock</div>
            </a>
            <ul class=\"menu-sub\">
                <li class=\"menu-item {% if 'stock' in app.request.attributes.get('_route') %}active open{% endif %}\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <div data-i18n=\"Produits\">Produits</div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item {% if 'stock_list' in app.request.attributes.get('_route') %}active{% endif %}\">
                            <a href=\"{{ path('app_client_products_stock_list') }}\" class=\"menu-link\">
                                <div data-i18n=\"liste\">liste</div>
                            </a>
                        </li>
                        <li class=\"menu-item {% if 'add_produit' in app.request.attributes.get('_route') %}active{% endif %}\">
                            <a href=\"{{ path('app_client_products_stock_add_produit') }}\" class=\"menu-link\">
                                <div data-i18n=\"Ajout Produit\">Ajout Produit</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"menu-item {% if 'reassort' in app.request.attributes.get('_route') %}active open{% endif %}\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <div data-i18n=\"Commande\">Commande</div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item {% if 'reassort' in app.request.attributes.get('_route') %}active{% endif %}\">
                            <a href=\"{{ path('app_client_products_reassort') }}\" class=\"menu-link\">
                                <div data-i18n=\"Réassort\">Réassort</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=\"menu-header small text-uppercase\">
            <span class=\"menu-header-text\" data-i18n=\"Organisation\">Organisation</span>
        </li>
        <li class=\"menu-item\">
            <a href=\"app-kanban.html\" class=\"menu-link\">
                <i class=\"menu-icon tf-icons ti ti-layout-kanban\"></i>
                <div data-i18n=\"Kanban\">Kanban</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->", "core/menu.html.twig", "/home/paul/PhpstormProjects/poompoom/templates/core/menu.html.twig");
    }
}
