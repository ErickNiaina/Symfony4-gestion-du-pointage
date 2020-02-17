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
class __TwigTemplate_34e68163795a0c22afa8b75492cdea07ba5a0bf7cfbb8e151c38c1c5c3e927a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  86 => 36,  65 => 17,  63 => 16,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"main-sidebar sidebar-light-primary elevation-1\">
  <!-- Brand Logo -->
  <a href=\"#\" class=\"brand-link\" data-widget=\"pushmenu\">
      <img src=\"{{server_url()}}/op2/public/images/openflex.png\" alt=\"Openflex.cloud Logo\" class=\"brand-image img-circle\" style=\"opacity: 0.8\">
      <span class=\"brand-text font-weight-light title-text\">Openflex <small>2.0</small></span>
  </a>

  <!-- Sidebar -->
  <div class=\"sidebar\">


      <!-- Sidebar Menu -->
      <nav class=\"mt-2 menu-sidebar-left\">
          <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              {% include 'menu/pointage_menu.html.twig' %}
          </ul>
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
                        <a href=\"{{path('of_erh.index')}}\" class=\"nav-link active\">e-RH</a>
                    </li>
                    <!-- <li class=\"nav-item\">
                        <a href=\"/\" class=\"nav-link\">Accueil</a>
                    </li> -->
                <!-- </ul> -->
            </li>
        </ul>
    </div>
</aside>
", "default/sidebar.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/default/sidebar.html.twig");
    }
}
