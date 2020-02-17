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

/* rights_def/listofpermission.html.twig */
class __TwigTemplate_7e1e88bc3ac44ffa70d7d8ee24d935434b8eb12dc2979d1b700e3d6de9f102c5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rights_def/listofpermission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rights_def/listofpermission.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rights_def/listofpermission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/public/buttonSwitch.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<div class=\"content-wrapper\">
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
              <h1>Configuration des droits</h1>
          </div>
        </div>
      </div>
    </div>
    <div class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-xl-12\">
            <div class=\"card\">
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td style=\"color: blueviolet\">Module</td>
                                <td></td>
                                <td style=\"color: blueviolet\">Droit</td>
                            </tr>
                        </thead>
                        <tbody>
                       
                        ";
        // line 42
        $context["i"] = 0;
        // line 43
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rights_defs"]) || array_key_exists("rights_defs", $context) ? $context["rights_defs"] : (function () { throw new RuntimeError('Variable "rights_defs" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 44
            echo "                            <tr>
                                <td><p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "rd_module", [], "any", false, false, false, 45), "html", null, true);
            echo "</p></td>
                                <td>
                          ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47) == 1)) {
                // line 48
                echo "
                                  ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, ($context["activatedperms"] ?? null), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 49, $this->source); })()), [], "array", true, true, false, 49)) {
                    // line 50
                    echo "                  
                                        ";
                    // line 51
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 51, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 51, $this->source); })()), [], "array", false, false, false, 51), "ur_fkId", [], "any", false, false, false, 51), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 51)])) {
                        // line 52
                        echo "                                              <div class=\"pull-left\">
                                                  <a  href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivated_permission", ["fk_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 53, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 53, $this->source); })()), [], "array", false, false, false, 53), "ur_fkId", [], "any", false, false, false, 53), "fk_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 53, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 53, $this->source); })()), [], "array", false, false, false, 53), "ur_fkUser", [], "any", false, false, false, 53)]), "html", null, true);
                        echo "\">
                                                      <span class=\"glyphicon glyphicon-minus\"></span>
                                                  </a>
                                              </div>
                                              <div class=\"pull-right\">
                                                  <b>
                                                      <span class=\"glyphicon glyphicon-ok\"></span>
                                                  </b>
                                              </div>
                                              ";
                        // line 62
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 62, $this->source); })()) + 1);
                        // line 63
                        echo "                                                  
                                              ";
                        // line 64
                        if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 64, $this->source); })()) == twig_length_filter($this->env, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 64, $this->source); })())))) {
                            // line 65
                            echo "                                                ";
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 65, $this->source); })()) - 1);
                            // line 66
                            echo "                                              ";
                        }
                        // line 67
                        echo "                                        ";
                    } else {
                        // line 68
                        echo "                                            ";
                        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 68, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 68, $this->source); })()), [], "array", false, false, false, 68), "ur_fkId", [], "any", false, false, false, 68), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 68)])) {
                            // line 69
                            echo "                                                  <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 69), "fk_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 69, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 69, $this->source); })()), [], "array", false, false, false, 69), "ur_fkUser", [], "any", false, false, false, 69)]), "html", null, true);
                            echo "\">
                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                  </a> 
                                            ";
                        }
                        // line 72
                        echo " 
                                        ";
                    }
                    // line 73
                    echo " 

                                  ";
                } else {
                    // line 76
                    echo "                                      <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 76), "fk_user" => (isset($context["sessionuser"]) || array_key_exists("sessionuser", $context) ? $context["sessionuser"] : (function () { throw new RuntimeError('Variable "sessionuser" does not exist.', 76, $this->source); })())]), "html", null, true);
                    echo "\">
                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                      </a>
                                  ";
                }
                // line 80
                echo "

                          ";
            } else {
                // line 83
                echo "                            
                          ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, ($context["activatedperms"] ?? null), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 84, $this->source); })()), [], "array", true, true, false, 84)) {
                    // line 85
                    echo "                                            
                              ";
                    // line 86
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 86, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 86, $this->source); })()), [], "array", false, false, false, 86), "ur_fkId", [], "any", false, false, false, 86), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 86)])) {
                        // line 87
                        echo "                                    <div class=\"pull-left\">
                                        <a  href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivated_permission", ["fk_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 88, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 88, $this->source); })()), [], "array", false, false, false, 88), "ur_fkId", [], "any", false, false, false, 88), "fk_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 88, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 88, $this->source); })()), [], "array", false, false, false, 88), "ur_fkUser", [], "any", false, false, false, 88)]), "html", null, true);
                        echo "\" class=\"btn  disabled\">
                                            <span class=\"glyphicon glyphicon-minus\"></span>
                                        </a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <b>
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                        </b>
                                    </div>
                                    ";
                        // line 97
                        $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 97, $this->source); })()) + 1);
                        // line 98
                        echo "                                        
                                    ";
                        // line 99
                        if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 99, $this->source); })()) == twig_length_filter($this->env, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 99, $this->source); })())))) {
                            // line 100
                            echo "                                      ";
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 100, $this->source); })()) - 1);
                            // line 101
                            echo "                                    ";
                        }
                        // line 102
                        echo "                              ";
                    } else {
                        // line 103
                        echo "                                  ";
                        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 103, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 103, $this->source); })()), [], "array", false, false, false, 103), "ur_fkId", [], "any", false, false, false, 103), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 103)])) {
                            // line 104
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 104), "fk_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activatedperms"]) || array_key_exists("activatedperms", $context) ? $context["activatedperms"] : (function () { throw new RuntimeError('Variable "activatedperms" does not exist.', 104, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 104, $this->source); })()), [], "array", false, false, false, 104), "ur_fkUser", [], "any", false, false, false, 104)]), "html", null, true);
                            echo "\" class=\"btn  disabled\">
                                          <span class=\"glyphicon glyphicon-plus\"></span>
                                        </a> 
                                  ";
                        }
                        // line 107
                        echo " 
                              ";
                    }
                    // line 108
                    echo " 

                            ";
                } else {
                    // line 111
                    echo "                              <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 111), "fk_user" => (isset($context["sessionuser"]) || array_key_exists("sessionuser", $context) ? $context["sessionuser"] : (function () { throw new RuntimeError('Variable "sessionuser" does not exist.', 111, $this->source); })())]), "html", null, true);
                    echo "\" class=\"btn  disabled\">
                                <span class=\"glyphicon glyphicon-plus\"></span>
                              </a>
                            ";
                }
                // line 115
                echo "
                          ";
            }
            // line 117
            echo "                                </td>
                                <td><p>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "rd_libelle", [], "any", false, false, false, 118), "html", null, true);
            echo "</p></td>
                            </tr>
                            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                        </tbody>
                    </table>
                  </div>
                </div>
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

    // line 137
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 138
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rights_def/listofpermission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 138,  343 => 137,  320 => 122,  310 => 118,  307 => 117,  303 => 115,  295 => 111,  290 => 108,  286 => 107,  278 => 104,  275 => 103,  272 => 102,  269 => 101,  266 => 100,  264 => 99,  261 => 98,  259 => 97,  247 => 88,  244 => 87,  242 => 86,  239 => 85,  237 => 84,  234 => 83,  229 => 80,  221 => 76,  216 => 73,  212 => 72,  204 => 69,  201 => 68,  198 => 67,  195 => 66,  192 => 65,  190 => 64,  187 => 63,  185 => 62,  173 => 53,  170 => 52,  168 => 51,  165 => 50,  163 => 49,  160 => 48,  158 => 47,  153 => 45,  150 => 44,  145 => 43,  143 => 42,  112 => 13,  102 => 12,  89 => 7,  79 => 6,  61 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block stylesheets %}
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/public/buttonSwitch.css\">
{% endblock %}

