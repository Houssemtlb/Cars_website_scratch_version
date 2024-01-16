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
                    echo"<a style='display: flex;justify-content: center;align-items: center;background-color: #001011' href='http://localhost/cars_website_scratch_version/public/News/$n[news_id]'>";
                        echo"<img style='height: 500px;object-fit: contain' src='$n[image_path]' alt='second slide'/>";
                    echo"</a>";
                    echo"<div class='carousel-caption d-none d-md-block'>";
                        echo"<h5>".$n["title"]."</h5>";
                    echo"</div>";
                echo"</div>";
            }else{
                echo"<div class='carousel-item'>";
                $first = false;
                echo"<a style='display: flex;justify-content: center;align-items: center;background-color: #001011' href='http://localhost/cars_website_scratch_version/public/News/$n[news_id]'>";
                    echo"<img style='height: 500px;object-fit: contain' src='$n[image_path]' alt='second slide'/>";
                echo"</a>";
                echo"<div class='carousel-caption d-none d-md-block'>";
                echo"<h5>".$n["title"]."</h5>";
                echo"</div>";
                echo"</div>";
            }
        }
        foreach ($pubs as $p){
            echo"<div class='carousel-item'>";
            echo"<a style='display: flex;justify-content: center;align-items: center;background-color: #001011' >";
            echo"<img style='height: 500px;object-fit: contain' src='$p[image_path]' alt='second slide'/>";
            echo"</a>";
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

