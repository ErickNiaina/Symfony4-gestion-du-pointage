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
class __TwigTemplate_2ae348b98b14d229e711c9da556fe21af6c648cf38dddbf89dab30155d872d0c extends \Twig\Template
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
        return array (  67 => 23,  58 => 17,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/pointage_menu.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/menu/pointage_menu.html.twig");
    }
}
