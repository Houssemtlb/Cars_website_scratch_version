<?php

class AdminContactsTable extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div style='background-color: #E3E3E3;display: flex;justify-content: center;width: 100%;height: 100%'>";
            echo"<div style='width: 80%'>";
            echo "<table class='table table-striped table-dark table-bordered' style='margin-top: 50px'>";
            echo "<thead>";
            echo "<th> Contact_id </th>";
            echo "<th> Nom </th>";
            echo "<th> Prenom </th>";
            echo "<th> Email </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $contact) {
                echo "<tr>";
                echo "<td>" . $contact["contact_id"] . "</td>";
                echo "<td>" . $contact["nom"] . "</td>";
                echo "<td>" . $contact["prenom"] . "</td>";
                echo "<td>" . $contact["email"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"<button type=\"button\" class=\"btn btn-secondary\" style='margin: 10px'>Ajouer</button>";
            echo"<button type=\"button\" class=\"btn btn-secondary\" style='margin: 10px'>Modifier</button>";
            echo"<button type=\"button\" class=\"btn btn-secondary\" style='margin: 10px'>Supprimer</button>";
            echo"</div>";
        }
    }
}