<?php
session_start();
require 'vendor/autoload.php';
$app = new \atk4\ui\App('CS:GO');
$layout = $app->initLayout('Centered');
$g = $_SESSION['nickname'];
if(isset($_SESSION['nickname'])){
  $message=$app->add(['message' , 'Hello!'.$_SESSION['nickname'] , 'type'=>'success', 'icon'=>'check circle']);
}
else{
  $message = $app->add(['message' , 'Добро пожаловать, игра состоится в 19:00<3 ','type'=>'success', 'icon'=>'check circle']);
}
