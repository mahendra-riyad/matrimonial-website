<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Religion</title>
<?php $this->load->view('all_other_file'); ?>
<style>
.col-md-10.profile_left2 {
  padding: 20px;
  transition: 1s;
}
.col-md-10.profile_left2:hover{
  box-shadow: 0px 2px 10px 0px red;
}
</style>
</head>
<body>
<?php $this->load->view('header');
$id = $this->uri->segment(3);
$id1 = $this->uri->segment(4);
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page" style="text-transform: capitalize;"><?=$id?> wise matches</li>
     </ul>
   </div>
<?php

  if(isset($id)) {
    $count = 0;
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where($id, $id1);
    $query = $this->db->get();
    foreach ( $query->result() as $row ) {
      $count =1;
    ?>
    <div class="col-md-10 profile_left2">
 	 <div class="profile_top"><a href="view_profile.html">
       <h2>254879 | Profile Created for self</h2>
 	    <div class="col-sm-3 profile_left-top">
 	    	<img src="http://127.0.0.1:8000/ci_p/images/a5.jpg" class="img-responsive" alt=""/>
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
   </div>
    <?php
  }
  }
  if($count == 0) {
    echo "Data Not Found";
  }
 ?>


 <div class="clearfix"> </div>
</div>
</div>
<?php $this->load->view("footer"); ?>
</body>
</html>
