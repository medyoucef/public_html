<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json; charset=UTF-8");

// The URL for the API endpoint
$url = 'https://www.kpay.com.kw/kpg/Brand.htm?config=getBrandDetails';

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, ''); // Handle all encodings: gzip, deflate, br, zstd
curl_setopt($ch, CURLOPT_POST, true); // Set request method to POST

// The POST fields
$data = 'brandId=202217198780682&paymentId=103416413000157589';

// Set the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Set headers
$headers = [
    'Accept: */*',
    'Accept-Language: en-US,en;q=0.5',
    'Accept-Encoding: gzip, deflate, br, zstd',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'X-Requested-With: XMLHttpRequest',
    'Origin: https://www.kpay.com.kw',
    'Connection: keep-alive',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'Priority: u=1',
    'Pragma: no-cache',
    'Cache-Control: no-cache'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

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
