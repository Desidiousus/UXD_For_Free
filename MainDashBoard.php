<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Title of the document</title>

  <link rel="stylesheet" type="text/css" href="BettaBetaTestV2.0.css">
  <!-- Jquery CDN and Local JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
  <!-- BootStrap CDN and Local CSS --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="BootStrap\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- BootStrap CDN and Local JS --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="BootStrap\js\bootstrap.min.js" rel="stylesheet" type="text/css" />

    
  <!-- Include external CSS. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
  
    <!-- Include Editor style. -->
    <link href="Froala\css\froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="Froala\css\froala_style.min.css" rel="stylesheet" type="text/css" />
  <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
  <!-- Include Editor JS files. -->
    <script type="text/javascript" src="Froala\js\froala_editor.pkgd.min.js"></script>
  <!-- Initialize the editor. -->
    <script> $(function() { $('.EditArea').froalaEditor() }); </script>
  <!-- Include JS file. -->
  <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.min.js'></script>
  

    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
  
    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    </head>
  
    <body>
    
    
  
    <!-- Include external CSS. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
  
    <!-- Include Editor style. -->
    <link href="Froala\css\froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="Froala\css\froala_style.min.css" rel="stylesheet" type="text/css" />
  <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
  <!-- Include Editor JS files. -->
    <script type="text/javascript" src="Froala\js\froala_editor.pkgd.min.js"></script>
  <!-- Initialize the editor. -->
    <script> $(function() { $('.EditArea').froalaEditor() }); </script>


</head>
<style>
    .EditArea{}
    .container-full {width:90% !important;margin-left:5%;}
    .fr-wrapper{resize: vertical;height:450px;overflow:scroll;overflow-x:hidden;}
    #swapView{font-size:22px;background-color:#003faa;color:white;text-align:center;padding-top:20px;padding-bottom:20px;width:100%;text-decoration:underline;}
    #swapView:hover {font-size:22px;background-color:white !important;color:#003faa !important;text-align:center;padding-top:20px;padding-bottom:20px;width:100%;}
    #selecta:hover{background-color:orange;color:white;}
    #selecta{padding-left:15px;padding-right:15px;padding-bottom:6px;padding-top:6px;width:100%;text-align:left;font-size:20px;}
    .hide{display:none;}
    .Show{display:block;}
    #SwapToRow:hover{color:red !important;background-color:white !important;border:2px solid red;text-decoration:underline;}
    #SwapToCol:hover{color:red !important;background-color:white !important;border:2px solid red;text-decoration:underline;}
    .Selectors:hover{background-color:black !important;}
    .Selectors{border:solid black 2px;font-size:18px;padding-top:8px !important;padding-bottom:8px !important;font-weight:450;}
    .ObjSel1:hover{color:#a3c09a !important;border:solid 1px #a3c09a} 
    .ReqSel1:hover{color:#e8dd67 !important;border:solid 1px #e8dd67;background:black;} 
    .DelSel1:hover{color:#d98484 !important;border:solid 1px #d98484} 
    a{margin:0;}
    .ObjHeader:hover{color:#a3c09a !important;border:solid 1px #a3c09a !important;background-color:black !important;}
    .ReqHeader:hover{color:#e8dd67 !important;border:solid 1px #e8dd67 !important;background-color:black !important;} 
    .DelHeader:hover{color:#d98484 !important;border:solid 1px #d98484 !important;background-color:black !important;} 
    .ObjHeader{height:100%;padding-top: 15px;padding-bottom:0;color:black !important;text-decoration:underline;}
    .ReqHeader{height:100%;padding-top: 15px;padding-bottom:0;color:black !important;background:#e8dd67;text-decoration:underline;} 
    .DelHeader{height:100%;padding-top: 15px;padding-bottom:0;color:black !important;text-decoration:underline;} 
    .ActiveItemObj{color:#a3c09a !important;border:solid 1px #a3c09a !important;background-color:black !important;}
    .ActiveItemReq{color:#e8dd67 !important;border:solid 1px #e8dd67 !important;background-color:black !important;}
    .ActiveItemDel{color:#d98484 !important;border:solid 1px #d98484 !important;background-color:black !important;}
    .scrollDiv{max-height:450px;font-size:18px;resize: vertical;border: 1px solid #222; padding: 10px;overflow-x:hidden;display: flex;padding-left:15px;width:100%;float: left; display: inline;white-space: initial;overflow-wrap: break-word;max-width:100%;}
    .scrollDiv1{max-height:450px;font-size:18px;resize: vertical;border: 1px solid #222;width: 500px; padding: 10px;overflow-x:hidden;display: flex;padding-left:15px;width:100%;float: left; display: inline;white-space: initial;overflow-wrap: break-word;max-width:100%;padding-right:20px;}
    input[type='checkbox'] {
    -webkit-appearance:none;
    width:30px;
    height:30px;
    background:white;
    border-radius:5px;
    border:2px solid #555;
}
input[type='checkbox']:checked {
    background: #abd;
}
</style>
<script>
    var optionText, array = [], newString, maxChar = 40;
    $('select').each(function(){
    $(this).find('option').each(function(i,e) {
    $(e).attr('title',$(e).text());
    optionText = $(e).text();
    newString = '';
    if (optionText.length > maxChar) {
    array = optionText.split(' ');
    $.each(array,function(ind,ele) { 
    newString += ele+' ';
    if (ind > 0 && newString.length > maxChar) {
    $(e).text(newString);
    return false;
    }
    });

    }
    });
    });
    function OBJHider(id)
    {
    var testarray = document.getElementsByClassName("SelectorsObj");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemObj');
    }
    var testarray = document.getElementsByClassName("SelectorsReq");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemReq');
    }
    var testarray = document.getElementsByClassName("SelectorsDel");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemDel');
    }
    

    var testarray = document.getElementsByClassName("SelectorsObj1");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemObj');
    }
    var testarray = document.getElementsByClassName("SelectorsReq1");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemReq');
    }
    var testarray = document.getElementsByClassName("SelectorsDel1");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemDel');
    }
    document.getElementById("SelObj1"+id).classList.add('ActiveItemObj');
    document.getElementById("SelObj"+id).classList.add('ActiveItemObj');

    var testarray = document.getElementsByClassName("ObjDesc");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('Show');
    testarray[i].classList.remove('hide'); 
    testarray[i].classList.add('hide');
    }
    var testarray2 = document.getElementsByClassName("ObjHeader");
    for(var i = 0; i < testarray2.length; i++)
    {
    testarray2[i].classList.remove('Show');
    testarray2[i].classList.remove('hide');
    testarray2[i].classList.add('hide');
    }
    var testarray3 = document.getElementsByClassName("ReqSel");
    for(var i = 0; i < testarray3.length; i++)
    {
    testarray3[i].classList.remove('Show');
    testarray3[i].classList.remove('hide');
    testarray3[i].classList.add('hide');
    }
    var testarray3 = document.getElementsByClassName("ReqSel"+ id);
    for(var i = 0; i < testarray3.length; i++)
    {
    testarray3[i].classList.remove('Show');
    testarray3[i].classList.remove('hide');
    testarray3[i].classList.add('Show');
    }
    var testarray = document.getElementsByClassName("ReqDesc");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('Show');
    testarray[i].classList.remove('hide'); 
    testarray[i].classList.add('hide');
    }
    var testarray2 = document.getElementsByClassName("ReqHeader");
    for(var i = 0; i < testarray2.length; i++)
    {
    testarray2[i].classList.remove('Show');
    testarray2[i].classList.remove('hide');
    testarray2[i].classList.add('hide');
    }
    var testarray3 = document.getElementsByClassName("DelSel");
    for(var i = 0; i < testarray3.length; i++)
    {
    testarray3[i].classList.remove('Show');
    testarray3[i].classList.remove('hide');
    testarray3[i].classList.add('hide');
    }
    var element =  document.getElementById("ReqSel" + id);
    if (typeof(element) != 'undefined' && element != null)
    {
    document.getElementById("ReqSel" + id).classList.add('Show');
    document.getElementById("ReqSel" + id).classList.remove('hide');
    }
    var testarray = document.getElementsByClassName("DelDesc");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('Show');
    testarray[i].classList.remove('hide'); 
    testarray[i].classList.add('hide');
    }
    var testarray2 = document.getElementsByClassName("DelHeader");
    for(var i = 0; i < testarray2.length; i++)
    {
    testarray2[i].classList.remove('Show');
    testarray2[i].classList.remove('hide');
    testarray2[i].classList.add('hide');
    }

    document.getElementById("HeaderOBJ" + id).classList.add('Show');
    document.getElementById("HeaderOBJ" + id).classList.remove('hide');
    document.getElementById("HeaderDesc" + id).classList.add('Show');
    document.getElementById("HeaderDesc" + id).classList.remove('hide');   
    document.getElementById("HeaderOBJ1" + id).classList.add('Show');
    document.getElementById("HeaderOBJ1" + id).classList.remove('hide');
    document.getElementById("HeaderDesc1" + id).classList.add('Show');
    document.getElementById("HeaderDesc1" + id).classList.remove('hide'); 

    }   
    function ReqHider(id){
    var testarray = document.getElementsByClassName("ReqDesc");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('Show');
    testarray[i].classList.remove('hide'); 
    testarray[i].classList.add('hide');
    }
    var testarray2 = document.getElementsByClassName("ReqHeader");
    for(var i = 0; i < testarray2.length; i++)
    {
    testarray2[i].classList.remove('Show');
    testarray2[i].classList.remove('hide');
    testarray2[i].classList.add('hide');
    }
    var testarray3 = document.getElementsByClassName("DelSel" );
    for(var i = 0; i < testarray3.length; i++)
    {
    testarray3[i].classList.remove('Show');
    testarray3[i].classList.remove('hide');
    testarray3[i].classList.add('hide');
    }
    var testarray3 = document.getElementsByClassName("DelSel" +id);
    for(var i = 0; i < testarray3.length; i++)
    {
    testarray3[i].classList.remove('Show');
    testarray3[i].classList.remove('hide');
    testarray3[i].classList.add('Show');
    }
    var testarray = document.getElementsByClassName("DelDesc");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('Show');
    testarray[i].classList.remove('hide'); 
    testarray[i].classList.add('hide');
    }
    var testarray2 = document.getElementsByClassName("DelHeader");
    for(var i = 0; i < testarray2.length; i++)
    {
    testarray2[i].classList.remove('Show');
    testarray2[i].classList.remove('hide');
    testarray2[i].classList.add('hide');
    }
    var testarray = document.getElementsByClassName("SelectorsReq1");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemReq');
    }
    var testarray = document.getElementsByClassName("SelectorsDel1");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemDel');
    }
    var testarray = document.getElementsByClassName("SelectorsReq");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemReq');
    }
    var testarray = document.getElementsByClassName("SelectorsDel");
    for(var i = 0; i < testarray.length; i++)
    {
    testarray[i].classList.remove('ActiveItemDel');
    }
    document.getElementById("SelReq"+id).classList.add('ActiveItemReq');
    document.getElementById("SelReq1"+id).classList.add('ActiveItemReq');

    document.getElementById("HeaderReq" + id).classList.add('Show');
    document.getElementById("HeaderReq" + id).classList.remove('hide');
    document.getElementById("ReqDesc" + id).classList.add('Show');
    document.getElementById("ReqDesc" + id).classList.remove('hide');   
    
    document.getElementById("ReqDesc1" + id).classList.add('Show');
    document.getElementById("ReqDesc1" + id).classList.remove('hide');  
    document.getElementById("HeaderReq1" + id).classList.add('Show');
    document.getElementById("HeaderReq1" + id).classList.remove('hide');
    } 

    function DelHider(id){
  var testarray = document.getElementsByClassName("DelDesc");
  for(var i = 0; i < testarray.length; i++)
  {
  testarray[i].classList.remove('Show');
  testarray[i].classList.remove('hide'); 
  testarray[i].classList.add('hide');
  }
  var testarray2 = document.getElementsByClassName("DelHeader");
  for(var i = 0; i < testarray2.length; i++)
  {
  testarray2[i].classList.remove('Show');
  testarray2[i].classList.remove('hide');
  testarray2[i].classList.add('hide');
  }
  var testarray = document.getElementsByClassName("SelectorsDel");
  for(var i = 0; i < testarray.length; i++)
  {
  testarray[i].classList.remove('ActiveItemDel');
  }
  document.getElementById("SelDel"+id).classList.add('ActiveItemDel');

  var testarray = document.getElementsByClassName("SelectorsDel1");
  for(var i = 0; i < testarray.length; i++)
  {
  testarray[i].classList.remove('ActiveItemDel');
  }
  document.getElementById("SelDel1"+id).classList.add('ActiveItemDel');
  
  document.getElementById("HeaderDel" + id).classList.add('Show');
  document.getElementById("HeaderDel" + id).classList.remove('hide');
  document.getElementById("DelDesc" + id).classList.add('Show');
  document.getElementById("DelDesc" + id).classList.remove('hide');   
  document.getElementById("HeaderDel1" + id).classList.add('Show');
  document.getElementById("HeaderDel1" + id).classList.remove('hide');
  document.getElementById("DelDesc1" + id).classList.add('Show');
  document.getElementById("DelDesc1" + id).classList.remove('hide');   

  }   

  document.getElementById("RowView" ).classList.remove('hide');   
  document.getElementById("RowView" ).classList.remove('Show');   
  document.getElementById("RowView" ).classList.add('hide');   
  document.getElementById("ColView" ).classList.remove('hide');   
  document.getElementById("ColView" ).classList.remove('Show');   
  document.getElementById("ColView" ).classList.add('Show');  
  }  
   
