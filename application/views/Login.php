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
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>/assets/css/jquery-ui.min.css?v=99" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/css/dashboard_style.css?v=999.2" rel="stylesheet" type="text/css">
</head>
<body>
<div class="dashboardmainWrapper"> 
  <!-------------------- header Wrapper start here------------------>
  <div class="dashboardheaderWrapper dashboard_header">
    <div class="dashboardheaderWrapper">
      <div class="dashboardcenterWrapper">
        <div class="dashboardlogoWrapper">
          <div class="dashboard-logo"> <a href="#"> <img src="<?php echo base_url(); ?>/assets/images/jitb-logo.png" alt="logo" /> </a> </div>
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
        <?php echo form_open('user/login'); ?>
          <div class="dashboardlogin_form">
           <div class="lefta">
           	<a href="javascript:;"><img src="<?php echo base_url(); ?>/assets/images/facebook-login.png" width="40%"></a><br>
           OR<br><br>
           <h3>LOGIN VIA EMAIL</h3>
           </div>
           <?php if ($error = $this->session->flashdata('login_failed')): ?>
            <p> <?= $error ?></p>
           <?php endif; ?>
            <div class="dashboard_form_row">
              <label>Email id *</label>
              <?php echo form_input(['name'=>'email','class'=>'dashboardinput','value'=>set_value('email')]); ?>
              <!-- <input type="text" name="username" id="email_id" class="dashboardinput"> -->
              <p id="dash-p1" class="dashboard_error"><?php echo form_error('email'); ?></p>
            </div>
            <div class="dashboard_form_row">
              <label>Password *</label>
              <?php echo form_password(['name'=>'password','class'=>'dashboardpassword']); ?>
              <!-- <input type="password" name="password" id="password" class="dashboardpassword"> -->
              <p id="dash-p2" class="dashboard_error"><?php echo form_error('password'); ?></p>
            </div>
            <div class="dashboard_form_row">
              <button class="dashboard_btn">continue</button>
              <label class="not_user"><a href="<?php echo base_url(); ?>User/sign_up">No account? Create one!</a></label>
            </div>
          </div>
        <?php echo form_close(); ?>
        
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
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>/assets/js/dashboard.js?v=99.5"></script>
</body>
</html>
