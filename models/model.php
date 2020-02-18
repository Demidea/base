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

    static public function MdlLogin($table, $data){

        $stmt = Conn::connect()->prepare("INSERT INTO $table(user_name, user_pass) VALUES (:user_name, :user_pass)");

		$stmt->bindParam(":user_name", $data["user_name"], PDO::PARAM_STR);
		$stmt->bindParam(":user_pass", $data["user_pass"], PDO::PARAM_STR);

        if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

    }
}