</script>

<body>  
<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "BettaBetaTest";
  $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
  //If DB doesnt exist, create it
  if (!$conn ) {
    'Could not connect: ' . mysql_error();
  }

  // Make my_db the current database
  $db_selected = mysqli_select_db( $conn, "BettaBetaTest");

  if (empty($db_selected)) {
    // If we couldn't, then it either doesn't exist, or we can't see it.
    $sql = 'CREATE DATABASE BettaBetaTest';

    if (mysqli_query($conn,$sql )) {
    echo "Database my_db created successfully\n";
    } else {
    echo 'Error creating database: ' . mysql_error() . "\n";
    }
  }

  function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "BettaBetaTest";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or 
    die("Connect failed: %s\n". $conn -> error);
    return $conn;
  }
  $conn = OpenCon();
  
  //Create table if it doesnt already exist
  $query = "SELECT ID FROM Structure_Deliverables";
  $result = mysqli_query($conn, $query);
  if(empty($result)) {
    $query = "CREATE TABLE Structure_Deliverables (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ObjectiveSeqID INT, 
    ObjectiveTitle VARCHAR(600) ,
    ObjectiveDescription TEXT(50000),
    ObjectiveQuestion VARCHAR(500),
    RequirementSeqID INT,
    RequirementTitle TEXT(600),
    RequirementObjectiveID INT,
    RequirementDescription TEXT(50000),
    RequirementType VARCHAR(2000), 
    RequirementAssignedDeliverableIDs TEXT(10000),
    DeliverableTitle TEXT(600),
    DeliverableDescription TEXT(50000),
    DeliverableType VARCHAR(2000),
    DeliverableAssignedRequirementIDs TEXT(1000),
    DeliverableAssignedCollabIDs TEXT(1000),
    DeliverableDeadline DATE,
    DeliverableGlobalNavTag VARCHAR(2000),
    DeliverableLocalNavTag VARCHAR(2000),
    GlobalNavTags VARCHAR(2000),
    LocalNavTags VARCHAR(2000),
    CollabFirstLast TEXT(2000),
    CollabAssignedDeliverableIDs TEXT(5000),
    CollabJobTitle TEXT(2000),
    CollabPhone TEXT(100),
    CollabEmail TEXT(300)
    )";
    
    if ($conn->query($query) === TRUE) {
    echo "New Table created successfully";
    } else {
    echo "Error: " . $query . "<br>" . $conn->error;
    }
    
  }?>
<div class="container-full" style="padding-left:0;width:100%;">
<div class="row">
    <a style="width:100%;text-align:center;" type="button" data-toggle="collapse" 
    data-target="#GlobalLocalCollapse"><h1>MetaBetaTest</h1></a>
