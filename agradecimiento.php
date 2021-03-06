<?php

include_once( 'inicializacion.php' );

include_once('textos_' . $_SESSION['lang'] . '.php');
?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caixa Mágica | Agradecimiento</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    
    <!-- <style>
	
	</style>
	-->
    
  </head>
  <body class="opciones">

    <div class="column">
      <div class="large-12 columns">
        <div class="opcionesa section">
	        <!-- Grid Example -->
          <p class="subtitle"><?php echo $texto['gracias']; ?></p>
                   <!-- -->
                   <!--<video controls height="240" width="320">-->
				   	<!--<source src="videos/video_barcas.mp4" type="video/mp4">-->
				<!--</video>-->
                   
          <div class="tool6 section">
	          
	          <a href="index.php" class="medium secondary button">
		          
		      <ul id="icons" class="ui-widget ui-helper-clearfix">
			      <li class="ui-state-default ui-corner-all" title="VOLTAR"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
	          </ul>
	      
	      <p><?php echo $texto['empiezar-de-nuevo']; ?></p></a>

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
    <?php

    include_once('footer.php');

    ?>
  </body>
</html>
