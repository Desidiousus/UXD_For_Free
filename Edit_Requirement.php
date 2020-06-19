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
$conn = OpenCon();
$connGlobal = OpenCon();
$idObj = (int)$_POST['ObjId'];
$idReq = (int)$_POST['ReqId'];

if ($_POST['actionR'] == 'Update') {
    
    $idObj = $_POST['ObjId'];
    $idReq = (int)$_POST['ReqId'];
    
    $TitleObj = addslashes(($_POST['EditReqTitle']));
    $DescObj = addslashes($_POST['RequirementDescription']);
    if("" != trim($_POST['StrategyObjectiveID'])){
        $lol = (int)$_POST['StrategyObjectiveID'];
        $idReq = (int)$_POST['ReqId'];
        $Reassign =  addslashes(($_POST['EditReqTitle']));
        $NewStrategyObjectiveID = $_POST['StrategyObjectiveID'];
        $sqlDel2 = "SELECT * FROM Structure_Deliverables WHERE id ='".$lol."'";
          echo $sqlDel2;
        $Result2 = $connGlobal->query($sqlDel2);
        while($row2 = $Result2->fetch_assoc()) 
        {
            $NewobjectiveID = $row2['id'];
            $NewObjSeq = $row2['ObjectiveSeqID'];
            $ObjectiveTitle = addslashes($row2['ObjectiveTitle']);
            $ObjectiveDescription = addslashes($row2['ObjectiveDescription']);
            $ObjectiveQuestion = addslashes($row2['ObjectiveQuestion']);
            $ObjectiveType = $row2['ObjectiveQuestion'];

            $sqlDel = "SELECT * FROM Structure_Deliverables  Where RequirementObjectiveID = 
              ".$NewobjectiveID ;
            $Result1 = $conn->query($sqlDel); 
            $rowcount=mysqli_num_rows($Result1);
            $rowcount = $rowcount + 1;
            
            $sql2 = "UPDATE Structure_Deliverables SET RequirementObjectiveID = '$lol',
              RequirementSeqID = '$rowcount', ObjectiveSeqID ='$NewObjSeq' WHERE id = '$idReq'";
              
             
            if ($connGlobal->query($sql2) === TRUE) {
              echo "<br>". $sql2;
            } else {
                echo "Error u record: " . $connGlobal->error;
            }
            
        }
        $sqlDel3 = "SELECT id FROM Structure_Deliverables Where RequirementObjectiveID = "
          .$NewStrategyObjectiveID ;
        echo "<br>".$sqlDel3;
            $Result3 = $conn->query($sqlDel3); 
            $rowcount3 = mysqli_num_rows($Result3);
            while($row3 = $Result3->fetch_assoc())
            {
                $sql4 = "UPDATE Structure_Deliverables SET RequirementSeqID = '$rowcount3' 
                  WHERE id =".$row3['id'];
                
                if ($connGlobal->query($sql4) === TRUE) {
                    echo "cool";
                 
                } else {
                    echo "Error u record: " . $connGlobal->error;
                  
                }
                $rowcount3 =  $rowcount3 - 1;
            }
            
    }     
    $sql = "UPDATE Structure_Deliverables SET RequirementDescription = '$DescObj',  
      RequirementTitle ='$TitleObj' WHERE id=".$_POST['ReqId'];

    $sql2 = "UPDATE Structure_Deliverables SET RequirementDescription = '$DescObj',  
      RequirementTitle ='$TitleObj' WHERE id=".$_POST['ReqId'];
    if ($connGlobal->query($sql) === TRUE) {
        echo "Record Update successfully<br>";
    } else {
        echo "Error Updating record: " .$sql2."<br><br>". $connGlobal->error;
    }
    if ($connGlobal->query($sql2) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error u record: " . $connGlobal->error;
    }
} else if ($_POST['actionR'] == 'Delete') {
  $sqlDel = "SELECT RequirementAssignedDeliverableIDs FROM Structure_Deliverables Where id = '$idReq' ORDER BY id DESC";
  $Result1 = $connGlobal->query($sqlDel); 
  while($row2 = $Result1->fetch_assoc()) {
      $arrayDelIDs= explode(",", $row2['RequirementAssignedDeliverableIDs']);     
      }
  
    foreach($arrayDelIDs as $Rad)
        {
          $sqlDel = "SELECT DeliverableAssignedRequirementIDs FROM Structure_Deliverables Where id = ".$_POST['ReqId']." ORDER BY id DESC";
          $Result1 = $connGlobal->query($sqlDel); 
          while($row2 = $Result1->fetch_assoc()) 
          {
            $OldIds =  explode(",", $row2['DeliverableAssignedRequirementIDs']);
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
          if(!empty($newArrara))
          {
            $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = NULL WHERE id='$Rad'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully13<br>".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }else{
            $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = '$dap' WHERE id='$Rad'";
            if ($connGlobal->query($sql) === TRUE) {
                echo "Record Update successfully1<br>".$sql;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }

          }
          

        }
  $sql2 = "DELETE FROM Structure_Deliverables WHERE id=".$_POST['ReqId'];
  if ($connGlobal->query($sql2) === TRUE) {
      echo "Record deleted successfully";
  }
  $idObj = $_POST['ObjId'];
$sqlDel = "SELECT id FROM Structure_Deliverables Where ObjectiveSeqID ='$idObj' AND RequirementType IS NOT NULL 
ORDER BY RequirementTitle DESC";
$Result1 = $connGlobal->query($sqlDel); 
$rowcount= mysqli_num_rows($Result1);
if($Result1){
    while($row3 = $Result1->fetch_assoc())
            {
                
                $sql44 = "UPDATE Structure_Deliverables SET RequirementSeqID = '$rowcount' WHERE 
                id ='".$row3['id']. "'";

        
                if ($connGlobal->query($sql44) === TRUE) {
                    
                    
                    echo $sql44 ."<br>" ;
                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                
                }$rowcount =  $rowcount - 1;
                
            } }
}
                                     
                
            


$connGlobal->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>