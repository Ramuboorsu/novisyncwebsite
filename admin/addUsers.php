<?php
session_start();
include '../db.php';
if(empty($_SESSION['userSession']) or ($_SESSION['userSession'] != 'admin') )
{
header("Location: logout.php");
}
// echo $_SESSION['userSession'];
if(isset($_POST["submit"]))
{  
$email =  $_POST["email"];
//checking email is present or not
$sql="SELECT * from novireg where email='$email'";
$res = mysqli_query($con,$sql);
$cnt = mysqli_num_rows($res);
if(mysqli_num_rows($res) == 0 )
{

$user = $_POST["username"];
$pass = $_POST["pass"];
$role =$_POST["role"];

$password = md5($pass);

// echo $password;
$ins = mysqli_query($con,"insert into novireg(email,username,role,password) values('$email','$user','$role','$password')");
if($ins)
{
  $msg = "successfully Registered";
}
else
{
  $msgerr = "something went wrong";
}


}
else
{
  $msg2 = "mail already taken";
}
}
?>

<!DOCTYPE html>
<html>
<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         function functionAlert(msg, myYes) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.show();
         }
      </script>
    
      
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
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    * {
  box-sizing: border-box;
}
/* style for input fields and select option */
/* input,select { */
input{
  display: inline-block;
  float: left;

}
/*style for label names */
label{
display: inline-block;
    float: left;
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
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
#role{
 width: 50%;
  padding: 15px;
  margin: 0px 70px 20px 0px;
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
  margin: 8px 340px;
  border: none;
  cursor: pointer;
  width: 30%;
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


  /* style for confirm buttons */
  #confirm {
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
         #confirm button {
            background-color: #FFFFFF;
            display: inline-block;
            border-radius: 12px;
            border: 4px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 60px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: left;
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
 <!-- <center>
<h2>Add User</h2>
</center> -->
<div class="row">
<center>
  <div class="column" style="background-color:white;">
    
<form method="post">
  <div class="containerReg">
    <h1>Register</h1>
    <div>
    <?php if(isset($msg))
    {
      echo "<h4 style='color:green'>".$msg."</h5>";
    }
    elseif(isset($msgerr))
    {
      echo "<h4 style='color:red'>".$msgerr."</h5>";
    }
    elseif(isset($msg2)){
      echo "<h4 style='color:red'>".$msg2."</h5>";
    }
    ?>
    </div>
    <hr>

    
    <label for="email">Email</label>
    
    <input type="text"  placeholder="Enter Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="please enter proper email">
    
    <label for="psw-repeat"><b>UserName</b></label>
    
    <input type="text" placeholder="UserName" name="username" required pattern="^[a-zA-Z0-9\s]{3,15}" title="please Enter min 3 and max 15 letters">

    <label for="ROLE"><b>Role</b></label>

    <select name="role" id="role" required>
      <option value="">Select User Role</option>
      <option value="Recruiter">Recruiter</option>
      <option value="Admin">Admin</option>
    </select>
    <label for="psw"><b>Password</b></label>
    
    <input type="password" placeholder="Enter Password" name="pass" required pattern="^[a-zA-Z0-9]{6,15}" title="please Enter min 6 and max 15 alphanumaric">
    <br>
<!-- 
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required> -->
    
  <center>
    <input type="submit" class="registerbtn" name="submit" value="Add User">
    </center>
  </div>
  
  
</form>

  </div>
  <div class="column" style="background-color:white;">
  <br><br>
  <h3>Users List</h3>
  
  <table id="example" class="table table-striped table-bordered" style="width:20%">
        <thead>
            <tr>
                <!-- <th>Id</th> -->
                <th>UserName</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
$sel = mysqli_query($con,"select * from novireg");
while($fet = mysqli_fetch_assoc($sel))
{
$id = $fet['id'];
$email = $fet['email'];
$username = $fet['username'];
$role = $fet['role'];
  ?>
            <tr>
                <!-- <td><?php  $id; ?></td> -->
                <td><?php echo $username; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $role; ?></td>
                <td><a href="action.php?id=<?php echo $id;?>" class="btn btn-primary">Update</a>
                  
                  


                  <div id="confirm">
         <div class="message"><h2>Are u sure want to delete?</h2></div>
            <a href="action.php?q=delete&id=<?php echo $id; ?>"><button class="yes" style="background-color:red;">Yes</button></a>
            <a href="addUsers.php"><button class="no" style="background-color:green;">No</button></a>

         </div>
      <input type="button" class="btn btn-danger" value="Delete" onclick="functionAlert();" />

                 <!-- <a href="action.php?q=delete&id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
               -->
            </tr>
            <?php
}
?>
                   </tbody>
        <!-- <tfoot>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </tfoot> -->
    </table>
    </center>
  </div>
</div>
 </body>
</html>