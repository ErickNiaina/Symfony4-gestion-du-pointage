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
class __TwigTemplate_00fc328c26b90e1cb5ae4c85cf460c7a3b8a39bacd9b1875cc34b1e19634049a extends \Twig\Template
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
        return array (  67 => 15,  61 => 13,  57 => 11,  55 => 10,  49 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/filtreOfpermission.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/default/filtreOfpermission.html.twig");
    }
}
