<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Home</title>
<?php $this->load->view('all_other_file'); ?>
<style>
.profile_top {
  padding: 20px;
  transition: 2s;
  cursor: pointer;
  box-shadow: 0px 1px 1px 1px gray;
}
.profile_top:hover {
  box-shadow: 0px 2px 5px 0px gray;
}
</style>
</head>
<body>
  <?php $this->load->view("header"); ?>
  <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Search By Profile ID</li>
     </ul>
   </div>
   <div class="col-md-9 profile_left">
     <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/search__id">
	  <div class="form_but1">
		<label class="col-sm-5 control-lable1" for="sex">Profile ID : </label>
		<div class="col-sm-7 form_radios">
		  <div class="input-group1">
	        <input type="text" name="userid" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
	        <input type="submit" value="Submit">
	      </div>
	    </div>
		<div class="clearfix"> </div>
	 </div>
    </form>

    <?php
    if(isset($h)) {
      foreach ($h->result() as $row) {
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
        </ul>
       </div>
   </div></div>
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
         </tbody>
     </table>
          <div class="buttons">
              <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>"><div class="vertical">View Profile</div></a>
        </div>
   </div>
   <div class="clearfix"> </div>
 </div>
        <?php
      }
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
</div>
</div>
</div>
  <?php $this->load->view("footer"); ?>
</body>
