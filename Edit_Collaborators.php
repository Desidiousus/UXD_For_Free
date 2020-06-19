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

if($_POST['actionR'] == "Update") {
    //Format $_POST for INSERT
    $FL = $_POST['CollabFirstLast'];
    $JT = $_POST['CollabJobTitle'];
    $CP = $_POST['CollabPhone'];
    $CE = $_POST['CollabEmail'];
    $query = "UPDATE Structure_Deliverables SET CollabFirstLast = '$FL',CollabJobTitle='$JT',CollabPhone='$CP',CollabEmail='$CE'
    WHERE id = '".$_POST['CollabID']."'"; 
    //Check Connection; 
    $sql2 = "SELECT * FROM Structure_Deliverables WHERE id = '".$_POST['CollabID']."';";
    $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
    while($row2 = $result2->fetch_assoc()) {
        $NewLocalNavTag = $row2['CollabFirstLast'] ;  
        $query2 = "UPDATE Structure_Deliverables SET CollabFirstLast = '".$_POST['CollabTitle']."' WHERE DeliverableGlobalNavTag = '$NewLocalNavTag'";
        if ($connGlobal->query($query2) === TRUE) {
            echo "New record created yeqw<br>";
            echo $NewLocalNavTag;
        } else {
            echo "Error: " . $query2 . "<br>" . $connGlobal->error;
        }
    }
    if ($connGlobal->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connGlobal->error;
    }

    //Update DeliverableAssignedCollabID
    $DelIDStringComma = implode(",",array_map('intval', $ListofRequirementIDs));
      foreach ($ListofDelIDs as $Rad)
      {
        $sqlDel = "SELECT RequirementAssignedDeliverableIDs FROM Structure_Deliverables Where id = '$Rad' ORDER BY id DESC";
        $Result1 = $connGlobal->query($sqlDel); 
        while($row2 = $Result1->fetch_assoc()) 
        {
          if($row2['RequirementAssignedDeliverableIDs'] != NULL && $row2['RequirementAssignedDeliverableIDs'] != "" )
          {
            $OldIds =  explode(",", $row2['RequirementAssignedDeliverableIDs']);
            
            array_push($OldIds, $idObj);
            $newArrara = array_unique($OldIds);
            $dap = implode(",",array_map('intval', $newArrara));
            echo $dap;
            $sql = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs = '$dap' WHERE id='$Rad'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>2222".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }else{
            $newDelIDs = $idObj;
            $sql = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs = '$newDelIDs' WHERE id='$Rad'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }
          
        }
      }
}else if($_POST['actionR'] == "Delete") {
    
  $idObj = $_POST['CollabID'];
  $sqlDel = "SELECT CollabAssignedDeliverableIDs FROM Structure_Deliverables Where id = '$idObj' ORDER BY id DESC";
  $Result1 = $connGlobal->query($sqlDel); 
  while($row2 = $Result1->fetch_assoc()) {
      $arrayDelIDs= explode(",", $row2['CollabAssignedDeliverableIDs']);     
      }
  
    foreach($arrayDelIDs as $Rad)
        {
          $sqlDel = "SELECT DeliverableAssignedCollabIDs FROM Structure_Deliverables Where id = '$Rad' ORDER BY id DESC";
          $Result1 = $connGlobal->query($sqlDel); 
          while($row2 = $Result1->fetch_assoc()) 
          {
            $OldIds =  explode(",", $row2['DeliverableAssignedCollabIDs']);
          }
          foreach($OldIds as $key => $val)
          {
            if($val == $idObj)
            {
              unset($OldIds[$key]);
            }
          }
          $newArrara = array_unique($OldIds);
          $dap = implode(",",array_map('intval', $newArrara));
          $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedCollabIDs = '$dap' WHERE id='$Rad'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }


        }
  $sql2 = "DELETE FROM Structure_Deliverables WHERE id=".$idObj;
  if ($connGlobal->query($sql2) === TRUE) {
      echo "Record deleted successfully";
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