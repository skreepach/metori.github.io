<?php
session_start();

require 'vendor/autoload.php';
$app = new \atk4\ui\App(":DDDDDD");
$layout = $app->initLayout('Centered');
$g = $_SESSION['nickname'];
$message=$app->add(['message' , 'Hello!'.$_SESSION['nickname' , ['type']=>'success']);
