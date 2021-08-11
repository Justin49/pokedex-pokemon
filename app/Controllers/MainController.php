<?php

    class MainController
    {

        //Fonction qui va appelé la vue home
        public function home()
        {
            //On instancie un nouveau PokemonModel
            $pokemons = new PokemonModel();
            //On cherche chaque pokemon
            $characters = $pokemons->findsPokemon();

            //On passe les pokémons à la vue
            $this->show('home', [
                'pokemons' => $characters
            ]);

        }

        //Fonction qui va afficher la vue erreur
        public function error404()
        {
            $this->show('error404'); 
        }

        //Fonction qui va prendre en paramètre le nom d'une vue à affichée et le tableau des données
        public function show($viewName, $viewWars = []) {


            $BASE_URI = $_SERVER['BASE_URI'];

            require_once __DIR__.'/../Views/header.tpl.php'; 
            require_once __DIR__.'/../Views/'.$viewName.'.tpl.php';
            require_once __DIR__.'/../Views/footer.tpl.php';

        }

        
        
    }
?>