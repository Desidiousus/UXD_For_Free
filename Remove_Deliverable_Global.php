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
$GlobalID = $_POST["RemoveGlobalTag"];
$ArrayPostNames = $_POST["RemoveDeliverable"];
$Page = (int)$_POST["ObjectiveID"];


foreach ($ArrayPostNames as $value) {
  $sql2 = "SELECT * FROM structure_deliverables WHERE id = $value ";
  $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
  while($row2 = $result2->fetch_assoc()) {
    if(!empty($row2['LocalNavTags']))
    {
        $query = "UPDATE Structure_Deliverables SET DeliverableGlobalNavTag = NULL   WHERE id = $value"; 
        //Check Connection
        if ($connGlobal->query($query) === TRUE) {
            echo $value. "<br>";
            
        } else {
            echo "Error: " . $query . "<br>" . $connGlobal->error;
        }
        $query = "UPDATE Structure_Deliverables SET DeliverableGlobalNavTag = NULL WHERE DeliverableLocalNavTag =".$row2['id']; 
        //Check Connection
        if ($connGlobal->query($query) === TRUE) {
            echo $value. "<br>";
            
        } else {
            echo "Error: " . $query . "<br>" . $connGlobal->error;
        }
    }
    $query = "UPDATE Structure_Deliverables SET DeliverableGlobalNavTag = NULL WHERE id = $value"; 
        //Check Connection
        if ($connGlobal->query($query) === TRUE) {
            echo $value. "<br>";
            
        } else {
            echo "Error: " . $query . "<br>" . $connGlobal->error;
        }
  }
}

$connGlobal->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
ob_enf_flush();
/*Strat_UserNeedTitle
Strat_User_Priority
Strat_UserNeedDescription
Strat_User_Questions
Strat_BOtitle
Strat_BOdescription
Strat_BOquestions
Strat_BOpriority
Strat_Type

ObjectiveTitle
ObjectiveDescription
ObjectivePriority
ObjectiveQuestion
ObjectiveType
*/
?>