</div>
<div class="collapse " id="GlobalLocalCollapse" style="padding:0;width:100%;" >
  <div class="row">
    <div class="col-sm-4" style="padding:0;margin:0;">
      <div>
        <h4 style="margin:0 !important;color:white;background-color:black !important;">
          Global Navigation Tags:
        </h4>
      </div>
    <form name="CreateGlobalTag" action="Create Global Tag.php" method="post" >
      <label style="margin:0;font-size:21px;color:black !important;"><strong>
        Create a webpage to host deliverables:</strong></label><br>
      <input type="hidden" name="ObjectiveID" value="<?php  
        if(!empty($_GET["activeObjective"])){echo $_GET["activeObjective"];} ?>">
      <input name="GlobalTagTitle" autocomplete="off" style="width:100%;" type="text"><br>
      <input type="submit" style="float:right;" value="Submit"><br><br>
    </form>
  
    <label style="margin:0;font-size:21px;color:black !important;"><strong>
      Edit/ Remove Webpages:</strong></label><br>
    <div style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:450px;">
    <?php
    
      $connGlobal = OpenCon();
      
      $sql = "SELECT id, GlobalNavTags FROM structure_deliverables WHERE GlobalNavTags IS NOT NULL
      AND DeliverableType IS NULL";
      $result = $connGlobal->query($sql);
      
      while($row = $result->fetch_assoc()) {
        echo '     
        <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;
        text-align:left;width:100%;border:solid black 2px;background-color:#679e97;
        padding-left:30px;font-size:18px !important" type="button" data-toggle="modal" 
        data-target="#TagEditModal'. $row["id"] . '">
          <strong>'. $row["GlobalNavTags"]. '</strong>
        </button>';
        
        
        echo '<div class="modal" id="TagEditModal'. $row["id"] . '">
        <div style="max-width:1200px !important;" class="modal-dialog">
        <div class="modal-content">
        
        <div class="modal-header">
        <h3 class="modal-title">Edit/Remove Global Navigation Tags</h3>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        

        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>
        Global Nav Tag Title:</strong></label>
        <form name="ModalEditGlobalNavTags" action="Edit_Global_Navigation_Tag.php" 
        method="post">
          <input type="hidden" name="idDelReq" value="'.$row["id"] . '">
          
          <input name="GlobalNavTagEdit" style="width:100%;font-size:21px;" type="text" 
            autocomplete="off" value="'. $row["GlobalNavTags"].'">
          <input style="float:right;color:white;background-color:blue;font-size:21px;" 
            type="submit" name="actionR" value="Update" />
          <input style="float:left;color:white;background-color:red;font-size:21px;" 
            type="submit" name="actionR" value="Delete" /></form>
        </form> 

        <br><br><br>
        
        <form style="margin-top:7px;" name="DeliverableModalForm" action="Add_Deliverable_Global.php" method="post">
        <input type="hidden" name="AddGlobalTag" value="'. $row["id"]. '">
        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Add Selected Deliverables To Web Page Tag:</strong></label><br>
        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">
        
        ';
    //Check box Local Grouping Condition
        $sql5 = "SELECT * FROM structure_deliverables WHERE (GlobalNavTags IS NULL AND LocalNavTags IS NOT NULL AND DeliverableGlobalNavTag IS NULL)ORDER BY id ASC";
        $result5 = $connGlobal->query($sql5) or die($connGlobal->error);
        while($row5 = $result5->fetch_assoc()) {
          echo '<div style="border:solid black 2px;background-color:#29A5FF;font-size:18px;">
          <input type="checkbox" name="AddLocalTagToGlobal[]" value="'.$row5["id"].'">
          '.$row5["id"].".) ".$row5["LocalNavTags"].'<br>';
          echo '</div>';  
        }
        
        $sql2 = "SELECT * FROM structure_deliverables WHERE  
          (DeliverableType IS NOT NULL AND DeliverableLocalNavTag IS NULL AND DeliverableGlobalNavTag IS NULL AND
          GlobalNavTags IS NULL AND DeliverableAssignedRequirementIDs IS NOT NULL)  ORDER BY id ASC ";
        $result3 = $connGlobal->query($sql2) or die($connGlobal->error);
        while($row3 = $result3->fetch_assoc()) {
          echo '<div style="font-size:18px;background-color:#d98484; border: black 2px 
            solid;">
              <input type="checkbox" name="AddLocalTagToGlobal[]" value="'.$row3["id"].'">'.$row3["id"].".) ".$row3["DeliverableTitle"].'</strong>
          </div>';
        }
        echo '</div>
        <input style="float:right;color:white;background-color:green;font-size:21px;"
          type="submit" name="actionR" value="ADD" />
        </form> 
        <br>
        
        <form style="margin-top:7px;" name="RemoveModalForm" action="Remove_Deliverable_Global.php" method="post">
        <input type="hidden" name="RemoveGlobalTag" value="'. $row["id"]. '">
        <label style="margin:0;font-size:16px;color:black;font-size:21px;">
          <strong>Remove Selected Deliverables From Web Page Tag:</strong>
        </label><br>
        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;border:black 2px solid;">';
        
        $sql5 = "SELECT * FROM structure_deliverables WHERE 
        (DeliverableTitle IS NULL AND LocalNavTags IS NOT NULL AND DeliverableGlobalNavTag = '". $row["id"]."' )ORDER BY id ASC";
        $result5 = $connGlobal->query($sql5) or die($connGlobal->error);
        while($row5 = $result5->fetch_assoc()) {
          echo '<div style="border:solid black 2px;background-color:#29A5FF;font-size:18px;">
          <input type="checkbox" name="RemoveDeliverable[]" value="'.$row5["id"].'"><strong>'.$row5["id"].".) ".$row5["LocalNavTags"].'</strong><br>';

          echo '</div>';  
        }
        $sql2 = "SELECT * FROM structure_deliverables WHERE (DeliverableGlobalNavTag='". $row["id"]. "' 
         AND DeliverableType IS NOT NULL AND DeliverableLocalNavTag IS NULL)ORDER BY id ASC";
        $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
          while($row2 = $result2->fetch_assoc()) {
          echo '<div style="background-color:#d98484;border:black 2px solid;font-size:18px;">
          <input type="checkbox" name="RemoveDeliverable[]" value="'.$row2["id"].'">'.$row2["id"].".) ".$row2["DeliverableTitle"].'</strong>
          
          </div>';
          }  
        echo '
        </div>
        <input style="float:right;color:white;background-color:red;font-size:21px;" type="submit" name="actionR" value="REMOVE" />
        </form> 
        </div>
        
        
        </div>
        </div>
      </div>';
        
        }
      
      
  ?>
  </div></div>
  <div class="col-sm-4" style="padding:0;">
  <div>
  <h4 style="margin:0 !important;color:white;background-color:black !important;">Local Navigation Tags:</h4>
  </div>
  <form style="margin:0 !important;color:white;background-color:white !important;" name="CreateLocalTag" action="Create Local Tag.php" method="post" >
  <label style="margin:0;font-size:21px;color:black !important;"><strong>Create a group name for deliverables:</strong></label><br>
  <input name="LocalTagTitle" autocomplete="off" style="width:100%;" type="text"><br>
  
  <input type="submit" style="float:right;" value="Submit"><br><br>
  </form>
  
  <label style="margin:0;width:100%;font-size:21px;color:black !important;background-color:white;"><strong>Edit/ Remove Local Groupings:</strong></label><br>
  <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:450px;">
  <?php
    $connGlobal = OpenCon();
    
    $sql = "SELECT * FROM structure_deliverables WHERE LocalNavTags IS NOT NULL AND DeliverableType IS NULL";
     
    if( $result = $connGlobal->query($sql)){
    while($row = $result->fetch_assoc()) {
    echo '     
    <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;border:solid black 2px;background-color:#29A5FF;padding-left:30px;font-size:18px !important" type="button" data-toggle="modal" data-target="#TagEditModal'. $row["id"] . '">
      <strong>'. $row["LocalNavTags"]. '</strong>
    </button>';
    
    
      echo 
      '<div class="modal" id="TagEditModal'. $row["id"] . '">
      <div style="max-width:1200px !important;" class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-header">
      <h3 class="modal-title">Edit/Remove Local Navigation Tags</h3>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      

        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Local Nav Tag Title:</strong></label>
        <form name="ModalEditLocalNavTags" action="Edit_Local_Navigation_Tag.php" method="post">
        <input type="hidden" name="idDelReq" value="'.$row["id"] . '">
         
        <input type="hidden" name="LocalTagEdit" value="'.$row["id"] . '">
        <input name="LocalNavTagEdit" style="width:100%;font-size:19px;" type="text" autocomplete="off" value="'. $row["LocalNavTags"].'">
        <input style="float:right;color:white;background-color:blue;font-size:21px;" type="submit" name="actionR" value="Update" />
        <input style="float:left;color:white;background-color:red;font-size:21px;" type="submit" name="actionR" value="Delete" /></form>
        </form> 

      <br><br><br>
      
      <form style="margin-top:7px;" name="DeliverableModalForm" action="Add_Deliverable_Local.php" method="post">
      
        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Add Selected Deliverables To Local Nav Tag Group:</strong></label><br>
        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;
          height:250px;border:black 2px solid;">
            <input type="hidden" name="AddLocalTag" value="'. $row["id"]. '">
        ';
        
        $sql2 = "SELECT * FROM structure_deliverables WHERE  (DeliverableTitle IS NOT NULL AND DeliverableLocalNavTag IS NULL AND DeliverableGlobalNavTag IS NULL)  ORDER BY id ASC";
        $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
        while($row2 = $result2->fetch_assoc()) {
        echo '<div style="border:black 2px solid;background-color:#d98484;font-size:18px;">
        <input type="checkbox" name="AddDeliverableLocal[]" value="'.$row2["id"].'"><strong>'. $row2["id"].".) ".$row2["DeliverableTitle"].'</strong></div>';
        }
        echo '
        </div>
        <input style="float:right;color:white;background-color:green;font-sixe:21px;" type="submit" name="actionR" value="ADD" />
      </form> 
      <br>
      
      <form style="margin-top:7px;" name="RemoveModalForm" action="Remove_Deliverable_Local.php" method="post">
        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Remove Selected Deliverables From Web Page Tag:</strong></label><br>
        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">
        <input type="hidden" name="AddLocalTag" value="'. $row["id"]. '">
        ';
        $Counter = 0;
        $sql2 = "SELECT * FROM structure_deliverables WHERE  DeliverableLocalNavTag = '". $row["id"]. "' ORDER BY id ASC ";
        $result2 = $connGlobal->query($sql2) or die($connGlobal->error);
        while($row2 = $result2->fetch_assoc()) {
        $Counter = $Counter + 1;
        echo '<div style="border:black 2px solid;background-color:#99DFFF;font-size:18px;"><input type="checkbox" 
        name="RemoveDeliverable[]'.$row2["id"].'" value="'.$row2["id"].'"><strong>'. $row2["id"].".) ".$row2["DeliverableTitle"].'</strong></div>';
        }
        echo '
        </div>
        <input style="float:right;color:white;background-color:red;font-sixe:21px;" type="submit" name="actionR" value="REMOVE" />
      </form> 
      </div>
      
      
      
      </div>
      </div>
    </div>';
    
    }
    }
      
  ?>  
    </div>
  
  </div>
  <div class="col-sm-4" style="padding:0;">
  <div>
  <h4 style="margin:0 !important;color:white;background-color:black !important;">Collaborator Profiles:</h4>
  </div>
  <form style="margin:0 !important;color:white;background-color:white !important;" 
    name="CreateCreative" action="Create Employee Profile.php" method="post" >
  <label style="margin:0;font-size:21px;color:black !important;"><strong>Create an employee profile:</strong></label><br>
  <input name="CreateEmployeeProfile" autocomplete="off" style="width:100%;" type="text"><br>
  <input type="hidden" name="ObjectiveID" value="'.$row["id"] . '">
  <input type="submit" style="float:right;" value="Submit"><br><br>
  </form>
  
  <label style="margin:0;width:100%;font-size:21px;color:black !important;background-color:white;">
    <strong>Edit/Remove Collaborator Profiles:</strong></label><br>
  <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:450px;">
  <?php
    $connGlobal = OpenCon();
    
    $sql = "SELECT * FROM structure_deliverables WHERE CollabFirstLast IS NOT NULL AND DeliverableType IS NULL";
     
    if( $result = $connGlobal->query($sql)){
    while($row = $result->fetch_assoc()) {
    echo '     
    <button style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;width:100%;
      border:solid black 2px;background-color:#7F6DB3;padding-left:30px;color:yellow;font-size:18px !important" type="button" 
      data-toggle="modal" data-target="#TagEditModal'. $row["id"] . '">
      <strong>'. $row["CollabFirstLast"]. '</strong>
    </button>';
    
    
      echo 
      '<div class="modal" id="TagEditModal'. $row["id"] . '">
      <div style="max-width:1200px !important;" class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-header">
      <h3 class="modal-title">Edit/Remove Collaborators</h3>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      

        
        <form name="EditCollaborators" action="Edit_Collaborators.php" method="post">
          <input type="hidden" name="idDelReq" value="'.$row["id"] . '">
          
          <input type="hidden" name="CollabID" value="'.$row["id"] . '">
          <input type="hidden" name="CollabTitle" value="'.$row["CollabFirstLast"] . '">
          <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Collaborator Name:</strong></label>
          <input name="CollabFirstLast" style="width:100%;font-size:19px;" type="text" autocomplete="off"
            value="'. $row["CollabFirstLast"].'">
          <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Job Title:</strong></label>
          <input name="CollabJobTitle" style="width:100%;font-size:19px;" type="text" autocomplete="off"
            value="'. $row["CollabJobTitle"].'">
            <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Phone Number:</strong></label>
          <input name="CollabPhone" style="width:100%;font-size:19px;" type="text" autocomplete="off"
            value="'. $row["CollabPhone"].'">
          <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Email Address:</strong></label>
          <input name="CollabEmail" style="width:100%;font-size:19px;" type="text" autocomplete="off"
            value="'. $row["CollabEmail"].'">
          <input style="float:right;color:white;background-color:blue;font-size:21px;" 
            type="submit" name="actionR" value="Update" />
          <input style="float:left;color:white;background-color:red;font-size:21px;" type="submit" 
            name="actionR" value="Delete" /></form>
        </form> 

      <br><br>
      
      <form style="margin-top:7px;" name="DeliverMe" action="Add_Deliverable_To_Collab.php" method="post">
      
        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Add the selected deliverable(s) to Employee\'s assigned tasks:
          </strong></label><br>
        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;
        border:black 2px solid;">
          
          ';
          if(!empty($row['CollabAssignedDeliverableIDs']))
          {
            $sql211 = "SELECT *  FROM Structure_Deliverables where DeliverableType IS NOT NULL AND id NOT IN (". $row['CollabAssignedDeliverableIDs'].") ORDER BY id ASC" ;
            $result26 = $connGlobal->query($sql211) or die($connGlobal->error);
            if($result26)
            {
              while($row2 = $result26->fetch_assoc()) 
              {

              echo '<div style="border:black 2px solid;background-color:#d98484;font-size:18px;">
              <input type="checkbox" name="AddDeliverableToCollab[]" value="'.$row2["id"].'">
              <strong>'. $row2["id"].".) ".$row2["DeliverableTitle"].'</strong></div>
              <input type="hidden" name="collabID" value="'. $row["id"]. '">';
  
              }
            }
          }else{
            $sql211 = "SELECT *  FROM Structure_Deliverables where DeliverableType IS NOT NULL ORDER BY id ASC" ;
            $result26 = $connGlobal->query($sql211) or die($connGlobal->error);
            if($result26)
            {
              while($row2 = $result26->fetch_assoc()) 
              {

              echo '<div style="border:black 2px solid;background-color:#d98484;font-size:18px;">
              <input type="checkbox" name="AddDeliverableToCollab[]" value="'.$row2["id"].'">
              <strong>'. $row2["id"].".) ".$row2["DeliverableTitle"].'</strong></div>
              <input type="hidden" name="collabID" value="'. $row["id"]. '">';
  
              }
            }

          }
           
            
          
        echo '
        </div>
        <input style="float:right;color:white;background-color:green;font-sixe:21px;" type="submit" name="actionR" value="ADD" />
      </form> 
      <br>
      
      <form style="margin-top:7px;" name="RemoveModalForm" action="Remove_Deliverable_From_Collab.php" method="post">
        <label style="margin:0;font-size:16px;color:black;font-size:21px;"><strong>Remove selected Deliverables from Employee\'s assigned tasks:</strong></label><br>
        <div  style="overflow-y:scroll; overflow-x:hidden;background-color:#cccccc;padding:0 !important;height:250px;">';
        $Counter = 0;
        if($row['CollabAssignedDeliverableIDs'])
        {
          $ArrayString = explode(',',$row['CollabAssignedDeliverableIDs']);
          $arrayDelIDs= implode(',',$ArrayString );
          $sql211 = "SELECT *  FROM Structure_Deliverables where id IN (".$row['CollabAssignedDeliverableIDs'].") ORDER BY id ASC" ;
          $result26 = $connGlobal->query($sql211) or die($connGlobal->error);
          while($row2 = $result26->fetch_assoc()) 
          {

          echo '<div style="border:black 2px solid;background-color:#d98484;font-size:18px;">
          <input type="checkbox" name="RemCollabDelID[]" value="'.$row2["id"].'">
          <strong>'. $row2["id"].".) ".$row2["DeliverableTitle"].'</strong></div>
          <input type="hidden" name="AddDeliverableToCollab" value="'. $row["id"]. '">';

          }
        }
        echo '
        </div>
        <input style="float:right;color:white;background-color:red;font-sixe:21px;" type="submit" name="actionR" value="REMOVE" />
      </form> 
      </div>
      
      
      
      </div>
      </div>
    </div>';
    
    }
    }
      
  ?>  
    </div>
  
  </div>
  
  </div>


