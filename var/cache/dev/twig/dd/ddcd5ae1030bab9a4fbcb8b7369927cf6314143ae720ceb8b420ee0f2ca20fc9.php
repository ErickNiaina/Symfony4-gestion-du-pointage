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

/* base.html.twig */
class __TwigTemplate_231fb249a4b47251c1d5bcf1ad0048338c7dd9491f86cd2262af7f1038364f68 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'titre_contenu' => [$this, 'block_titre_contenu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/images/favicon.png\" />

        <!-- Google Font: Open Sans + Roboto -->
        <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />
    
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/fontawesome-free/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> 
        
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/jquery-ui-timepicker-addon.css\">
        
        <!-- Select2 -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/select2/css/select2.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
        
        <!-- bootstrap 4 
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/bootstrap.min.css\">-->
        
        <!-- Tempusdominus -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
        
        <!-- Theme style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/adminlte.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/bootstrap-datepicker.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/custom.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/css/animate.css\">

        <!-- jQuery -->
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/jquery/jquery.js\"></script>
        
        <!-- popper -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/popper/popper.js\"></script>
        
        <!-- Bootstrap 4 -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/bootstrap/js/bootstrap.js\"></script>
        
        <!--<script src=\"template/dist/js/bootstrap-datepicker.min.js\"></script>-->
        <!-- daterangepicker -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/moment/moment.min.js\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
        
        <!-- DataTables -->
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/datatables/jquery.dataTables.js\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/datatables.buttons.min.js\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/buttons.flash.min.js\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/jszip.min.js\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/pdfmake.min.js\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/vfs_fonts.js\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/buttons.html5.min.js\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/buttons.print.min.js\"></script>

        <!-- Select2 -->
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/select2/js/select2.full.min.js\"></script>
        <!-- SweetAlert2 -->
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/plugins/sweetalert2/sweetalert2.min.js\"></script>   

        <!-- date picker 
        <script src=\"../template/dist/js/bootstrap-datepicker.js\"></script>-->
        
        <!-- AdminLTE App -->
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/adminlte.js\"></script>
        <!-- <script src=\"../template/dist/js/demo.js\"></script> -->

        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/custom.js\"></script> 
        

        ";
        // line 77
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 78
        echo "    </head>
    <body id=\"swup\" class=\"transition-fade hold-transition sidebar-mini\">
        <div class=\"wrapper\">
            ";
        // line 81
        $this->loadTemplate("default/navbar.html.twig", "base.html.twig", 81)->display($context);
        // line 82
        echo "            ";
        $this->loadTemplate("default/sidebar.html.twig", "base.html.twig", 82)->display($context);
        // line 83
        echo "            <div>
              <div id=\"myNav\" class=\"op-overlay\">
                <div class=\"op-overlay-content\">
                  <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("of_erh.index");
        echo "\">e-RH</a>
                </div>
              </div>
            </div>           
            <div class=\"content-wrapper\"> 
                <div class=\"content-header ";
        // line 91
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "getHost", [], "method", false, false, false, 91) == "openflex.admin")) ? ("bg-gray-dark") : ("bg-primary"));
        echo "\">
                    <div class=\"container-fluid\">
                        <div class=\"row mb-2\">
                            <div class=\"col-sm-6\">
                                <div class=\"\">
                                    <h4 class=\"titre\">";
        // line 96
        $this->displayBlock('titre_contenu', $context, $blocks);
        echo "</h4></div>
                                <div class=\"col-6 text-right\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"animated fadeInUp delay-1s content op-content\">
                    ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "                </div>
            </div>
        </div>
            <script>
                \$('#openNav').on('click', function() {
                  \$('#myNav').toggleClass(\"op-overlay-open\");
                  \$(document.body).toggleClass(\"menu-open\");
                });

                // \$('#closeNav').on('click', function() {
                //   \$('#myNav').removeClass(\"op-overlay-open\");
                // });
            </script>
            <!-- swup js -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/datepicker.js\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/datepicker.fr-FR.js\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\UtilityExtension']->getServerUrl(), "html", null, true);
        echo "/op2/public/dist/js/date.js\"></script>

    <script type=\"text/javascript\">

        function init() {
            //Initialize Select2 Elements
            \$('.select2').select2()

            //Initialize Select2 Elements
            \$('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            //Initialize Datatables Elements
            \$('#example1').DataTable( {
                \"dom\": 'lBfrtip',
                \"language\": {
                    \"lengthMenu\": \"Afficher&nbsp; _MENU_ &nbsp;enregistrements par page\",
                    \"zeroRecords\": \"Aucun enregistrements correspondants trouvés\",
                    \"info\": \"Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments\",
                    \"infoEmpty\": \"Aucun enregistrement disponible\",
                    \"search\": \"Recherche :\",
                    \"LoadingRecords\": \"Chargement...\",
                    \"Processing\":     \"Traitement...\",
                    \"paginate\": {
                      \"first\":      \"Premier\",
                      \"last\":       \"Dernier\",
                      \"next\":       \"Suivant\",
                      \"previous\":   \"Précédent\"
                    },
                    \"oAria\": {
                      \"SortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                      \"SortDescending\": \": activer pour trier la colonne par ordre décroissant\"
                    },
                    \"select\": {
                      \"rows\": {
                          \"_\": \"%d lignes sélectionnées\",
                          \"0\": \"Aucune ligne sélectionnée\",
                          \"1\": \"1 ligne sélectionnée\"
                        }
                    },
                    \"InfoFiltered\":   \"(filtré à partir de _MAX_ éléments au total)\",
                    \"sInfoPostFix\":    \"\",
                    \"sInfoThousands\":  \",\"  
                },
                \"buttons\": [
                    {
                      extend:    'copyHtml5',
                      text:      '<i class=\"far fa-copy\"></i>',
                      titleAttr: 'COPY',
                      className: 'btn btn-outline-secondary'
                    },
                    {
                        extend:    'excelHtml5',
                        text:      '<i class=\"far fa-file-excel\"></i>',
                        titleAttr: 'EXCEL',
                        className: 'btn btn-outline-secondary'
                    },
                    {
                        extend:    'csvHtml5',
                        text:      '<i class=\"far fa-file-alt\"></i>',
                        titleAttr: 'CSV',
                        className: 'btn btn-outline-secondary'
                    },
                    {
                        extend:    'pdfHtml5',
                        text:      '<i class=\"far fa-file-pdf\"></i>',
                        titleAttr: 'PDF',
                        className: 'btn btn-outline-secondary'
                    },
                    {
                      extend:    'print',
                      text:      '<i class=\"far fa-print\"></i>',
                      titleAttr: 'PRINT',
                      className: 'btn btn-outline-secondary'
                    }
                ]
            });
            \$('#example2').DataTable({
                \"paging\": false,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": false,
                \"info\": false,
                \"autoWidth\": false,
                \"dom\": 'Bfrtip',
                \"buttons\": [
                    {
                    extend:    'copyHtml5',
                    text:      '<i class=\"far fa-copy\"></i>',
                    titleAttr: 'COPY',
                    className: 'btn btn-outline-secondary'
                    },
                     {
                      extend:    'excelHtml5',
                      text:      '<i class=\"far fa-file-excel\"></i>',
                      titleAttr: 'EXCEL',
                      className: 'btn btn-outline-secondary'
                     },
                     {
                      extend:    'csvHtml5',
                      text:      '<i class=\"far fa-file-alt\"></i>',
                      titleAttr: 'CSV',
                      className: 'btn btn-outline-secondary'
                     },
                    {
                      extend:    'pdfHtml5',
                      text:      '<i class=\"far fa-file-pdf\"></i>',
                      titleAttr: 'PDF',
                      className: 'btn btn-outline-secondary'
                     },
                    {
                    extend:    'print',
                    text:      '<i class=\"far fa-print\"></i>',
                    titleAttr: 'PRINT',
                    className: 'btn btn-outline-secondary'
                    }
                ]
            }); 
            \$('[data-toggle=\"datepicker_add\"]').datepicker({
                language: 'fr-FR',
                disabled: 'false'
            });
            \$('[data-toggle=\"datepicker_start\"]').datepicker({
                language: 'fr-FR',
                disabled: 'false'
            });
            \$('[data-toggle=\"datepicker_end\"]').datepicker({
                language: 'fr-FR',
                disabled: 'false'
            });
        }
        init();

    </script>

    ";
        // line 255
        $this->displayBlock('javascripts', $context, $blocks);
        // line 256
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
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

    // line 96
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_contenu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 255,  493 => 103,  475 => 96,  457 => 77,  438 => 5,  425 => 256,  423 => 255,  285 => 120,  281 => 119,  277 => 118,  261 => 104,  259 => 103,  249 => 96,  241 => 91,  233 => 86,  228 => 83,  225 => 82,  223 => 81,  218 => 78,  216 => 77,  210 => 74,  204 => 71,  195 => 65,  190 => 63,  184 => 60,  180 => 59,  176 => 58,  172 => 57,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  146 => 49,  141 => 47,  134 => 43,  128 => 40,  122 => 37,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  98 => 28,  92 => 25,  86 => 22,  82 => 21,  76 => 18,  69 => 14,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{server_url()}}/op2/public/images/favicon.png\" />

        <!-- Google Font: Open Sans + Roboto -->
        <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />
    
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/plugins/fontawesome-free/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> 
        
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/dist/css/jquery-ui-timepicker-addon.css\">
        
        <!-- Select2 -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/plugins/select2/css/select2.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
        
        <!-- bootstrap 4 
        <link rel=\"stylesheet\" href=\"{{server_url()}}/op2/public/dist/css/bootstrap.min.css\">-->
        
        <!-- Tempusdominus -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
        
        <!-- Theme style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/dist/css/adminlte.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/dist/css/bootstrap-datepicker.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/dist/css/custom.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/op2/public/dist/css/animate.css\">

        <!-- jQuery -->
        <script src=\"{{server_url()}}/op2/public/plugins/jquery/jquery.js\"></script>
        
        <!-- popper -->
        <script src=\"{{server_url()}}/op2/public/plugins/popper/popper.js\"></script>
        
        <!-- Bootstrap 4 -->
        <script src=\"{{server_url()}}/op2/public/plugins/bootstrap/js/bootstrap.js\"></script>
        
        <!--<script src=\"template/dist/js/bootstrap-datepicker.min.js\"></script>-->
        <!-- daterangepicker -->
        <script src=\"{{server_url()}}/op2/public/plugins/moment/moment.min.js\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"{{server_url()}}/op2/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
        
        <!-- DataTables -->
        <script src=\"{{server_url()}}/op2/public/plugins/datatables/jquery.dataTables.js\"></script>
        <script src=\"{{server_url()}}/op2/public/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/datatables.buttons.min.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/buttons.flash.min.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/jszip.min.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/pdfmake.min.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/vfs_fonts.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/buttons.html5.min.js\"></script>
        <script src=\"{{server_url()}}/op2/public/dist/js/buttons.print.min.js\"></script>

        <!-- Select2 -->
        <script src=\"{{server_url()}}/op2/public/plugins/select2/js/select2.full.min.js\"></script>
        <!-- SweetAlert2 -->
        <script src=\"{{server_url()}}/op2/public/plugins/sweetalert2/sweetalert2.min.js\"></script>   

        <!-- date picker 
        <script src=\"../template/dist/js/bootstrap-datepicker.js\"></script>-->
        
        <!-- AdminLTE App -->
        <script src=\"{{server_url()}}/op2/public/dist/js/adminlte.js\"></script>
        <!-- <script src=\"../template/dist/js/demo.js\"></script> -->

        <script src=\"{{server_url()}}/op2/public/dist/js/custom.js\"></script> 
        

        {% block stylesheets %}{% endblock %}
    </head>
    <body id=\"swup\" class=\"transition-fade hold-transition sidebar-mini\">
        <div class=\"wrapper\">
            {% include 'default/navbar.html.twig' %}
            {% include 'default/sidebar.html.twig' %}
            <div>
              <div id=\"myNav\" class=\"op-overlay\">
                <div class=\"op-overlay-content\">
                  <a href=\"{{path('of_erh.index')}}\">e-RH</a>
                </div>
              </div>
            </div>           
            <div class=\"content-wrapper\"> 
                <div class=\"content-header {{ app.request.getHost() == 'openflex.admin' ? 'bg-gray-dark' : 'bg-primary' }}\">
                    <div class=\"container-fluid\">
                        <div class=\"row mb-2\">
                            <div class=\"col-sm-6\">
                                <div class=\"\">
                                    <h4 class=\"titre\">{% block titre_contenu %}{% endblock %}</h4></div>
                                <div class=\"col-6 text-right\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"animated fadeInUp delay-1s content op-content\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
            <script>
                \$('#openNav').on('click', function() {
                  \$('#myNav').toggleClass(\"op-overlay-open\");
                  \$(document.body).toggleClass(\"menu-open\");
                });

                // \$('#closeNav').on('click', function() {
                //   \$('#myNav').removeClass(\"op-overlay-open\");
                // });
            </script>
            <!-- swup js -->
    <script src=\"{{server_url()}}/op2/public/dist/js/datepicker.js\"></script>
    <script src=\"{{server_url()}}/op2/public/dist/js/datepicker.fr-FR.js\"></script>
    <script src=\"{{server_url()}}/op2/public/dist/js/date.js\"></script>

    <script type=\"text/javascript\">

        function init() {
            //Initialize Select2 Elements
            \$('.select2').select2()

            //Initialize Select2 Elements
            \$('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            //Initialize Datatables Elements
            \$('#example1').DataTable( {
                \"dom\": 'lBfrtip',
                \"language\": {
                    \"lengthMenu\": \"Afficher&nbsp; _MENU_ &nbsp;enregistrements par page\",
                    \"zeroRecords\": \"Aucun enregistrements correspondants trouvés\",
                    \"info\": \"Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments\",
                    \"infoEmpty\": \"Aucun enregistrement disponible\",
                    \"search\": \"Recherche :\",
                    \"LoadingRecords\": \"Chargement...\",
                    \"Processing\":     \"Traitement...\",
                    \"paginate\": {
                      \"first\":      \"Premier\",
                      \"last\":       \"Dernier\",
                      \"next\":       \"Suivant\",
                      \"previous\":   \"Précédent\"
                    },
                    \"oAria\": {
                      \"SortAscending\":  \": activer pour trier la colonne par ordre croissant\",
                      \"SortDescending\": \": activer pour trier la colonne par ordre décroissant\"
                    },
                    \"select\": {
                      \"rows\": {
                          \"_\": \"%d lignes sélectionnées\",
                          \"0\": \"Aucune ligne sélectionnée\",
                          \"1\": \"1 ligne sélectionnée\"
                        }
                    },
                    \"InfoFiltered\":   \"(filtré à partir de _MAX_ éléments au total)\",
                    \"sInfoPostFix\":    \"\",
                    \"sInfoThousands\":  \",\"  
                },
                \"buttons\": [
                    {
                      extend:    'copyHtml5',
                      text:      '<i class=\"far fa-copy\"></i>',
                      titleAttr: 'COPY',
                      className: 'btn btn-outline-secondary'
                    },
                    {
                        extend:    'excelHtml5',
                        text:      '<i class=\"far fa-file-excel\"></i>',
                        titleAttr: 'EXCEL',
                        className: 'btn btn-outline-secondary'
                    },
                    {
                        extend:    'csvHtml5',
                        text:      '<i class=\"far fa-file-alt\"></i>',
                        titleAttr: 'CSV',
                        className: 'btn btn-outline-secondary'
                    },
                    {
                        extend:    'pdfHtml5',
                        text:      '<i class=\"far fa-file-pdf\"></i>',
                        titleAttr: 'PDF',
                        className: 'btn btn-outline-secondary'
                    },
                    {
                      extend:    'print',
                      text:      '<i class=\"far fa-print\"></i>',
                      titleAttr: 'PRINT',
                      className: 'btn btn-outline-secondary'
                    }
                ]
            });
            \$('#example2').DataTable({
                \"paging\": false,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": false,
                \"info\": false,
                \"autoWidth\": false,
                \"dom\": 'Bfrtip',
                \"buttons\": [
                    {
                    extend:    'copyHtml5',
                    text:      '<i class=\"far fa-copy\"></i>',
                    titleAttr: 'COPY',
                    className: 'btn btn-outline-secondary'
                    },
                     {
                      extend:    'excelHtml5',
                      text:      '<i class=\"far fa-file-excel\"></i>',
                      titleAttr: 'EXCEL',
                      className: 'btn btn-outline-secondary'
                     },
                     {
                      extend:    'csvHtml5',
                      text:      '<i class=\"far fa-file-alt\"></i>',
                      titleAttr: 'CSV',
                      className: 'btn btn-outline-secondary'
                     },
                    {
                      extend:    'pdfHtml5',
                      text:      '<i class=\"far fa-file-pdf\"></i>',
                      titleAttr: 'PDF',
                      className: 'btn btn-outline-secondary'
                     },
                    {
                    extend:    'print',
                    text:      '<i class=\"far fa-print\"></i>',
                    titleAttr: 'PRINT',
                    className: 'btn btn-outline-secondary'
                    }
                ]
            }); 
            \$('[data-toggle=\"datepicker_add\"]').datepicker({
                language: 'fr-FR',
                disabled: 'false'
            });
            \$('[data-toggle=\"datepicker_start\"]').datepicker({
                language: 'fr-FR',
                disabled: 'false'
            });
            \$('[data-toggle=\"datepicker_end\"]').datepicker({
                language: 'fr-FR',
                disabled: 'false'
            });
        }
        init();

    </script>

    {% block javascripts %}{% endblock %}

    </body>
</html>
", "base.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/base.html.twig");
    }
}
