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

/* user_origin/user_list.html.twig */
class __TwigTemplate_a054f19c61df3c42d955b89c3a94be04b674089001880543b7782b5e74dacc54 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user_origin/user_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"content-wrapper\">
  <div class=\"content-header\">
    <div class=\"container-fluid\">
      <div class=\"row mb-2\">
        <div class=\"col-sm-6\">
            <h1>Listes Des Utilisateurs</h1>
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
                        <tr>
                            <th>Rowid</th>
                            <th>Employee</th>
                            <th>Datec</th>
                            <th>Tms</th>
                            <th>Lastname</th>
                            <th>Firstname</th>
                            <th>Email</th>
                            <th>Admin</th>
                            <th>Statut</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_origins"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user_origin"]) {
            // line 42
            echo "                            <tr>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "rowid", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo ((twig_get_attribute($this->env, $this->source, $context["user_origin"], "employee", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
            echo "</td>
                                <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["user_origin"], "datec", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "datec", [], "any", false, false, false, 45), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["user_origin"], "tms", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "tms", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "lastname", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "firstname", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_origin"], "admin", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo ((twig_get_attribute($this->env, $this->source, $context["user_origin"], "statut", [], "any", false, false, false, 51)) ? ("Yes") : ("No"));
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_show", ["rowid" => twig_get_attribute($this->env, $this->source, $context["user_origin"], "rowid", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">show</a>
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_edit", ["rowid" => twig_get_attribute($this->env, $this->source, $context["user_origin"], "rowid", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
                                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_permission", ["rowid" => twig_get_attribute($this->env, $this->source, $context["user_origin"], "rowid", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-success\">voir droit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                            <tr>
                                <td colspan=\"60\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_origin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_new");
        echo "\" class=\"btn btn-success float-right\">Create new</a>
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

    public function getTemplateName()
    {
        return "user_origin/user_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  166 => 63,  157 => 59,  148 => 55,  144 => 54,  140 => 53,  135 => 51,  131 => 50,  127 => 49,  123 => 48,  119 => 47,  115 => 46,  111 => 45,  107 => 44,  103 => 43,  100 => 42,  95 => 41,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_origin/user_list.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/user_origin/user_list.html.twig");
    }
}