</div>
<div class="row">
    <div class="col col-sm-4" style="border:solid black 2px;background-color:#a3c09a;padding:0;">
      <button style="height:100%;font-size:35px;width:100%;text-align:left;" type="button" data-toggle="modal" data-target="#NewOjective">
        <strong>New Objective:</strong>
      </button>
    <div class="modal" id="NewOjective">
      <div style="max-width:1200px !important;" class="modal-dialog">
        <div class="modal-content">
              
          <div class="modal-header">
            <h3 class="modal-title">Create a New Objective:</h3>
          </div>
            
              <!-- Modal body -->
          <div class="modal-body">
            <form  style="width:100%;" name="UserObjForm" onsubmit="return validateU()" action="Submit User Objective.php" method="post" >
              <?php
                $conn = OpenCon();
                $sqlDel = "SELECT * FROM Structure_Deliverables WHERE ObjectiveTitle IS NOT NULL";
                
                if($Result1 = $conn->query($sqlDel)){
                  $rowcount=mysqli_num_rows($Result1);
                  $rowcount = $rowcount + 1;
                  echo '<input type="hidden" name="ObjectiveSequencer" value="'.$rowcount .'">';
                }
              ?>
              <div>
                <label style="margin:0;font-size:21px;color:black !important;"><strong>Objective Title:</strong></label>
                <br>
                <input name="Strat_UserNeedTitle" autocomplete="off" style="width:100%;font-size:21px;" type="text"><br>
                <h4 style="margin:0 !important;width:100%;color:black !important;font-size:21px;"><strong>
                User/ Business Project Needs:</strong></h4>
                <select  style="width:100%;font-size:14px;" name="Strat_User_Questions">
                  <option value="What do I want the website to offer?">What do I want the project to offer?</option>
                  <option value="What do I want the project to accomplish?">What do I want the project to accomplish?</option>
                  <option value="Name one of your competitors? What does their website accomplish well? What can we learn from their experience?">Who are your competitors? What does their website do well? What can we learn from their experience?</option>
                  <option value="Who's typically going to visit the site? What are they expecting to accomplish? Create a User Persona.">Who's typically going to visit the site? What are they expecting to accomplish? Create a User Persona.</option>
                  <option value="User Requirement - Create a User Scenario. Describe how the user will use your website/ app. This is where visualizing how a user will use a product or service will help generate design ideas.">"User Requirement" - Create a User Scenario. Describe how the user will use your website/ app. This is where visualizing how a user will use a product or service will help generate design ideas.</option>

                  <option value="Do you have any Market Research Material that could impact project success?">Do you have any Market Research Material that could impact project success?</option>
                  <option value="Cornerstone content links to the most important and relevant pieces of content on your website and directs your readers to them. It’s what people need to know to make use of your website and do business with you. It’s what people need to know to make use of your website and do business with you.">
                  Cornerstone Content - What information does your prospect need to know in order to responsibly conduct business with you?
                  </option>
                  <option value="Name a stakeholder, or senior decision maker, involved in the development of this project. What is their role? What do they need this project to accomplish/ communicate?">Name a stakeholder, or senior decision maker, involved in the development of this project. What is their role? What do they need this project to accomplish/ communicate?</option>
                  <option value="What testimonials, Case Studies, White papers, or other credibility building marketing materials do you have?">What testimonials, Case Studies, White papers, appearances or other credibility building materials do you have?</option>
                  <option value="What is your company's elevator pitch? “I help (who do you help?) by doing (how do you help them?) so that (why is this important?).”">What is your company's elevator pitch? “I help (who do you help?) by doing (how do you help them?) so that (why is this important?).” </option>
                  <option value="What are your product's major features, and how do they respectively benefit for the user?">What are your product's major features, and how do they respectively benefit for the user? </option>
                  <option value="What is your unique selling proposition? What is the factor or consideration presented as the reason that your product is different from or better than the competition?">What is your unique selling proposition? What is the factor or consideration presented as the reason that your product is different from or better than the competition?</option>
                </select>
                <label style="margin:0;font-size:21px;color:black !important;"><strong>Objective Description:</strong></label><br>
                <textarea  class="EditArea" style="width:100%;" cols="85" 
                  rows="5" name="Strat_UserNeedDescription" style="resize:vertical" autocomplete="off"></textarea><br>
                <input type="hidden" name="idDel0" value="<?php echo $_GET["activeObjective"]?>">
                <input type="submit" style="float:right;font-size:21px;" value="Submit"><br><br>
              </div>
            </form>
          </div>   
        </div>
      </div>
    </div>
  </div>
  <div class="col col-sm-8" style="border:solid black 2px;background-color:#a3c09a;padding:0;overflow-wrap: break-word;">
    <?php
      if(!empty($_GET['activeObjective'])){
        $ObjectiveID = (int)$_GET['activeObjective'];
        $conn = OpenCon();
        $sqlDel = "SELECT * FROM Structure_Deliverables where id = '$ObjectiveID'";
        
        if($Result1 = $conn->query($sqlDel)){
          while($row3 = $Result1->fetch_assoc()) 
          {
            echo '<button class="ObjHeader" style="height:100%;overflow: hidden;text-align:left;width:100%;
            text-decoration:underline;border:solid black 2px;background-color:#a3c09a" type="button" data-toggle="modal" 
            data-target="#myModal'. $row3["id"] . '">
              <h2 style="float:left;">'.$row3["ObjectiveSeqID"].".) ".$row3["ObjectiveTitle"].'</h2>
            </button>
          <div class="modal" id="myModal'. $row3["id"] . '">
            <div style="max-width:1200px !important;" class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 style="color: black !important;font-size:30px;"class="modal-title">Edit Strategic Objective:</h4>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">         
                  <form name="Modalform" action="Delete_Strategy_Goal.php" method="post">
                    <input style="width:50%;height:50px;clear:left;float:left;color:white;background-color:red;font-size:21px;" 
                    type="submit" name="action" value="Delete" />
                    <input style="width:50%;height:50px;float:right;color:white;background-color:blue;font-size:21px;" type="submit" 
                    name="action" value="Update" />
                    <h5 style="font-size:21px;"><strong>Original Question:</strong><br>'.$row3['ObjectiveQuestion'].'</h5>
                    <input type="hidden" name="idDel" value="'.$row3["id"] . '">
                    <input type="hidden" name="SeqIDOBJ" value="'.$row3["ObjectiveSeqID"] . '">
                    
                    <label style="margin:0;font-size:30px;color:black;font-size:21px;"><strong>Objective Title:
                      </strong></label><input name="EditTitle" style="width:100%;font-size:21px;" type="text" autocomplete="off"
                      value="'. $row3["ObjectiveTitle"].'">
                    <label style="margin:0;font-size:21px;color:black;font-size:21px;">
                      <strong>Objective Description:</strong></label>
                      <textarea class="EditArea"  rows="5" name="EditDescription" style="resize:vertical;width:100%;" 
                      autocomplete="off">'. $row3["ObjectiveDescription"].'</textarea>
                    
                  
                  </form>
                </div>
              
              </div>
            </div>
          </div>'   ;   

          }
        }
      }
    ?>
  </div>


  </div>
  <div class="row" >
  <div class="col col-sm-4" style="border:solid 2px black;padding:0;background-color:#e3f8dd">
    <div style="overflow:scroll;overflow-x:hidden;padding:0;min-height:250px;height:400px;">  
    <?php
    
    $sqlDel = "SELECT * FROM Structure_Deliverables WHERE ObjectiveTitle IS NOT NULL ORDER BY ObjectiveSeqID ASC";
    $Result1 = $conn->query($sqlDel);
    if( $Result1 = $conn->query($sqlDel)){
    while($row = $Result1->fetch_assoc()) 
    {
      echo "<div class='ObjSel1' style='width:100%;padding:0;'><a id='SelObj1".$row["id"]."' 
        type='button' class='Selectors SelectorsObj1 ObjSel1' style='text-align:left;padding:0;padding-left:15px;
        width:100%;font-size:18px !important;' href='http://localhost/BettaBetaTest/MainDashBoard.php?activeObjective="
        .$row['id']."'>".$row["ObjectiveSeqID"].".) ".$row["ObjectiveTitle"]."</a></div>";
  
    }
    }
    
    
    ?>
    </div>
  </div>
  <div class="col col-sm-8" style="border:solid black 2px;padding:0;overflow-wrap: break-word;">
    <?php
      if(!empty($_GET['activeObjective'])){
      $sqlDel = "SELECT * FROM Structure_Deliverables where id =". $_GET['activeObjective'];
      if($Result1 = $conn->query($sqlDel)){
      while($row = $Result1->fetch_assoc()) 
      {
      
        echo "<div class='ObjDesc' style='padding:0;background-color:white;' id='HeaderDesc1".$row["id"]."'><h3  style='padding-left:15px;'>".$row["ObjectiveQuestion"]."</h3><h5  style='padding-left:15px;font-size:21px;'>".$row["ObjectiveTitle"]."</h5><div class='scrollDiv1'>".nl2br(str_replace("  ", "&nbsp;&nbsp;&nbsp;&nbsp;",str_replace("\t", "&nbsp;&nbsp;&nbsp;&nbsp;", $row["ObjectiveDescription"])))."</div></div>";
    
      }
      }  
      }
    ?>
  </div>
  </div>



