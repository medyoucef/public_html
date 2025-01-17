<?php
$servername = "localhost";
$username = "u292165191_sped";
$password = "Sky@01025584742";
$dbname = "u292165191_sped";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function  get($url){
    $json = file_get_contents($url);
    if ($json === false) {
       die("Error reading JSON file");
   }
   $data = json_decode($json, true);
   if ($data === null) {
    die("Error decoding JSON");
  }
   return $data;
}




$data = get('eventat.thanosx.icu.json');

foreach ($data as $section) {
    foreach ($section['items'] as $item) {
        if (isset($item['object']['name']['ar'])) {
            echo "<p>";
            $url = $item['object']['slug'];
            $event_id = $item['object']['id'];  // Assuming this is your unique event identifier
            $name = $item['object']['name']['ar'];
            $image = $item['object']['image'];
            $prices = get('https://eventat.thanosx.icu/apie/'.$url.'/prices/')[0]['price'];
            $description = get('https://eventat.thanosx.icu/apie/'.$url.'/');
            $description = isset($description['description']['ar']) ? $description['description']['ar'] : '';
            print_r($event_id);
            echo "</p>";

            $sql = "INSERT INTO events (event_id, url, name, image, prices, description) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bind_param("isssss", $event_id, $url, $name, $image, $prices, $description);
            $stmt->execute();
        }
    }
}

// Close the connection
$conn->close();

?>


