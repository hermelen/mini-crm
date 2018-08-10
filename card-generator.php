<?php

$pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);
// $clients = $pdo->query('SELECT * FROM client');



$clients = $pdo->query('SELECT entreprise.nom AS entreprise_nom, client.*
FROM client
LEFT JOIN entreprise ON client.id_entreprise = entreprise.id')->fetchAll();
$countClients = count($clients);



$entreprises = $pdo->query('SELECT * FROM entreprise')->fetchAll();

// $countEntreprises = $pdo->query('SELECT * FROM entreprise')->fetchAll();
$countEntreprises = count($entreprises);
// $countEntreprises = $entreprises;
// $countEntreprises->fetchAll();

// $countEntreprises = $pdo->query('SELECT * FROM entreprise')->fetchAll();
// $entreprises = $pdo->query('SELECT client.nom AS client_nom, client.prenom AS client_prenom, entreprise.*
// FROM entreprise
// LEFT JOIN client ON client.id_entreprise = entreprise.id')->fetchAll();
