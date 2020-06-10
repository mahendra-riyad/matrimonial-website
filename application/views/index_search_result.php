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
    <?php
   foreach ( $h->result() as $row ) {
     echo $row->username;
     echo "string";
    /*  ?>
      <div class="profile_top"><a href="">
        <h2>254879</h2>
        <div class="col-sm-3 profile_left-top">
          <img src="http://127.0.0.1:8000/ci_p/images/p13.jpg" class="img-responsive" alt=""/>
        </div>
        <div class="col-sm-3">
          <ul class="login_details1">
         <li>Last Login : 5 days ago</li>
         <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
        </ul>
        </div>
        <div class="col-sm-6">
          <table class="table_working_hours">
              <tbody>
                <tr class="opened_1">
              <td class="day_label1">Age / Height :</td>
              <td class="day_value">28, 5ft 5in / 163cm</td>
            </tr>
              <tr class="opened">
              <td class="day_label1">Last Login :</td>
              <td class="day_value">4 hours ago</td>
            </tr>
              <tr class="opened">
              <td class="day_label1">Religion :</td>
              <td class="day_value">Sikh</td>
            </tr>
              <tr class="opened">
              <td class="day_label1">Marital Status :</td>
              <td class="day_value">Single</td>
            </tr>
              <tr class="opened">
              <td class="day_label1">Location :</td>
              <td class="day_value">India</td>
            </tr>
              <tr class="closed">
              <td class="day_label1">Profile Created by :</td>
              <td class="day_value closed"><span>Self</span></td>
            </tr>
              <tr class="closed">
              <td class="day_label1">Education :</td>
              <td class="day_value closed"><span>Engineering</span></td>
            </tr>
            </tbody>
         </table>
         <div class="buttons">
           <div class="vertical">Send Mail</div>
           <div class="vertical">Shortlisted</div>
           <div class="vertical">Send Interest</div>
         </div>
        </div>
        <div class="clearfix"> </div>
      </a></div>
    <?php */
    }
?>

  </div>


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
