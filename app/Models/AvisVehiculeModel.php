<?php

class AvisVehiculeModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO avis_vehicule(user_id,vehicule_id,valide,note,avis,appreciation) VALUES (?,?,?,?,?,?)");
        $request->execute(array($data['user_id'], $data['vehicule_id'], $data['valide'],$data['note'], $data['avis'], $data['appreciation']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from avis_vehicule where avis_vehicule_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE avis_vehicule SET  user_id = :user_id, vehicule_id = :vehicule_id, valide = :valide,note = :note, avis = :avis, appreciation = :appreciation WHERE (avis_vehicule_id = :avis_vehicule_id)");
        $request->bindValue(':user_id', $data['user_id']);
        $request->bindValue(':vehicule_id', $data['vehicule_id']);
        $request->bindValue(':valide', $data['valide']);
        $request->bindValue(':note', $data['note']);
        $request->bindValue(':avis', $data['avis']);
        $request->bindValue(':appreciation', $data['appreciation']);
        $request->bindValue(':avis_vehicule_id', $data['avis_vehicule_id']);
        $request->execute();
        $this->disconnect();
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from avis_vehicule where avis_vehicule_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from avis_vehicule");
        $this->disconnect();
        return $data;
    }

    public function getAllWithUsernames(){
        $this->connect();
        $data = $this->request($this->connection,"select a.*,u.nom,u.prenom from avis_vehicule as a join user as u on u.user_id = a.user_id");
        $this->disconnect();
        return $data;
    }
}
