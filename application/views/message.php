
<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Message</title>
<?php $this->load->view('all_other_file'); ?>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<style>
.jobs-item.with-thumb {
  /* box-shadow: 0px 1px 1px 0px red; */
  margin-bottom: 10px;
  padding: 20px;
  border-radius: 4px;
  transition: 2s;

}
.jobs-item.with-thumb:hover{
  box-shadow: 0px 2px 10px 0px rgba(0,128,128,.8);
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
        <li class="current-page">Inbox</li>
     </ul>
   </div>
   <div class="col-md-9 members_box2">
   <div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
           <li role="presentation"  class="active"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"  aria-expanded="true">Send</a></li>
 				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Received</a></li>
        </ul>
			   <div id="myTabContent" class="tab-content">
           <div role="tabpanel" class="tab-pane fade in active" id="profile" aria-labelledby="profile-tab">

        <?php
          $cookieData = get_cookie('user');
          $count=0;
          if(isset($cookieData)) {
            $this->db->where('from_', $cookieData);
            $query = $this->db->get('inbox');
            foreach ($query->result() as $key) {
              $count++;
              $this->db->where('userid', $key->to_);
              $query1 = $this->db->get('user');
              foreach ($query1->result() as $row) {
                ?>
                <div class="jobs-item with-thumb">
                        <div class="thumb_top">
                   <div class="thumb"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>"><img src="http://127.0.0.1:8000/ci_p/uploads/<?=$row->userid?>.jpg" class="img-responsive" alt=""/></a></div>
                 <div class="jobs_right">
                 <h6 class="title" style="text-transform: capitalization"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>"><?=$row->username?> (<?=$row->userid?>)</h6>
                 <ul class="top-btns" style="margin: 20px;">
                   <li><a href="#" class="fa fa-facebook"></a></li>
                   <li><a href="#" class="fa fa-twitter"></a></li>
                   <li><a href="#" class="fa fa-google-plus"></a></li>
                 </ul>
                 <ul class="login_details1">
                   <li>Message : </li>
                 </ul>
                 <p class="description"><?=$key->message ?>
                 <br><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>" class="read-more">view full profile</a></p>
               </div>
               <div class="clearfix"> </div>
                </div>
             </div>
                <?php
              }
            }
            if($count == 0)
            echo "Message box empty.";
          }
         ?>
			 </div>
       <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab">
         <?php
           $cookieData = get_cookie('user');
           $count=0;
           if(isset($cookieData)) {
             $this->db->where('to_', $cookieData);
             $query = $this->db->get('inbox');
             foreach ($query->result() as $key) {
               $count=1;
               $this->db->where('userid', $key->from_);
               $query1 = $this->db->get('user');
               foreach ($query1->result() as $row) {
                 ?>
                 <div class="jobs-item with-thumb">
                         <div class="thumb_top">
                    <div class="thumb"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>"><img src="http://127.0.0.1:8000/ci_p/uploads/<?=$row->userid?>.jpg" class="img-responsive" alt=""/></a></div>
                  <div class="jobs_right">
                  <h6 class="title" style="text-transform: capitalization"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>"><?=$row->username?> (<?=$row->userid?>)</h6>
                  <ul class="top-btns" style="margin: 20px;">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                  </ul>
                  <ul class="login_details1">
                    <li>Message : </li>
                  </ul>
                  <p class="description"><?=$key->message ?>
                  <br><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>" class="read-more">view full profile</a></p>
                </div>
                <div class="clearfix"> </div>
                 </div>
                 <div class="thumb_bottom">
					   	   <div class="thumb_but"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/message_send/<?=$row->userid ?>" class="photo_view">replies</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
              </div>
                 <?php
               }
             }
             echo "Message box empty.";
           }
          ?>
     </div>
  	</div>
  </div>
   <div class="clearfix"> </div>
  </div>
</div>
</div>
</div>
</div>
<?php $this->load->view("footer"); ?>
</body>
</html>
