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
class __TwigTemplate_bd3c2c31078f9aa7600012d6d8e7b27a4aa37983425a4875379bf12bdcf7cf65 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pointage liste";
    }

    // line 4
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste Pointage";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
              ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 8));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "dangerModif"], "method", false, false, false, 13));
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
        $context['_seq'] = twig_ensure_traversable(($context["listOfPointage"] ?? null));
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
        return array (  203 => 61,  194 => 58,  190 => 57,  186 => 56,  182 => 55,  178 => 54,  174 => 53,  170 => 52,  166 => 51,  162 => 50,  158 => 49,  155 => 48,  146 => 46,  142 => 45,  135 => 43,  132 => 42,  128 => 41,  103 => 18,  94 => 15,  91 => 14,  86 => 13,  77 => 10,  74 => 9,  70 => 8,  66 => 6,  62 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pointage/pointage_list.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_list.html.twig");
    }
}
