<?php

setcookie("ar",  $_POST['ar'], time()+60*60*24*100, "/");
setcookie("en",  $_POST['en'], time()+60*60*24*100, "/");
setcookie("de",  $_POST['de'], time()+60*60*24*100, "/");



$ar = @file_get_contents("ar.json");
if ($ar === false) {
    echo "Failed to fetch contents from ";
} else {
   
    $ar = str_replace(
    "####",
    $_POST['ar'],
    $ar
   );
   $ar = str_replace(
    "*****",
    $_POST['de'],
    $ar
   );
   $myfile = fopen("../assets/i18n/ar.json", "w") or die("Unable to open file!");
   fwrite($myfile, $ar);
   fclose($myfile);
}

$en = @file_get_contents("en.json");
if ($en === false) {
    echo "Failed to fetch contents from ";
} else {
     $en = str_replace(
    "####",
    $_POST['en'],
    $en
   );
   $en = str_replace(
    "*****",
    $_POST['de'],
    $en
   );
    $myfile = fopen("../assets/i18n/en.json", "w") or die("Unable to open file!");
   fwrite($myfile, $en);
   fclose($myfile);
}


header("Location: index.php");