<?php

class AdminUsersTableView extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div class='section' style='height: 100%'>";
            echo"<h1>Utilisateurs</h1>";
            echo "<table id='UsersTable' class='display' style='margin-top: 50px;width: 80%'>";
            echo "<thead>";
            echo "<th> user_id </th>";
            echo "<th> nom </th>";
            echo "<th> prenom </th>";
            echo "<th> date de naissance </th>";
            echo "<th> sexe </th>";
            echo "<th> valide </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $user) {
                echo "<tr>";
                echo "<td>" . $user["user_id"] . "</td>";
                echo "<td>" . $user["nom"] . "</td>";
                echo "<td>" . $user["prenom"] . "</td>";
                echo "<td>" . $user["date_naissance"] . "</td>";
                echo "<td>" . $user["sexe"] . "</td>";
                echo "<td>" . $user["valide"] . "</td>";
                echo"<td style='display:flex;flex-direction: row;'><a href='http://localhost/cars_website_scratch_version/admin/AdminUsers/Modifier/$user[user_id]' class=\"btn btn-secondary\" style='margin: 10px'>Modifier</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminUsers/Supprimer/$user[user_id]' class=\"btn btn-secondary\" style='margin: 10px'>Supprimer</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminUsers/Valider/$user[user_id]' class=\"btn btn-secondary\" style='margin: 10px'>Valider</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminUsers/Bloquer/$user[user_id]' class=\"btn btn-secondary\" style='margin: 10px'>Bloquer</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"<a href='http://localhost/cars_website_scratch_version/admin/AdminUsers/Ajouter' class=\"btn btn-secondary\" style='margin: 10px'>Ajouter</a>";
            echo"</div>";
            
            echo"<script>
                    $(document).ready(function () {
                          $('#UsersTable').DataTable({
                          searching: true
                          });
                       });
                 </script>";
        }
    }
}