<?php
class MenuBarView extends View {

    public function show($data)
    {
        echo "<div class='bar' style='justify-content: center'>";
        echo "<ul class='menu'>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/News'>
                    News
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/Compare'>
                    Comparateur
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/Marque'>
                    Marques
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/AvisMarque'>
                    Avis
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/GuideAchat'>
                    Guide d'achat
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/Contact'>
                    Contact
                </a>
            </li>
            <li>";
                if(isset($data)){
                    echo"<a href='http://localhost/cars_website_scratch_version/public/Account'>
                        Mon compte
                    </a>";
                }else{
                    echo"<a href='http://localhost/cars_website_scratch_version/public/Login'>
                        Se connecter
                    </a>";
                }
            echo"</li>
        </ul>";
        echo "</div>";
    }
}