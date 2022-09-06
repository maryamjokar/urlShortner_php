<?php

include 'db.php';

$url = $_POST['long_url'];

$query = "INSERT INTO urls (long_url) VALUES (:long_url)";
$stmt = $conn->prepare($query);


// $result = $stmt->execute();

$params = array(
    "long_url" => $url
);

$result =$stmt->execute($params);

//var_dump($result);

header("location: /?i=" . $conn->lastInsertId());

?>