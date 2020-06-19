<?php
//Connect to DB
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "BettaBetaTest";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
$Page = (int)$_POST["ObjectiveID"];
$connGlobal = OpenCon();
    
$LocalTag = addslashes($_POST['CreateEmployeeProfile']);
$sql = "INSERT INTO Structure_Deliverables (CollabFirstLast) VALUES ('$LocalTag')";

if ($connGlobal->query($sql) === TRUE) {
    echo "Record Update successfully";
} else {
    echo "Error Updating record: " . $connGlobal->error;
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>