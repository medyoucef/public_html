<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
$path = $_GET['path'];

if($path == "f/frontpage/"){
    require_once 'home.php';
    exit();
}

if(explode('/', $path)[0] == "b"){
    include 'b.php';
    $input = file_get_contents('php://input');
    bjosn($path,$input);
    exit();
}



if(explode('/', $path)[0] == "o"){
    include 'text.php';
    html($path);
    exit();
}




if(!explode('/', $path)[2]){
    include 'page.php';
    ejson(explode('/', $path)[1]);
}


if(explode('/', $path)[2] == "o"){
    include 'page.php';
    ojson($path);
}


?>

