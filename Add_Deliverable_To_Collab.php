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
$ListofRequirementIDs = $_POST['AddDeliverableToCollab'];
$idObj = $_POST['collabID'];
if(!empty($ListofRequirementIDs))
{
  foreach($ListofRequirementIDs as $ret)
    {
      echo "<br>".$ret."<br>";
      $sqlDel = "SELECT DeliverableAssignedCollabIDs FROM Structure_Deliverables Where id = '$ret' ORDER BY id DESC";
      $Result1 = $connGlobal->query($sqlDel); 
      while($row2 = $Result1->fetch_assoc()) {
          $arrayDelIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);     
          }
      array_push($arrayDelIDs, $idObj);
      $newArrara = array_unique($arrayDelIDs);

      foreach($newArrara as $key => $bet)
      {
        if($bet ==0)
          {
            echo $bet ."hi";
            unset($newArrara[$key]);
            echo $bet ."hi";
          }
      }
      
      $dap = implode(",",array_map('intval', $newArrara));
      $sql = "UPDATE Structure_Deliverables SET DeliverableAssignedCollabIDs = '$dap' WHERE id='$ret'";
          if ($connGlobal->query($sql) === TRUE) {
              echo "Record Update successfully1<br>".$sql;
          } else {
              echo "Error Updating record: " . $connGlobal->error;
          }
      
    }
    $sqlDel2 = "SELECT CollabAssignedDeliverableIDs FROM Structure_Deliverables 
    Where id = '$idObj' ORDER BY id DESC";
    $Result1 = $connGlobal->query($sqlDel2); 
    while($row2 = $Result1->fetch_assoc()) {
        $arrayDelIDs= explode(",", $row2['CollabAssignedDeliverableIDs']);     
        }
    $newb = array_merge($arrayDelIDs, $ListofRequirementIDs);
    $newArrara = array_unique($newb);

    foreach($newArrara as $key => $bet)
    {
      if($bet ==0)
        {
          echo $bet ."hi";
          unset($newArrara[$key]);
          echo $bet ."hi";
        }
    }
    $dap = implode(",",array_map('intval', $newArrara));
    $sql = "UPDATE Structure_Deliverables SET CollabAssignedDeliverableIDs = '$dap'
    WHERE id='$idObj'";
        if ($connGlobal->query($sql) === TRUE) {
            echo "Record Update successfully1<br>".$sql;
        } else {
            echo "Error Updating record: " . $connGlobal->error;
        }
        
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>