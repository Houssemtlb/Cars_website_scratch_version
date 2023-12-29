<?php

class VehiculeModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO vehicule(`marque_id`, `model`, `version`, `annee`, `prix`, `moteur`, `cylindree`, `consommation`, `nb_cylindres`, `nb_places`, `type`, `longueur`, `largeur`, `hauteur`, `note`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $request->execute(array($data['marque_id'],$data['model'],$data['version'], $data['annee'], $data['prix'],$data['moteur'],$data['cylindree'],$data['consommation'],$data['nb_cylindres'],$data['nb_places'],$data['type'],$data['longueur'],$data['largeur'],$data['hauteur'],$data['note']));
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
        $request = $this->connection->prepare("UPDATE vehicule SET  marque_id = :marque_id, model = :model, version = :version, annee = :annee, prix = :prix, moteur = :moteur, cylindree = :cylindree, consommation = :consommation, nb_cylindres = :nb_cylindres, nb_places = :nb_places, type = :type, longuer = :longueur, largeuur = :largeur, hauteur = :hauteur, note = :note  WHERE (vehicule_id = :vehicule_id)");
        $request->bindValue(':marque_id', $data['marque_id']);
        $request->bindValue(':model', $data['model']);
        $request->bindValue(':version', $data['version']);
        $request->bindValue(':annee', $data['annee']);
        $request->bindValue(':prix', $data['prix']);
        $request->bindValue(':moteur', $data['moteur']);
        $request->bindValue(':cylindree', $data['cylindree']);
        $request->bindValue(':consommation', $data['consommation']);
        $request->bindValue(':nb_cylindres', $data['nb_cylindres']);
        $request->bindValue(':nb_places', $data['nb_places']);
        $request->bindValue(':type', $data['type']);
        $request->bindValue(':longueur', $data['longueur']);
        $request->bindValue(':largeur', $data['largeur']);
        $request->bindValue(':hauteur', $data['hauteur']);
        $request->bindValue(':note', $data['note']);
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