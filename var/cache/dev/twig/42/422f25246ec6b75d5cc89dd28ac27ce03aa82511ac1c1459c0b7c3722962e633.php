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

/* salary/salary_view.html.twig */
class __TwigTemplate_cb18c568ece06188bb222ab7e9aa2ed2fe58c2f43db25a60b351d952d47643c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salary/salary_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salary/salary_view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salary/salary_view.html.twig", 1);
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

        echo "Salari&eacute;";
        
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
                        <div class=\"col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                            <div class=\"col-6\">
                                <h4 class=\"titre\">Employ&eacute;</h4></div>
                            <div class=\"col-6 text-right\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"animated fadeInRight delay-1s content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                            <div class=\"card card-widget widget-user\">
                                <div class=\"widget-user-header bg-info p-3\">
                                    <h4 class=\"text-white p-3\">Identité</h4>
                                </div>
                                <div class=\"widget-user-image\">
                                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/images/man.png\" alt=\"Bootstrap\" class=\"img-fluid img-circle\">
                                </div>
                                <div class=\"card-footer\" style=\"background-color: #fff;\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Nom\" class=\"text-bold\">Nom </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Nom\" class=\"form-control\" size=\"60\" type=\"text\" name=\"nom\" value=\"\" placeholder=\"RABEARIMANANA\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Prenom\" class=\"text-bold\">Pr&eacute;nom </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Prenom\" class=\"form-control\" size=\"60\" type=\"text\" name=\"prenom\" value=\"\" placeholder=\"Lanto Nomenjanahary\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"DateDeNaissance\" class=\"text-bold\">Date de naissance </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <div class=\"input-group\" id=\"pointage\">
                                                            <input id=\"DateDeNaissance\" name=\"date\" type=\"text\" class=\"form-control\"  placeholder=\"09 Avr. 1990\" value=\"\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"LieuDeNaissance\" class=\"text-bold\">Lieu de naissance </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"LieuDeNaissance\" class=\"form-control\" size=\"60\" type=\"text\" name=\"LieuNaissance\" value=\"\" placeholder=\"Vatomandry\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Sexe\" class=\"text-bold\">Sexe </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input type=\"text\" name=\"sexe\" class=\"form-control\" placeholder=\"Masculin\" value=\"\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Nationnalite\" class=\"text-bold\">Nationnalit&eacute; </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input type=\"text\" name=\"nationnalite\" class=\"form-control\" placeholder=\"Madagascar\" value=\"\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"SituationMatrimoniale\" class=\"text-bold\">Situation matrimoniale </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input type=\"text\" name=\"SituationMatrimoniale\" class=\"form-control\" placeholder=\"Mari&eacute;\" value=\"\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"NombreDenfant\" class=\"text-bold\">Nombre d'enfant </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"NombreDenfant\" class=\"form-control\" size=\"60\" type=\"text\" name=\"NombreEnfant\" value=\"\" placeholder=\"1\" value=\"\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Identifiant\" class=\"text-bold\">Identifiant </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <p>nah <a href=\"modifier/\"><i class=\"fas fa-pencil-alt\"></i></a></p>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>                          
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                            <div class=\"card card-white\">
                                <div class=\"card-header\">
                                    <h4>Matricule</h4>
                                </div>
                              
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"CIN\" class=\"text-bold\">N° CIN </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"CIN\" class=\"form-control\" size=\"60\" type=\"text\" name=\"cin\" value=\"\" placeholder=\"101 321 142 728\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Passport\" class=\"text-bold\">N° Passport </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"Passport\" class=\"form-control\" size=\"60\" type=\"text\" name=\"passport\" value=\"\" placeholder=\"ZE0005098\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"CompteBancaire\" class=\"text-bold\">N° Compte bancaire </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"CompteBancaire\" class=\"form-control\" size=\"60\" type=\"text\" name=\"compteBancaire\" value=\"\" placeholder=\"01232020200 71\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Matricule\" class=\"text-bold\">N° Matricule </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"Matricule\" class=\"form-control\" size=\"60\" type=\"text\" name=\"matricule\" value=\"\" placeholder=\"CH-032/09\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"CNAPS\" class=\"text-bold\">N° CNAPS </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"CNAPS\" class=\"form-control\" size=\"60\" type=\"text\" name=\"cnaps\" value=\"\" placeholder=\"900409003848\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"OSTIE\" class=\"text-bold\">N° OSTIE </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"OSTIE\" class=\"form-control\" size=\"60\" type=\"text\" name=\"ostie\" value=\"\" placeholder=\"1162\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                            <div class=\"card card-white\">
                                <div class=\"card-header\">
                                    <h4>Administratif</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Departement\" class=\"text-bold\">D&eacute;partement </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input type=\"text\" class=\"form-control\" name=\"departement\" placeholder=\"ADMINISTRATION\" value=\"\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Classification\" class=\"text-bold\">Classification </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"Classification\" class=\"form-control\" size=\"60\" type=\"text\" name=\"classification\" value=\"\" placeholder=\"OS2\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"DateVisiteMedicale\" class=\"text-bold\">Date visite medicale </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <div class=\"input-group\" id=\"pointage\">
                                                    <input id=\"DateVisiteMedicale\" name=\"date\" type=\"text\" class=\"form-control\" placeholder=\"25 Sep. 2016\" value=\"\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"AttributionDeCongeMensuel\" class=\"text-bold\">Attribution de congé mensuel </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"AttributionDeCongeMensuel\" class=\"form-control\" size=\"60\" type=\"text\" name=\"congeMensuel\" value=\"\" placeholder=\"2.5\">
                                            </div>
                                        </div>                                                
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Actif\" class=\"text-bold\">Actif </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input type=\"text\" class=\"form-control\" name=\"Actif\" placeholder=\"Oui\" value=\"\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Note\" class=\"text-bold\">Note </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input type=\"text\" class=\"form-control\" name=\"note\" size=\"\" wrap=\"soft\" placeholder=\"Note\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                            <div class=\"card card-white\">
                                <div class=\"card-header\">
                                    <h4>Contact</h4>
                                </div>
                              
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"EmailProfessionnel\" class=\"text-bold\">Email professionnel </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"EmailProfessionnel\" class=\"form-control\" size=\"60\" type=\"email\" name=\"email\" value=\"\" placeholder=\"tvplusinformatique@gmail.com\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"TelProfessionnel\" class=\"text-bold\">Tél professionnel </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"TelProfessionnel\" class=\"form-control\" size=\"60\" type=\"text\" name=\"telProfessionnel\" value=\"\" placeholder=\"0320738701\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"AdressePerso\" class=\"text-bold\">Adresse perso </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <textarea id=\"AdressePerso\" class=\"form-control\" name=\"adressePerso\" size=\"\" wrap=\"soft\" rows=\"2\" placeholder=\"Lot PIAB 24 A Ambodihady Ambohimanarina\"></textarea>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                            <div class=\"card card-white\">
    
                                <div class=\"card-footer\" style=\"background-color: #fff;\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-9 col-lg-9 col-md-8 col-sm-7 col-6\">
                                            <h5>Vous voulez modifier où supprimer?</h5>
                                        </div>
                                        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5 col-6\">
                                            <input type=\"submit\" class=\"btn btn-success\" name=\"edit\" value=\"Modifier\"> &nbsp;
                                            <input type=\"submit\" class=\"btn btn-danger\" name=\"delete\" value=\"Supprimer\">
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
        return "salary/salary_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Salari&eacute;{% endblock %}

