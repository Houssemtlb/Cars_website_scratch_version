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

    public function fetch($query)
    {
        $this->connect();
        $data = $this->request($this->connection,$query);
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

}