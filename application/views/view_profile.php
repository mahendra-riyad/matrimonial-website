
<!DOCTYPE HTML>
<html>
<head>
<title>Marital | View_profile</title>
<?php $this->load->view('all_other_file'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">

  <?php
	$cookieData = get_cookie('user');
  if(!isset($cookieData)) {
    redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/login');
  } else {

  $this->db->where('userid', $cookieData);
     $query = $this->db->get("user");
     foreach ($query->result() as $row) {
       ?>
       <div class="col-md-8 profile_left">
        <h2>Profile Id : <?=$row->userid?></h2>
        <div class="col_3">
              <div class="col-sm-4 row_2">
        <div class="flexslider">
           <ul class="slides">
            <li data-thumb="http://127.0.0.1:8000/ci_p/uploads/<?=$row->userid?>.jpg">
              <img src="http://127.0.0.1:8000/ci_p/uploads/<?=$row->userid?>.jpg" />
            </li>
            <li data-thumb="http://127.0.0.1:8000/ci_p/images/p2.jpg">
              <img src="http://127.0.0.1:8000/ci_p/images/p2.jpg" />
            </li>
            <li data-thumb="http://127.0.0.1:8000/ci_p/images/p3.jpg">
              <img src="http://127.0.0.1:8000/ci_p/images/p3.jpg" />
            </li>
            <li data-thumb="http://127.0.0.1:8000/ci_p/images/p4.jpg">
              <img src="http://127.0.0.1:8000/ci_p/images/p4.jpg" />
            </li>
           </ul>
          </div>
      </div>
      <div class="col-sm-8 row_1">
        <table class="table_working_hours">
              <tbody>
                <tr class="opened_1">
              <td class="day_label">Age / Height :</td>
              <td class="day_value"><?php $diff = (date('Y') - date('Y',strtotime($row->age)));
              echo $diff;?> Years</td>
            </tr>
              <tr class="opened">
              <td class="day_label">User-Name :</td>
              <td class="day_value"><?=$row->username?></td>
            </tr>
              <tr class="opened">
              <td class="day_label">Email Address :</td>
              <td class="day_value"><?=$row->email?></td>
            </tr>
              <tr class="opened">
              <td class="day_label">Religion :</td>
              <td class="day_value"><?=$row->religion?></td>
            </tr>
              <tr class="opened">
              <td class="day_label">Marital Status :</td>
              <td class="day_value"><?=$row->marital_status?></td>
            </tr>
              <tr class="opened">
              <td class="day_label">Gender :</td>
              <td class="day_value"><?=$row->sex?></td>
            </tr>
              <tr class="opened">
              <td class="day_label">Location :</td>
              <td class="day_value"><?=$row->state?>, <?=$row->city?></td>
            </tr>
              <tr class="closed">
              <td class="day_label">Mother Tongue :</td>
              <td class="day_value closed"><span><?=$row->mother_tongue?></span></td>
            </tr>
            <tr class="closed">
              <td></td><td class="day_value closed"></td>
            </tr>
            </tbody>
        </table>
      </div>
      <div class="clearfix"> </div>
      <p style="letter-spacing: 1px; word-spacing: 2px; padding: 20px; border : 1px solid rgba(0,128,128,.6); border-radius: 4px; margin-top: 20px; margin-bottom: 20px;">
        <span class="day_label" style="opacity:.7;">About : </span><br>
        <?=$row->about ?></p>
        <div class="vertical" ><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/profile_update" style="color: white; padding: 28px;">update</a></div>
        <div class="vertical" ><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/change_password" style="width=100%; color: white;">change password</a></div>

    </div>
       <?php
     }
    }
   ?>
   </div>
   </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
		   <form>
			  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
			  <input type="submit" value="Go">
		   </form>
        </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>
<!-- FlexSlider -->
<script defer src="http://127.0.0.1:8000/ci_p/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="http://127.0.0.1:8000/ci_p/css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</body>
</html>
