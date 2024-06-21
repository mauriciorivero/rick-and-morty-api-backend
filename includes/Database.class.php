<?php

    class Database{
        private $host = "localhost:8889";
        private $user = "root";
        private $password = "root";
        private $database = "rick-and-mort-api";

         /**
         * Returns a PDO database connection object.
         * @return PDO The PDO database connection object.
         * @throws PDOException If there is an error connecting to the database.
         */
        public function getConnection(){
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