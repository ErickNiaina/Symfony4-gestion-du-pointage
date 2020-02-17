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

/* security/login.html.twig */
class __TwigTemplate_61b1f0e33511ed07d39c0ea85cec9419ced65a8bf575b8f8e21f1429325284ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Openflex 2.0</title>
    <link rel=\"icon\" type=\"image/png\" href=\"img/favicon.png\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/fontawesome-free/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/daterangepicker/daterangepicker.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/select2/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/adminlte.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
</head>

 ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/jquery/jquery.min.js\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/adminlte.min.js\"></script>

 ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
</body>
</html>";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo " <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <div class=\"login-logo mb-4\">
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/images/openflex.png\" alt=\"logo Openflex\">
                    <p>Openflex 2.0</p>
                </div>

                <form action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Login\" required name=\"_username\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-envelope\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"input-group mb-4\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required name=\"_password\">
                        <div class=\"input-group-append\">
                            <div class=\"input-group-text\">
                                <span class=\"fas fa-lock\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"icheck-primary mb-2\">
                                <input type=\"checkbox\" id=\"remember\">
                                <label for=\"remember\">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <button type=\"submit\" class=\"btn btn-outline-primary btn-block\">Sign In</button>
                        </div>
                    </div>
                </form>
                <p class=\"mb-1 mt-3\">
                    <a href=\"#\">I forgot my password</a>
                </p>
                <p class=\"mb-0\">
                    <a href=\"#\" class=\"text-center\">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>

 ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 82,  137 => 35,  130 => 31,  123 => 26,  119 => 25,  113 => 21,  107 => 83,  105 => 82,  100 => 80,  96 => 79,  92 => 78,  89 => 77,  87 => 25,  82 => 22,  80 => 21,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/security/login.html.twig");
    }
}
