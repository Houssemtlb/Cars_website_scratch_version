<?php
class ComparaisonModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO comparaison(vehicule_1_id,vehicule_2_id) VALUES (?,?)");
        $request->execute(array($data['vehicule_1_id'],$data['vehicule_2_id']));
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE comparaison SET  nb_recherche = :nb_recherche WHERE (vehicule_1_id = :vehicule_1_id and vehicule_2_id = :vehicule_2_id) or (vehicule_2_id = :vehicule_1_id and vehicule_1_id = :vehicule_2_id)");
        $request->bindValue(':vehicule_1_id', $data['vehicule_1_id']);
        $request->bindValue(':vehicule_2_id', $data['vehicule_2_id']);
        $request->bindValue(':nb_recherche', $data['nb_recherche']);
        $request->execute();
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from comparaison where comparaison_id = $id");
        $this->disconnect();
    }


    public function addComparaison($id1,$id2)
    {
        $compared = $this->fetch("select * from comparaison where (vehicule_1_id = $id1 and vehicule_2_id = $id2) or (vehicule_2_id = $id1 and vehicule_1_id = $id2)");
        if($compared == null){
            $data = ["vehicule_1_id" => $id1,"vehicule_2_id" => $id2];
            $this->insert($data);
        }else{
            $result =  $this->get(array($id1,$id2))[0];
            $result['nb_recherche'] = $result['nb_recherche'] + 1;
            $this->update($result);
        }
    }


    public function get($ids)
    {
        return $this->fetch("select * from comparaison where (vehicule_1_id = $ids[0] and vehicule_2_id = $ids[1]) or (vehicule_2_id = $ids[0] and vehicule_1_id = $ids[1])");
    }

    public function getFamous()
    {
        return $this->fetch("select * from comparaison order by nb_recherche desc limit 3");
    }

    public function getFamousForVehicule($vehicule_id)
    {
        return $this->fetch("select * from comparaison where ((vehicule_1_id = $vehicule_id) or (vehicule_2_id = $vehicule_id)) order by nb_recherche desc limit 3");
    }



    public function getAll()
    {
        //no need
    }
}