<?php
// https://picsum.photos/200/200/?random
  $pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);

  $prenom = "";
  $nom = "";
  $numero = "";
  $type = "";
  $voie = "";
  $code_postal = "";
  $ville = "";
  $id_entreprise = "";
  $imageURL = "";

  if (isset($_GET['id'])){
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $numero = $_POST['numero'];
      $type = $_POST['type'];
      $voie = $_POST['voie'];
      $code_postal = $_POST['code_postal'];
      $ville = $_POST['ville'];
      $id_entreprise = $_POST['id_entreprise'];
      $imageURL = $_POST['imageURL'];



      $updateClient = $pdo->prepare(
        'UPDATE client
        SET prenom = :prenom, nom = :nom, numero = :numero, type = :type, voie = :voie, code_postal = :code_postal, ville = :ville, id_entreprise = :id_entreprise, imageURL = :imageURL
        WHERE id=:id');

        $updateClient->bindParam(':id', $id);
        $updateClient->bindParam(':prenom', $prenom);
        $updateClient->bindParam(':nom', $nom);
        $updateClient->bindParam(':numero', $numero);
        $updateClient->bindParam(':type', $type);
        $updateClient->bindParam(':voie', $voie);
        $updateClient->bindParam(':code_postal', $code_postal);
        $updateClient->bindParam(':ville', $ville);
        $updateClient->bindParam(':id_entreprise', $id_entreprise);
        $updateClient->bindParam(':imageURL', $imageURL);


        $updateClient->execute();


      }else{
        $thisClient = $pdo->query('SELECT * FROM client WHERE id='.$id)->fetch();
        $prenom = $thisClient['prenom'];
        $nom = $thisClient['nom'];
        $numero = $thisClient['numero'];
        $type = $thisClient['type'];
        $voie = $thisClient['voie'];
        $code_postal = $thisClient['code_postal'];
        $ville = $thisClient['ville'];
        $id_entreprise = $thisClient['id_entreprise'];
        $imageURL = $thisClient['imageURL'];
      }

    } else{

      if (isset($_POST['submit'])) {
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
          'INSERT INTO client(id ,prenom, nom, numero, type, voie, code_postal, ville, id_entreprise, imageURL)
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

          $insertClient->execute();
      }
    }

  ?>
