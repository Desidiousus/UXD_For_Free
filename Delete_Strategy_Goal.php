<?php
ob_start();
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
if ($_POST['action'] == 'Update') {
    $idObj = $_POST['idDel'];
    $TitleObj = addslashes($_POST['EditTitle']);
    $DescObj = addslashes($_POST['EditDescription']);
    $SeqIDOBJ = $_POST['SeqIDOBJ'];
    $sql2 = "UPDATE Structure_Deliverables SET ObjectiveDescription = 
      '$DescObj', ObjectiveTitle ='$TitleObj' WHERE ObjectiveSeqID='$idObj'";
    if ($connGlobal->query($sql2) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connGlobal->error;
    }
} else if ($_POST['action'] == 'Delete') {
    $SeqIDOBJ = $_POST['SeqIDOBJ'];
    $idObj = $_POST['idDel'];
    $sql3 = "DELETE FROM structure_Deliverables WHERE id=".$idObj;



if ($connGlobal->query($sql3) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connGlobal->error;
}
$idObj = $_POST['idDel'];
$sqlDel = "SELECT id FROM Structure_Deliverables WHERE ObjectiveQuestion IS NOT NULL
ORDER BY ObjectiveTitle DESC";
    $Result1 = $connGlobal->query($sqlDel); 
    $rowcount= mysqli_num_rows($Result1);
    if($Result1){
        while($row3 = $Result1->fetch_assoc())
            {
                                
                $sql4 = "UPDATE Structure_Deliverables SET ObjectiveSeqID = '$rowcount'
                WHERE id = ".$row3['id'];
                
               
                $sql31 = "UPDATE Structure_Deliverables SET ObjectiveSeqID = '$rowcount' 
                WHERE RequirementObjectiveID = ".$row3['id'];
                
                if ($connGlobal->query($sql4) === TRUE) {
                                    
                                    
                    echo $sql4 ."<br>" .$rowcount;
                                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                                
                }
               


                                
                            
                if ($connGlobal->query($sql31) === TRUE) {
                                    
                                    
                    echo $sql31 ."<br>" ;
                                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                                
                }
               
                $rowcount =  $rowcount - 1;
                                
                            } }

//Set RequirementObjectiveIDs to NULL
$sqlDel = "SELECT id, RequirementAssignedDeliverableIDs FROM Structure_Deliverables Where RequirementObjectiveID ='$idObj'
ORDER BY RequirementTitle DESC";
$Result1 = $connGlobal->query($sqlDel); 

if($Result1){
  while($row3 = $Result1->fetch_assoc())
  {
    $ListofAssDel= explode(",", $row3['RequirementAssignedDeliverableIDs']);
    $ListOfAss = implode(",",array_map('intval', $ListofAssDel)); 
    $ReqID = $row3['id'];
    foreach ($ListofAssDel as $val)
      {
        $sqlDel = "SELECT id, DeliverableAssignedRequirementIDs FROM Structure_Deliverables 
        Where id ='$val'";
        $Result51 = $connGlobal->query($sqlDel); 
        if($Result1){
          while($row5 = $Result51->fetch_assoc())
          {
            $ListofAssDe1l= explode(",", $row5['DeliverableAssignedRequirementIDs']);
            foreach ($ListofAssDe1l as $key => $val1)
            {
              if($val1 == $ReqID)
                  {
                    unset($ListofAssDe1l[$key]);
                  }
            }
            $ListOfAs1s = implode(",",array_map('intval', $ListofAssDe1l));
            if(!empty($ListOfAs1s))
            {
              $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = '".$ListOfAs1s."' 
              WHERE id=".$row5['id'];
              if ($connGlobal->query($sql) === TRUE) {
                  echo "Record Update successfully1<br>".$sql;
              } else {
                  echo "Error Updating record: " . $connGlobal->error;
              }

            }else{
              $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedRequirementIDs = NULL 
              WHERE id=".$row5['id'];
              if ($connGlobal->query($sql) === TRUE) {
                  echo "Record Update successfully1<br>".$sql;
              } else {
                  echo "Error Updating record: " . $connGlobal->error;
              }

            } 
            
          }
        }
      }
    
      
      $sql3 = "DELETE FROM Structure_Deliverables WHERE RequirementObjectiveID = $idObj";

      
      if ($connGlobal->query($sql3) === TRUE) {
          
          
          echo $sql3 ."<br>" ;
      
      } else {
          echo "Error u record: " . $connGlobal->error;
      
      }
      $rowcount =  $rowcount - 1;
      
  } }
} else {
    //invalid action!
}
$connGlobal->close();

?>