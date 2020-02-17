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

/* pointage/pointage_list.html.twig */
class __TwigTemplate_e0a101eb72dd28480643aefe423a83bcd0884101a17cc92269c198187847952d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_list.html.twig", 1);
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

        echo "Liste Pointage";
        
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "                  <div class=\"alert alert-success\">
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
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "dangerModif"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                  <div class=\"alert alert-danger\">
                      ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div id=\"toLoad\" class=\"row\">
                            <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12\">
                                <table id=\"example1\" class=\"table table-responsive-xl table-condensed datatable\" role=\"grid\" aria-describedby=\"example1_info\">
                                    <thead>
                                        <tr class=\"liste_titre\">
                                            <th class=\"liste_titre\"><a href=\"\">Nom Employ&eacute;</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fieldetat</a></th>
                                            <th class=\"liste_titre_sel\"><a href=\"\">Date Entr&eacute;e</a><span class=\"nowrap\">&nbsp;&nbsp;&nbsp;<i class=\"fas fa-angle-down\"><i></span></th>
                                            <th class=\"liste_titre\"><a href=\"\">Note Entr&eacute;e</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Date Sortie</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Note Sortie</a></th>
                                            <th class=\"liste_titre\"><a href=\"/\">Heures Effectu&eacute;es</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fielddescription</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Cr&eacute;e Le</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fieldfk_user_author</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Modifi&eacute; Le</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fieldfk_user_modif</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listOfPointage"]) || array_key_exists("listOfPointage", $context) ? $context["listOfPointage"] : (function () { throw new RuntimeError('Variable "listOfPointage" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["listpointage"]) {
            // line 42
            echo "                                              <tr>
                                                  <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_view", ["rowid" => twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_rowid", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "em_prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></td>
                                                  <td>
                                                      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_etat", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["etat_value"]) {
                // line 46
                echo "                                                          ";
                echo twig_escape_filter($this->env, $context["etat_value"], "html", null, true);
                echo "
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                                  </td>
                                                  <td>";
            // line 49
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_pointageArrivee", [], "any", false, false, false, 49))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_pointageArrivee", [], "any", false, false, false, 49), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_pointageArrivee", [], "any", false, false, false, 49))), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_noteArrivee", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 51
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_pointageDepart", [], "any", false, false, false, 51))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_pointageDepart", [], "any", false, false, false, 51), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_pointageDepart", [], "any", false, false, false, 51))), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_noteDepart", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_totalMinute", [], "any", false, false, false, 53)), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_description", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 55
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_creeLe", [], "any", false, false, false, 55))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_creeLe", [], "any", false, false, false, 55), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_creeLe", [], "any", false, false, false, 55))), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "uo_login", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 57
            echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_modifieLe", [], "any", false, false, false, 57))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_modifieLe", [], "any", false, false, false, 57), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_modifieLe", [], "any", false, false, false, 57))), "html", null, true);
            echo "</td>
                                                  <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listpointage"], "po_fkUserModif", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                              </tr>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listpointage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                    </tbody>
                                </table>
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
        return "pointage/pointage_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 61,  236 => 58,  232 => 57,  228 => 56,  224 => 55,  220 => 54,  216 => 53,  212 => 52,  208 => 51,  204 => 50,  200 => 49,  197 => 48,  188 => 46,  184 => 45,  177 => 43,  174 => 42,  170 => 41,  145 => 18,  136 => 15,  133 => 14,  128 => 13,  119 => 10,  116 => 9,  112 => 8,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pointage liste{% endblock %}
{% block titre_contenu %}Liste Pointage{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
              {% for message in app.flashes('success') %}
                  <div class=\"alert alert-success\">
                      {{ message }}
                  </div>
              {% endfor %}
              {% for message in app.flashes('dangerModif') %}
                  <div class=\"alert alert-danger\">
                      {{ message }}
                  </div>
              {% endfor %}
            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div id=\"toLoad\" class=\"row\">
                            <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12\">
                                <table id=\"example1\" class=\"table table-responsive-xl table-condensed datatable\" role=\"grid\" aria-describedby=\"example1_info\">
                                    <thead>
                                        <tr class=\"liste_titre\">
                                            <th class=\"liste_titre\"><a href=\"\">Nom Employ&eacute;</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fieldetat</a></th>
                                            <th class=\"liste_titre_sel\"><a href=\"\">Date Entr&eacute;e</a><span class=\"nowrap\">&nbsp;&nbsp;&nbsp;<i class=\"fas fa-angle-down\"><i></span></th>
                                            <th class=\"liste_titre\"><a href=\"\">Note Entr&eacute;e</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Date Sortie</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Note Sortie</a></th>
                                            <th class=\"liste_titre\"><a href=\"/\">Heures Effectu&eacute;es</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fielddescription</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Cr&eacute;e Le</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fieldfk_user_author</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Modifi&eacute; Le</a></th>
                                            <th class=\"liste_titre\"><a href=\"\">Fieldfk_user_modif</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          {% for listpointage in listOfPointage %}
                                              <tr>
                                                  <td><a href=\"{{ path('pointage_view', {'rowid': listpointage.po_rowid}) }}\">{{listpointage.em_prenom}}</a></td>
                                                  <td>
                                                      {% for etat_value in listpointage.po_etat %}
                                                          {{etat_value }}
                                                      {% endfor %}
                                                  </td>
                                                  <td>{{listpointage.po_pointageArrivee is not null ? listpointage.po_pointageArrivee|date(\"d/m/Y H:i:s\") : listpointage.po_pointageArrivee}}</td>
                                                  <td>{{listpointage.po_noteArrivee}}</td>
                                                  <td>{{listpointage.po_pointageDepart is not null  ? listpointage.po_pointageDepart|date(\"d/m/Y H:i:s\") : listpointage.po_pointageDepart}}</td>
                                                  <td>{{listpointage.po_noteDepart}}</td>
                                                  <td>{{heure_minutes(listpointage.po_totalMinute)}}</td>
                                                  <td>{{listpointage.po_description}}</td>
                                                  <td>{{listpointage.po_creeLe is not null ? listpointage.po_creeLe|date(\"d/m/Y H:i:s\") : listpointage.po_creeLe}}</td>
                                                  <td>{{listpointage.uo_login}}</td>
                                                  <td>{{listpointage.po_modifieLe is not null ? listpointage.po_modifieLe|date(\"d/m/Y H:i:s\") : listpointage.po_modifieLe}}</td>
                                                  <td>{{listpointage.po_fkUserModif}}</td>
                                              </tr>
                                          {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "pointage/pointage_list.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_list.html.twig");
    }
}
