<?php
session_start();

require '../app/Core/init.php';

$app = new App;
$app->loadController();
