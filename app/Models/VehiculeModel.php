<?php

class VehiculeModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO vehicule(marque_id,nom) VALUES (?,?)");
        $request->execute(array($data['marque_id'], $data['nom']));
        $this->disconnect();
    }
    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from vehicule where vehicule_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE vehicule SET  nom = :nom, marque_id = :marque_id WHERE (vehicule_id = :vehicule_id)");
        $request->bindValue(':nom', $data['nom']);
        $request->bindValue(':vehicule_id', $data['vehicule_id']);
        $request->execute();
        $this->disconnect();
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from vehicule where vehicule_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,'select * from vehicule');
        $this->disconnect();
        return $data;
    }
}