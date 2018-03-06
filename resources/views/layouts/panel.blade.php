<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        @yield('title','Default')
    </title>
    <!-- Favicon-->
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="/admin/plugins/node-waves/waves.css" rel="stylesheet"/>
    <!-- Animation Css -->
    <link href="/admin/plugins/animate-css/animate.css" rel="stylesheet"/>
    <!-- Morris Chart Css-->
    <link href="/admin/plugins/morrisjs/morris.css" rel="stylesheet"/>
    <!-- JQuery DataTable Css -->
    <link href="/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/admin/css/themes/theme-indigo.css" rel="stylesheet"/>
    <!-- Sweetalert Css -->
    <link href="../../admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!---->
    @yield('css')
    
    
</link>
</link>
</link>
</link>
</link>
</meta>
</meta>
</meta>
</head>
<body class="theme-indigo">
    <!--Contenido del home-->
    @yield('content')
    <!--Fin del contenido del home-->


    <!-- Jquery Core Js -->
    <script src="/admin/plugins/jquery/jquery.min.js">
    </script>
    <!-- Bootstrap Core Js -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.js">
    </script>
    <!-- Select Plugin Js -->
    <script src="/admin/plugins/bootstrap-select/js/bootstrap-select.js">
    </script>
    <!-- Slimscroll Plugin Js -->
    <script src="/admin/plugins/jquery-slimscroll/jquery.slimscroll.js">
    </script>
    <!-- Waves Effect Plugin Js -->
    <script src="/admin/plugins/node-waves/waves.js">
    </script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="/admin/plugins/jquery-countto/jquery.countTo.js">
    </script>
    <!-- Morris Plugin Js -->
    <script src="/admin/plugins/raphael/raphael.min.js">
    </script>
    <script src="/admin/plugins/morrisjs/morris.js">
    </script>
    <!-- ChartJs -->
    <script src="/admin/plugins/chartjs/Chart.bundle.js">
    </script>
    <!-- Flot Charts Plugin Js -->
    <script src="/admin/plugins/flot-charts/jquery.flot.js">
    </script>
    <script src="/admin/plugins/flot-charts/jquery.flot.resize.js">
    </script>
    <script src="/admin/plugins/flot-charts/jquery.flot.pie.js">
    </script>
    <script src="/admin/plugins/flot-charts/jquery.flot.categories.js">
    </script>
    <script src="/admin/plugins/flot-charts/jquery.flot.time.js">
    </script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="/admin/plugins/jquery-sparkline/jquery.sparkline.js">
    </script>
    <!-- Custom Js -->
    <script src="/admin/js/admin.js"></script>
    <!-- Datatable -->
    @yield('scriptDatatable')
    <!-- SweetAlert Plugin Js -->
    <script src="../../admin/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Dialogs -->
    <script src="../../admin/js/pages/ui/dialogs.js"></script>
    <!-- Dashboard -->
    <script src="/admin/js/pages/index.js"></script>
    
    
    <!-- Demo Js -->
    <script src="/admin/js/demo.js">
    </script>

    
</body>
</html>
