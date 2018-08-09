<?php require "setting.php"; ?>
<?php require "entreprise.php"; ?>
<!doctype html>
<html lang="fr">
    <?php require "head.php"; ?>


    <body>
        <?php require "nav.php";?>

          <?php if (isset($_POST['submit'])) {
            ?> <a href="index.php" class="btn btn-primary">Valider</a> <?php
          } else { ?>
            <form class="" action="form-entreprise.php" method="post">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                  <input type="text" name="nom" class="form-control" placeholder="Nom">
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <input type="number" name="siret" class="form-control" placeholder="SIRET">
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <input type="text" name="raison_sociale" class="form-control" placeholder="Raison sociale">
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
