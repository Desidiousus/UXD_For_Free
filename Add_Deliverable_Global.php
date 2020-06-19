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
$ArrayPostNames = $_POST["AddLocalTagToGlobal"];
$GlobalID = $_POST["AddGlobalTag"];
foreach ($ArrayPostNames as $value) {
  //Format $_POST for INSERT
  $value = (int)$value;
  $query = "UPDATE Structure_Deliverables SET 
  DeliverableGlobalNavTag = '".$_POST['AddGlobalTag']."'   WHERE id = $value";
  
  $sql2 = "SELECT * FROM structure_deliverables WHERE id = $value ";
  $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
  while($row2 = $result2->fetch_assoc()) {
    if(!empty($row2['LocalNavTags']))
    {
      $LocalTagName = $row2['id'];
      $query2 = "UPDATE Structure_Deliverables SET 
      DeliverableGlobalNavTag = '".$_POST['AddGlobalTag']."' 
      WHERE id = '$value'";
      if ($connGlobal->query($query2) === TRUE) {
          echo $_POST['AddGlobalTag'] . $LocalTagName. "<br>";
          
      } else {
          echo "Error: " . $query2 . "<br>" . $connGlobal->error;
      }
      $query2 = "UPDATE Structure_Deliverables SET 
      DeliverableGlobalNavTag = '".$_POST['AddGlobalTag']."' 
      WHERE DeliverableLocalNavTag = '$LocalTagName'";
      if ($connGlobal->query($query2) === TRUE) {
          echo $_POST['AddGlobalTag'] . $LocalTagName. "<br>";
          
      } else {
          echo "Error: " . $query2 . "<br>" . $connGlobal->error;
      }
    }
    
    }
    $query2 = "UPDATE Structure_Deliverables SET 
      DeliverableGlobalNavTag = '".$_POST['AddGlobalTag']."' 
      WHERE id = '$value'";
      if ($connGlobal->query($query2) === TRUE) {
          echo $_POST['AddGlobalTag'] . "lll<br>";
          
      } else {
          echo "Error: " . $query2 . "<br>" . $connGlobal->error;
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