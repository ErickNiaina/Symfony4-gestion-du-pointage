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
class __TwigTemplate_5eb8db01b8373f8a224cdd171cd3157b6ef2b1b77a9c2779971ad2c8aa24434f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pointage";
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
        $context['_seq'] = twig_ensure_traversable(($context["onePointage"] ?? null));
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
        return array (  241 => 108,  231 => 104,  227 => 103,  218 => 97,  211 => 93,  204 => 89,  197 => 85,  190 => 81,  183 => 77,  176 => 73,  169 => 69,  162 => 65,  155 => 61,  149 => 57,  140 => 55,  136 => 54,  128 => 49,  120 => 44,  114 => 40,  110 => 39,  100 => 32,  94 => 29,  89 => 27,  66 => 6,  62 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pointage/pointage_view.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_view.html.twig");
    }
}
