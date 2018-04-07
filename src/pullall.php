<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projectList";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM awaitingApproval"

$result = mysql_query($sql);

while


?>