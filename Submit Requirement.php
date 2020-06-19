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

if(!empty($_POST['RequirementType'])) {
    //Format $_POST for INSERT
    $RequirementType = $_POST["RequirementType"];
    $StratID = (int)$_POST['idDel10'];
    $ScopeReqDesc = addslashes ($_POST['RequirementDescription']);
    $RequirementTitle = addslashes ($_POST['RequirementTitle']);

    //Connect to DB
    $connGlobal = OpenCon();

    $sql = "SELECT id, ObjectiveTitle, ObjectiveDescription, ObjectiveQuestion , ObjectiveSeqID 
    FROM Structure_Deliverables WHERE id = '$StratID' ";
    $result = $connGlobal->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $ObjectiveTitleHidden = addslashes ( $row["ObjectiveTitle"]);
      $ObjectiveDescriptionHidden = addslashes ( $row["ObjectiveDescription"]);
      $ObjectiveQuestionHidden = addslashes ( $row["ObjectiveQuestion"]);
      $ObjectiveSeqID = (int)$row["ObjectiveSeqID"];
      $ObjSeqID = $row["id"];
      echo $ObjSeqID . $ObjSeqID;
      
      }}
      $conn = OpenCon();
      $sqlDel = "SELECT * FROM Structure_Deliverables Where RequirementObjectiveID = '$ObjSeqID' ";
      $Result1 = $conn->query($sqlDel); 
      $rowcount=mysqli_num_rows($Result1);
      $rowcount = $rowcount + 1;                            
    $query = "INSERT INTO Structure_Deliverables (RequirementSeqID, RequirementObjectiveID, ObjectiveSeqID, RequirementTitle, RequirementDescription, RequirementType)
    VALUES ('$rowcount','$ObjSeqID','$ObjectiveSeqID', '$RequirementTitle', '$ScopeReqDesc', '$RequirementType')";
    //Check Connection
    if ($connGlobal->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connGlobal->error;
    }
}
 $activeObj = $_POST['idDel10'];
$sqlDel = "SELECT id FROM Structure_Deliverables Where RequirementObjectiveID ='$activeObj' 
ORDER BY RequirementTitle DESC";
$Result1 = $connGlobal->query($sqlDel); 
$rowcount= mysqli_num_rows($Result1);
if($Result1){
    while($row3 = $Result1->fetch_assoc())
            {
                
                $sql4 = "UPDATE Structure_Deliverables SET RequirementSeqID = '$rowcount' WHERE 
                id ='".$row3['id']. "'";

                $sql3 = "UPDATE Structure_Deliverables SET RequirementSeqID = '$rowcount' WHERE 
                id = ".$row3['id'];
    
                
                if ($connGlobal->query($sql3) === TRUE) {
                    
                    
                    echo $sql3 ."<br>" ;
                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                
                }
                if ($connGlobal->query($sql4) === TRUE) {
                    
                    
                    echo $sql4 ."<br>" ;
                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                
                }$rowcount =  $rowcount - 1;
                
            } }
$connGlobal->close();


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