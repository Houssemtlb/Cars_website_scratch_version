<?php

function show($url)
    {
        echo "<span>";
        echo $url;
        echo "</span>";
    }
function removeSpaces($str) {
    return str_replace(' ', '', $str);
}