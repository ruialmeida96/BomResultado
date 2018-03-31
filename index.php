<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="./img/apple-icon.png">
  <link rel="icon" href="./img/favicon.png">
  <title>
    Bom Resultado
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./css/material-dashboard.css?v=2.0.0">
</head>
<body class="">

  <!--verificar a existencia de javascript-->
  <noscript>
    <div class="alert alert-danger" role="alert" id="js_error">
      <strong>Erro!</strong> A nossa aplicação necessita de Javascript para funcionar. Veja <a href="https://www.enable-javascript.com/pt/" class="alert-link">aqui</a> como ativar esta funcionalidade no seu navegador.
    </div>
  </noscript>

  <?php

  require_once('resources/templates/menuinicial.php');

  ?>
<h1>Página Inicial</h1>


</body>
<!--   Core JS Files   -->
<script src="./js/core/jquery.min.js"></script>
<script src="./js/core/popper.min.js"></script>
<script src="./js/bootstrap-material-design.js"></script>
<script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="./js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="./js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="./js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="./js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="./js/plugins/demo.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  //init wizard
  // demo.initMaterialWizard();
  // Javascript method's body can be found in assets/js/demos.js
  demo.initDashboardPageCharts();
  demo.initCharts();
});
</script>

</html>
