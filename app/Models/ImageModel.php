<?php

class ImageModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO image(image_path]) VALUES (?)");
        $request->execute(array($data['image_path']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from image where image_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE image SET image_path = :image_path WHERE (image_id = :image_id)");
        $request->bindValue(':image_path', $data['image_path']);
        $request->bindValue(':image_id', $data['image_id']);
        $request->execute();
        $this->disconnect();
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from image where image_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from image");
        $this->disconnect();
        return $data;
    }

    public function getVehiculeImages($vehicule_id):array
    {
        $finalResult=[];
        $this->connect();
        $result =  $this->fetch("select image_path from (select image_id as ids from images_association_vehicule where vehicule_id = $vehicule_id) as j join image as i on i.image_id = j.ids");
        foreach ($result as $array){
            $finalResult[] = $array['image_path'];
        }
        return $finalResult;
    }
}