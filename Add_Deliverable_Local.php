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
$ArrayPostNames = $_POST['AddDeliverableLocal'];
$LocalTagID = $_POST['AddLocalTag'];
echo $LocalTagID;
$sql2 = "SELECT * FROM structure_deliverables WHERE id = $LocalTagID ";
  $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
  while($row2 = $result2->fetch_assoc()) {
    if(!empty($row2['DeliverableGlobalNavTag']))
    {
      foreach ($ArrayPostNames as $value) {

        $query = "UPDATE Structure_Deliverables SET 
        DeliverableLocalNavTag = '$LocalTagID ', DeliverableGlobalNavTag  = '".$row2['DeliverableGlobalNavTag']." '   
        WHERE id = '$value'"; 
      
        if ($connGlobal->query($query) === TRUE) {
          echo $LocalTagID;
            
        } else {
            echo "Couldnt update LNT: " . $query . "<br>" . $connGlobal->error  . "<br>";
        }
        
        //Check Connection
      
      
              
      }
    }else{

      foreach ($ArrayPostNames as $value) {

        $query = "UPDATE Structure_Deliverables SET DeliverableLocalNavTag = '$LocalTagID '   WHERE id = '$value'"; 
      
        if ($connGlobal->query($query) === TRUE) {
            
            
        } else {
            echo "Couldnt update LNT: " . $query . "<br>" . $connGlobal->error  . "<br>";
        }
        
        //Check Connection
      
      
              
      }
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