{% block body %}
<div class=\"content-wrapper\">
            <div class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                            <div class=\"col-6\">
                                <h4 class=\"titre\">Employ&eacute;</h4></div>
                            <div class=\"col-6 text-right\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"animated fadeInRight delay-1s content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                            <div class=\"card card-widget widget-user\">
                                <div class=\"widget-user-header bg-info p-3\">
                                    <h4 class=\"text-white p-3\">Identité</h4>
                                </div>
                                <div class=\"widget-user-image\">
                                    <img src=\"{{server_url()}}/op2/public/images/man.png\" alt=\"Bootstrap\" class=\"img-fluid img-circle\">
                                </div>
                                <div class=\"card-footer\" style=\"background-color: #fff;\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Nom\" class=\"text-bold\">Nom </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Nom\" class=\"form-control\" size=\"60\" type=\"text\" name=\"nom\" value=\"\" placeholder=\"RABEARIMANANA\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Prenom\" class=\"text-bold\">Pr&eacute;nom </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Prenom\" class=\"form-control\" size=\"60\" type=\"text\" name=\"prenom\" value=\"\" placeholder=\"Lanto Nomenjanahary\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"DateDeNaissance\" class=\"text-bold\">Date de naissance </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <div class=\"input-group\" id=\"pointage\">
                                                            <input id=\"DateDeNaissance\" name=\"date\" type=\"text\" class=\"form-control\"  placeholder=\"09 Avr. 1990\" value=\"\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"LieuDeNaissance\" class=\"text-bold\">Lieu de naissance </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"LieuDeNaissance\" class=\"form-control\" size=\"60\" type=\"text\" name=\"LieuNaissance\" value=\"\" placeholder=\"Vatomandry\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Sexe\" class=\"text-bold\">Sexe </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input type=\"text\" name=\"sexe\" class=\"form-control\" placeholder=\"Masculin\" value=\"\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Nationnalite\" class=\"text-bold\">Nationnalit&eacute; </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input type=\"text\" name=\"nationnalite\" class=\"form-control\" placeholder=\"Madagascar\" value=\"\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"SituationMatrimoniale\" class=\"text-bold\">Situation matrimoniale </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input type=\"text\" name=\"SituationMatrimoniale\" class=\"form-control\" placeholder=\"Mari&eacute;\" value=\"\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"NombreDenfant\" class=\"text-bold\">Nombre d'enfant </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"NombreDenfant\" class=\"form-control\" size=\"60\" type=\"text\" name=\"NombreEnfant\" value=\"\" placeholder=\"1\" value=\"\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12\">
                                            <div class=\"row\">
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Identifiant\" class=\"text-bold\">Identifiant </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <p>nah <a href=\"modifier/\"><i class=\"fas fa-pencil-alt\"></i></a></p>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>                          
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                            <div class=\"card card-white\">
                                <div class=\"card-header\">
                                    <h4>Matricule</h4>
                                </div>
                              
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"CIN\" class=\"text-bold\">N° CIN </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"CIN\" class=\"form-control\" size=\"60\" type=\"text\" name=\"cin\" value=\"\" placeholder=\"101 321 142 728\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Passport\" class=\"text-bold\">N° Passport </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"Passport\" class=\"form-control\" size=\"60\" type=\"text\" name=\"passport\" value=\"\" placeholder=\"ZE0005098\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"CompteBancaire\" class=\"text-bold\">N° Compte bancaire </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"CompteBancaire\" class=\"form-control\" size=\"60\" type=\"text\" name=\"compteBancaire\" value=\"\" placeholder=\"01232020200 71\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Matricule\" class=\"text-bold\">N° Matricule </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"Matricule\" class=\"form-control\" size=\"60\" type=\"text\" name=\"matricule\" value=\"\" placeholder=\"CH-032/09\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"CNAPS\" class=\"text-bold\">N° CNAPS </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"CNAPS\" class=\"form-control\" size=\"60\" type=\"text\" name=\"cnaps\" value=\"\" placeholder=\"900409003848\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"OSTIE\" class=\"text-bold\">N° OSTIE </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"OSTIE\" class=\"form-control\" size=\"60\" type=\"text\" name=\"ostie\" value=\"\" placeholder=\"1162\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6\">
                            <div class=\"card card-white\">
                                <div class=\"card-header\">
                                    <h4>Administratif</h4>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Departement\" class=\"text-bold\">D&eacute;partement </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input type=\"text\" class=\"form-control\" name=\"departement\" placeholder=\"ADMINISTRATION\" value=\"\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Classification\" class=\"text-bold\">Classification </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"Classification\" class=\"form-control\" size=\"60\" type=\"text\" name=\"classification\" value=\"\" placeholder=\"OS2\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"DateVisiteMedicale\" class=\"text-bold\">Date visite medicale </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <div class=\"input-group\" id=\"pointage\">
                                                    <input id=\"DateVisiteMedicale\" name=\"date\" type=\"text\" class=\"form-control\" placeholder=\"25 Sep. 2016\" value=\"\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"AttributionDeCongeMensuel\" class=\"text-bold\">Attribution de congé mensuel </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"AttributionDeCongeMensuel\" class=\"form-control\" size=\"60\" type=\"text\" name=\"congeMensuel\" value=\"\" placeholder=\"2.5\">
                                            </div>
                                        </div>                                                
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Actif\" class=\"text-bold\">Actif </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input type=\"text\" class=\"form-control\" name=\"Actif\" placeholder=\"Oui\" value=\"\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"Note\" class=\"text-bold\">Note </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input type=\"text\" class=\"form-control\" name=\"note\" size=\"\" wrap=\"soft\" placeholder=\"Note\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                            <div class=\"card card-white\">
                                <div class=\"card-header\">
                                    <h4>Contact</h4>
                                </div>
                              
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"EmailProfessionnel\" class=\"text-bold\">Email professionnel </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"EmailProfessionnel\" class=\"form-control\" size=\"60\" type=\"email\" name=\"email\" value=\"\" placeholder=\"tvplusinformatique@gmail.com\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"TelProfessionnel\" class=\"text-bold\">Tél professionnel </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <input id=\"TelProfessionnel\" class=\"form-control\" size=\"60\" type=\"text\" name=\"telProfessionnel\" value=\"\" placeholder=\"0320738701\">
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <lable for=\"AdressePerso\" class=\"text-bold\">Adresse perso </label>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                <textarea id=\"AdressePerso\" class=\"form-control\" name=\"adressePerso\" size=\"\" wrap=\"soft\" rows=\"2\" placeholder=\"Lot PIAB 24 A Ambodihady Ambohimanarina\"></textarea>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                            <div class=\"card card-white\">
    
                                <div class=\"card-footer\" style=\"background-color: #fff;\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-9 col-lg-9 col-md-8 col-sm-7 col-6\">
                                            <h5>Vous voulez modifier où supprimer?</h5>
                                        </div>
                                        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5 col-6\">
                                            <input type=\"submit\" class=\"btn btn-success\" name=\"edit\" value=\"Modifier\"> &nbsp;
                                            <input type=\"submit\" class=\"btn btn-danger\" name=\"delete\" value=\"Supprimer\">
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
", "salary/salary_view.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/salary/salary_view.html.twig");
    }
}
