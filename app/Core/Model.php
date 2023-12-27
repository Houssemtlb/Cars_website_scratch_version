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

    public function request($c, $r)
    {
        $result = $c->query($r);
        return $result->fetchAll();
    }

    public function fetch($query)
    {
        //returns an array of db rows (so it's an array of associative arrays !!) that match certain cnds
        $this->connect();
        $data = $this->request($this->connection,$query);
        $this->disconnect();
        return $data;
    }

    public abstract function insert($data); //inserts a row
    public abstract function delete($id); // deletes a row with a specific id
    public abstract function update($data); //updates a row
    public abstract function get($id); //returns a row that has a specific id
    public abstract function getAll(); //returns all the rows



}