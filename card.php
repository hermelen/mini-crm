
<div class="accordion accordionClient" id="accordionClient">
<?php
foreach ($clients as $client) { ?>
  <div class="card">
    <div class="card-header" id="heading<?php echo $client['id']?>">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $client['id']?>" aria-expanded="true" aria-controls="collapse<?php echo $client['id']?>">
          <?php echo $client['nom']?>
        </button>
      </h5>
      </div>
        <div id="collapse<?php echo $client['id']?>" class="collapse show" aria-labelledby="heading<?php echo $client['id']?>" data-parent="#accordionEntreprise">
          <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-4">
              <img src="<?php echo $client['thumb'] ?>" alt="">
            </div>
          <div class="col-12 col-sm-7">
            <h3><?php echo $client['nom']." ".$client['prenom']?></h3>
            <h4><?php echo $client['numero'].", ".$client['type']." ".$client['voie'].", ".$client['code_postal']." ".$client['ville']?></h4>
            <h5><?php echo $client['entreprise_nom'] ?></h5>
          </div>
          <div class="col-12 col-sm-1">
            <i class="fas fa-trash-alt"></i>
            <i class="fas fa-edit"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<div class="accordion  accordionEntreprise" id="accordionEntreprise">
<?php
foreach ($entreprises as $entreprise) { ?>
  <div class="card">
    <div class="card-header" id="heading<?php echo $entreprise['id']?>">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $entreprise['id']?>" aria-expanded="true" aria-controls="collapse<?php echo $entreprise['id']?>">
          <?php echo $entreprise['nom']?>
        </button>
      </h5>
      </div>
        <div id="collapse<?php echo $entreprise['id']?>" class="collapse show" aria-labelledby="heading<?php echo $entreprise['id']?>" data-parent="#accordionEntreprise">
          <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-4">
              <img src="<?php echo $entreprise['thumb'] ?>" alt="">
            </div>
          <div class="col-12 col-sm-7">
            <h3><?php echo $entreprise['nom'] ?></h3>
            <h4><?php echo $entreprise['numero'].", ".$entreprise['type']." ".$entreprise['voie'].", ".$entreprise['code_postal']." ".$entreprise['ville']?></h4>
            <ul>
              <?php
              $client_lists = $pdo->query('SELECT * FROM client WHERE id_entreprise = '.$entreprise['id']);
              foreach ($client_lists as $client_list) { ?>
                <li>
                  <h5><?php echo $client_list['nom']." ".$client_list['prenom'] ?></h5>
                </li>
              <?php } ?>
            </ul>
          </div>
          <div class="col-12 col-sm-1">
            <i class="fas fa-trash-alt"></i>
            <i class="fas fa-edit"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
