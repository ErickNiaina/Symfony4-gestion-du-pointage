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
class __TwigTemplate_21df3f4b538ae47b55ae950246eb02385499d7cb94c7be2bd8b26eaf96383ca2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "rights_def/listofpermission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/public/buttonSwitch.css\">
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["rights_defs"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "admin", [], "any", false, false, false, 47) == 1)) {
                // line 48
                echo "
                                  ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, ($context["activatedperms"] ?? null), ($context["i"] ?? null), [], "array", true, true, false, 49)) {
                    // line 50
                    echo "                  
                                        ";
                    // line 51
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["activatedperms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["i"] ?? null)] ?? null) : null), "ur_fkId", [], "any", false, false, false, 51), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 51)])) {
                        // line 52
                        echo "                                              <div class=\"pull-left\">
                                                  <a  href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivated_permission", ["fk_id" => twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["activatedperms"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["i"] ?? null)] ?? null) : null), "ur_fkId", [], "any", false, false, false, 53), "fk_user" => twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["activatedperms"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["i"] ?? null)] ?? null) : null), "ur_fkUser", [], "any", false, false, false, 53)]), "html", null, true);
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 63
                        echo "                                                  
                                              ";
                        // line 64
                        if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["activatedperms"] ?? null)))) {
                            // line 65
                            echo "                                                ";
                            $context["i"] = (($context["i"] ?? null) - 1);
                            // line 66
                            echo "                                              ";
                        }
                        // line 67
                        echo "                                        ";
                    } else {
                        // line 68
                        echo "                                            ";
                        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["activatedperms"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["i"] ?? null)] ?? null) : null), "ur_fkId", [], "any", false, false, false, 68), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 68)])) {
                            // line 69
                            echo "                                                  <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 69), "fk_user" => twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["activatedperms"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["i"] ?? null)] ?? null) : null), "ur_fkUser", [], "any", false, false, false, 69)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 76), "fk_user" => ($context["sessionuser"] ?? null)]), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, ($context["activatedperms"] ?? null), ($context["i"] ?? null), [], "array", true, true, false, 84)) {
                    // line 85
                    echo "                                            
                              ";
                    // line 86
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["activatedperms"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["i"] ?? null)] ?? null) : null), "ur_fkId", [], "any", false, false, false, 86), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 86)])) {
                        // line 87
                        echo "                                    <div class=\"pull-left\">
                                        <a  href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deactivated_permission", ["fk_id" => twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["activatedperms"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["i"] ?? null)] ?? null) : null), "ur_fkId", [], "any", false, false, false, 88), "fk_user" => twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["activatedperms"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["i"] ?? null)] ?? null) : null), "ur_fkUser", [], "any", false, false, false, 88)]), "html", null, true);
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
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 98
                        echo "                                        
                                    ";
                        // line 99
                        if ((($context["i"] ?? null) == twig_length_filter($this->env, ($context["activatedperms"] ?? null)))) {
                            // line 100
                            echo "                                      ";
                            $context["i"] = (($context["i"] ?? null) - 1);
                            // line 101
                            echo "                                    ";
                        }
                        // line 102
                        echo "                              ";
                    } else {
                        // line 103
                        echo "                                  ";
                        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["activatedperms"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["i"] ?? null)] ?? null) : null), "ur_fkId", [], "any", false, false, false, 103), [0 => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 103)])) {
                            // line 104
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 104), "fk_user" => twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["activatedperms"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["i"] ?? null)] ?? null) : null), "ur_fkUser", [], "any", false, false, false, 104)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("permission_activate", ["fk_id" => twig_get_attribute($this->env, $this->source, $context["value"], "rd_id", [], "any", false, false, false, 111), "fk_user" => ($context["sessionuser"] ?? null)]), "html", null, true);
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
    }

    // line 137
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
";
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
        return array (  299 => 138,  295 => 137,  278 => 122,  268 => 118,  265 => 117,  261 => 115,  253 => 111,  248 => 108,  244 => 107,  236 => 104,  233 => 103,  230 => 102,  227 => 101,  224 => 100,  222 => 99,  219 => 98,  217 => 97,  205 => 88,  202 => 87,  200 => 86,  197 => 85,  195 => 84,  192 => 83,  187 => 80,  179 => 76,  174 => 73,  170 => 72,  162 => 69,  159 => 68,  156 => 67,  153 => 66,  150 => 65,  148 => 64,  145 => 63,  143 => 62,  131 => 53,  128 => 52,  126 => 51,  123 => 50,  121 => 49,  118 => 48,  116 => 47,  111 => 45,  108 => 44,  103 => 43,  101 => 42,  70 => 13,  66 => 12,  59 => 7,  55 => 6,  49 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "rights_def/listofpermission.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/rights_def/listofpermission.html.twig");
    }
}
