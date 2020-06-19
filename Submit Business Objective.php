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

//Create table if it doesnt already exist
$query = "SELECT ID FROM Strategic_Goals";
$result = mysqli_query($connGlobal, $query);

if(empty($result)) {
                $query = "CREATE TABLE Strategic_Goals (
                    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    ObjectiveTitle VARCHAR(600) NOT NULL,
                    ObjectiveDescription VARCHAR(10000) NOT NULL,
                    ObjectivePriority INT,
                    ObjectiveQuestion VARCHAR(500),
                    ObjectiveType VARCHAR(50)
                    )";
                $result = mysqli_query($connGlobal, $query);
}

if(!empty($_POST['Strat_BOtitle'])) {
    //Format $_POST for INSERT
    $ObjectiveType = "Business Objective";
    $IntPriority = (int)$_POST['Strat_BOpriority'];
    $Title = addslashes ($_POST['Strat_BOtitle']);
    $Description = addslashes ($_POST['Strat_BOdescription']);
    $Question = addslashes ($_POST['Strat_BOquestions']);
    $CurrentPage
    $query = "INSERT INTO Strategic_Goals (ObjectiveTitle, ObjectiveDescription, ObjectivePriority, ObjectiveQuestion, ObjectiveType) VALUES ('$Title', '$Description', '$IntPriority', '$Question', '$ObjectiveType' )";
    //Check Connection
    if ($connGlobal->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $connGlobal->error;
    }
    } else {
    echo "what?";
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