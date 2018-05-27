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
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
<link href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css?v=99" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/dashboard_style.css?v=999.2" rel="stylesheet" type="text/css">

<script type="text/javascript">
function submitform()
{
document.forms["myform"].submit();
alert("Value is sumitted");
}
</script>

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
  <div class="dashboardloginWrapper adminBx">
    <div class="dashboardcenterWrapper">
      <div class="dashboardlogincol30 adminWrapper">
        <br>
        <h3>Welcome Admin
        <span><a href="<?php echo base_url(); ?>User/admin_logout" id="logout">Logout</a></span></h3>
        <div class="clear"></div>
        <div class="toLeftSearch">
          <?php $option = ['id'=>"myform"];
           echo form_open('Admin/search',$option); ?>
          <span>Search : </span><input type="text" name="query" class="searchUser" placeholder="Search User">
          <a href="javascript: submitform()">Submit</a>
          <?php //echo form_submit(['name'=>'submit','class'=>'btnStyle','value'=>'GO']); ?>
          <?php echo form_close(); ?>
          <?php echo form_error('query'); ?>
        </div>
        <div class="toRight filterBy">
      <?php echo form_open('Admin/date_search'); ?>
          <span>Filter Date:</span>
      <input type="text" name="dateFrom" class="datePick" id="datepicker" placeholder="Date From">
      <input type="text" name="dateTo" class="datePick" id="datepicker2" placeholder="Date To">
      
      <!-- <a href="javascript:;" class="btnStyle">GO</a> -->
      <?php echo form_submit(['name'=>'submit','class'=>'btnStyle','value'=>'GO']); ?>
      <?php echo form_close(); ?>
      <?php echo form_error('dateFrom'); ?>
      <?php echo form_error('dateTo'); ?>
          <div class="clear"></div>
        </div>
        <a href="<?php echo base_url(); ?>Admin/excel_to/" class="btnStyle2 toRight">Export Users</a>
        <div class="clear"></div>
        <div class="clear"></div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
        <?php foreach ($user_list as $data) : ?>
      <tr>
        <td><?php echo $data->u_username; ?></td>
        <td><?php echo $data->u_email; ?></td>
        <td><?php echo $data->u_mobile; ?></td>
        <td><a href="<?php echo base_url('Admin/edit/'); ?><?php echo $data->u_id; ?>">Edit</a></td>
        <td><a href="<?php echo base_url('Admin/delete/'); ?><?php echo $data->u_id; ?>">Delete</a></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
     <?= $this->pagination->create_links(); ?>
      <!-- <a href="javascript:;" class="loadMoreBtn">Load More +</a> -->
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
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/dashboard.js?v=99.5"></script>
</body>
</html>