<?php
class CaracteristicsModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO caracteristique (`vehicule_id`, `model`, `version`, `annee`, `prix`, `moteur`, `cylindree`, `consomation`, `nb_cylindres`, `nb_places`, `type`, `longuer`, `largeur`, `hauteur`, `note`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $request->execute(array($data['vehicule_id'],$data['model'],$data['version'], $data['annee'], $data['prix'],$data['moteur'],$data['cylindree'],$data['consomation'],$data['nb_cylindres'],$data['nb_places'],$data['type'],$data['longuer'],$data['largeur'],$data['hauteur'],$data['note']));
        $this->disconnect();
    }


    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from caracteristique where caracteristique_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE marque SET caracteristique_id = :caracteristique_id, vehicule_id = :vehicule_id, model = :model, version = :version, annee = :annee, prix = :prix, moteur = :moteur, cylindree = :cylindree, consomation = :consomation, nb_cylindres = :nb_cylindres, nb_places = :nb_places, type = :type, longuer = :longuer, largeur = :largeur, hauteur = :hauteur, note = :note WHERE caracteristique_id = :caracteristique_id");
        $request->bindValue(':caracteristique_id', $data['caracteristique_id']);
        $request->bindValue(':vehicule_id', $data['vehicule_id']);
        $request->bindValue(':model', $data['model']);
        $request->bindValue(':version', $data['version']);
        $request->bindValue(':annee', $data['annee']);
        $request->bindValue(':prix', $data['prix']);
        $request->bindValue(':moteur', $data['moteur']);
        $request->bindValue(':cylindree', $data['cylindree']);
        $request->bindValue(':consomation', $data['consomation']);
        $request->bindValue(':nb_cylindres', $data['nb_cylindres']);
        $request->bindValue(':nb_places', $data['nb_places']);
        $request->bindValue(':type', $data['type']);
        $request->bindValue(':longuer', $data['longuer']);
        $request->bindValue(':largeur', $data['largeur']);
        $request->bindValue(':hauteur', $data['hauteur']);
        $request->bindValue(':note', $data['note']);
        $request->execute();
        $this->disconnect();
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from caracteristique where caracteristique_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from caracteristique");
        $this->disconnect();
        return $data;
    }
}
