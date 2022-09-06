<?php

include 'db.php';

$id = $_GET['c'];

$query = "SELECT * FROM urls WHERE ID = :ID LIMIT 1 ";
$stmt = $conn->prepare($query);

$params = array(
    "ID" => $id
);

$stmt->execute($params);

$url = $stmt->fetch();

header("location: " . $url['long_url']);

?>