<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projectList";
//below this line is the data vars
$project=$_POST['project'];
$reference=$_POST['reference'];
$benefit=$_POST['total'];
$leader=$_POST['leader'];
$comments=$_POST['comments'];
$milestone=$_POST['milestone'];
$validated=$_POST['validated'];
$rag=$_POST['rag'];
$sr=$_POST['sr'];
$lr=$_POST['lr'];
$dd=$_POST['dd'];
$wb=$_POST['wb'];
$a400m=$_POST['a400'];
$other=$_POST['other'];
$status=$_POST['status'];
$type=$_POST['type'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ApprovedESWW (Project, Reference, Total_Benefit, Project_Leader, Comments, Next_Milestone_Date, Date_Validated, 
RAG, SR_Benefit, LR_Benefit, DD_Benefit, WB_Benefit, A400M, Other, Status, Type)
VALUES ('$project','$reference','$benefit', '$leader','$comments','$milestone','$validated',
'$rag','$sr','$lr','$dd','$wb','$a400m','$other','$status','$type')";
$sql2 = "DELETE from ApprovedESWW where Project = '$project'";
if ($conn->query($sql2) === TRUE) {
    echo "OLD RECORD REMOVED";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>