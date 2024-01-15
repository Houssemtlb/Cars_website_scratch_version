<?php

class Error404View extends View{
    public function show($data)
    {
        echo"<div style='display: flex; justify-content: center;align-items: center;flex-direction: column;background-color: #E3E3E3;height: 100%'>
                <h1>Erreur 404</h1>
                <img src='http://localhost/cars_website_scratch_version/public/assets/images/Error404.jpg'/>
             </div>";

    }
}
