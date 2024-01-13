<?php

class UserModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO user(nom,prenom,email,mot_de_passe,date_naissance,sexe) VALUES (?,?,?,?,?,?)");
        $request->execute(array($data['nom'], $data['prenom'], $data['email'],$data['mot_de_passe'], $data['date_naissance'], $data['sexe']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from user where user_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE user SET  nom = :nom, prenom = :prenom, email = :email,mot_de_passe = :mot_de_passe, date_naissance = :date_naissance, sexe = :sexe, valide = :valide WHERE (user_id = :user_id)");
        $request->bindValue(':user_id', $data['user_id']);
        $request->bindValue(':nom', $data['nom']);
        $request->bindValue(':prenom', $data['prenom']);
        $request->bindValue(':email', $data['email']);
        $request->bindValue(':mot_de_passe', $data['mot_de_passe']);
        $request->bindValue(':date_naissance', $data['date_naissance']);
        $request->bindValue(':sexe', $data['sexe']);
        $request->bindValue(':valide',$data['valide']);
        $request->execute();
        $this->disconnect();
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from user where user_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from user");
        $this->disconnect();
        return $data;
    }

    public function verifyLogin($credentials)
    {
        $result = 0;
        $this->connect();
        $data = $this->request($this->connection,"select user_id,email,mot_de_passe from user");
        foreach ($data as $u) {
            if($credentials['email'] === $u['email']){
                $result = $u['user_id'];
            }
        }
        $this->disconnect();
        return $result;
    }
}