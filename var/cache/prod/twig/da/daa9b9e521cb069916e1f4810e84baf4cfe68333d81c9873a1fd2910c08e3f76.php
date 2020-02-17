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

/* employers/index.html.twig */
class __TwigTemplate_5e60c2bbd2e9a5c2fef163f9476019779253636c1ee875a779e21aa8cee13e2e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "employers/index.html.twig", 1);
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
            <h1>Listes des Employés</h1>
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
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Tél</th>
                            <th>Situation Matrimoniale</th>
                            <th>Sexe</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listOfEmployers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 39
            echo "                            <tr>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getRowid", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getNom", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getPrenom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getEmailProfessionnel", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getTelProfessionnel", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getSituationMatrimonial", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "getsexe", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                            <tr>
                                <td colspan=\"60\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
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
        return "employers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  132 => 49,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  97 => 39,  92 => 38,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "employers/index.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/employers/index.html.twig");
    }
}
