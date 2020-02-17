<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menu/pointage_menu.html.twig */
class __TwigTemplate_2fd2fbbb48e5b98d62e8eb5c1870d08377d6250787349c152ea9f0d386bc489b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/pointage_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/pointage_menu.html.twig"));

        // line 1
        echo "<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link active\">
        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
        <p>
            Pointage
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_new");
        echo "/\" class=\"nav-link\">
                <i class=\"far fa-clipboard nav-icon\"></i>
                <p>Nouveau pointage</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_list");
        echo "/\" class=\"nav-link\">
                <i class=\"fas fa-clipboard-list nav-icon\"></i>
                <p>Liste pointage</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_feuilleTemps");
        echo "/\" class=\"nav-link\">
                <i class=\"fas fa-history nav-icon\"></i>
                <p>Feuille de temps</p>
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/pointage_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  64 => 17,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link active\">
        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
        <p>
            Pointage
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"{{ path('pointage_new') }}/\" class=\"nav-link\">
                <i class=\"far fa-clipboard nav-icon\"></i>
                <p>Nouveau pointage</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('pointage_list') }}/\" class=\"nav-link\">
                <i class=\"fas fa-clipboard-list nav-icon\"></i>
                <p>Liste pointage</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{ path('pointage_feuilleTemps') }}/\" class=\"nav-link\">
                <i class=\"fas fa-history nav-icon\"></i>
                <p>Feuille de temps</p>
            </a>
        </li>
    </ul>
</li>", "menu/pointage_menu.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/menu/pointage_menu.html.twig");
    }
}
