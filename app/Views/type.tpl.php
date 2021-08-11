<main class="main-type">

    <h2 class="main-title-type">Cliquez sur un type pour voir tout les pokemons de ce type</h2>

    <?php foreach($viewWars['colors'] as $types) : ?>

        <button class="card-colors-type" style="background-color: #<?php echo $types->getColor() ?>;">
        
            <a href="">
                <p class="name-type"><strong><?php echo $types->getName()?></strong></p>
            </a>
            
        
        </button>
  

    <?php endforeach; ?>
