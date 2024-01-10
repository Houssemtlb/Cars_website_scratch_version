<?php

class AdminVehiculeAvisTableView extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div class='section'>";
            echo"<h1>Avis Vehicules </h1>";
            echo "<table id='AvisVehiculesTable' class='display' style='margin-top: 50px;width: 90%'>";
            echo "<thead>";
            echo "<th> avis_vehicule_id </th>";
            echo "<th> user_id </th>";
            echo "<th> vehicule_id </th>";
            echo "<th> valide </th>";
            echo "<th> note </th>";
            echo "<th> avis </th>";
            echo "<th> appreciation </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $avisVehicule) {
                echo "<tr>";
                echo "<td>" . $avisVehicule["avis_vehicule_id"] . "</td>";
                echo "<td>" . $avisVehicule["user_id"] . "</td>";
                echo "<td>" . $avisVehicule["vehicule_id"] . "</td>";
                echo "<td>" . $avisVehicule["valide"] . "</td>";
                echo "<td>" . $avisVehicule["note"] . "</td>";
                echo "<td>" . $avisVehicule["avis"] . "</td>";
                echo "<td>" . $avisVehicule["appreciation"] . "</td>";
                echo"<td><a href='http://localhost/cars_website_scratch_version/admin/AdminUsers/Bloquer/$avisVehicule[user_id]' class=\"btn btn-secondary\" style='margin: 10px'>Bloquer user</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminAvis/ValiderVehicule/$avisVehicule[avis_vehicule_id]' class=\"btn btn-secondary\" style='margin: 10px'>Valider</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminAvis/RefuserVehicule/$avisVehicule[avis_vehicule_id]' class=\"btn btn-secondary\" style='margin: 10px'>Refuser</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"</div>";

            echo"<script>
                    $(document).ready(function () {
                          $('#AvisVehiculesTable').DataTable({
                          searching: true
                          });
                       });
                 </script>";
        }
    }
}