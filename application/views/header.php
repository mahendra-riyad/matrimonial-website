
<?php
  	$cookieData = get_cookie('user');
?>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>

       <?php
       if(isset($cookieData)) {
      ?>
      <li class="green">
        <a href="#" class="icon-home"></a>
        <ul>
          <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile">Profile</a></li>
            <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/logout">Logout</a></li>
        </ul>
      </li>
    <?php   } else {
         ?>
         <li class="green">
           <a href="#" class="icon-home"></a>
           <ul>
             <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/login">Login</a></li>
               <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/register">Register</a></li>
           </ul>
         </li>
    <?php }        ?>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="http://127.0.0.1:8000/ci_p/"><img src="http://127.0.0.1:8000/ci_p/images/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div>
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="http://127.0.0.1:8000/ci_p/">Home</a></li>
		            <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/about">About</a></li>
        <?php
          if(isset($cookieData)) {
           ?>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/new_matches">New Matches</a></li>
		                <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/shortlisted_profile_show">Shortlisted Profile</a></li>
		              </ul>
		            </li>
        <?php } ?>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/regular_search">Regular Search</a></li>
		                <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/search_id">Search By Profile ID</a></li>
		                <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/faq">Faq</a></li>
		              </ul>
		            </li>
                <?php
                if(isset($cookieData)) {
               ?>
		           <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/message">Messages</a></li>
              <?php }?>
		            <li class="last"><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/contacts">Contacts</a></li>
                <?php
                if(isset($cookieData)) {
               ?>
                <li><a href="http://127.0.0.1:8000/ci_p/index.php/Welcome/logout">Logout</a></li>
              <?php }?>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
