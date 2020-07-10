<?php
  session_start();
  include 'functions.php';
?>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>VOYAGER</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style1.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- <link rel="stylesheet" href="nice1.css"> -->
    <link rel="stylesheet" href="nice2.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <head>
    <title>
      Account Login
    </title>
    <style>
      
      
      .mySlides {display:none;}
    </style>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"/> -->
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
  </head>
  <body class="host_version">
    
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                  
                    <a class="navbar-brand" href="first.php"><img src="img/boat.png"style="height: 75px;width: 150px; float: left;" alt="image" ></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="/mini/homepage.php" style="color: #3399ff">Home</a></li>
                        
                        <li><a href="login.php" style="color:#3399ff">Logout</a></li>
                    </ul>
                    
                      
                    
                
                </div>
                
                </div>
            </div>
        </nav>
    </header>



<fieldset>
    <form action="" method="post" name="" style="text-align-last: center">
 
    
      <a colspan="2" align="center" valign="top" ><h3 >Add Details</h3></a><br><br>

       <a align="right" valign="top" style="color: #3399ff">Enter the Boat type to modify </a><br>
      <input name="to_search_Boattype" type="text" class="Input" placeholder="Enter the Boat Type" required>
      <br><br>

      <a align="right" style="color:#3399ff">Enter the Boat name to modify </a><br>
      <input name="to_search_Boatname" type="text" class="Input" placeholder="Enter the Boat Name" required>
      <br><br>
    
    
      <a align="right" valign="top" style="color: #3399ff">Boat-Id </a><br>
      <input name="modify_Boatid" type="text" class="Input" placeholder="Enter the Boat-Id" required>
      <br><br>

      <a align="right" style="color:#3399ff">Boat Name </a><br>
      <input name="modify_Boatname" type="text" class="Input" placeholder="Enter the Boat Name" required>
      <br><br>

      <a align="right" valign="top" style="color: #3399ff">Boat type</a><br>
      <input name="modify_Boattypes" type="text" class="Input" placeholder="Enter the Type" required>  
      <br><br>

      <a align="right" valign="top" style="color: #3399ff">Destination</a><br>
      <input name="modify_Boatdes" type="text" class="Input" placeholder="Enter the Source" required>
      <br><br>

      <a align="right" valign="top" style="color: #3399ff"> Source </a><br>
      <input name="modify_Boatsrc" type="text" class="Input" placeholder="Enter the Destination" required>
      <br><br>

      <a align="right" style="color:#3399ff">Duration</a><br>
      <input name="modify_Boatdur" type="text" class="Input" placeholder="Enter the Duration" required>
      <br><br>

      <a align="right" style="color:#3399ff">Seats</a><br>
      <input name="modify_Boatseats" type="text" class="Input" placeholder="Enter the Seats" required>
      <br><br>

      <input name="Submit" type="submit" value="Submit"  id= "submit" align="center" style="" class="Button3">
      <span id="success_message" class ="text-success" ></span>
    
</form>

</fieldset>

















    </body>
</html>