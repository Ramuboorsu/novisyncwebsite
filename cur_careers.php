<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<link href="img/novisync_new.png" rel="shortcut icon" style="width: 100px;height: 100px">
  <title>Novisync - CURRENT OPENINGS</title>
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
      body{
          height:100%;
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
      </div> <br>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="solution.html">SOLUTIONS</a></li>
          
          <li><a href="affilition.html">AFFILIATIONS</a></li>
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
          <h3 class="section-title">CURRENT JOBS</h3>
          <div class="section-title-divider" ></div>
       <?php
	

	
       
       if(@$_GET['q'] == "Sr. Storage Administrator" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px;color:black;"><b>Job Title: <span class="jobs">Sr. Storage Administrator</b></span> <!--<span class="job-date">Posted Date: 10-17-2018<br/>Expiry Date: 01-15-2019</span>--></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black" ><b>Job Description</b></h3>
							<ul style="font-size:16px;color:black;">
							    <li>Experience in the storage administrator at enterprise storage solutions preferably EMC technologies.</li>
							    <li>Understanding of storage concepts and excellent experience on EMC VMAX, VNX, DMX, CLARiiON, Celerra, Powerpath and related technologies.</li>
							    <li>Understanding of SAN concepts and excellent experience with Enterprise and Departmental Brocade switches and Connectix Manager.</li>
								<li>Understanding for software defined storage like Scale IO & VMware VSAN.</li>
								<li>Comfortable working with SYMCLI, NAVICLI.</li>
								<li>Experience working with EMC FAST, FAST VP, FAST Cache, Thin Luns/Pools, RAID Groups, and Disk types.</li>
								<li>Experience working with Celerra Replicator, VG8, VG2, VMAX Time Finder Snaps, Clones, VNX Local/Remote Protection and SRDF.</li>
								<li>Experience working with CIFS, NFS, pNFS, Rsync, TCP/IP Concepts, and I/O Subsystems.</li>
								<li>Experience with Netapp products is a plus.</li>
								<li>Sharing ownership of operational responsibility for storage provisioning and availability at the Customer site(s) with the Customer Storage Manager. </li>
								<li>Provisioning storage based on standardized procedures detailed in the Operational Run Book and meeting Customer agreed upon standards. </li>
								<li>Configuration and layout of storage infrastructure. </li>
								<li>Performing necessary storage infrastructure maintenance in accordance with Vendor and Customer change management policies. </li>
								<li>Providing analysis of the environment and best practice knowledge transfer. </li>
								<li>Generating regular operations reports using supplied tools, such as infrastructure management tools like EMC, ViPR, SRM. </li>
								<li>Recommending changes to procedures which result in operational optimization and improved SLAs. </li>
                                <li>Participating in Root Cause Analysis reviews as applicable.</li>
                                <li>Candidate must be willing to relocate or travel.</li>

							</ul> 
							
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
       if(@$_GET['q'] == "Systems Administrator" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px; color:black;"><b>Job Title: <span class="jobs">Systems Administrator</span> </b><!--<span class="job-date">Posted Date: 10-17-2018<br/>Expiry Date: 01-15-2019</span>--></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;" ><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							  <li>Design, implementation and supporting VMware vSphere ESXi 6.0/5.0/4.1 environment.</li>
							  <li>vSphere 6.5.0 upgrade for large environment (20000+ VMs and 160+ ESX hosts).</li>
							  <li>Implemented VMware view design on Virtual desktops deployments and ThinApp.</li>
							  <li>Extensive hands on experience with design and implementation of enterprise wide Virtualization Projects with VMware.</li>
							  <li>Performed Installing and configuring HP C7000, CiscoUCS Blades B200 B250 B440, Compaq, and Dell Servers. Configuring RAID, Disk Mirroring, SAN Volume Expansion, Raid, SCSI Controller Installation.</li>
							  <li>Hands on experience in updating / upgrading ESX servers, Virtual Centre servers and windows virtual machines using VMware Update manager.</li>
							  <li>Coordination and interaction with dedicated global customers, Account Management and Infrastructure team to meet SLAs.</li>
							  <li>Troubleshooting Isilon NFS Storage related issues and configuring the NAS allocation on Database and Splunk Servers.</li>
							  <li>Troubleshooting the F5 Big IP Load Balancing alerts across all environments in the platform and creating SSL Certs and configuring LTM and GTM Virtual Server Ips and pools.</li>
							  <li>Documented the different procedures involved in the up-gradation of environment, solution and troubleshooting of the issues.</li>
                              <li>Troubleshooting all the Linux Server configuration issues including patch upgrades.</li>	
                              <li>Candidate must be willing to relocate or travel.</li>						  
							</ul> 
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							
							
							
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
if(@$_GET['q'] == "Systems Engineer" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px; color:black"><b>Job Title: <span class="jobs">Systems Engineer</span> </b><!--<span class="job-date">Posted Date: 10-17-2018<br/>Expiry Date: 01-15-2019</span>--></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black" ><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							  <li>Install, configure, and manage VMware vSphere environment 5.X/6.X. </li>
							  <li>Host Migration from VSS to VDS Switch. Virtual Machine creation and Storage Provisioning.</li>
							  <li>Support, monitor, maintain andidentify root-cause and resolve issues on Microsoft Windows server technologies (Server 2008 R2/2012/2016) operating systems, Exchange, DNS and Active Directory, and virtualization platforms.</li>
							  <li>Provide engineering support for the blade and server Virtual Environment deployment.</li>
							  <li>Experience in New Hyper Converged Infrastructure like VXRack, VXRail & Nutanix. </li>
							  <li>Experience in Converged Technology like VBlock & VXBlock. </li>
                              <li>Document virtualization environment and keep documents updated per the configuration management plan.</li>
                              <li>Candidate must be willing to relocate or travel.</li>
							  
							  </ul> 
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							  
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
if(@$_GET['q'] == "Cloud Systems Engineer" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px; color:black;"><b>Job Title: <span class="jobs">Cloud Systems Engineer</span> </b><!--<span class="job-date">Posted Date: 10-17-2018<br/>Expiry Date: 01-15-2019</span>--></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							
								
								<li>Cloud engineer with a minimum 2 plus years of experience with AWS. </li> 
								<li>Proven experience in migrating on-premise cloud applications to the cloud.</li> 
								<li>Good understanding of UNIX/ Linux  and Windows operating systems.</li> 
								<li>Experience working with clients network infrastructure security products including routing, DNS, and sub-nets, firewalls, encryption, and related best practices.</li> 
								<li>Strong knowledge of automation concepts, tools and scripting language like Ansible, Terraform, Python, Powershell, Bash, Puppet, Chef, etc.</li>
								<li>Understands and has used or designed/implemented) a CI-CD ( continuous integration and Delivery) process such as Jenkins, Travis CI, AWS code deploy.</li>
								<li>Understands containerization, has administered/configured Docker.</li>
								<li>Self Motivated individual with strong communication and presentation skills both internally and externally.</li>
                                <li>Strong problem-solving skills, ability to analyze complex problems and use a systematic approach to gain quick resolution.</li>
                                <li>Candidate must be willing to relocate or travel.</li>
								

							 </ul> 
							 
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							 
							 
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
if(@$_GET['q'] == "Devops Engineer" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px; color:black;"><b> Job Title: <span class="jobs">Devops Engineer</span></b></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							 <li>Self-directed work style with minimum supervision.</li>
							 <li>Ability to co-ordinate with a global team in different timezones.</li>
							 <li>Solid understanding and expertise of virtualization concepts including containers required.</li>
							 <li>Experience with F5 Load Balancers required. GTM Experience a plus.</li>
							 <li>Working experience or knowledge of infrastructure automation tools like Ansible or Puppet required.</li>
							 <li>Experience supporting Mysql databases preferred.</li>
							 <li>Working experience in a cloud openstack environment preferred.</li>
							 <li>Experience supporting enterprise-class monitoring like Nagios/zabbix/Sensu or any other monitoring tools for network/systems/application monitoring, ability to write custom scripts/plugins for custom monitoring a plus.</li>
							 <li>Ability to interface/support customers during the development/pre-production integration testing.</li>
							 <li>Unix shell scripting on bash or bourne shell required. Perl & Python a plus.</li>
							 <li>Strong technical/analytical and troubleshooting skills.</li>
							 <li>Good communication skills, both verbal and written across all user levels. Ability to create simple procedural documents.</li>
                             <li>Ability to produce useful operational documents and standard operating procedures in confluence required.</li>
                             <li>Candidate must be willing to relocate or travel.</li>
							  </ul> 
							  
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							  
							  
							  
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
if(@$_GET['q'] == "VMWare Engineer" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px;color:black;"><b>Job Title: <span class="jobs">VMWare Engineer</span></b></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							 <li>Research, analyze, evaluate and integrate new and emerging virtualization technologies.</li>
							 <li>Installing/supporting and configuring Windows 2003/2008 Servers, ESXi-4.1 Host and VM Machines as per the Clients standards.</li>
							 <li>Maintaining OS troubleshooting, monitoring, domain management, Server Build, Retirement/Decommissioning.</li>
							 <li>Managing AD and DC: User Provisioning/Deletion, OU and Group Creation, Maintaining Existing OUs in the domain, designed and placed based on departmental function and other criterions, design and implementing Group policies.</li>
							 <li>Provision Virtual Machines and patches to the software and hardware hosting infrastructure.</li>
							 <li>Maintain and restore VM backups and snapshots.</li>
							 <li>Using windows update for Patch Implementation and updating.</li>
							 <li>As an Enterprise admin of certain accounts provides delegation of authority.</li>
							 <li>Rectifying and resolving the alerts for all the servers (e.g.: Disk, Services, and Critical update alerts).</li>
							 <li>Configure and manage VMware ESXi hosts and VMware virtual machines.</li>
							 <li>Responsible for V-Motion/DRS/HA Hot/Cold Migration and V-Motion storage.</li>
							 <li>Responsible for Cloning/Template etc.</li>
							 <li>Patching of ESX servers and VMs with VMware Update manager.</li>
							 <li>Manage ESX and VM's through V Center server and perform various changes on VM's (updating VM Tools, allocate and increase hardware to enhance VM's performance and business continuity).</li>
							 <li>Responsible for ISEC implementation on all Wintel Servers with IBM specified standards and compliance.</li>
							 <li>Work on Incident Tickets, Change Tickets and Problem tickets under strict ITIL process.</li>
                             <li>Responsible for SHC (Server Health Check) and Server Hardening.</li>
                             <li>Candidate must be willing to relocate or travel.</li>
							  
							  </ul> 
							  
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							  
							  
							  
                        </div>
                    </div>
                                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
if(@$_GET['q'] == "Sr. Network Engineer" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px; color:black;"><b>Job Title: <span class="jobs">Sr. Network Engineer</span></b></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							 <li>Deep understanding of Cisco technologies, including core networking & security.</li>
							 <li>Experience implementing/managing Cisco products including, but not limited to, current Cisco Router and Switch Products such as Catalyst and Nexus.</li>
							 <li>Creating VLAN in Nexus 1K and 5K.</li>
							 <li>Administration of Cisco Catalyst 3560Cisco UCS deployment.</li>
							 <li>Cisco ASA with FirePower Services experience including NextGen services.</li>
							 <li>Troubleshooting traffic analysis and troubleshooting.</li>
							 <li>Experience implementing/managing EIGRP/BGP/OSPF routing protocols in an enterprise network environment.</li>
							 <li>Work with the Solution Architects and/or Design Engineers to ensure implementations plans reflect customer expectations in design and function.</li>
							 <li>Design and diagram business solutions utilizing best practices in varying technologies.</li>
                             <li>Review installations and train clients as needed on installed technologies.</li>
                             <li>Candidate must be willing to relocate or travel.</li>
							
							   </ul> 
							   
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							   
							   
							   
                        </div>
                    </div>
                    </div>
                
                
                
            </div>
        </div>
    </div>
<?php
}
if(@$_GET['q'] == "Systems Backup Engineer" )
       {
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
                          <a href="Careers.php" class="pull-right back-hide">  &laquo; <strong> Back</strong></a>        
                        </div>
                        <hr />
							<img src ="img/Novisync.png" width="350" style="margin-bottom:20px;">
                            <h2 class="detail_sub_head margin_10b" style="margin-top:0px;color:black;"><b>Job Title: <span class="jobs">Systems Backup Engineer</span></b></h2>
                            <h3 class="detail_sub_head margin_10b" style="color:black;"><b>Job Description</b></h3>
							<ul style="font-size:16px; color:black;">
							 <li>Experience in operations support for key platforms such as CommVault, NetApp, EMC, AWS ECS, S3, and EBS and will include monitoring day to day operations of CommVault based backups and operations of Storage devices.</li>
							 <li>Deep knowledge and working experience operating or implementing storage and backup solutions such as CommVault, NetApp, EMC Elastic Cloud Storage, AWS EC2, S3, EBS etc.</li>
							 <li>Experience leading data center projects and initiatives.</li>
							 <li>Troubleshooting server matters including systems, applications, and connectivity issues.</li>
							 <li>Manage backup and restore environments.</li>
							 <li>Experience with systems administration or systems engineering.</li>
							 <li>Knowledge of Data Domain and Avamar backup software.</li>
							 <li> Extensive knowledge of SAN/NAS.</li>
							 <li>Knowledge of Fibre Channel, FCoE, FCIP, and Ethernet.</li>
							 <li>Experience automating tasks associated with technical specialties.</li>
							 <li> Detailed experience with backup, recovery and archival methodologies and strategies.</li>
							 <li> Experience with DR methodologies.</li>
							 <li> Hands on experience with on and off-premise storage technology and proven experience in designing solutions using one or more backup and archive solutions.</li>
                             <li>Experience automating tasks associated with technical specialties.</li>
                             <li>Candidate must be willing to relocate or travel.</li>

							  </ul> 
  <br>														  
<h3 class="detail_sub_head margin_10b" style="color:black;"><b>Qualifications and Education Requirements</b></h3>		
<ul style="font-size:16px; color:black;">
<li>Master’s degree in Computer Science, Computer Engineering, Computer Information Systems, Management Information Systems, or related field preferred.</li>
<li>A Highly self-motivated individual who has the ability to work independently as well as in a team environment.</li>
<li>Ability to handle multiple tasks while prioritizing and delivering results on time.</li>
<li>Excellent verbal and written communication skills.</li>
<li>Ability to think strategically with a technical vision.</li>
<li>Proven project management and leadership skills.</li>
<li>Attention to detail and strong organizational skills.</li>
</ul>					  
							  
							  
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
   
