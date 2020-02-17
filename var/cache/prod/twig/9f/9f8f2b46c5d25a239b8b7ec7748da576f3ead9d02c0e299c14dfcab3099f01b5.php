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

/* pointage/pointage_edit.html.twig */
class __TwigTemplate_296479113f1b6eb2c7ab7ea642c7c3bf9fc3da0ed5bafe7faba5f4dfc1deda02 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pointage modifier";
    }

    // line 4
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification Pointage";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onepointage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["onepointage_id"]) {
            // line 13
            echo "                            <form id=\"ndform\" method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pointage_update", ["rowid" => twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_rowid", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">
                                <div class=\"form-group row\">
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 fieldrequired\">Nom Employ&eacute;</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"fk_employer\">
                                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listEmployer"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 20
                echo "                                                ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "em_prenom", [], "any", false, false, false, 20), [0 => twig_get_attribute($this->env, $this->source, $context["list"], "em_prenom", [], "any", false, false, false, 20)])) {
                    // line 21
                    echo "                                                ";
                } else {
                    // line 22
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "em_rowid", [], "any", false, false, false, 22), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "em_prenom", [], "any", false, false, false, 22), "html", null, true);
                    echo "</option>
                                                    <option value=\"";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "em_rowid", [], "any", false, false, false, 23), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "em_prenom", [], "any", false, false, false, 23), "html", null, true);
                    echo "</option>
                                                ";
                }
                // line 25
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label for=\"pointage_arrivee\" class=\" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                            <span class=\"Cpointage_arrivee\">Date Entr&eacute;e</span>
                                        </label>
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4\">
                                            <div class=\"input-group\">
                                                <input id=\"pointageA\" name=\"pointageA\" type=\"text\" class=\"form-control inputTheme\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_pointageArrivee", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
            echo "\" disabled onChange=\"dpChangeDay('pointageA','dd/MM/yyyy'); \">
                                                <div class=\"input-group-append\" data-target=\"#pointageAButton\">
                                                    <button id=\"pointageAButton\" type=\"button\" class=\"input-group-text\"><i class=\"material-icons\" style=\"font-size: 18px;\">calendar_today</i><span class=\"icon-choisir-une-date icon-contenu\"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" id=\"pointageAday\" name=\"pointageAday\" value=\"09\">
                                        <input type=\"hidden\" id=\"pointageAmonth\" name=\"pointageAmonth\" value=\"01\">
                                        <input type=\"hidden\" id=\"pointageAyear\" name=\"pointageAyear\" value=\"2020\">
                                        <input type=\"hidden\" id=\"pointageAhour\" name=\"pointageAhour\" value=\"10\">
                                        <input type=\"hidden\" id=\"pointageAmin\" name=\"pointageAmin\" value=\"00\">
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4 \">
                                            <div class=\"input-group \">
                                                <input type=\"text\" id=\"pointageA_heure\" data-target=\"#pointageA_heure\" data-toggle=\"datetimepicker\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_pointageArrivee", [], "any", false, false, false, 48), "H:i"), "html", null, true);
            echo "\" 
                                                name=\"pointageA_heure\" class=\"form-control datetimepicker-input inputTheme\" placeholder=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_pointageArrivee", [], "any", false, false, false, 49), "H:i"), "html", null, true);
            echo "\"/>
                                                <div class=\"input-group-append\" data-target=\"#pointageA_heure\" data-toggle=\"datetimepicker\">
                                                    <button id=\"pointageAButtonH\" type=\"button\" class=\"input-group-text\"><i class=\"material-icons\" style=\"font-size: 18px;\">schedule</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"offset-4 col-8 pt-2\">
                                            <button class=\"dpInvisibleButtons datenowlink\" id=\"pointageAButtonNow\" type=\"button\" name=\"_useless\" value=\"now\">Maintenant</button>
                                        </div>
                                    </div>
                                    <!-- /Date de arrivee -->

                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"nowrap  col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">Note Entr&eacute;e</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <input class=\" inputTheme form-control\" size=\"60\" type=\"text\" name=\"note_arrivee\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_noteArrivee", [], "any", false, false, false, 65), "html", null, true);
            echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label for=\"pointage_depart\" class=\" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                                            <span class=\"Cpointage_depart\">Date Sortie</span>
                                        </label>
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4\">
                                            <div class=\"input-group\">
                                                <input id=\"pointageD\" name=\"pointageD\" type=\"text\" class=\"form-control inputTheme\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_pointageDepart", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            echo "\" disabled onChange=\"dpChangeDay('pointageD','dd/MM/yyyy'); \">
                                                <div class=\"input-group-append\" data-target=\"#pointageDButton\">
                                                    <button id=\"pointageDButton\" type=\"button\" class=\"input-group-text\"><i class=\"material-icons\" style=\"font-size: 18px;\">calendar_today</i><span class=\"icon-choisir-une-date icon-contenu\"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" id=\"pointageDday\" name=\"pointageDday\" value=\"09\">
                                        <input type=\"hidden\" id=\"pointageDmonth\" name=\"pointageDmonth\" value=\"01\">
                                        <input type=\"hidden\" id=\"pointageDyear\" name=\"pointageDyear\" value=\"2020\">
                                        <input type=\"hidden\" id=\"pointageDhour\" name=\"pointageDhour\" value=\"17\">
                                        <input type=\"hidden\" id=\"pointageDmin\" name=\"pointageDmin\" value=\"24\">
                                        <div class=\"col-xl-4 col-lg-4 col-sm-4 col-md-4 col-xs-4 \">
                                            <div class=\"input-group \">
                                                    <input type=\"text\" id=\"pointageD_heure\" data-target=\"#pointageD_heure\" data-toggle=\"datetimepicker\" value=\"\" 
                                                    name=\"pointageD_heure\" class=\"form-control datetimepicker-input inputTheme\" placeholder=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_pointageDepart", [], "any", false, false, false, 88), "H:i"), "html", null, true);
            echo "\"/>
                                                <div class=\"input-group-append\" data-target=\"#pointageD_heure\" data-toggle=\"datetimepicker\">
                                                    <button id=\"pointageDButtonH\" type=\"button\" class=\"input-group-text\"><i class=\"material-icons\" style=\"font-size: 18px;\">schedule</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"offset-4 col-8 pt-2\">
                                            <button class=\"dpInvisibleButtons datenowlink\" id=\"pointageDButtonNow\" type=\"button\" name=\"_useless\" value=\"now\">Maintenant</button>
                                        </div>
                                    </div>
                                    <!-- /Date de depart -->

                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"nowrap  col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">Note Sortie</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <input class=\" inputTheme form-control\" size=\"60\" type=\"text\" name=\"note_depart\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_noteDepart", [], "any", false, false, false, 104), "html", null, true);
            echo "\">
                                        </div>
                                    </div>
                                    <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 row p-3\">
                                        <label class=\"nowrap  col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4\">Description</label>
                                        <div class=\"col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8\">
                                            <textarea class=\"form-control\" name=\"description\" size=\"\" wrap=\"soft\" rows=\"2\" >";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["onepointage_id"], "po_description", [], "any", false, false, false, 110), "html", null, true);
            echo "</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"offset-4 col-8 pt-2\">
                                    <input type=\"hidden\" name=\"token\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
            echo "\"/>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['onepointage_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                <div class=\"col-12  px-3\">
                                    <div class=\"col-12  px-3\">
                                        <div class=\"col-12  px-4\">
                                            <div class=\"col-12 text-right px-1 pb-3\">
                                                <input type=\"submit\" class=\"btn btn-outline-success btn-lg\" name=\"save\" value=\"Enregistrer\"> &nbsp;
                                                <input type=\"submit\" class=\"btn btn-outline-danger btn-lg\" name=\"cancel\" value=\"Annuler\">
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
    }

    public function getTemplateName()
    {
        return "pointage/pointage_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 118,  233 => 115,  225 => 110,  216 => 104,  197 => 88,  180 => 74,  168 => 65,  149 => 49,  145 => 48,  129 => 35,  118 => 26,  112 => 25,  105 => 23,  98 => 22,  95 => 21,  92 => 20,  88 => 19,  78 => 13,  74 => 12,  66 => 6,  62 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pointage/pointage_edit.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_edit.html.twig");
    }
}
