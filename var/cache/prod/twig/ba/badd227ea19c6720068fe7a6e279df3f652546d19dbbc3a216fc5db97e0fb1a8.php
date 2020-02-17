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

/* user_origin/show_user.html.twig */
class __TwigTemplate_1a2fad60368cdd7f4868e421d12ae8158ae27f8d2fc9a12567d311ae2261336a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user_origin/show_user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Un utilisateur";
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
          <div class=\"col-sm-6\">
              <h1> Utilisateur</h1>
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
                    <table id=\"example1\" class=\"table table-responsive-md table-condensed\" role=\"grid\">
                      <thead>
                            <tbody>
                                <tr>
                                    <th>Rowid</th>
                                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "rowid", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Employee</th>
                                    <td>";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "employee", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>FkEstablishment</th>
                                    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "fkEstablishment", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Datec</th>
                                    <td>";
        // line 41
        ((twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "datec", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "datec", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Tms</th>
                                    <td>";
        // line 45
        ((twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "tms", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "tms", [], "any", false, false, false, 45), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "lastname", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "firstname", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "admin", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "statut", [], "any", false, false, false, 65)) ? ("Yes") : ("No"));
        echo "</td>
                                </tr>
                            </tbody>
                        </table>

                        <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_index");
        echo "\" class=\"btn btn-primary\">back to list</a>

                        <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_edit", ["rowid" => twig_get_attribute($this->env, $this->source, ($context["user_origin"] ?? null), "rowid", [], "any", false, false, false, 72)]), "html", null, true);
        echo "\" class=\"btn btn-success\">edit</a>

                        ";
        // line 74
        echo twig_include($this->env, $context, "user_origin/user_delete_form.html.twig");
        echo "
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

    public function getTemplateName()
    {
        return "user_origin/show_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 74,  159 => 72,  154 => 70,  146 => 65,  139 => 61,  132 => 57,  125 => 53,  118 => 49,  111 => 45,  104 => 41,  97 => 37,  90 => 33,  83 => 29,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_origin/show_user.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/user_origin/show_user.html.twig");
    }
}
