<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
function toBottom()
{
    window.scrollTo(0, document.body.scrollHeight);
}
window.onload=toBottom();
function validateU()
      {
         if( document.UserObjForm.Strat_UserNeedDescription.value == "" )
         {
            alert( "Please answer the user related question in the provided text field." );
            document.UserObjForm.Strat_UserNeedDescription.focus() ;
            return false;
         }
         
         if( document.UserObjForm.Strat_UserNeedTitle.value == "" )
         {
            alert( "Please provide a short-hand description for this goal." );
            document.UserObjForm.Strat_UserNeedTitle.focus() ;
            return false;
         }       
}
function validate()
      {
         if( document.BusinessObjForm.Strat_BOdescription.value == "" )
         {
            alert( "Please provide a description for this business goal!" );
            document.BusinessObjForm.Strat_BOdescription.focus() ;
            return false;
         }
         if( document.BusinessObjForm.Strat_BOtitle.value == "" )
         {
            alert( "Please provide provide a short-hand description for this goal!" );
            document.BusinessObjForm.Strat_BOtitle.focus() ;
            return false;
         }
         
}
</script>
</head>

<body onload="scrollToBottom" style="background-color:black;">
    <div class="container">
        <div class="row">
          <div class="col-sm Form_Container Form_Header_Container" style="background-color:black; color:white;">
            <h1>Strategy</h1>
          </div>
        </div>
        <div class="row">
            <div class="col-sm Form_Container" style="background-color:#bbbbbb;padding:0 !important;border: black 1px solid;">
                <form name="UserObjForm" onsubmit="return validateU()" action="Submit User Objective.php" method="post" >
                   <div style="background-color:#b6a9b0"><h4 style="margin:0 !important;color:black !important;">User Needs:</h4>
                        <select name="Strat_User_Questions">
                            <option value="How is the Need/ Problem/ Opportunity Defined by the prospect?">How is the Need/ Problem/ Opportunity Defined by the user?</option>
                            <option value="Prospects' product related search-engine behavior:">Users' product related search-engine behavior?</option>
                            <option value="Concerns/ Questions the prospect will have about your product?">Concerns/ Questions the prospect will have about your product?</option>
                            <option value="What does the prospect desire?">What does the user desire?</option>
                            <option value="What does the user need to accomplish using this application?">What does the user need to accomplish using this application?</option>
                            <option value="Who is going to be using this application?">Who is going to be using this application?</option>
                        </select>
                        <textarea cols="85" rows="5" name="Strat_UserNeedDescription" style="resize:vertical" autocomplete="off"></textarea><br>
                        <label style="margin:0;font-size:16px;color:black !important;"><strong>Objective Title:</strong></label><br><input name="Strat_UserNeedTitle" autocomplete="off" style="width:100%;" type="text"><br>
                        <label style="margin:0;font-size:16px;color:black !important;"><strong>Priority:</strong></label>
                        <select name="Strat_User_Priority">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                        </select>
                        <input type="submit" style="float:right;" value="Submit"><br><br>
                    </div>
                </form>
                    <form name="BusinessObjForm" action="Submit Business Objective.php" method="post" onsubmit="return validate();">
                        <div style="background-color:#8d9390;padding-bottom:8px;"><h4 style="color:black !important;margin:0 !important;border: black 1px solid;">Business Objectives:</h4>
                            <select name="Strat_BOquestions">
                                    <option value="What do I want the website to offer?">What do I want the project to offer?</option>
                                    <option value="What do I want the project to accomplish?">What do I want the project to accomplish?</option>
                                    <option value="Message or Information I wish to convey?">Message, offer, or content the website should convey?</option>
                                    <option value="Who's typically going to visit the site? What are they expecting to accomplish?">Who's typically going to visit the site? What are they expecting to accomplish?</option>
                            </select>
                            <textarea cols="85" rows="5" name="Strat_BOdescription" style="resize:vertical" autocomplete="off"></textarea><br>
                            <label style="color:white;margin:0;font-size:16px;color:black;"><strong>Objective Title:</strong></label><br><input name="Strat_BOtitle" style="width:100%;" type="text" autocomplete="off"><br>
                            <label style="color:black;margin:0;font-size:16px;"><strong>Priority:Low(1) - High(10)</strong></label>
                            <select name="Strat_BOpriority">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <input type="submit" style="float:right;" value="Submit">
                        </div>
                    </form>
            </div>
            
            <div class="col-sm Form_Container" style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:570px;">
            <div>
                <h4 style="margin:0 !important;color:white;background-color:black !important;">Edit/ Remove Project Objectives</h4>
              </div>
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
                  
                  $query = "SELECT ID FROM Strategic_Goals";
                  $result = mysqli_query($connGlobal, $query);
                  $sql = "SELECT id, ObjectiveTitle, ObjectiveDescription, ObjectivePriority, ObjectiveType, ObjectiveQuestion FROM Strategic_Goals";
                  $result = $connGlobal->query($sql);
                  if ($result->num_rows > 0) {
                      // output data of each row

                      while($row = $result->fetch_assoc()) {
                          if($row["ObjectiveType"] === "Business Objective"){
                           /* <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                            <h4 class="modal-title">Modal Heading</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          
                                          <!-- Modal body -->
                                          <div class="modal-body">
                                            Modal body..
                                          </div>
                                          
                                          <!-- Modal footer -->
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    </div>*/
                                    
                            echo '                            
                            <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;text-decoration:underline;border:solid black 2px;background-color:#8d9390" type="button" data-toggle="modal" data-target="#myModal'. $row["id"] . '">
                              <strong>'. $row["ObjectiveTitle"]. '</strong>
                            </button>
                            <div class="modal" id="myModal'. $row["id"] . '">
                            <div style="max-width:800px !important;" class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 style="color: black !important;class="modal-title">Edit Strategic Objective:</h4>
                                      <button type="button" class="close" data-dismiss="modal">
                                      </button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">                                                               
                                    <form name="Modalform" action="Delete_Strategy_Goal.php" method="post">
                                      <h5><strong>Original Question:</strong><br>'.$row['ObjectiveQuestion'].'</h5>
                                       <input type="hidden" name="idDel" value="'.$row["id"] . '">
                                       <label><strong>Priority:</strong></label><br><select name="EditPriority">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                      </select><br>
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Objective Title:</strong></label><input name="EditTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row["ObjectiveTitle"].'">
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Objective Description:</strong></label><textarea   rows="5" name="EditDescription" style="resize:vertical;width:100%;" autocomplete="off">'. $row["ObjectiveDescription"].'</textarea>
                                       <input style="clear:left;float:left;color:white;background-color:red;" type="submit" name="action" value="Delete" />
                                       <input style="float:right;color:white;background-color:blue;" type="submit" name="action" value="Update" />
                                       
                                    </form>
                                       </div>
                                    
                                  </div>
                                </div>
                              </div>
                              ';
                          } else { 
                            echo '<button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;text-decoration:underline;border:solid black 2px;background-color:#b6a9b0" type="button" data-toggle="modal" data-target="#myModal'. $row["id"] . '">
                              <strong>'. $row["ObjectiveTitle"]. '</strong>
                            </button>
                            <div class="modal" id="myModal'. $row["id"] . '">
                            <div style="max-width:800px !important;" class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 style="color: black !important;class="modal-title">Edit Strategic Objective:</h4>
                                      <button type="button" class="close" data-dismiss="modal">
                                      </button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">                                                               
                                    <form name="Modalform" action="Delete_Strategy_Goal.php" method="post">
                                      <h5><strong>Original Question:</strong><br>'.$row['ObjectiveQuestion'].'</h5>
                                       <input type="hidden" name="idDel" value="'.$row["id"] . '">
                                       <label><strong>Priority:</strong></label><br><select name="EditPriority">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                      </select><br>
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Objective Title:</strong></label><input name="EditTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row["ObjectiveTitle"].'">
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Objective Description:</strong></label><textarea   rows="5" name="EditDescription" style="resize:vertical;width:100%;" autocomplete="off">'. $row["ObjectiveDescription"].'</textarea>
                                       <input style="clear:left;float:left;color:white;background-color:red;" type="submit" name="action" value="Delete" />
                                       <input style="float:right;color:white;background-color:blue;" type="submit" name="action" value="Update" />
                                       
                                    </form>
                                       </div>
                                    
                                  </div>
                                </div>
                              </div>
                              ';
                          }
                      }
                  } else {
                      echo "0 results";
                  }
                  ?>
                  
            </div>
            
      </div>
    
      <div class="row">
        <div class="col-sm Form_Container Form_Header_Container" style="background-color:black; color:white;">
        <h1>Scope</h1>
        </div>
      </div>
      <div class="row">
      <div class="col-sm-6 Form_Container" style="background-color:#bbbbbb;padding:0 !important;border: black 1px solid;">
                    <form name="RequirementForm" action="Submit Requirement.php" method="post" >
                        <div style="background-color:#7b6eae;padding-bottom:30px;"><h4 style="color:black !important;margin:0 !important;border: black 1px solid;">Define a Requirement:</h4>
                        <div id="hiddenInputs">
                        </div>
                          <label style="color:white !important;margin:0;margin-top:15px;"><strong>Which of the previously defined objectives does this requirement belong to?</strong></label>
                          <select name="StrategyObjectiveID" style="width:100%;">
                          <?php
                              //Connect to DB
                              $connGlobal = OpenCon();
                              $query = "SELECT ID FROM Strategic_Goals";
                              $result = mysqli_query($connGlobal, $query);
                              $sql = "SELECT id, ObjectiveTitle, ObjectiveDescription, ObjectivePriority, ObjectiveType, ObjectiveQuestion FROM Strategic_Goals";
                              $result = $connGlobal->query($sql);
                              if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                                if($row["ObjectiveType"] === "Business Objective"){
                                  echo '<option style="background-color:#8d9390;" value="'.$row["id"].'">'.$row["ObjectiveTitle"].'</option>
                                  ';
                                }else{
                                  echo '<option style="background-color:#b6a9b0;" value="'.$row["id"].'">'.$row["ObjectiveTitle"].'</option>
                                  ';
                                }}};
                                ?>  
                                      
                          </select>
                          <label style="color:white;margin:0;font-size:16px;color:white;"><strong>Title:</strong></label><br><input name="RequirementTitle" style="width:100%;" type="text" autocomplete="off"><br>
                          <label style="margin:0;font-size:16px;color:white !important;"><strong>Type:</strong></label>
                          <select name="RequirementType" style="width:100%;margin:0;margin-top:5px;">
                                  <option value="Objective - What does the user want to accomplish?">"Objective" - What does the user want to accomplish?</option>
                                  <option value="Functional - What does the user need to do in order reach their objective?">"Functional" - What does the user need to do in order reach their objective?</option>
                                  <option value="Technical - What are the technical constraints of this Strategic Objective? What resources are needed to get this done?">"Technical" - What are the technical constraints of this Strategic Objective? What resources are needed to get this done?</option>
                                  <option value="BusinessRules -   What external constraints does the project need to abide by? (legal, contractual, etc)">"BusinessRules" -   What external constraints does the project need to abide by? (legal, contractual, etc)</option>
                          </select>
                          <label style="margin:0;font-size:16px;color:white !important;"><strong>Description:</strong></label><br>
                          <textarea cols="85" rows="5" name="RequirementDescription" style="resize:vertical;width:100%;" autocomplete="off"></textarea><br>
                          <input type="submit" style="float:right;" value="Submit">
                        </div>
                    </form></div>
        
        
        <div class="col-sm-6 Form_Container" style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:415px;">
              <div>
                <h4 style="margin:0 !important;color:white;background-color:black !important;">Edit/ Remove Requirements:</h4>
              </div>
              <?php
                  $connGlobal = OpenCon();
                  
                  $sql = "SELECT id, ObjectiveTitle, ObjectiveDescription, ObjectivePriority, ObjectiveType, ObjectiveQuestion FROM Strategic_Goals";
                  $result = $connGlobal->query($sql);
                  while($row = $result->fetch_assoc()) {
                      $ObjID = $row["id"];
                      $sqlReq = "SELECT id, StrategyID, RequirementTitle, RequirementDescription, RequirementType, ObjectiveTitle, ObjectiveDescription, ObjectivePriority, ObjectiveQuestion, ObjectiveType FROM Scope_Requirements WHERE StrategyID = '$ObjID'";
                      $resultReq = $connGlobal->query($sqlReq);
                    if($row2 = $resultReq->fetch_assoc()) {
                    if($row["ObjectiveType"] === "Business Objective"){
                      echo '                            
                      <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#8d9390" type="button" data-toggle="collapse" data-target="#HiddenRequirement'. $row["id"] . '">
                        <strong>'. $row["ObjectiveTitle"]. '</strong>
                      </button><div class="collapse" id="HiddenRequirement'. $row["id"] . '">
                      
                    '; 

                        $ObjID = $row["id"];
                        $sqlReq = "SELECT * FROM Scope_Requirements WHERE StrategyID = '$ObjID'";
                        $resultReq = $connGlobal->query($sqlReq);
                      while($row2 = $resultReq->fetch_assoc()) {
                        
                            echo'
                            <button style="padding:0;padding-left:15px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;text-decoration:underline;border:solid black 2px;background-color:#7b6eae;" type="button" data-toggle="modal" data-target="#ReqEdit'. $row2["id"] . '">
                      <strong>'. $row2["RequirementTitle"]. '</strong>
                    </button>
                            <div class="modal" id="ReqEdit'. $row2["id"] . '">
                            <div style="max-width:800px !important;" class="modal-dialog">
                              <div class="modal-content">
                              
                              <div class="modal-header">
                                <h3 class="modal-title">Edit/Remove Requirement</h3>
                              </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                <label><strong>Strategic Objective:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:200px;"><h5>'.$row2["ObjectiveQuestion"] . '</h5><p><strong>'.$row2["ObjectiveTitle"] . '</strong><br>'.$row2["ObjectiveDescription"] . '</p></div>
                                <form name="ModalformReqEdit" action="Edit_Requirement.php" method="post">
                                       <label><strong>Requirement Type:</strong></label>
                                       <p>'.$row2["RequirementType"].'</p>
                                       <input type="hidden" name="idDelReq" value="'.$row["id"] . '"><input type="hidden" name="idDelReq2" value="'.$row2["id"] . '">
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Title:</strong></label><input name="EditReqTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row2["RequirementTitle"].'">
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Description:</strong></label><textarea style="width:100%;"  cols="63" rows="5" style="width:100%;"  name="RequirementDescription" style="resize:vertical" autocomplete="off">'. $row2["RequirementDescription"].'</textarea>
                                       <input style="float:left;color:white;background-color:red;" type="submit" name="actionR" value="Delete" />
                                       <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                       
                                    </form>
                                </div>
                                
                              
                                
                              </div>
                            </div>
                          </div>
                            ';}
                           echo '</div>';
                          
                    
                      ;
                    }else{
                      echo '                            
                      <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#b6a9b0" type="button" data-toggle="collapse" data-target="#HiddenRequirement'. $row["id"] . '">
                        <strong>'. $row["ObjectiveTitle"]. '</strong>
                      </button><div class="collapse" id="HiddenRequirement'. $row["id"] . '">
                   
                    '; 

                        $ObjID = $row["id"];
                        $sqlReq = "SELECT * FROM Scope_Requirements WHERE StrategyID = '$ObjID'";
                        $resultReq = $connGlobal->query($sqlReq);
                      while($row2 = $resultReq->fetch_assoc()) {
                        
                            echo'
                            <button style="padding:0;padding-left:15px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;text-decoration:underline;border:solid black 2px;background-color:#7b6eae;" type="button" data-toggle="modal" data-target="#ReqEdit'. $row2["id"] . '">
                      <strong>'. $row2["RequirementTitle"]. '</strong>
                    </button>
                            <div class="modal" id="ReqEdit'. $row2["id"] . '">
                            <div style="max-width:800px !important;" class="modal-dialog">
                              <div class="modal-content">
                              
                              <div class="modal-header">
                                <h3 class="modal-title">Edit/Remove Requirement</h3>
                              </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                <label><strong>Strategic Objective:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:200px;"><h5>'.$row2["ObjectiveQuestion"] . '</h5><p><strong>'.$row2["ObjectiveTitle"] . '</strong><br>'.$row2["ObjectiveDescription"] . '</p></div>
                                <form  style="width:100%;" name="ModalformReqEdit" action="Edit_Requirement.php" method="post">
                                       <label><strong>Requirement Type:</strong></label>
                                       <p>'.$row2["RequirementType"].'</p>
                                       <input type="hidden" name="idDelReq" value="'.$row["id"] . '"><input type="hidden" name="idDelReq2" value="'.$row2["id"] . '">
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Title:</strong></label><input style="width:100%;" name="EditReqTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row2["RequirementTitle"].'">
                                       <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Description:</strong></label><textarea  style="width:100%;" cols="63" rows="5" name="RequirementDescription" style="resize:vertical" autocomplete="off">'. $row2["RequirementDescription"].'</textarea>
                                       <input style="float:left;color:white;background-color:red;" type="submit" name="actionR" value="Delete" />
                                       <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                       
                                    </form>
                                </div>
                                
                              
                                
                              </div>
                            </div>
                          </div>
                            ';}
                           echo '</div>';
                          
                    
                      ;
                    }
                    }  
                    }
                    
                          
                ?>
                     
        </div>
      </div>
      <div class="row">
            <div class="col-sm-6 Form_Container" style="background-color:#bbbbbb;padding:0 !important;border: black 1px solid;">
                <form name="DeliverableForm" action="Submit Deliverable.php" method="post" >
                   <div style="background-color:#679e97"><h4 style="margin:0 !important;color:black !important;">Define a Deliverable:</h4>
                        <label style="color:white !important;margin:0;margin-top:15px;"><strong >Which requirement is this deliverable tailored for?</strong></label>
                        <select name="RequirementDeliverable" style="width:100%;">
                        
                        <?php
                            //Connect to DB
                            $connGlobal = OpenCon();
                            $sql = "SELECT * FROM Scope_Requirements";
                            $result = $connGlobal->query($sql);
                            if ($result->num_rows > 0) {
                            // output data of each row
                              
                            while($row = $result->fetch_assoc()) {
                              
                                echo '<option value="'.$row["id"].'">Req:'.$row["RequirementTitle"].'Objective:'.$row["ObjectiveTitle"].'</option>';
                             }
                            };
                              ?>  
                                    
                        </select><br>
                        <label style="margin:0;font-size:16px;color:white !important;"><strong>Type of Deliverable:</strong></label><br>
                        <select style="width:100%;"name="DeliverableType">
                            <option value="Content Deliverable">Content Deliverable</option>
                            <option value="Project Functionality">Project Feature Proposal</option>
                            <option value="General Solution">General Solution</option>
                        
                        </select>
                        <label style="margin:0;font-size:16px;color:white !important;"><strong>Describe the Core Idea:</strong></label><br>
                        <textarea cols="85" rows="5" name="Core_Idea" style="resize:vertical;width:100%;" autocomplete="off"></textarea><br>
                        <label style="margin:0;font-size:16px;color:white !important;"><strong>Title this Deliverable:</strong></label><br>
                        <input name="DeliverableTitle" autocomplete="off" style="width:100%;" type="text"><br>
                        <label style="margin:0;font-size:16px;color:white !important;"><strong>How are we going to deliver/ display this content?</strong></label><br>
                        <textarea cols="85" rows="5" name="DeliveryMethod" style="resize:vertical;width:100%;" autocomplete="off"></textarea><br>
                        
                        <input type="submit" style="float:right;" value="Submit"><br><br>
                    </div>
                </form> </div>
               
                <div class="col-sm-6 Form_Container" style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:560px;">
        <div>
          <h4 style="margin:0 !important;color:white;background-color:black !important;">Edit/ Remove Deliverables:</h4>
        </div>
        <?php
            $connGlobal = OpenCon();
            
            $sql = "SELECT * FROM strategic_goals";
            $result = $connGlobal->query($sql);
            
            while($row = $result->fetch_assoc()) {
                $sql5 = "SELECT * FROM structure_deliverables WHERE StrategyID =". $row["id"];
                $result5 = $connGlobal->query($sql5);
                if ($result5 ->num_rows > 0) { 
                    if($row["ObjectiveType"] === "Business Objective"){
                        echo '                            
                        <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#8d9390" type="button" data-toggle="collapse" data-target="#Hidden2Req'. $row["id"] . '">
                        <strong>'. $row["ObjectiveTitle"].'</strong>
                        </button>
                        
                        <div class="collapse" id="Hidden2Req'. $row["id"] . '">      ';
                        $sql2 = "SELECT * FROM Scope_Requirements WHERE StrategyID = ".$row["id"];
                        $result2 = $connGlobal->query($sql2);
                        while($row2 = $result2->fetch_assoc()) {
                                    
                            echo '                     
                                <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#7b6eae;padding-left:15px;" type="button" data-toggle="collapse" data-target="#HiddenDeliverable'. $row2["id"] . '">
                                    <strong>'. $row2["RequirementTitle"]. '</strong>
                                </button>
                                
                                <div class="collapse" id="HiddenDeliverable'. $row2["id"] . '">'; 
                                
                                $sqlDel = "SELECT * FROM Structure_Deliverables WHERE RequirementID=".$row2["id"];
                                $Result1 = $connGlobal->query($sqlDel);
                                while($row3 = $Result1->fetch_assoc()) {
                                    if ($Result1 ->num_rows > 0) {
                                        echo '                           
                                    <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#679e97;padding-left:30px;" type="button" data-toggle="modal" data-target="#DeliveryEditModal'. $row3["id"] . '">
                                        <strong>'. $row3["DeliverableTitle"]. '</strong>
                                    </button>
                                    <div class="modal" id="DeliveryEditModal'. $row3["id"] . '">
                                    <div style="max-width:800px !important;" class="modal-dialog">
                                      <div class="modal-content">
                                      
                                      <div class="modal-header">
                                        <h3 class="modal-title">Edit/Remove Deliverable</h3>
                                      </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                        <label><strong>Strategic Objective:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:200px;"><h5>'.$row3["ObjectiveQuestion"] . '</h5><p><strong>'.$row3["ObjectiveTitle"] . '</strong><br>'.$row3["ObjectiveDescription"] . '</h5></div>
                                        
                                            <
                                          
                                            </form>
                                        </div>
                                        
                                      
                                        
                                      </div>
                                    </div>
                                  </div>'; 
                                    }
                                } echo "</div>";
                        }echo "</div>";
                        
                    }else{
                        echo '                            
                        <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#b6a9b0" type="button" data-toggle="collapse" data-target="#Hidden2Req'. $row["id"] . '">
                        <strong>'. $row["ObjectiveTitle"].'</strong>
                        </button>
                        
                        <div class="collapse" id="Hidden2Req'. $row["id"] . '">      ';
                        $sql2 = "SELECT * FROM Scope_Requirements WHERE StrategyID = ".$row["id"];
                        $result2 = $connGlobal->query($sql2);
                        while($row2 = $result2->fetch_assoc()) {
                                    
                            echo '                     
                                <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#7b6eae;padding-left:15px;" type="button" data-toggle="collapse" data-target="#HiddenDeliverable'. $row2["id"] . '">
                                    <strong>'. $row2["RequirementTitle"]. '</strong>
                                </button>
                                
                                <div class="collapse" id="HiddenDeliverable'. $row2["id"] . '">'; 
                                
                                $sqlDel = "SELECT * FROM Structure_Deliverables WHERE RequirementID=".$row2["id"];
                                $Result1 = $connGlobal->query($sqlDel);
                                while($row3 = $Result1->fetch_assoc()) {
                                    if ($Result1 ->num_rows > 0) {
                                        echo '                           
                                    <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#679e97;padding-left:30px;" type="button" data-toggle="modal" data-target="#DeliveryEditModal'. $row3["id"] . '">
                                        <strong>'. $row3["DeliverableTitle"]. '</strong>
                                    </button>
                                    <div class="modal" id="DeliveryEditModal'. $row3["id"] . '">
                                    <div style="max-width:800px !important;" class="modal-dialog">
                                      <div class="modal-content">
                                      
                                      <div class="modal-header">
                                        <h3 class="modal-title">Edit/Remove Requirement</h3>
                                      </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                        <label><strong>Strategic Objective:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:200px;"><h5>'.$row3["ObjectiveQuestion"] . '</h5><p><strong>'.$row3["ObjectiveTitle"] . '</strong><br>'.$row3["ObjectiveDescription"] . '</p></div>
                                        <form name="ModalDeliverable" action="Edit_Deliverable.php" method="post">
                                            <label><strong>Requirement:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:200px;"><h5>'.$row3["RequirementType"] . '</h5><p><strong>'.$row3["RequirementTitle"] . '</strong><br>'.$row3["RequirementDescription"] . '</p></div>
                                            <br><h3><strong>'.$row3['DeliverableType'].':</strong></h3>
                                            <form name="DeliverableModalForm" action="Edit_Deliverable.php" method="post">
                                                <input type="hidden" name="idDelReq" value="'.$row3["id"] . '">
                                                <label style="margin:0;font-size:16px;color:black;"><strong>Delivery Title:</strong></label><input style="width:100%;" name="DeliverableTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row3["DeliverableTitle"].'">
                                                <label style="margin:0;font-size:16px;color:black;"><strong>Core Idea:</strong></label><textarea style="width:100%;" cols="63" rows="5" name="DeliverableCore" style="resize:vertical" autocomplete="off">'. $row3["DeliverableCoreIdea"].'</textarea>
                                                <label style="margin:0;font-size:16px;color:black;"><strong>Delivery Method:</strong></label><textarea style="width:100%;" cols="63" rows="5" name="DeliverableDelivery" style="resize:vertical" autocomplete="off">'. $row3["DeliverableDeliveryMethod"].'</textarea>
                                                <input style="float:left;color:white;background-color:red;" type="submit" name="actionR" value="Delete" />
                                                <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                                
                                            </form>
                                        </div>
                                        
                                      
                                        
                                      </div>
                                    </div>
                                  </div>'; 
                                    }
                                } echo "</div>";
                        }echo "</div>";
                    }
                }   
            }
            
            
                        
          ?>
          </div></div>
                  
        <div class="row">
            <div class="col-sm Form_Container Form_Header_Container" style="background-color:black; color:white;">
            <h1>Structure</h1>
            </div>
        </div>
          <div class="row">
          <div class="col-sm-6 Form_Container" style="">
        <div>
          <h4 style="margin:0 !important;color:white;background-color:black !important;">Global Navigation Tags:</h4>
        </div>
        <form name="CreateGlobalTag" action="Create Global Tag.php" method="post" >
            <label style="margin:0;font-size:16px;color:black !important;"><strong>Create a webpage to host deliverables:</strong></label><br>
                <input name="GlobalTagTitle" autocomplete="off" style="width:100%;" type="text"><br>
                <input type="submit" style="float:right;" value="Submit"><br><br>
        </form>
        
            <label style="margin:0;font-size:16px;color:black !important;"><strong>Edit/ Remove Webpages:</strong></label><br>
            <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">
                <?php
                    
                        $connGlobal = OpenCon();
                        
                        $sql = "SELECT * FROM structure_deliverables WHERE DeliverableGlobalNavTagList IS NOT NULL AND DeliverableType IS NULL";
                        $result = $connGlobal->query($sql);
                        while($row = $result->fetch_assoc()) {
                            echo '                           
                            <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#679e97;padding-left:30px;" type="button" data-toggle="modal" data-target="#TagEditModal'. $row["id"] . '">
                                <strong>'. $row["DeliverableGlobalNavTagList"]. '</strong>
                            </button>';
                            
                            
                                echo 
                                '<div class="modal" id="TagEditModal'. $row["id"] . '">
                                <div style="max-width:800px !important;" class="modal-dialog">
                                <div class="modal-content">
                                
                                <div class="modal-header">
                                    <h3 class="modal-title">Edit/Remove Global Navigation Tags</h3>
                                </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                   

                                        <label style="margin:0;font-size:16px;color:black;"><strong>Global Nav Tag Title:</strong></label>
                                        <form name="ModalEditGlobalNavTags" action="Edit_Global_Navigation_Tag.php" method="post">
                                            <input type="hidden" name="idDelReq" value="'.$row["id"] . '">
                                            <input name="GlobalNavTagEdit" style="width:100%;" type="text" autocomplete="off" value="'. $row["DeliverableGlobalNavTagList"].'">
                                            <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                            <input style="float:left;color:white;background-color:red;" type="submit" name="actionR" value="Delete" /></form>
                                            </form> 

                                    <br><br><br>
                                    
                                    <form style="margin-top:7px;" name="DeliverableModalForm" action="Add_Deliverable_Global.php" method="post">
                                        <input type="hidden" name="AddGlobalTag" value="'. $row["DeliverableGlobalNavTagList"]. '">
                                        <label style="margin:0;font-size:16px;color:black;"><strong>Add Selected Deliverables To Web Page Tag:</strong></label><br>
                                        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;"><input type="hidden" name="AddGlobalTag" value="'. $row["DeliverableGlobalNavTagList"]. '">
                                        ';
//Check box Local Grouping Condition
                                            $sql5 = "SELECT * FROM structure_deliverables WHERE (DeliverableTitle IS NULL AND DeliverableLocalNavTagList IS NOT NULL AND DeliverableGlobalNavTag IS NULL) OR
                                            (DeliverableTitle IS NULL AND DeliverableLocalNavTagList IS NOT NULL AND DeliverableGlobalNavTag != '". $row["DeliverableGlobalNavTagList"]."' )";
                                            $result5 = $connGlobal->query($sql5) or die($connGlobal->error);
                                            while($row5 = $result5->fetch_assoc()) {
                                                echo '<div style="border:solid black 2px;background-color:#29A5FF">
                                                      <input type="checkbox" name="AddLocalTagToGlobal'.$row5["id"].'" value="'.$row5["id"].'"><strong>'.$row5["DeliverableLocalNavTagList"].'</strong><br>';

                                                    $sql4 = "SELECT * FROM structure_deliverables WHERE (DeliverableTitle IS NOT NULL AND DeliverableLocalNavTag ='".$row5["DeliverableLocalNavTagList"]."')" ;
                                                    $result4 = $connGlobal->query($sql4) or die($connGlobal->error);
                                                    while($row4 = $result4->fetch_assoc()) {
                                                        
                                                            echo '<div style="border-bottom:solid black 1px;padding-left:30px;background-color:#99DFFF;width:100%;">'.$row4["DeliverableTitle"].'</div>';
                                                        }
                                                echo '</div>';        
                                            }
                                            
                                        $sql2 = "SELECT * FROM structure_deliverables WHERE  (DeliverableTitle IS NOT NULL AND DeliverableLocalNavTag IS NULL AND DeliverableGlobalNavTag IS NULL ) OR (DeliverableTitle IS NOT NULL AND NOT DeliverableGlobalNavTag = '". $row["DeliverableGlobalNavTagList"]. "' AND DeliverableLocalNavTag IS NULL) ";
                                        $result3 = $connGlobal->query($sql2) or die($connGlobal->error);
                                            while($row3 = $result3->fetch_assoc()) {
                                                echo '<div style="background-color:#679e97;border:black 2px solid;"><strong><input type="checkbox" name="AddDeliverable'.$row3["id"].'" value="'.$row3["id"].'">'.$row3["DeliverableTitle"].'</strong></div>';
                                            }
                                            echo '
                                        </div>
                                        <input style="float:right;color:white;background-color:green;" type="submit" name="actionR" value="ADD" />
                                    </form> 
                                    <br>
                                    
                                    <form style="margin-top:7px;" name="RemoveModalForm" action="Remove_Deliverable_Global.php" method="post">
                                        
                                        <label style="margin:0;font-size:16px;color:black;"><strong>Remove Selected Deliverables From Web Page Tag:</strong></label><br>
                                        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">';
                                            
                                            $sql5 = "SELECT * FROM structure_deliverables WHERE (DeliverableTitle IS NULL AND DeliverableLocalNavTagList IS NOT NULL AND DeliverableGlobalNavTag = '". $row["DeliverableGlobalNavTagList"]."' )";
                                            $result5 = $connGlobal->query($sql5) or die($connGlobal->error);
                                            while($row5 = $result5->fetch_assoc()) {
                                                echo '<div style="border:solid black 2px;background-color:#29A5FF">
                                                      <input type="checkbox" name="AddLocalTagToGlobal'.$row5["id"].'" value="'.$row5["id"].'"><strong>'.$row5["DeliverableLocalNavTagList"].'</strong><br>';

                                                    $sql4 = "SELECT * FROM structure_deliverables WHERE (DeliverableTitle IS NOT NULL AND DeliverableLocalNavTag ='".$row5["DeliverableLocalNavTagList"]."')" ;
                                                    $result4 = $connGlobal->query($sql4) or die($connGlobal->error);
                                                    while($row4 = $result4->fetch_assoc()) {
                                                        
                                                            echo '<div style="border-bottom:solid black 1px;padding-left:30px;background-color:#99DFFF;width:100%;">'.$row4["DeliverableTitle"].'</div>';
                                                        }
                                                echo '</div>';        
                                            }
                                            $sql2 = "SELECT * FROM structure_deliverables WHERE (DeliverableGlobalNavTag='". $row["DeliverableGlobalNavTagList"]. "' AND DeliverableLocalNavTag IS NULL AND DeliverableTitle IS NOT NULL)";
                                            $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
                                                while($row2 = $result2->fetch_assoc()) {
                                                    echo '<div style=background-color:#679e97;border:black 2px solid;"><input type="checkbox" name="RemoveDeliverable'.$row2["id"].'" value="'.$row2["id"].'"><strong>'.$row2["DeliverableTitle"].'</strong></div>';
                                                }    
                                            echo '
                                        </div>
                                        <input style="float:right;color:white;background-color:red;" type="submit" name="actionR" value="REMOVE" />
                                    </form> 
                                </div>
                                    
                                
                                    
                                </div>
                                </div>
                            </div>';
                        
                    }
                                    
                ?>
            </div> </div>
            <div class="col-sm-6 Form_Container" style="">
        <div>
          <h4 style="margin:0 !important;color:white;background-color:black !important;">Local Navigation Tags:</h4>
        </div>
        <form name="CreateLocalTag" action="Create Local Tag.php" method="post" >
            <label style="margin:0;font-size:16px;color:black !important;"><strong>Create a group name for deliverables:</strong></label><br>
                <input name="LocalTagTitle" autocomplete="off" style="width:100%;" type="text"><br>
                <input type="submit" style="float:right;" value="Submit"><br><br>
        </form>
        
            <label style="margin:0;font-size:16px;color:black !important;"><strong>Edit/ Remove Local Groupings:</strong></label><br>
            <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">
                <?php
                    $connGlobal = OpenCon();
                        
                        $sql = "SELECT * FROM structure_deliverables WHERE DeliverableLocalNavTagList IS NOT NULL AND DeliverableType IS NULL";
                        $result = $connGlobal->query($sql);
                        while($row = $result->fetch_assoc()) {
                            echo '                           
                            <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#29A5FF;padding-left:30px;" type="button" data-toggle="modal" data-target="#TagEditModal'. $row["id"] . '">
                                <strong>'. $row["DeliverableLocalNavTagList"]. '</strong>
                            </button>';
                            
                            
                                echo 
                                '<div class="modal" id="TagEditModal'. $row["id"] . '">
                                <div style="max-width:800px !important;" class="modal-dialog">
                                <div class="modal-content">
                                
                                <div class="modal-header">
                                    <h3 class="modal-title">Edit/Remove Local Navigation Tags</h3>
                                </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                   

                                        <label style="margin:0;font-size:16px;color:black;"><strong>Local Nav Tag Title:</strong></label>
                                        <form name="ModalEditLocalNavTags" action="Edit_Local_Navigation_Tag.php" method="post">
                                            <input type="hidden" name="LocalTagEdit" value="'.$row["id"] . '">
                                            <input name="LocalNavTagEdit" style="width:100%;" type="text" autocomplete="off" value="'. $row["DeliverableLocalNavTagList"].'">
                                            <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                            <input style="float:left;color:white;background-color:red;" type="submit" name="actionR" value="Delete" /></form>
                                            </form> 

                                    <br><br><br>
                                    
                                    <form style="margin-top:7px;" name="DeliverableModalForm" action="Add_Deliverable_Local.php" method="post">
                                        
                                        <label style="margin:0;font-size:16px;color:black;"><strong>Add Selected Deliverables To Web Page Tag:</strong></label><br>
                                        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;"><input type="hidden" name="AddLocalTag" value="'. $row["DeliverableLocalNavTagList"]. '">
                                        ';

                                            $sql2 = "SELECT * FROM structure_deliverables WHERE  (DeliverableTitle IS NOT NULL AND DeliverableLocalNavTag IS NULL AND DeliverableGlobalNavTagList IS NULL) OR NOT DeliverableLocalNavTag = '". $row["DeliverableLocalNavTagList"]. "' ";
                                            $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
                                            while($row2 = $result2->fetch_assoc()) {
                                                echo '<div style="border:black 2px solid;"><input type="checkbox" name="AddDeliverableLocal'.$row2["id"].'" value="'.$row2["id"].'">'.$row2["DeliverableTitle"].'</div>';
                                            }
                                            echo '
                                        </div>
                                        <input style="float:right;color:white;background-color:green;" type="submit" name="actionR" value="ADD" />
                                    </form> 
                                    <br>
                                    
                                    <form style="margin-top:7px;" name="RemoveModalForm" action="Remove_Deliverable_Local.php" method="post">
                                        
                                        <label style="margin:0;font-size:16px;color:black;"><strong>Remove Selected Deliverables From Web Page Tag:</strong></label><br>
                                        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">';
                                            $Counter = 0;
                                            $sql2 = "SELECT * FROM structure_deliverables WHERE  (DeliverableTitle IS NOT NULL AND DeliverableLocalNavTagList IS NULL AND DeliverableGlobalNavTagList IS NULL) AND DeliverableLocalNavTag = '". $row["DeliverableLocalNavTagList"]. "' ";
                                            $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
                                                while($row2 = $result2->fetch_assoc()) {
                                                    $Counter = $Counter + 1;
                                                    echo '<div style="border:black 2px solid;"><input type="checkbox" name="RemoveDeliverable'.$row2["id"].'" value="'.$row2["id"].'">'.$row2["id"] . $row2["DeliverableTitle"].'</div>';
                                                }
                                            echo '
                                        </div>
                                        <input style="float:right;color:white;background-color:red;" type="submit" name="actionR" value="REMOVE" />
                                    </form> 
                                </div>
                                    
                                
                                    
                                </div>
                                </div>
                            </div>';
                        
                    }
                                    
                ?>
            </div> </div>
            </div>

    
    </body>
</body>

</html>