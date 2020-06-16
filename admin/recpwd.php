<?php
session_start();
include '../db.php';
if(empty($_SESSION['userSession']))
{
header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="../img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="../favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">



  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
 
    </style>
</head>
<body>
  
 <header id="header">
    <div class="container-fluid">

      <div id="logo" >
<a href="recruiterhome.php" style="font-size:38px; color:#03C4EB;"><img src="../img/Novisync.svg">Novisync</a>  
      </div>
<br />
          <nav id="nav-menu-container">
        <ul class="nav-menu">
          
          <li class="dropdown" ><a href="recruiterhome.php"  style="text-decoration:none;"><?php echo "Welcome ". $_SESSION['userSession']." !"; ?>
          <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
              <a href="recpwd.php" >Change Password</a>
              
            </div>
          </li>
          <li ><a href="recruiterhome.php" style="text-decoration:none;">HOME</a></li>
          <li ><a href="logout.php" style="text-decoration:none;">LOGOUT</a></li>
          
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
	<div style="width:80%;margin-top:100px;margin-left:10%">
		<form action="" method="post">
		<br>
		Current Password
		<br>
		<input type="password" name="password" class="form-control">
		<br>
		New Password
		<br>
		<input type="password" name="newpassword" class="form-control">
		<br>
		Re-type New Password
		<br>
		<input type="password" name="repassword" class="form-control">
		<br>
		<input type="submit" name="Update" class="btn btn-success" value="Update">&nbsp;&nbsp; <input type="reset" value="Reset" class="btn btn-warning">
		
		</form>
	</div>
	<?php
	if(isset($_POST['Update']))
	{
				$curpwd = $_POST['password'];
				$newpwd = $_POST['newpassword'];
				$repwd = $_POST['repassword'];
				
    $sel = mysqli_query($con,"SELECT * FROM novireg WHERE email ='{$_SESSION['email']}'");
				$fetch = mysqli_fetch_assoc($sel);
		
				if($fetch['password'] == md5($curpwd))
				{
				
				if($newpwd == $repwd )
				{
					$pwd=md5($repwd);
					$up = mysqli_query($con,"UPDATE novireg SET password = '$pwd'");
					echo '<script>alert("Password Updated Succesfully ! please Login With Updated password");window.location.href="index.php"</script>';
				}
				else
				{
					echo '<script>alert("New Password and Repassword Not Matched !")</script>';
				}
				}
				else
				{
					echo '<script>alert("Current Password is wrong !")</script>';
				}
	}
	?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/morphext/morphext.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/stickyjs/sticky.js"></script>
  <script src="../lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="../js/custom.js"></script>

  <script src="../contactform/contactform.js"></script> 	
</body>
</html>
