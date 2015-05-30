<?php 
  //Pinta un JSON perfectamente en el navegador.
  header('Content-Type: application/json');
  
  //Permite que se pueda accer a los archivos desde otros dominios
  header('Access-Control-Allow-Origin: *');
  
  //Permite que siempre se realizen las siguientes opciones
  header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
?>
