<?php 
// On inclut l'autoloader pour pouvoir utiliser la classe autoloader permettant de créer les routes du site
require __DIR__.'/../vendor/autoload.php'; 

// On inclut les controllers
require_once __DIR__.'/../app/Controllers/MainController.php';
require_once __DIR__.'/../app/Controllers/TypeController.php';

// On inclut les bases de données
require_once __DIR__.'/../app/utils/Database.php';

// On inclut les models
require_once __DIR__.'/../app/Models/TypeModel.php';
require_once __DIR__.'/../app/Models/PokemonModel.php';


// On instancie la classe AltoRouter
$router = new AltoRouter();

// On définis le chemin à partir du quel les route sont prises en compte
$router->setBasePath('projet-perso/pokedex-pokemon/public/');

// Les différentes route
$router->map('GET', '/', 'MainController::home', 'home');
$router->map('GET', '/type', 'TypeController::type', 'type');

$match = $router->match();

// Si la route demandé correspond a la route créer
if($match) {

    // l'info se trouve dans la case target du tableau $match
    $action = $match['target'];

    // mais c'est une chaîne de caractère, il faut la transformer en un contrôleur + une action
    // pour ça, on utilise la fonction explode() qui découpe une chaîne en morceaux en fonction d'un séparateur (celui qu'on a décidé d'utiliser plus haut, dans les routes)
    $morceaux = explode("::", $action);

    // on donne des noms compréhensible à ces morceaux
    $nomDuControleur = $morceaux[0];
    $nomDeLaMethode = $morceaux[1];

    // et c'est parti, on crée le contrôleur et on lance la méthode
    $controller = new $nomDuControleur(); // PHP remplace dynamiquement la variable par sa valeur et instancie donc toujours le bon contrôleur
    $controller->$nomDeLaMethode($match['params']); // même principe, on appelle la méthode dynamiquement, en fonction de ce que contient la variable



} else {

    // On instancie MainController 
    $controller = new TypeController();

    $controller->type();


    // On appelle la méthode error404 
    //$controller->error404();
}
?>