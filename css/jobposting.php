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
   <link href="novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync</title>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">



  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  
 <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="img/Novisync.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="solution.html">SOLUTIONS</a></li>
          
          <li><a href="affilition.html">AFFILIATIONS</a></li>
           <li class="menu-active"><a href="Careers.php">CAREERS</a></li>   
          <li><a href="contact.php">CONTACT US</a></li>
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
include 'db.php';
if(isset($_POST['submit']))
{
  $jobtitle=$_POST['jobtitle'];
  $joblocation=$_POST['location'];
  $fromdate=$_POST['fromdate'];
  $todate = $_POST['todate'];
  $jobtype = $_POST['jobtype'];
  
  
  $ins = mysqli_query($con,"INSERT INTO `careers`(`jobtitle`, `location`, `postedon`, `enddate`, `jobtype`) VALUES ('$jobtitle','$joblocation','$fromdate','$todate','$jobtype')");
  if($ins)
  {
      ?>
					<div class="modal-content">
					<div class="modal-body">
								<center>Job Posted Succesfully !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					  <button type="button" class="btn" onclick="location.href = 'jobposting.php';" style="background-color:green">Add More Jobs</button>
					  <button type="button" class="btn" onclick="location.href = 'index.html';" style="background-color:red">close</button>
					</div>
				  </div>

		<?  }
  else
  {
    ?>
					<div class="modal-content">
					<div class="modal-body">
								<center>Job Posted Failure !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					  <button type="button" class="btn" onclick="location.href = 'jobposting.php';" style="background-color:green">Add More Jobs</button>
					  <button type="button" class="btn" onclick="location.href = 'index.html';" style="background-color:red">close</button>
					</div>
				  </div>

		<?
  }
}
?>
<center>
<div style="width:70%;margin-top:30px;" >
<h2 style="color:black">Post a New Job Here</h2>
<form action="" method="post" style="width:50%">
<h5 style="color:black;margin-left:-450px">Job Title</h5>
<select class="form-control" name="jobtitle" required>
	<option value="">SELECT JOB TITLE</option>
	<option value="Software Automation Developer">Software Automation Developer</option>
	<option value="Senior System Engineers">Senior System Engineers</option>
	<option value="Senior System Administrator">Senior System Administrator</option>
	<option value="Network and Computer Systems Adminstrator">Network and Computer System Adminstrator</option>
	<option value="Sr.consultant/System Adminstrator">Sr.consultant/System Adminstrator</option>
	<option value="Senior System Adminstrator">Senior System Adminstrator</option>
	<option value="Research and Developement">Research and Developement</option>
	<option value="Marketing and Branding">Marketing and Branding</option>
	<option value="Android Developer">Android Developer</option>
	<option value="UI Developer">UI Developer</option>
	<option value="Php Developer">Php Developer</option>
	<option value="Analytics">Analytics</option>
	<option value="Java Developer">Java Developer</option>
	<option value="Networking">Networking</option>
	<option value="Sales">Sales</option>
</select>


<h5 style="color:black;margin-left:-425px">Job Location</h5>
<select class="form-control" name="location" required>
	<option value="">SELECT LOCATION</option>
	<option value="Fishkill">Fishkill</option>
</select>

<h5 style="color:black;margin-left:-400px">Job Posting Date</h5>
<input type="text" id="datepicker" name="fromdate" class="form-control" placeholder="Enter Start Date" readonly required>
<h5 style="color:black;margin-left:-425px">Job End Date</h5>
<input type="text" id="datepicker1" name="todate" class="form-control"  placeholder="Enter End Date"  readonly required>
<h5 style="color:black;margin-left:-425px">Job Type</h5>
<select class="form-control" name="jobtype" required>
	<option value="">SELECT JOB TYPE</option>
	<option value="INFRA">INFRASTRUCTURE </option>
	<option value="CODEDEVELOPER">CODE DEVELOPER</option>
	<option value="ANALYTICS">ANALYTICS</option>
	<option value="SALES">SALES</option>
</select>
<br>
<input type="submit" name="submit" value="Post New Job" style="background:blue; border:blue; border-radius:0.2rem;">
</form>
</div>

</center>

</body>
  </div>
    

   




 
</body>
</html>

