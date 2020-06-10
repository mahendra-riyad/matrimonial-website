
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
        <li class="current-page">Message</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-10 login_left">
        <?php
        	$cookieData = get_cookie('user');
          $profile_id = $this->uri->segment(3);
          $info = $this->uri->segment(4);
          if(!isset($profile_id)) {
            redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id');
          } else {

                $this->db->where('userid', $profile_id);
                   $query = $this->db->get("user");
                   foreach ($query->result() as $row) {
                     ?>

	   <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/message_send_submit/<?=$row->userid ?>">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Username <span class="form-required" title="This field is required."></span></label>
	      <input type="text" id="edit-name" disabled name="email" value="<?=$row->username?>" size="60" maxlength="60" class="form-text required" required>
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">To <span class="form-required" title="This field is required."></span></label>
	      <input type="text" id="edit-pass" disabled name="password" value="<?=$row->email?>" maxlength="128" class="form-text required" required>
	    </div><br>
      <div class="form-group">
			     <label for="edit-name">Message <span class="form-required" title="This field is required.">*</span></label>
				 <textarea class="form-control bio" placeholder="" rows="8" name="message" required></textarea>
			  </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Send" class="btn_1 submit">
	    </div>
	   </form>
     <?php
   }
   if(isset($info)) {
     ?><p>Message send successfully.</p><?php
   }
  }
 ?>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<?php $this->load->view("footer"); ?>
</body>
</html>
