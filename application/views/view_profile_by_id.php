<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Search</title>
<?php $this->load->view('all_other_file'); ?>
</head>
<body>
  <?php $this->load->view("header"); ?>
  <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="http://127.0.0.1:8000/ci_p/"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profile</li>
      </ul>
   </div>
  <div class="col-md-9 profile_left1">
  	<h1>Resulted Profile</h1>
    <div class="profile">
   <?php
   $profile_id = $this->uri->segment(3);
   if(!isset($profile_id)) {
     redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/');
   } else {

   $this->db->where('userid', $profile_id);
      $query = $this->db->get("user");
      foreach ($query->result() as $row) {
        ?>
        <div class="profile_top">
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
       <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>About : </li>
			 <li><p>"<?=$row->about ?>"</p></li>
		  </ul>
	    </div>
       <div class="col-sm-5 row_1">
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
             </tbody>
         </table>
         <?php
         	$cookieData = get_cookie('user');
            if(!isset($cookieData)) {
              ?>
              <ul class="login_details">
                 <li>Already a member? <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/login">Login Now</a></li>
                 <li>If not a member? <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/register">Register Now</a></li>
              </ul>
              <?php
            } else {
              ?>
              <div class="buttons">
                  <div class="vertical">Send Mail</div>
                  <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/shortlisted/<?=$row->userid ?>"><div class="vertical">Shortlisted</div></a>
                  <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/message_send/<?=$row->userid ?>"><div class="vertical">Send Message</div></a>
            </div>
              <?php
            }
          ?>


       </div>
       <div class="clearfix"> </div>
     </div>
        <?php
      }
     }
    ?>
  </div></div></div>
  <div class="col-md-3 match_right">
   <section class="slider">
	 <h3>Happy Marriage</h3>
	 <div class="flexslider">
		<ul class="slides">
		  <li>
			<img src="http://127.0.0.1:8000/ci_p/images/s2.jpg" alt=""/>
			<h4>Lorem & Ipsum</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
		  <li>
			<img src="http://127.0.0.1:8000/ci_p/images/s1.jpg" alt=""/>
			<h4>Lorem & Ipsum</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
		  <li>
			<img src="http://127.0.0.1:8000/ci_p/images/s3.jpg" alt=""/>
			<h4>Lorem & Ipsum</h4>
			<p>It is a long established fact that a reader will be distracted by the readable</p>
		  </li>
	    </ul>
	  </div>
   </section>
 </div>

   <!-- FlexSlider -->
<link href="http://127.0.0.1:8000/ci_p/css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="http://127.0.0.1:8000/ci_p/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</div>
</div></div>
<?php $this->load->view("footer"); ?>
</body>
