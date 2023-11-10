<?php
@$link = new mysqli("localhost","root","","pruebas");

$id = $_POST['data'];
$sql = "SELECT * FROM clients WHERE id=$id";
$result = $link->query($sql);
$row = $result->fetch_object();

while ($row = $result->fetch_object()) {
  echo "<p>$row->id $row->first_name</p>";
}

$result->free();
$link->close();