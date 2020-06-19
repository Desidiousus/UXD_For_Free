
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

</head>

<body>
<div class="container">
<div class="row"> 
  <div class="col-sm-6 Form_Container" style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:410px;">
        <div>
          <h4 style="margin:0 !important;color:white;background-color:black !important;">Edit/ Remove Requirements:</h4>
        </div>
                                    
                <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#8d9390" type="button" data-toggle="collapse" data-target="#HiddenRequirement2">
                  <strong>Test OBJ 1</strong>
                </button><div class="collapse" id="HiddenRequirement2">
                
                                          
              <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#8d9390" type="button" data-toggle="collapse" data-target="#HiddenRequirement3">
                <strong>Test 2</strong>
              </button><div class="collapse" id="HiddenRequirement3">
              
            
                      <button style="padding:0;padding-left:15px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;text-decoration:underline;border:solid black 2px;background-color:#b0abc4;" type="button" data-toggle="modal" data-target="#ReqEdit4">
                <strong>2</strong>
              </button>
                      <div class="modal" id="ReqEdit4">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        
                        <div class="modal-header">
                          <h3 class="modal-title">Edit/Remove Requirement</h3>
                        </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                          <label><strong>Strategic Objective:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:100px;"><h5>What do I want the website to offer?</h5><p><strong>Test 2</strong><br>Test 2</p></div>
                          <form name="ModalformReqEdit" action="Edit_Requirement.php" method="post">
                                 <label><strong>Requirement Type:</strong></label>
                                 <p>Objective - What does the user want to accomplish?</p>
                                 <input type="hidden" name="idDelReq" value="4">
                                 <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Title:</strong></label><input name="EditReqTitle" style="width:100%;" type="text" autocomplete="off" value="2">
                                 <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Description:</strong></label><textarea cols="63" rows="5" name="EditReqDescription" style="resize:vertical" autocomplete="off">2</textarea>
                                 <input style="float:right;color:white;background-color:red;" type="submit" name="actionR" value="Delete" />
                                 <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                 
                              </form>
                          </div>
                          
                        
                          
                        </div>
                      </div>
                    </div>
                      
                      <button style="padding:0;padding-left:15px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;text-decoration:underline;border:solid black 2px;background-color:#b0abc4;" type="button" data-toggle="modal" data-target="#ReqEdit6">
                <strong>3</strong>
              </button>
                      <div class="modal" id="ReqEdit6">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        
                        <div class="modal-header">
                          <h3 class="modal-title">Edit/Remove Requirement</h3>
                        </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                          <label><strong>Strategic Objective:</strong><div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:100px;"><h5>What do I want the website to offer?</h5><p><strong>Test 2</strong><br>Test 2</p></div>
                          <form name="ModalformReqEdit" action="Edit_Requirement.php" method="post">
                                 <label><strong>Requirement Type:</strong></label>
                                 <p>Objective - What does the user want to accomplish?</p>
                                 <input type="hidden" name="idDelReq" value="6">
                                 <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Title:</strong></label><input name="EditReqTitle" style="width:100%;" type="text" autocomplete="off" value="3">
                                 <label style="margin:0;font-size:16px;color:black;"><strong>Requirement Description:</strong></label><textarea cols="63" rows="5" name="EditReqDescription" style="resize:vertical" autocomplete="off">3</textarea>
                                 <input style="float:right;color:white;background-color:red;" type="submit" name="actionR" value="Delete" />
                                 <input style="float:right;color:white;background-color:blue;" type="submit" name="actionR" value="Update" />
                                 
                              </form>
                          </div>
                          
                        
                          
                        </div>
                      </div>
                    </div>
                                     
  </div>
  </div></div></div></div>

</body>

</html>