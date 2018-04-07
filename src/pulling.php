<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "projectList";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$return_arr = array();

$fetch = mysql_query("SELECT SR_Benefit, LR_Benefit, DD_Benefit , Status FROM ApprovedESWW"); 

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
	$row_array['Status'] = $row['Status'];
    $row_array['SR_Benefit'] = $row['SR_Benefit'];
    $row_array['LR_Benefit'] = $row['LR_Benefit'];
    $row_array['DD_Benefit'] = $row['DD_Benefit'];
    $row_array['DD_Benefit'] = $row['DD_Benefit'];

    

    array_push($return_arr,$row_array);
}
?>