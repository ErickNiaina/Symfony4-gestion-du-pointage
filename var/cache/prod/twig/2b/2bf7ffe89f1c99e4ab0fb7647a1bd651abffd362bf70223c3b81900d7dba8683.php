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
class __TwigTemplate_a2b7f4de6097609f771e402c5f29ca8f33d718a0a1d8fd0c298baac42a129f55 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "subscription";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin_index.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/admin/admin_index.html.twig");
    }
}
