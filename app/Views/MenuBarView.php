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
                <a href='http://localhost/cars_website_scratch_version/public/Comparateur'>
                    Comparateur
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/Marques'>
                    Marques
                </a>
            </li>
            <li>
                <a href='http://localhost/cars_website_scratch_version/public/Avis'>
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
        </ul>";
        echo "</div>";
    }
}