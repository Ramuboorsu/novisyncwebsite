<?php
session_start();
//for sending mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";
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


				  <!-- Modal content -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<link href="img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">



<script>
function validateForm()                                   
{
	

	var emailed =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
	var regx = /^[a-zA-Z]{3,30}$/;
	var regx1 = /^[a-zA-Z]{1,1}$/;
	var num=/^[6-9]{1}[0-9]{9}$/;
    var name = document.forms["myform"]["firstname"]; 
    var name1 = document.forms["myform"]["lastname"];   
             
    var email = document.forms["myform"]["Email"];
    var visa = document.forms["myform"]["Visatype"]; 
   
    
       var stream = document.forms["myform"]["Jobtype"]; 
        var phone = document.forms["myform"]["mobile"]; 
       
    var passreg = /^[a-zA-Z0-9]{12}\s*/;
      var mat="Qualification";
        var mat1="Year Of Passing";
          var mat2="None";
          var emp=/^[a-zA-Z]{1,30}$/;
    
var inp = document.getElementById('file');
   
    var password = document.forms["myform"]["psw"]; 
    var namval="([a-zA-Z]{3,30}\s*)+";
     
     if( !name.value.match(emp))
     {
		 window.alert("Please enter your First name,name should not be empty ");
		return false;
	 }
	 
	 if (!name.value.match(regx))                                 
    {
       window.alert("Please enter your First name,name should not be empty and min letters 3 max 30.");
		return false;
    }
	 
	    if( !name1.value.match(emp))
     {
		 window.alert("Please enter your Last name,name should not be empty ");
		return false;
	 }
  
   
    
    if (!email.value.match(emailed))                                  
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    
   
  
	if (stream.value.match(mat2)) 
    {
		 window.alert("Please Select Jobtype");
		return false;
	}
	 if (!phone.value.match(num))                          
    {
        window.alert("Please enter your mobile number number format[6,7,8,9] and 10 digits");
        phone.focus();
        return false;
    }
        
    
   return true;
}


function lettersOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
          alert("Enter letters only.");
          return false;
       }
       return true;
     }

  
    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>

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

    .nav-menu li a{
      text-decoration:none;
    }
    </style>
<script>
function fileValidation(){
    var fileInput = document.getElementById('fileUpload');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf|\.docx|\.doc|\.odt)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .pdf/.docx/.doc/.odt only.');
        fileInput.value = '';
        return false;
    }else{
       return true;
    }
}



</script>

</head>
<body>
  <div id="preloader"></div>
  <header id="header">
    <div class="container-fluid">

      <div id="logo">
        <a href="index.php" style="font-size:38px;"><img src="img/Novisync.svg">Novisync</a>
        <!-- <img src="img/Novisync.png" alt="" title="" />--> 
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div><br>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="solution.html">SOLUTIONS</a></li>
          
          <li><a href="affiliation.html">AFFILIATIONS</a></li>
          <li class="dropdown menu-active">
            <a>CAREERS <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
              <a href="Careers.php">CURRENT OPENINGS</a>
              <a href="perm.php">PERM JOBS</a>
              <a href="joinus.php">JOIN US !</a>
             
            </div>
          </li>
          
        
          
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->             
     
 <br><br>
	<?php
