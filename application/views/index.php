<!DOCTYPE HTML>
<html>
<head>
<title>Marital | Home</title>
<?php $this->load->view('all_other_file'); ?>
<style>

.parallax {
    /* The image used */
    background-image: url("http://127.0.0.1:8000/ci_p/images/bbb.jpg");

    /* Set a specific height */
    min-height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
.parallax2 {
    /* The image used */
    background-image: url("images/sorav.jpg");

    /* Set a specific height */
    min-height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
</style>
</head>
<body>
  <?php $this->load->view("header");
  $cookieData = get_cookie('user');
  ?>
  <div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Millions of verified Members</h3>
      <?php
        if(isset($cookieData)) {
          $this->db->where('userid', $cookieData);
          $query = $this->db->get("user");
          foreach ($query->result() as $row) {
          ?><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile" class="hvr-shutter-out-horizontal">Hii <?=$row->username?> !</a><?php
          }
        }else {
          ?><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/register" class="hvr-shutter-out-horizontal">Create your Profile</a><?php
       }
      ?>

    </div>
  </div>
  <div class="profile_search">
  	<div class="container wrap_1">
	  <form method="post" action="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_in">
	  	<div class="search_top">
		 <div class="inline-block">
		  <label class="gender_1">I am looking for :</label>
			<div class="age_box1" style="max-width: 100%; display: inline-block;">
				<select name="gender">
					<option value="">* Select Gender</option>
					<option value="female">Bride</option>
					<option value="male">Groom</option>
				</select>
		   </div>
	    </div>
        <div class="inline-block">
		  <label class="gender_1">Located In :</label>
			<div class="age_box1" style="max-width: 100%; display: inline-block;">
				<select name="state">
          <option value="">* Select State </option>
          <option value="rajasthan">Rajasthan</option>
          <option value="bihar">Bihar</option>
          <option value="punjab">Punjab</option>
          <option value="assam">Assam</option>
        </select>
          </div>
        </div>

     </div>
	 <div class="inline-block">
	   <div class="age_box2" style="max-width: 220px;">
	   	<label class="gender_1">Age :</label>
	    <input class="transparent" placeholder="From:" name="age_from" style="width: 34%;" type="text" value="">&nbsp;-&nbsp;<input class="transparent" placeholder="To:" name="age_to" style="width: 34%;" type="text" value="">
	   </div>
	 </div>
		<div class="submit inline-block">
		   <input id="submit-btn" class="hvr-wobble-vertical" type="submit" value="Find Matches">
		</div>
     </form>
    </div>
  </div>
</div>
<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
           <?php
            $count=0;
            foreach ($featured->result() as $row) {
              $count++;
              if($count==7) break;
              ?>
              <li><div class="col_1"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile_by_id/<?=$row->userid ?>">
            <img src="http://127.0.0.1:8000/ci_p/uploads/<?=$row->userid?>.jpg" alt="" class="hover-animation image-zoom-in img-responsive"/>

                   <h3><span class="m_3">Profile ID : <?=$row->userid?></span><br><?php $diff = (date('Y') - date('Y',strtotime($row->age)));
                   echo $diff;?>, <?=$row->religion?>, <?=$row->state?><br><?=$row->marital_status?></h3></a></div>
                </li>
              <?php
            }
          ?>
	    </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: {
		    		portrait: {
		    			changePoint:480,
		    			visibleItems: 1
		    		},
		    		landscape: {
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: {
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });

		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
  <div class="parallax"></div>
  <div class="grid_2">
  	<div class="container">
  		<h2 style="margin-top:30px;">Success Stories</h2>
         	<div class="heart-divider">
  			<span class="grey-line"></span>
  			<i class="fa fa-heart pink-heart"></i>
  			<i class="fa fa-heart grey-heart"></i>
  			<span class="grey-line"></span>
          </div>
          <div class="row_1">
  	     <div class="col-md-8 suceess_story">
  	         <ul>
  			   <li>
  				  	<div class="suceess_story-date">
  						<span class="entry-1">Dec 20, 2015</span>
  					</div>
  					<div class="suceess_story-content-container">
  						<figure class="suceess_story-content-featured-image">
  						   <img width="75" height="75" src="http://127.0.0.1:8000/ci_p/images/7.jpg" class="img-responsive" alt=""/>
  					    </figure>
  						<div class="suceess_story-content-info">
  				        	<h4><a href="#">Lorem & Ipsum</a></h4>
  				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
  				        </div>
  				    </div>
  				</li>
  	            <li>
  				  	<div class="suceess_story-date">
  						<span class="entry-1">Dec 20, 2015</span>
  					</div>
  					<div class="suceess_story-content-container">
  						<figure class="suceess_story-content-featured-image">
  						   <img width="75" height="75" src="images/8.jpg" class="img-responsive" alt=""/>
  					    </figure>
  						<div class="suceess_story-content-info">
  				        	<h4><a href="#">Lorem & Ipsum</a></h4>
  				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
  				        </div>
  				    </div>
  				</li>
  	            <li>
  				  	<div class="suceess_story-date">
  						<span class="entry-1">Dec 20, 2015</span>
  					</div>
  					<div class="suceess_story-content-container">
  						<figure class="suceess_story-content-featured-image">
  						   <img width="75" height="75" src="images/9.jpg" class="img-responsive" alt=""/>
  					    </figure>
  						<div class="suceess_story-content-info">
  				        	<h4><a href="#">Lorem & Ipsum</a></h4>
  				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
  				        </div>
  				    </div>
  				</li>
  	            <li>
  				  	<div class="suceess_story-date">
  						<span class="entry-1">Dec 20, 2015</span>
  					</div>
  					<div class="suceess_story-content-container">
  						<figure class="suceess_story-content-featured-image">
  						   <img width="75" height="75" src="images/10.jpg" class="img-responsive" alt=""/>
  					    </figure>
  						<div class="suceess_story-content-info">
  				        	<h4><a href="#">Lorem & Ipsum</a></h4>
  				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
  				        </div>
  				    </div>
  				</li>
  	            <li>
  				  	<div class="suceess_story-date">
  						<span class="entry-1">Dec 20, 2015</span>
  					</div>
  					<div class="suceess_story-content-container">
  						<figure class="suceess_story-content-featured-image">
  						   <img width="75" height="75" src="images/13.jpg" class="img-responsive" alt=""/>
  					    </figure>
  						<div class="suceess_story-content-info">
  				        	<h4><a href="#">Lorem & Ipsum</a></h4>
  				        	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.<a href="#">More...</a></p>
  				        </div>
  				    </div>
  				</li>
  	        </ul>
  	    </div>
  	    <div class="col-md-4 row_1-right">
  	        </div>
  	        <div class="religion">
                 <div class="religion_1-title">Religion :</div>
  			   <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/religion/hindu" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Hindu</a>
  			    <span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/religion/muslim" target="_blank" class="religion_1" title="Muslim Matrimonial">Muslim</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/religion/christian" target="_blank" class="religion_1" title="Christian Matrimonial">Christian</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/religion/sikh" target="_blank" class="religion_1" title="Sikh Matrimonial">Sikh</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/religion/inter-religion" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Inter Religion</a>
  	        </div>
  	        <div class="religion">
                 <div class="religion_1-title">state :</div>
  			   <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/state/rajasthan" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Rajasthan</a>
  			    <span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/state/bihar" target="_blank" class="religion_1" title="Muslim Matrimonial">Bihar</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/state/punjab" target="_blank" class="religion_1" title="Christian Matrimonial">Punjab</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/state/assam" target="_blank" class="religion_1" title="Sikh Matrimonial">Assam</a>
  			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
  	        </div>
  	        <div class="religion">
                 <div class="religion_1-title">City :</div>
  			   <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/city/jodhpur" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Jodhpur</a>
  			    <span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/city/bikaner" target="_blank" class="religion_1" title="Muslim Matrimonial">Bikaner</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/city/pali" target="_blank" class="religion_1" title="Christian Matrimonial">Pali</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/city/udaipur" target="_blank" class="religion_1" title="Sikh Matrimonial">Udaipur</a>
  			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
  	        </div>
  	        <div class="religion">
                 <div class="religion_1-title">Mother Tongue :</div>
  			   <a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/mother_tongue/urdu" target="_blank" class="religion_1" title="Hindu Matrimonial" style="padding-left:0px !important;">Urdu</a>
  			    <span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/mother_tongue/hindi" target="_blank" class="religion_1" title="Muslim Matrimonial">Hindi</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/mother_tongue/telugu" target="_blank" class="religion_1" title="Christian Matrimonial">Telugu</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/mother_tongue/marwadi" target="_blank" class="religion_1" title="Sikh Matrimonial">Marwadi</a>
  			 	<span>|</span><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_/mother_tongue/oriya" target="_blank" class="religion_1" title="Inter Religion Matrimonial">Oriya</a>
  			 	<span>|</span><a href="#" target="_blank" class="religion_1" title="Inter Religion Matrimonial">View All</a>
  	        </div>
  	     </div>
       </div><div></div></div>
  	     <div class="clearfix"> </div>
  <?php $this->load->view("footer"); ?>
</body>
