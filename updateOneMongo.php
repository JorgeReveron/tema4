<?php

require "connectionMongo.php";

$updateResult = $bd->clients->updateOne(
  ["nombre" => "Pepe"],
  ['$set' => ["ciclo" => "DAM", "edad" => 25]]
);
echo "Actualizacion finalizada";