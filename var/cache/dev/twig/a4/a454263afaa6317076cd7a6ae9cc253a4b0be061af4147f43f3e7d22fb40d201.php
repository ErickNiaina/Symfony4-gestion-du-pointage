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
class __TwigTemplate_8cae7bea879c7c496970b0e010dfb58a10aaf600cffe7e34c7c94546209c9683 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  219 => 82,  167 => 35,  160 => 31,  153 => 26,  143 => 25,  125 => 21,  113 => 83,  111 => 82,  106 => 80,  102 => 79,  98 => 78,  95 => 77,  93 => 25,  88 => 22,  86 => 21,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Openflex 2.0</title>
    <link rel=\"icon\" type=\"image/png\" href=\"img/favicon.png\" />
    <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/plugins/fontawesome-free/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/plugins/daterangepicker/daterangepicker.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/plugins/select2/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/dist/css/adminlte.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />

{% block stylesheets %}{% endblock %}

</head>

 {% block body %}
 <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <div class=\"login-logo mb-4\">
                    <img src=\"{{server_url()}}/op2/public/images/openflex.png\" alt=\"logo Openflex\">
                    <p>Openflex 2.0</p>
                </div>

                <form action=\"{{ path('security_login') }}\" method=\"post\">
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

 {% endblock %}

    <script src=\"{{server_url()}}/op2/public/plugins/jquery/jquery.min.js\"></script>
    <script src=\"{{server_url()}}/op2/public/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{server_url()}}/op2/public/dist/js/adminlte.min.js\"></script>

 {% block javascripts %}{% endblock %}

</body>
</html>", "security/login.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/security/login.html.twig");
    }
}