{% block body %}

<div class=\"content-wrapper\">
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
              <h1>Configuration des droits</h1>
          </div>
        </div>
      </div>
    </div>
    <div class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-xl-12\">
            <div class=\"card\">
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td style=\"color: blueviolet\">Module</td>
                                <td></td>
                                <td style=\"color: blueviolet\">Droit</td>
                            </tr>
                        </thead>
                        <tbody>
                       
                        {% set i = 0 %}
                        {% for value in rights_defs %}
                            <tr>
                                <td><p>{{value.rd_module }}</p></td>
                                <td>
                          {% if app.user.admin == 1 %}

                                  {% if activatedperms[i] is defined %}
                  
                                        {% if(activatedperms[i].ur_fkId  in [value.rd_id])%}
                                              <div class=\"pull-left\">
                                                  <a  href=\"{{ path('deactivated_permission', {'fk_id': activatedperms[i].ur_fkId,'fk_user':activatedperms[i].ur_fkUser}) }}\">
                                                      <span class=\"glyphicon glyphicon-minus\"></span>
                                                  </a>
                                              </div>
                                              <div class=\"pull-right\">
                                                  <b>
                                                      <span class=\"glyphicon glyphicon-ok\"></span>
                                                  </b>
                                              </div>
                                              {% set i = i + 1 %}
                                                  
                                              {% if i  == activatedperms|length %}
                                                {% set i = i - 1 %}
                                              {% endif %}
                                        {% else %}
                                            {% if(activatedperms[i].ur_fkId  not in [value.rd_id]) %}
                                                  <a href=\"{{ path('permission_activate', {'fk_id': value.rd_id,'fk_user':activatedperms[i].ur_fkUser}) }}\">
                                                    <span class=\"glyphicon glyphicon-plus\"></span>
                                                  </a> 
                                            {% endif %} 
                                        {% endif %} 

                                  {% else %}
                                      <a href=\"{{ path('permission_activate', {'fk_id': value.rd_id,'fk_user':sessionuser}) }}\">
                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                      </a>
                                  {% endif %}


                          {% else %}
                            
                          {% if activatedperms[i] is defined %}
                                            
                              {% if(activatedperms[i].ur_fkId  in [value.rd_id])%}
                                    <div class=\"pull-left\">
                                        <a  href=\"{{ path('deactivated_permission', {'fk_id': activatedperms[i].ur_fkId,'fk_user':activatedperms[i].ur_fkUser}) }}\" class=\"btn  disabled\">
                                            <span class=\"glyphicon glyphicon-minus\"></span>
                                        </a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <b>
                                            <span class=\"glyphicon glyphicon-ok\"></span>
                                        </b>
                                    </div>
                                    {% set i = i + 1 %}
                                        
                                    {% if i  == activatedperms|length %}
                                      {% set i = i - 1 %}
                                    {% endif %}
                              {% else %}
                                  {% if(activatedperms[i].ur_fkId  not in [value.rd_id]) %}
                                        <a href=\"{{ path('permission_activate', {'fk_id': value.rd_id,'fk_user':activatedperms[i].ur_fkUser}) }}\" class=\"btn  disabled\">
                                          <span class=\"glyphicon glyphicon-plus\"></span>
                                        </a> 
                                  {% endif %} 
                              {% endif %} 

                            {% else %}
                              <a href=\"{{ path('permission_activate', {'fk_id': value.rd_id,'fk_user':sessionuser}) }}\" class=\"btn  disabled\">
                                <span class=\"glyphicon glyphicon-plus\"></span>
                              </a>
                            {% endif %}

                          {% endif %}
                                </td>
                                <td><p>{{ value.rd_libelle }}</p></td>
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
    </div>
  </div>
  </div>
{% endblock %}

{% block javascript %}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
{% endblock %}", "rights_def/listofpermission.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/rights_def/listofpermission.html.twig");
    }
}
