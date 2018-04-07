<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projectList";
$project=$_POST['title'];
$name=$_POST['Name'];
$savings=$_POST['Savings'];
$finish=$_POST['finished'];
$comment=$_POST['Comments'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO awaitingApproval (Title, Leader, Benefit, Comments, Finish)
VALUES ('$project', '$name', '$savings', '$comment', '$finish')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>