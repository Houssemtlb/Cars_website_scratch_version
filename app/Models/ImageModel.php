<?php

class ImageModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO image(image_path) VALUES (?)");
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
        //le path d'une image est sense etre unique
        $this->connect();
        $request = $this->connection->prepare("UPDATE image SET image_path = :image_path WHERE (image_path = :old_path)");
        $request->bindValue(':image_path', $data['path']);
        $request->bindValue(':old_path', $data['old_path']);
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
        $result =  $this->fetch("select image_path from (select image_id as ids from images_association_vehicule where vehicule_id = $vehicule_id) as j join image as i on i.image_id = j.ids");
        foreach ($result as $array){
            $finalResult[] = $array['image_path'];
        }
        return $finalResult;
    }

    public function getMarqueLogo($id)
    {
        $result =  $this->fetch("select image_path,image_path from (select image_id as ids from images_association_marque where marque_id = $id) as j join image as i on i.image_id = j.ids");
        return $result[0];
    }

    public function getMarqueAllVehiculeImages($id):array
    {
        return $this->fetch("select i.image_path, v.vehicule_id from ((vehicule as v join images_association_vehicule as a on v.vehicule_id = a.vehicule_id) join image as i on i.image_id = a.image_id) where v.marque_id = $id");
    }

    public function getVehiculeFirstImage($id)
    {
        return $this->fetch("select i.image_path from image as i join images_association_vehicule as a on i.image_id = a.image_id where vehicule_id = $id")[0];
    }


    public function addVehiculeImage($vehicule_id,$image_path)
    {
        $array = ["image_path" => $image_path];
        $this->insert($array);
        $lastImage = $this->fetch("select * from image order by image_id desc limit 1")[0];
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO images_association_vehicule(image_id,vehicule_id) VALUES (?,?)");
        $request->execute(array($lastImage["image_id"],$vehicule_id));
        $this->disconnect();
    }

    public function addMarqueImage($marque_id,$image_path)
    {
        $array = ["image_path" => $image_path];
        $this->insert($array);
        $lastImage = $this->fetch("select * from image order by image_id desc limit 1")[0];
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO images_association_marque(image_id,marque_id) VALUES (?,?)");
        $request->execute(array($lastImage["image_id"],$marque_id));
        $this->disconnect();
    }
}