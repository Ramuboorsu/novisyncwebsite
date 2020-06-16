<?php
session_start();
include '../db.php';
if(empty($_SESSION['userSession']))
{
header("Location: logout.php");
}
?>
<style>
* {
  box-sizing: border-box;
}
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

/* labels style */
label{
display: inline-block;
    font-size:16px;
    clear: left;
    width: 250px;
    text-align: right;
    margin:20px 20px;
}

/* Add padding to containers */
.containerReg {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* style for confirm box */
#confirm1 {
          margin-top:-300px;
            display: none;
            background-color: #F3F5F6;
            color: #000000;
            border: 2px solid #aaa;
            position: fixed;
            width: 300px;
            height: 200px;
            left: 50%;
            margin-left: -100px;
            padding: 10px 20px 10px;
            box-sizing: border-box;
            text-align: center;

         }
         #confirm1 button {
            background-color: #FFFFFF;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         .yes1{
          background-color: green;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         #confirm1 .message1 {
            text-align: left;
         }

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
#role{
 width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
#role:focus{
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px -40px;
  border: none;
  cursor: pointer;
  font-size:16px;
  width: 10%;
  opacity: 0.9;
}

.cancelbtn {
  background-color: red;
  font-size:16px;
  color: white;
  padding: 16px 20px;
  margin: 8px 60px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<!DOCTYPE html>
<html>
<head>
<link href="../img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync</title>
  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!-- bootstrap buttons
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!--end -->



  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <script>
//datatable script
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
//form reset

<script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
</script>

  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
         function functionAlert1(msg1, myYes) {
            var confirmBox = $("#confirm1");
            confirmBox.find(".message1").text(msg1);
            confirmBox.find(".yes1").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes1").click(myYes);
            confirmBox.show();
         }
      </script>
      
</head>
<body>
  
 <header id="header">
    <div class="container-fluid">

      <div id="logo">
<a href="adminhome.php" style="font-size:38px; color: #03C4EB; text-decoration:none;"><img src="../img/Novisync.svg">Novisync</a>       
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
<?php

// $conn = mysqli_connect("localhost","root","","novireg");
if(@$_GET['q'] == 'delete')
{
    $id = @$_GET['id'];
    $del = mysqli_query($con,"delete from novireg where id = $id");
    if($del)
    {
        echo '<script>window.location.href="addUsers.php";</script>';

    }

}
else
{
$id = @$_GET['id'];
// echo $id;

if(isset($_POST["Update"]))
{  
  $id = $_POST["id"];
$email =  $_POST["email"];
//checking email is present or not
$sql="SELECT * from novireg where email='$email'";
$res = mysqli_query($con,$sql);
$cnt = mysqli_num_rows($res);
// echo $cnt;
if(mysqli_num_rows($res) <= 1 )
{
$user = $_POST["username"];
$pass = $_POST["pass"];
$role =$_POST["role"];
$password = md5($pass);
$selid = mysqli_query($con,"select * from novireg where id =$id");
while($fet = mysqli_fetch_assoc($selid))
{
$id = $fet['id'];
// $email = $fet['email'];
// $username = $fet['username'];
// $role = $fet['role'];
$oldpass = $fet['password'];
}
// echo $oldpass."<br>".$pass;
if($pass == "")
{
  //if same password
  $up = mysqli_query($con,"update novireg set email='$email',username='$user',role='$role' where id='$id'");
}
else
{
// echo $password;  if password changed
$up = mysqli_query($con,"update novireg set email='$email',username='$user',role='$role',password='$password' where id='$id'");
}
if(mysqli_affected_rows($con) > 0)
{
    echo '<script>window.location.href="addUsers.php";</script>';
  $msg = "successfully Updated";

}
else
{
  $msgerr = "please update and click button otherwise don't click";
}


}
else
{
  $msg2 = "mail already taken";
}
}
?>

<!-- update form-->
<form method="post">
<center>
  <div class="container">
    <h1>Update</h1>
    <div>
    </center>
    
    <?php 
    //success and failure messages
    if(isset($msg))
    {
      echo "<center><h4 style='color:green'>".$msg."</h5></center>";
    }
    elseif(isset($msgerr))
    {
      echo "<center><h4 style='color:red'>".$msgerr."</h5></center>";
    }
    elseif(isset($msg2)){
      echo "<center><h4 style='color:red'>".$msg2."</h5></center>";
    }
    ?>
    </div>
    <hr>
<?php

$sel = mysqli_query($con,"select * from novireg where id =$id");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$email = $fet['email'];
$username = $fet['username'];
$role = $fet['role'];
$pass = $fet['password'];
  ?>
<center>
    <!-- <label for="psw"><b>Id</b></label>
    <br> -->
    <input type="hidden" placeholder="Enter id" value="<?php echo $id; ?>" name="id" readonly>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" value="<?php echo $email; ?>" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="please enter proper email">
    <br>
    <label for="psw-repeat"><b>UserName</b></label>
    <input type="text" placeholder="UserName" value="<?php echo $username; ?>" name="username" required pattern="^[a-zA-Z0-9\s]{3,15}" title="please Enter min 3 and max 15 letters">
    <br>
    
    <label for="ROLE"><b>Role</b></label>
    <select name="role" id="role">
      <?php 
      if($role == 'Admin')
      {
        ?>
        <option value="Admin">Admin</option>
      <option value="Recruiter">Recruiter</option>
      <?php
      }
      else
      {
        ?>
      <option value="Recruiter">Recruiter</option>
      <option value="Admin">Admin</option>
      <?php
      }
      ?>
      
    </select>
    <br>
    <label for="ROLE"><b>Password</b></label>
    <input type="text" placeholder="Password" value="" name="pass">
    <br>
<!-- 
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required> -->
    <hr>
    

    <!-- <input type="submit" class="registerbtn" name="Update" value="Update">
     --><div id="confirm1">
         <div class="message1"><h2>Are u sure want to update?</h2></div>
           <input type="submit" name="Update" class="yes1" value="Yes">
            <a href="action.php?id=<?php echo $id;?>"><button class="no" style="background-color:#DD6B55;">No</button></a>

         </div>
      <input type="button" class="registerbtn" value="Update" onclick="functionAlert1();" />

    <input type="submit" formaction="addUsers.php" class="cancelbtn"  name="cancel" value="Cancel">
    </center>
  </div>
  <?php
}
  ?>
  
</form>
<?php
}
?>
</body>
</html>