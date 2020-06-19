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
$ArrayPostNames = $_POST["RemoveDeliverable"];
$LocalNavTagID = $_POST["AddLocalTag"];

foreach ($ArrayPostNames as $value) {
        //Format $_POST for INSERT
        $value = (int)$value;
        $query = "UPDATE Structure_Deliverables SET DeliverableLocalNavTag = NULL, DeliverableGlobalNavTag = NULL WHERE id = $value"; 
        //Check Connection
        if ($connGlobal->query($query) === TRUE) {
            echo $value. "<br>";
            
        } else {
            echo "Error: " . $query . "<br>" . $connGlobal->error;
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