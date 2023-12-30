<?php

class MarquesView extends View{

    public function show($data)
    {
        $p = 0;
        $size = $data['size'];
        $marques = $data['marques'];

        echo "
    <div class='section'>
        <h1>Marques</h1>
        <div>
            <ul class='marques'>
";
        foreach ($marques as $marque) {
            echo "
                <li>
                    <a href=''>
                        <img src='$marque[image_path]' alt='logo de $marque[nom]'/>
                        <h2>$marque[nom]</h2>
                    </a>
                </li>";
                $p++;
                if($p == 5){
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