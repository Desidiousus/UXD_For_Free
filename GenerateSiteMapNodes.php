<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>



<!-- BootStrap CDN and Local CSS --> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- Jquery CDN and Local JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- BootStrap CDN and Local JS --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<style>
.All{text-align:left;}
.DelHov:hover{background-color:black !important;color:#d98484 !important;}
.ReqHover:hover{background-color:black !important;color:#e8dd67 !important;}
.ObjHover:hover{background-color:black !important;color:#a3c09a !important;}
.SiteHov:hover{background-color:black !important;color:#FF9900 !important;display:block;}
.hide{display:none;}
.modal-body{padding:0;}
</style>
<script>
  function DelViewer(DelID, GNTID) {
    $(".All").hide();
    $(".LocalGroups").hide();
    $(".DelHeader").hide();
    $(".ReqHeader").hide();
    $(".DelHeader"+GNTID).show();
    $(".DemHeader").hide();
    $("#DelModal"+DelID).show();
    $("#DemHeader3"+DelID).show();
    //$("#DelHeader"+DelID).show();
  }
  function ReqViewer(ReqID) {
    $(".All").hide();
    $("#ReqHeader"+ReqID).show();
    $("#ReqBody"+ReqID).show();
  }
  function ObjViewer(ObjID) {
    $(".All").hide();
    $("#ObjBody"+ObjID).show();

  }
  function GNTViewer(GNTID) {
    $(".All").hide();
    $(".LocalGroups").hide();
    $(".LocalDHeader").hide();
    $(".GNTHover").hide();
    $(".DemHeader").hide();
    $(".ReqHeader").hide();
    $("#GNTHeader"+GNTID).show();
    $(".DTGNT"+GNTID).show();
    

  }
</script>
</head>
<body>
<div class="container">
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
$connGlobal = OpenCon();
$bab = "SELECT id, GlobalNavTags FROM structure_deliverables where GlobalNavTags IS NOT NULL";
$Result12 = $connGlobal->query($bab); 
while($row3 = $Result12->fetch_assoc()) {
  echo" <a class='SiteHov'data-toggle='modal' data-target='#ORDModal' id='".$row3['GlobalNavTags']."' onclick='GNTViewer(".$row3['id'].")'class='btn btn-primary ' href='#' style='padding-left:10px;width:100%;text-align:left;background-color:#FF9900;color:black;display:block;'><h4 >***".$row3['GlobalNavTags']."***</h4></a><br>\r\n
  ";
}
echo '
<div id="ORDModal" class="modal fade" >
  <div class="modal-dialog "   style="margin:0;">

    <!-- Modal content-->
    <div class="modal-content" style="width:950px;padding:15px;background-color:white;">
      <div class="modal-header"  style="padding:0;background-color:#d98484">';
    $bab = "SELECT id, GlobalNavTags FROM structure_deliverables where GlobalNavTags IS NOT NULL  ";
    $Result12 = $connGlobal->query($bab); 
    while($row3 = $Result12->fetch_assoc()) {
      echo '
      <a  onclick="GNTViewer('.$row3['id'].')"class="GNTHover hide" id="GNTHeader'.$row3['id'].'" 
      href="#" style="padding-left:10px;padding-top:15px;background-color:#FF9900;color:black;width:100%;text-align:left;">
        <h1 >'.$row3['GlobalNavTags'].'</h1>
      </a>';
    }
    echo '
      </div>
    <div class="modal-body" style="background-color:#fffafa;">   
    ';
    
    //MODAL BODY - Local Deliverables 
    $sql8 = "SELECT id, LocalNavTags,DeliverableGlobalNavTag FROM structure_deliverables WHERE
    DeliverableGlobalNavTag IS NOT NULL AND LocalNavTags IS NOT NULL ORDER BY id ASC";
    $Result1 = $connGlobal->query($sql8); 
    while($row2 = $Result1->fetch_assoc()) {
      echo'
      <div class="dropdown LocalGroups hide DelHeader DTGNT'.$row2['DeliverableGlobalNavTag'].'">
        <a style="font-size:30px;text-align:left;width:100%;" class="btn btn-primary" 
        type="button" data-toggle="collapse" data-target="#Local1'.$row2['id'].'" 
        aria-expanded="false" aria-controls="collapseExample">
        <h1><strong>'.$row2['id'].'.) '.$row2['LocalNavTags'].'</strong></h1>
        </a>
        <div class="collapse" id="Local1'.$row2['id'].'">
          ';
      $sql82 = "SELECT DeliverableDeadline,DeliverableAssignedCollabIDs,DeliverableAssignedRequirementIDs,id,DeliverableTitle,
      DeliverableType,DeliverableDescription, DeliverableGlobalNavTag FROM structure_deliverables WHERE 
      DeliverableLocalNavTag = '".$row2['id']."' ORDER BY id ASC";
      $Result21 = $connGlobal->query($sql82); 
      while($row222 = $Result21->fetch_assoc()) {
        echo' <a  onclick="DelViewer('.$row222['id'].','.$row2['DeliverableGlobalNavTag'].')" class="btn btn-primary DelHov" href="#" style="padding-left:10px;background-color:#99DFFF;color:black;
        width:100%;text-align:left;padding-left:60px;">
        <h4 >'.$row222['id'].'.) '.$row222['DeliverableTitle'].'</h4></a>
        '
        ;
          
            
          
      
      
    //DELIVERABLE MODAL WINDOW
    }
    echo'</div>
      </div>';
      
  }
//MODAL BODY - Independent Deliverables 
$sql8 = "SELECT DeliverableDeadline,DeliverableAssignedCollabIDs,DeliverableAssignedRequirementIDs,id,DeliverableTitle,
DeliverableType,DeliverableDescription, DeliverableGlobalNavTag FROM structure_deliverables WHERE
DeliverableGlobalNavTag IS NOT NULL AND LocalNavTags IS NULL ORDER BY id ASC";
$Result1 = $connGlobal->query($sql8); 
while($row2 = $Result1->fetch_assoc()) {
$arrayCollIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);
$ReqCollIDs= explode(",", $row2['DeliverableAssignedRequirementIDs']);
$ReqCollIDs1= implode(",", $ReqCollIDs);
//O.R.D. HEADERS - DELIVERABLES
echo '
  <div onclick="DelViewer('.$row2['id'].','.$row2['DeliverableGlobalNavTag'].')" class="LocalDHeader hide modal-header DelHov hide LDGNT'.$row2['DeliverableGlobalNavTag'].'" href="#" style="padding-left:10px;padding-top:15px;
      background-color:#d98484;color:black;width:100%;text-align:left;padding-left:10px;" id ="DemHeader3'.$row2['id'].'">
        <h1 >'.$row2['id'].'.) '.$row2['DeliverableTitle'].'</h1>
      </div>';}

  //MODAL BODY - Independent Deliverables 
  $sql8 = "SELECT DeliverableDeadline,DeliverableAssignedCollabIDs,DeliverableAssignedRequirementIDs,id,DeliverableTitle,
  DeliverableType,DeliverableDescription, DeliverableGlobalNavTag FROM structure_deliverables WHERE
  DeliverableGlobalNavTag IS NOT NULL AND LocalNavTags IS NULL AND DeliverableLocalNavTag IS NULL ORDER BY id ASC";
  $Result1 = $connGlobal->query($sql8); 
  while($row2 = $Result1->fetch_assoc()) {
  $arrayCollIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);
  $ReqCollIDs= explode(",", $row2['DeliverableAssignedRequirementIDs']);
  $ReqCollIDs1= implode(",", $ReqCollIDs);
  //O.R.D. HEADERS - DELIVERABLES
  echo '
    <div onclick="DelViewer('.$row2['id'].','.$row2['DeliverableGlobalNavTag'].')"class="DelHeader modal-header DelHov hide DTGNT'.$row2['DeliverableGlobalNavTag'].'" href="#" style="padding-left:10px;padding-top:15px;
        background-color:#d98484;color:black;width:100%;text-align:left;padding-left:10px;" id ="DelHeader3'.$row2['id'].'">
          <h1 >'.$row2['id'].'.) '.$row2['DeliverableTitle'].'</h1>
        </div>';}
        

    //MODAL BODY - Independent Deliverables 
    $sql8 = "SELECT DeliverableDeadline,DeliverableAssignedCollabIDs,DeliverableAssignedRequirementIDs,id,DeliverableTitle,
    DeliverableType,DeliverableDescription, DeliverableGlobalNavTag FROM structure_deliverables WHERE
    DeliverableGlobalNavTag IS NOT NULL AND LocalNavTags IS NULL ORDER BY id ASC";
    $Result1 = $connGlobal->query($sql8); 
    while($row2 = $Result1->fetch_assoc()) {
    $arrayCollIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);
    $ReqCollIDs= explode(",", $row2['DeliverableAssignedRequirementIDs']);
    $ReqCollIDs1= implode(",", $ReqCollIDs);
    //O.R.D. HEADERS - DELIVERABLES
    echo '
      

      <div class="modal-body hide All" id="DelModal'.$row2['id'].'" style="background-color:#fffafa;">';
       
        
    
        if(!empty($row2['DeliverableAssignedCollabIDs']))
        {
          echo "<h4><strong>Parties responsible for this Deliverable:</strong></h4>";
          
          foreach($arrayCollIDs as $ColID)
          {
            $bab = "SELECT id,CollabFirstLast,CollabJobTitle,CollabEmail,CollabPhone
              FROM structure_deliverables WHERE id = $ColID";
            $Result12 = $connGlobal->query($bab); 
            while($row3 = $Result12->fetch_assoc()) {
              echo'
            <div class="dropdown">
              <button style="font-size:22px;text-align:left;width:100%;" class="btn btn-primary " type="button" data-toggle="collapse" data-target="#Coll'.$row2['id'].$row3['id'].'" aria-expanded="false" aria-controls="collapseExample">
              '.$row3['CollabFirstLast'].'
              </button>
              <div class="collapse" id="Coll'.$row2['id'].$row3['id'].'">
                <div class="card card-body" style="padding-top:5px;padding-bottom:8px;">
                  <strong>Job Title:</strong> '.$row3['CollabJobTitle'].'<br>
                  <strong>Email:</strong> '.$row3['CollabEmail'].'<br>
                  <strong>Phone Number:</strong> '.$row3['CollabPhone'].'<br>
                </div>
              </div>  
            </div>';
            }
          }
          
        }
        echo "<h4><strong>Scope Requirements satisfied by this Deliverable:</strong></h4>";
    
      
        $bab = "SELECT RequirementTitle,RequirementSeqID,id,ObjectiveSeqID
          FROM structure_deliverables WHERE id IN (".$ReqCollIDs1.") ORDER BY ObjectiveSeqID ASC, RequirementSeqID ASC";
        $Result12 = $connGlobal->query($bab); 
        while($row3 = $Result12->fetch_assoc()) {
          echo' <a onclick="ReqViewer('.$row3["id"].')" class="btn btn-primary ReqHover" href="#" style="padding-left:10px;
          padding-bottom:10px;padding-top:10px;background-color:#e8dd67;color:black;width:100%;text-align:left;">
          <h4 >'.$row3['ObjectiveSeqID'].'.'.$row3['RequirementSeqID'].'.) '.$row3['RequirementTitle'].'</h4></a>';
        }
      
        
        
        
        echo '
      <div style="border-bottom:solid 2px black;min-height:65px;">
        
        <h4 style="width:50%;float:left;"><strong>Deliverable Type: </strong><br>'.$row2['DeliverableType'].'</h4>    ';
        if(!empty($row2['DeliverableDeadline']))
        {
          $dadda = date("d/m/Y", strtotime($row2["DeliverableDeadline"]));

          echo '<h4 style="float:right;clear:right;width:50%;"><strong>Scheduled Due Date:</strong><br>'.$dadda.'</h4>';
        }
        echo'
        </div>
        <h3 style="margin:0;background-color:#d98484;border:solid 2px black;"><strong>Deliverable Description:</strong></h3>
        <div style="font-size:20px;border: solid black 2px;padding: 15px;padding-right: 25px;padding-left:10px;background-color:#fff5f5;">
        
        '. $row2['DeliverableDescription'].'
        
      </div>
  </div> 
  
      
    
    
      '; 
