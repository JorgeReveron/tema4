<?php

require "connectionMongo.php";

echo "Quedan en la coleccion clients" . $bd->clients->count();
$deleteResult = $bd->clients->deleteOne(
  ["nombre" => "Pepe"]
);
echo "<br>Quedan en la coleccion clients" . $bd->clients->count();