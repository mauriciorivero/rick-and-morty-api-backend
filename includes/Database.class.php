<?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

    class Database{
        private $host = "localhost:8889";
        private $user = "root";
        private $password = "root";
        private $database = "rick-and-mort-api";


        public function get_connection(){
            $hostDB = "mysql:host=".$this->host.";dbname=".$this->database.";";
            try{
                $connection = new PDO($hostDB, $this->user, $this->password);
                $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $connection;
            }catch(PDOException $e){
                die("ERROR: ".$e->getMessage());
            }
        }
    }    

?>