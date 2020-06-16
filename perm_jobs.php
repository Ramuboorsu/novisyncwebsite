<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<link href="img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync - PERM JOBS</title>
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
  <link href="css/ionicon.css" rel="stylesheet">

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
</head>
<body>
  <div id="preloader"></div>
  <!--==========================
  Header Section
  ============================-->
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
      color:black;
      font-size:16px;
    }
    </style>
     <script>
		function printDiv(divName) {
						$('.back-hide').hide();

			 var printContents = document.getElementById(divName).innerHTML;
			 var originalContents = document.body.innerHTML;
			 document.body.innerHTML = printContents;
			 window.print();
			 document.body.innerHTML = originalContents;
		}
        AOS.init({
            duration: 1200,
            disable: window.innerWidth < 991
        });
        $(window).scrollTop(0);
        $(window).scroll(function () {
            if ($(this).scrollTop() > 20) {
                $('.navbar').addClass("stick_menu");
            } else {
                $('.navbar').removeClass("stick_menu");
            }
        });
        if ($(window).width() > 767) {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                    $(this).toggleClass('open');
                });
        }
    </script>

  <header id="header">
    <div class="container-fluid">

  <div id="logo">

  <a href="index.php" style="font-size:38px;"><img src="img/Novisync.svg">Novisync</a>
        <!-- <img src="img/Novisync.png" alt="" title="" />--> 
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div><br />

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="solution.html">SOLUTIONS</a></li>
          
          <li><a href="affiliation.html">AFFILIATIONS</a></li>
          <li class="menu-active dropdown">
            <a>CAREERS <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
              <a  href="Careers.php">CURRENT OPENINGS</a>
              <a  href="perm.php">PERM JOBS</a>
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
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12"  >
          <h3 class="section-title">PERM JOBS</h3>
          <div class="section-title-divider" ></div>
       <?php
       include 'db.php';
       $id = @$_GET['q'];
       $sel1 = mysqli_query($con,"SELECT * FROM `careers` WHERE `id` = $id");
	while($fet1 = mysqli_fetch_assoc($sel1))
	{
		$fet1['id'];

       ?>
           <div class="careers_bg" >
        <div class="container">
            <div class="white_bg" id="job-print">
                
                <div class="margin_40lr">
                
                    <div class="row">
                        <div class="col-md-12 jobs-section perm-posting">

                        <div class="clearfix">
      					
                          <a class="pull-right print  back-hide" onclick="printDiv('job-print')"><span class="glyphicon glyphicon-print"></span></a> 
                          <span class="pull-right back-hide " style="padding:2px 10px; color:#bbb">|</span>
                          <a href="perm.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px;color:black;"><b>Job Title : <span class="jobs"><?php echo $fet1['jobtitle'];?></span> </b><!--<span class="job-date">Posted Date: 10-17-2018<br/>Expiry Date: 01-15-2019</span>--></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Description</b></h3>
                            <p class="margin_10b"><?php echo $fet1['jobdescription']; ?></p>
                       
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Requirements</b></h3>
                            <p class="margin_10b"><?php echo $fet1['jobrequirements'];?></p>                           
                             <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Conditions of Employment</b></h3>
                             <p class="margin_10b">Fishkill, New York and other unanticipated U.S. locations. No Telecommuting. Travel to customer location required. 9:00 AM to 5:00 PM, 40 hours per week, Monday through Friday. Salary: $137,426 per annum.</p>
                             <p class="margin_10b"><i>If interested, send resume to or contact:</i></p>
                             
                             
                             <div style="margin-bottom:30px">
                             <p>Jaideep Penugonda, HR Manager<br/>Novisync Inc <br />
                            
                            
							300 Westage Business Center Drive, Suite 400<br />
							Fishkill, NY 12524	<br />
							(845) 765-0250<br />
                            </p>
                            
                            

                           </div>
                           <?php if($fet1['manualpost'] == "Yes"){ ?>
                           <p class="margin_10b"></p>
                           <p class="text-uppercase">THIS NOTICE IS BEING POSTED IN CONNECTION WITH THE FILING OF AN APPLICATION FOR PERMANENT ALIEN LABOR CERTIFICATION. ANY PERSON MAY PROVIDE DOCUMENTARY EVIDENCE ON THE APPLICATION TO THE LOCAL OFFICE OF THE STATE OF EMPLOYMENT  COMMISSION AND/OR THE REGIONAL CERTIFYING OFFICER OF THE DEPARTMENT OF LABOR.</p>
                           <p style="margin:15px 0; color:black;"><i>Any person may provide documentary evidence bearing on the application to:</i></p>
                           <div>
                             <p class="margin_10b"> Atlanta Processing Center <br />
                            U.S.Department of Labor,ETA<br />
                            Harris Tower<br />
                            233 Peachtree Street,NE,Suite 410<br />
                            Atlanta,GA 30303</p>
                           </div>
                           
                           <p class="margin_10b small-font">
							<?php echo $fet1['jobnotice'];?>
                            <br /><br/>
								
                           </p>
                        <?php }?>
			                          <?php
                           if($fet1['manualpost'] == "Yes"){
                           ?>
                           <hr style="width:30%; margin-left: -5px;">
                           <p style="font-weight:700">Jaideep Penugonda<br />
                           HR Manager<br/>
                           Novisync Inc
                           
                           </p>
                           <?php
							}
                           ?> 
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php

}

?>
   
            
              
           </div><!--.row -->
       </div><!-- .container role: main -->
   
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
   
