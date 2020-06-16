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

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">



  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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

function ConfirmDelete()
{
  var x = confirm("Are you sure you want to Delete the job ?");
  if (x)
      return true;
  else
    return false;
}
function ConfirmEdit()
{
  var y = confirm("Are you sure you want to Edit the job ?");
  if (y)
      return true;
  else
    return false;
}

</script>

</head>
<body>
   <header id="header">
    <div class="container-fluid">

      <div id="logo">
<a href="adminhome.php" style="font-size:38px; color:#03C4EB; text-decoration:none;"><img src="../img/Novisync.svg">Novisync</a>       
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
 <?php
include '../db.php';
if(@$_GET['q'])
{
	$jobid =$_GET['q'];
	$del = mysqli_query($con,"DELETE FROM `careers` WHERE `id` = '$jobid'");
	if($del)
	{

?>						<div class="modal-content">
					<div class="modal-body">
								<center>Job Deleted Successfully !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					  <button type="button" class="btn" onclick="location.href = 'managejobs.php';" style="background-color:green" >OK</button>
					  
					</div>
				  </div>

<?php
		
	}
	else
	{
?>						<div class="modal-content">
					<div class="modal-body">
								<center>Job Deletion Faliure !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					  <button type="button" class="btn" onclick="location.href = 'managejobs.php';" style="background-color:green">OK</button>
					  
					</div>
				  </div>

<?php

	}
}

?> 
  
		<div style="width:80%;margin-top:100px;margin-left:10%">
	<div style="overflow-x:auto;">
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Location</th>
                <th>Posted On</th>
                <th>Closed Date</th>
                <th>Job Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../db.php';
            $sel = mysqli_query($con,"SELECT * FROM careers order by postedon DESC");
            while($fet = mysqli_fetch_assoc($sel))
            {
				?>
				<tr>
				<td><?php echo $fet['jobtitle']; ?></td>
				<td><?php echo $fet['location']; ?></td>
				<td><?php echo $fet['postedon']; ?></td>
				<td><?php echo $fet['enddate']; ?></td>
				<td><?php echo $fet['jobtype']; ?></td>
				<td><a onClick="return ConfirmEdit()" href="<?php echo 'editjobs.php?q='.$fet['id'];?>" class="btn btn-warning">EDIT</a>&nbsp;&nbsp;<a onClick="return ConfirmDelete()" href="<?php echo 'managejobs.php?q='.$fet['id'];?>" class="btn btn-danger">DELETE</a></td>
				</tr>
				<?php
			}
            ?>
        </tbody>
 
    </table>
    </div>
    </div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
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

