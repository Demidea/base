<?php

require_once "config.php";

class Model{
    static public function MdlBase($table, $item, $value){

        if($item != null){

            $stmt = Conn::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else{

            $stmt = Conn::connect()->prepare("SELECT * FROM $table");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

        $stmt -> close();

        $stmt = null;

    }
}