//OBJECTIVE ARRAY***
$ObjIDArray = array();
}
//REQUIREMENT MODAL WINDOW
$sql8 = "SELECT id,RequirementTitle, RequirementType,RequirementSeqID,RequirementObjectiveID,RequirementDescription
FROM structure_deliverables WHERE RequirementType  
IS NOT NULL ORDER BY RequirementSeqID ASC";
$Result1 = $connGlobal->query($sql8); 
while($row3 = $Result1->fetch_assoc()) {
echo '
<div onclick="ReqViewer('.$row3["id"].')" id="ReqHeader'.$row3["id"].'" class="btn btn-primary ReqHover hide ReqHeader" href="#" style="white-space: normal; padding-left:30px;
  padding-bottom:10px;padding-top:10px;background-color:#e8dd67;height:100%;color:black;width:100%;text-align:left;" ><h1 style="margin:0">'.$row3['RequirementSeqID'].'.) '.$row3['RequirementTitle'].'</h1></a>
</div>
    <div class="modal-body hide All"  id="ReqBody'.$row3['id'].'" style="background-color:#fffafa;">';
      
      
      echo "<h4><strong>Scope Requirement serves the following Strategic Objective:</strong></h4>";
    
      $ba2b = "SELECT ObjectiveTitle,ObjectiveSeqID,id,ObjectiveQuestion,ObjectiveDescription
        FROM structure_deliverables WHERE id =". $row3['RequirementObjectiveID'];
      $Result123 = $connGlobal->query($ba2b); 
      while($row33 = $Result123->fetch_assoc()) {
        echo' <a onclick="ObjViewer('.$row33["id"].')" class="ObjHover" href="#" style="width:100%;">
        <h4 style="padding-left:10px;background-color:#a3c09a;padding-bottom:10px;padding-top:10px;
        color:black;width:100%;text-align:left;" class="ObjHover">'.$row33['ObjectiveSeqID'].'.) '
        .$row33['ObjectiveTitle'].'</h4></a>';
      
        }
      
        array_push($ObjIDArray, $row3['RequirementObjectiveID']);
      
      echo '<h4><strong>Requirement Type: </strong><br></h4><h5 style="padding-left:10px;">'.$row3['RequirementType'].'</h5>
      <h3 style="margin:0;background-color:#e8dd67;border:solid 2px black;"><strong>Requirement Description:</strong></h3>
      <div style="font-size:20px;border: solid black 2px;padding: 15px;padding-right: 25px;padding-left:10px;
      background-color:#fffcdc">
      
      '. $row3['RequirementDescription'].'
      </div>
    </div>
  '; 
  }
