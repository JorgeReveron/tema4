<?php
require "conection.php";
$newClientsString = '[{
  "first_name": "Peta",
  "birthday": "2023-08-11",
  "cars": 10,
  "vip": false
}, {
  "first_name": "Gabriel",
  "birthday": "2023-02-18",
  "cars": 6,
  "vip": false
}, {
  "first_name": "Minor",
  "birthday": "2023-10-13",
  "cars": 6,
  "vip": true
}, {
  "first_name": "Clementina",
  "birthday": "2023-07-13",
  "cars": 1,
  "vip": false
}, {
  "first_name": "Tabbitha",
  "birthday": "2023-03-12",
  "cars": 5,
  "vip": true
}, {
  "first_name": "Urban",
  "birthday": "2023-10-29",
  "cars": 3,
  "vip": true
}, {
  "first_name": "Ethelind",
  "birthday": "2023-10-16",
  "cars": 8,
  "vip": false
}, {
  "first_name": "Brockie",
  "birthday": "2023-05-02",
  "cars": 9,
  "vip": false
}, {
  "first_name": "Franchot",
  "birthday": "2023-02-18",
  "cars": 4,
  "vip": true
}, {
  "first_name": "Holly-anne",
  "birthday": "2023-10-22",
  "cars": 6,
  "vip": true
}, {
  "first_name": "Rurik",
  "birthday": "2022-12-13",
  "cars": 7,
  "vip": false
}, {
  "first_name": "Hazlett",
  "birthday": "2023-08-05",
  "cars": 7,
  "vip": false
}, {
  "first_name": "Hayden",
  "birthday": "2023-06-17",
  "cars": 7,
  "vip": false
}, {
  "first_name": "Katha",
  "birthday": "2023-07-17",
  "cars": 10,
  "vip": false
}, {
  "first_name": "Minda",
  "birthday": "2023-02-02",
  "cars": 9,
  "vip": true
}, {
  "first_name": "Valentine",
  "birthday": "2023-08-14",
  "cars": 4,
  "vip": false
}, {
  "first_name": "Jamie",
  "birthday": "2023-02-03",
  "cars": 10,
  "vip": false
}, {
  "first_name": "Theresa",
  "birthday": "2023-07-18",
  "cars": 4,
  "vip": false
}, {
  "first_name": "Neils",
  "birthday": "2022-12-16",
  "cars": 4,
  "vip": true
}, {
  "first_name": "Wilow",
  "birthday": "2023-02-25",
  "cars": 3,
  "vip": true
}]';

$newClients = json_decode($newClientsString);

$stmt = $link->stmt_init();

$stmt->prepare("INSERT INTO clients(first_name,birthday,cars,vip) VALUES (?,?,?,?)");

$stmt->bind_param("ssis",$name,$birthday,$cars,$vip);

foreach ($newClients as $client) {
  $name = $client->first_name;
  $birthday = $client->birthday;
  $cars = $client->cars;
  $vip = $client->vip;
  $stmt->execute();
}
// $stmt->bind_param("ssis",$name,$birthday,$cars,$vip);
// $name = "Alexander";
// $birthday = "1999-09-09";
// $cars = 3;
// $vip = 1;

// $stmt->execute();
echo "insertado";

$stmt->close();
$link->close();