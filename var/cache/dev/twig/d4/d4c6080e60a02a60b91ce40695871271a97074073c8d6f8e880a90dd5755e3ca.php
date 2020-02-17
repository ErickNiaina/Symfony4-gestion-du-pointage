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

/* pointage/pointage_add.html.twig */
class __TwigTemplate_5b03055d19e3001a608944ad4a00427f0e3cd0d97e25e7ac27eae69a2e24e7db extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_add.html.twig", 1);
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

        echo "Pointage liste";
        
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <form id=\"ndform\" method=\"POST\" action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_register");
        echo "\">
                                <div class=\"row add-pointage\">
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 fieldrequired\"><i class=\"fas fa-user\"></i>&nbsp;Nom Employ&eacute;&nbsp; *</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                                <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"fk_employer\">
                                                    <option value=\"0\"></option>
                                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOfEmployers"]) || array_key_exists("listOfEmployers", $context) ? $context["listOfEmployers"] : (function () { throw new RuntimeError('Variable "listOfEmployers" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employers"]) {
            // line 25
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employers"], "getrowid", [], "method", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employers"], "getPrenom", [], "method", false, false, false, 25), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "   
                                                </select>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label for=\"Etat\" class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                            <span class=\"fieldrequired\"><i class=\"fa fa-cogs\"></i>&nbsp;Etat&nbsp; *</span>
                                        </label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                                <select id=\"etat\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"etat\" required>
                                                    <option class=\"optiongrey\" value=\"-1\">&nbsp;</option>
                                                    <option value=\"Entrée\">Entr&eacute;e</option>
                                                    <option value=\"Sortie\">Sortie</option>
                                                </select>
                                        </div>
                                    </div>
                                    <!-- /Produit à fabriquer -->

                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label for=\"pointage_arrivee\" class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                            <span class=\"Cpointage_arrivee fieldrequired\"><i class=\"far fa-clock\"></i>&nbsp;Date&nbsp; *</span>
                                        </label>
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4\">
                                            <div class=\"input-group\" id=\"pointage\">
                                                    <input name=\"date\" type=\"text\" class=\"form-control docs-date\" autocomplete=\"off\" data-toggle=\"datepicker_add\">
                                                <div class=\"input-group-append\">
                                                    <div class=\"input-group-text docs-datepicker-trigger\"><i class=\"fas fa-calendar\" style=\"font-size: 18px;\"></i></div>
                                                </div>
                                                <div class=\"docs-datepicker-container\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4 \">
                                            <div class=\"input-group\">
                                                    <input type=\"text\" id=\"pointage_heure\" data-target=\"#pointage_heure\" data-toggle=\"datetimepicker\" value=\"\" name=\"time\" class=\"form-control datetimepicker-input\">
                                                <div class=\"input-group-append\" data-target=\"#pointage_heure\" data-toggle=\"datetimepicker\">
                                                    <div class=\"input-group-text\"><i class=\"fas fa-clock\" style=\"font-size: 18px;\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"offset-4 col-8 pt-2\">
                                            <button class=\"dpInvisibleButtons datenowlink\" id=\"pointageButtonNow\" type=\"button\" name=\"_useless\" value=\"now\">Maintenant</button>
                                        </div>
                                    </div>
                                    <!-- /Date de planification -->
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\"><i class=\"fas fa-sticky-note\"></i>&nbsp;Note</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <input class=\" inputTheme form-control\" size=\"60\" type=\"text\" name=\"note\" value=\"\">
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\"><i class=\"fas fa-envelope\"></i>&nbsp;Description</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <textarea class=\"form-control\" name=\"description\" size=\"\" wrap=\"soft\" rows=\"2\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"offset-4 col-8 pt-2\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
        echo "\"/>
                                    </div>
                                    <div class=\"col-12  px-3\">
                                        <div class=\"col-12  px-3\">
                                            <div class=\"col-12  px-4\">
                                                <div class=\"col-12 text-right px-1 pb-3\">
                                                    <input type=\"submit\" class=\"btn btn-outline-success\" name=\"add\" value=\"Cr&eacute;er\"> &nbsp;
                                                    <input type=\"submit\" class=\"btn btn-outline-danger\" name=\"cancel\" value=\"Annuler\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
        return "pointage/pointage_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 85,  159 => 26,  148 => 25,  144 => 24,  134 => 17,  128 => 13,  119 => 10,  116 => 9,  112 => 8,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pointage liste{% endblock %}
{% block titre_contenu %}Nouveau Pointage{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}
            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <form id=\"ndform\" method=\"POST\" action=\"{{path('pointage_register')}}\">
                                <div class=\"row add-pointage\">
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 fieldrequired\"><i class=\"fas fa-user\"></i>&nbsp;Nom Employ&eacute;&nbsp; *</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                                <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"fk_employer\">
                                                    <option value=\"0\"></option>
                                                    {% for employers in listOfEmployers %}
                                                        <option value=\"{{employers.getrowid()}}\">{{employers.getPrenom()}}</option>
                                                    {% endfor %}   
                                                </select>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label for=\"Etat\" class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                            <span class=\"fieldrequired\"><i class=\"fa fa-cogs\"></i>&nbsp;Etat&nbsp; *</span>
                                        </label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                                <select id=\"etat\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"etat\" required>
                                                    <option class=\"optiongrey\" value=\"-1\">&nbsp;</option>
                                                    <option value=\"Entrée\">Entr&eacute;e</option>
                                                    <option value=\"Sortie\">Sortie</option>
                                                </select>
                                        </div>
                                    </div>
                                    <!-- /Produit à fabriquer -->

                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label for=\"pointage_arrivee\" class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                            <span class=\"Cpointage_arrivee fieldrequired\"><i class=\"far fa-clock\"></i>&nbsp;Date&nbsp; *</span>
                                        </label>
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4\">
                                            <div class=\"input-group\" id=\"pointage\">
                                                    <input name=\"date\" type=\"text\" class=\"form-control docs-date\" autocomplete=\"off\" data-toggle=\"datepicker_add\">
                                                <div class=\"input-group-append\">
                                                    <div class=\"input-group-text docs-datepicker-trigger\"><i class=\"fas fa-calendar\" style=\"font-size: 18px;\"></i></div>
                                                </div>
                                                <div class=\"docs-datepicker-container\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4 \">
                                            <div class=\"input-group\">
                                                    <input type=\"text\" id=\"pointage_heure\" data-target=\"#pointage_heure\" data-toggle=\"datetimepicker\" value=\"\" name=\"time\" class=\"form-control datetimepicker-input\">
                                                <div class=\"input-group-append\" data-target=\"#pointage_heure\" data-toggle=\"datetimepicker\">
                                                    <div class=\"input-group-text\"><i class=\"fas fa-clock\" style=\"font-size: 18px;\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"offset-4 col-8 pt-2\">
                                            <button class=\"dpInvisibleButtons datenowlink\" id=\"pointageButtonNow\" type=\"button\" name=\"_useless\" value=\"now\">Maintenant</button>
                                        </div>
                                    </div>
                                    <!-- /Date de planification -->
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\"><i class=\"fas fa-sticky-note\"></i>&nbsp;Note</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <input class=\" inputTheme form-control\" size=\"60\" type=\"text\" name=\"note\" value=\"\">
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\"><i class=\"fas fa-envelope\"></i>&nbsp;Description</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <textarea class=\"form-control\" name=\"description\" size=\"\" wrap=\"soft\" rows=\"2\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"offset-4 col-8 pt-2\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-item') }}\"/>
                                    </div>
                                    <div class=\"col-12  px-3\">
                                        <div class=\"col-12  px-3\">
                                            <div class=\"col-12  px-4\">
                                                <div class=\"col-12 text-right px-1 pb-3\">
                                                    <input type=\"submit\" class=\"btn btn-outline-success\" name=\"add\" value=\"Cr&eacute;er\"> &nbsp;
                                                    <input type=\"submit\" class=\"btn btn-outline-danger\" name=\"cancel\" value=\"Annuler\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "pointage/pointage_add.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_add.html.twig");
    }
}
