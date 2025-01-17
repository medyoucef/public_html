<?php
header('Content-type: text/xml');
$id=explode('?',$_SERVER['REQUEST_URI']);
$url = 'https://www.kpay.com.kw/kpg/paymentrouter.htm?'.$id[1];
// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, ''); // Handle all encodings: gzip, deflate, br, zstd
curl_setopt($ch, CURLOPT_POST, true); // Set request method to POST
curl_setopt($ch, CURLOPT_POSTFIELDS, ''); // Set empty POST fields

// Set headers
$headers = [
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0',
    'Accept: */*',
    'Accept-Language: en-US,en;q=0.5',
    'Accept-Encoding: gzip, deflate, br, zstd',
    'X-Requested-With: XMLHttpRequest',
    'Origin: https://www.kpay.com.kw',
    'Connection: keep-alive',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'Priority: u=1',
    'Pragma: no-cache',
    'Cache-Control: no-cache',
    'Content-Length: 0'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Print the response
    //echo $response;
    echo '<msg>200|null|1|0|0|0|null|null|0|null</msg>';
}

// Close cURL session
curl_close($ch);
?>
