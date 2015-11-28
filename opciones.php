<?php

include_once('inicializacion.php');


if (isset($_REQUEST['lang'])) {
  $_SESSION["lang"] = $_REQUEST['lang'];
} else {
  $_SESSION["lang"] = "por";
}

    include_once('textos_' . $_SESSION['lang'] . '.php');

?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caixa Mágica | Inicio</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    
  </head>
  <body class="opciones">

    <div class="column">
      <div class="large-12 columns">
        <div class="opciones section">
	        <!-- Grid Example -->
          
          <a href="problema.php" class="big button">Reclama</a>
          <a href="decision.php" class="big button">Vota</a>
          <a href="solucion.php" class="big button">Soluciona</a>
          
          <div class="tool section">
	          
	          <a href="javascript:history.back();" class="medium secondary button">

                <ul id="icons" class="ui-widget ui-helper-clearfix">
                  <li class="ui-state-default ui-corner-all" title="<?php echo $texto['volver']; ?>"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
                </ul>

                <p><?php echo $texto['volver']; ?></p></a>
	          <a href="index.php?nao_importa=opciones" class="medium alert button">

                <p><?php echo $texto['no-me-importa']; ?></p>
                <ul id="icons" class="ui-widget ui-helper-clearfix">
                  <li class="ui-state-default ui-corner-all" title="<?php echo $texto['no-me-importa']; ?>"><span class="ui-icon ui-icon-alert"></span></li>
                </ul>
		          
		          
		  </a>
          </div>
          
          <!-- FIN Grid Example -->
          </div>
          
        </div>
      </div>
    </div>
  	<div class="logo"><img src="img/logo_caixa_final.png" alt="Caixa Mágica"></div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>

  <?php include_once('footer.php'); ?>

  </body>
</html>
