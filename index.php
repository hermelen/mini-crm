<?php require "header.php"; ?>
<?php require "setting.php"; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Mini CRM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Listings <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ajouter Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Ajouter Entreprise</a>
      </li>
    </ul>
  </div>
</nav>




<h1>Listing clients/entreprises</h1>





<!-- Centered Tabs -->
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Clients(3)</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Entreprise(4)</a>
  </li>
</ul>






<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          client 1
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-4">
            <img src="https://picsum.photos/200/200/?random" alt="">
          </div>
          <div class="col-12 col-sm-6">
            <h3>Nom Prénom</h3>
            <h4>Adresse du client, Code Postal, Ville</h4>
            <h5>Nom de l'entreprise</h5>
          </div>
          <div class="col-12 col-sm-2">
            <i class="fas fa-trash-alt"></i>
            <i class="fas fa-edit"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Client 2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-4">
            <img src="https://picsum.photos/200/200/?random" alt="">
          </div>
          <div class="col-12 col-sm-6">
            <h3>Nom Prénom</h3>
            <h4>Adresse du client, Code Postal, Ville</h4>
            <h5>Nom de l'entreprise</h5>
          </div>
          <div class="col-12 col-sm-2">
            <i class="fas fa-trash-alt"></i>
            <i class="fas fa-edit"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Client 3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-4">
            <img src="https://picsum.photos/200/200/?random" alt="">
          </div>
          <div class="col-12 col-sm-6">
            <h3>Nom Prénom</h3>
            <h4>Adresse du client, Code Postal, Ville</h4>
            <h5>Nom de l'entreprise</h5>
          </div>
          <div class="col-12 col-sm-2">
            <i class="fas fa-trash-alt"></i>
            <i class="fas fa-edit"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



 <?php require "footer.php"; ?>
