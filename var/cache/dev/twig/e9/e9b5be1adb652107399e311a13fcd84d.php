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

/* calendar/modal.html.twig */
class __TwigTemplate_6457649c0df18dd40e26a27914fd6201 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/modal.html.twig"));

        yield "<div
        class=\"offcanvas offcanvas-end event-sidebar\"
        tabindex=\"-1\"
        id=\"addEventSidebar\"
        aria-labelledby=\"addEventSidebarLabel\">
    <div class=\"offcanvas-header my-1\">
        <h5 class=\"offcanvas-title\" id=\"addEventSidebarLabel\">Ajouter un événement</h5>
        <button
                type=\"button\"
                class=\"btn-close text-reset\"
                data-bs-dismiss=\"offcanvas\"
                aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body pt-0\">
        <form class=\"event-form pt-0\" id=\"eventForm\" onsubmit=\"return false\">
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventTitle\">Titre</label>
                <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"eventTitle\"
                        name=\"eventTitle\"
                        placeholder=\"Event Title\" />
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventLabel\">Catégorie</label>
                <select class=\"select2 select-event-label form-select\" id=\"eventLabel\" name=\"eventLabel\">
                    <option data-label=\"primary\" value=\"Business\" selected>Quizz</option>
                    <option data-label=\"danger\" value=\"Personal\">Concert</option>
                    <option data-label=\"warning\" value=\"Family\">Vernissage</option>
                    <option data-label=\"success\" value=\"Holiday\">Réservation</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventStartDate\">Début</label>
                <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"eventStartDate\"
                        name=\"eventStartDate\"
                        placeholder=\"Start Date\" />
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventEndDate\">Fin</label>
                <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"eventEndDate\"
                        name=\"eventEndDate\"
                        placeholder=\"End Date\" />
            </div>
            <div class=\"mb-3\">
                <label class=\"switch\">
                    <input type=\"checkbox\" class=\"switch-input allDay-switch\" />
                    <span class=\"switch-toggle-slider\">
                                <span class=\"switch-on\"></span>
                                <span class=\"switch-off\"></span>
                              </span>
                    <span class=\"switch-label\">Toute la journée</span>
                </label>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventDescription\">Note</label>
                <textarea class=\"form-control\" name=\"eventDescription\" id=\"eventDescription\"></textarea>
            </div>
            <div class=\"mb-3 d-flex justify-content-sm-between justify-content-start my-4\">
                <div>
                    <button type=\"submit\" class=\"btn btn-primary btn-add-event me-sm-3 me-1\">Add</button>
                    <button
                            type=\"reset\"
                            class=\"btn btn-label-secondary btn-cancel me-sm-0 me-1\"
                            data-bs-dismiss=\"offcanvas\">
                        Cancel
                    </button>
                </div>
                <div><button class=\"btn btn-label-danger btn-delete-event d-none\">Delete</button></div>
            </div>
        </form>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "calendar/modal.html.twig";
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
        return new Source("<div
        class=\"offcanvas offcanvas-end event-sidebar\"
        tabindex=\"-1\"
        id=\"addEventSidebar\"
        aria-labelledby=\"addEventSidebarLabel\">
    <div class=\"offcanvas-header my-1\">
        <h5 class=\"offcanvas-title\" id=\"addEventSidebarLabel\">Ajouter un événement</h5>
        <button
                type=\"button\"
                class=\"btn-close text-reset\"
                data-bs-dismiss=\"offcanvas\"
                aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body pt-0\">
        <form class=\"event-form pt-0\" id=\"eventForm\" onsubmit=\"return false\">
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventTitle\">Titre</label>
                <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"eventTitle\"
                        name=\"eventTitle\"
                        placeholder=\"Event Title\" />
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventLabel\">Catégorie</label>
                <select class=\"select2 select-event-label form-select\" id=\"eventLabel\" name=\"eventLabel\">
                    <option data-label=\"primary\" value=\"Business\" selected>Quizz</option>
                    <option data-label=\"danger\" value=\"Personal\">Concert</option>
                    <option data-label=\"warning\" value=\"Family\">Vernissage</option>
                    <option data-label=\"success\" value=\"Holiday\">Réservation</option>
                </select>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventStartDate\">Début</label>
                <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"eventStartDate\"
                        name=\"eventStartDate\"
                        placeholder=\"Start Date\" />
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventEndDate\">Fin</label>
                <input
                        type=\"text\"
                        class=\"form-control\"
                        id=\"eventEndDate\"
                        name=\"eventEndDate\"
                        placeholder=\"End Date\" />
            </div>
            <div class=\"mb-3\">
                <label class=\"switch\">
                    <input type=\"checkbox\" class=\"switch-input allDay-switch\" />
                    <span class=\"switch-toggle-slider\">
                                <span class=\"switch-on\"></span>
                                <span class=\"switch-off\"></span>
                              </span>
                    <span class=\"switch-label\">Toute la journée</span>
                </label>
            </div>
            <div class=\"mb-3\">
                <label class=\"form-label\" for=\"eventDescription\">Note</label>
                <textarea class=\"form-control\" name=\"eventDescription\" id=\"eventDescription\"></textarea>
            </div>
            <div class=\"mb-3 d-flex justify-content-sm-between justify-content-start my-4\">
                <div>
                    <button type=\"submit\" class=\"btn btn-primary btn-add-event me-sm-3 me-1\">Add</button>
                    <button
                            type=\"reset\"
                            class=\"btn btn-label-secondary btn-cancel me-sm-0 me-1\"
                            data-bs-dismiss=\"offcanvas\">
                        Cancel
                    </button>
                </div>
                <div><button class=\"btn btn-label-danger btn-delete-event d-none\">Delete</button></div>
            </div>
        </form>
    </div>
</div>", "calendar/modal.html.twig", "/home/paul/PhpstormProjects/poompoom/templates/calendar/modal.html.twig");
    }
}
