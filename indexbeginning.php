<?php
require 'vendor/autoload.php';
$app= new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add(['Button' , ':DD']);
$button->icon='book';
$button2 = $app->add(['Button' , 'fD']);
$button2->icon='signal';
$button3 = $app->add(['Button' , 'rrrDD']);
$button3->icon='cloud';
?>
