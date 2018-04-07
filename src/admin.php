<?php


?><!DOCTYPE HTML>
<html>
   <style type="style.css"></style>
<head>
    <title>Airbus Change Platform Tracking</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
             <a class="navbar-brand" href="index.html">Airbus</a>
           </div>
           <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-right">
               <li><a href="index.html">Home </a></li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESWW <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="ESWW.html">Edit/Add Project</a></li>
                    <li><a href="Display.php">Tracking</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inservice Repair <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="inservice.html">Inservice Repair</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobile <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                   <li><a href="mobile.html">Mobile Tracking</a></li>
                 </ul>

               </li>
               <li><a href="about.html">About</a></li>
              <li><a   href="admin.php" class="active;">Administrator</a></li>

             </ul>
           </div><!--/.nav-collapse -->
         </div>
       </div>
</head>
<!--when the html finishes loading it will call the Viz from the tableau server-->

<body>

<div id="tablecont">
  
<form action ="pulling.php" method="post">

Username:<input type="text" name="username">
Password:<input type="text" name="passwrod">
<input type="submit" name="submit">
  


</form>


</div>
<div id="container">


</div>



</body>

</html>
