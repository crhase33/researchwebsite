<?php


?><!DOCTYPE HTML>
<html>

<head>
    <title>Airbus Quality Reporting for AAE</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>



    <!--javascript includes-->
    <script src="javascript.js"></script>


    <!--navbar-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
           <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="index.php">Airbus</a>
           </div>
           <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-right">
               <li ><a href="index.php">Home </a></li>
               <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESWW <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="ESWW.php">Edit/Add Project</a></li>
                    <li><a class="active" href="Display.php">Tracking</a></li>
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
              <li><a href="admin.php">Administrator</a></li>

             </ul>
           </div><!--/.nav-collapse -->
         </div>
       </div>
</head>

<body>
<p>This is the display Page</p>
<div class="container" onload="pulling.php">
  <div class="row">
    <div class="col-sm-8" id="block1" style="background-color:grey; height:600px">

          
            <?php 
              $servername = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "projectList";

              $conn = new mysqli($servername, $username, $password, $dbname);
              $return_arr = array();

              $fetch = mysql_query("SELECT SR_Benefit, LR_Benefit, DD_Benefit , Status FROM ApprovedESWW"); 
              while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC))
                {
                  $row_array['Status'] = $row['Status'];
                  $row_array['SR_Benefit'] = $row['SR_Benefit'];
                  $row_array['LR_Benefit'] = $row['LR_Benefit'];
                  $row_array['DD_Benefit'] = $row['DD_Benefit'];
                  $row_array['DD_Benefit'] = $row['DD_Benefit'];
                  array_push($return_arr,$row_array);
                }
            ?>
              
          


      <!---here we will put more containers and list many more dzfferent ways of vieweing data-->

    </div>

    <div class="col-sm-4" id= "block2" style="background-color:lightblue; height:600px">
      <p>Text will go here currently this is just a placeholder until i have more that can gohere. I may put a list of each project and then 
      have them displayed so that you could choose one and then i twould update the chart that will be to the left of this pane</p>

    </div>
  </div>
</div>
</body>

</html>
