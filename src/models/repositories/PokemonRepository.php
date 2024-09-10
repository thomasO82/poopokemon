<?php

abstract class PokemonRepository extends Db{

    private static function request($request){
        $result = self::getInstance()->query($request);
        self::disconnect();
        return $result;
    } 

   static public function getCapturedPokemon(){
        return self::request("SELECT * FROM pokemon WHERE captured = 1")->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function getRandomPoke(){
        return self::request('SELECT * FROM pokemon ORDER BY RAND() LIMIT 1')->fetch(PDO::FETCH_ASSOC);
    }

    static public function freePoke($id){
        return self::request("UPDATE pokemon SET captured = 0 WHERE id = '$id'");
    }

    static public function capturePoke($id){
        return self::request("UPDATE pokemon SET captured = 1 WHERE id = '$id'");
    }


    



}