
<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Login</title>
<?php $this->load->view("all_other_file"); ?>
</head>
<body>
<?php $this->load->view("header"); ?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="http://127.0.0.1:8000/ci_p/"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Change Password</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/change_password_update">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Current Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-name" name="cp" value="" size="60" maxlength="60" class="form-text required">
        <?php
          $id = $this->uri->segment(3);
          if(isset($id)) {
            ?><label for="edit-name" style="color: red; font-size: 12px;">current password not match</label>
    	      <?php
          }
        ?>
      </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">New Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="np" size="60" maxlength="128" class="form-text required">
	    </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Update" class="btn_1 submit">
	    </div>
	   </form>
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
