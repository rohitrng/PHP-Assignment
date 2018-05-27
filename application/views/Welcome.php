<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>assets/css/dashboard_style.css?v=999.2" rel="stylesheet" type="text/css">
</head>
<body>
<div class="dashboardmainWrapper"> 
  <!-------------------- header Wrapper start here------------------>
  <div class="dashboardheaderWrapper dashboard_header">
    <div class="dashboardheaderWrapper">
      <div class="dashboardcenterWrapper">
        <div class="dashboardlogoWrapper">
          <div class="dashboard-logo"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/jitb-logo.png" alt="logo" /> </a> </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
  <!-------------------- header Wrapper end here ------------------>
  <div class="dashboardborder"></div>
  <!-------------------- login Wrapper start here------------------>
  <div class="dashboardloginWrapper">
    <div class="dashboardcenterWrapper">
      <div class="dashboardlogincol30">
       	<br><?php foreach ($username as $data) :
       		
       	endforeach; ?>
        <h3>Welcome <?php echo $data['u_username']; ?>
        <span><a href="<?php echo base_url(); ?>User/logout" id="logout">Logout</a></span></h3>
        <div class="clear"></div>
        <p><strong>SERVICES</strong><br>
        Audience insights. Editorial strategy. Multi-platform. Cross-device. Multi-channel. Distribution and Discovery. Syndication.
Strategy. Campaigns. Content. Analytics Multi-Platform. Long Form. Short Form. Conceptualization. Production. Desktop and Mobile. UI/UX and Design. Coding and development. Analytics and reporting. Content Management.
       </p>
        <div class="fbPost">
        	<h3>Facebook Feed</h3>
        	<a href="https://www.facebook.com/The120MediaCollective/photos/pcb.2014114175327570/2014111441994510/?type=3&theater" target="_blank"><img src="<?php echo base_url(); ?>assets/images/fb-post.jpg"></a>
        	<a href="https://www.facebook.com/The120MediaCollective/photos/pcb.2014114175327570/2014111441994510/?type=3&theater" target="_blank"><img src="<?php echo base_url(); ?>assets/images/fb-post.jpg"></a>
        	<a href="https://www.facebook.com/The120MediaCollective/photos/pcb.2014114175327570/2014111441994510/?type=3&theater" target="_blank"><img src="<?php echo base_url(); ?>assets/images/fb-post.jpg"></a>
        	<a href="https://www.facebook.com/The120MediaCollective/photos/pcb.2014114175327570/2014111441994510/?type=3&theater" target="_blank"><img src="<?php echo base_url(); ?>assets/images/fb-post.jpg"></a>
        	<a href="https://www.facebook.com/The120MediaCollective/photos/pcb.2014114175327570/2014111441994510/?type=3&theater" target="_blank"><img src="<?php echo base_url(); ?>assets/images/fb-post.jpg"></a>
        	<div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-------------------- login Wrapper end here ------------------> 
  
  <!-------------------- footer Wrapper start here------------------>
  <div class="dasboard_footer dashboard_foot">
    <div class="dashboardborder"></div>
    <div class="dashboardcenterWrapper">
      <div class="dasboard-footer-col-50">
        <ul class="dasboard_social_nw">
          <li> <span class="dasboard_connect_text ">Connect with us</span></li>
          <li> <a href="#"> <i class="fa fa-twitter fa-lg" aria-hidden="true"></i> </a> </li>
          <li> <a href="#"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i> </a> </li>
          <li> <a href="#"> <i class="fa fa-youtube fa-lg" aria-hidden="true"></i> </a> </li>
          <li> <a href="#"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> </a> </li>
          <li> <a href="#"> <i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i> </a> </li>
        </ul>
      </div>
      <div class="dasboard-footer-col-50">
        <ul class="dasboard_copyright_menu">
          <li><a href="#">Copyright</a></li>
          <li>|</li>
          <li><a href="#">Privacy Policy</a></li>
          <li>|</li>
          <li><a href="#">Cookie Policy</a></li>
          <li>|</li>
          <li><a href="#">Terms of use</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-------------------- footer Wrapper end here ------------------> 
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/dashboard.js?v=99.5"></script>
</body>
</html>