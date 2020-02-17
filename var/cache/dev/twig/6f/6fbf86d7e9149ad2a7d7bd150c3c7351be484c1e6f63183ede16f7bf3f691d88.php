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
class __TwigTemplate_cebaf1713a4acdf4a34763f2d67237e005bf45911654840ad4a34c4bbc2ff078 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_configuration_acces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_configuration_acces.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_configuration_acces.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pointage configuration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_contenu"));

        echo "Nouveau Pointage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  130 => 26,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pointage configuration{% endblock %}
{% block titre_contenu %}Nouveau Pointage{% endblock %}
{% block body %}
<div class=\"content-wrapper\">
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
                                <img class=\"img-circle\" src=\"{{server_url()}}/op2/public/images/andry.jpg\" alt=\"User Avatar\">
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
{% endblock %}



























", "pointage/pointage_configuration_acces.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_configuration_acces.html.twig");
    }
}
