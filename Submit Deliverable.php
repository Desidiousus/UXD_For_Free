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

$Page = $_POST["idDel4"];

// Get select requirement IDs into a string delimited with commas. 
if (isset($_POST['AssignRequirementIDsToDel'])) {
        $ListofRequirementIDs = $_POST['AssignRequirementIDsToDel'];
        // $ListofRequirementIDs is an array of selected values
        $ReqIDStringComma = implode(",",array_map('intval', $ListofRequirementIDs));
        $connGlobal = OpenCon();
        //select requirements that weren't assigned to this deliverable for future use
        $query1 = "SELECT * FROM Structure_Deliverables WHERE RequirementType IS NOT NULL 
          AND id NOT IN($ReqIDStringComma)";
        $result = mysqli_query($connGlobal, $query1);
        while($row2 = $result->fetch_assoc()) {
            echo('<br>okay '.$row2['id'].'<br>');
        }
    }


    //Format $_POST for INSERT
    
    $SolutionType = $_POST["DeliverableType"];
    $Page = $_POST["idDel4"];
    $Deadline = addslashes($_POST["DeliverableDeadline"]);
    $SolutionCoreIdea = addslashes ($_POST['Core_Idea']);
    $SolutionTitle = addslashes ($_POST['DeliverableTitle']);
    //Connect to DB
    $connGlobal = OpenCon();
    
echo $ReqIDStringComma;                                                
$query2 = "INSERT INTO Structure_Deliverables (DeliverableAssignedRequirementIDs, 
  DeliverableTitle, DeliverableDescription , DeliverableType)
  VALUES ('$ReqIDStringComma','$SolutionTitle','$SolutionCoreIdea',
  '$SolutionType')";
//Check Connection
if ($connGlobal->query($query2) === TRUE) {
    $last_id = mysqli_insert_id($connGlobal);
    echo $last_id . "<br>". $ReqIDStringComma;
    echo "New record created successfully";
} else {
    echo "Error: <br>" . $connGlobal->error;
}
    
$query333 ="SELECT * FROM Structure_Deliverables ORDER BY id DESC LIMIT 0, 1";
$result1111 = mysqli_query($connGlobal, $query333);

while($row = $result1111->fetch_assoc()) {
    $lastID = $row['id'];
    echo $lastID . "<br><br>";
}
//Select by from Requirements by ListofRequirementIDs based on $ReqIDStringComma string
$query22 = "SELECT * FROM Structure_Deliverables Where id IN ($ReqIDStringComma)";
$result = mysqli_query($connGlobal, $query22);
while($row = $result->fetch_assoc()) {
  if(isset($row['RequirementAssignedDeliverableIDs'])){
    $arrayDelIDs= explode(",", $row['RequirementAssignedDeliverableIDs']);
    $listOfDelOldID = array_unique(array_merge($arrayDelIDs,$ListofRequirementIDs), SORT_REGULAR);
    $fullArray = implode(",", $listOfDelOldID );
    $OldReqString =$row['RequirementAssignedDeliverableIDs'];
    if(!empty($arrayDelIDs) && $arrayDelIDs !=""){
      $NewStringDelim = $lastID . "," .$OldReqString;
    }
    else
    {
      $NewStringDelim = $lastID;
    }
    $NewStringDelim = rtrim($NewStringDelim, ",");
    $query33 = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs ='".$NewStringDelim."' 
      WHERE id = ".$row['id'];
        if (mysqli_query($connGlobal, $query33)) {
            echo "Record updated successfully";
            echo "<br>".$row['id']. "<br>";
            echo "<br>".$NewStringDelim. "<br>";

        } else {
            echo "Error updating record: " . mysqli_error($connGlobal). $fullArray;
        }
    }else{
    
        $query33 = "UPDATE Structure_Deliverables SET RequirementAssignedDeliverableIDs ='$lastID'
        WHERE id = ".$row['id'];
        
        if (mysqli_query($connGlobal, $query33)) {
            echo "Record updated successfully";
            echo "<br>".$row['id']. "<br>";
        } else {
            echo "Error updating record: " . mysqli_error($connGlobal);
        }
    }
  }
  // function to convert string and print 
  $time = strtotime($_POST['DeliverableDeadline']);
  if ($time) {
    $new_date = date('Y-m-d', $time);
    echo $new_date;
  } else {
    echo 'Invalid Date: ' . $_POST['DeliverableDeadline'];
    // fix it.
  }
  $query33 = "UPDATE Structure_Deliverables SET DeliverableDeadline = CAST('". $new_date ."' AS DATE) WHERE id = $lastID";
        
        if (mysqli_query($connGlobal, $query33)) {

            echo "Record updated successfully";
            echo "<br>".$new_date. "<br>";
        } else {
            echo "Error updating record: " . mysqli_error($connGlobal);
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