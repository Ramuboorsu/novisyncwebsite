<?php
session_start();
if(empty($_SESSION['userSession']))
{
header("Location: logout.php");
}
?>	
<style>
	/* The Modal (background) */
	.modal {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  z-index: 1; /* Sit on top */
	  padding-top: 100px; /* Location of the box */
	  left: 0;
	  top: 0;
	  width: 100%; /* Full width */
	  height: 100%; /* Full height */
	  overflow: auto; /* Enable scroll if needed */
	  background-color: rgb(0,0,0); /* Fallback color */
	  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
	  position: relative;
	  background-color: #fefefe;
	  margin: auto;
	  padding: 0;
	  border: 1px solid #888;
	  width: 52%;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	  -webkit-animation-name: animatetop;
	  -webkit-animation-duration: 0.4s;
	  animation-name: animatetop;
	  animation-duration: 0.4s
	}

	/* Add Animation */
	@-webkit-keyframes animatetop {
	  from {top:-300px; opacity:0} 
	  to {top:0; opacity:1}
	}

	@keyframes animatetop {
	  from {top:-300px; opacity:0}
	  to {top:0; opacity:1}
	}

	/* The Close Button */
	.close {
	  color: white;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}

	.close:hover,
	.close:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}

	

	.modal-body {padding: 2px 16px;}

	
	}
	</style>
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

<script type="text/javascript">

function checkForm(form)
{
  if(!form.captcha.value.match(/^\d{5}$/)) {
    alert('Please enter the CAPTCHA digits in the box provided');
    form.captcha.focus();
    return false;
  }else{
    return true;
  }
}

</script>

</head>
<body>
  
 <header id="header">
    <div class="container-fluid">

      <div id="logo" >
      <a href="adminhome.php" style="font-size:38px; color:#03C4EB; text-decoration:none;"><img src="../img/Novisync.svg">Novisync</a>  
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>
<br />
          <nav id="nav-menu-container">
        <ul class="nav-menu">
          
          <li class="dropdown" ><a href="adminhome.php"  style="text-decoration:none;"><?php echo "Welcome ". $_SESSION['userSession']." !"; ?>
          <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
              <a href="chpwd.php" >Change Password</a>
              
            </div>
          </li>
          <li ><a href="adminhome.php" style="text-decoration:none;">HOME</a></li>
          <li ><a href="logout.php" style="text-decoration:none;">LOGOUT</a></li>
          
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->



 <br><br>
    

  <div> 
      <script>
    $( function() {
    var dateToday = new Date();
      $( "#datepicker" ).datepicker(
      {
      
      dateFormat: "yy-mm-dd",
      defaultDate: "+1w",
      changeMonth: true,
      changeYear: true,
      minDate: dateToday
      
      });
    });
    </script>
    <script>
    $( function() {
    var dateToday = new Date();
      $( "#datepicker1" ).datepicker(
      {
      
      dateFormat: "yy-mm-dd",
      defaultDate: "+1w",
      changeMonth: true,
      changeYear: true,
      minDate: dateToday
      });
    });
    </script>
 
