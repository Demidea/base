<?php

class Conn{

	static public function connect(){

		$host = 'localhost';
		$db   = 'base';
		$user = 'root';
		$pass = '1234';
		$charset = 'utf8mb4';
		$options = [
					    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
					    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
					    PDO::ATTR_EMULATE_PREPARES   => false,
					];

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        try {
            $link  = new PDO($dsn, $user, $pass, $options);
            
        } catch (\PDOException $e) {

            echo'<script type="text/javascript">
            alert("Something went wrong!");
            </script>';
            echo $e->getMessage();
            exit;
            }

		return $link;
	}

}

?>