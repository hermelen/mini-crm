<?php require "setting.php"; ?>
<?php require "client.php"; ?>
<!doctype html>
<html lang="fr">
    <?php require "head.php"; ?>

    <body>
        <?php require "nav.php";?>

        <?php if (isset($_POST['submit'])) { ?>
          <a href="index.php" class="btn btn-primary">Valider</a>
        <?php } else { ?>
          <form class="" action="form-client.php" method="post">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom">
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <input type="text" name="nom" class="form-control" placeholder="Nom">
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <input type="number" name="numero" class="form-control" placeholder="Numéro">
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <select class="form-control" name="type">
                  <option value="" disabled selected>Type de voie</option>
                  <option value="Rue">Rue</option>
                  <option value="Avenue">Avenue</option>
                  <option value="Boulevard">Boulevard</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <input type="text" name="voie" class="form-control" placeholder="Nom de voie">
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <input type="text" name="code_postal" class="form-control" placeholder="Code Postal">
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <input type="text" name="ville" class="form-control" placeholder="Ville">
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <select class="form-control" name="id_entreprise">
                  <option value="" disabled selected>Entreprise</option>
                  <?php
                  $entreprises = $pdo->query('SELECT id, nom FROM entreprise')->fetchAll();
                  foreach ($entreprises as $entreprise) { ?>
                    <option value="<?php echo $entreprise['id']; ?>"><?php echo $entreprise['nom']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <input type="text" name="imageURL" class="form-control" placeholder="Photo">
              </div>
              <div class="col-12 text-center">
                <input type="submit" name="submit" value="Submit">
              </div>
            </div>
          </form>
        <?php } ?>

        <?php require "footer.php"; ?>
    </body>
</html>
