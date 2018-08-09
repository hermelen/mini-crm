<?php
// https://picsum.photos/200/200/?random
  $pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);


if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $numero = $_POST['numero'];
    $type = $_POST['type'];
    $voie = $_POST['voie'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $id_entreprise = $_POST['id_entreprise'];
    $imageURL = $_POST['imageURL'];

    $insertClient = $pdo->prepare(
      'INSERT INTO client(id, prenom, nom, numero, type, voie, code_postal, ville, id_entreprise, imageURL)
      VALUES (NULL, :prenom, :nom, :numero, :type, :voie, :code_postal, :ville, :id_entreprise, :imageURL)');

    $insertClient->bindParam(':prenom', $prenom);
    $insertClient->bindParam(':nom', $nom);
    $insertClient->bindParam(':numero', $numero);
    $insertClient->bindParam(':type', $type);
    $insertClient->bindParam(':voie', $voie);
    $insertClient->bindParam(':code_postal', $code_postal);
    $insertClient->bindParam(':ville', $ville);
    $insertClient->bindParam(':id_entreprise', $id_entreprise);
    $insertClient->bindParam(':imageURL', $imageURL);

    // print_r(':nom');

    $insertClient->execute();


    // $product_id = $_POST['product_id'];
    // $line = $pdo->query('SELECT * FROM line WHERE product_id='.$product_id.' AND command_id='.$command_id)->fetch();
    // print_r($line);
    //   echo 'ligne existante';
    //   $quantity = $line['quantity'] + 1;
    //   $update = $pdo->prepare('UPDATE line SET quantity = :quantity WHERE product_id = :product_id AND command_id= :command_id ');
    //   $update->bindParam(':quantity', $quantity);
    //   $update->bindParam(':command_id', $command_id);
    //   $update->bindParam(':product_id', $product_id);
    //   $update->execute();







  }

  ?>
