<?php

class AvisVehiculeView extends View{

    public function show($data)
    {
        $vehicule = $data["vehicule"];
        $images = $data["images"];
        $avis = $data['avis'];
        $session = $data['session'];

        echo "
        <div class='section'>
            <h1>$vehicule[model]</h1>
            <img style='margin:40px; height: 600px;object-fit: contain' src='$images[0]' alt='logo'/>";
            echo"<button class='btn btn-secondary btn-lg btn-block' type='button' onclick=\"window.location ='http://localhost/cars_website_scratch_version/public/Vehicule/$vehicule[vehicule_id]'\">
                         Details du vehicule
                 </button>";
            echo"<h1>Avis</h1>";

            foreach ($avis as $a) {
                echo "
                <div class='card' style='margin-bottom: 20px;width: 800px; text-decoration: none;color: black; padding: 10px;border-radius: 8px'>
                    <div style='display: flex; flex-direction: row; align-items: center;justify-content: space-between; width:100%'>";
                echo "
                        <div style='display: flex;flex-direction: column; margin-left: 10px'>
                            <h6>Utilisateur : $a[nom] $a[prenom]</h6>
                            <h6>Note : $a[note]/5</h6>
                            <h6>Avis : $a[avis]</h6>
                            <h6>Appreciation : $a[appreciation] likes</h6>
                        </div>";
                if(isset($session)){
                    echo"<form method='post' action='http://localhost/cars_website_scratch_version/public/AvisVehicule/$vehicule[vehicule_id]/like'>
                            <input style='display: none'  name='avis_vehicule_id' value='$a[avis_vehicule_id]'>
                            <button type='submit' name='LikeButton' class='btn btn-sm'>Like</button>
                         </form>";
                }
                echo "
                    </div>
                </div>";
                }
            echo"</div>";
    }
}