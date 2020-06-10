
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
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/login_data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Email id <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
	    </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
	    </div>
      <?php
      $id = $this->uri->segment(3);
        if(isset($id)) {
          if($id == 'password') {
            echo "<p> Password Unmatch.</p>";
          } else if($id == 'email') {
            echo "<p>Email unmatch.</p>";
          }
        }
      ?>
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
