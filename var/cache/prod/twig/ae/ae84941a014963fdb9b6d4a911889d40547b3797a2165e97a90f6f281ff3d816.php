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
class __TwigTemplate_de6789d1f5296ec46c9b0a23f9de887eaf3ad5b3a9a56beb7b468f1f0a8f0ced extends \Twig\Template
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
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 91), "getHost", [], "method", false, false, false, 91) == "openflex.admin")) ? ("bg-gray-dark") : ("bg-primary"));
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
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 77
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 96
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 255
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  451 => 255,  445 => 103,  439 => 96,  433 => 77,  426 => 5,  419 => 256,  417 => 255,  279 => 120,  275 => 119,  271 => 118,  255 => 104,  253 => 103,  243 => 96,  235 => 91,  227 => 86,  222 => 83,  219 => 82,  217 => 81,  212 => 78,  210 => 77,  204 => 74,  198 => 71,  189 => 65,  184 => 63,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  140 => 49,  135 => 47,  128 => 43,  122 => 40,  116 => 37,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  92 => 28,  86 => 25,  80 => 22,  76 => 21,  70 => 18,  63 => 14,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/eric/openflex/openflex/htdocs/op2/templates/base.html.twig");
    }
}
