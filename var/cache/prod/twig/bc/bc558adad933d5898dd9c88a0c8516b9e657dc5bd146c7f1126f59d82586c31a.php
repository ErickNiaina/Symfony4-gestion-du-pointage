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

/* pointage/pointage_configuration_acces.html.twig */
class __TwigTemplate_b1bc5b6adf2acdefaa553f5d52f2d798720cbb44fd412e8f95e0f11d01a87740 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre_contenu' => [$this, 'block_titre_contenu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_configuration_acces.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pointage configuration";
    }

    // line 4
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nouveau Pointage";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"content-wrapper\">
    <div class=\"animated zoomIn delay-1s content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12\">
                    <div class=\"card card-danger collapsed-card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\" style=\"font-size:1.5rem\"><i class=\"fas fa-ban\"></i> Droit Utilisateur</h4>
                            <div class=\"card-tools\">
                                <button type=\"button\" class=\"btn text-white\" data-card-widget=\"collapse\"><i class=\"fas fa-minus\"></i>
                                </button>
                            </div>
                        </div>
                        <div class=\"card-body\" style=\"display: block;\">Acc&egrave;s refus&eacute;.
                            <br>Vous essayez d&#039;acc&eacute;der &agrave; une page, r&eacute;gion ou fonctionalit&eacute; d&#039;un module d&eacute;sactiv&eacute;, ou sans &ecirc;tre dans une session authentifi&eacute;e, ou avec un utilisateur non autoris&eacute;.
                        </div>
                    </div>
                    <div class=\"card card-widget widget-user-2\">
                        <div class=\"widget-user-header p-4 mb-1\">
                            <div class=\"widget-user-image\">
                                <img class=\"img-circle\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/images/andry.jpg\" alt=\"User Avatar\">
                            </div>
                            <h4 class=\"widget-user-username\">Identifiant courant</h4>
                            <h5 class=\"widget-user-desc\">admin</h5>
                            <div class=\"card-footer mt-4 p-4 bg-light\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <p>Les permissions pour cet identifiant peuvent &ecirc;tre attribu&eacute;es par l&#039;administrateur Openflex via le menu Accueil -> Utilisateurs.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pointage/pointage_configuration_acces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  66 => 6,  62 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pointage/pointage_configuration_acces.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_configuration_acces.html.twig");
    }
}
