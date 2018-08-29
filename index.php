<?php
require_once 'vendor/autoload.php';
require_once 'Configuration.php';

$databaseConfiguration=new App\Core\DatabaseConfiguration(
  Configuration::DATABASE_HOST,  
  Configuration::DATABASE_USER,
  Configuration::DATABASE_PASS,
  Configuration::DATABASE_NAME  
  



);
$databaseConnection=new App\Core\DatabaseConnection($databaseConfiguration);

$url = filter_input(INPUT_GET, 'URL');
$httpMethod = filter_input(INPUT_SERVER, 'REEQUEST_METHOD');
$userModel=new App\Models\UserModel($databaseConnection);
#$user=$userModel->getAll();


#print_r($user);

$categoryModel = new App\Models\CategoryModel($databaseConnection);

$controller = new \App\Controllers\MainController($databaseConnection);
$controller->home();
$data = $controller->getData();
#$categories = $categoryModel->getAll();

foreach($data as $name => $value){
$$name=$value;

}

require_once 'views/Main/home.php';
#print_r($categories);
