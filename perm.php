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
	<style type="text/css">
    a[disabled="disabled"] {
        pointer-events: none;
    }
</style>


</head>
<body>
  <div id="preloader"></div>
  <!--==========================
  Header Section
  ============================-->
  <style>

    #testimonials{

      height: 84vh;
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
    </style>
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
        <div class="col-md-12">
         <h3 class="section-title">Careers</h3>
          <div class="section-title-divider"></div>
          <p class="section-description"> <div class="entry-content">
          <ul>
           <h2 align="center" style="color:black;margin-right:3%"><b>PERM JOBS</b> </h2>
<h3 align="center" style="color:#681338;">Find a place in our company. Come work with us!</h3>
<div style="overflow-x:auto;">
<table class="table table-bordered" id="example">
    <thead>
      <tr>
        
       <th>Job Title</th>
        <th>Location</th>
         <th>Posted On</th>
         <th>Expires On</th>
         <th>Apply</th>
      </tr>
      </thead>
	<tbody>
<?php
include 'db.php';
$selDate = mysqli_query($con,"SELECT * FROM `careers` WHERE `enddate` < NOW()") or die("Error");
$sel = mysqli_query($con,"SELECT * FROM `careers` WHERE `jobpage` ='PERM JOBS'");
while($fetch=mysqli_fetch_assoc($sel))
{
	$t = date("Y-m-d"); 
?>
<tr>
<td><a href="<?php echo 'perm_jobs.php?q='.$fetch['id'];?>"><?php echo $fetch['jobtitle']; ?></a></td>
<td><?php echo $fetch['location']; ?></td>
<td><?php echo date("m-d-Y", strtotime($fetch['postedon'])); ?></td>
<td><?php echo date("m-d-Y", strtotime($fetch['enddate'])); ?></td>
<td>  <a href="<?php echo 'apply.php?q='.$fetch['id'];?>" class="btn btn-primary" <?php if($fetch['enddate'] < $t){?> disabled="disabled" <?php } ?>>Apply</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
   
   
                   </div><!--.article-container -->
   
              
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
   
