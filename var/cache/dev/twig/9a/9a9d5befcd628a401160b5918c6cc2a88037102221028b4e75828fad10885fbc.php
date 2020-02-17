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

/* default/filtreOfpermission.html.twig */
class __TwigTemplate_b0b7fe775e75f3423a69a0c5afee86bd51a311dff8492a575d8e680963e11960 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/filtreOfpermission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/filtreOfpermission.html.twig"));

        // line 1
        if ($this->extensions['App\Twig\Extension\RightsDefExtension']->userhaveperms("agenda", "myactions", "delete")) {
            // line 2
            echo "    <h4>HAVE A PERMISSION</h4>
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecurityController::accessForbidden"));
            echo "
";
        }
        // line 6
        echo "



";
        // line 10
        if ($this->extensions['App\Twig\Extension\RightsDefExtension']->userhavesubperms("produit", "export")) {
            // line 11
            echo "    <h4>SUCCESSFULLY</h4>
";
        } else {
            // line 13
            echo "   ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecurityController::accessForbidden"));
            echo "
";
        }
        // line 15
        echo "




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/filtreOfpermission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  67 => 13,  63 => 11,  61 => 10,  55 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if (filtreOfperms('agenda','myactions','delete')) %}
    <h4>HAVE A PERMISSION</h4>
{% else %}
    {{render(controller('App\\\\Controller\\\\SecurityController::accessForbidden'))}}
{% endif %}




{% if (filtreOfsubperms('produit','export')) %}
    <h4>SUCCESSFULLY</h4>
{% else %}
   {{render(controller('App\\\\Controller\\\\SecurityController::accessForbidden'))}}
{% endif %}





", "default/filtreOfpermission.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/default/filtreOfpermission.html.twig");
    }
}
