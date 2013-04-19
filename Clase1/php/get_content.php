<?php
   
      
      function main(){

      	if(isset($_GET["url"]))
      		$url = "/home/apmont/public/" . $_GET["url"];
      	else
      	    $url = "http://apmontelibano.com/apps/partes/filtros.php?filtro={$_GET['filtro']}";

      $html =  utf8_encode( file_get_contents( $url ) );

    if(isset($_GET["filtro"]))
      echo json_encode( array( "html" => $html , "filtro" => $_GET["filtro"] ) );
     else
     	echo json_encode( array( "html" => $html , "url" => $_GET["url"] ) );

        }



        main();