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

/* salary/salary_list.html.twig */
class __TwigTemplate_2e08e67b89f25b9cdbe793642cad0a1d5166641deb8af0421101d80ed5b94c47 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "salary/salary_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Salari&eacute; liste";
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
              <div class=\"col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                  <h1 class=\"titre\">Liste salari&eacute; (11)</h1></div>
          </div>
      </div>
  </div>
  <div class=\"animated fadeInUp delay-1s content\">
      <div class=\"container-fluid\">
          <div class=\"row\">
              <div class=\"col-xl-12\">
                  <div class=\"card\">
                      <div class=\"card-body\">
                          <div id=\"toLoad\" class=\"row\">
                              <div class=\"col-12 col-sm-12 col-lg-12 col-xl-12\">
                                  <table id=\"example1\" class=\"table table-responsive-xl table-condensed datatable\" role=\"grid\" aria-describedby=\"example1_info\">
                                      <thead>
                                          <tr class=\"liste_titre\">
                                              <th class=\"liste_titre\"><a href=\"#\">Nom</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Pr&eacute;nom</a></th>
                                              <th class=\"liste_titre_sel\"><a href=\"\">Email Pro</a><span class=\"nowrap\">&nbsp;&nbsp;&nbsp;<i class=\"fas fa-angle-down\"><i></span></th>
                                              <th class=\"liste_titre\"><a href=\"\">T&eacute;l Pro</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Situation Matrimoniale</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">D&eacute;paretment </a></th>
                                              <th class=\"liste_titre\"><a href=\"/\">Date de Naisssance</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Sexe</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Adresse Perso</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Nbr Anfant</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Attribution mensuel de cong&eacute;</a></th>
                                              <th class=\"liste_titre\"><a href=\"\">Actif</a></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">Fabi</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-16 08:09:00</td>
                                              <td></td>
                                              <td>2020-01-16 17:09:00</td>
                                              <td></td>
                                              <td>09h 00min</td>
                                              <td></td>
                                              <td>2020-01-03 13:10:38</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-03 13:12:08</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">ERTEE</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-11 07:55:00</td>
                                              <td></td>
                                              <td>2020-01-11 16:55:00</td>
                                              <td></td>
                                              <td>09h 00min</td>
                                              <td></td>
                                              <td>2020-01-10 13:19:34</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-10 13:19:52</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">Fabi</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-10 08:00:00</td>
                                              <td></td>
                                              <td>2020-01-10 16:18:00</td>
                                              <td></td>
                                              <td>08h 18min</td>
                                              <td></td>
                                              <td>2020-01-10 13:17:37</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-10 13:18:21</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">ERTEE</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-10 08:00:00</td>
                                              <td></td>
                                              <td>2020-01-10 17:18:00</td>
                                              <td></td>
                                              <td>09h 18min</td>
                                              <td></td>
                                              <td>2020-01-10 13:18:45</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-10 13:18:59</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">BUMBA</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-09 09:00:00</td>
                                              <td>entree</td>
                                              <td>2020-01-09 16:24:00</td>
                                              <td>sortie</td>
                                              <td>07h 24min</td>
                                              <td></td>
                                              <td>2020-01-06 08:23:31</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-09 16:57:37</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">MALALA kely</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-07 09:16:00</td>
                                              <td></td>
                                              <td>2020-01-07 17:10:00</td>
                                              <td></td>
                                              <td>07h 54min</td>
                                              <td></td>
                                              <td>2020-01-07 09:16:21</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-07 09:16:55</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">ERTEE</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-02 07:48:00</td>
                                              <td></td>
                                              <td>2020-01-02 16:48:00</td>
                                              <td></td>
                                              <td>09h 00min</td>
                                              <td></td>
                                              <td>2020-01-02 09:04:01</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-02 15:43:33</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">BUMBA</a></td>
                                              <td>Sortie</td>
                                              <td>2020-01-01 08:49:00</td>
                                              <td></td>
                                              <td>2020-01-01 16:51:00</td>
                                              <td></td>
                                              <td>08h 02min</td>
                                              <td></td>
                                              <td>2020-01-02 15:50:08</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-02 15:51:58</td>
                                              <td><span class=\"badge badge-danger\">Non</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">ERTEE</a></td>
                                              <td>Sortie</td>
                                              <td>2019-12-31 07:55:00</td>
                                              <td></td>
                                              <td>2019-12-31 16:17:00</td>
                                              <td></td>
                                              <td>08h 22min</td>
                                              <td></td>
                                              <td>2020-01-02 08:15:50</td>
                                              <td>SuperAdmin</td>
                                              <td>2020-01-02 08:17:56</td>
                                              <td><span class=\"badge badge-danger\">Non</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">ERTEE</a></td>
                                              <td>Sortie</td>
                                              <td>2019-12-23 07:53:00</td>
                                              <td></td>
                                              <td>2019-12-23 16:57:00</td>
                                              <td></td>
                                              <td>09h 04min</td>
                                              <td></td>
                                              <td>2019-12-23 15:53:19</td>
                                              <td>SuperAdmin</td>
                                              <td>2019-12-27 10:16:34</td>
                                              <td><span class=\"badge badge-success\">Oui</span></td>
                                          </tr>
                                          <tr>
                                              <td><a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salary_view");
        echo "/\">ERTEE</a></td>
                                              <td>Sortie</td>
                                              <td>2019-12-22 09:36:00</td>
                                              <td></td>
                                              <td>2019-12-24 09:46:00</td>
                                              <td></td>
                                              <td>48h 10min</td>
                                              <td></td>
                                              <td>2019-12-23 08:36:16</td>
                                              <td>SuperAdmin</td>
                                              <td>2019-12-23 08:40:47</td>
                                              <td><span class=\"badge badge-danger\">Non</span></td>
                                          </tr>
                                      </tbody>
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
";
    }

    public function getTemplateName()
    {
        return "salary/salary_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 182,  249 => 168,  232 => 154,  215 => 140,  198 => 126,  181 => 112,  164 => 98,  147 => 84,  130 => 70,  113 => 56,  96 => 42,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "salary/salary_list.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/salary/salary_list.html.twig");
    }
}
