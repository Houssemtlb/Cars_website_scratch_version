<?php
class PubliciteModel extends Model
{
    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO publicite(title,date,publicite) VALUES (?,?,?)");
        $request->execute(array($data['title'], $data['date'], $data['publicite']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection, "delete from publicite where pub_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE publicite SET  title = :title_value, date = :date_value, publicite = :pub_value WHERE (pub_id = :pub_id)");
        $request->bindValue(':pub_id', $data['pub_id']);
        $request->bindValue(':pub_value', $data['publicite']);
        $request->bindValue(':date_value', $data['date']);
        $request->bindValue(':title_value', $data['title']);
        $request->execute();
        $this->disconnect();
    }

    public function fetch($query)
    {
        $this->connect();
        $data = $this->request($this->connection, $query);
        $this->disconnect();
        return $data;
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection, "select * from publicite where pub_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getPicturesPaths($id)
    {
        $this->connect();
        $images_ids = $this->request($this->connection, "select image_id from images_association_publicite where pub_id = $id");
        $paths = [];
        foreach ($images_ids as $img_id) {
            $paths[] = $this->request($this->connection, "select image_path from image where image_id = $img_id[0]")[0]['image_path'];
        }
        return $paths;
    }

    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,'select * from publicite');
        $this->disconnect();
        return $data;
    }

    public function getAllWithImages(){
        $this->connect();
        return $this->fetch("select publicite.pub_id,title,j.image_path from (publicite join images_association_publicite as i on publicite.pub_id = i.pub_id) join image as j on i.image_id = j.image_id");
    }
}
