<?php

class MarqueModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO marque(nom,pays_origine,siege_social,annee_creation,description) VALUES (?,?,?,?,?)");
        $request->execute(array($data['nom'], $data['pays_origine'], $data['siege_social'], $data['annee_creation'], $data['description']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from marque where marque_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE marque SET nom = :nom, pays_origine = :pays_origine, siege_social = :siege_social, annee_creation = :annee_creation, description = :description WHERE (marque_id = :marque_id)");
        $request->bindValue(':nom', $data['nom']);
        $request->bindValue(':pays_origine', $data['pays_origine']);
        $request->bindValue(':siege_social', $data['siege_social']);
        $request->bindValue(':annee_creation', $data['annee_creation']);
        $request->bindValue(':description', $data['description']);
        $request->bindValue(':marque_id', $data['marque_id']);
        $request->execute();
        $this->disconnect();
    }


    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from marque where marque_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,'select * from marque');
        $this->disconnect();
        return $data;
    }

    public function getAllWithImages(){
        $this->connect();
        return $this->fetch("select marque.marque_id,nom,j.image_path from (marque join images_association_marque as i on marque.marque_id = i.marque_id) join image as j on i.image_id = j.image_id");
    }
}