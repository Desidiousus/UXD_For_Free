<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Project Outline</title>

<!-- Jquery CDN and Local JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.min.js"></script>
<!-- BootStrap CDN and Local CSS --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="BootStrap\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- BootStrap CDN and Local JS --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="BootStrap\js\bootstrap.min.js"></script>

<style>
   #swapView{font-size:22px;background-color:#003faa;color:white;text-align:center;padding-top:20px;padding-bottom:20px;width:100%;text-decoration:underline;}
   #swapView:hover {font-size:22px;background-color:white !important;color:#003faa !important;text-align:center;padding-top:20px;padding-bottom:20px;width:100%;}
   #selecta:hover{background-color:orange;color:white;}
   #selecta{padding-left:15px;padding-right:15px;padding-bottom:6px;padding-top:6px;width:100%;text-align:left;font-size:20px;}
   .ordered {width:100%;}
   li {width:100%;}
   .ordered {
  list-style-type: none;
  counter-reset: item;
  margin: 0;
  padding: 0;
}

ol > .listed {
  display: table;
  counter-increment: item;
  margin-bottom: 0.6em;
}

ol > .listed:before {
  content: counters(item, ".") ". ";
  display: table-cell;
  padding-right: 0.6em;    
}

.listed ol > .listed {
  margin: 0;
}

.listed ol > .listed:before {
  content: counters(item, ".") " ";
  width:60px;
}
#TiCToK:hover{color:red !important;background:white !important;}
</style>
</head>
<div class="navbar  "  style="padding:0;position:fixed;z-index:11;bottom:0;width:100%;">
                <button id="TiCToK" style="width:100%;margin:0;padding:0;font-size:30px;text-decoration:underline;float:right;color:white;background-color:red;" type="button" data-toggle="collapse" data-target="#ToC">
                    <strong style="width:100%;">TABLE OF CONTENTS</strong>
                </button>
</div>
    <div class="container" style="padding-top:0;border:3px solid black;margin-bottom:50px;padding-left:0;">

    
    <div id="ToC" class="collapse"style="position:fixed;background-color:white;z-index:10;bottom:50px;width:75%;">
    

        
<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "BettaBetaTest";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
return $conn;
}
$conn = OpenCon();
$sqlDel = "SELECT id, ObjectiveTitle,ObjectiveSeqID FROM Structure_Deliverables WHERE ObjectiveQuestion IS NOT NULL
 ORDER BY ObjectiveSeqID ASC";
$Result1 = $conn->query($sqlDel);
$count = 1;
echo '<div  style="overflow-y:scroll; overflow-x:hidden;padding:0;padding-right:25px;height:350px;width:80%;">';
while($row = $Result1->fetch_assoc()) 
{
$Reqcount = 1;
echo '

    <div style="padding-left:30px;">
    <a style="padding-left:30px;"href="#Obj'.$row["id"].'" >'.$row["ObjectiveSeqID"] .'.) '.$row["ObjectiveTitle"].'</a></div>';
    $sqlDel2 = "SELECT * FROM Structure_Deliverables WHERE RequirementObjectiveID = ".$row["id"] ." AND RequirementType IS NOT NULL
    ORDER BY ObjectiveSeqID, RequirementSeqID ASC";
    $Result2 = $conn->query($sqlDel2);
    
        while($row2 = $Result2->fetch_assoc()) 
        {
            
            echo '
            <div style="padding-left:80px;">
                <a href="#Req'.$row2["id"].'" >'.$row["ObjectiveSeqID"] .'.'.$row2["RequirementSeqID"] .'.) '.$row2["RequirementTitle"].'</a>
            </div>
            ';
            
            $DevCount = 1;
            $sqlDel3 = "SELECT * FROM Structure_Deliverables WHERE id IN (".$row2["RequirementAssignedDeliverableIDs"] .") 
            ORDER BY id ASC";
            $Result3 = $conn->query($sqlDel3);
            if($Result3)
            {
              while($row3 = $Result3->fetch_assoc()) 
                  {
                      echo '
                          <div style="padding-left:110px;">
                              <a  href="#Del'.$row2["id"].$row3["id"].'" >'.$row3["id"] .'.) '.$row3["DeliverableTitle"].'</a>
                          </div>
                      ';
                  }
              }
            }
            
    

}
echo '</div>';

?>
    </div>










<div class="container">

<ul style="list-style: none;padding-left:0;" >
<?php
$conn = OpenCon();
$sqlDel = "SELECT id, ObjectiveTitle,ObjectiveSeqID,ObjectiveDescription,ObjectiveQuestion FROM Structure_Deliverables WHERE ObjectiveQuestion IS NOT NULL
 ORDER BY ObjectiveSeqID ASC";
