<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("CS:GO");
$layout = $app->initLayout('Centered');
$message = $app->add(['message' , 'Извини, твой скилл слишком мал!','type'=>'error', 'icon'=>'minus circle']);
