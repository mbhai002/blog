<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 14/04/2017
 * Time: 21:40
 */
session_start();
require  '../app/Autoloader.php';

App\Autoloader::register();

$app=\App\App::getInsance();












/*
if(isset($_GET['p'])){

    $p=$_GET['p'];
}else{

    $p='home';
}



ob_start();

if($p==='home'){

    require '../pages/home.php';
}elseif($p==='article'){
    require '../pages/single.php';
}elseif($p==='categorie'){
    require '../pages/categorie.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';

*/