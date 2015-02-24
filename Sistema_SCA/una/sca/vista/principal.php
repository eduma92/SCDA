<?php
session_start();
error_reporting(0);

$varSesion = $_SESSION['usuario'];
    
if ($varSesion == null || $varSesion == '') {

    echo "Error 404, por favor hable con su administrador";
    die();
}
?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SCDA</title>
        <meta name="description" content="description">
        <meta name="author" content="DevOOPS">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
        <link href="plugins/select2/select2.css" rel="stylesheet">
        <link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
         <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->
        <!-- <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" /> -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" /> 

        <!-- <link rel="stylesheet" href="assets/css/ace.min.css" />  -->
        <link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
                        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="screensaver">
            <canvas id="canvas"></canvas>
            <i class="fa fa-lock" id="screen_unlock"></i>
        </div>
        <div id="modalbox">
            <div class="devoops-modal">
                <div class="devoops-modal-header">
                    <div class="modal-header-name">
                        <span>Basic table</span>
                    </div>
                    <div class="box-icons">
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="devoops-modal-inner">
                </div>
                <div class="devoops-modal-bottom">
                </div>
            </div>
        </div>
        <header class="navbar">
            <div class="container-fluid expanded-panel">
                <div class="row">
                    <div id="logo" class="col-xs-12 col-sm-2">
                        <a href="principal.php">Inicio</a>
                    </div>
                    <div id="top-panel" class="col-xs-12 col-sm-10">
                        <div class="row">
                            <div class="col-xs-8 col-sm-4">
                                <a href="#" class="show-sidebar">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!--
                                <div id="search">
                                        <input type="text" placeholder="search"/>
                                        <i class="fa fa-search"></i>
                                </div>
                                -->
                            </div>
                            <div class="col-xs-4 col-sm-8 top-panel-right">
                                <ul class="nav navbar-nav pull-right panel-menu">
                                    <!--
                                            <li class="hidden-xs">
                                                    <a href="index.html" class="modal-link">
                                                            <i class="fa fa-bell"></i>
                                                            <span class="badge">7</span>
                                                    </a>
                                            </li>
                                    -->
                                    <!--
                                    <li class="hidden-xs">
                                            <a class="ajax-link" href="ajax/calendar.html">
                                                    <i class="fa fa-calendar"></i>
                                                    <span class="badge">7</span>
                                            </a>
                                    </li>
                                    -->
                                    <!--
                                    <li class="hidden-xs">
                                            <a href="ajax/page_messages.html" class="ajax-link">
                                                    <i class="fa fa-envelope"></i>
                                                    <span class="badge">7</span>
                                            </a>
                                    </li>
                                    -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                            <div class="avatar">
                                                <img src="img/avatar.jpg" class="img-rounded" alt="avatar" />
                                            </div>
                                            <i class="fa fa-angle-down pull-right"></i>
                                            <div class="user-mini pull-right">
                                                <span class="welcome">Bienvenido,</span>
                                                <span>Usuario</span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="ajax/profile.html">
                                                    <i class="fa fa-user"></i>
                                                    <span>Perfil</span>
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                    <a href="ajax/page_messages.html" class="ajax-link">
                                                            <i class="fa fa-envelope"></i>
                                                            <span>Messages</span>
                                                    </a>
                                            </li>
                                            
                                            <li>
                                                    <a href="ajax/gallery_simple.html" class="ajax-link">
                                                            <i class="fa fa-picture-o"></i>
                                                            <span>Albums</span>
                                                    </a>
                                            </li>
                                            <li>
                                                    <a href="ajax/calendar.html" class="ajax-link">
                                                            <i class="fa fa-tasks"></i>
                                                            <span>Tasks</span>
                                                    </a>
                                            </li>
                                            <li>
                                            
                                                    <a href="#">
                                                            <i class="fa fa-cog"></i>
                                                            <span>Configuración</span>
                                                    </a>
                                            </li>
                                            -->
                                            <li>
                                                <a href="../modelo/cerrarSesion.php">
                                                    <i class="fa fa-power-off"></i>
                                                    <span>Salir</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Header-->
        <!--Start Container-->
        <div id="main" class="container-fluid">
            <div class="row">
                <div id="sidebar-left" class="col-xs-2 col-sm-2">
                    <ul class="nav main-menu">
                        <!--<li>
                                <a href="ajax/dashboard.html" class="active ajax-link">
                                        <i class="fa fa-dashboard"></i>
                                        <span class="hidden-xs">Dashboard</span>
                                </a>
                        </li>
                        -->
                        <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span class="hidden-xs">Charts</span>
                                </a>
                                <ul class="dropdown-menu">
                                        <li><a class="ajax-link" href="ajax/charts_xcharts.html">xCharts</a></li>
                                        <li><a class="ajax-link" href="ajax/charts_flot.html">Flot Charts</a></li>
                                        <li><a class="ajax-link" href="ajax/charts_google.html">Google Charts</a></li>
                                        <li><a class="ajax-link" href="ajax/charts_morris.html">Morris Charts</a></li>
                                        <li><a class="ajax-link" href="ajax/charts_coindesk.html">CoinDesk realtime</a></li>
                                </ul>
                        </li>
                        -->
                        ﻿<?php
                        if ($_SESSION['tipoUsuario'] == "administrador") {
                            ?>
                            <li  id="primerLink" class="dropdown">
                                <a href="#" class="dropdown-toggle">
                                        <!--<i class="fa fa-table"></i>-->
                                    <i class="fa fa-pencil-square-o"></i>
                                     <!-- <span class="hidden-xs">Tables</span> -->
                                    <span class="hidden-xs">Gestión Usuario</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!--<li><a class="ajax-link" href="ajax/tables_simple.html">Simple Tables</a></li>-->
                                    <!--<li><a class="ajax-link" href="ajax/tables_datatables.html">Data Tables</a></li>-->
                                    <!--<li><a class="ajax-link" href="ajax/tables_beauty.html">Beauty Tables</a></li>-->
                                    <li><a class="ajax-link" href="ajax/forms_usuario_agregar.php">Agregar Usuario</a></li>
                                    <li><a class="ajax-link" href="ajax/tables_usuario.php">Listar Usuarios</a></li>

                                </ul>
                            </li>
                            <?php
                        }
                        ?>

                            
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                <i class="fa fa-pencil-square-o"></i>
                                <!-- <span class="hidden-xs">Forms</span> -->
                                <span class="hidden-xs">Gestión Participante</span> 
                            </a>
                            <ul class="dropdown-menu">
                                <!--<li><a class="ajax-link" href="ajax/forms_elements.html">Elements</a></li>-->
                                <!--<li><a class="ajax-link" href="ajax/forms_layouts.html">Layouts</a></li>-->
                                <!--<li><a class="ajax-link" href="ajax/forms_file_uploader.html">File Uploader</a></li>-->
                                <li><a class="ajax-link" href="ajax/forms_participante_agregar.php">Agregar Participante</a></li>
                                <li><a class="ajax-link" href="ajax/tables_participante.php">Listar Participantes</a></li>

                            </ul>
                        </li>
                        <?php
                        if ($_SESSION['tipoUsuario'] == "administrador"||$_SESSION['tipoUsuario'] == "fisioterapeuta") {
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">
                                    <!--<i class="fa fa-desktop"></i>-->
                                <i class="fa fa-pencil-square-o"></i>
                                <!-- <span class="hidden-xs">UI Elements</span>-->
                                <span class="hidden-xs">Gestión Expediente</span>
                                </a>
                                <ul class="dropdown-menu">
                                <!--<li><a class="ajax-link" href="ajax/ui_grid.html">Grid</a></li>-->
                                <!--<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>-->
                                <!--<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>-->
                                <!--<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>-->
                                <!--<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li> -->
                                <li><a class="ajax-link" href="ajax/forms_paciente_agregar.html">Agregar Paciente</a></li>
                                <li><a class="ajax-link" href="ajax/forms_paciente_modificar.html">Modificar Expediente</a></li>
                                <li><a class="ajax-link" href="ajax/tables_paciente.html">Listar Pacientes</a></li>
                                <li><a class="ajax-link" href="ajax/calendar2.html">Registro de Citas</a></li>
                                </ul>
                            </li>
                         <?php
                        }
                        ?>
                        
                        <?php
                        if ($_SESSION['tipoUsuario'] != "fisioterapeuta") {
                            ?>    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                    <!--<i class="fa fa-list"></i>-->
                                <i class="fa fa-calendar"></i>
                                 <!--<span class="hidden-xs">Pages</span>-->
                                <span class="hidden-xs">Control Asistencia</span>						 
                            </a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="ajax/page_login.html">Login</a></li>
                                <li><a href="ajax/page_register.html">Register</a></li>
                                <li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>
                                <li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>
                                <li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>
                                <li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>
                                <li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>
                                <li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>
                                <li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>
                                <li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
                                <li><a href="ajax/page_500.html">Error 500</a></li> -->
                                <li><a class="ajax-link" href="ajax/calendar.html">Listas de Asistencia</a></li>
                                <li><a class="ajax-link" href="ajax/charts_google.html">Gráfico Asistencia Individual</a></li>
                                <li><a class="ajax-link" href="ajax/charts_google_grupal.html">Gráfico Asistencia Grupal</a></li>
                            </ul>
                        </li>
                        <?php
                        }
                        ?>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">
                                    <!--<i class="fa fa-list"></i>-->
                                <i class="fa fa-list"></i>
                                 <!--<span class="hidden-xs">Pages</span>-->
                                <span class="hidden-xs">Informe Digital</span>						 
                            </a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="ajax/page_login.html">Login</a></li>
                                <li><a href="ajax/page_register.html">Register</a></li>
                                <li><a id="locked-screen" class="submenu" href="ajax/page_locked.html">Locked Screen</a></li>
                                <li><a class="ajax-link" href="ajax/page_contacts.html">Contacts</a></li>
                                <li><a class="ajax-link" href="ajax/page_feed.html">Feed</a></li>
                                <li><a class="ajax-link add-full" href="ajax/page_messages.html">Messages</a></li>
                                <li><a class="ajax-link" href="ajax/page_pricing.html">Pricing</a></li>
                                <li><a class="ajax-link" href="ajax/page_invoice.html">Invoice</a></li>
                                <li><a class="ajax-link" href="ajax/page_search.html">Search Results</a></li>
                                <li><a class="ajax-link" href="ajax/page_404.html">Error 404</a></li>
                                <li><a href="ajax/page_500.html">Error 500</a></li> -->
                                <li><a class="ajax-link" href="ajax/forms_file_uploader.html">Agregar Informe Digital</a></li>
                                <li><a class="ajax-link" href="ajax/consultar_informe.html">Consultar Informe Digital</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!--Start Content-->
                <div id="content" class="col-xs-12 col-sm-10">
                    <div class="preloader">
                        <img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
                    </div>
                    <div id="ajax-content"></div>
                </div>
                <!--End Content-->
            </div>
        </div>
        <!--End Container-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="http://code.jquery.com/jquery.js"></script>-->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
        <script src="plugins/tinymce/tinymce.min.js"></script>
        <script src="plugins/tinymce/jquery.tinymce.min.js"></script>
        <!-- All functions for this theme + document.ready processing -->
        <script src="js/devoops.js"></script>
    </body>


</html>