//OBJECTIVE MODAL WINDOW
  foreach($ObjIDArray as $ObjID)
  {
    $sql88 = "SELECT id,ObjectiveTitle, ObjectiveQuestion,ObjectiveSeqID,ObjectiveDescription
    FROM structure_deliverables WHERE id = $ObjID  
    IS NOT NULL ORDER BY ObjectiveSeqID ASC";
    $Result11 = $connGlobal->query($sql88); 
    while($row311 = $Result11->fetch_assoc()) {
    echo '
    

    <div class="modal-body hide All"  id="ObjBody'.$row311['id'].'" style="background-color:#fffafa;">';
      echo '<h1 style="padding-top:15px;padding-left:60px;
      background-color:#a3c09a;color:black;width:100%;text-align:left;">'.$row311['ObjectiveSeqID'].'.) '.$row311['ObjectiveTitle'].'</h1>
      ';

      echo '<h4><strong>Objective Question: </strong><br></h4>
      <h5 style="padding-left:10px;">'.$row311['ObjectiveQuestion'].'</h5>
      <h3 style="margin:0;background-color:#a3c09a;border:solid 2px black;"><strong>Objective Description:</strong></h3>
      <div style="font-size:20px;border: solid black 2px;padding: 15px;padding-right: 25px;padding-left:10px;
      background-color:#ecfdee">
      
      '. $row311['ObjectiveDescription'].'
      </div>
    </div>
  '; 
    }
  }
      



  ?>
    </div>
    </div>
  </div>
</div>
</body>
</html>