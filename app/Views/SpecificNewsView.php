<?php

class SpecificNewsView extends View
{

    public function show($data)
    {
        echo"<div class='section'>
                <h1>$data[title]</h1>
                <img src='$data[image_path]' alt='news pic' />
                <h6 style='width: 80%; margin:30px'>$data[news]</h6>
             </div>";


    }
}