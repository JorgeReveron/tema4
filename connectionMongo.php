<?php
require "vendor/autoload.php";

try {
  $link = new MongoDB\Client("mongodb://localhost:27017");
  $bd = $link->pruebaDB;
  // Operaciones
  
} catch (Exception $e){
  print($e);
  die();
}