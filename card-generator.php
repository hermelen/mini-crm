<?php

$pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);
$clients = $pdo->query('SELECT * FROM client');
$entreprises = $pdo->query('SELECT * FROM entreprise');

foreach ($clients as $client) {
  print_r($client);
}

foreach ($entreprises as $entreprise) {
  print_r($entreprise);
}
