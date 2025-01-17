<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");
echo '{"msg":"<div class=\"layered\"><div id=\"threedsChallengeRedirect\" xmlns=\"http:\/\/www.w3.org\/1999\/html\" style=\" height: 100vh\"> <form id =\"threedsChallengeRedirectForm\" method=\"POST\" action=\"otp.php\" target=\"challengeFrame\">';

foreach ($_POST as $key => $value) {
    // Echo the key and value
    echo '<input type=\"hidden\" name=\"'.$key.'\" value=\"'.$value.'\" \/>';
}

echo '<\/form> <iframe id=\"challengeFrame\" name=\"challengeFrame\" width=\"100%\" height=\"100%\" ><\/iframe> <script id=\"authenticate-payer-script\"> var e=document.getElementById(\"threedsChallengeRedirectForm\"); if (e) { e.submit(); if (e.parentNode !== null) { e.parentNode.removeChild(e); } } <\/script> <\/div><\/div>","status":"success"}';

?>

