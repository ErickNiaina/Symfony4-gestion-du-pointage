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

/* salary/salary_add.html.twig */
class __TwigTemplate_d40e422332f6486dbd05118792500affe16ba0aee29412e13f79257ca28f0f8b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "salary/salary_add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nouveau salarié";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"content-wrapper\">            
                <div class=\"content-header\">
                    <div class=\"container-fluid\">
                        <div class=\"row mb-2\">
                            <div class=\"col-sm-6\">
                                <div class=\"col-12\">
                                    <h4 class=\"titre\">Nouveau salari&eacute;</h4></div>
                                <div class=\"col-6 text-right\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"animated fadeInLeft delay-1s content\">
                    <div class=\"container-fluid\">
                        <form id=\"ndform\" method=\"POST\" action=\"\">
                            <div class=\"row\">
                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                                    <div class=\"card card-widget widget-user\">
                                        <div class=\"widget-user-header bg-info p-3\">
                                            <h4 class=\"text-white p-3\">Identité</h4>
                                        </div>
                                        <div class=\"widget-user-image\">
                                            <img src=\"";
        // line 28
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
                                                                <input id=\"Nom\" class=\"form-control\" size=\"60\" type=\"text\" name=\"nom\" value=\"\" placeholder=\"Nom\">
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <lable for=\"Prenom\" class=\"text-bold\">Pr&eacute;nom </label>
                                                            </div>
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <input id=\"Prenom\" class=\"form-control\" size=\"60\" type=\"text\" name=\"prenom\" value=\"\" placeholder=\"Prénom\">
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <lable for=\"DateDeNaissance\" class=\"text-bold\">Date de naissance </label>
                                                            </div>
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <div class=\"input-group\" id=\"pointage\">
                                                                    <input id=\"DateDeNaissance\" name=\"date\" type=\"text\" class=\"form-control docs-date\" autocomplete=\"off\" data-toggle=\"datepicker_add\" placeholder=\"Date de naissance\">
                                                                    <div class=\"input-group-append\">
                                                                        <div class=\"input-group-text docs-datepicker-trigger\"><i class=\"fas fa-calendar\" style=\"font-size: 18px;\"></i></div>
                                                                    </div>
                                                                    <div class=\"docs-datepicker-container\"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <lable for=\"LieuDeNaissance\" class=\"text-bold\">Lieu de naissance </label>
                                                            </div>
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <input id=\"LieuDeNaissance\" class=\"form-control\" size=\"60\" type=\"text\" name=\"LieuNaissance\" value=\"\" placeholder=\"Lieu de naissance\">
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
                                                                <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"\">
                                                                    <option value = \"0\"></option>
                                                                    <option value = \"31\">Masculin</option>
                                                                    <option value = \"20\">F&eacute;minin</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <lable for=\"Nationalite\" class=\"text-bold\">Nationalit&eacute; </label>
                                                            </div>
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"fk_employer\">
                                                                    <option value=\"0\"></option>
                                                                    <option value=\"1\">Madagascar (MG)</option>
                                                                    <option value=\"3\">Polyn&eacute;sie française (PF)</option>
                                                                    <option value=\"30\">Afghanistan (AF)</option>
                                                                    <option value=\"205\">Afrique du Sud (ZA)</option>
                                                                    <option value=\"32\">Albanie (AL)</option>
                                                                    <option value=\"13\">Algérie (DZ)</option>
                                                                    <option value=\"5\">Allemagne (DE)</option>
                                                                    <option value=\"247\">Amazonie (NB)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <lable for=\"SituationMatrimoniale\" class=\"text-bold\">Situation matrimoniale </label>
                                                            </div>
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"fk_employer\">
                                                                    <option value=\"0\"></option>
                                                                    <option value=\"1\">Mari&eacute;</option>
                                                                    <option value=\"3\">C&eacute;libataire</option>
                                                                    <option value=\"10\">Divorc&eacute;(e)</option>
                                                                    <option value=\"25\">Veuf(ve)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <lable for=\"NombreDenfant\" class=\"text-bold\">Nombre d'enfant </label>
                                                            </div>
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                                <input id=\"NombreDenfant\" class=\"form-control\" size=\"60\" type=\"text\" name=\"NombreEnfant\" value=\"\" placeholder=\"Nombre d'enfant\">
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
                                                                <input id=\"Identifiant\" class=\"form-control\" size=\"60\" type=\"text\" name=\"Identifiant\" value=\"\" placeholder=\"Identifiant\">
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">
                                                                <lable for=\"photo\" class=\"text-bold\">Photo </label>
                                                            </div> 
                                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">
                                                                <div class=\"custom-file\">          
                                                                    <input id=\"photo\" type=\"file\" name=\"my_photo\" class=\"custom-file-input\">
                                                                    <label class=\"custom-file-label\" for=\"exampleInputFile\">Votre photo</label>
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
                                                        <input id=\"CIN\" class=\"form-control\" size=\"60\" type=\"text\" name=\"cin\" value=\"\" placeholder=\"N° CIN\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Passport\" class=\"text-bold\">N° Passport </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Passport\" class=\"form-control\" size=\"60\" type=\"text\" name=\"passport\" value=\"\" placeholder=\"Passport\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"CompteBancaire\" class=\"text-bold\">N° Compte bancaire </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"CompteBancaire\" class=\"form-control\" size=\"60\" type=\"text\" name=\"compteBancaire\" value=\"\" placeholder=\"Compte bancaire\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Matricule\" class=\"text-bold\">N° Matricule </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Matricule\" class=\"form-control\" size=\"60\" type=\"text\" name=\"matricule\" value=\"\" placeholder=\"N° Matricule\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"CNAPS\" class=\"text-bold\">N° CNAPS </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"CNAPS\" class=\"form-control\" size=\"60\" type=\"text\" name=\"cnaps\" value=\"\" placeholder=\"N° CNAPS\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"OSTIE\" class=\"text-bold\">N° OSTIE </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"OSTIE\" class=\"form-control\" size=\"60\" type=\"text\" name=\"ostie\" value=\"\" placeholder=\"N° OSTIE\">
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
                                                        <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"\">
                                                            <option value = \"0\"></option>
                                                            <option value = \"31\">Adjoint</option>
                                                            <option value = \"20\">ADMINISTRATION</option>
                                                            <option value = \"22\">Chargé de clientèle</option>
                                                            <option value = \"3\">Commercial</option>
                                                            <option value = \"18\">Comptabilité</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Classification\" class=\"text-bold\">Classification </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"Classification\" class=\"form-control\" size=\"60\" type=\"text\" name=\"classification\" value=\"\" placeholder=\"Classification\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"DateVisiteMedicale\" class=\"text-bold\">Date visite medicale </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <div class=\"input-group\" id=\"pointage\">
                                                            <input id=\"DateVisiteMedicale\" name=\"date\" type=\"text\" class=\"form-control docs-date\" autocomplete=\"off\" data-toggle=\"datepicker_add\" placeholder=\"Date visite medicale\">
                                                            <div class=\"input-group-append\">
                                                                <div class=\"input-group-text docs-datepicker-trigger\"><i class=\"fas fa-calendar\" style=\"font-size: 18px;\"></i></div>
                                                            </div>
                                                            <div class=\"docs-datepicker-container\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"AttributionDeCongeMensuel\" class=\"text-bold\">Attribution de congé mensuel </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"AttributionDeCongeMensuel\" class=\"form-control\" size=\"60\" type=\"text\" name=\"congeMensuel\" value=\"\" placeholder=\"Attribution de congé mensuel\">
                                                    </div>
                                                </div>                                                
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Actif\" class=\"text-bold\">Actif </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <select class=\"form-control select2 select2-hidden-accessible\" style=\"width:100%;\" name=\"\">
                                                            <option value = \"0\"></option>
                                                            <option value = \"31\">Oui</option>
                                                            <option value = \"20\">Non</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"Note\" class=\"text-bold\">Note </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <textarea class=\"form-control\" name=\"note\" size=\"\" wrap=\"soft\" rows=\"2\" placeholder=\"Note\"></textarea>
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
                                                        <input id=\"EmailProfessionnel\" class=\"form-control\" size=\"60\" type=\"email\" name=\"email\" value=\"\" placeholder=\"Email professionnel\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"TelProfessionnel\" class=\"text-bold\">Tél professionnel </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <input id=\"TelProfessionnel\" class=\"form-control\" size=\"60\" type=\"text\" name=\"telProfessionnel\" value=\"\" placeholder=\"Tél professionnel\">
                                                    </div>
                                                </div>
                                                <div class=\"col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 p-1\">
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <lable for=\"AdressePerso\" class=\"text-bold\">Adresse perso </label>
                                                    </div>
                                                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                                                        <textarea id=\"AdressePerso\" class=\"form-control\" name=\"adressePerso\" size=\"\" wrap=\"soft\" rows=\"2\" placeholder=\"Adresse perso\"></textarea>
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
                                                    <h5>Vous voulez vraiment enregistrer ?</h5>
                                                </div>
                                                <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-5 col-6\">
                                                    <input type=\"submit\" class=\"btn btn-success\" name=\"create\" value=\"Créer\"> &nbsp;
                                                    <input type=\"submit\" class=\"btn btn-danger\" name=\"cancel\" value=\"Annuler\">
                                                </div>
                                            </div>  
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    ";
    }

    public function getTemplateName()
    {
        return "salary/salary_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "salary/salary_add.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/salary/salary_add.html.twig");
    }
}
