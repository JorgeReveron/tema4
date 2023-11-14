<?php
require "conection.php";

$stmt = $link->stmt_init();

$stmt->prepare();

$stmt->close();
$link->close();