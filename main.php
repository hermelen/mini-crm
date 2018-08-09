
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
    </div>
</main>
