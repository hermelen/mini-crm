
<main>
    <div class="container">

        <h1>Listing clients/entreprises</h1>

        <!-- Centered Tabs -->
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a id="ongletClients" class="nav-link active" href="#">Clients(3)</a>
            </li>
            <li class="nav-item">
                <a id="ongletEntreprises" class="nav-link" href="#">Entreprise(4)</a>
            </li>
        </ul>
        <div id="searchAccordion" class="input-group">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons"     aria-describedby="button-addon4">
            <div class="input-group-append" id="button-addon4">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-ban"></i></button>
            </div>
        </div>
        <?php
        require "card.php" 
        ?>
        <!-- <div class="accordion accordionClient" id="accordionClient">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            client 1
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionClient">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <img src="https://picsum.photos/200/200/?random" alt="">
                            </div>
                            <div class="col-12 col-sm-7">
                                <h3>Nom Prénom</h3>
                                <h4>Adresse du client, Code Postal, Ville</h4>
                                <h5>Nom de l'entreprise</h5>
                            </div>
                            <div class="col-12 col-sm-1">
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
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"    aria-controls="collapseTwo">
                            Client 2
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionClient">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <img src="https://picsum.photos/200/200/?random" alt="">
                            </div>
                            <div class="col-12 col-sm-7">
                                <h3>Nom Prénom</h3>
                                <h4>Adresse du client, Code Postal, Ville</h4>
                                <h5>Nom de l'entreprise</h5>
                            </div>
                            <div class="col-12 col-sm-1">
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
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"  aria-controls="collapseThree">
                            Client 3
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionClient">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <img src="https://picsum.photos/200/200/?random" alt="">
                            </div>
                            <div class="col-12 col-sm-7">
                                <h3>Nom Prénom</h3>
                                <h4>Adresse du client, Code Postal, Ville</h4>
                                <h5>Nom de l'entreprise</h5>
                            </div>
                            <div class="col-12 col-sm-1">
                                <i class="fas fa-trash-alt"></i>
                                <i class="fas fa-edit"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- <div class="accordion  accordionEntreprise" id="accordionEntreprise">
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Entreprise 1
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionEntreprise">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <img src="https://picsum.photos/200/200/?random" alt="">
                            </div>
                            <div class="col-12 col-sm-7">
                                <h3>Nom de l'entreprise</h3>
                                <h4>Adresse du client, Code Postal, Ville</h4>
                                <h5>Nom Prénom</h5>
                            </div>
                            <div class="col-12 col-sm-1">
                                <i class="fas fa-trash-alt"></i>
                                <i class="fas fa-edit"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"   aria-controls="collapseFive">
                            Entreprise 2
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionEntreprise">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <img src="https://picsum.photos/200/200/?random" alt="">
                            </div>
                            <div class="col-12 col-sm-7">
                                <h3>Nom de l'entreprise</h3>
                                <h4>Adresse du client, Code Postal, Ville</h4>
                                <h5>Nom Prénom</h5>
                            </div>
                            <div class="col-12 col-sm-1">
                                <i class="fas fa-trash-alt"></i>
                                <i class="fas fa-edit"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"    aria-controls="collapseSix">
                            Entreprise 3
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionEntreprise">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <img src="https://picsum.photos/200/200/?random" alt="">
                            </div>
                            <div class="col-12 col-sm-7">
                                <h3>Nom de l'entreprise</h3>
                                <h4>Adresse du client, Code Postal, Ville</h4>
                                <h5>Nom Prénom</h5>
                            </div>
                            <div class="col-12 col-sm-1">
                                <i class="fas fa-trash-alt"></i>
                                <i class="fas fa-edit"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</main>
