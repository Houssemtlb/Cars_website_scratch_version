<?php
class TopBarView extends View {

    public function show($data)
    {
        echo"<div class='bar'>";
            echo"<img src='http://localhost/cars_website_scratch_version/public/assets/images/logo.svg' alt='logo' style='height: 90%'/>";
            echo"<div id='social-medias'>";
        echo"<a href='https://www.facebook.com'><img src='http://localhost/cars_website_scratch_version/public/assets/images/facebook.svg' alt='logo' style='height: 90%; filter: invert(100%) sepia(30%) saturate(0%) hue-rotate(176deg) brightness(118%) contrast(101%);'/></a>";
        echo"<a href='https://www.insatgram.com'><img src='http://localhost/cars_website_scratch_version/public/assets/images/instagram.svg' alt='logo' style='height: 90%; filter: invert(100%) sepia(30%) saturate(0%) hue-rotate(176deg) brightness(118%) contrast(101%);'/></a>";
        echo"<a href='https://www.youtube.com'><img src='http://localhost/cars_website_scratch_version/public/assets/images/youtube.svg' alt='logo' style='height: 90%; filter: invert(100%) sepia(30%) saturate(0%) hue-rotate(176deg) brightness(118%) contrast(101%);'/></a>";
            echo"</div>";
        echo"</div>";
    }
}