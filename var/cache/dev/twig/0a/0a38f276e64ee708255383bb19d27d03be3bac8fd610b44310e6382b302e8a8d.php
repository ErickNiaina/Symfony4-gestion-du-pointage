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
class __TwigTemplate_36b2919eb36a68def6978c94cbe6f911ab55467fc537e2cf36bc6b7d9ce0a607 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        // line 1
        echo "<nav class=\"main-header navbar navbar-expand ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "getHost", [], "method", false, false, false, 1) == "openflex.admin")) ? ("navbar-gray-dark") : ("navbar-primary"));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  111 => 44,  99 => 35,  93 => 31,  89 => 29,  82 => 27,  73 => 21,  57 => 8,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-header navbar navbar-expand {{ app.request.getHost() == 'openflex.admin' ? 'navbar-gray-dark' : 'navbar-primary' }} navbar-dark\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link d-lg-none\" data-widget=\"pushmenu\" href=\"#\"><img src=\"{{server_url()}}/op2/public/images/openflex.png\" alt=\"Openflex.cloud Logo\" class=\"brand-image img-fluid\" style=\"opacity: 0.8; height:33px;margin-top: -7px;\"></a>
        </li>
        <li class=\"nav-item d-none d-sm-none d-md-inline-block\">
            <a href=\"{{path('of_erh.index')}}\" class=\"nav-link\">E-RH</a>
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
                <a href=\"{{server_url()}}/index.php?mainmenu=home&leftmenu=\" class=\"nav-link\"><i class=\"fas fa-arrow-left\"></i> <span class=\"d-none d-sm-none d-md-inline-block\">Revenir à Openflex</span></a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <!-- <img src=\"../template/img/user.png\" class=\"img-circle img-fluid\" style=\"height:25px; margin-right:5px;vertical-align: top;\" alt=\"User Image\"> -->
                    <i class=\"fas fa-user\"></i> &nbsp;
                    <span class=\"d-none d-sm-none d-md-inline-block\">{% if app.user.username is defined %} {{app.user.username}}</span>
                        {% else %}
                        Anonymous
                        {% endif %}
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <!--  <a href=\"#\" class=\"dropdown-item dropdown-footer\">Mon compte</a> -->
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"{{path('security_logout')}}\" class=\"dropdown-item dropdown-footer\">Déconnexion</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a id=\"openNav\" class=\"nav-link\" >
                    <i class=\"fas fa-cubes\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('pointage_configuration_Access')}}\">
                    <!-- <img src=\"../template/img/user.png\" class=\"img-circle img-fluid\" style=\"height:25px; margin-right:5px;vertical-align: top;\" alt=\"User Image\"> -->
                    <i class=\"fas fa-cog\"></i> &nbsp;
                </a>
            </li>
        </ul>
    </div>
</nav>", "default/navbar.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/default/navbar.html.twig");
    }
}
