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

/* user_origin/edit_user.html.twig */
class __TwigTemplate_68b00ed47f159a8d061d34f99302b912d6cfb4a065ce43c145abbc6679ddce29 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user_origin/edit_user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification d'utilisateur";
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
            <h1>Modifier Utilisateur :</h1>
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
                    
                    ";
        // line 26
        echo twig_include($this->env, $context, "user_origin/user_form.html.twig", ["button_label" => "Update"]);
        echo "

                        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_origin_index");
        echo "\" class=\"btn btn-primary\">back to list</a>

                    ";
        // line 30
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
        return "user_origin/edit_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  85 => 28,  80 => 26,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_origin/edit_user.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/user_origin/edit_user.html.twig");
    }
}
