<?php

class AdminNewsTableView extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div class='section'>";
            echo"<h1>News</h1>";
            echo "<table class='table table-striped table-dark table-bordered' style='margin-top: 50px;width: 80%'>";
            echo "<thead>";
            echo "<th> news_id </th>";
            echo "<th> title </th>";
            echo "<th> date </th>";
            echo "<th> news </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $news) {
                echo "<tr>";
                echo "<td>" . $news["news_id"] . "</td>";
                echo "<td>" . $news["title"] . "</td>";
                echo "<td>" . $news["date"] . "</td>";
                echo "<td>" . $news["news"] . "</td>";
                echo"<td><a href='http://localhost/cars_website_scratch_version/admin/AdminNews/Modifier/$news[news_id]/#NewsForm' class=\"btn btn-secondary\" style='margin: 10px'>Modifier</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminNews/Supprimer/$news[news_id]' class=\"btn btn-secondary\" style='margin: 10px'>Supprimer</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"<a href='http://localhost/cars_website_scratch_version/admin/AdminNews/Ajouter/#NewsForm' class=\"btn btn-secondary\" style='margin: 10px'>Ajouter</a>";
            echo"</div>";
        }
    }
}