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

/* default/navbar.html.twig */
class __TwigTemplate_feb7baf4e1c02a91cf29a40e9033a03072e2c70d326dddaecd885a8e1c5b902c extends \Twig\Template
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
        echo "<nav class=\"main-header navbar navbar-expand ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "getHost", [], "method", false, false, false, 1) == "openflex.admin")) ? ("navbar-gray-dark") : ("navbar-primary"));
        echo " navbar-dark\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link d-lg-none\" data-widget=\"pushmenu\" href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/images/openflex.png\" alt=\"Openflex.cloud Logo\" class=\"brand-image img-fluid\" style=\"opacity: 0.8; height:33px;margin-top: -7px;\"></a>
        </li>
        <li class=\"nav-item d-none d-sm-none d-md-inline-block\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("of_erh.index");
        echo "\" class=\"nav-link\">E-RH</a>
        </li>
        <!-- <li class=\"nav-item d-none d-sm-none d-md-inline-block\">
            <a href=\"#\" class=\"nav-link\">e-RH</a>
        </li> -->
    </ul>

    <div class=\"ml-auto\">
        <!-- Right navbar links -->
        <ul class=\"navbar-nav\">
            <!-- User Dropdown Menu -->

            <li class=\"nav-item \">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/index.php?mainmenu=home&leftmenu=\" class=\"nav-link\"><i class=\"fas fa-arrow-left\"></i> <span class=\"d-none d-sm-none d-md-inline-block\">Revenir à Openflex</span></a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <!-- <img src=\"../template/img/user.png\" class=\"img-circle img-fluid\" style=\"height:25px; margin-right:5px;vertical-align: top;\" alt=\"User Image\"> -->
                    <i class=\"fas fa-user\"></i> &nbsp;
                    <span class=\"d-none d-sm-none d-md-inline-block\">";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 27), "username", [], "any", true, true, false, 27)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
                        ";
        } else {
            // line 29
            echo "                        Anonymous
                        ";
        }
        // line 31
        echo "                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <!--  <a href=\"#\" class=\"dropdown-item dropdown-footer\">Mon compte</a> -->
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" class=\"dropdown-item dropdown-footer\">Déconnexion</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a id=\"openNav\" class=\"nav-link\" >
                    <i class=\"fas fa-cubes\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_configuration_Access");
        echo "\">
                    <!-- <img src=\"../template/img/user.png\" class=\"img-circle img-fluid\" style=\"height:25px; margin-right:5px;vertical-align: top;\" alt=\"User Image\"> -->
                    <i class=\"fas fa-cog\"></i> &nbsp;
                </a>
            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "default/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 44,  93 => 35,  87 => 31,  83 => 29,  76 => 27,  67 => 21,  51 => 8,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/navbar.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/default/navbar.html.twig");
    }
}
