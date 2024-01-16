<?php

class NewsView extends View{

    public function show($data)
    {

        echo"<div class='section'>";
        echo"<h1>News</h1>";
        foreach ($data as $news){
            echo"<a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 600px' href='http://localhost/cars_website_scratch_version/public/News/$news[news_id]'>";
            echo"<div style='display: flex; flex-direction: row; align-items: center; width:100%'>";
            echo "<img src='$news[image_path]' style='height: 100%; width:230px; object-fit: contain'/>";
            echo "
                        <div style='display: flex;flex-direction: column; margin-left: 10px'>
                            <h6>$news[title]</h6>
                            <h6>Date : $news[date]</h6>
                        </div>";
            echo "
                    </div>
                </a>";
        }

        echo"</div>";
    }
}