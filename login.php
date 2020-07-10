



<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Ferry Management System</title>  
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
<style >
    .mySlides {display:none;}
</style>
    </head>
<body class="host_version"> 


    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                  
                    <a class="navbar-brand" href="main.php"><img src="img/boat.png"style="height: 75px;width: 150px; float: left;" alt="image" ></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  
                
                
                </div>
            </div>
        </nav>
    </header>





<br><br><br>
<fieldset>
	<form action="" method="post" name="Login_Form">
  
    <?php if(isset($msg)){?>
    
      <a colspan="2" align="center" valign="top"><?php echo $msg;?></a>
    
    <?php } ?>
    
      <a colspan="2" align="center" valign="top" ><h3 >Login Here</h3></a>
    
    
      <a align="right" valign="top" style="margin-left: 590px;color: #3399ff">Username </a>
      <input name="Username" type="text" class="Input">
      <br><br>
      <a align="right" style="margin-left: 595px;color:#3399ff">Password</a>
      <input name="Password" type="password" class="Input">
      <br><br>
      <input name="Submit" type="submit" value="Login" align="center" style="margin-left: 730px;" class="Button3">
    
</form>

</fieldset>



	
    



	

    

    
    
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>


<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('falcon' => 'falcon');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:/mini/homepage.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>