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

/* pointage/pointage_configuration.html.twig */
class __TwigTemplate_88517c1e86a59dffc8a21c58fe1d87854287e487fec4f092ba3c5802b78fe314 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_configuration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointage/pointage_configuration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointage/pointage_configuration.html.twig", 1);
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

        echo "Configuration heure de pointage fixe";
        
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
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("config_heure");
        echo "\" method=\"POST\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 add-pointage\">
                                    <div class=\"card-header\">
                                        <h5 class=\"text-dark\">Matin</h5></div>
                                    <div class=\"form-group row config\">
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure d'entrée matin : &nbsp;</label>
                                            <select name=\"heureEntreeMatin\" id=\"heureEntreeMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08 selected>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minEntreeMatin\" id=\"minEntreeMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure de sortie matin : &nbsp;</label>
                                            <select name=\"heuresortieMatin\" id=\"heuresortieMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12 selected>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minsortieMatin\" id=\"minsortieMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 add-pointage\">
                                    <div class=\"card-header\">
                                        <h5 class=\"text-dark\">Après-midi</h5></div>
                                    <div class=\"form-group row config\">
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure d'entrée apres-midi : &nbsp;</label>
                                            <select name=\"heureEntreeAprem\" id=\"heureEntreeAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13 selected>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minEntreeAprem\" id=\"minEntreeAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure de sortie apres-midi : &nbsp;</label>
                                            <select name=\"heuresortieAprem\" id=\"heuresortieAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17 selected>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minsortieAprem\" id=\"minsortieAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pb-5\">
                <div class=\"text-right pr-4\">
                    <input type=\"submit\" class=\"btn btn-success btn-lg\" value=\"Enregistrer\">
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
        return "pointage/pointage_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 17,  135 => 14,  132 => 13,  127 => 12,  118 => 9,  115 => 8,  111 => 7,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pointage configuration{% endblock %}
{% block titre_contenu %}Configuration heure de pointage fixe{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
        <form action=\"{{path('config_heure')}}\" method=\"POST\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 add-pointage\">
                                    <div class=\"card-header\">
                                        <h5 class=\"text-dark\">Matin</h5></div>
                                    <div class=\"form-group row config\">
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure d'entrée matin : &nbsp;</label>
                                            <select name=\"heureEntreeMatin\" id=\"heureEntreeMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08 selected>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minEntreeMatin\" id=\"minEntreeMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure de sortie matin : &nbsp;</label>
                                            <select name=\"heuresortieMatin\" id=\"heuresortieMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12 selected>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minsortieMatin\" id=\"minsortieMatin\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-12 add-pointage\">
                                    <div class=\"card-header\">
                                        <h5 class=\"text-dark\">Après-midi</h5></div>
                                    <div class=\"form-group row config\">
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure d'entrée apres-midi : &nbsp;</label>
                                            <select name=\"heureEntreeAprem\" id=\"heureEntreeAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13 selected>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minEntreeAprem\" id=\"minEntreeAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                        <div class=\"col-12 mt-4 mb-4\">
                                            <label class=\"col-xl-4 col-lg-6 col-md-4 col-sm-5 col-xs-12\">Heure de sortie apres-midi : &nbsp;</label>
                                            <select name=\"heuresortieAprem\" id=\"heuresortieAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17 selected>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                            </select><span class=\"ml-4 mr-4 mt-2\"> : </span>
                                            <select name=\"minsortieAprem\" id=\"minsortieAprem\" class=\"form-control select2 select2-hidden-accessible\" style=\"width:20%;\">
                                                <option value=00 selected>00 </option>
                                                <option value=01>01 </option>
                                                <option value=02>02 </option>
                                                <option value=03>03 </option>
                                                <option value=04>04 </option>
                                                <option value=05>05 </option>
                                                <option value=06>06 </option>
                                                <option value=07>07 </option>
                                                <option value=08>08 </option>
                                                <option value=09>09 </option>
                                                <option value=10>10 </option>
                                                <option value=11>11 </option>
                                                <option value=12>12 </option>
                                                <option value=13>13 </option>
                                                <option value=14>14 </option>
                                                <option value=15>15 </option>
                                                <option value=16>16 </option>
                                                <option value=17>17 </option>
                                                <option value=18>18 </option>
                                                <option value=19>19 </option>
                                                <option value=20>20 </option>
                                                <option value=21>21 </option>
                                                <option value=22>22 </option>
                                                <option value=23>23 </option>
                                                <option value=24>24 </option>
                                                <option value=25>25 </option>
                                                <option value=26>26 </option>
                                                <option value=27>27 </option>
                                                <option value=28>28 </option>
                                                <option value=29>29 </option>
                                                <option value=30>30 </option>
                                                <option value=31>31 </option>
                                                <option value=32>32 </option>
                                                <option value=33>33 </option>
                                                <option value=34>34 </option>
                                                <option value=35>35 </option>
                                                <option value=36>36 </option>
                                                <option value=37>37 </option>
                                                <option value=38>38 </option>
                                                <option value=39>39 </option>
                                                <option value=40>40 </option>
                                                <option value=41>41 </option>
                                                <option value=42>42 </option>
                                                <option value=43>43 </option>
                                                <option value=44>44 </option>
                                                <option value=45>45 </option>
                                                <option value=46>46 </option>
                                                <option value=47>47 </option>
                                                <option value=48>48 </option>
                                                <option value=49>49 </option>
                                                <option value=50>50 </option>
                                                <option value=51>51 </option>
                                                <option value=52>52 </option>
                                                <option value=53>53 </option>
                                                <option value=54>54 </option>
                                                <option value=55>55 </option>
                                                <option value=56>56 </option>
                                                <option value=57>57 </option>
                                                <option value=58>58 </option>
                                                <option value=59>59 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pb-5\">
                <div class=\"text-right pr-4\">
                    <input type=\"submit\" class=\"btn btn-success btn-lg\" value=\"Enregistrer\">
                </div>
            </div>
        </form>
    </div>
{% endblock %}
", "pointage/pointage_configuration.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/pointage/pointage_configuration.html.twig");
    }
}
