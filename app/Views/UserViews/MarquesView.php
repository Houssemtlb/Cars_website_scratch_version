<?php

class MarquesView extends View{

    public function show($data)
    {
        $p = 0;
        $size = $data['size'];
        $marques = $data['marques'];
        if(isset($data['link'])){
            $link = $data['link'];
        }

        echo "
    <div class='section'>
        <h1>Marques</h1>
        <div>
            <ul class='marques'>
";
        foreach ($marques as $marque) {
            echo "
                <li ".($size==="big"?"style='margin: 25px'":"").">";
                    if(isset($data['link'])){
                        echo"<a href='http://localhost/cars_website_scratch_version/public/AvisMarque/$marque[marque_id]'".($size==="big"?"style='height: 500px; width:350px'":"").">";
                    }else{
                        echo"<a href='http://localhost/cars_website_scratch_version/public/Marque/$marque[marque_id]'".($size==="big"?"style='height: 500px; width:350px'":"").">";
                    }
                        echo"<img src='$marque[image_path]' alt='logo de $marque[nom]'/>";
                        echo"<h2 ".($size==="big"?"style='font-size:50px'":"").">$marque[nom]</h2>
                    </a>
                </li>";
                $p++;
                if($p == ($size==="big"?3:5)){
                    echo"</ul>";
                    echo"</div>";
                    echo"<div>";
                    echo "<ul class='marques'>";
                }
        }
        echo "
            </ul>
        </div>
    </div>
";
    }
}