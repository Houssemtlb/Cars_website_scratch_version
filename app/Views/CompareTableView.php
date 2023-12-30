<?php

class CompareTableView extends View {

    public function show($data)
    {
        if(!empty($data)){
            echo"<div style='background-color: #E3E3E3;display: flex;justify-content: center;width: 100%'>";
            echo "<table class='table table-striped table-dark table-bordered' style='margin-top: 50px'>";
            echo "<thead>";
            echo "<th> Vehicules </th>";
            foreach ($data as $rowHeader) {
                echo "<th>" . $rowHeader["model"] . "</th>";
            }
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<th>images</th>";
            foreach ($data as $vehicle) {
                echo "<td>";
                foreach ($vehicle["images"] as $path){
                    echo "<a><img src='$path' style='height:200px;object-fit: contain'/></a>";
                }
                echo"</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>version</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["version"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>annee</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["annee"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>prix</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["prix"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>moteur</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["moteur"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>cylindree</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["cylindree"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>consommation</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["consommation"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>nb_cylindres</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["nb_cylindres"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>nb_places</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["nb_places"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>type</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["type"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>longueur</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["longueur"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>largeur</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["largeur"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>hauteur</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["hauteur"] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            echo "<th>note</th>";
            foreach ($data as $vehicle) {
                echo "<td>" . $vehicle["note"] . "</td>";
            }
            echo "</tr>";
            echo "</tbody>";
            echo "</table>";
            echo"</div>";
        }
    }
}
