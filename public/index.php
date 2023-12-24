<?php
session_start();

require '../app/Core/init.php';

$app = new App;
//add a counter here to see if it increments at each request or no
$app->loadController();
