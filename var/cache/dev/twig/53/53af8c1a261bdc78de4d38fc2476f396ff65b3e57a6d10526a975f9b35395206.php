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
class __TwigTemplate_8f48642a4afd1e943186e01d7ff82cbbed9ab18f90e1758eb9ed21113e261846 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_origin/user_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_origin/user_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_origin/user_list.html.twig", 1);
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

        echo "Utilisateurs";
        
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
        $context['_seq'] = twig_ensure_traversable((isset($context["user_origins"]) || array_key_exists("user_origins", $context) ? $context["user_origins"] : (function () { throw new RuntimeError('Variable "user_origins" does not exist.', 41, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  199 => 64,  196 => 63,  187 => 59,  178 => 55,  174 => 54,  170 => 53,  165 => 51,  161 => 50,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  130 => 42,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateurs{% endblock %}

{% block body %}

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
                        {% for user_origin in user_origins %}
                            <tr>
                                <td>{{ user_origin.rowid }}</td>
                                <td>{{ user_origin.employee ? 'Yes' : 'No' }}</td>
                                <td>{{ user_origin.datec ? user_origin.datec|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ user_origin.tms ? user_origin.tms|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ user_origin.lastname }}</td>
                                <td>{{ user_origin.firstname }}</td>
                                <td>{{ user_origin.email }}</td>
                                <td>{{ user_origin.admin }}</td>
                                <td>{{ user_origin.statut ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a href=\"{{ path('user_origin_show', {'rowid': user_origin.rowid}) }}\" class=\"btn btn-warning\">show</a>
                                    <a href=\"{{ path('user_origin_edit', {'rowid': user_origin.rowid}) }}\" class=\"btn btn-primary\">edit</a>
                                    <a href=\"{{ path('list_permission', {'rowid': user_origin.rowid}) }}\" class=\"btn btn-success\">voir droit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"60\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    <a href=\"{{ path('user_origin_new') }}\" class=\"btn btn-success float-right\">Create new</a>
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
", "user_origin/user_list.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/user_origin/user_list.html.twig");
    }
}
