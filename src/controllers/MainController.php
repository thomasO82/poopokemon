<?php

class MainController extends Controller{

    public function index(){
        try {
            $pokeRandom = Pokemon::getRandomPoke();
            $randomPoke = new Pokemon($pokeRandom["id"], $pokeRandom["name"],$pokeRandom["captured"]);
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['free'])) {
                    Pokemon::freePoke($_POST['free']);
                }
                if (isset($_POST['capture'])) {
                    Pokemon::capturePoke($_POST['capture']);
                }
            }
            
            $pokedB = Pokemon::getCapturedPokemon();
            $pokemons = [];
            foreach ($pokedB as $poke) {
                $pokemon = new Pokemon($poke['id'], $poke['name'], $poke['captured']);
                array_push($pokemons, $pokemon);
            }
        } catch (PDOException $e) {
            echo($e->getMessage());
         
        }
        require_once(__DIR__ . '/../../views/main.php');
    }
}