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
$Page = $_POST['ObjectiveID'];
//Create table if it doesnt already exist
$query = "SELECT ID FROM Structure_Deliverables";
$result = mysqli_query($connGlobal, $query);
if($_POST['actionR'] == "Update") {
    //Format $_POST for INSERT
    
    $query = "UPDATE Structure_Deliverables SET GlobalNavTags = '".$_POST['GlobalNavTagEdit']."' WHERE id = '".$_POST['idDelReq']."'"; 
    //Check Connection; 
  
    if ($connGlobal->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connGlobal->error;
    }
}else if($_POST['actionR'] == "Delete") {
    
    $sql = "UPDATE Structure_Deliverables SET DeliverableGlobalNavTag = NULL WHERE DeliverableGlobalNavTag = '".$_POST['idDelReq']."'";
    $sql2 = "DELETE FROM Structure_Deliverables WHERE id='".$_POST['idDelReq']. "'";
    //Check Connection
    if ($connGlobal->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connGlobal->error;
    }
    if ($connGlobal->query($sql2) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $connGlobal->error;
    }
    
}
header('Location: ' . $_SERVER['HTTP_REFERER']);


    

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