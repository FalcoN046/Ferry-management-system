<?php
  session_start();
?>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>VOYAGE AIR</title>  
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



<head>
    
    


    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>
     <div class="container">
     <div class="col-lg-12">
     <br><br>
     <h1 class="text-warning text-center" > Display Table Data </h1>
     <br>
<fieldset>
 <div><a>Boat-ID &nbsp  Boat-Name &nbsp    Boat-type  &nbsp   Source &nbsp Destination  &nbsp Duration  &nbsp  Seats</a></div>
 <br><br>



<div style="margin-left: px">
<?php
echo "<html><body><table>\n\n";
$f = fopen("boat_details.txt", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        //  $line1= split ("\|", $line); 
        foreach ($line as $cell) {
            if($cell[0] != '$') {
                 echo "<td>" . htmlspecialchars($cell) . "</td>";
             }
               
        }
        echo "</tr>\n";
}
fclose($f);
// echo "\n</table></body></html>";
?>

</div>
</fieldset>




</div>
</div>





    </body>
</html>