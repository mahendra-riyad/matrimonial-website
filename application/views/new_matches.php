<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Search</title>
<?php $this->load->view('all_other_file'); ?>
</head>
<style>
.profile_top {
  padding: 20px;
  transition: 2s;
  cursor: pointer;
}
.profile_top:hover {
    box-shadow: 0px 1px 1px 0px gray;
}
</style>
<body>
  <?php $this->load->view("header"); ?>
  <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
      <ul>
        <a href="http://127.0.0.1:8000/ci_p/"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">New Matches</li>
      </ul>
   </div>
  <div class="col-md-12 profile_left1">
    <div class="profile">
   <?php
      $query = $this->db->get("user");
      $count=0;
      foreach ($query->result() as $row) {
        $count++;
        if($count == 21) break;
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
    ?>
  </div></div></div>
</div>

</div></div>
 <div class="clearfix"> </div>
</div></div></div></div>
<?php $this->load->view("footer"); ?>
</body>
