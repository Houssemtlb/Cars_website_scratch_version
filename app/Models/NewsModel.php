<?php 

class NewsModel extends Model{

    public function insert($data)
    {
        $this->connect();
        $request = $this->connection->prepare("INSERT INTO news(title,date,news) VALUES (?,?,?)");
        $request->execute(array($data['title'], $data['date'], $data['news']));
        $this->disconnect();
    }

    public function delete($id)
    {
        $this->connect();
        $this->request($this->connection,"delete from news where news_id = $id");
        $this->disconnect();
    }

    public function update($data)
    {
        $this->connect();
        $request = $this->connection->prepare("UPDATE news SET  title = :title_value, date = :date_value, news = :news_value WHERE (news_id = :news_id)");
        $request->bindValue(':news_id', $data['news_id']);
        $request->bindValue(':news_value', $data['news']);
        $request->bindValue(':date_value', $data['date']);
        $request->bindValue(':title_value', $data['title']);
        $request->execute();
        $this->disconnect();
    }


    public function getAll()
    {
        $this->connect();
        $data = $this->request($this->connection,'select * from news');
        $this->disconnect();
        return $data;
    }

    public function get($id)
    {
        $this->connect();
        $data = $this->request($this->connection,"select * from news where news_id = $id");
        $this->disconnect();
        return $data[0];
    }

    public function getPicturesPaths($id)
    {
        $this->connect();
        $images_ids = $this->request($this->connection,"select image_id from images_association_news where news_id = $id");
        $paths = [];
        foreach ($images_ids as $img_id){
            $paths[] = $this->request($this->connection,"select image_path from image where image_id = $img_id[0]")[0]['image_path']; //this zero is very important cuz it's an array of rows (also arrays) andthe second zero is to get rid of the array(array(array(...
        }
        return $paths;
    }

    public function getAllWithImages(){
        $this->connect();
        return $this->fetch("select news.news_id,title,j.image_path from (news join images_association_news as i on news.news_id = i.news_id) join image as j on i.image_id = j.image_id");
    }

}