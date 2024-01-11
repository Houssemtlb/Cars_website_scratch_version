<?php

class AdminContactsTableView extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div class='section' style='height: 100%'>";
            echo"<h1>Contacts </h1>";
            echo "<table id='ContactsTable' class='table table-striped table-dark table-bordered' style='margin-top: 50px;width: 90%'>";
            echo "<thead>";
            echo "<th> contact_id </th>";
            echo "<th> nom </th>";
            echo "<th> prenom </th>";
            echo "<th> emai </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $contact) {
                echo "<tr>";
                echo "<td>" . $contact["contact_id"] . "</td>";
                echo "<td>" . $contact["nom"] . "</td>";
                echo "<td>" . $contact["prenom"] . "</td>";
                echo "<td>" . $contact["email"] . "</td>";
                echo"<td><a href='http://localhost/cars_website_scratch_version/admin/AdminParametres/Modifier/$contact[contact_id]' class=\"btn btn-secondary\" style='margin: 10px'>Modifier</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminParametres/Supprimer/$contact[contact_id]' class=\"btn btn-secondary\" style='margin: 10px'>Supprimer</a>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"<a href='http://localhost/cars_website_scratch_version/admin/AdminParametres/Ajouter' class=\"btn btn-secondary\" style='margin: 10px'>Ajouter</a>";
            echo"</div>";

        }
    }
}