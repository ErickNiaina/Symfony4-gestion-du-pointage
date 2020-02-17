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

/* admin/admin_index.html.twig */
class __TwigTemplate_72ecb9c9eaa96fe9b402890ba8fff9402c1feb4f55257ff58dc43d8528c602c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_index.html.twig", 1);
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

        echo "subscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content-wrapper\">            
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <div class=\"col-6\">
                                <h4 class=\"titre\">Choisissez Votre abonnement</h4></div>
                            <div class=\"col-6 text-right\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"animated fadeInLeft delay-1s content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
                                            <h1 class=\"display-4\">Choisissez Votre abonnement</h1>
                                            <p class=\"lead\">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
                                        </div>
                                        <div class=\"container\">
                                            <div class=\"card-deck mb-3 text-center\">
                                                <div class=\"card mb-4 box-shadow\">
                                                <div class=\"card-header\">
                                                    <h4 class=\"my-0 font-weight-normal\">Free</h4>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h1 class=\"\">\$0 <small class=\"text-muted\">/ mo</small></h1>
                                                    <ul class=\"list-unstyled mt-3 mb-4\">
                                                    <li>10 users included</li>
                                                    <li>2 GB of storage</li>
                                                    <li>Email support</li>
                                                    <li>Help center access</li>
                                                    </ul>
                                                    <button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</button>
                                                </div>
                                                </div>
                                                <div class=\"card mb-4 box-shadow\">
                                                <div class=\"card-header\">
                                                    <h4 class=\"my-0 font-weight-normal\">Pro</h4>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h1 class=\"\">\$15 <small class=\"text-muted\">/ mo</small></h1>
                                                    <ul class=\"list-unstyled mt-3 mb-4\">
                                                    <li>20 users included</li>
                                                    <li>10 GB of storage</li>
                                                    <li>Priority email support</li>
                                                    <li>Help center access</li>
                                                    </ul>
                                                    <button type=\"button\" class=\"btn btn-lg btn-block btn-primary\">Get started</button>
                                                </div>
                                                </div>
                                                <div class=\"card mb-4 box-shadow\">
                                                <div class=\"card-header\">
                                                    <h4 class=\"my-0 font-weight-normal\">Enterprise</h4>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h1 class=\"\">\$29 <small class=\"text-muted\">/ mo</small></h1>
                                                    <ul class=\"list-unstyled mt-3 mb-4\">
                                                    <li>30 users included</li>
                                                    <li>15 GB of storage</li>
                                                    <li>Phone and email support</li>
                                                    <li>Help center access</li>
                                                    </ul>
                                                    <button type=\"button\" class=\"btn btn-lg btn-block btn-primary\">Contact us</button>
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
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}subscription{% endblock %}
{% block body %}

<div class=\"content-wrapper\">            
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <div class=\"col-6\">
                                <h4 class=\"titre\">Choisissez Votre abonnement</h4></div>
                            <div class=\"col-6 text-right\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"animated fadeInLeft delay-1s content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
                                            <h1 class=\"display-4\">Choisissez Votre abonnement</h1>
                                            <p class=\"lead\">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
                                        </div>
                                        <div class=\"container\">
                                            <div class=\"card-deck mb-3 text-center\">
                                                <div class=\"card mb-4 box-shadow\">
                                                <div class=\"card-header\">
                                                    <h4 class=\"my-0 font-weight-normal\">Free</h4>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h1 class=\"\">\$0 <small class=\"text-muted\">/ mo</small></h1>
                                                    <ul class=\"list-unstyled mt-3 mb-4\">
                                                    <li>10 users included</li>
                                                    <li>2 GB of storage</li>
                                                    <li>Email support</li>
                                                    <li>Help center access</li>
                                                    </ul>
                                                    <button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\">Sign up for free</button>
                                                </div>
                                                </div>
                                                <div class=\"card mb-4 box-shadow\">
                                                <div class=\"card-header\">
                                                    <h4 class=\"my-0 font-weight-normal\">Pro</h4>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h1 class=\"\">\$15 <small class=\"text-muted\">/ mo</small></h1>
                                                    <ul class=\"list-unstyled mt-3 mb-4\">
                                                    <li>20 users included</li>
                                                    <li>10 GB of storage</li>
                                                    <li>Priority email support</li>
                                                    <li>Help center access</li>
                                                    </ul>
                                                    <button type=\"button\" class=\"btn btn-lg btn-block btn-primary\">Get started</button>
                                                </div>
                                                </div>
                                                <div class=\"card mb-4 box-shadow\">
                                                <div class=\"card-header\">
                                                    <h4 class=\"my-0 font-weight-normal\">Enterprise</h4>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h1 class=\"\">\$29 <small class=\"text-muted\">/ mo</small></h1>
                                                    <ul class=\"list-unstyled mt-3 mb-4\">
                                                    <li>30 users included</li>
                                                    <li>15 GB of storage</li>
                                                    <li>Phone and email support</li>
                                                    <li>Help center access</li>
                                                    </ul>
                                                    <button type=\"button\" class=\"btn btn-lg btn-block btn-primary\">Contact us</button>
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
            </div>
        </div>
{% endblock %}", "admin/admin_index.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/admin/admin_index.html.twig");
    }
}
