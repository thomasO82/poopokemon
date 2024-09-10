<?php
require_once('../core/Router.php');
require_once('../src/models/Db.php');
require_once('../src/controllers/Controller.php');
require_once('../src/controllers/MainController.php');
require_once('../src/models/repositories/PokemonRepository.php');
require_once('../src/models/Pokemon.php');


try {
    $router = new Router();
    $router->start();

} catch (PDOException $e) {
    echo($e->getMessage());
}


?>