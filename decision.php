<?php

include_once('dbconfig.php');

if (isset($_POST['m2'])) {

    mysqli_query($conn, sprintf( "INSERT INTO transacoes_caixamagica (idioma, metodo, m2, ip) values ('%s', '%s', '%s', '%s' )",
        'por', 2, $_POST['m2'], $_SERVER['REMOTE_ADDR'] ));

    Header('Location: solucion.php');

    exit();
}



$query = "SELECT id, m1_texto FROM transacoes_caixamagica WHERE metodo=1 ORDER BY rand() LIMIT 2";

$stmt = $conn->stmt_init();
if(!$stmt->prepare($query))
{
    print "Failed to prepare statement\n";
}
else
{
    $stmt->execute();
    $result = $stmt->get_result();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caixa Mágica | Inicio</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    
    <!-- <style>
	
	</style>
	-->
    
  </head>
  <body class="opciones">

<div class="row">
      <div class="large-12 columns">
        <h2>Decide!</h2>
      </div>
    </div>

    <div class="column">
      <div class="large-12 columns">
        <div class="opcioness section">
	        <!-- Grid Example -->

            <form method="POST">
              <div class="btn-decisicion">

                  <?php

                  $ids_exibidos = "";

                  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                      $ids_exibidos .= $row['id']."|";
                      ?>

                      <input type="radio" name="m2" onclick="this.form.submit();" class="decisao" id="decisao-<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>"/>
                      <label for="decisao-<?php echo $row['id']; ?>" class="large button"><?php echo $row['m1_texto']; ?></label>

                  <?php } ?>
              </div>
            </form>
          
          <div class="tool3 section">
	          
	          <a href="javascript:history.back();" class="medium secondary button">
		          
		      <ul id="icons" class="ui-widget ui-helper-clearfix">
			      <li class="ui-state-default ui-corner-all" title="VOLTAR"><span class="ui-icon ui-icon-triangle-1-w"></span></li>
	          </ul>
	      
			  <p>VOLTAR</p></a>
	          <a href="index.php?nao_importa=m2:<?php echo $ids_exibidos; ?>" class="medium alert button">
		          
		          <p>NÃO ME IMPORTA</p>
		          <ul id="icons" class="ui-widget ui-helper-clearfix">
			      <li class="ui-state-default ui-corner-all" title="NÃO ME IMPORTA"><span class="ui-icon ui-icon-alert"></span></li>
	          </ul>    
		  </a>
          </div>
          
          <!-- FIN Grid Example -->
          </div>
          
        </div>
      </div>
    </div>
  
	<div class="logo"><img src="img/logo_caixa.png" alt="Caixa Mágica" width="200" height="79"></div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>

<?php
$stmt->close();

include_once('footer.php');

?>

  </body>
</html>
