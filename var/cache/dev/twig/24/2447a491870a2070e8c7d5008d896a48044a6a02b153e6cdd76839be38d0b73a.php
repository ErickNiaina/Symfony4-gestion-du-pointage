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
class __TwigTemplate_2511823714f4e88e4c6242406477ca7dcf1b39cfaa9d886e2aebf72b63a26f0a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_origin/show_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_origin/show_user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_origin/show_user.html.twig", 1);
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

        echo "Un utilisateur";
        
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 29, $this->source); })()), "rowid", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Employee</th>
                                    <td>";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 33, $this->source); })()), "employee", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>FkEstablishment</th>
                                    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 37, $this->source); })()), "fkEstablishment", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Datec</th>
                                    <td>";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 41, $this->source); })()), "datec", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 41, $this->source); })()), "datec", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Tms</th>
                                    <td>";
        // line 45
        ((twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 45, $this->source); })()), "tms", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 45, $this->source); })()), "tms", [], "any", false, false, false, 45), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 49, $this->source); })()), "lastname", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 53, $this->source); })()), "firstname", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 61, $this->source); })()), "admin", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 65, $this->source); })()), "statut", [], "any", false, false, false, 65)) ? ("Yes") : ("No"));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_edit", ["rowid" => twig_get_attribute($this->env, $this->source, (isset($context["user_origin"]) || array_key_exists("user_origin", $context) ? $context["user_origin"] : (function () { throw new RuntimeError('Variable "user_origin" does not exist.', 72, $this->source); })()), "rowid", [], "any", false, false, false, 72)]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  194 => 74,  189 => 72,  184 => 70,  176 => 65,  169 => 61,  162 => 57,  155 => 53,  148 => 49,  141 => 45,  134 => 41,  127 => 37,  120 => 33,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Un utilisateur{% endblock %}

{% block body %}
<div class=\"content-wrapper\">
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
                                    <td>{{ user_origin.rowid }}</td>
                                </tr>
                                <tr>
                                    <th>Employee</th>
                                    <td>{{ user_origin.employee ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <th>FkEstablishment</th>
                                    <td>{{ user_origin.fkEstablishment }}</td>
                                </tr>
                                <tr>
                                    <th>Datec</th>
                                    <td>{{ user_origin.datec ? user_origin.datec|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Tms</th>
                                    <td>{{ user_origin.tms ? user_origin.tms|date('Y-m-d H:i:s') : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>{{ user_origin.lastname }}</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td>{{ user_origin.firstname }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ user_origin.email }}</td>
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>{{ user_origin.admin }}</td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>{{ user_origin.statut ? 'Yes' : 'No' }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <a href=\"{{ path('user_origin_index') }}\" class=\"btn btn-primary\">back to list</a>

                        <a href=\"{{ path('user_origin_edit', {'rowid': user_origin.rowid}) }}\" class=\"btn btn-success\">edit</a>

                        {{ include('user_origin/user_delete_form.html.twig') }}
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
", "user_origin/show_user.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/user_origin/show_user.html.twig");
    }
}
