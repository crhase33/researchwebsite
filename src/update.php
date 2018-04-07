<!DOCTYPE HTML>

<html>

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    

<div class="row" style="background-color:darkblue; height:1000px;">

<?php
      
      $project=$_POST['project'];
          //Connect to our MySQL database using the PDO extension.
          $pdo = new PDO('mysql:host=localhost;dbname=projectList', 'root', 'root');
          
          //Our select statement. This will retrieve the data that we want.
          $sql = "SELECT * FROM ApprovedESWW WHERE (Project) = '$project'";
          
          //Prepare the select statement.
          $stmt = $pdo->prepare($sql);
          
          //Execute the statement.
          $stmt->execute();
          
          //Retrieve the rows using fetchAll.
          $users = $stmt->fetchAll();


         

      ?>
     <div class="col-sm-6" style="background-color:grey;">
      <form action="edit.php" method="post">      <!--Call the edit script to take the data and put it into the mySQL server -->
      <?foreach($users as $user):?>
        <label class="col-sm-5">Project:</label><input type="text" name="project" class="col-sm-7" value=" <? echo $project; ?>"><br>
        <label class="col-sm-5">Reference:</label><input type="text" name="reference" class="col-sm-7"  value="<? echo  $user['Reference'];?>"><br>
        <label class="col-sm-5">Total Benefit:</label><input type="text" name="total" class="col-sm-7"  value="<? echo  $user['Total_Benefit'];?>"><br>
        <label class="col-sm-5">Project Leader:</label><input type="text" class="col-sm-7"  name="leader" value="<? echo $user['Project_Leader'];?>"></br>
        <label class="col-sm-5">Comments:</label><input type="text" name="comments" class="col-sm-7"  value="<? echo $user['Comments'];?>"></br>
        <label class="col-sm-5">Next Milestone:</label><input type="text" name="milestone" class="col-sm-7"  value="<? echo $user['Next_Milestone_Date'];?>"></br>
        <label class="col-sm-5">Date Validated:</label><input type="text" name="validated" class="col-sm-7"  value="<? echo $user['Date_Validated'];?>"></br>
        <label class="col-sm-5">RAG:</label><input type="text" name="rag" class="col-sm-7"  value="<? echo $user['RAG'];?>"></br>
        <label class="col-sm-5">SR Benefit:</label><input type="text" name="sr" class="col-sm-7"  value="<? echo $user['SR_Benefit'];?>"></br>
        <label class="col-sm-5">LR Benefit:</label><input type="text" name="lr" class="col-sm-7"  value="<? echo $user['LR_Benefit'];?>"></br>
        <label class="col-sm-5">DD Benefit:</label><input type="text" name="dd" class="col-sm-7"  value="<? echo $user['DD_Benefit'];?>"></br>
        <label class="col-sm-5">WB Benefit:</label><input type="text" name="wb" class="col-sm-7"  value="<? echo $user['WB_Benefit'];?>"></br>
        <label class="col-sm-5">A400M Benefit:</label><input type="text" name="a400" class="col-sm-7"  value="<? echo $user['A400M'];?>"></br>
        <label class="col-sm-5">Other Benefit:</label><input type="text" name="other" class="col-sm-7"  value="<? echo $user['Other'];?>"></br>
        <label class="col-sm-5">Status:</label><input type="text" name="status" class="col-sm-7"  value="<? echo $user['Status'];?>"></br>
        <label class="col-sm-5">Type:</label><input type="text" name="type" class="col-sm-7" value="<? echo $user['Type'];?>"></br>


    <?endforeach;?>

        <input type="Submit" name="submit" ><br>
      </form>
    </div>
    <div class="col-sm-6" >
        <!--we can put the instructions on updating the status here, Talk to doug about what to put here. It will be in a table-->

    </div>
</div>





</body>
</html>