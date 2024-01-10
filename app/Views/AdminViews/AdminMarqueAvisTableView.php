<?php

class AdminMarqueAvisTableView extends View{

    public function show($data)
    {
        if(!empty($data)){
            echo"<div class='section'>";
            echo"<h1>Avis Marques </h1>";
            echo "<table id='AvisMarquesTable' class='display' style='margin-top: 50px;width: 90%'>";
            echo "<thead>";
            echo "<th> avis_marque_id </th>";
            echo "<th> user_id </th>";
            echo "<th> marque_id </th>";
            echo "<th> valide </th>";
            echo "<th> note </th>";
            echo "<th> avis </th>";
            echo "<th> appreciation </th>";
            echo "<th>  </th>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($data as $avisMarque) {
                echo "<tr>";
                echo "<td>" . $avisMarque["avis_marque_id"] . "</td>";
                echo "<td>" . $avisMarque["user_id"] . "</td>";
                echo "<td>" . $avisMarque["marque_id"] . "</td>";
                echo "<td>" . $avisMarque["valide"] . "</td>";
                echo "<td>" . $avisMarque["note"] . "</td>";
                echo "<td>" . $avisMarque["avis"] . "</td>";
                echo "<td>" . $avisMarque["appreciation"] . "</td>";
                echo"<td><a href='http://localhost/cars_website_scratch_version/admin/AdminAvis/Bloquer/$avisMarque[user_id]' class=\"btn btn-secondary\" style='margin: 10px'>Bloquer user</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminAvis/ValiderMarque/$avisMarque[avis_marque_id]' class=\"btn btn-secondary\" style='margin: 10px'>Valider</a>
                         <a href='http://localhost/cars_website_scratch_version/admin/AdminAvis/RefuserMarque/$avisMarque[avis_marque_id]' class=\"btn btn-secondary\" style='margin: 10px'>Refuser</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo"</div>";

            echo"<script>
                    $(document).ready(function () {
                          $('#AvisMarquesTable').DataTable({
                          searching: true
                          });
                       });
                 </script>";
        }
    }
}