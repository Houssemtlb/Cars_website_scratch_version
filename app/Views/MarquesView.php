<?php

class MarquesView extends View{

    public function show($data)
    {
        $size = $data['size'];
        $marques = $data['marques'];

        echo "
    <div class='marques'>
        <h1>Marques :</h1>
        <div>
            <ul class='marques'>
";

        foreach ($marques as $marque) {
            echo "
                <li>
                    <a href=''>
                        <img src='$marque[image_path]' alt='logo'/>
                        <h2>$marque[nom]</h2>
                    </a>
                </li>
    ";
        }

        echo "
            </ul>
        </div>
    </div>
";

    }
}