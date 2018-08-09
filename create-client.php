<?php require "setting.php"; ?>
<?php require "add-client.php"; ?>
<!doctype html>
<html lang="fr">
    <?php require "head.php"; ?>


    <body>
        <?php require "nav.php";?>

          <?php if (isset($_POST['submit'])) { ?>
            <a href="index.php" class="btn btn-primary">Valider</a>
          <?php } else { ?>
            <form class="" action="create-client.php" method="post">
              <label for="prenom">Prénom</label>
              <input type="text" name="prenom" value="">

              <label for="nom">Nom</label>
              <input type="text" name="nom" value="">

              <label for="numero">Numéro</label>
              <input type="number" name="numero" value="">

              <label for="type">Type de voie</label>
              <select class="" name="type">
                <option value="Rue">Rue</option>
                <option value="Avenue">Avenue</option>
                <option value="Boulevard">Boulevard</option>
              </select>

              <label for="voie">Nom de voie</label>
              <input type="text" name="voie" value="">

              <label for="code_postal">Code Postal</label>
              <input type="text" name="code_postal" value="">

              <label for="ville">Ville</label>
              <input type="text" name="ville" value="">

              <label for="id_entreprise">Entreprise</label>
              <select class="" name="id_entreprise">
                <?php
                $entreprises = $pdo->query('SELECT id, nom FROM entreprise')->fetchAll();
                foreach ($entreprises as $entreprise) { ?>
                  <option value="<?php echo $entreprise['id']; ?>"><?php echo $entreprise['nom']; ?></option>
                <?php } ?>
              </select>

              <label for="imageURL">Image</label>
              <input type="text" name="imageURL" value="">

              <input type="submit" name="submit" value="Submit">
            </form>
          <?php } ?>

        <?php require "footer.php"; ?>
    </body>
</html>
