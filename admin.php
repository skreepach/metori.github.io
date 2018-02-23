<?php
require 'vendor/autoload.php';
session_start();
require 'connection.php';
$app = new \atk4\ui\App('Админ игры');
$layout = $app->initLayout('Centered');
if((isset($_SESSION['admin_access'])) && ($_SESSION['admin_access'] !='XnbvVF')){
header('error.php');
}
$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$button = $app->add(['Button' , 'Logout']);
$button->link(['logout']);