include("db.php");
if(isset($_POST['register']))
{

  if($_POST['captcha'] != $_SESSION['digit']){
    $error = 'Sorry, the CAPTCHA code entered was incorrect!';
    } else{
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
        $email = $_POST['Email'];
        $vtype = $_POST['Visatype'];
        $jtype = $_POST['Jobtype'];
       $mobile = $_POST['mobile'];
       $des = $_POST['description'];
   
       
         $sel = mysqli_query($con,"SELECT * FROM `novidetails` WHERE `number` = '$mobile' AND `email` = '$email' AND `jobtype` != '$jtype'");
     $rows =mysqli_num_rows($sel);
     if($rows == 0)
     {
       $ins = mysqli_query($con, "INSERT INTO `novidetails`(`firstname`, `lastname`, `email`, `visatype`, `jobtype`, `number`, `description`) VALUES ('$fname','$lname','$email','$vtype','$jtype','$mobile', '$des')");
         $name       = $_FILES['file']['name'];  
         $target = "register/".$fname."-".$mobile."/";
         $target1 = "register/".$fname."-".$mobile."/$name"; 
            if(!is_dir("$target"))
                  {
              mkdir($target,0777,true);
              chmod($target,0777);
              umask(0);
                 }
       
      $temp_name  = $_FILES['file']['tmp_name'];  
           move_uploaded_file($temp_name, $target1);

           
     
   $ins=mysqli_query($con,"update novidetails set fileloc='$target1' where number='$mobile'") or die("error"); 
       if($ins)
       {
         //begining of mailer
        $mail = new PHPMailer(true);

        try {
        
           $mail->isSMTP();// Set mailer to use SMTP
           // set charset to utf8
           // Enable SMTP authentication
            // Enable TLS encryption, `ssl` also accepted
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output  
             $mail->CharSet = "utf-8";
            $mail->SMTPSecure = 'tls';                                        // Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; 
        
            $servers = [
            [
                'host'     => 'smtp.gmail.com',
                'username' => 'bhavanakale123@gmail.com',
                'password' => 'password',
            ],
            [
                'host'     => 'smtp.globat.com',
                'username' => 'bhavanak@novisync.com',
                'password' => 'password',
            ],
        ];                   // Set the SMTP server to send through
        
        
        //Pick a random server (or however you want to select a server)
        $server = $servers[array_rand($servers)];
        
        //Use the selected server values for mailing
        $mail->Host = $server['host'];
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   =  $server['username'];                     // SMTP username
            $mail->Password   =$server['password'];                               // SMTP password
                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
             $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
        
            //Recipients
            $mail->setFrom('bhavanakale123@gmail.com', 'Mailer');
            $mail->addAddress('bhavanakale123@gmail.com', 'Joe User'); 
            $mail->addAddress('bhavanakalekale123@gmail.com');     // Add a recipient
            $mail->addAddress('bhavanak@novisync.com');               // Name is optional
         
        
            //Attachments
            $mail->addAttachment($target1);         // Add attachments
            // Optional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Registered Candidates';
            $mail->Body = "<b>Candidate Details</b> <br> Firstname :".$fname." <br> lastname :".$lname."<br> email : ".$email;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
//end of mailer

       ?>
             <div class="modal-content">
             <div class="modal-body">
                   <center>Registered Successfully !</center>
             </div>
             <div class="modal-footer" style="text-align:center">
               <button type="button" class="btn" onclick="location.href = 'Careers.php';" style="background-color:green">OK</button>
             </div>
             </div>
   
       <?php
          
       }
       else
       {
       ?>
                 <div class="modal-content">
             <div class="modal-body">
                 <center>Registration Failure !</center>
             </div>
             <div class="modal-footer" style="text-align:center">
               <button type="button" class="btn" onclick="location.href = 'Careers.php';" style="background-color:red">OK</button>
             </div>
             </div>
       <?php
       }
     }
     else
     {
       ?>
                 <div class="modal-content">
             <div class="modal-body">
                 <center>User Already Registered !</center>
             </div>
             <div class="modal-footer" style="text-align:center">
               <button type="button" class="btn" onclick="location.href = 'Careers.php';" style="background-color:red">OK</button>
             </div>
             </div>
       <?php
   
     }
   
    }

 	
}
?>

  <div> 
<div>
<a href="Careers.php" class="pull-right back-hide" style="color:#03C4EB;margin-right:10%;text-decoration:none;">  &laquo; <strong> Back</strong></a>
</div>
<br> 
<h2 style="color:black; text-align:center;">Registration Form</h2>
<h2></h2> 


<?php if(@$_GET['q'])
{
	$fid =$_GET['q'] ;
		$sel1 = mysqli_query($con,"SELECT * FROM `careers` where `id` = '$fid'");
	while($fet1 = mysqli_fetch_assoc($sel1))
	{
		$jobtitle =$fet1['jobtitle'];
	}
}
  ?>
  

<div class="container form-top">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
        <div class="panel panel-danger">
          <div class="panel-body">
			 
      <form  action="" name="myform" method="post" onsubmit="return validateForm();retrun" enctype="multipart/form-data">
              <div class="form-group">
				  
				    
                <label >First Name *</label>
                <input type="text" name="firstname"  class="form-control" onkeypress="return  (event.charCode == 8  || event.charCode == 0 || event.charCode==44|| event.charCode==46 || event.charCode==32) ? null : (event.charCode > 64 &&
                          event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter First Name">
              </div>
 <div class="form-group">
                <label >Last Name *</label>
                <input type="text" name="lastname"  class="form-control" onkeypress="return  (event.charCode == 8  || event.charCode == 0 || event.charCode==44|| event.charCode==46 || event.charCode==32) ? null : (event.charCode > 64 &&
                          event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Last Name">
              </div>

              

              <div class="form-group">
                <label >Email *</label>
                <input type="email" name="Email"  class="form-control" placeholder="Enter Email">
              </div>

              <div class="form-group">
                <label >Contact Number *</label>
                <input type="text" name="mobile" maxlength="10" class="form-control" onkeypress="return  (event.charCode == 8  || event.charCode == 0 || event.charCode==44|| event.charCode==46) ? null : (event.charCode >= 48 && event.charCode <= 57)" placeholder="Enter Contact Number">
              </div>

              <div class="form-group">
                <label >Work Authorization Type *</label>
                <select name="Visatype" class="form-control">
				<option value="">Select Authorization Type</option>
				<option value="US Citizen">US Citizen</option>
				<option value="Greencard">Greencard</option>
				<option value="Greencard EAD"> Greencard EAD</option>
        <option value="E3 EAD">E3 EAD</option>
        <option value="H1B">H1B</option>
				<option value="H4 EAD">H4 EAD</option>
				<option value="L2 EAD">L2 EAD</option>
        <option value="OPT EAD">OPT EAD</option>
        <option value="OPT">OPT</option>
        <option value="CPT">CPT</option>
				</select>
              </div>

              <div class="form-group">
                <label >Job Title *</label>
               
                 <input type="text" id="JobType" name="Jobtype" value="<?php echo $jobtitle; ?>" class="form-control" readonly required>
              </div>
			
            
              <div class="form-group">
                <label >Upload Resume *</label>
                <input id="fileUpload" type="file" name="file" onchange="return fileValidation()">
               
               </div>			
              <div class="form-group">
                <label >Description *</label>
                <textarea id="textarea" maxlength="5000" rows="3" name="description" class="form-control" placeholder="Describe Your Profile"></textarea>
                <br>
                <div id="txtRemaining"></div>
              </div>

              <?php
if(isset($error)){
  echo "<h5 style='color:red'>$error</h5>";
}
?>
<br>
<p><img id="captcha" src="captcha.php" width="160" height="45" border="1" alt="CAPTCHA">
<small><a href="#" onclick="
  document.getElementById('captcha').src = 'captcha.php?' + Math.random();
  document.getElementById('captcha_code_input').value = '';
  return false;
">Refresh</a></small></p>
<p><input id="captcha_code_input" type="text" name="captcha" size="6" maxlength="5" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');"> <small>Enter the digits from the image into this box</small></p>

<br>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="register"  value="Submit">
                   </form>
              </div>
         

            <div id="error_message" style="width:100%; height:100%; display:none; ">
            <h4>Error</h4>
            Sorry there was an error sending your form.
            </div>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h2>Success! Your Message was Sent Successfully.</h2>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
$('#textarea').keyup(function () {
      $('#txtRemaining').html('Characters remaining ' + (5000 - $(this).val().length));
});
</script>
       <div id="tc-push-footer"></div>
   
       </div>
     </section>
   <div class="container wow fadeInUp">
         <div class="row">
           <div class="col-md-11"></div>
           
  </div></div>
   
   
     <!--==========================
     Team Section
     ============================-->
    
   
    <!--==========================
     Footer
   ============================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
                       <div class="credits">
   
   
   
   <!-- <span><img src="Novisync.svg" style="height: 50px; float: right;">www.novisync.com</span> -->
   <div id="logo" >
           <a href=""><img src="img/Novisync.svg" alt="" title="" style="height: 50px;"></img>www.novisync.com</a>
             
   
            <!--  <div class="span3 social-block pull-left"><span class="social-links"><a rel="nofollow" class="social-icon icon-mail" title="E-mail" aria-label="E-mail" href="mailto:contact@novisync.com" target="_blank"><i class="fa fa-envelope"></i></a><a rel="nofollow" class="social-icon icon-facebook" title="Follow me on Facebook" aria-label="Follow me on Facebook" href="https://www.facebook.com/Novisync-Inc-1432905210346839/" target="_blank"><i class="fa fa-facebook"></i></a></span></div>
    -->              
   
   <div class="span3 social-block pull-right">
              
   
                 
           <!--       <a rel="nofollow" class="social-icon icon-facebook" title="Follow me on Facebook" aria-label="Follow me on Facebook" href="https://www.facebook.com/Novisync-Inc-1432905210346839/" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp
   
   
           <a href="#">
             <span class="glyphicon glyphicon-envelope"></span>
           </a>
    -->
  

      <a href="https://in.linkedin.com/company/novisync-solutions-inc-" target="blank">
      <img src="img/lin.png"style="margin-bottom: 10px;"title="LinkedIn">
    </a>
  

      <a href="https://www.facebook.com/Novisync-Inc-1432905210346839/" target="blank">
      <img src="img/fb.png" style="margin-bottom: 10px;">
    </a>
         
         
                 
               
             </div>
   
           <!-- Uncomment below if you prefer to use a text image -->
           <!--<h1><a href="#hero">Header 1</a></h1>-->
         </div>
   
   
               <!--
                 All the links in the footer should remain intact.
                 You can delete the links only if you purchased the pro version.
                 Licensing information: https://bootstrapmade.com/license/
                 Purchase thae pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
               -->
             </div>
           </div>
         </div>
       </div>
     </footer>
     <!-- #footer -->
   
     <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
   
     <!-- Required JavaScript Libraries -->
     <script src="lib/jquery/jquery.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>
     <script src="lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="lib/superfish/hoverIntent.js"></script>
     <script src="lib/superfish/superfish.min.js"></script>
     <script src="lib/morphext/morphext.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/stickyjs/sticky.js"></script>
     <script src="lib/easing/easing.js"></script>
   
     <!-- Template Specisifc Custom Javascript File -->
     <script src="js/custom.js"></script>
   
     <script src="contactform/contactform.js"></script>
   
   
   </body>
   
   </html>





