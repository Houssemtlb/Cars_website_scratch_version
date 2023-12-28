<?php

class ComparatorView extends View{

    public function show($data)
    {
        $marques = $data['marques'];
        $vehicules = $data['vehicules'];

        echo "<div class='section'>
            <h1>Comparer</h1>
            <div>
                <form>
                    <select class='form-control' id='marque-selector'>";
        echo "<option>--</option>";
        foreach ($marques as $marque){
            echo "<option value='$marque[nom]'>$marque[nom]</option>";
        }
        echo "</select>";
        echo "<select class='form-control' id='model-selector'>";
        echo "<option>--</option>";
        foreach ($vehicules as $vehicule){
            echo "<option value='$vehicule[vehicule_nom]' name='$vehicule[marque_nom]' style='display: none'>$vehicule[vehicule_nom]</option>";
        }
        echo "</select>";
        echo "<select class='form-control' id='version-selector'>";
        echo "<option>--</option>";
        foreach ($vehicules as $vehicule){
            echo "<option value='$vehicule[version]' name='$vehicule[vehicule_nom]' style='display: none'>$vehicule[version]</option>";
        }
        echo "</select>";
        echo "<select class='form-control' id='annee-selector' >";
        echo "<option>--</option>";
        foreach ($vehicules as $vehicule){
            echo "<option value='$vehicule[annee]' name='".$vehicule['vehicule_nom'].$vehicule['version']."' style='display: none'>$vehicule[annee]</option>";
        }
        echo "</select>";
        echo "</form>
            </div>
        </div>
        <script>
            $('#marque-selector').change(function() {
                $('#model-selector>option[name=\"'+this.value+'\"]').show();
                $('#model-selector>option[name!=\"'+this.value+'\"]').hide();
                $('#model-selector').val('--');
                $('#version-selector').val('--');
                $('#annee-selector').val('--');
            });
            $('#model-selector').change(function() {
                $('#version-selector>option[name=\"'+this.value+'\"]').show();
                $('#version-selector>option[name!=\"'+this.value+'\"]').hide();
                $('#version-selector').val('--');
                $('#annee-selector').val('--');
            });
            $('#version-selector').change(function() {
                $('#annee-selector>option[name=\"'+$('#model-selector').val()+this.value+'\"]').show();
                $('#annee-selector>option[name!=\"'+$('#model-selector').val()+this.value+'\"]').hide();
                $('#annee-selector').val('--');
            });
        </script>";
    }
}