<?php
include '../db.php';
if(isset($_POST['submit']))
{

  
  if($_POST['captcha'] != $_SESSION['digit']){

    $error = 'Sorry, the CAPTCHA code entered was incorrect!';
    } else{
      $jobid=$_POST['jobid'];
  $jobtitle=$_POST['jobtitle'];
  $joblocation=$_POST['location'];
  $fromdate=$_POST['fromdate'];
  $todate = $_POST['todate'];
  $jobtype = $_POST['jobtype'];
  $jobpage = $_POST['jobpage'];
  
  
  $up = mysqli_query($con,"UPDATE `careers` SET `jobtitle`='$jobtitle',`location`='$joblocation',`postedon`='$fromdate',`enddate`='$todate',`jobtype`='$jobtype',`jobpage` = '$jobpage' WHERE `id` = '$jobid'");
  if($up)
  {
      ?>
					<div class="modal-content">
					<div class="modal-body">
								<center>Job Updated Successfully !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					  
					  <button type="button" class="btn" onclick="location.href = 'managejobs.php';" style="background-color:red">Close</button>
					</div>
				  </div>

		<?php  }
  else
  {
    ?>
					<div class="modal-content">
					<div class="modal-body">
								<center>Job Updation Failure !</center>
					</div>
				<div class="modal-footer" style="text-align:center">
					  
					  <button type="button" class="btn" onclick="location.href = 'managejobs.php';" style="background-color:red">Close</button>
					</div>
				  </div>

		<?php
  }
    }
}
?>
<?php
if(@$_GET['q'])
{
	$jobid = $_GET['q'];
	
	$sel = mysqli_query($con,"SELECT * FROM `careers` WHERE `id` = '$jobid'");
	while($fet = mysqli_fetch_assoc($sel))
	{
?>
<center>
<div style="width:70%;margin-top:30px;" >
<h2 style="color:black">Update Job Here</h2>
<form action="" method="post" style="width:50%" id="form-handler" onsubmit="return checkForm(this)">
<h5 style="color:black;text-align:left">Job Post Page</h5>
<select class="form-control" name="jobpage" required>
	<option value="<?php echo $fet['jobpage']; ?>"><?php echo $fet['jobpage']; ?></option>
	<option value="PERM JOBS">PERM JOBS</option>
	<option value="LCA JOBS">LCA JOBS</option>
	
</select>	
<h5 style="color:black;text-align:left">Job Title</h5>
<select class="form-control" name="jobtitle" required>
	<option value="<?php echo $fet['jobtitle']; ?>"><?php echo $fet['jobtitle']; ?></option>
	<option value="Cloud Systems Engineer">Cloud Systems Engineer</option>
	<option value="Devops Engineer">Devops Engineer</option>
	<option value="Software Developer / Analyst">Software Developer / Analyst</option>
	<option value="Sr. Storage Administrator">Sr. Storage Administrator</option>
	<option value="Systems Administrator">Systems Administrator</option>
	<option value="Systems Engineer">Systems Engineer</option>
	<option value="Sr. Network Engineer">Sr. Network Engineer</option>
	<option value="Systems Backup Engineer">Systems Backup Engineer</option>
	<option value="VMWare Engineer">VMWare Engineer</option>
</select>


<h5 style="color:black;text-align:left">Job Location</h5>
<select class="form-control" name="location" required>
  <option value="<?php echo $fet['location']; ?>"><?php echo $fet['location']; ?></option>
  
	<option value="Alberta, Canada">Alberta, Canada</option>
  <option value="Ontario, Canada">Ontario, Canada</option>
	<option value="Hyderabad, India">Hyderabad, India</option>
	<option value="Riyadh, Saudi Arabia">Riyadh, Saudi Arabia</option>
	<option value="Johannesburg, South Africa">Johannesburg, South Africa</option>
  <option value="New York, USA">New York, USA</option>
  <option value="Texas, USA">Texas, USA</option>
</select>

<h5 style="color:black;text-align:left">Job Posting Date</h5>
<input type="text" id="datepicker" name="fromdate" class="form-control" placeholder="Enter Start Date" value="<?php echo $fet['postedon']; ?>" readonly required>
<h5 style="color:black;text-align:left">Job End Date</h5>
<input type="text" id="datepicker1" name="todate" class="form-control"  placeholder="Enter End Date"  value="<?php echo $fet['enddate']; ?>" readonly required>
<h5 style="color:black;text-align:left">Job Type</h5>
<select class="form-control" name="jobtype" required>
	<option value="<?php echo $fet['jobtype']; ?>"><?php echo $fet['jobtype']; ?></option>
  
	<option value="Alberta, Canada">Alberta, Canada</option>
	<option value="Hyderabad, India">Hyderabad, India</option>
	<option value="Saudi Arabia, Middle East">Saudi Arabia, Middle East</option>
	<option value="Johannesburg, South Africa">Johannesburg, South Africa</option>
  <option value="Newyork, USA">Newyork, USA</option>
  <option value="Fishkill, USA">Fishkill, USA</option>
  </select>
<br>

<?php
if(isset($error)){
  echo "<h5 style='color:red'>$error</h5>";
}
?>
<br/>
<p><img id="captcha" src="../captcha.php" width="160" height="45" border="1" alt="CAPTCHA">
<small><a href="#" onclick="
  document.getElementById('captcha').src = '../captcha.php?' + Math.random();
  document.getElementById('captcha_code_input').value = '';
  return false;
">Refresh</a></small></p>
<p><input id="captcha_code_input" type="text" name="captcha" size="6" maxlength="5" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');"> <small>Enter the digits from the image into this box</small></p>

<input type="hidden" name="jobid" value="<?php echo $jobid; ?>">
<br>
<input type="submit" name="submit" value="Edit Job" class="btn btn-primary">
</form>
</div>

</center>
<?php
}
}
?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->

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

