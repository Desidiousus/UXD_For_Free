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
$connGlobal = OpenCon();
$LocalTag = addslashes(($_POST['LocalTagTitle']));
    
$sql = "INSERT INTO Structure_Deliverables (LocalNavTags) 
VALUES ('$LocalTag')";   
    

if ($connGlobal->query($sql) === TRUE) {
    echo "Record Update successfully";
} else {
    echo "Error Updating record: " . $connGlobal->error;
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>