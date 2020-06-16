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
	  width: 100%;
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
<html lang="en">

<head>
  <meta charset="utf-8">
<link href="img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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
    p{
      color:black ;
       font-size:16px;
    }

    
@media only screen and (max-width: 1000px) {
 


  #home{
    
    width:100%;
  }

  #responsive1{
    width:100%;
    margin-left:25%;
  }
  
}
    </style>


</head>
<body>
  <div id="preloader"></div>
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container-fluid">
 <div id="logo">

 <a href="index.php" style="font-size:38px;"><img src="img/Novisync.svg">Novisync</a>
        <!-- <img src="img/Novisync.png" alt="" title="" />--> 
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>
      <br>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">HOME</a></li>
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
          <li class="menu-active"><a href="contact.php">CONTACT US</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
			<div style="margin-top:20px;">      
<div class="col-md-3" style="margin-top:px; text-align: justify;text-justify: inter-word;">
      <div class="info">
              <h4 style="color:black ; font-size:20px"><b>USA</b></h4>
             <a href="https://www.google.com/maps/place/Novisync+Solutions,+Inc./@41.5252332,-73.8973484,17z/data=!3m1!4b1!4m5!3m4!1s0x89dd36fc2b8de56d:0x2555a71885c29ebb!8m2!3d41.5252292!4d-73.8951597"><i class="fa fa-map-marker"></i></a>
       <p> Novisync Inc.<br>
300 Westage Business Center Drive,<br>
Fishkill, New York 12524.<br>
Ph: 845-765-0250</p>
</div>
</div>
<div class="col-md-3" style="margin-top:px; text-align: justify;text-justify: inter-word;">             
        <div class="info">
              <h4 style="color:black ; font-size:20px"><b>Canada</b></h4>
              <a href="https://www.google.com/maps/place/Novisync+Canada+Inc./@51.0427268,-114.0661294,17z/data=!3m1!4b1!4m5!3m4!1s0x537170028d449e37:0x4f7ebad05e423b83!8m2!3d51.0427234!4d-114.0639407"><i class="fa fa-map-marker"></i></a>
<p>Novisync Canada Inc.<br>
165 Simcoe CI SW ,
Calgary, <br>Alberta – T3H 4S4.<br> 
Ph : 587-352-6220</p>
 <p>
 Novisync Canada Inc.<br>
315, 7 West winds Crescent NE,
Calgary, <br>Alberta – T3J 5H2.<br> 
</p>
</div>
</div>           
       <div class="col-md-3" style="margin-top:px; text-align: justify;text-justify: inter-word;">
       <div class="info">
           <h4 style="color:black ; font-size:20px"><b>India</b></h4>
             <a href="https://www.google.com/maps/place/Novisync/@17.4426822,78.3534867,17z/data=!3m1!4b1!4m5!3m4!1s0x3bcb93960b2b11cf:0xb8f7f20043316f04!8m2!3d17.4426771!4d78.3556754"> <i class="fa fa-map-marker"></i></a>

           <p>Novisync Solutions India Pvt. Limited.
2-37/141, 2nd floor, Gachibowli Central,<br>
Vinayak nagar, Gachibowli,<br>
Hyderabad – 500032.<br>
Ph: 040-40033662</p>
</div>
</div>
            <div class="col-md-3" style="margin-top:px;">
				<div class="info">
              <h4 style="color:black ; font-size:20px"><b>South Africa</b></h4>
             <a href="https://www.google.com/maps/search/Novisync+Solutions+SA+Birchwood+Court,+43+Montrose+St,+Vorna+Valley,Johannesburg,+Gauteng,+South+Africa+%E2%80%93+1686./@-26.0075952,28.1160513,17z/data=!3m1!4b1"> <i class="fa fa-map-marker"></i></a>
           <p> Novisync Solutions SA.<br>
Birchwood Court,<br>
43 Montrose St, <br> Vorna Valley, Johannesburg,
Gauteng, <br>South Africa – 1686.<br>
Ph : +27-11-2050352 </p>
</div>
</div>              
</div>
		
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider">
		  </div>
          <p class="section-description"></p>
          <div id="responsive" class="col-md-6 col-md-push-2" style="margin-left:20%" >
        

<!--php mailer  code end-->
          <div class="form" id="home">
		
		          <!--php mailer  code start -->
<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sub = $_POST['subject'];
	$msg = $_POST['message'];
	
$mailmsg = '<h2>Get in Touch </h2>
	<br>
	<br> 
	Details<br>
	-------<br>
	Name 	: '.$name.'<br>
	Email  	: '.$email.'<br>
	Subject : '.$sub.'<br>
	Message : '.$msg.'<br>
	<br>
	Thankyou.';
	$to = "contact@novisync.com";
        $subject = $sub;

        $message = $mailmsg;

        $header = "From:".$email." \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to,$subject,$message,$header);
		 if( $retval == true ) {
           				?>
           					<div class="modal-content">
					<div class="modal-body">
								<center>Thank You For Contacting Us, We Will Reach You Soon !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					
					  <button type="button" class="btn btn-primary" onclick="location.href = 'contact.php';">Close</button>
					</div>
				  </div><?php
        }else {
			?>
          					<div class="modal-content">
					<div class="modal-body">
								<center>We Will Reach You Soon !</center>
					</div>
					<div class="modal-footer" style="text-align:center">
					
					  <button type="button" class="btn btn-primary" onclick="location.href = 'contact.php';">Close</button>
					</div>
				  </div>
        <?php }
}		
		?>

       <form method="post" style="margin-top:20px;" id="responsive1">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        </div>
      </div>
      

      </div>
    </div>
  </section>

 <!-- <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">  
      v 2.0
</div></div></div> -->
 <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
                    <div class="credits">



<!-- <span><img src="Novisync.svg" style="height: 50px; float: right;">www.novisync.com</span> -->
<div id="logo">
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
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
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
