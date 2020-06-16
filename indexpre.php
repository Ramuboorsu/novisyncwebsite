<?php
	
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$orgname = $_POST['orgname'];
	$mobile = $_POST['mobile'];
	$desc = $_POST['desc'];
	$to = 'sales@novisync.com';
$mailmsg = '<h2>Get in Touch </h2>
	<br>
	<br> 
	Details<br>
	-------<br>
	Name 	: '.$name.'<br>
	Email  	: '.$email.'<br>
	Organization Name : '.$orgname.'<br>
	Mobile: '.$mobile.'<br>
	Description : '.$desc.'<br>
	<br>
	Thankyou.';
	  $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   
    if (@mail($to, $email, $mailmsg, $headers))
    {
    	echo '<script>alert("Your Requirement is Received ! We Will Reach You Soon. ");window.location.href="index.html"</script>'; 	
    }
	else
	{
		echo '<script>alert("Please Fill Requirement Again !");window.location.href="index.html"</script>';
	}
}
?>
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


  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style>
      body{
      position:fixed !important;

top:0;
right:0;
bottom:0;
left:0;

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

    #logocenter{
      width:100%; height:150px; margin-top: 9%;
    }

    @media only screen and (max-width: 768px) {

      #logocenter{
        margin-top: 58%;            
        width: 100%;
        height: 110px;
      }
    }                   
  
    </style>

  

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
          <li class="menu-active"><a href="index.php">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="solution.html">SOLUTIONS</a></li>
          
          <li><a href="affiliation.html">AFFILIATIONS</a></li>
          <li class="dropdown">
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

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero" style="background: url(./img/hero-bg.jpg) center; background-size: cover;">
    <div class="hero-container">
      <div class="wow fadeIn">
      

       <img src="img/Novisync.svg" id="logocenter">
       <h2 style="color:white;">A Leading <span>Cloud and Data Systems Integrator</span></h2> 
        <div class="actions">
          <a href="solution.html" class="btn-get-started">Our Solutions</a>
          <a onclick="document.getElementById('id01').style.display='block'" class="btn-services">What's Next</a>
        </div>
      </div>
    </div>
  </section>
  

  <!--==========================
  Div Section
  ============================-->
 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container" style="background-color:#03c4eb"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h3 style="margin-top:10px;color:white;"><b>What's Next</b></h3>
      </header>
      <div class="w3-container">
        <form method="post">
			<br>
			Name
			<br>	
        <input type="text" name="name" class="form-control" onkeypress="return  (event.charCode == 8  || event.charCode == 0 || event.charCode==44|| event.charCode==46 || event.charCode==32) ? null : (event.charCode > 64 &&
                          event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Enter Your Name" required >
        <br>
			Organization Name
			<br>
        <input type="text" name="orgname" class="form-control" placeholder="Enter Your Organization Name" required>
        <br>
			Email
			<br>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required >
        <br>
			Contact Number
			<br>
           <input type="text" name="mobile" maxlength="10" class="form-control" onkeypress="return  (event.charCode == 8  || event.charCode == 0 || event.charCode==44|| event.charCode==46) ? null : (event.charCode >= 48 && event.charCode <= 57)" placeholder="Enter Contact Number">
        <br>
			Detailed Description on Requirement
			<br>
        <textarea id="textarea" maxlength="5000" rows="3" name="desc" class="form-control" placeholder="Please Mention Detailed Description on Requirement"></textarea>
        <br>
        <div id="txtRemaining"></div>
        <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        <br>
        <br>
          <script>
$('#textarea').keyup(function () {
      $('#txtRemaining').html('Characters remaining ' + (5000 - $(this).val().length));
});
</script>
        </form>
      </div>
      <footer class="w3-container " style="background-color:#03c4eb">
        <p></p>
      </footer>
    </div>
  </div>
</div> 

  <!--==========================
  Footer
============================-->

 

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
