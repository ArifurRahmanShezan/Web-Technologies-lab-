<?php
$data = ["name" => "John", "email" => "john@example.com"];
$json = json_encode($data); // Encode to JSON


$myjsonobj=json_decode($json);  // Decode to JSON
echo $json;

?>