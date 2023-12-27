<?php

class ComparatorView extends View{

    public function show($data)
    {
        $marques = $data["marques"];
        $vehicles = $data["vehicules"];

        echo"<div class='section'>
<h1>
Comparer des models
</h1>
<div>
<form>
<select class='form-control'>";
        foreach ($marques as $marque){
            echo"<option>$marque[nom]</option>";
        }
echo"</select>";
        echo"<select>";
        foreach ($marques as $marque){
            echo"<option>$marque[nom]</option>";
        }
echo"</select>
</form>
</div>
</div>";
    }
}

//you can do that thing with js or jq