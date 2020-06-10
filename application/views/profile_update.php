
<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Register</title>
<?php $this->load->view('all_other_file'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>

<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="http://127.0.0.1:8000/ci_p/"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Update Profile</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
        <?php
        $cookieData = get_cookie('user');
        if(!isset($cookieData)) {
          redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/login');
        } else {

            $this->db->where('userid', $cookieData);
               $query = $this->db->get("user");
               foreach ($query->result() as $row) {
                 ?>
	     <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/profile_data_update"  enctype="multipart/form-data">
	  	    <div class="form-group">
		      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="username" value="<?=$row->username?>" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Age <span class="form-required" title="This field is required.">*</span></label>
          <input type="date" id="edit-name" name="age" value="<?=$row->age?>" size="60" maxlength="60" class="form-text required">
        </div>
        <div class="form-group form-group1">
              <label class="col-sm-7 control-lable" for="sex">Sex : </label>
              <div class="col-sm-5">
                  <div class="radios">
              <label for="radio-01" class="label_radio">
                <?php if($row->sex == 'male') {

                } ?>
                  <input type="radio" checked="" name="sex" value="male"> Male
              </label>
              <label for="radio-02" class="label_radio">
                  <input type="radio"  name="sex" value="female"> Female
              </label>
                </div>
              </div>
              <div class="clearfix"> </div>
           </div>
           <div class="form_but1">
             <label class="col-sm-5 control-lable1" for="sex">Marital Status :</label>
             <div class="col-sm-7 form_radios">
               <div class="select-block1">
                 <select name="marital_status">
                   <option value="<?=$row->marital_status?>" selected=""><?=$row->marital_status?></option>
                     <option value="single">Single</option>
                     <option value="divorced">Divorced</option>
                     <option value="widowed">Widowed</option>
                     <option value="separeted">Separeted</option>
                 </select>
               </div>
             </div>
             <div class="clearfix"> </div>
           </div>
           <div class="form_but1">
               <label class="col-sm-5 control-lable1"> State : </label>
               <div class="col-sm-7 form_radios">
                 <div class="select-block1">
                   <select name="state">
                     <option value="<?=$row->state?>" selected=""><?=$row->state?></option>
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
               <label class="col-sm-5 control-lable1" for="sex">District / City :</label>
               <div class="col-sm-7 form_radios">
                 <div class="select-block1">
                   <select name="city">
                       <option value="<?=$row->city?>" selected=""><?=$row->city?></option>
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
                     <option value="<?=$row->religion?>" selected=""><?=$row->religion?></option>
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
                     <option value="<?=$row->mother_tongue?>" selected=""><?=$row->mother_tongue?></option>
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
		  <div class="form-group">
			     <label for="edit-name">About <span class="form-required" title="This field is required.">*</span></label>
				 <textarea class="form-control bio" placeholder="" rows="3" name="about"><?=$row->about ?>
         </textarea>
			  </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
   <?php }
      } ?>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<?php $this->load->view("footer"); ?>
</body>
</html>
