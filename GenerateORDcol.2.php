<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>|Object|Requirements|Deliverables|</title>

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
        .hide{display:none;}
        .Show{display:block;}
        .ActiveOBJ{color:#a3c09a !important;border:solid 1px #a3c09a !important;background-color:black !important;}
        .ActiveREQ{color:#e8dd67 !important;border:solid 1px #e8dd67 !important;background-color:black !important;}
        .ActiveDEL{color:#d98484 !important;border:solid 1px #d98484 !important;background-color:black !important;}
        .scrollDiv{max-height:350px;height:350px;resize: vertical;border: 1px solid #222; padding: 10px;overflow-x:hidden;display: flex;padding-left:15px;width:100%;height:650px;float: left; display: inline;white-space: initial;overflow-wrap: break-word;max-width:100%;padding-right:20px;font-size:18px;}
        .scrollDiv1{resize: vertical;border: 1px solid #222;width: 500px; padding: 10px;overflow-x:hidden;display: flex;padding-left:15px;width:100%;float: left; display: inline;white-space: initial;overflow-wrap: break-word;max-width:100%;padding-right:20px;font-size:18px;}
        .ButtonsOBJ{width:100%;text-align:left;font-size:22px;padding-left:15px;}
        .ButtonsOBJ:hover{color:#a3c09a !important;border:solid 1px #a3c09a !important;background-color:black !important;}
        .ButtonsREQ{width:100%;text-align:left;font-size:22px;}
        .ButtonsREQ:hover{color:#e8dd67 !important;border:solid 1px #e8dd67 !important;background-color:black !important;}
        .ButtonsDEL{width:100%;text-align:left;font-size:22px;padding-left:15px;}
        .ButtonsDEL:hover{color:#d98484 !important;border:solid 1px #d98484 !important;background-color:black !important;}
      </style>
<script>
function ObjSel(ObjID)
{
  $('.All').hide();
  $('.ButtonsOBJ').removeClass('ActiveOBJ');
  $('#ButtonsOBJ'+ ObjID).addClass('ActiveOBJ');
  $('.DetailsOBJ').hide();
  $('#DetailsOBJ'+ObjID).show();
  $('.ButtonsREQ').hide();
  $('.ButtonsREQ').removeClass('ActiveREQ');
  $('.ButtonsREQ'+ObjID).show();
}
function ReqSel(ReqID)
{
  $('.ButtonsDEL, .TitleDEL,.TitleREQ,.DetailsDEL,.DetailsREQ').hide();
  $('.ButtonsDEL').removeClass('ActiveREQ');
  $('.ButtonsREQ').removeClass('ActiveREQ');
  $('#ButtonsREQ'+ ReqID).addClass('ActiveREQ');
  $('.DetailsREQ').hide();
  $('#DetailsREQ'+ReqID).show();
  $('.ButtonsDEL'+ReqID).show();
}
function DelSel(DelID,ReqID)
{
  $('.TitleDEL,.DetailsDEL').hide();
  $('.ButtonsDEL').removeClass('ActiveDEL');
  $('#ButtonsDEL'+ DelID+ReqID).addClass('ActiveDEL');
  $('#DetailsDEL'+DelID).show();

}
</script>
</head>
<body style="height:2000px;">
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
        
      ?>

<div class="container"style="margin-bottom:300px;max-width:95% !important;" >
  <div class="row" style="max-height:350px;" >

    <div class="col col-sm-4" style="border:solid 2px black;padding:0;min-height:150px;">
        <div style="overflow:scroll;overflow-x:hidden;padding:0;height:350px;background-color:#e3f8dd;">            
        <?php
            $sql8 = "SELECT ObjectiveTitle,id,ObjectiveSeqID FROM structure_deliverables WHERE ObjectiveQuestion 
            IS NOT NULL ORDER BY ObjectiveSeqID ASC";
            $Result1 = $connGlobal->query($sql8); 
            while($row2 = $Result1->fetch_assoc()) {
                echo '<button class="ButtonsOBJ" id="ButtonsOBJ'.$row2['id'].'" onclick="ObjSel('.$row2['id'].')">
                '.$row2['ObjectiveSeqID'].'.) '.$row2['ObjectiveTitle'].'</button>'; 
                }    
        ?>
        
        </div>
    </div>

    <div class="col col-sm-8 scrollDiv" style="border:solid black 2px;padding:0;">
    <?php
            $sql8 = "SELECT ObjectiveQuestion,ObjectiveDescription,id,ObjectiveTitle,ObjectiveSeqID FROM structure_deliverables WHERE ObjectiveQuestion 
            IS NOT NULL ORDER BY ObjectiveSeqID ASC";
            $Result1 = $connGlobal->query($sql8); 
            while($row2 = $Result1->fetch_assoc()) {
                echo '<div style="padding:5px 10px 5px 10px;font-size:22px;padding-right:80px;" class="All DetailsOBJ hide" id="DetailsOBJ'.$row2['id'].'">
                <a  href="#" data-toggle="modal" data-target="#ObjectiveModal'.$row2['id'].'">
                <h1 >'.$row2['ObjectiveSeqID'].'.) '.$row2['ObjectiveTitle'].'</h1></a>
                
                <div style="font-size:22px;padding-right:80px;">
                <h2 style="font-style: italic;"><strong>Objective Question:</strong><br>'.$row2['ObjectiveQuestion'].'</h2>
                '.$row2['ObjectiveDescription'].'</div></div>'; 
                }    
        ?>     
    </div>
              
  </div>
  <div class="row">
    <div class="col col-sm-4" style="border:solid black 2px;background-color:#fffcdc;width:100%;padding:0;">
        <div style="overflow:scroll;overflow-x:hidden;padding:0;height:350px;">       
        <?php
              $sql8 = "SELECT RequirementTitle,id,RequirementSeqID,RequirementObjectiveID FROM structure_deliverables WHERE RequirementType 
              IS NOT NULL ORDER BY RequirementSeqID ASC";
              $Result1 = $connGlobal->query($sql8); 
              while($row2 = $Result1->fetch_assoc()) {
                  echo '<button style="padding-left: 15px;" class="All ButtonsREQ hide ButtonsREQ'.$row2['RequirementObjectiveID'].'" id="ButtonsREQ'.$row2['id'].'"
                  onclick="ReqSel('.$row2['id'].')">'.$row2['RequirementSeqID'].'.) '.$row2['RequirementTitle'].'</button>'; 
                  }    
          ?>
        </div>
    </div>

    <div class="col col-sm-8 scrollDiv" style="border:solid black 2px;padding:0;;max-height:360px !important;">
    <?php
            $sql8 = "SELECT RequirementTitle,RequirementType,RequirementDescription,id,RequirementSeqID FROM structure_deliverables WHERE RequirementType 
            IS NOT NULL ORDER BY ObjectiveSeqID ASC";
            $Result1 = $connGlobal->query($sql8); 
            while($row2 = $Result1->fetch_assoc()) {
              echo '<div style="padding:5px 10px 0px 10px;font-size:22px;padding-right:80px;" class="All DetailsREQ hide" 
              id="DetailsREQ'.$row2['id'].'">
                <a  href="#" data-toggle="modal" data-target="#RequirementModal'.$row2['id'].'">
                  <h1 >'.$row2['RequirementSeqID'].'.) '.$row2['RequirementTitle'].'</h1></a>
                
                
                <div style="font-size:22px;padding-right:80px;">
                <h2 style="font-style: italic;"><strong>Requirement Type:</strong><br>'.$row2['RequirementType'].'</h2>
                '.$row2['RequirementDescription'].'</div></div>
                '; 
                
              }    
      ?>     
    </div>

  </div>




  <div class="row" >

    
  <div class="col col-sm-4" style="border:solid black 2px;;width:100%;padding:0;background-color:#fff5f5;">
    <div style="overflow:scroll;overflow-x:hidden;padding:0;min-height:350px;background-color:#fff5f5;">            

      <?php
            $sql8 = "SELECT id ,DeliverableTitle,DeliverableAssignedRequirementIDs
             FROM structure_deliverables WHERE DeliverableType 
            IS NOT NULL ORDER BY id ASC";
            $Result1 = $connGlobal->query($sql8); 
            while($row2 = $Result1->fetch_assoc()) {
              if(!empty($row2['DeliverableAssignedRequirementIDs']))
              {
                $arrayDelIDs= explode(",", $row2['DeliverableAssignedRequirementIDs']);
                foreach($arrayDelIDs as $ReqIDs)
                {
                  
                  echo '<button id="ButtonsDEL'.$row2['id'].$ReqIDs.'" 
                  class="All ButtonsDEL hide ButtonsDEL'.$ReqIDs.'" 
                  onclick="DelSel('.$row2['id'].','.$ReqIDs.')">'.$row2['id'].'.) '.$row2['DeliverableTitle'].'</button>'; 
                    
                }     
              }
            }
              
              
              
              
        ?>
    </div>
  </div>

    <div class="col col-sm-8 " style="border:solid black 2px;padding:0;">
    <?php
            $sql8 = "SELECT DeliverableDeadline,DeliverableAssignedCollabIDs,id,DeliverableTitle,
            DeliverableType,DeliverableDescription FROM structure_deliverables WHERE DeliverableType 
            IS NOT NULL ORDER BY id ASC";
            $Result1 = $connGlobal->query($sql8); 
            while($row2 = $Result1->fetch_assoc()) {
                echo '
                <div style="padding:5px 10px 5px 10px;height:100%;" class="All DetailsDEL hide" 
                id="DetailsDEL'.$row2['id'].'">
                  <a  href="#" data-toggle="modal" data-target="#DeliverableModal'.$row2['id'].'">
                  <h1 >'.$row2['id'].'.) '.$row2['DeliverableTitle'].'</h1></a>
                  ';
                  
                  $arrayCollIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);

                  if(!empty($row2['DeliverableAssignedCollabIDs']))
                    {
                      echo "<h3><strong>Parties responsible for this deliverable:</strong></h3>";
                      foreach($arrayCollIDs as $ColID)
                      {
                        $bab = "SELECT id,CollabFirstLast,CollabJobTitle,CollabEmail,CollabPhone
                        FROM structure_deliverables WHERE id = $ColID";
                        $Result12 = $connGlobal->query($bab); 
                        while($row3 = $Result12->fetch_assoc()) {
                          echo'<div class="dropdown">
                          <button style="font-size:22px;text-align:left;width:100%;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Coll1'.$row2['id'].$row3['id'].'" aria-expanded="false" aria-controls="collapseExample">
                          '.$row3['CollabFirstLast'].'
                          </button>
                          <div class="collapse" id="Coll1'.$row2['id'].$row3['id'].'">
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
                    if(!empty($row2['DeliverableDeadline']))
                  {
                    $dadda = date("d/m/Y", strtotime($row2["DeliverableDeadline"]));

                    echo '<h3><strong>Scheduled Due Date:</strong><br>'.$dadda.'</h3>';
                    


                  }
                      echo '<div  style="font-size:22px;padding-right:80px;">
                      <h2 style="font-style: italic;"><strong>Deliverable Type:</strong><br>'.$row2['DeliverableType'].'</h2>'.$row2['DeliverableDescription'].'</div>
                </div>
                    
                  '; 
                }    
        ?>     
    </div>
  </div>
</div>
<?php
$sql8 = "SELECT ObjectiveTitle,ObjectiveSeqID,ObjectiveQuestion,id, ObjectiveDescription
FROM structure_deliverables WHERE ObjectiveQuestion IS NOT NULL ORDER BY ObjectiveSeqID ASC";
$Result1 = $connGlobal->query($sql8); 
while($row2 = $Result1->fetch_assoc()) {
 echo '<!-- Modal -->
<div id="ObjectiveModal'.$row2['id'].'" class="modal fade" >
         <div class="modal-dialog" style="margin:0;">

           <!-- Modal content-->
           <div class="modal-content" style="width:950px;">
             <div class="modal-header" style="background-color:#a3c09a">
               <h2 class="modal-title">'.$row2['ObjectiveSeqID'].'.) '.$row2['ObjectiveTitle'].'</h2>
             </div>
             <div class="modal-body" style="background-color:#fffafa;padding-top:5px;">';
               echo '<h4><strong>Objective Type: </strong><br>'.$row2['ObjectiveQuestion'].'</h4>
               <h4 style="margin:0;background-color:#a3c09a;border:solid 2px black;"><strong>Objective Description:</strong></h4>';
               echo '<div style="font-size:20px;border: solid black 2px;padding: 15px;padding-right: 25px;padding-left:10px">
               '. $row2['ObjectiveDescription'].'
                     </div>
             </div> 
           </div>

         </div>
</div>

   '; 
   }

$sql8 = "SELECT RequirementTitle,RequirementSeqID,RequirementType,id, RequirementDescription
 FROM structure_deliverables WHERE RequirementType IS NOT NULL ORDER BY RequirementSeqID ASC";
$Result1 = $connGlobal->query($sql8); 
while($row2 = $Result1->fetch_assoc()) {
  echo '<!-- Modal -->
<div id="RequirementModal'.$row2['id'].'" class="modal fade" >
          <div class="modal-dialog" style="margin:0;">

            <!-- Modal content-->
            <div class="modal-content" style="width:950px;">
              <div class="modal-header" style="background-color:#e8dd67">
                <h2 class="modal-title">'.$row2['RequirementSeqID'].'.) '.$row2['RequirementTitle'].'</h2>
              </div>
              <div class="modal-body" style="background-color:#fffafa;padding-top:5px;">';
                echo '<h4><strong>Requirement Type: </strong><br>'.$row2['RequirementType'].'</h4>
                <h4 style="margin:0;background-color:#e8dd67;border:solid 2px black;"><strong>Requirement Description:</strong></h4>';
                echo '<div style="font-size:20px;border: solid black 2px;padding: 15px;padding-right: 25px;padding-left:10px">
                '. $row2['RequirementDescription'].'
                      </div>
              </div> 
            </div>

          </div>
</div>

    '; 
    }

$sql8 = "SELECT DeliverableDeadline,DeliverableAssignedCollabIDs,id,DeliverableTitle,
DeliverableType,DeliverableDescription FROM structure_deliverables WHERE DeliverableType 
IS NOT NULL ORDER BY id ASC";
$Result1 = $connGlobal->query($sql8); 
while($row2 = $Result1->fetch_assoc()) {
  $arrayCollIDs= explode(",", $row2['DeliverableAssignedCollabIDs']);

  echo '<!-- Modal -->
<div id="DeliverableModal'.$row2['id'].'" class="modal fade" >
          <div class="modal-dialog" style="margin:0;">

            <!-- Modal content-->
            <div class="modal-content" style="width:950px;">
              <div class="modal-header" style="background-color:#d98484">
                <h2 class="modal-title">'.$row2['id'].'.) '.$row2['DeliverableTitle'].'</h2>
              </div>
              <div class="modal-body" style="background-color:#fffafa;padding-top:5px;">';
              echo '<h4><strong>Deliverable Type: </strong><br>'.$row2['DeliverableType'].'</h4>';
              if(!empty($row2['DeliverableAssignedCollabIDs']))
              {
                echo "<h4><strong>Parties responsible for this deliverable:</strong></h4>";
                foreach($arrayCollIDs as $ColID)
                {
                  $bab = "SELECT id,CollabFirstLast,CollabJobTitle,CollabEmail,CollabPhone
                   FROM structure_deliverables WHERE id = $ColID";
                  $Result12 = $connGlobal->query($bab); 
                  while($row3 = $Result12->fetch_assoc()) {
                    echo'<div class="dropdown">
                    <button style="font-size:22px;text-align:left;width:100%;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Coll'.$row2['id'].$row3['id'].'" aria-expanded="false" aria-controls="collapseExample">
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
              
              
              if(!empty($row2['DeliverableDeadline']))
              {
                $dadda = date("d/m/Y", strtotime($row2["DeliverableDeadline"]));

                echo '<h4><strong>Scheduled Due Date:</strong><br>'.$dadda.'</h4>';
                


              }
              echo '<h4 style="margin:0;background-color:#d98484;border:solid 2px black;"><strong>Deliverable Description:</strong></h4>
              <div style="font-size:20px;border: solid black 2px;padding: 15px;padding-right: 25px;padding-left:10px">
              
              '. $row2['DeliverableDescription'].'</div>
              </div> 
            </div>

          </div>
        </div>

    '; 
    }    
?>
    

</body>
</html>