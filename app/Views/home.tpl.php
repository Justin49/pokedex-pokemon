<main>

    <h2 class="main-title">Cliquez sur un Pokemon pour accéder à sa fiche détail</h2>

    <?php foreach($viewWars['pokemons'] as $characters) : ?>
        
    <div class="card-pokemon">
        
        <a href="">
            <img src="<?= $BASE_URI; ?>/images/<?php echo $characters->getNumero(); ?>.png">
        </a>

        <p class="number">#<strong><?php echo $characters->getNumero(); ?></strong></p><span class="name"><strong><?php echo $characters->getNom(); ?></strong></span> 
    </div>

    <?php endforeach; ?>
</main>