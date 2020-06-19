<?php
//Connect to DB
ob_start();
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
$Page = $_POST["idDel4"];
$RequirementSolution = (int)$_POST['RequirementDeliverable'];
$connGlobal = OpenCon();
if ($_POST['actionR'] == 'Update') {
  $idObj = $_POST['idDelReq'];
  $reqID = $_POST['idDelReq3'];
  
  $TitleDel = addslashes(($_POST['DeliverableTitle']));
  $CoreDel = addslashes($_POST['DeliverableCore']);
  $sql = "UPDATE Structure_Deliverables SET DeliverableDescription = '$CoreDel',  DeliverableTitle ='$TitleDel' WHERE id='$idObj'";
    if ($connGlobal->query($sql) === TRUE) {
        echo "Record Update successfully";
    } else {
        echo "Error Updating record: " . $connGlobal->error;
    }
    //If Remove check boxes checked
    if (isset($_POST['RemoveAssignedDeliverables'])) 
    {
        $ListofRequirementIDs = $_POST['RemoveAssignedDeliverables'];
        // $ListofRequirementIDs is an array of selected values
        $ReqIDStringComma = implode(",",array_map('intval', $ListofRequirementIDs));
        echo $idObj;
        $sql8 = "SELECT DeliverableAssignedRequirementIDs FROM structure_deliverables WHERE id=$idObj";
        $Result1 = $connGlobal->query($sql8); 
        while($row2 = $Result1->fetch_assoc()) {
            $ListofAssReq= explode(",", $row2['DeliverableAssignedRequirementIDs']);
            $OldReqString =$row2['DeliverableAssignedRequirementIDs'];       
            }
        $ArrayMatch = array_intersect($ListofAssReq,$ListofRequirementIDs);
        $ArrayDiff = array_diff($ListofAssReq,$ListofRequirementIDs);
        foreach($ArrayMatch as $ReqAffect)
        {
          $sql = "SELECT RequirementAssignedDeliverableIDs FROM structure_deliverables WHERE id = '$ReqAffect'";
          $Result1 = $connGlobal->query($sql); 
          while($row2 = $Result1->fetch_assoc()) {
              $ListofAssDel= explode(",", $row2['RequirementAssignedDeliverableIDs']);   
              }
          foreach ($ListofAssDel as $key =>$val)
          {
            if($val == $idObj)
            {
              unset($ListofAssDel[$key]);
            }
          }
          $ListOfAss = implode(",",array_map('intval', $ListofAssDel));
          if(!empty($ListOfAss))
          {
            $sql2 = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs = '$ListOfAss' WHERE id='$ReqAffect'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }else{
            $sql2 = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs = NULL WHERE id='$ReqAffect'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }
          if(!empty($ArrayDiff))
          {
          $arrayComma = implode(",",array_map('intval', $ArrayDiff));
          echo $arrayComma. "hi<br>";
          $sql2 = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = '$arrayComma' WHERE id='$idObj'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }else{
            echo "jh";
            $sql2 = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = NULL WHERE id='$idObj'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }
        }
    }
    if(isset($_POST['NewAssignedDeliverables']))
    {
      $ListofRequirementIDs = $_POST['NewAssignedDeliverables'];
      
      // $ListofRequirementIDs is an array of selected values
      $ReqIDStringComma = implode(",",array_map('intval', $ListofRequirementIDs));
      foreach ($ListofRequirementIDs as $Rad)
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
      $sqlDel = "SELECT DeliverableAssignedRequirementIDs FROM Structure_Deliverables Where id = '$idObj' ORDER BY id DESC";
      $Result1 = $connGlobal->query($sqlDel); 
      while($row2 = $Result1->fetch_assoc()) {
          $arrayDelIDs= explode(",", $row2['DeliverableAssignedRequirementIDs']);     
          }
      if(!empty($arrayDelIDs))
      {
        foreach($arrayDelIDs as $key => $ret)
            {
              if($ret ==0)
              {
                echo $ret ."hi";
                unset($arrayDelIDs[$key]);
                echo $ret ."hi";
              }
            }
        $newReqIDs = array_merge($arrayDelIDs, $ListofRequirementIDs);
        $newArrara = array_unique($newReqIDs);
        $dap = implode(",",array_map('intval', $newArrara));
        $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = '$dap' WHERE id='$idObj'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
      }else{
        $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = '$ReqIDStringComma' WHERE id='$idObj'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
      }
} 
$time = strtotime($_POST['DeliverableDeadline']);
if ($time) {
  $new_date = date('Y-m-d', $time);
  echo $new_date;
} else {
  echo 'Invalid Date: ' . $_POST['DeliverableDeadline'];
  // fix it.
}
$query33 = "UPDATE Structure_Deliverables SET DeliverableDeadline = CAST('". $new_date ."' AS DATE) WHERE id = $idObj";
      
      if (mysqli_query($connGlobal, $query33)) {

          echo "Record updated successfully";
          echo "<br>".$new_date. "<br>";
      } else {
          echo "Error updating record: " . mysqli_error($connGlobal);
      }   
    
}else if ($_POST['actionR'] == 'Delete') {

  $idObj = $_POST['idDelReq'];
  $sqlDel = "SELECT DeliverableAssignedRequirementIDs FROM Structure_Deliverables Where id = '$idObj' ORDER BY id DESC";
  $Result1 = $connGlobal->query($sqlDel); 
  while($row2 = $Result1->fetch_assoc()) {
      $arrayDelIDs= explode(",", $row2['DeliverableAssignedRequirementIDs']);     
      }
  
  foreach($arrayDelIDs as $Rad)
      {
        $sqlDel = "SELECT RequirementAssignedDeliverableIDs FROM Structure_Deliverables Where id = '$Rad' ORDER BY id DESC";
        $Result1 = $connGlobal->query($sqlDel); 
        while($row2 = $Result1->fetch_assoc()) 
        {
          $OldIds =  explode(",", $row2['RequirementAssignedDeliverableIDs']);
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
        $sql = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs = '$dap' WHERE id='$Rad'";
          if ($connGlobal->query($sql) === TRUE) {
              echo "Record Update successfully1<br>".$sql;
          } else {
              echo "Error Updating record: " . $connGlobal->error;
          }


      }
      $idObj = $_POST['idDelReq'];
  $sqlDel = "SELECT DeliverableAssignedCollabIDs FROM Structure_Deliverables Where id = '$idObj' ORDER BY id DESC";
  $Result1 = $connGlobal->query($sqlDel); 
  while($row2 = $Result1->fetch_assoc()) {
      $arrayDelIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);     
      }

    foreach($arrayDelIDs as $Rad)
        {
          $sqlDel = "SELECT CollabAssignedDeliverableIDs FROM Structure_Deliverables Where id = '$Rad' ORDER BY id DESC";
          $Result1 = $connGlobal->query($sqlDel); 
          while($row2 = $Result1->fetch_assoc()) 
          {
            $OldIds =  explode(",", $row2['CollabAssignedDeliverableIDs']);
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
          echo $dap;
          $sql = "UPDATE Structure_Deliverables SET CollabAssignedDeliverableIDs = '$dap' WHERE id='$Rad'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>".$sql;
            } else {
                echo "Error Updating record: 2" . $connGlobal->error;
            }


        }
  $sql233 = "DELETE FROM Structure_Deliverables WHERE id=".$idObj;
  if ($connGlobal->query($sql233) === TRUE) {
      echo "Record deleted successfully2222";
    } else {
      echo "Error Updating record: " . $connGlobal->error;
  }
  
  } 



$connGlobal->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
//$url = 'http://localhost/BettaBetaTest/MainDashBoard.php?activeObjective='.$Page.'&activeRequirement='. $RequirementSolution;
//header( "Location: $url" );
//ob_enf_flush();
?>