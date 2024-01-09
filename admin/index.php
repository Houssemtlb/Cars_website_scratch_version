<?php
session_start();
require '../app/Core/init.php';

$app = new AdminApp;
$app->loadController();
