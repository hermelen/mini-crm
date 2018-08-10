<?php
$pdo = new PDO("mysql:host=".$hostName.";dbname=".$dbName, $user, $pass);
// https://picsum.photos/200/200/?random

  $nom = "";
  $siret = "";
  $raison_sociale = "";
  $numero = "";
  $type = "";
  $voie = "";
  $code_postal = "";
  $ville = "";
  $imageURL = "";

  if (isset($_GET['id'])){
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $siret = $_POST['siret'];
        $raison_sociale = $_POST['raison_sociale'];
        $numero = $_POST['numero'];
        $type = $_POST['type'];
        $voie = $_POST['voie'];
        $code_postal = $_POST['code_postal'];
        $ville = $_POST['ville'];
        $imageURL = $_POST['imageURL'];



        $updateEntreprise = $pdo->prepare(
          'UPDATE entreprise
          SET nom=:nom,siret=:siret,raison_sociale=:raison_sociale,numero=:numero,type=:type,voie=:voie,code_postal=:code_postal,ville=:ville,imageURL=:imageURL WHERE id=:id');
          $updateEntreprise->bindParam(':id', $id);
          $updateEntreprise->bindParam(':nom', $nom);
          $updateEntreprise->bindParam(':siret', $siret);
          $updateEntreprise->bindParam(':raison_sociale', $raison_sociale);
          $updateEntreprise->bindParam(':numero', $numero);
          $updateEntreprise->bindParam(':type', $type);
          $updateEntreprise->bindParam(':voie', $voie);
          $updateEntreprise->bindParam(':code_postal', $code_postal);
          $updateEntreprise->bindParam(':ville', $ville);
          $updateEntreprise->bindParam(':imageURL', $imageURL);

          $updateEntreprise->execute();

    }else{
      $thisEntreprise = $pdo->query('SELECT * FROM entreprise WHERE id='.$id)->fetch();
      $nom = $thisEntreprise['nom'];
      $siret = $thisEntreprise['siret'];
      $raison_sociale = $thisEntreprise['raison_sociale'];
      $numero = $thisEntreprise['numero'];
      $type = $thisEntreprise['type'];
      $voie = $thisEntreprise['voie'];
      $code_postal = $thisEntreprise['code_postal'];
      $ville = $thisEntreprise['ville'];
      $imageURL = $thisEntreprise['imageURL'];
    }

} else{

  if (isset($_POST['submit'])) {
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

          $insertEntreprise->execute();
  }
}


  ?>
