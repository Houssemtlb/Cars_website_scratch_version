<?php

class ContactModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO contact(nom,prenom,email) VALUES (?,?,?)");
        $request->execute(array($data['nom'], $data['prenom'], $data['email']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from contact where contact_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE email SET  nom = :nom_value, prenom = :prenom_value, email = :email_value WHERE (contact_id = :contact_id)");
        $request->bindValue(':contact_id', $data['contact_id']);
        $request->bindValue(':email_value', $data['email']);
        $request->bindValue(':prenom_value', $data['prenom']);
        $request->bindValue(':nom_value', $data['nom']);
        $request->execute();
        $this->disconnect();
    }


    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,'select * from contact');
        $this->disconnect();
        return $data;
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from contact where contact_id = $id");
        $this->disconnect();
        return $data[0];
    }

}