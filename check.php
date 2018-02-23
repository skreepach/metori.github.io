<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("CS");
if((isset($_SESSION['admin_access'])) && ($_SESSION['admin_access'] =='XnbvVF')){
header('Location:admin.php');
}
$layout = $app->initLayout('Centered');
$check = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check->addField('password',['type'=>'password' , 'required' => TRUE]);
$form = $app->layout->add('Form');
$form->setModel($check);

    $form->onSubmit(function($form){
      $pass = 'it2018';

      if($form->model['password'] == $pass){
        $_SESSION['admin_access'] = 'XnbvVF';
        return new \atk4\ui\jsExpression('document.location = "admin.php"');
      }else{
        return new \atk4\ui\jsExpression('document.location = "error.php"');
      }
    });
