<?php

$pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);
// $clients = $pdo->query('SELECT * FROM client');
if (isset($_POST['delete_client'])) {
  $id_client = $_POST['id_client'];
  $deleteClient = $pdo->query('DELETE FROM client WHERE id='.$id_client);
}

if (isset($_POST['delete_entreprise'])) {
  $id_entreprise = $_POST['id_entreprise'];
  $deleteEntreprise = $pdo->query('DELETE FROM entreprise WHERE id='.$id_entreprise);
}



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
