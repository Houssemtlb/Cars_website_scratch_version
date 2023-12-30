<?php
class DiaporamaView extends View{

    public function show($data)
    {
        $news = $data["news"];
        $pubs = $data["pubs"];
        $indicator =0;
        $first = true;

        echo"<div id='carousel' class='carousel slide' data-ride='carousel'>";
        echo"<ol class='carousel-indicators'>";
        foreach ($news as $n){
            if($first){
                echo"<li data-target='#carousel' data-slide-to='$indicator' class='active'></li>";
                $first = false;
            }else{
                echo"<li data-target='#carousel' data-slide-to='$indicator'></li>";
            }
            $indicator++;
        }
        foreach ($pubs as $p){
            echo"<li data-target='#carousel' data-slide-to='$indicator'></li>";
            $indicator++;
        }
        echo"</ol>";
        $first = true;
        echo"<div class='carousel-inner'>";
        foreach ($news as $n){
            if($first){
                echo"<div class='carousel-item active'>";
                $first = false;
                echo"<img class='d-block w-100' src=".$n["image_path"]." alt='second slide'/>";
                echo"<div class='carousel-caption d-none d-md-block'>";
                echo"<h5>".$n["title"]."</h5>";
                echo"</div>";
                echo"</div>";
            }else{
                echo"<div class='carousel-item'>";
                $first = false;
                echo"<img class='d-block w-100' src=".$n["image_path"]." alt='second slide'/>";
                echo"<div class='carousel-caption d-none d-md-block'>";
                echo"<h5>".$n["title"]."</h5>";
                echo"</div>";
                echo"</div>";
            }
        }
        foreach ($pubs as $p){
            echo"<div class='carousel-item'>";
            echo"<img class='d-block w-100' src=".$p["image_path"]." alt='second slide'/>";
            echo"<div class='carousel-caption d-none d-md-block'>";
            echo"<h5>".$p["title"]."</h5>";
            echo"</div>";
            echo"</div>";
        }
        echo"</div>";
        echo"<a class='carousel-control-prev' href='#carousel' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='carousel-control-next' href='#carousel' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>";

        echo"</div>";


    }
}

