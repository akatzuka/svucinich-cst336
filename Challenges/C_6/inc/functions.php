<?php

include '../../../dbConnection.php';

$conn = getDatabaseConnection("c_6");


//next query allows for SQL injection because of the single quotes
//$sql = "SELECT * FROM lab9_user WHERE username = '$username'";

$sql = "INSERT INTO poll (pollId, userChoice) VALUES ('$pollId', '$userChoice')";


$stmt = $conn->prepare($sql);
$stmt->execute();
//$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);



$sql = "SELECT pollId, userChoice FROM poll";
$stmt = $conn->prepare($sql);
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC);
echo json_encode($record);
?>