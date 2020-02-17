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

/* pointage/pointage_view.html.twig */
class __TwigTemplate_fa4247f5e4648146a617c293e5d3a33bdedfdf9c11144e77362ec2d5a529266a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_view.html.twig", 1);
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

        echo "Pointage";
        
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
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                            <div class=\"col-6\">
                                <h4 class=\"titre\">Pointages</h4></div>
                            <div class=\"col-6 text-right\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"animated fadeInRight delay-1s content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"clearfix\">
                                        <div class=\"float-right\">
                                            <ul class=\"pagination\">
                                                <li class=\"page-item noborder litext\"><a class=\"page-link\" data-role=\"button\" data-iconpos=\"left\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_list");
        echo "\">Retour liste</a></li>
                                                <li class=\"page-item\">
                                                    <a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-r\" data-iconpos=\"left\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_list");
        echo "\">
                                                        </a>
                                                </li>
                                                <li class=\"page-item\"><a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-l\" data-iconpos=\"left\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_list");
        echo "\">></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["onePointage"]) || array_key_exists("onePointage", $context) ? $context["onePointage"] : (function () { throw new RuntimeError('Variable "onePointage" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["onepointage"]) {
            // line 40
            echo "                                        <table class=\"table table-responsive-md table-condensed\">
                                            <tr>
                                                <th class=\"fieldrequired\">Nom Employ&eacute;</th>
                                                <td>
                                                    <div class=\"refid\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "em_prenom", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Fieldfk_user_author</th>
                                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "uo_login", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Etat</td>
                                                    <td>
                                                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_etat", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["etat_value"]) {
                // line 55
                echo "                                                            ";
                echo twig_escape_filter($this->env, $context["etat_value"], "html", null, true);
                echo "
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                                                    </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Date Entr&eacute;e</th>
                                                <td>";
            // line 61
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_pointageArrivee", [], "any", false, false, false, 61))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_pointageArrivee", [], "any", false, false, false, 61), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_pointageArrivee", [], "any", false, false, false, 61))), "html", null, true);
            echo " </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Note Entr&eacute;e</th>
                                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_noteArrivee", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Date Sortie</th>
                                                <td>";
            // line 69
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_pointageDepart", [], "any", false, false, false, 69))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_pointageDepart", [], "any", false, false, false, 69), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_pointageDepart", [], "any", false, false, false, 69))), "html", null, true);
            echo " </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Note Sortie</th>
                                                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_noteDepart", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Cr&eacute;e Le</th>
                                                <td>";
            // line 77
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_creeLe", [], "any", false, false, false, 77))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_creeLe", [], "any", false, false, false, 77), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_creeLe", [], "any", false, false, false, 77))), "html", null, true);
            echo " </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Modifi&eacute; Le</th>
                                                <td>";
            // line 81
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_modifieLe", [], "any", false, false, false, 81))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_modifieLe", [], "any", false, false, false, 81), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_modifieLe", [], "any", false, false, false, 81))), "html", null, true);
            echo " </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Heures Effectu&eacute;es</th>
                                                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_totalMinute", [], "any", false, false, false, 85)), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Fieldfk_user_modif</th>
                                                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_fkUserModif", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Description</th>
                                                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_description", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Actif</th>
                                                <td>";
            // line 97
            echo (((twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_actif", [], "any", false, false, false, 97) == true)) ? ("Actif ") : ("Inactif"));
            echo "</td>
                                            </tr>
                                        </table>
                                    <br>
                                    <div class=\"clearfix\">
                                        <div class=\"float-right\">
                                            <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_edit", ["rowid" => twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_rowid", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">Modifier</a>&nbsp;&nbsp;
                                                <a class=\"btn btn-outline-danger\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_delete", ["rowid" => twig_get_attribute($this->env, $this->source, $context["onepointage"], "po_rowid", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">Supprimer</a></div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['onepointage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                </div>
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
        return "pointage/pointage_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 108,  273 => 104,  269 => 103,  260 => 97,  253 => 93,  246 => 89,  239 => 85,  232 => 81,  225 => 77,  218 => 73,  211 => 69,  204 => 65,  197 => 61,  191 => 57,  182 => 55,  178 => 54,  170 => 49,  162 => 44,  156 => 40,  152 => 39,  142 => 32,  136 => 29,  131 => 27,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pointage{% endblock %}
{% block titre_contenu %}Nouveau Pointage{% endblock %}
{% block body %}
<div class=\"content-wrapper\">
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                            <div class=\"col-6\">
                                <h4 class=\"titre\">Pointages</h4></div>
                            <div class=\"col-6 text-right\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"animated fadeInRight delay-1s content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"clearfix\">
                                        <div class=\"float-right\">
                                            <ul class=\"pagination\">
                                                <li class=\"page-item noborder litext\"><a class=\"page-link\" data-role=\"button\" data-iconpos=\"left\" href=\"{{path('pointage_list')}}\">Retour liste</a></li>
                                                <li class=\"page-item\">
                                                    <a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-r\" data-iconpos=\"left\" href=\"{{path('pointage_list')}}\">
                                                        </a>
                                                </li>
                                                <li class=\"page-item\"><a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-l\" data-iconpos=\"left\" href=\"{{path('pointage_list')}}\">></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    {% for onepointage in onePointage %}
                                        <table class=\"table table-responsive-md table-condensed\">
                                            <tr>
                                                <th class=\"fieldrequired\">Nom Employ&eacute;</th>
                                                <td>
                                                    <div class=\"refid\">{{onepointage.em_prenom}}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Fieldfk_user_author</th>
                                                <td>{{onepointage.uo_login}}</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Etat</td>
                                                    <td>
                                                        {% for etat_value in onepointage.po_etat %}
                                                            {{etat_value }}
                                                        {% endfor %}
                                                    </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Date Entr&eacute;e</th>
                                                <td>{{onepointage.po_pointageArrivee is not null ? onepointage.po_pointageArrivee|date(\"d/m/Y H:i:s\") : onepointage.po_pointageArrivee}} </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Note Entr&eacute;e</th>
                                                <td>{{onepointage.po_noteArrivee}}</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Date Sortie</th>
                                                <td>{{onepointage.po_pointageDepart is not null  ? onepointage.po_pointageDepart|date(\"d/m/Y H:i:s\") : onepointage.po_pointageDepart}} </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Note Sortie</th>
                                                <td>{{onepointage.po_noteDepart}}</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Cr&eacute;e Le</th>
                                                <td>{{onepointage.po_creeLe is not null ? onepointage.po_creeLe|date(\"d/m/Y H:i:s\") : onepointage.po_creeLe}} </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Modifi&eacute; Le</th>
                                                <td>{{onepointage.po_modifieLe is not null ? onepointage.po_modifieLe|date(\"d/m/Y H:i:s\") : onepointage.po_modifieLe}} </td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Heures Effectu&eacute;es</th>
                                                <td>{{heure_minutes(onepointage.po_totalMinute)}}</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Fieldfk_user_modif</th>
                                                <td>{{onepointage.po_fkUserModif}}</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Description</th>
                                                <td>{{onepointage.po_description}}</td>
                                            </tr>
                                            <tr>
                                                <th class=\"nowrap\">Actif</th>
                                                <td>{{onepointage.po_actif == true ? 'Actif ': 'Inactif' }}</td>
                                            </tr>
                                        </table>
                                    <br>
                                    <div class=\"clearfix\">
                                        <div class=\"float-right\">
                                            <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"{{path('pointage_edit',{'rowid': onepointage.po_rowid}) }}\">Modifier</a>&nbsp;&nbsp;
                                                <a class=\"btn btn-outline-danger\" href=\"{{ path('pointage_delete', {'rowid': onepointage.po_rowid}) }}\">Supprimer</a></div>
                                        </div>
                                    </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}
", "pointage/pointage_view.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_view.html.twig");
    }
}
