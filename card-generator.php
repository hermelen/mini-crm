<?php

$pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);
// $clients = $pdo->query('SELECT * FROM client');



$clients = $pdo->query('SELECT entreprise.nom AS entreprise_nom, client.*
FROM client
LEFT JOIN entreprise ON client.id_entreprise = entreprise.id')->fetchAll();
// echo "<pre>";
// print_r($clients);
// echo "</pre>";



$entreprises = $pdo->query('SELECT * FROM entreprise');
// $entreprises = $pdo->query('SELECT client.nom AS client_nom, client.prenom AS client_prenom, entreprise.*
// FROM entreprise
// LEFT JOIN client ON client.id_entreprise = entreprise.id')->fetchAll();
