<?php

// The URL for the API endpoint
$url = 'https://api.eventat.com/b/'.explode('/', $_GET['path'])[1].'/';
header("Content-Type: application/json; charset=UTF-8");

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, ''); // Handle all encodings: gzip, deflate, br, zstd
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

// Set headers
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0',
    'Accept: application/json, text/plain, */*',
    'Accept-Language: en-US,en;q=0.5',
    'Accept-Encoding: gzip, deflate, br, zstd',
    'Content-Type: application/json',
    'Referer: https://www.eventat.com/',
    'app: eventat',
    'Origin: https://www.eventat.com',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-site',
    'Connection: keep-alive'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Set PUT data
$put = json_decode(file_get_contents("php://input"));
$data = [
    'phone' => $put->phone,
    'name' => $put->name,
    'email' => $put->email,
    'terms' => true
];
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute cURL request
$response = curl_exec($ch);


// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Print the response
    echo $response;
}

// Close cURL session
curl_close($ch);
?>