<div class="row">
  <div class="col col-sm-4" style="border:solid black 2px;padding:0 !important;">
    <button style="height:100%;font-size:35px;;text-align:left;width:100%;" 
      type="button" data-toggle="modal" data-target="#NewRequirement">
      <strong>New Requirement:</strong>
    </button>
    <div class="modal" id="NewRequirement">
      <div style="max-width:1200px !important;" class="modal-dialog">
        <div class="modal-content">
            
          <div class="modal-header">
          <h3 class="modal-title">Define a New Requirement:</h3>
          </div>
          
            <!-- Modal body -->
          <div class="modal-body">
            <form name="RequirementForm" action="Submit Requirement.php" method="post" >
              <div style="padding-bottom:30px;">
              
                <input type="hidden" name="idDel10" value="<?php echo $_GET["activeObjective"];?> ">
                
                <label style="margin:0;font-size:21px;"><strong>Requirement Title:</strong></label><br><input name="RequirementTitle" style="width:100%;" type="text" autocomplete="off"><br>
                <label style="margin:0;font-size:21px;"><strong>Requirement Type:</strong></label>
                <select name="RequirementType" style="width:100%;margin:0;margin-top:5px;font-size:14px;">
                  <option value="Objective - What does the user want to accomplish?">"Objective" - What does the user want to accomplish?</option>
                  <option value="Functional - What does the user need to do in order reach their objective?">"Functional" - What does the user need to do in order reach their objective?</option>
                  <option value="Technical - What are the technical constraints of this Strategic Objective? What resources are needed to get this done?">"Technical" - What are the technical constraints of this Strategic Objective? What resources are needed to get this done?</option>
                  <option value="Success Metrics - How will we measure how successfully we've achieved our goal?">"Measuring Success" - How will we quantify how well we've accomplished our goal?</option>
                  <option value="BusinessRules - What external constraints does the project need to abide by? (legal, contractual, etc)">"BusinessRules" -   What external constraints does the project need to abide by? (legal, contractual, etc)</option>
                  <option style="margin-top:100px;" value="User Requirement - How is the Need/ Problem/ Opportunity Defined by the prospect?">"User Requirement" - How is the Need/ Problem/ Opportunity Defined by the user?</option>
                  <option value="User Requirement - Prospects' product related search-engine behavior:">"User Requirement" - Users' product related search-engine behavior?</option>
                  <option value="User Requirement - Concerns/ Questions the prospect will have about your product?">"User Requirement" - Concerns/ Questions the prospect will have about your product?</option>
                  <option value="User Requirement - What does the prospect desire?">"User Requirement" - What does the user desire?</option>
                  <option value="User Requirement - What does the user need to accomplish using this application?">"User Requirement" - What does the user need to accomplish using this application?</option>
                  <option value="User Requirement - Message or Information I wish to convey?">"User Requirement" - Message, offer, or content the website should convey?</option>
                  <option value="User Requirement - What content/ features would these users find valuable? What can the project communicate to solidify brand authority?">"User Requirement" - What content/ features would these users find valuable? What can the project communicate to solidify brand authority?</option>
                  <option value="User Requirement - What websites Do they frequent? Where do they go to voice their opinions about you and your competition? What are they typically complaining about? What are their pain points when dealing with your niche market?">"User Requirement" - What websites Do they frequent? Where do they go to voice their opinions about you and your competition?</option>
                  <option value="User Requirement - What are they typically complaining about? What are their pain points when dealing with similar products or services">"User Requirement" - What are they typically complaining about? What are their pain points when dealing with similar products or services</option>

                </select>
                <label style="margin:0;font-size:21px;"><strong>Description:</strong></label><br>
                <textarea  class="EditArea" cols="85" style="height:900px;width:100%;" rows="5" name="RequirementDescription" style="resize:vertical;width:100%;" autocomplete="off"></textarea><br>
                <input type="submit" style="float:right;font-size:21px;" value="Submit">
              </div>
            </form>
          </div>   
        </div>
      </div>
    </div>
  </div>
  <div class="col col-sm-8" style="border:solid black 2px;background-color:#e8dd67;padding:0;overflow-wrap: break-word;">
    <?php
      if(!empty($_GET['activeRequirement'])){
      $sqlDel = "SELECT * FROM Structure_Deliverables where id =" . $_GET['activeRequirement'];
      $Result1 = $conn->query($sqlDel);
      while($row = $Result1->fetch_assoc()) 
      {
        echo '<button style="float:left;width:100%;text-align:left;" class="ReqHeader" 
          type="button" data-toggle="modal" data-target="#ReqEditModal'. $row["id"] . '">
          <h2>'.$row["RequirementSeqID"].'.) '. $row["RequirementTitle"].'</h2>
        </button>
        <div class="modal" id="ReqEditModal'. $row["id"] . '">
          <div style="max-width:1200px !important;" class="modal-dialog">
            <div class="modal-content">
            
            <div class="modal-header">
            <h3 class="modal-title">Edit/Remove Requirement:</h3>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
            
              <form name="ModalformReqEdit" action="Edit_Requirement.php" method="post">
                <input style="width:50%;height:50px;float:left;color:white;background-color:red;font-size:21px;" 
                type="submit" name="actionR" value="Delete" />
                <input style="width:50%;height:50px;float:right;color:white;background-color:blue;
                  font-size:21px;" type="submit" name="actionR" value="Update" />
                <label style="margin:0;margin-top:15px;font-size:21px;"><strong>Reassign Requirement:
                  </strong></label>
          
                <select name="StrategyObjectiveID" style="width:100%;max-height:50px;overflow:scroll;font-size:14px;">
                
                <option value=""></option>';
                //Connect to DB
                $connGlobal = OpenCon();
                $query = "SELECT ID FROM Strategic_Goals ORDER BY ObjectiveSeqID ASC";
                $result = mysqli_query($connGlobal, $query);
                $StratID12 = $_GET["activeObjective"];
                $sql = "SELECT id, ObjectiveTitle, ObjectiveSeqID FROM Structure_Deliverables 
                  WHERE ObjectiveTitle IS NOT NULL ORDER BY ObjectiveSeqID ASC";
                $result = $connGlobal->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row1 = $result->fetch_assoc()) {
                
                echo '<option value="'.$row1["id"].'">'.$row1["ObjectiveSeqID"].') '.$row1["ObjectiveTitle"].'</option>
                ';
                
                }}
          
                
                echo'</select>
                
                <label style="font-size:21px;"><strong>Requirement Type:<br></strong>'.$row["RequirementType"].'</label><br>
                <input type="hidden" name="ObjId" value="'.$row["ObjectiveSeqID"] . '">
                <input type="hidden" name="ReqID" value="'.$row["id"] . '">
                <input type="hidden" name="ReqId" value="'.$_GET['activeRequirement'] . '">
                <input type="hidden" name="ActiveObj" value="'.$_GET['activeObjective'] . '">
                <label style="margin:0;font-size:21px;color:black;"><strong>Requirement Title:</strong></label><input name="EditReqTitle" style="width:100%;font-size:21px;" type="text" autocomplete="off" value="'. $row["RequirementTitle"].'">
                <label style="margin:0;font-size:21px;color:black;"><strong>Requirement Description:</strong></label><textarea  class="EditArea" style="width:100%;height:450px;"  cols="63" rows="5" style="width:100%;"  name="RequirementDescription" style="resize:vertical" autocomplete="off">'. $row["RequirementDescription"].'</textarea>
                
                
              </form>
            </div>
          
          
          
          </div>
        </div>
      </div>';
    }}
    
    ?>
  </div>


  </div>
  <div class="row" >
  <div class="col col-sm-4" style="border:solid 2px black;padding:0;background-color:#fffcdc;">
    <div style="overflow:scroll;overflow-x:hidden;padding:0;min-height:250px;height:400px;">  
    <?php
    if(!empty($_GET['activeObjective'])){
    $sqlDel = "SELECT * FROM Structure_Deliverables where RequirementObjectiveID =" . $_GET['activeObjective']. " ORDER BY RequirementSeqID ASC";
    if($Result1 = $conn->query($sqlDel)){
      echo "<div id='ReqSel".$row["RequirementSeqID"]."' class='ReqSel ReqSel".$row["RequirementSeqID"]."' 
        style='width:100%;padding:0;'>
        <a id='SelReq1".$row['id']."' type='button' 
        href='http://localhost/BettaBetaTest/MainDashBoard.php?activeObjective=".$_GET['activeObjective']."&UnassignedDeliverables=1' class='SelectorsReq1 Selectors ReqSel1' style='text-align:left;padding:0;
        padding-left:15px;width:100%;font-size:18px !important'>UNASSIGNED DELIVERABLES</a></div>";
    while($row = $Result1->fetch_assoc()) 
    {
      echo "<div id='ReqSel".$row["RequirementSeqID"]."' class='ReqSel ReqSel".$row["RequirementSeqID"]."' 
        style='width:100%;padding:0;'><a id='SelReq1".$row['id']."'
        type='button' href='http://localhost/BettaBetaTest/MainDashBoard.php?activeObjective=".$_GET['activeObjective'].
        "&activeRequirement=".$row['id']."' class='SelectorsReq1 Selectors ReqSel1' style='text-align:left;padding:0;padding-left:15px;width:100%;font-size:18px 
        !important'>".$row['RequirementSeqID'].".)".$row["RequirementTitle"]."</a></div>";
      
    }
    }
    }
    ?>
    </div>
  </div>
  <div class="col col-sm-8" style="border:solid black 2px;padding:0;background-color:white;overflow-wrap: break-word;">
    <?php
    if(!empty($_GET['activeRequirement']))
    {
    $sqlDel = "SELECT * FROM Structure_Deliverables where id =". $_GET['activeRequirement'];
    $Result1 = $conn->query($sqlDel);
    while($row = $Result1->fetch_assoc()) 
    {
      echo "<div class='ReqDesc' style='padding:0;' id='ReqDesc1".$row["id"]."'><h3  style='padding-left:15px;'>".$row["RequirementType"]."</h3>
      <h5  style='padding-left:15px;font-size:21px !important'>".$row["RequirementTitle"]."</h5>
      <div class='scrollDiv1'>".nl2br(str_replace("  ", "&nbsp;&nbsp;&nbsp;&nbsp;",str_replace("\t", "&nbsp;&nbsp;&nbsp;&nbsp;", $row["RequirementDescription"])))."</div></div>";
  
    }
    }
    ?>
  </div>


  </div>



  <div class="row">
  <div class="col col-sm-4" style="border:solid black 2px;background-color:#d98484;padding:0px !important;">
  <button style="height:100%;font-size:35px;text-align:left;width:100%;" type="button" data-toggle="modal" data-target="#NewDeliverable">
    <strong>Create a Deliverable:</strong>
  </button>
  <div class="modal" id="NewDeliverable">
    <div style="max-width:1200px !important;" class="modal-dialog">
    <div class="modal-content">
        
    <div class="modal-header">
    <h3 class="modal-title">Create a New Deliverable:</h3>
    </div>
      
        <!-- Modal body -->
    <div class="modal-body" style="padding:0 15px 0 15px;">
    <form name="DeliverableForm" action="Submit Deliverable.php" method="post" >
    <div>
      <label style="margin:0;font-size:21px;"><strong>Title this Deliverable:</strong></label><br>
      <input name="DeliverableTitle" autocomplete="off" style="width:100%;font-size:21px;" type="text"><br> 
      <?php
      
      
      echo '
      <label style="margin:0;font-size:21px;"><strong>Type of Deliverable:</strong></label><br>
      <input type="hidden" name="idDel4" value="'.$_GET["activeObjective"].'">';       
      ?>  
      
      <select style="width:100%;font-size:21px;"name="DeliverableType">
      <option value="Content Deliverable">Content Deliverable</option>
      <option value="Project Functionality">Project Feature Proposal</option>
      <option value="General Solution">General Solution</option>
      <option value="Technical Solution">Technical Solution</option>
      
      </select>
      <label style="margin:0;font-size:21px;"><strong>Describe the Core Idea:</strong></label><br>
      <textarea class="EditArea" cols="85" rows="5" name="Core_Idea" style="resize:vertical;width:100%;" autocomplete="off"></textarea><br>
      <label style="margin:0;font-size:21px;width:40%;"><strong>Deadline?</strong></label><br>
      <input style="margin:0;font-size:21px;width:20%;" type="date" name="DeliverableDeadline" style="resize:vertical;width:100%;" autocomplete="off"><br>
      <label style="margin:0;font-size:21px;"><strong>Assign this Deliverable to the Following Requirements:</strong></label><br>
      
      <div class="" style="!important;max-height:500px;overflow-y:scroll;">
        
          <?php
          $conn = OpenCon();
          $sqlDel = "SELECT * FROM Structure_Deliverables where RequirementType IS NOT NULL ORDER BY ObjectiveSeqID ASC,RequirementSeqID ASC ";
          $Result1 = $conn->query($sqlDel);
          while($row = $Result1->fetch_assoc()) 
          {
          echo '<div class="col-sm-12" style="min-height:80px;border:black 1px solid;background-color:#e8dd67;font-size:19px;white-space: normal;overflow-wrap: break-word;">
            <input type="checkbox" name="AssignRequirementIDsToDel[]" value="'.$row['id'].'"><strong>
            '.$row['ObjectiveSeqID'] .'.'.$row['RequirementSeqID'].'.) '.$row['RequirementTitle'].'</strong></div>';  
          }
          
          ?>
        
      </div>
      <input type="submit" style="float:right;font-size:21px;" value="Submit"><br><br>
    
    </div>
    </form> 
    </div>   
    </div>

    </div>
  </div>
  </div>
  <div class="col col-sm-8" style="border:solid black 2px;background-color:#d98484;padding:0;overflow-wrap: break-word;">
  <?php
    $counter = 1;
    if(!empty($_GET['UnassignedDeliverables']) AND !empty($_GET['activeDeliverable'] )){
      $sqlDel = "SELECT * FROM Structure_Deliverables where id =".$_GET['activeDeliverable'];
      $Result1 = $conn->query($sqlDel);
      while($row = $Result1->fetch_assoc()) 
      {
        echo '<button class="DelHeader" style="text-align:left;width:100%;border:solid black 2px;background-color:#d98484;" type="button" data-toggle="modal" data-target="#DeliveryEditModal'. $row["id"] . '">
      <h2 style="margin:0">' .$row["id"]. '.) ' .$row["DeliverableTitle"]. '</h2>
    </button>
    <div class="modal" id="DeliveryEditModal'. $row["id"] . '">
    <div class="modal-dialog" style="max-width:1200px !important;">
    <div class="modal-content ">
    
    <div class="modal-header">
      <h3 class="modal-title" style="font-size:30px;">Edit/Remove Deliverable</h3>
    </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      
      
      <form name="DeliverableModalForm" action="Edit_Deliverable.php" method="post">
      
      
      <input type="hidden" name="idDelReq" value="'.$row["id"] . '">
      <input type="hidden" name="actReq" value="';if(!empty($_GET["activeRequirement"])){echo $_GET["activeRequirement"];}echo'">
      <input type="hidden" name="idDelReq3" value="'.$row["id"] . '">
      <input type="hidden" name="ReqSeqID" value="'.$row["RequirementSeqID"] . '">
      <input type="hidden" name="idDel4" value="'.$_GET["activeObjective"].'">
      <input type="hidden" name="RequirementDeliverable" value="';if(!empty($_GET["activeRequirement"])){echo $_GET["activeRequirement"];}echo'">
      <label style="margin:0;font-size:21px;color:black;"><strong>Delivery Title:</strong></label><input style="width:100%;font-size:21px;" name="DeliverableTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row["DeliverableTitle"].'">
      <label style="margin:0;font-size:21px;color:black;"><strong>Set New Deadline:</strong></label><br>
      <input style="margin:0;font-size:21px;width:20%;" type="date" name="DeliverableDeadline" style="resize:vertical;width:100%;" autocomplete="off"><br>
      <h3><strong>'.$row['DeliverableType'].':</strong></h3>';
      if(!empty($row['DeliverableDeadline']))
      {
        $newDate = date("d/m/Y", strtotime($row['DeliverableDeadline']));
        echo '<h4><strong>Currently due by: '.$newDate.':</strong></h4>';
      }
      
      echo '
      <textarea  class="EditArea" style="width:100%;font-size:18px;" cols="63" 
      rows="5" name="DeliverableCore" style="resize:vertical" autocomplete="off">'. 
      $row["DeliverableDescription"].'</textarea>
      <div class="row">
      <div class="col-sm-12" >
        <h2>Assign New Requirements</h2>
        <div class="scrollDiv" style="max-height:300px;min-height:300px;border:solid black 1px;">';
        $conn = OpenCon();
        $sqlDel2 = "SELECT * FROM `structure_deliverables` WHERE RequirementType IS NOT NULL ORDER BY ObjectiveSeqID ASC, RequirementSeqID ASC";
        $Result12 = $conn->query($sqlDel2);
        $connStatus = $conn->query($sqlDel2);
        $num_rows = 1;
        while($row = $Result12->fetch_assoc()) 
          {
            echo '<div style="margin:0;border:black 1px solid;width:100%;background-color:#e8dd67">
            <input type="checkbox" name="NewAssignedDeliverables[]" value="'.$row['id'].'">
            <strong>'.$row['ObjectiveSeqID'] .'.'.$row['RequirementSeqID'].'.) '.$row['RequirementTitle'].'</strong></div>'; 
          }
          
          
      echo '  </div>
      </div>

      </div>
      <input style="width:50%;height:50px;float:left;color:white;background-color:red;font-size:21px;" type="submit" name="actionR" value="Delete" />
      <input style="width:50%;height:50px;float:right;color:white;background-color:blue;font-size:21px;" type="submit" name="actionR" value="Update" /><br><br>
      
      </form>
      </div>
      
    
      
    </div>
    </div>
    </div>';
    $counter = $counter + 1;  
    }}
    if(!empty($_GET['activeDeliverable']) AND empty($_GET['UnassignedDeliverables'])){
      
    $sqlDel = "SELECT * FROM Structure_Deliverables where id ='" . $_GET['activeDeliverable']."'";
    $Result1 = $conn->query($sqlDel);
    while($row = $Result1->fetch_assoc()) 
    {
      echo '<button class="DelHeader" style="text-align:left;width:100%;border:solid black 2px;background-color:#d98484;" type="button" data-toggle="modal" 
            data-target="#DeliveryEditModal'. $row["id"] . '"><h2 style="margin:0">'.$row["id"]. '.) '  .$row["DeliverableTitle"]. '
            </h2>
          </button>
    <div class="modal" id="DeliveryEditModal'. $row["id"] . '">
    <div class="modal-dialog" style="max-width:1200px !important;">
    <div class="modal-content ">
    
    <div class="modal-header">
      <h3 class="modal-title" style="font-size:30px;">Edit/Remove Deliverable</h3>
    </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      
      
      <form name="DeliverableModalForm" action="Edit_Deliverable.php" method="post">
      
      
      <input type="hidden" name="idDelReq" value="'.$row["id"] . '">
      <input type="hidden" name="actReq" value="'.$_GET['activeRequirement'] . '">
      <input type="hidden" name="idDelReq3" value="'.$row["id"] . '">
      <input type="hidden" name="ReqSeqID" value="'.$row["RequirementSeqID"] . '">
      <input type="hidden" name="idDel4" value="'.$_GET["activeObjective"].'">
      <input type="hidden" name="RequirementDeliverable" value="'.$_GET["activeRequirement"].'">
      <label style="margin:0;font-size:21px;color:black;"><strong>Delivery Title:</strong></label><input style="width:100%;font-size:21px;" name="DeliverableTitle" style="width:100%;" type="text" autocomplete="off" value="'. $row["DeliverableTitle"].'">
      <label style="margin:0;font-size:21px;color:black;"><strong>Set New Deadline:</strong></label><br>
      <input style="margin:0;font-size:21px;width:20%;" type="date" name="DeliverableDeadline" style="resize:vertical;width:100%;" autocomplete="off"><br>
      <h3><strong>'.$row['DeliverableType'].':</strong></h3>';
      if(!empty($row['DeliverableDeadline']))
      {
        $newDate = date("d/m/Y", strtotime($row['DeliverableDeadline']));
        echo '<h4><strong>Currently due by: '.$newDate.'</strong></h4>';
      }
      
      echo '
      
      <textarea  class="EditArea" style="width:100%;font-size:18px;" cols="63" 
      rows="5" name="DeliverableCore" style="resize:vertical" autocomplete="off">'. 
      $row["DeliverableDescription"].'</textarea>
      <div class="row">
      <div class="col-sm-6" style="padding-right:0;">
        <h2>Remove Assigned Requirements</h2>
        <div class="scrollDiv" style="max-height:300px;min-height:300px;border:solid black 1px;">';
        $conn = OpenCon();
        $sqlDel2 = "SELECT * FROM `structure_deliverables` WHERE `id` = ". $_GET['activeDeliverable'];
        $Result1 = $conn->query($sqlDel2);
        $connStatus = $conn->query($sqlDel2);
        $num_rows = 1;
        while($row22 = $Result1->fetch_assoc()) 
          {
            if(!empty($row22['DeliverableAssignedRequirementIDs']))
            {
              $ArrayString = explode(',',$row22['DeliverableAssignedRequirementIDs']);
              $arrayDelIDs= implode(',',$ArrayString );
              $sqlDel222 = "SELECT * FROM Structure_Deliverables where `id` IN (".$arrayDelIDs.") ORDER BY ObjectiveSeqID ASC, RequirementSeqID ASC";
              $Result111 = $conn->query($sqlDel222);
              while($row2 = $Result111->fetch_assoc()) 
              {
              
                echo '<div style="margin:0;border:black 1px solid;width:100%;background-color:#e8dd67">
                <input type="checkbox" name="RemoveAssignedDeliverables[]" value="'.$row2['id'].'">
                <strong>'.$row2['ObjectiveSeqID'] .'.'.$row2['RequirementSeqID'].'.) '.$row2['RequirementTitle'].'</strong></div>';  
              }
          
            }
          }
      echo '  </div>
      </div>

