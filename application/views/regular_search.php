<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Search</title>
<?php $this->load->view('all_other_file'); ?>

<style>
.profile_top {
  padding: 20px;
  transition: 2s;
  cursor: pointer;
}
.profile_top:hover {
    box-shadow: 0px 1px 1px 1px gray;
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
          <li class="current-page">Regular Search</li>
       </ul>
     </div>
  <div class="col-md-9 search_left">
    <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/regular_search_submit">
     <div class="form_but1">
  	<label class="col-sm-5 control-lable1" for="sex">Gender : </label>
  	<div class="col-sm-7 form_radios">
  		<input type="radio" class="radio_1" value="male" name="gender" /> Male &nbsp;&nbsp;
  		<input type="radio" class="radio_1" value="female" checked="checked" name="gender" /> Female
  	</div>
  	<div class="clearfix"> </div>
    </div>
    <div class="form_but1">
      <label class="col-sm-5 control-lable1" for="sex">State : </label>
      <div class="col-sm-7 form_radios">
        <div class="select-block1">
          <select name="state">
            <option value=""> State </option>
            <option value="rajasthan">Rajasthan</option>
            <option value="bihar">Bihar</option>
            <option value="punjab">Punjab</option>
            <option value="assam">Assam</option>
          </select>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="form_but1">
      <label class="col-sm-5 control-lable1" for="sex">District / City : </label>
      <div class="col-sm-7 form_radios">
        <div class="select-block1">
          <select name="city">
            <option value="">District / City </option>
            <option value="jodhpur">Jodhpur</option>
            <option value="bikaner">Bikaner</option>
            <option value="pali">Pali</option>
            <option value="udaipur">Udaipur</option>
          </select>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="form_but1">
      <label class="col-sm-5 control-lable1" for="sex">Religion : </label>
      <div class="col-sm-7 form_radios">
        <div class="select-block1">
          <select name="religion">
            <option value="hindu">Hindu</option>
            <option value="sikh">Sikh</option>
            <option value="">Jain-All</option>
            <option value="jain-digambar">Jain-Digambar</option>
            <option value="jain-others">Jain-Others</option>
            <option value="jewish">Jewish</option>
            <option value="inter-religion">Inter-Religion</option>
          </select>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="form_but1">
      <label class="col-sm-5 control-lable1" for="sex">Mother Tongue : </label>
      <div class="col-sm-7 form_radios">
        <div class="select-block1">
          <select name="mother_tongue">
            <option value="english">English</option>
            <option value="french">French</option>
            <option value="telugu">Telugu</option>
            <option value="bengali">Bengali</option>
            <option value="bihari">Bihari</option>
            <option value="hindi">Hindi</option>
            <option value="koshali">Koshali</option>
            <option value="khasi">Khasi</option>
            <option value="tamil">Tamil</option>
            <option value="urdu">Urdu</option>
            <option value="manipuri">Manipuri</option>
          </select>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="form_but1">
  	<label class="col-sm-5 control-lable1" for="sex">Age : </label>
  	<div class="col-sm-7 form_radios">
  	  <div class="col-sm-5 input-group1">
          <input class="form-control has-dark-background" name="age_from" id="slider-name" placeholder="28" type="text" required="">
        </div>
        <div class="col-sm-5 input-group1">
          <input class="form-control has-dark-background" name="age_to" id="slider-name" placeholder="40" type="text" required="">
        </div>
        <div class="clearfix"> </div>
  	</div>
  	<div class="clearfix"> </div>
    </div>
    <div class="form-actions">
      <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit" style="margin-right: 15px; margin-bottom: 20px; float:right; width: 40%;">
    </div>
   </form>
 </div>
  <div class="col-md-3 match_right">
  	<div class="profile_search1">
  	   <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/search__id">
  		  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
  		  <input type="submit" value="Go">
  	   </form>
     </div>
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
 <div class="breadcrumb1">
   <ul>
     <a href="http://127.0.0.1:8000/ci_p/"><i class="fa fa-home home_1"></i></a>
     <span class="divider">&nbsp;|&nbsp;</span>
     <li class="current-page">Resulted Profile</li>
   </ul>
</div>
  <div class="col-md-12 profile_left1">
     <div class="profile">
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
   </div>
   </div>
</div>
</div>

  <?php $this->load->view("footer"); ?>
  </body>
