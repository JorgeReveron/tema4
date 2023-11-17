<?php

require "connectionMongo.php";

$updateResult = $bd->clients->update(
  ["ciclo" => "DAW"],
  ['$set' => ["ciclo" => "DAM"]]
);
echo "Actualizacion finalizada";