<div class="col-sm-6" style="padding-left:0;">
  <h2>Assign New Requirements</h2>
  <div class="scrollDiv" style="max-height:300px;min-height:300px;border:solid black 1px;">';
  $sqlDel2 = "SELECT * FROM `structure_deliverables` WHERE `id` = ". $_GET['activeDeliverable'];
  $Result1 = $conn->query($sqlDel2);
  $connStatus = $conn->query($sqlDel2);
  $num_rows = 1;
  while($row22 = $Result1->fetch_assoc()) 
    {
  if(!empty($row22['DeliverableAssignedRequirementIDs']))
      {
        $sqlDel2 = "SELECT * FROM `structure_deliverables` WHERE `id` = ". $_GET['activeDeliverable'];
        $Result12 = $conn->query($sqlDel2);
        $connStatus = $conn->query($sqlDel2);
        $num_rows = 1;
        while($row2 = $Result12->fetch_assoc()) 
          {
            $ArrayString = explode(',',$row2['DeliverableAssignedRequirementIDs']);
            $arrayDelIDs= implode(',',$ArrayString );
            $sqlDel22 = "SELECT * FROM Structure_Deliverables where RequirementType IS NOT NULL AND id NOT IN (" .$arrayDelIDs.")
            ORDER BY ObjectiveSeqID ASC, RequirementSeqID ASC";
            $Result122 = $conn->query($sqlDel22);
            while($row = $Result122->fetch_assoc()) 
            {
            
              echo '<div style="margin:0;border:black 1px solid;width:100%;background-color:#e8dd67">
              <input type="checkbox" name="NewAssignedDeliverables[]" value="'.$row['id'].'">
              <strong>'.$row['ObjectiveSeqID'] .'.'.$row['RequirementSeqID'].'.) '.$row['RequirementTitle'].'</strong></div>';  
            }
          
          }
      }else{
        $sqlDel22 = "SELECT * FROM Structure_Deliverables where RequirementType IS NOT NULL 
          ORDER BY ObjectiveSeqID ASC, RequirementSeqID ASC";
            $Result122 = $conn->query($sqlDel22);
            while($row = $Result122->fetch_assoc()) 
            {
            
              echo '<div style="margin:0;border:black 1px solid;width:100%;background-color:#e8dd67">
              <input type="checkbox" name="NewAssignedDeliverables[]" value="'.$row['id'].'">
              <strong>'.$row['ObjectiveSeqID'] .'.'.$row['RequirementSeqID'].'.) '.$row['RequirementTitle'].'</strong></div>';  
            }
      }}
      echo '  </div>
      </div>

      </div>
      <input style="width:50%;height:50px;float:left;color:white;background-color:red;font-size:21px;" type="submit" name="actionR" value="Delete" />
      <input style="width:50%;height:50px;float:right;color:white;background-color:blue;font-size:21px;" type="submit" name="actionR" value="Update" /><br><br>
      
      </form>
      </div>
      
    
      
    </div>
    </div>
    </div>';
    $counter = $counter + 1;  
    }}
    
    ?>
    
  </div>


  </div>
  <div class="row" >
  <div class="col col-sm-4" style="border:solid 2px black;padding:0;">
    <div style="overflow:scroll;overflow-x:hidden;padding:0;min-height:250px;height:400px;background-color:#fff5f5">  
    <?php
    if(!empty($_GET['activeRequirement']))
    {
    //Get deliverable assignments checked into comma array
    $sqlDel2 = "SELECT * FROM `structure_deliverables` WHERE `id` = ". $_GET['activeRequirement'];
    $Result1 = $conn->query($sqlDel2);
    $connStatus = $conn->query($sqlDel2);
    $num_rows = 1;
    if($Result1)
    {
    while($row2 = $Result1->fetch_assoc()) 
      {
        
          $ArrayString = explode(',',$row2['RequirementAssignedDeliverableIDs']);
          $arrayDelIDs= implode(',',$ArrayString );
          $sqlDel11 = "SELECT *  FROM Structure_Deliverables where id IN (". $arrayDelIDs.") ORDER BY id ASC" ;
          $Result12 = $conn->query($sqlDel11);
          $connStatus = $conn->query($sqlDel11);
          $num_rows = 1;
          if($Result12)
          {
          while($row22 = $Result12->fetch_assoc()) 
            {
            echo "<div id='DelSel".$row22["id"]."' class='DelSel DelSel".$row22["id"]."' 
              style='width:100%;padding:0;'><a id='SelReq1".$row22['id']."' type='button' 
              href='http://localhost/BettaBetaTest/MainDashBoard.php?activeObjective=".$_GET['activeObjective']."&activeRequirement=".$_GET['activeRequirement']."&activeDeliverable=".$row22['id']."&count=".$num_rows."' class='SelectorsDel1 Selectors DelSel1' 
              style='text-align:left;padding:0;padding-left:15px;width:100%;font-size:18px !important'>
              ".$row22["id"].".) ".$row22["DeliverableTitle"]."</a></div>";
              $num_rows = $num_rows + 1;
            }
          }
        
      }
    }
    
  }  
  if(!empty($_GET['UnassignedDeliverables']))
    {
    //Get deliverable assignments checked into comma array
    $sqlDel2 = "SELECT *  FROM Structure_Deliverables where DeliverableAssignedRequirementIDs IS NULL
      AND DeliverableTitle IS NOT NULL ORDER BY id ASC";
    $Result1 = $conn->query($sqlDel2);
    $connStatus = $conn->query($sqlDel2);
    $num_rows = 1;
    if($Result1)
    {
    while($row2 = $Result1->fetch_assoc()) {
          echo "<div id='DelSel".$row2["id"]."' class='DelSel DelSel".$row2["id"]."' 
            style='width:100%;padding:0;'><a id='SelReq1".$row2['id']."' type='button' 
            href='http://localhost/BettaBetaTest/MainDashBoard.php?activeObjective=".$_GET['activeObjective']."&activeDeliverable=".$row2['id']."&count=".$num_rows."&UnassignedDeliverables=1' class='SelectorsDel1 Selectors DelSel1' 
            style='text-align:left;padding:0;padding-left:15px;width:100%;font-size:18px !important'>
            ".$row2["id"].".) ".$row2["DeliverableTitle"]."</a></div>";
            $num_rows = $num_rows + 1;
          }
        }
      }
    
      
    
    ?>
    </div>
  </div>
  <div class="col col-sm-8" style="border:solid black 2px;padding:0;background-color:white;overflow-wrap: break-word;">
    <?php
    if(!empty($_GET['activeDeliverable']))
    {
    $sqlDel = "SELECT * FROM Structure_Deliverables where id= ". $_GET['activeDeliverable'] ;
    $Result1 = $conn->query($sqlDel);
    while($row = $Result1->fetch_assoc()) 
    {
      echo "<div class='DelDesc ' style='padding:0;' id='DelDesc1".$row["id"]."'
      ><h3 style='padding-left:15px;'>".$row["DeliverableType"].":</h3>
      <h5 style='padding-left:15px;font-size:21px !important'>
      ".$row["DeliverableTitle"]."</h5><div class='scrollDiv1'>
      ".nl2br(str_replace("  ", "&nbsp;",str_replace("\t", "&nbsp;&nbsp;&nbsp;&nbsp;", 
      $row["DeliverableDescription"])))."</div></div>";
  
    }
    }  
    ?>
  </div>

  </div> 
  <div class="row" >
    <a class="col" style="border:solid 2px black;min-height:150px;Text-align:center;font-size:22px;" data-toggle="modal" data-target="#SelectAWireFrameModal" style="height:100%; width:100%;">Generate Wire Frames</a>
    <div class="modal" id="SelectAWireFrameModal">
    <div class="modal-dialog" style="max-width:1200px !important;">
    <div class="modal-content ">
    
    <div class="modal-header">
      <h3 class="modal-title">Generate a Wire frame for which of the following Web Pages:</h3>
    </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      
      <?php
      $sqlDel = "SELECT GlobalNavTags, id FROM Structure_Deliverables where GlobalNavTags IS NOT NULL AND DeliverableType IS NULL";
      if( $Result1 = $conn->query($sqlDel))
      {
      while($row = $Result1->fetch_assoc()) 
      {
      echo '<a href="generateWireFrame.php?activeWebPage='.$row['id'].'" style="font-size:30px;" target="_blank">'.$row['GlobalNavTags'].'</a><br>';
      }
      }
      
    ?>
     
      </div>
      
    
      
    </div>
    </div>
    </div>
    <a class="col" style="border:solid 2px black;min-height:150px;Text-align:center;font-size:22px;" 
    href="GenerateSiteMapNodes.php" target="_blank" style="height:100%; width:100%;">Generate Site Map</a>

    <a class="col" style="border:solid 2px black;min-height:150px;Text-align:center;font-size:22px;" 
    href="GenerateCollabSheet.php" target="_blank" style="height:100%; width:100%;">Generate Employee Work Sheet</a> 

    <a class="col" style="border:solid 2px black;min-height:150px;Text-align:center;font-size:22px;" 
    href="GenerateORDcol.2.php" target="_blank" style="height:100%; width:100%;">Generate O.R.D. Col/View</a>

    <a class="col" style="border:solid 2px black;min-height:150px;Text-align:center;font-size:22px;" 
    href="testlist.php" target="_blank" style="height:100%; width:100%;">Generate O.R.D. Table of Contents</a>


  </div>  
  </div>  
   
  </div> 

   
</div>   
  






</body>
</html>