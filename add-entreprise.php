<?php
// https://picsum.photos/200/200/?random
  $pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);


if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $nom = $_POST['nom'];
    $siret = $_POST['siret'];
    $raison_sociale = $_POST['raison_sociale'];
    $numero = $_POST['numero'];
    $type = $_POST['type'];
    $voie = $_POST['voie'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $imageURL = $_POST['imageURL'];

    $insertEntreprise = $pdo->prepare(
      'INSERT INTO entreprise(id, nom, siret, raison_sociale, numero, type, voie, code_postal, ville, imageURL)
      VALUES (NULL, :nom, :siret, :raison_sociale, :numero, :type, :voie, :code_postal, :ville, :imageURL)');

    $insertEntreprise->bindParam(':nom', $nom);
    $insertEntreprise->bindParam(':siret', $siret);
    $insertEntreprise->bindParam(':raison_sociale', $raison_sociale);
    $insertEntreprise->bindParam(':numero', $numero);
    $insertEntreprise->bindParam(':type', $type);
    $insertEntreprise->bindParam(':voie', $voie);
    $insertEntreprise->bindParam(':code_postal', $code_postal);
    $insertEntreprise->bindParam(':ville', $ville);
    $insertEntreprise->bindParam(':imageURL', $imageURL);

    // print_r(':nom');

    $insertEntreprise->execute();


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
