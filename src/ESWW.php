<?php


?><!DOCTYPE HTML><html>

<head>
    <title>Airbus Change Platform Tracking</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!--javascript includes-->
    <script type ="text/javascript"
      src="javascript.js"></script>

    <!--navbar-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
           <div class="navbar-header">
             <button type="button" class="nSavbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="index.php">Airbus</a>
           </div>
           <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php">Home </a></li>
               <li class="dropdown; active">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESWW <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="ESWW.php">Edit/Add Project</a></li>
                    <li><a href="Display.php">Tracking</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inservice Repair <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="inservice.php">Inservice Repair</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobile <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li><a href="mobile.php">Mobile Tracking</a></li>
                 </ul>

               </li>
               <li><a href="about.php">About</a></li>
              <li><a href="admin.php">Administrator</a></li>

             </ul>
           </div><!--/.nav-collapse -->
         </div>
       </div>
</head>

<body>
  <div class="container">
    <div class="row">
    <div class="col-sm-6" style="background-color:lightgrey; height:800px; border:1px solid black;" id="newProject"  >
      <!---the form for the new project will go here-->
      <h1 style="font-size:50px">Add a New Project</h1>
      <form action ="prossessing.php" method = "post">
       <label class="col-sm-6">Project Title:</label><input type="text" name="title" class="col-sm-6"><br>
        <label class="col-sm-6">Name:</label><input type ="text" name="Name" class="col-sm-6"><br>
        <label class="col-sm-6">Weekly Time Savings:</label><input type="text" name="Savings" class="col-sm-6"><br>
        <label class="col-sm-6">Projected End Date:</label><input type="text" name="finished" class="col-sm-6"><br>
        <label class="col-sm-6">Comments/Description:</label><input type="text" name = "Comments" class="col-sm-6"><br>
        <input type = "submit" name ="Submit"><br>



      </form>




    </div>
    <div class="col-sm-6" style="background-color:lightgrey; height:800px; border:1px solid black;"  id="updateProject"  >
      <!--upade project form goes here-->
      <h2 style="font-size:50px">Update Project</h2>
      

      <?php
      
          //Connect to our MySQL database using the PDO extension.
          $pdo = new PDO('mysql:host=localhost;dbname=projectList', 'root', 'root');
          
          //Our select statement. This will retrieve the data that we want.
          $sql = "SELECT * FROM ApprovedESWW";
          
          //Prepare the select statement.
          $stmt = $pdo->prepare($sql);
          
          //Execute the statement.
          $stmt->execute();
          
          //Retrieve the rows using fetchAll.
          $users = $stmt->fetchAll();
      
      ?>
      <form action="update.php" method="post">
        <select name = "project">
                <option>Choose Project To Update</option>
            <?php foreach($users as $user): ?>
                <option value="<?= $user['Project']; ?>"><?= $user['Project']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="Submit" name="submit"><br>
      </form>

    </div>
  </div>
  </div>

</body>

</html>
