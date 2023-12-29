<?php

class ComparatorView extends View{

    public function show($data)
    {
        $marques = $data['marques'];
        $vehicules = $data['vehicules'];

        echo "<div class='section'>";
        echo "    <h1>Comparer</h1>";
        echo "    <div style='display: flex;flex-direction: row;justify-content: space-evenly'>";
        for($i = 1 ; $i < 5 ; $i++){
            echo "        <form>";
            echo "            <select class='form-control' id='marque-selector$i'>";
            echo "                <option>Marque</option>";

            foreach ($marques as $marque) {
                echo "                <option value='$marque[nom]'>$marque[nom]</option>";
            }

            echo "            </select>";
            echo "            <select class='form-control' id='model-selector$i'>";
            echo "                <option>Model</option>";

            foreach ($vehicules as $vehicule) {
                echo "                <option value='$vehicule[model]' name='$vehicule[marque_nom]' style='display: none'>$vehicule[model]</option>";
            }

            echo "            </select>";
            echo "            <select class='form-control' id='version-selector$i'>";
            echo "                <option>Version</option>";

            foreach ($vehicules as $vehicule) {
                echo "                <option value='$vehicule[version]' name='$vehicule[model]' style='display: none'>$vehicule[version]</option>";
            }

            echo "            </select>";
            echo "            <select class='form-control' id='annee-selector$i' >";
            echo "                <option>Annee</option>";

            foreach ($vehicules as $vehicule) {
                echo "                <option value='$vehicule[annee]' name='".$vehicule['model'].$vehicule['version']."' style='display: none'>$vehicule[annee]</option>";
            }

            echo "            </select>";
            echo "        </form>";
        }
        echo "    </div>";
        echo "</div>";

    }
}