$Result1 = $conn->query($sqlDel);
$count = 1;
while($row = $Result1->fetch_assoc()) 
{       
echo'<li class="listed" style="font-size:35px;font-weight:450;">
  <h1 style="padding-left:5px;padding-bottom:5px;width:100%;background-color:#a3c09a;color:black;" id="Obj'.$row["id"].'" >['.$row["ObjectiveSeqID"] .']  '.$row["ObjectiveTitle"].'</h1>
  <h4 style="width:100%;padding-left:10px;">'.$row["ObjectiveQuestion"].'</h4>
  <div style="margin-left:10px;padding-left:20px;border-left:2px solid #a3c09a;font-size:18px;padding-right:100px;
  font-weight:380;">'.nl2br(str_replace("  ", "&nbsp;", $row["ObjectiveDescription"])).'</div>
  '; 
    
                    
  $sqlDel2 = "SELECT * FROM Structure_Deliverables WHERE RequirementObjectiveID = ".$row['id'] ." AND RequirementType IS NOT NULL
    ORDER BY ObjectiveSeqID, RequirementSeqID ASC";
  $Result2 = $conn->query($sqlDel2);
  if(!empty($Result2))
  {
  echo '<ul style="list-style: none;">';
  $Reqcount = 1;
  while($row2 = $Result2->fetch_assoc()) 
      {
        echo '<li class="listed" style="font-size:35px;font-weight:450;">
          <h1 style="padding-left:5px;padding-bottom:5px;width:100%;color:black;background-color:#e8dd67"  id="Req'.$row2["id"].'" >['.$row["ObjectiveSeqID"] .'-'.$row2["RequirementSeqID"] .']  '.$row2["RequirementTitle"].'</h1>
        <h4 style="padding-left:10px;width:100%;padding-right:100px;">'.$row2["RequirementType"].'</h4>
        <div style="margin-left:10px;padding-left:20px;border-left:2px solid #e8dd67;font-size:18px;padding-right:100px;
        font-weight:380;">'.nl2br(str_replace("  ", "&nbsp;", $row2["RequirementDescription"])).'</div>
        ';
        
        $arr = explode(',',$row2["RequirementAssignedDeliverableIDs"]);
        sort($arr);
        foreach($arr as $val)
        {
          $sqlDel3 = "SELECT * FROM Structure_Deliverables WHERE id = $val 
          ORDER BY id ASC";
          $Result3 = $conn->query($sqlDel3);
          if(!empty($Result3))
              {
                  $DevCount = 1;
                  echo '
                  <ul style="list-style: none;">';
                  while($row3 = $Result3->fetch_assoc()) 
                  { 
                      echo' 
                      <li class="listed" style="font-size:35px;font-weight:450;">
                          <h1 style="padding-left:5px;padding-bottom:5px;width:100%;color:black;background-color:#d98484"  
                          id="Del'.$row2["id"].$row3["id"].'" >['.$row["ObjectiveSeqID"] .'-'.$row2["RequirementSeqID"] .'-'
                          .$row3["id"] .']  '.$row3["DeliverableTitle"].'</h1>
                          ';
                          
                          if(!empty($row3["DeliverableAssignedCollabIDs"]))
                          {
                            $array = $row3["DeliverableAssignedCollabIDs"];
                            $ListofAssDel= explode(",", $row3['DeliverableAssignedCollabIDs']);   
                            echo '<h5 style="padding-left:10px;width:100%;padding-right:100px;">
                            <strong>Deliverable assigned to the following collaborator(s):</strong></h5>';
                            $newArray = array();
                            foreach($ListofAssDel as $value)
                            {
                              $sqlDel2 = "SELECT * FROM Structure_Deliverables WHERE id = ".$value ;
                              $Result2 = $conn->query($sqlDel2);
                              while($row10 = $Result2->fetch_assoc()) 
                                  {
                                    $newArray[] = $row10['CollabFirstLast'];
                                  }
                                  
                          }
                          $ListOfAss = implode(", ",$newArray);
                          echo '<h5 style="font-style: italic;padding-left:10px;width:100%;padding-right:100px;">
                          '. $ListOfAss.'</h5>';
                        }
                          
                          echo '<h4 style="padding-left:10px;width:100%;padding-right:100px;">TYPE - '.$row3["DeliverableType"].'</h4>';
                          if(!empty($row3["DeliverableDeadline"]))
                          {
                            $dadda = date("d/m/Y", strtotime($row3["DeliverableDeadline"]));
                            echo '<h5 style="padding-left:10px;width:100%;"><strong>Due by - </strong>'.$dadda.'</h5>';

                          }echo'
                          
                          <div style="margin-left:10px;padding-left:20px;border-left:2px solid #d98484;
                          font-size:18px;padding-right:100px;font-weight:380;">'.nl2br(str_replace("  ", "&nbsp;", str_replace("\t", "&nbsp&nbsp&nbsp&nbsp;",$row3["DeliverableDescription"]))).'</div>
                      </li>';
                      
                      $DevCount = $DevCount + 1;
                  }
                  echo '</ul>';
              } 
        }
        
        echo '</li>';
        $Reqcount = $Reqcount + 1;
      }
      echo '</ul>';
      
  }
  $count = $count + 1;
  echo '</li>';
  }
?>
</ul>
               
</div>
<body >
</body>
</html>