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

if(!empty($_POST['Strat_UserNeedTitle'])) {
    //Format $_POST for INSERT
    $Title = addslashes ($_POST['Strat_UserNeedTitle']);
    $Description = addslashes ( $_POST['Strat_UserNeedDescription']);
    $Question = addslashes ( $_POST['Strat_User_Questions']);
    $CurrentPage= $_POST['ObjectiveSequencer'];
    $query = "INSERT INTO structure_deliverables (ObjectiveTitle, ObjectiveDescription, 
    ObjectiveQuestion, ObjectiveSeqID) VALUES 
    ('$Title', '$Description', '$Question', '$CurrentPage' )";
    //Check Connection
    
    if ($connGlobal->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connGlobal->error;
    }
    $sqlDel = "SELECT id FROM Structure_Deliverables WHERE ObjectiveSeqID IS NOT NULL AND ObjectiveQuestion IS NOT NULL
    ORDER BY ObjectiveTitle DESC";
    $Result1 = $connGlobal->query($sqlDel); 
    $rowcount= mysqli_num_rows($Result1);
    if($Result1){
        while($row3 = $Result1->fetch_assoc())
            {
                                
                $sql4 = "UPDATE Structure_Deliverables SET ObjectiveSeqID = 
                '$rowcount' WHERE id =".$row3['id'];
                
                if ($connGlobal->query($sql4) === TRUE) {
                                    
                                    
                    echo $sql4 ."<br>" ;
                                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                                
                }
                $sql4 = "UPDATE Structure_Deliverables SET ObjectiveSeqID = '$rowcount' WHERE RequirementObjectiveID = ".$row3['id']." ";
                
                if ($connGlobal->query($sql4) === TRUE) {
                                    
                                    
                    echo $sql4 ."<br>" ;
                                
                } else {
                    echo "Error u record: " . $connGlobal->error;
                                
                }
               
               
                $rowcount =  $rowcount - 1;
                                
                            } }
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
Strat_Type*/
?>