<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("wkolneek");
$layout = $app->initLayout('Centered');
$message = $app->add(['message' , 'Zybry yrochki, myasnoi','type'=>'info', 'icon'=>'info circle']);
