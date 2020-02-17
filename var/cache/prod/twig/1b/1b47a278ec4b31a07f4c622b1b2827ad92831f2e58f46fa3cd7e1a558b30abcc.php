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

/* default/sidebar.html.twig */
class __TwigTemplate_57b3e231de4f1f9ce2486a0d4bf0885a9784892094076a7a1398aae81ab4d7d2 extends \Twig\Template
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
        echo "<aside class=\"main-sidebar sidebar-light-primary elevation-1\">
  <!-- Brand Logo -->
  <a href=\"#\" class=\"brand-link\" data-widget=\"pushmenu\">
      <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/images/openflex.png\" alt=\"Openflex.cloud Logo\" class=\"brand-image img-circle\" style=\"opacity: 0.8\">
      <span class=\"brand-text font-weight-light title-text\">Openflex <small>2.0</small></span>
  </a>

  <!-- Sidebar -->
  <div class=\"sidebar\">


      <!-- Sidebar Menu -->
      <nav class=\"mt-2 menu-sidebar-left\">
          <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              ";
        // line 16
        $this->loadTemplate("menu/pointage_menu.html.twig", "default/sidebar.html.twig", 16)->display($context);
        // line 17
        echo "          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<aside class=\"control-sidebar control-sidebar-light\">
    <!-- Control sidebar content goes here -->
    <div class=\"\">
        <ul id=\"menu-right-mobile\" class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"true\">
            <li class=\"nav-item has-treeview menu-open\">
               <!--  <a href=\"#\" class=\"nav-link active\">
                    <p>
                        Openflex e-RH
                        <i class=\"right fas fa-angle-left\"></i>
                    </p>
                </a>
                <ul class=\"nav nav-treeview sous-menu-sidebar-left\"> -->
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("of_erh.index");
        echo "\" class=\"nav-link active\">e-RH</a>
                    </li>
                    <!-- <li class=\"nav-item\">
                        <a href=\"/\" class=\"nav-link\">Accueil</a>
                    </li> -->
                <!-- </ul> -->
            </li>
        </ul>
    </div>
</aside>
";
    }

    public function getTemplateName()
    {
        return "default/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  59 => 17,  57 => 16,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/sidebar.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/default/sidebar.html.twig");
    }
}
