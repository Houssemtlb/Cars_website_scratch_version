<?php

class AdminMarquesTable extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div class='section'>";
            echo"<h1>Marques </h1>";
            echo "<table class='table table-striped table-dark table-bordered' style='margin-top: 50px;width: 80%'>";
            echo "<thead>";
            echo "<th> marque_id </th>";
            echo "<th> nom </th>";
            echo "<th> pays_origine </th>";
            echo "<th> siege_social </th>";
            echo "<th> annee_creation </th>";
            echo "<th> description </th>";
            echo "<th> note </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $marque) {
                echo "<tr>";
                echo "<td>" . $marque["marque_id"] . "</td>";
                echo "<td>" . $marque["nom"] . "</td>";
                echo "<td>" . $marque["pays_origine"] . "</td>";
                echo "<td>" . $marque["siege_social"] . "</td>";
                echo "<td>" . $marque["annee_creation"] . "</td>";
                echo "<td>" . $marque["description"] . "</td>";
                echo "<td>" . $marque["note"] . "</td>";
                echo"<td><a href='http://localhost/cars_website_scratch_version/admin/AdminMarque/Modifier/$marque[marque_id]' class=\"btn btn-secondary\" style='margin: 10px'>Modifier</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminMarque/Supprimer/$marque[marque_id]' class=\"btn btn-secondary\" style='margin: 10px'>Supprimer</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"<a href='http://localhost/cars_website_scratch_version/admin/AdminMarque/Ajouter' class=\"btn btn-secondary\" style='margin: 10px'>Ajouter</a>";
            echo"</div>";
        }
    }
}