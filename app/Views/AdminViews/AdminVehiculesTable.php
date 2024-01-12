<?php

class AdminVehiculesTable extends View{

    public function show($vehicules)
    {
        if(!empty($vehicules)){
            echo"<div class='section'>";
            echo"<h1>Vehicules </h1>";
            echo "<table id='VehiculesTable' class='table table-striped table-dark table-bordered table-sm' style='margin-top: 30px; width: 80%'>";
            echo "<thead>";
            echo "<th> vehicule_id </th>";
            echo "<th> marque_id </th>";
            echo "<th> model </th>";
            echo "<th> version </th>";
            echo "<th> annee </th>";
            echo "<th> prix </th>";
            echo "<th> moteur </th>";
            echo "<th> cylindree </th>";
            echo "<th> consommation </th>";
            echo "<th> nb_cylindres </th>";
            echo "<th> nb_places </th>";
            echo "<th> type </th>";
            echo "<th> longueur </th>";
            echo "<th> largeur </th>";
            echo "<th> hauteur </th>";
            echo "<th> note </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($vehicules as $vehicule) {
                echo "<tr>";
                echo "<td>" . $vehicule["vehicule_id"] . "</td>";
                echo "<td>" . $vehicule["marque_id"] . "</td>";
                echo "<td>" . $vehicule["model"] . "</td>";
                echo "<td>" . $vehicule["version"] . "</td>";
                echo "<td>" . $vehicule["annee"] . "</td>";
                echo "<td>" . $vehicule["prix"] . "</td>";
                echo "<td>" . $vehicule["moteur"] . "</td>";
                echo "<td>" . $vehicule["cylindree"] . "</td>";
                echo "<td>" . $vehicule["consommation"] . "</td>";
                echo "<td>" . $vehicule["nb_cylindres"] . "</td>";
                echo "<td>" . $vehicule["nb_places"] . "</td>";
                echo "<td>" . $vehicule["type"] . "</td>";
                echo "<td>" . $vehicule["longueur"] . "</td>";
                echo "<td>" . $vehicule["largeur"] . "</td>";
                echo "<td>" . $vehicule["hauteur"] . "</td>";
                echo "<td>" . $vehicule["note"] . "</td>";
                echo"<td><a href='http://localhost/cars_website_scratch_version/admin/AdminVehicule/Modifier/$vehicule[vehicule_id]' class=\"btn btn-secondary\" style='margin: 10px'>Modifier</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminVehicule/Supprimer/$vehicule[vehicule_id]' class=\"btn btn-secondary\" style='margin: 10px'>Supprimer</a>
                         <a href='http://localhost/cars_website_scratch_version/public/Vehicule/$vehicule[vehicule_id]' class=\"btn btn-secondary\" style='margin: 10px'>Info</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"<a href='http://localhost/cars_website_scratch_version/admin/AdminVehicule/Ajouter' class=\"btn btn-secondary\" style='margin: 10px'>Ajouter</a>";
            echo"</div>";
        }
    }
}