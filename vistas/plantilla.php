<?php
session_start();
$url = PlantillaControlador::url();

?> 
<!doctype html> 
<html lang="es"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Practico-final</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo $url ?>vistas/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $url ?>vistas/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url ?>vistas/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="<?php echo $url ?>vistas/assets/css/dashmix.min.css"> 

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="<?php echo $url ?>vistas/assets/css/themes/xeco.min.css">
    <!-- END Stylesheets -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     
    <script src="<?php echo $url ?>vistas/assets/js/scripts.js"></script>
    
  </head>

 <body>
    
<?php if (!isset($_SESSION["session"])) { ?>     
<?php } ?>     
    
    <?php if (isset($_SESSION["session"]) && $_SESSION["session"] == "ok") { ?> 
      <!-- Side Overlay-->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark page-header-glass main-content-narrow">    
        <!-- END Side Overlay -->

        <!-- Sidebar --> 
      
        <nav id="sidebar" aria-label="Main Navigation">
        
          <!-- END Side Header (mini Sidebar mode) -->
              
          <!-- Side Header (normal Sidebar mode) -->
              <?php include "vistas/modulos/menu.php"; ?>
          <!-- END Side Header (normal Sidebar mode) -->
        
          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- User Info -->
              <!--  php include "vistas/modulos/menu.php"; ?> -->   
            <!-- END User Info --> 

            <!-- Side Navigation -->
                <!--  php include "vistas/modulos/menu.php"; ?> -->   
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <?php include 'vistas/modulos/header.php'; ?>  
        <!-- END Header -->
        
        <!-- Main Container -->
        <main id="main-container">

          <!-- Hero -->
          <div class="bg-image" style="background-image: url('vistas/assets/media/photos/bg_minecraft.png');">
            <div class="bg-black-10">
              <div class="content content-full content-top">
                <div class="pt-5 pb-4 text-center">
                  
                  </span>
                </div>
              </div>
            </div>
          </div>      

          <!-- END Hero -->

          <!-- Page Content -->
          <div class="content content-full">         
            <?php

              if (isset($_GET["pagina"])) // entra si es verdadero
              {

                  $paginas = explode("/", $_GET["pagina"]);
                  //print_r($paginas);

                  if (
                      $paginas[0] == "inicio" || 
                      $paginas[0] == "productos" ||
                      $paginas[0] == "usuarios" ||
                      $paginas[0] == "categorias" ||
                      $paginas[0] == "salir"
                  ) {
                      include "vistas/modulos/" . $paginas[0] . ".php";
                  } else {
                      include "vistas/modulos/404.php";
                  }
              } else {
                  include "vistas/modulos/inicio.php"; 
              }
          
              ?>
          </div>
              <?php 
              //include 'vistas/modulos/modals.php';
              include 'vistas/modulos/footer.php';
              ?>
              <?php } else {
              include 'vistas/modulos/login.php';
              } ?>
              <!-- Console -->
              
              <!-- END Console -->

              <!-- Plugins -->
              
              <!-- END Plugins -->
          
          <!-- END Page Content --> 
          
            <!-- Live Stats -->
            
            <!-- END Live Stats -->
                  
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
          
        <!-- END Footer -->
    </div> 
      <!-- END Page Container -->

      <!--
        Dashmix JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
      -->
      
      <script src="<?php echo $url ?>vistas/assets/js/dashmix.app.min.js"></script> 
      <!-- jQuery (required for jQuery Sparkline plugin) -->
      <script src="<?php echo $url ?>vistas/assets/js/lib/jquery.min.js"></script> 
      <!-- Page JS Plugins -->
      <script src="<?php echo $url ?>vistas/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
      <!-- Page JS Helpers (jQuery Sparkline Plugin) -->
      <script>Dashmix.helpersOnLoad('jq-sparkline');</script>  
      <!-- Page JS Plugins loguin-->
      <script src="<?php echo $url ?>vistas/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
      <!-- Page JS Code loguin-->
      <script src="<?php echo $url ?>vistas/assets/js/pages/op_auth_signin.min.js"></script> 
      

        <!-- Page JS Plugins -->
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
      <script src="<?php echo $url ?>vistas/assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

      <!-- Page JS Plugins form de agregar productos-->
    <script src="vistas/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="vistas/assets/js/plugins/jquery-validation/additional-methods.js"></script> 
     <!-- Page JS Helpers agregar productos form(Select2 plugin) -->
     <script>Dashmix.helpersOnLoad(['jq-select2']);</script>

    <!-- Page JS Code agregar productos form-->
    <script src="vistas/assets/js/pages/be_forms_validation.min.js"></script> 

    <!-- Page JS Plugins editor de texto de productos-->
    <script src="vistas/assets/js/plugins/ckeditor5-inline/build/ckeditor.js"></script>

    <!-- Page JS Helpers productos editor de texto (CKEditor 5 plugin) -->
    <script>Dashmix.helpersOnLoad(['js-ckeditor5']);</script>
    
 
      <!-- Page JS Code tabla products --> 
    <script src="<?php echo $url ?>vistas/assets/js/pages/be_tables_datatables.min.js"></script>

     <!-- mis script --> 

    <script src="<?php echo $url ?>vistas/assets/js/productos.js"></script>  
    <script src="<?php echo $url ?>vistas/assets/js/usuarios.js"></script> 
    <script src="<?php echo $url ?>vistas/assets/js/categorias.js"></script> 





     <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        $(function() {

            $('#agregarProducto').validate({
                rules: {
                    nombre_producto: {
                        required: true,
                        minlength: 3
                    },
                    categoria_producto: {
                        required: true,
                    },
                    precio_producto: {
                        required: true
                    },
                },
                messages: {
                    nombre_producto: {
                        required: "Ingrese un nombre",
                        minlength: "El nombre del producto debe tener más de 3 caracteres"
                    },
                    categoria_producto: {
                        required: "Seleccione una categoría",
                    },
                    precio_producto: "Ingrese un precio"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>


 </body>
</html>