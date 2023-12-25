<?php

abstract class Model{
    public $connection;

    public function connect(){
        $dsn = "mysql:host=127.0.0.1;dbname=comparateur_vehicules;";
        try {
            $this->connection = new PDO($dsn, "root", "");
        } catch (PDOException $ex) {
            printf("erreur de connexion à la base de donnée", $ex->getMessage());
            exit();
        }
    }

    public function disconnect(){
        $this->connection = null;
    }

    public abstract function insert();
    public abstract function delete();
    public abstract function update();
    public abstract function fetch($query);


}