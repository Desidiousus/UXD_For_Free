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
$idObj = $_POST['AddDeliverableToCollab'];

        $ListofRequirementIDs = $_POST['RemCollabDelID'];
        // $ListofRequirementIDs is an array of selected values
        $ReqIDStringComma = implode(",",array_map('intval', $ListofRequirementIDs));
        echo $idObj;
        $sql8 = "SELECT CollabAssignedDeliverableIDs FROM structure_deliverables WHERE id=$idObj";
        $Result1 = $connGlobal->query($sql8); 
        while($row2 = $Result1->fetch_assoc()) {
            $ListofAssReq= explode(",", $row2['CollabAssignedDeliverableIDs']);
            $OldReqString =$row2['CollabAssignedDeliverableIDs'];       
            }
        $ArrayMatch = array_intersect($ListofAssReq,$ListofRequirementIDs);
        $ArrayDiff = array_diff($ListofAssReq,$ListofRequirementIDs);
        foreach($ArrayMatch as $ReqAffect)
        {
          $sql = "SELECT DeliverableAssignedCollabIDs FROM structure_deliverables WHERE id = '$ReqAffect'";
          $Result1 = $connGlobal->query($sql); 
          while($row2 = $Result1->fetch_assoc()) {
              $ListofAssDel= explode(",", $row2['DeliverableAssignedCollabIDs']);   
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
            $sql2 = "UPDATE Structure_Deliverables SET DeliverableAssignedCollabIDs = '$ListOfAss' WHERE id='$ReqAffect'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }else{
            $sql2 = "UPDATE Structure_Deliverables SET DeliverableAssignedCollabIDs = NULL WHERE id='$ReqAffect'";
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
          $sql2 = "UPDATE Structure_Deliverables SET CollabAssignedDeliverableIDs = '$arrayComma' WHERE id='$idObj'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
            }
          }else{
            echo "jh";
            $sql2 = "UPDATE Structure_Deliverables SET CollabAssignedDeliverableIDs = NULL WHERE id='$idObj'";
            if ($connGlobal->query($sql2) === TRUE) {
                echo $ListOfAss;
            } else {
                echo "Error Updating record: " . $connGlobal->error;
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