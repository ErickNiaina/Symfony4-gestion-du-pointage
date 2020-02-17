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

/* pointage/pointage_feuilleTemps.html.twig */
class __TwigTemplate_7f60ef247db85f5442485e3d5b0bd26861ba648c6037eabeb776dc75337b7f27 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_feuilleTemps.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pointage feuille temps";
    }

    // line 4
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Feuille de temps";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container-fluid\">
        <form method=\"POST\" id=\"searchFormList\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generated_feuilleDeTemps");
        echo "\">
            <div class=\"container-fluid\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "danger"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
        <div class=\"animated fadeInUp delay-1s content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">                                        
                                <div id=\"toLoad\">
                                    <div class=\"form-row\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 feuille\">
                                            <div class=\"form-group\">
                                                <label for=\"employer\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                                                    <h4>Nom Employ&eacute;</h4></label>
                                                    <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"fk_employer\">
                                                        ";
        // line 35
        if ((isset($context["listTemp"]) || array_key_exists("listTemp", $context))) {
            // line 36
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["listTemp"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "em_rowid", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                                                                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["listTemp"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "em_prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "   
                                                            </option>
                                                        ";
        } elseif (        // line 39
(isset($context["sessionName"]) || array_key_exists("sessionName", $context))) {
            // line 40
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, ($context["sessionid"] ?? null), "html", null, true);
            echo "\">
                                                                    ";
            // line 41
            echo twig_escape_filter($this->env, ($context["sessionName"] ?? null), "html", null, true);
            echo "   
                                                            </option>
                                                        ";
        }
        // line 44
        echo "                                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listEmployer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employers"]) {
            // line 45
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employers"], "getrowid", [], "method", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employers"], "getPrenom", [], "method", false, false, false, 45), "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "   
                                                    </select>
                                            </div>
                                        </div>
                                
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 feuille\">
                                            <div class=\"form-group\">
                                                <label for=\"Date_Fin\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
                                                    <h4 class=\"Date_Fin\">Choisir le mois</h4>
                                                </label>
                                                <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                                                    <div class=\"input-group\" id=\"Date_Fin\">
                                                        <select class=\"select_mois\" name = \"month\">
                                                            <option  value=\"\">
                                                                ";
        // line 60
        if (((isset($context["sessiondate"]) || array_key_exists("sessiondate", $context)) &&  !(null === ($context["sessiondate"] ?? null)))) {
            // line 61
            echo "                                                                    ";
            echo twig_escape_filter($this->env, ($context["sessiondate"] ?? null), "html", null, true);
            echo "
                                                                ";
        } else {
            // line 63
            echo "                                                                    Selected month
                                                                ";
        }
        // line 65
        echo "                                                            </option>
                                                            <option  value=\"01\">Janvier</option>
                                                            <option  value=\"02\">Février</option>
                                                            <option  value=\"03\">Mars</option>
                                                            <option  value=\"04\">Avril</option>
                                                            <option  value=\"05\">Mai</option>
                                                            <option  value=\"06\">Juin</option>
                                                            <option  value=\"07\">Juillet</option>
                                                            <option  value=\"08\">Août</option>
                                                            <option  value=\"09\">Septembre</option>
                                                            <option  value=\"10\">Octobre</option>
                                                            <option  value=\"11\">Novembre</option>
                                                            <option  value=\"12\">Décembre</option-->
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type=\"hidden\" id=\"Date_Finday\" name=\"Date_Finday\" value=\"31\">
                                                <input type=\"hidden\" id=\"Date_Finmonth\" name=\"Date_Finmonth\" value=\"01\">
                                                <input type=\"hidden\" id=\"Date_Finyear\" name=\"Date_Finyear\" value=\"2020\">
                                                <input type=\"hidden\" id=\"Date_Finhour\" name=\"Date_Finhour\" value=\"00\">
                                                <input type=\"hidden\" id=\"Date_Finmin\" name=\"Date_Finmin\" value=\"00\">
                                                <div class=\"p-2\" style=\"padding-left: 50px\">
                                                    <button class=\"dpInvisibleButtons datenowlink\" id=\"Date_FinButtonNow\" type=\"button\" name=\"_useless\" value=\"now\" onClick=\"jQuery('#Date_Fin').val('14/01/2020');jQuery('#Date_Finday').val('14');jQuery('#Date_Finmonth').val('01');jQuery('#Date_Finyear').val('2020');\">Maintenant</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 feuille\">
                                            <div class=\"form-group\">
                                                <label for=\"Date_Debut\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                                                    <h4 class=\"Date_Debut\">Choisir l'année</h4>
                                                </label>
                                                <div class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12\">
                                                    <div class=\"input-group\" id=\"Date_start\">
                                                        <select class=\"select_year\" name = \"year\">
                                                            <option  value=\"\">
                                                                ";
        // line 100
        if (((isset($context["sessionYear"]) || array_key_exists("sessionYear", $context)) &&  !(null === ($context["sessionYear"] ?? null)))) {
            // line 101
            echo "                                                                    ";
            echo twig_escape_filter($this->env, ($context["sessionYear"] ?? null), "html", null, true);
            echo "
                                                                ";
        } else {
            // line 103
            echo "                                                                    Selected year
                                                                ";
        }
        // line 105
        echo "                                                            </option>
                                                            <option  value=\"2019\">2019</option>
                                                            <option  value=\"2020\">2020</option>
                                                            <option  value=\"2021\">2021</option>
                                                            <option  value=\"2022\">2022</option>
                                                            <option  value=\"2023\">2023</option>
                                                            <option  value=\"2024\">2024</option>
                                                            <option  value=\"2025\">2025</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"p-2\" style=\"padding-left: 50px\">
                                                    <button class=\"dpInvisibleButtons datenowlink\" id=\"Date_DebutButtonNow\" type=\"button\" name=\"_useless\" value=\"now\" onClick=\"jQuery('#Date_Debut').val('14/01/2020');jQuery('#Date_Debutday').val('14');jQuery('#Date_Debutmonth').val('01');jQuery('#Date_Debutyear').val('2020');\">Maintenant</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Date de arrivee -->
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                                        <div class=\"info-box\">
                                            <span class=\"info-box-icon bg-info\"><i class=\"far fa-clock\"></i></span>
                                            <div class=\"info-box-content\">
                                                <span class=\"info-box-text\">Heures normales</span>
                                                <span class=\"info-box-number\">";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureNormal(($context["heureTotal"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                                        <div class=\"info-box\">
                                            <span class=\"info-box-icon bg-info\"><i class=\"far fa-clock\"></i></span>
                                            <div class=\"info-box-content\">
                                                <span class=\"info-box-text\">Heures effectu&eacute;es</span>
                                                <span class=\"info-box-number\">
                                                    ";
        // line 143
        if ((isset($context["sommeTotalMinute"]) || array_key_exists("sommeTotalMinute", $context))) {
            // line 144
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(((($context["sommeTotalMinute"] ?? null) - ($context["totalSupli"] ?? null)) + ($context["hourholyday"] ?? null))), "html", null, true);
            echo "
                                                    ";
        }
        // line 146
        echo "                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                                        <div class=\"info-box\">
                                            <span class=\"info-box-icon bg-info\"><i class=\"far fa-clock\"></i></span>
                                            <div class=\"info-box-content\">
                                                <span class=\"info-box-text\">Heures supl&eacute;mentaires</span>
                                                <span class=\"info-box-number\">
                                                    ";
        // line 158
        if ((isset($context["totalSupli"]) || array_key_exists("totalSupli", $context))) {
            // line 159
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes((($context["totalSupli"] ?? null) + ($context["hourholyday"] ?? null))), "html", null, true);
            echo "
                                                    ";
        }
        // line 161
        echo "                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                                        <div class=\"info-box\">
                                            <span class=\"info-box-icon bg-danger\"><i class=\"fas fa-user-clock\"></i></span>
                                            <div class=\"info-box-content\">
                                                <span class=\"info-box-text\">Nombre de retards</span>
                                                <span class=\"info-box-number\">
                                                    ";
        // line 175
        if (((isset($context["nbdelayMorn"]) || array_key_exists("nbdelayMorn", $context)) && (null === ($context["nbdelayAft"] ?? null)))) {
            // line 176
            echo "                                                        ";
            echo twig_escape_filter($this->env, ($context["nbDelay"] ?? null), "html", null, true);
            echo "
                                                    ";
        } elseif ((        // line 177
(isset($context["nbdelayMorn"]) || array_key_exists("nbdelayMorn", $context)) && (isset($context["nbdelayAft"]) || array_key_exists("nbdelayAft", $context)))) {
            // line 178
            echo "                                                        ";
            echo twig_escape_filter($this->env, (($context["nbdelayMorn"] ?? null) + ($context["nbdelayAft"] ?? null)), "html", null, true);
            echo "
                                                    ";
        } elseif ((        // line 179
(isset($context["nddelayAft"]) || array_key_exists("nddelayAft", $context)) && (null === ($context["nbdelayMorn"] ?? null)))) {
            // line 180
            echo "                                                        ";
            echo twig_escape_filter($this->env, ($context["nbdelayAft"] ?? null), "html", null, true);
            echo "
                                                    ";
        }
        // line 182
        echo "                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                                        <div class=\"info-box\">
                                            <span class=\"info-box-icon\" style=\"background:#d35400;color:#fff;\"><i class=\"fas fa-user-times\"></i></span>
                                            <div class=\"info-box-content\">
                                                <span class=\"info-box-text\">Nombre d&#039;absences</span>
                                                <span class=\"info-box-number\" >
                                                    ";
        // line 194
        if ((isset($context["absent"]) || array_key_exists("absent", $context))) {
            // line 195
            echo "                                                        ";
            echo twig_escape_filter($this->env, ($context["absent"] ?? null), "html", null, true);
            echo "
                                                    ";
        }
        // line 197
        echo "                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4\">
                                        <div class=\"info-box\">
                                            <span class=\"info-box-icon bg-success\"><i class=\"fas fa-user-cog\"></i></span>
                                            <div class=\"info-box-content\">
                                                <span class=\"info-box-text\">Nombre de cong&eacute;s</span>
                                                <span class=\"info-box-number\">
                                                    ";
        // line 209
        if ((isset($context["conge"]) || array_key_exists("conge", $context))) {
            // line 210
            echo "                                                        ";
            echo twig_escape_filter($this->env, ($context["conge"] ?? null), "html", null, true);
            echo "
                                                    ";
        }
        // line 212
        echo "                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                </div>

                                <div class=\"\">
                                    <div class=\"col-lg-6 col-xl-6 col-md-6 col-sm-6 col-xs-6 mt-2 mb-4\">
                                        <button class=\"btn btn-secondary btn-sm\" style=\"cursor: pointer;\"><span></span>
                                            <i class=\"material-icons\" style=\"vertical-align:bottom\">search</i> Rechercher </button>
                                        <a type=\"button\" class=\"btn  btn-secondary btn-sm ml-3\" href=\"\" style=\"color:white;\" id=\"clearInput\" title=\"Supprimer filtre\">
                                            <i class=\"material-icons\" style=\"vertical-align:bottom\">zoom_out</i>
                                        </a>
                                    </div>
                                </div>
                                <div id=\"listeEntrepot\">
                                    <table id=\"example2\" class=\"table table-responsive-md table-condensed datatable\" role=\"grid\" aria-describedby=\"example2_info\">
                                        <thead>
                                            <tr class=\"liste_titre\">
                                                <th></th>
                                                <th class=\"liste_titre\"><a href=\"\">Fielddate</a></th>
                                                <th class=\"liste_titre\"><a href=\"\">Du</a></th>
                                                <th class=\"liste_titre\"><a href=\"\">A</a></th>
                                                <th class=\"liste_titre\"><a href=\"\">Nom Employ&eacute;</a></th>
                                                <th class=\"liste_titre\"><a href=\"\">Heures Effectu&eacute;es</a></th>
                                                <th class=\"liste_titre\"><a href=\"\">Fieldetat</a></th>
                                                <th class=\"liste_titre\">Fielddescription</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 244
        if (((isset($context["intervalDate"]) || array_key_exists("intervalDate", $context)) &&  !(isset($context["listOfTemp"]) || array_key_exists("listOfTemp", $context)))) {
            // line 245
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["intervalDate"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["intervaldate"]) {
                // line 246
                echo "                                                    <tr>
                                                        ";
                // line 247
                if (((twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_description", [], "any", false, false, false, 247) == "Retard aprem") || (twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_description", [], "any", false, false, false, 247) == "Retard matin"))) {
                    // line 248
                    echo "                                                            <td class=\"text-danger\" style=\"font-size:19px;\"><i class=\"fas fa-user-clock\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 249
$context["intervaldate"], "ft_description", [], "any", false, false, false, 249) == null)) {
                    // line 250
                    echo "                                                            <td style=\"font-size:19px;\"><i class=\"fas fa-user\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 251
$context["intervaldate"], "ft_description", [], "any", false, false, false, 251) == "Absent")) {
                    // line 252
                    echo "                                                            <td style=\"font-size:19px;color:#d35400;\"><i class=\"fas fa-user-times\"></i></td> 
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 253
$context["intervaldate"], "ft_description", [], "any", false, false, false, 253) == "Jour Ferié ou week end")) {
                    // line 254
                    echo "                                                            <td class=\"text-primary\" style=\"font-size:19px;\"><i class=\"fas fa-user-lock\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 255
$context["intervaldate"], "ft_description", [], "any", false, false, false, 255) == "Congé")) {
                    // line 256
                    echo "                                                            <td class=\"text-success\" style=\"font-size:19px;\"><i class=\"fas fa-user-cog\"></i></td>
                                                        ";
                } else {
                    // line 258
                    echo "                                                            <td class=\"text-dark\" style=\"font-size:19px;\"><i class=\"fas fa-user-check\"></i></td>
                                                        ";
                }
                // line 260
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_date", [], "any", false, false, false, 260), "d/m/Y"), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 261
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_pointageArrivee", [], "any", false, false, false, 261))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_pointageArrivee", [], "any", false, false, false, 261), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_pointageArrivee", [], "any", false, false, false, 261))), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 263
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_pointageDepart", [], "any", false, false, false, 263))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_pointageDepart", [], "any", false, false, false, 263), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_pointageDepart", [], "any", false, false, false, 263))), "html", null, true);
                echo "
                                                        </td>
                                                        <td>";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervaldate"], "em_prenom", [], "any", false, false, false, 265), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 266
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_totalMinute", [], "any", false, false, false, 266)), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 268
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_etat", [], "any", false, false, false, 268));
                foreach ($context['_seq'] as $context["_key"] => $context["etat_value"]) {
                    // line 269
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $context["etat_value"], "html", null, true);
                    echo "
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 271
                echo "                                                        </td>
                                                        <td>";
                // line 272
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervaldate"], "ft_description", [], "any", false, false, false, 272), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervaldate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "
                                            ";
        }
        // line 277
        echo "
                                            ";
        // line 278
        if ((isset($context["listOfTemp"]) || array_key_exists("listOfTemp", $context))) {
            // line 279
            echo "
                                                ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listOfTemp"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 281
                echo "                                                    
                                                    <tr>
                                                        ";
                // line 283
                if (((twig_get_attribute($this->env, $this->source, $context["list"], "ft_description", [], "any", false, false, false, 283) == "Retard aprem") || (twig_get_attribute($this->env, $this->source, $context["list"], "ft_description", [], "any", false, false, false, 283) == "Retard matin"))) {
                    // line 284
                    echo "                                                            <td class=\"text-danger\" style=\"font-size:19px;\"><i class=\"fas fa-user-clock\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 285
$context["list"], "ft_description", [], "any", false, false, false, 285) == null)) {
                    // line 286
                    echo "                                                            <td style=\"font-size:19px;\"><i class=\"fas fa-user\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 287
$context["list"], "ft_description", [], "any", false, false, false, 287) == "Absent")) {
                    // line 288
                    echo "                                                            <td style=\"font-size:19px;color:#d35400;\"><i class=\"fas fa-user-times\"></i></td> 
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 289
$context["list"], "ft_description", [], "any", false, false, false, 289) == "Jour Ferié ou week end")) {
                    // line 290
                    echo "                                                            <td class=\"text-primary\" style=\"font-size:19px;\"><i class=\"fas fa-user-lock\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 291
$context["list"], "ft_description", [], "any", false, false, false, 291) == "Congé")) {
                    // line 292
                    echo "                                                            <td class=\"text-success\" style=\"font-size:19px;\"><i class=\"fas fa-user-cog\"></i></td>
                                                        ";
                } else {
                    // line 294
                    echo "                                                            <td class=\"text-dark\" style=\"font-size:19px;\"><i class=\"fas fa-user-check\"></i></td>
                                                        ";
                }
                // line 296
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "ft_date", [], "any", false, false, false, 296), "d/m/Y"), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 298
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["list"], "ft_pointageArrivee", [], "any", false, false, false, 298))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "ft_pointageArrivee", [], "any", false, false, false, 298), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["list"], "ft_pointageArrivee", [], "any", false, false, false, 298))), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            ";
                // line 301
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["list"], "ft_pointageDepart", [], "any", false, false, false, 301))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "ft_pointageDepart", [], "any", false, false, false, 301), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["list"], "ft_pointageDepart", [], "any", false, false, false, 301))), "html", null, true);
                echo "
                                                        </td>
                                                        <td>";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "em_prenom", [], "any", false, false, false, 303), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 304
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(twig_get_attribute($this->env, $this->source, $context["list"], "ft_totalMinute", [], "any", false, false, false, 304)), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["list"], "ft_etat", [], "any", false, false, false, 306));
                foreach ($context['_seq'] as $context["_key"] => $context["etat_value"]) {
                    // line 307
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $context["etat_value"], "html", null, true);
                    echo "
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 309
                echo "                                                        </td>
                                                        <td>";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "ft_description", [], "any", false, false, false, 310), "html", null, true);
                echo "</td>
                                                    </tr>

                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "                                            ";
        }
        // line 315
        echo "
                                            ";
        // line 316
        if ((isset($context["listTemp"]) || array_key_exists("listTemp", $context))) {
            // line 317
            echo "                                               
                                               ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listTemp"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["listtemp"]) {
                // line 319
                echo "                                                    
                                                    <tr>
                                                        ";
                // line 321
                if (((twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_description", [], "any", false, false, false, 321) == "Retard aprem") || (twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_description", [], "any", false, false, false, 321) == "Retard matin"))) {
                    // line 322
                    echo "                                                            <td class=\"text-danger\" style=\"font-size:19px;\"><i class=\"fas fa-user-clock\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 323
$context["listtemp"], "ft_description", [], "any", false, false, false, 323) == null)) {
                    // line 324
                    echo "                                                            <td style=\"font-size:19px;\"><i class=\"fas fa-user\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 325
$context["listtemp"], "ft_description", [], "any", false, false, false, 325) == "Absent")) {
                    // line 326
                    echo "                                                            <td style=\"font-size:19px;color:#d35400;\"><i class=\"fas fa-user-times\"></i></td> 
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 327
$context["listtemp"], "ft_description", [], "any", false, false, false, 327) == "Jour Ferié ou week end")) {
                    // line 328
                    echo "                                                            <td class=\"text-primary\" style=\"font-size:19px;\"><i class=\"fas fa-user-lock\"></i></td>
                                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 329
$context["listtemp"], "ft_description", [], "any", false, false, false, 329) == "Congé")) {
                    // line 330
                    echo "                                                            <td class=\"text-success\" style=\"font-size:19px;\"><i class=\"fas fa-user-cog\"></i></td>
                                                        ";
                } else {
                    // line 332
                    echo "                                                            <td class=\"text-dark\" style=\"font-size:19px;\"><i class=\"fas fa-user-check\"></i></td>
                                                        ";
                }
                // line 334
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_date", [], "any", false, false, false, 334), "d/m/Y"), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 336
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_pointageArrivee", [], "any", false, false, false, 336))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_pointageArrivee", [], "any", false, false, false, 336), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_pointageArrivee", [], "any", false, false, false, 336))), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            ";
                // line 339
                echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_pointageDepart", [], "any", false, false, false, 339))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_pointageDepart", [], "any", false, false, false, 339), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_pointageDepart", [], "any", false, false, false, 339))), "html", null, true);
                echo "
                                                        </td>
                                                        <td>";
                // line 341
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listtemp"], "em_prenom", [], "any", false, false, false, 341), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 342
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_totalMinute", [], "any", false, false, false, 342)), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 344
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_etat", [], "any", false, false, false, 344));
                foreach ($context['_seq'] as $context["_key"] => $context["etat_value"]) {
                    // line 345
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $context["etat_value"], "html", null, true);
                    echo "
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "                                                        </td>
                                                        <td>";
                // line 348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["listtemp"], "ft_description", [], "any", false, false, false, 348), "html", null, true);
                echo "</td>
                                                    </tr>

                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listtemp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "                                            
                                            ";
        }
        // line 354
        echo "                                                    <input type=\"hidden\" id=\"RetardHide\" value=2/>
                                                    <input type=\"hidden\" id=\"AbsentHide\" value=9/>
                                                    <input type=\"hidden\" id=\"CongeHide\" value=0/>
                                                    <script>
                                                        var Retard = parseInt(\$(\"input[type=hidden]#RetardHide\").val());
                                                        var Absent = parseInt(\$(\"input[type=hidden]#AbsentHide\").val());
                                                        var Conge = parseInt(\$(\"input[type=hidden]#CongeHide\").val());
                                                        \$(\"#Retard\").text(Retard);
                                                        \$(\"#Absent\").text(Absent);
                                                        \$(\"#Conge\").text(Conge);
                                                    </script>
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr class=\"bg-success text-light\" style=\"color:#f8f9fa !important;\">
                                                <td colspan=\"5\">TOTAL</td>
                                                <td class=\"nowrap\">
                                                    <input type=\"hidden\" name=\"total\" value=\"17h 18min\">
                                                    ";
        // line 373
        if ((isset($context["sommeTotalMinute"]) || array_key_exists("sommeTotalMinute", $context))) {
            // line 374
            echo "                                                        ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(($context["sommeTotalMinute"] ?? null)), "html", null, true);
            echo "
                                                    ";
        }
        // line 376
        echo "                                                    </input>
                                                </td>
                                                <td colspan=\"2\">&nbsp;</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pointage/pointage_feuilleTemps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 376,  751 => 374,  749 => 373,  728 => 354,  724 => 352,  714 => 348,  711 => 347,  702 => 345,  698 => 344,  693 => 342,  689 => 341,  684 => 339,  678 => 336,  672 => 334,  668 => 332,  664 => 330,  662 => 329,  659 => 328,  657 => 327,  654 => 326,  652 => 325,  649 => 324,  647 => 323,  644 => 322,  642 => 321,  638 => 319,  634 => 318,  631 => 317,  629 => 316,  626 => 315,  623 => 314,  613 => 310,  610 => 309,  601 => 307,  597 => 306,  592 => 304,  588 => 303,  583 => 301,  577 => 298,  571 => 296,  567 => 294,  563 => 292,  561 => 291,  558 => 290,  556 => 289,  553 => 288,  551 => 287,  548 => 286,  546 => 285,  543 => 284,  541 => 283,  537 => 281,  533 => 280,  530 => 279,  528 => 278,  525 => 277,  521 => 275,  512 => 272,  509 => 271,  500 => 269,  496 => 268,  491 => 266,  487 => 265,  482 => 263,  477 => 261,  472 => 260,  468 => 258,  464 => 256,  462 => 255,  459 => 254,  457 => 253,  454 => 252,  452 => 251,  449 => 250,  447 => 249,  444 => 248,  442 => 247,  439 => 246,  434 => 245,  432 => 244,  398 => 212,  392 => 210,  390 => 209,  376 => 197,  370 => 195,  368 => 194,  354 => 182,  348 => 180,  346 => 179,  341 => 178,  339 => 177,  334 => 176,  332 => 175,  316 => 161,  310 => 159,  308 => 158,  294 => 146,  288 => 144,  286 => 143,  271 => 131,  243 => 105,  239 => 103,  233 => 101,  231 => 100,  194 => 65,  190 => 63,  184 => 61,  182 => 60,  166 => 46,  155 => 45,  150 => 44,  144 => 41,  139 => 40,  137 => 39,  132 => 37,  127 => 36,  125 => 35,  107 => 19,  98 => 16,  95 => 15,  90 => 14,  81 => 11,  78 => 10,  74 => 9,  69 => 7,  66 => 6,  62 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pointage/pointage_feuilleTemps.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_feuilleTemps.html.twig");
    }
}
