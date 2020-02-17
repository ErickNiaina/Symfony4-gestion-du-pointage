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

/* menu/salarie_menu.html.twig */
class __TwigTemplate_bbee9e085e2d9a11b2b1aaaff3ee3149adaeb03586a0efdc0980d154353078fe extends \Twig\Template
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
  <a href=\"#\" class=\"nav-link\">
      <i class=\"nav-icon fas fa-user\"></i>
      <p>
          Salari&eacute;s
          <i class=\"right fas fa-angle-left\"></i>
      </p>
  </a>
  <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
    <li class=\"nav-item\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_new");
        echo "/\" class=\"nav-link\">
            <i class=\"fas fa-user-plus nav-icon\"></i>
            <p>Nouveau salari&eacute;</p>
        </a>
    </li>
    <li class=\"nav-item\">
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_list");
        echo "/\" class=\"nav-link\">
            <i class=\"fas fa-users nav-icon\"></i>
            <p>Liste salari&eacute;</p>
        </a>
    </li>
  </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "menu/salarie_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/salarie_menu.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/menu/salarie_menu.html.twig");
    }
}
