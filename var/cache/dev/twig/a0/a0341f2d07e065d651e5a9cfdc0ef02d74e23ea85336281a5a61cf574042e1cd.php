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
class __TwigTemplate_89f3c0e79337e3c6920a2caf5e89927b625a7247ad7b39247026da0cfd15c437 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_feuilleTemps.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_feuilleTemps.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_feuilleTemps.html.twig", 1);
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

        echo "Pointage feuille temps";
        
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

        echo "Feuille de temps";
        
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
        <form method=\"POST\" id=\"searchFormList\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generated_feuilleDeTemps");
        echo "\">
            <div class=\"container-fluid\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 14));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listTemp"]) || array_key_exists("listTemp", $context) ? $context["listTemp"] : (function () { throw new RuntimeError('Variable "listTemp" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "em_rowid", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                                                                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listTemp"]) || array_key_exists("listTemp", $context) ? $context["listTemp"] : (function () { throw new RuntimeError('Variable "listTemp" does not exist.', 37, $this->source); })()), 0, [], "array", false, false, false, 37), "em_prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "   
                                                            </option>
                                                        ";
        } elseif (        // line 39
(isset($context["sessionName"]) || array_key_exists("sessionName", $context))) {
            // line 40
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["sessionid"]) || array_key_exists("sessionid", $context) ? $context["sessionid"] : (function () { throw new RuntimeError('Variable "sessionid" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\">
                                                                    ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["sessionName"]) || array_key_exists("sessionName", $context) ? $context["sessionName"] : (function () { throw new RuntimeError('Variable "sessionName" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "   
                                                            </option>
                                                        ";
        }
        // line 44
        echo "                                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEmployer"]) || array_key_exists("listEmployer", $context) ? $context["listEmployer"] : (function () { throw new RuntimeError('Variable "listEmployer" does not exist.', 44, $this->source); })()));
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
        if (((isset($context["sessiondate"]) || array_key_exists("sessiondate", $context)) &&  !(null === (isset($context["sessiondate"]) || array_key_exists("sessiondate", $context) ? $context["sessiondate"] : (function () { throw new RuntimeError('Variable "sessiondate" does not exist.', 60, $this->source); })())))) {
            // line 61
            echo "                                                                    ";
            echo twig_escape_filter($this->env, (isset($context["sessiondate"]) || array_key_exists("sessiondate", $context) ? $context["sessiondate"] : (function () { throw new RuntimeError('Variable "sessiondate" does not exist.', 61, $this->source); })()), "html", null, true);
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
        if (((isset($context["sessionYear"]) || array_key_exists("sessionYear", $context)) &&  !(null === (isset($context["sessionYear"]) || array_key_exists("sessionYear", $context) ? $context["sessionYear"] : (function () { throw new RuntimeError('Variable "sessionYear" does not exist.', 100, $this->source); })())))) {
            // line 101
            echo "                                                                    ";
            echo twig_escape_filter($this->env, (isset($context["sessionYear"]) || array_key_exists("sessionYear", $context) ? $context["sessionYear"] : (function () { throw new RuntimeError('Variable "sessionYear" does not exist.', 101, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureNormal((isset($context["heureTotal"]) || array_key_exists("heureTotal", $context) ? $context["heureTotal"] : (function () { throw new RuntimeError('Variable "heureTotal" does not exist.', 131, $this->source); })())), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes((((isset($context["sommeTotalMinute"]) || array_key_exists("sommeTotalMinute", $context) ? $context["sommeTotalMinute"] : (function () { throw new RuntimeError('Variable "sommeTotalMinute" does not exist.', 144, $this->source); })()) - (isset($context["totalSupli"]) || array_key_exists("totalSupli", $context) ? $context["totalSupli"] : (function () { throw new RuntimeError('Variable "totalSupli" does not exist.', 144, $this->source); })())) + (isset($context["hourholyday"]) || array_key_exists("hourholyday", $context) ? $context["hourholyday"] : (function () { throw new RuntimeError('Variable "hourholyday" does not exist.', 144, $this->source); })()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes(((isset($context["totalSupli"]) || array_key_exists("totalSupli", $context) ? $context["totalSupli"] : (function () { throw new RuntimeError('Variable "totalSupli" does not exist.', 159, $this->source); })()) + (isset($context["hourholyday"]) || array_key_exists("hourholyday", $context) ? $context["hourholyday"] : (function () { throw new RuntimeError('Variable "hourholyday" does not exist.', 159, $this->source); })()))), "html", null, true);
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
        if (((isset($context["nbdelayMorn"]) || array_key_exists("nbdelayMorn", $context)) && (null === (isset($context["nbdelayAft"]) || array_key_exists("nbdelayAft", $context) ? $context["nbdelayAft"] : (function () { throw new RuntimeError('Variable "nbdelayAft" does not exist.', 175, $this->source); })())))) {
            // line 176
            echo "                                                        ";
            echo twig_escape_filter($this->env, (isset($context["nbDelay"]) || array_key_exists("nbDelay", $context) ? $context["nbDelay"] : (function () { throw new RuntimeError('Variable "nbDelay" does not exist.', 176, $this->source); })()), "html", null, true);
            echo "
                                                    ";
        } elseif ((        // line 177
(isset($context["nbdelayMorn"]) || array_key_exists("nbdelayMorn", $context)) && (isset($context["nbdelayAft"]) || array_key_exists("nbdelayAft", $context)))) {
            // line 178
            echo "                                                        ";
            echo twig_escape_filter($this->env, ((isset($context["nbdelayMorn"]) || array_key_exists("nbdelayMorn", $context) ? $context["nbdelayMorn"] : (function () { throw new RuntimeError('Variable "nbdelayMorn" does not exist.', 178, $this->source); })()) + (isset($context["nbdelayAft"]) || array_key_exists("nbdelayAft", $context) ? $context["nbdelayAft"] : (function () { throw new RuntimeError('Variable "nbdelayAft" does not exist.', 178, $this->source); })())), "html", null, true);
            echo "
                                                    ";
        } elseif ((        // line 179
(isset($context["nddelayAft"]) || array_key_exists("nddelayAft", $context)) && (null === (isset($context["nbdelayMorn"]) || array_key_exists("nbdelayMorn", $context) ? $context["nbdelayMorn"] : (function () { throw new RuntimeError('Variable "nbdelayMorn" does not exist.', 179, $this->source); })())))) {
            // line 180
            echo "                                                        ";
            echo twig_escape_filter($this->env, (isset($context["nbdelayAft"]) || array_key_exists("nbdelayAft", $context) ? $context["nbdelayAft"] : (function () { throw new RuntimeError('Variable "nbdelayAft" does not exist.', 180, $this->source); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["absent"]) || array_key_exists("absent", $context) ? $context["absent"] : (function () { throw new RuntimeError('Variable "absent" does not exist.', 195, $this->source); })()), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 210, $this->source); })()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["intervalDate"]) || array_key_exists("intervalDate", $context) ? $context["intervalDate"] : (function () { throw new RuntimeError('Variable "intervalDate" does not exist.', 245, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["listOfTemp"]) || array_key_exists("listOfTemp", $context) ? $context["listOfTemp"] : (function () { throw new RuntimeError('Variable "listOfTemp" does not exist.', 280, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["listTemp"]) || array_key_exists("listTemp", $context) ? $context["listTemp"] : (function () { throw new RuntimeError('Variable "listTemp" does not exist.', 318, $this->source); })()));
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
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->heureMinutes((isset($context["sommeTotalMinute"]) || array_key_exists("sommeTotalMinute", $context) ? $context["sommeTotalMinute"] : (function () { throw new RuntimeError('Variable "sommeTotalMinute" does not exist.', 374, $this->source); })())), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  799 => 376,  793 => 374,  791 => 373,  770 => 354,  766 => 352,  756 => 348,  753 => 347,  744 => 345,  740 => 344,  735 => 342,  731 => 341,  726 => 339,  720 => 336,  714 => 334,  710 => 332,  706 => 330,  704 => 329,  701 => 328,  699 => 327,  696 => 326,  694 => 325,  691 => 324,  689 => 323,  686 => 322,  684 => 321,  680 => 319,  676 => 318,  673 => 317,  671 => 316,  668 => 315,  665 => 314,  655 => 310,  652 => 309,  643 => 307,  639 => 306,  634 => 304,  630 => 303,  625 => 301,  619 => 298,  613 => 296,  609 => 294,  605 => 292,  603 => 291,  600 => 290,  598 => 289,  595 => 288,  593 => 287,  590 => 286,  588 => 285,  585 => 284,  583 => 283,  579 => 281,  575 => 280,  572 => 279,  570 => 278,  567 => 277,  563 => 275,  554 => 272,  551 => 271,  542 => 269,  538 => 268,  533 => 266,  529 => 265,  524 => 263,  519 => 261,  514 => 260,  510 => 258,  506 => 256,  504 => 255,  501 => 254,  499 => 253,  496 => 252,  494 => 251,  491 => 250,  489 => 249,  486 => 248,  484 => 247,  481 => 246,  476 => 245,  474 => 244,  440 => 212,  434 => 210,  432 => 209,  418 => 197,  412 => 195,  410 => 194,  396 => 182,  390 => 180,  388 => 179,  383 => 178,  381 => 177,  376 => 176,  374 => 175,  358 => 161,  352 => 159,  350 => 158,  336 => 146,  330 => 144,  328 => 143,  313 => 131,  285 => 105,  281 => 103,  275 => 101,  273 => 100,  236 => 65,  232 => 63,  226 => 61,  224 => 60,  208 => 46,  197 => 45,  192 => 44,  186 => 41,  181 => 40,  179 => 39,  174 => 37,  169 => 36,  167 => 35,  149 => 19,  140 => 16,  137 => 15,  132 => 14,  123 => 11,  120 => 10,  116 => 9,  111 => 7,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pointage feuille temps{% endblock %}
{% block titre_contenu %}Feuille de temps{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
        <form method=\"POST\" id=\"searchFormList\" action=\"{{path('generated_feuilleDeTemps')}}\">
            <div class=\"container-fluid\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('danger') %}
                    <div class=\"alert alert-danger\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
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
                                                        {% if listTemp is defined %}
                                                            <option value=\"{{listTemp[0].em_rowid}}\">
                                                                    {{listTemp[0].em_prenom}}   
                                                            </option>
                                                        {% elseif sessionName is defined %}
                                                            <option value=\"{{sessionid}}\">
                                                                    {{ sessionName }}   
                                                            </option>
                                                        {% endif %}
                                                            {% for employers in listEmployer %}
                                                                <option value=\"{{employers.getrowid()}}\">{{employers.getPrenom()}}</option>
                                                            {% endfor %}   
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
                                                                {% if sessiondate is defined and sessiondate is not null %}
                                                                    {{sessiondate}}
                                                                {% else %}
                                                                    Selected month
                                                                {% endif%}
                                                            </option>
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
                                                                {% if sessionYear is defined and sessionYear is not null %}
                                                                    {{sessionYear}}
                                                                {% else %}
                                                                    Selected year
                                                                {% endif%}
                                                            </option>
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
                                                <span class=\"info-box-number\">{{heure_normal(heureTotal)}}</span>
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
                                                    {% if sommeTotalMinute is defined %}
                                                        {{heure_minutes(sommeTotalMinute - totalSupli + hourholyday)}}
                                                    {% endif %}
                                                </span>
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
                                                    {% if totalSupli is defined%}
                                                        {{heure_minutes(totalSupli + hourholyday)}}
                                                    {% endif %}
                                                </span>
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
                                                    {% if nbdelayMorn is defined  and nbdelayAft is null %}
                                                        {{nbDelay}}
                                                    {% elseif nbdelayMorn is defined and nbdelayAft is defined %}
                                                        {{nbdelayMorn + nbdelayAft}}
                                                    {% elseif nddelayAft is defined and nbdelayMorn is null %}
                                                        {{nbdelayAft}}
                                                    {% endif %}
                                                </span>
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
                                                    {% if absent is defined %}
                                                        {{absent}}
                                                    {% endif %}
                                                </span>
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
                                                    {% if conge is defined %}
                                                        {{conge}}
                                                    {% endif %}
                                                </span>
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
                                            {% if intervalDate is defined  and listOfTemp is not defined %}
                                                {% for intervaldate in intervalDate %}
                                                    <tr>
                                                        {% if intervaldate.ft_description == \"Retard aprem\" or intervaldate.ft_description == \"Retard matin\" %}
                                                            <td class=\"text-danger\" style=\"font-size:19px;\"><i class=\"fas fa-user-clock\"></i></td>
                                                        {% elseif intervaldate.ft_description == null %}
                                                            <td style=\"font-size:19px;\"><i class=\"fas fa-user\"></i></td>
                                                        {% elseif intervaldate.ft_description == \"Absent\" %}
                                                            <td style=\"font-size:19px;color:#d35400;\"><i class=\"fas fa-user-times\"></i></td> 
                                                        {% elseif intervaldate.ft_description == \"Jour Ferié ou week end\" %}
                                                            <td class=\"text-primary\" style=\"font-size:19px;\"><i class=\"fas fa-user-lock\"></i></td>
                                                        {% elseif intervaldate.ft_description == \"Congé\" %}
                                                            <td class=\"text-success\" style=\"font-size:19px;\"><i class=\"fas fa-user-cog\"></i></td>
                                                        {% else %}
                                                            <td class=\"text-dark\" style=\"font-size:19px;\"><i class=\"fas fa-user-check\"></i></td>
                                                        {% endif %}
                                                        <td>{{intervaldate.ft_date|date(\"d/m/Y\")}}</td>
                                                        <td>{{intervaldate.ft_pointageArrivee is not null ? intervaldate.ft_pointageArrivee|date(\"d/m/Y H:i:s\") : intervaldate.ft_pointageArrivee}}</td>
                                                        <td>
                                                            {{intervaldate.ft_pointageDepart  is not null ? intervaldate.ft_pointageDepart |date(\"d/m/Y H:i:s\") : intervaldate.ft_pointageDepart }}
                                                        </td>
                                                        <td>{{intervaldate.em_prenom}}</td>
                                                        <td>{{heure_minutes(intervaldate.ft_totalMinute)}}</td>
                                                        <td>
                                                            {% for etat_value in intervaldate.ft_etat %}
                                                                {{etat_value }}
                                                            {% endfor %}
                                                        </td>
                                                        <td>{{intervaldate.ft_description}}</td>
                                                    </tr>
                                                {% endfor %}

                                            {% endif %}

                                            {% if listOfTemp is defined %}

                                                {% for list in listOfTemp %}
                                                    
                                                    <tr>
                                                        {% if list.ft_description == \"Retard aprem\" or list.ft_description == \"Retard matin\" %}
                                                            <td class=\"text-danger\" style=\"font-size:19px;\"><i class=\"fas fa-user-clock\"></i></td>
                                                        {% elseif list.ft_description == null %}
                                                            <td style=\"font-size:19px;\"><i class=\"fas fa-user\"></i></td>
                                                        {% elseif list.ft_description == \"Absent\" %}
                                                            <td style=\"font-size:19px;color:#d35400;\"><i class=\"fas fa-user-times\"></i></td> 
                                                        {% elseif list.ft_description == \"Jour Ferié ou week end\" %}
                                                            <td class=\"text-primary\" style=\"font-size:19px;\"><i class=\"fas fa-user-lock\"></i></td>
                                                        {% elseif list.ft_description == \"Congé\" %}
                                                            <td class=\"text-success\" style=\"font-size:19px;\"><i class=\"fas fa-user-cog\"></i></td>
                                                        {% else %}
                                                            <td class=\"text-dark\" style=\"font-size:19px;\"><i class=\"fas fa-user-check\"></i></td>
                                                        {% endif %}
                                                        <td>{{list.ft_date|date(\"d/m/Y\")}}</td>
                                                        <td>
                                                            {{list.ft_pointageArrivee is not null ? list.ft_pointageArrivee|date(\"d/m/Y H:i:s\") : list.ft_pointageArrivee}}
                                                        </td>
                                                        <td>
                                                            {{list.ft_pointageDepart  is not null ? list.ft_pointageDepart |date(\"d/m/Y H:i:s\") : list.ft_pointageDepart }}
                                                        </td>
                                                        <td>{{list.em_prenom}}</td>
                                                        <td>{{heure_minutes(list.ft_totalMinute)}}</td>
                                                        <td>
                                                            {% for etat_value in list.ft_etat %}
                                                                {{etat_value }}
                                                            {% endfor %}
                                                        </td>
                                                        <td>{{list.ft_description}}</td>
                                                    </tr>

                                                {% endfor %}
                                            {% endif %}

                                            {% if listTemp is defined %}
                                               
                                               {% for listtemp in listTemp %}
                                                    
                                                    <tr>
                                                        {% if listtemp.ft_description == \"Retard aprem\" or listtemp.ft_description == \"Retard matin\" %}
                                                            <td class=\"text-danger\" style=\"font-size:19px;\"><i class=\"fas fa-user-clock\"></i></td>
                                                        {% elseif listtemp.ft_description == null %}
                                                            <td style=\"font-size:19px;\"><i class=\"fas fa-user\"></i></td>
                                                        {% elseif listtemp.ft_description == \"Absent\" %}
                                                            <td style=\"font-size:19px;color:#d35400;\"><i class=\"fas fa-user-times\"></i></td> 
                                                        {% elseif listtemp.ft_description == \"Jour Ferié ou week end\" %}
                                                            <td class=\"text-primary\" style=\"font-size:19px;\"><i class=\"fas fa-user-lock\"></i></td>
                                                        {% elseif listtemp.ft_description == \"Congé\" %}
                                                            <td class=\"text-success\" style=\"font-size:19px;\"><i class=\"fas fa-user-cog\"></i></td>
                                                        {% else %}
                                                            <td class=\"text-dark\" style=\"font-size:19px;\"><i class=\"fas fa-user-check\"></i></td>
                                                        {% endif %}
                                                        <td>{{listtemp.ft_date|date(\"d/m/Y\")}}</td>
                                                        <td>
                                                            {{listtemp.ft_pointageArrivee is not null ? listtemp.ft_pointageArrivee|date(\"d/m/Y H:i:s\") : listtemp.ft_pointageArrivee}}
                                                        </td>
                                                        <td>
                                                            {{listtemp.ft_pointageDepart  is not null ? listtemp.ft_pointageDepart |date(\"d/m/Y H:i:s\") : listtemp.ft_pointageDepart }}
                                                        </td>
                                                        <td>{{listtemp.em_prenom}}</td>
                                                        <td>{{heure_minutes(listtemp.ft_totalMinute)}}</td>
                                                        <td>
                                                            {% for etat_value in listtemp.ft_etat %}
                                                                {{etat_value }}
                                                            {% endfor %}
                                                        </td>
                                                        <td>{{listtemp.ft_description}}</td>
                                                    </tr>

                                                {% endfor %}
                                            
                                            {% endif %}
                                                    <input type=\"hidden\" id=\"RetardHide\" value=2/>
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
                                                    {% if sommeTotalMinute is defined %}
                                                        {{heure_minutes(sommeTotalMinute)}}
                                                    {% endif %}
                                                    </input>
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
{% endblock %}
", "pointage/pointage_feuilleTemps.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_feuilleTemps.html.twig");
    }
}
