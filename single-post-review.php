<?php
/*----------Client Login-------------*/
error_reporting(1);
    $u=$_SESSION['username'];
    if($u=='')
    {
                
                $u=$_POST['username'];
                $p=$_POST['password'];
                $se="select * from registration where User_Name='$u' and Password='$p'";
                $cn=mysqli_connect('localhost','root','','vi');
                $a=mysqli_query($cn,$se);
                $r=mysqli_fetch_row($a);
                if(isset($_POST['login'])){
                    if ($r[0]>1 ) {
                        session_start();
                            $_SESSION['username']=$r[1];
                            
                    }
                    else{
                        session_start();
                        $_SESSION['pr']="password incorrect";
                    }

                }
    }
    else

        {
            session_start();
            $username=$_SESSION['username'];
        }
?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AutoStars - Responsive Car Dealership Template</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="colors/color1.css" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="js/modernizr.js"></script><!-- Modernizr -->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Start Site Header -->
	<div class="site-header-wrapper">
        <header class="site-header">
            <div class="container sp-cont">
                <div class="site-logo">
                    <h1><a href="index.php"><img src="images/logo.png" alt="Logo"></a></h1>
                    <span class="site-tagline">Buying or Selling,<br>just got easier!</span>
                </div>
                <div class="header-right">
                    <div class="user-login-panel">
                        <a href="#" class="user-login-btn" data-toggle="modal" data-target="#loginModal"><i class="icon-profile"></i></a>
                    </div>
                    <div class="topnav dd-menu">
                        <ul class="top-navigation sf-menu">
                            <li><a href="results-list.php">Buy</a></li>
                            <li><a href="add-listing-pricing.php">Sell</a></li>
                             <li><?php   
                                if($_SESSION['username']!=""){
                                    echo "welcome ";
                                    session_start();
                                    $u=$_SESSION['username'];
                                    echo $u;
                                }
                            ?></li>
                            <?php  
                                if($_SESSION['username']==""){
                            ?>
                            <li></li><?php echo $pr; ?></li>
                            <li><a href="joinus.php">Join</a></li>
                        <?php } 
                        else{
                            ?>
                            <li><a href="index.php">Logout</a></li>
                        <?php } ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Site Header -->
        <div class="navbar">
            <div class="container sp-cont">
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                    <span><i class="fa fa-phone"></i> Call us <strong>1800 011 2211</strong> <em>or</em> search</span>
                </div>
                    <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="javascript:void(0)">Home</a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0)">Home versions</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Default</a></li>
                                        <li><a href="index2.php">Version 2</a></li>
                                        <li><a href="index3.php">Version 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Slider versions</a>
                            		<ul class="dropdown">
                                		<li><a href="index.php">Default(Flexslider)</a></li>
                                		<li><a href="index-revslider.php">Slider Revolution <span class="label label-danger">New</span></a></li>
                                        <li><a href="hero-carousel.php">Full Width Carousel</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Search Form Positions</a>
                            		<ul class="dropdown">
                                		<li><a href="index.php">Default(With Main Menu)</a></li>
                                        <li><a href="search-below-slider.php">Below Slider</a></li>
                                        <li><a href="search-over-slider.php">Over Slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Header versions</a>
                            		<ul class="dropdown">
                                		<li><a href="index.php">Default</a>
                                        <li><a href="header-v2.php">Version 2</a></li>
                                        <li><a href="header-v3.php">Version 3</a></li>
                                        <li><a href="header-v4.php">Version 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="joinus.php">Signup</a></li>
                                <li><a href="404.php">404 Error Page</a></li>
                                <li><a href="add-listing-pricing.php">Pricing</a></li>
                                <li><a href="shortcodes.php">Shortcodes</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="dealers-search.php">Dealer Search</a></li>
                                <li><a href="dealers-search-results.php">Dealer Search Results</a></li>
                            </ul>
                        </li>
                        <li class="megamenu"><a href="index.php">Mega Menu</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="mm-col col-md-2">
                                                <ul class="sub-menu">
                                                    <li><a href="results-list.php">Brand new cars</a></li>
                                                    <li><a href="results-list.php">Used cars</a></li>
                                                    <li><a href="results-list.php">Latest reviews</a></li>
                                                    <li><a href="blog.php">Auto news</a></li>
                                                    <li><a href="about.php">Car insurance</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Browse by body type</span>
                                                <ul class="body-type-widget">
                                                    <li> <a href="results-list.php"><img src="images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
                                                    <li> <a href="results-list.php"><img src="images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
                                                </ul>
                                                <a href="results-list.php" class="basic-link">view all</a>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Browse by make</span>
                                                <ul class="make-widget">
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/75x75&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                </ul>
                                                <a href="results-list.php" class="basic-link">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Listing</a>
                            <ul class="dropdown">
                                <li><a href="results-list.php">List View</a></li>
                                <li><a href="results-grid.php">Grid View</a></li>
                                <li><a href="vehicle-details.php">Vehicle Details</a></li>
                                <li><a href="add-listing-form.php">Add new listing</a></li>
                                <li><a href="vehicle-comparision.php">Vehicle Comparision</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Users</a>
                            <ul class="dropdown">
                                <li><a href="dealer-prosite.php">Dealer Prosite</a></li>
                                <li><a href="user-dashboard.php">User Dashboard</a></li>
                                <li><a href="user-dashboard-saved-searches.php">Manage Saved Searches</a></li>
                                <li><a href="user-dashboard-saved-cars.php">Manage Saved Cars</a></li>
                                <li><a href="user-dashboard-manage-ads.php">Manage Ads</a></li>
                                <li><a href="user-dashboard-profile.php">User Profile</a></li>
                                <li><a href="user-dashboard-settings.php">User Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.php">Blog List</a></li>
                                <li><a href="blog-masonry.php">Blog Masonry</a></li>
                                <li><a href="single-post.php">Single Post</a></li>
                                <li><a href="single-post-review.php">Single Review Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav> 
                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form>
                            <h3>Find a Car with our Quick Search</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Postcode</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Type</label>
                                            <select name="Body Type" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Wagon</option>
                                                <option>Minivan</option>
                                                <option>Coupe</option>
                                                <option>Crossover</option>
                                                <option>Van</option>
                                                <option>SUV</option>
                                                <option>Minicar</option>
                                                <option>Sedan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Make</label>
                                            <select name="Make" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Jaguar</option>
                                                <option>BMW</option>
                                                <option>Mercedes</option>
                                                <option>Porsche</option>
                                                <option>Nissan</option>
                                                <option>Mazda</option>
                                                <option>Acura</option>
                                                <option>Audi</option>
                                                <option>Bugatti</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Model</label>
                                            <select name="Model" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>GTX</option>
                                                <option>GTR</option>
                                                <option>GTS</option>
                                                <option>RLX</option>
                                                <option>M6</option>
                                                <option>S Class</option>
                                                <option>C Class</option>
                                                <option>B Class</option>
                                                <option>A Class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Price Min</label>
                                            <select name="Min Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Price Max</label>
                                            <select name="Max Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Brand new only
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Certified
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Year</label>
                                            <select name="Min Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2018</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Year</label>
                                            <select name="Max Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Mileage</label>
                                            <select name="Min Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Mileage</label>
                                            <select name="Max Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Transmission</label>
                                            <select name="Transmission" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>5 Speed Manual</option>
                                                <option>5 Speed Automatic</option>
                                                <option>6 Speed Manual</option>
                                                <option>6 Speed Automatic</option>
                                                <option>7 Speed Manual</option>
                                                <option>7 Speed Automatic</option>
                                                <option>8 Speed Manual</option>
                                                <option>8 Speed Automatic</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Color</label>
                                            <select name="Body Color" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Red</option>
                                                <option>Black</option>
                                                <option>White</option>
                                                <option>Yellow</option>
                                                <option>Brown</option>
                                                <option>Grey</option>
                                                <option>Silver</option>
                                                <option>Gold</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-block btn-info btn-lg" value="Find my vehicle now">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   	</div>
    <!-- Start Page header -->
    <div class="page-header parallax" style="background-image:url(http://placehold.it/1200x300&amp;text=IMAGE+PLACEHOLDER);">
    	<div class="container">
        	<h1 class="page-title">Blog</h1>
       	</div>
    </div>
    <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li class="active">Single Post</li>
                    </ol>
            	</div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                	<ul class="utility-icons social-icons social-icons-colored">
                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    	<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
      	</div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
      		<div class="container">
        		<div class="row">
          			<div class="col-md-9 single-post">
            			<header class="single-post-header clearfix">
                            <div class="post-actions">
                                <div class="post-date">November 27, 2018</div>
                                <div class="comment-count"><a href="single-post.php"><i class="icon-dialogue-text"></i> 20</a></div>
                            </div>
              				<h2 class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
            			</header>
            			<article class="post-content">
              				<div class="featured-image"> <img src="http://placehold.it/800x250&amp;text=IMAGE+PLACEHOLDER" alt=""> </div>
              				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>
              				<h3>Vivamus convallis</h3>
              				<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>
              				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
              				<blockquote>
                				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. </p>
              				</blockquote>
                            <!-- Review Block -->
                            <div class="detailed-review-block">
                            	<div class="final-review">
                                    <div class="post-review-block">
                                        <div class="review-status">
                                            <strong>4.2</strong>
                                            <span>Out of 5</span>
                                        </div>
                                        <div class="star-rating-container">
                                        	<div class="star-rating" style="width:85%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="points-review">
                                	<div class="row">
                                    	<div class="col-md-6">
                                        	<div class="review-point">
                                            	<strong>Exterior Style / Design</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:80%"></div>
                                                </div>
                                            </div>
                                        	<div class="review-point">
                                            	<strong>Interior &amp; Space</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:70%"></div>
                                                </div>
                                            </div>
                                        	<div class="review-point">
                                            	<strong>Equipment &amp; Features</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:50%"></div>
                                                </div>
                                            </div>
                                        	<div class="review-point">
                                            	<strong>Luxury Features</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    	<div class="col-md-6">
                                        	<div class="review-point">
                                            	<strong>Engine &amp; Performance</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:80%"></div>
                                                </div>
                                            </div>
                                        	<div class="review-point">
                                            	<strong>Ride &amp; Ease of Driving</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:70%"></div>
                                                </div>
                                            </div>
                                        	<div class="review-point">
                                            	<strong>Handling &amp; Braking</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:90%"></div>
                                                </div>
                                            </div>
                                        	<div class="review-point">
                                            	<strong>Price &amp; Fuel Efficiency</strong>
                                                <div class="star-rating-container">
                                                    <div class="star-rating" style="width:60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
              				<div class="post-meta"> <i class="fa fa-tags"></i> <a href="#">Financial</a>, <a href="#">Advice</a>, <a href="#">Recommendations</a>, <a href="#">Trials</a>, <a href="#">Car</a>, <a href="#">Autostars</a> </div>
                            <!-- Pagination -->
                            <ul class="pager">
                                <li class="pull-left"><a href="#">&larr; Prev Post</a></li>
                                <li class="pull-right"><a href="#">Next Post &rarr;</a></li>
                            </ul>
                            <!-- About Author -->
                            <section class="about-author">
                                <div class="img-thumbnail"> <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                                <div class="post-author-content">
                                    <h3>John Doe <span class="label label-success">Author</span></h3>
                               		<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                </div>
                            </section>
            			</article>
            			<section class="post-comments" id="comments">
              				<h3><i class="fa fa-comment"></i> Comments (4)</h3>
              				<ol class="comments">
                				<li>
                  					<div class="post-comment-block">
                    					<div class="img-thumbnail"> <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                                        <div class="post-comment-content">
                                            <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                            <h5>John Doe says</h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <p>Curabitur nec nulla lectus, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                      	</div>
                  					</div>
                				</li>
                				<li>
                                    <div class="post-comment-block">
                                        <div class="img-thumbnail"> <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                                        <div class="post-comment-content">
                                            <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                            <h5>John Doe says</h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <p>Curabitur nec nulla lectus.</p>
                                      	</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="post-comment-block">
                                                <div class="img-thumbnail"> <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                                                <div class="post-comment-content">
                                                    <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                                    <h5>John Doe says</h5>
                                                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-comment-block">
                                                <div class="img-thumbnail"> <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                                                <div class="post-comment-content">
                                                    <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                                    <h5>John Doe says</h5>
                                                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                                    <p>Curabitur nec nulla lectus, non hendrerit lorem.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="post-comment-block">
                                        <div class="img-thumbnail"> <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="avatar"> </div>
                                        <div class="post-comment-content">
                                            <a href="#" class="btn btn-default btn-xs pull-right">Reply</a>
                                            <h5>John Doe says</h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo.</p>
                                      	</div>
                                    </div>
                                </li>
                            </ol>
                        </section>
                        <section class="post-comment-form">
                            <h3><i class="fa fa-share"></i> Post a comment</h3>
                            <form>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control input-lg" placeholder="Your name">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="email" class="form-control input-lg" placeholder="Your email">
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <input type="url" class="form-control input-lg" placeholder="Website (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        	<textarea cols="8" rows="4" class="form-control input-lg" placeholder="Your comment"></textarea>
                                    	</div>
                                	</div>
                            	</div>
                            	<div class="row">
                                	<div class="form-group">
                                    	<div class="col-md-12">
                                        	<button type="submit" class="btn btn-primary btn-lg">Submit your comment</button>
                                    	</div>
                                	</div>
                            	</div>
                        	</form>
                    	</section>
          			</div>
          			<!-- Start Sidebar -->
          			<div class="col-md-3 sidebar">
                        <div class="widget sidebar-widget widget_recent_posts">
                            <h3 class="widgettitle">Recent Posts</h3>
                            <ul>
                            	<li>
                                	<a href="single-post.php"><img src="http://placehold.it/200x200&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a>
                                    <h5><a href="single-post.php">Lorem ipsum dolor sit amet</a></h5>
                                    <div class="post-actions"><div class="post-date">October 30, 2018</div></div>
                                </li>
                            	<li>
                                	<a href="single-post.php"><img src="http://placehold.it/200x200&amp;text=IMAGE+PLACEHOLDER" alt="" class="img-thumbnail"></a>
                                    <h5><a href="single-post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h5>
                                    <div class="post-actions"><div class="post-date">October 30, 2018</div></div>
                                </li>
                            </ul>
                       	</div>
                        <div class="widget sidebar-widget widget_tag_cloud">
                            <h3 class="widgettitle">Post Tags</h3>
                          	<div class="tag-cloud">
                            	<a href="#">Financial</a>
                            	<a href="#">Trial run</a>
                            	<a href="#">New Launch</a>
                            	<a href="#">Advice</a>
                            	<a href="#">Runners</a>
                            	<a href="#">Uncategorized</a>
                          	</div>
                        </div>
                        <div class="widget sidebar-widget widget_categories">
                            <h3 class="widgettitle">Post Categories</h3>
                            <ul>
                                <li><a href="#">Financial</a> (10)</li>
                                <li><a href="#">Trial run</a> (12)</li>
                                <li><a href="#">New Launch</a> (34)</li>
                                <li><a href="#">Advice</a> (14)</li>
                                <li><a href="#">Uncategorized</a> (114)</li>
                            </ul>
                        </div>
            		</div>
          		</div>
        	</div>
      	</div>
 	</div>
    <!-- End Body Content -->
    <!-- Start site footer -->
    <footer class="site-footer">
       	<div class="site-footer-top">
       		<div class="container">
                <div class="row">
                	<div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                    	<h4 class="widgettitle">Sign up for our newsletter</h4>
                        <form>
                        	<input type="text" class="form-control" placeholder="Name">
                        	<input type="email" class="form-control" placeholder="Email">
                        	<input type="submit" class="btn btn-primary btn-lg" value="Sign up now">
                        </form>
                    </div>
                	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                    	<h4 class="widgettitle">Blogroll</h4>
                        <ul>
                        	<li><a href="blog.php">Car News</a></li>
                        	<li><a href="blog-masonry.php">Car Reviews</a></li>
                        	<li><a href="about.php">Car Insurance</a></li>
                        	<li><a href="about-html">Bodyshop</a></li>
                        </ul>
                    </div>
                	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                    	<h4 class="widgettitle">Help &amp; Support</h4>
                        <ul>
                        	<li><a href="results-list.php">Buying a car</a></li>
                        	<li><a href="joinus.php">Selling a car</a></li>
                        	<li><a href="about.php">Online safety</a></li>
                        	<li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>
                	<div class="col-md-5 col-sm-6 footer_widget widget text_widget">
                    	<h4 class="widgettitle">About AutoStars</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
     	</div>
        <div class="site-footer-bottom">
        	<div class="container">
                <div class="row">
                	<div class="col-md-6 col-sm-6 copyrights-left">
                    	<p>&copy; 2018 AutoStars. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-6 copyrights-right">
                        <ul class="social-icons social-icons-colored pull-right">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="digg"><a href="#"><i class="fa fa-digg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End site footer -->
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
</div>
<!-- LOGIN POPUP -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login to your account</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
           	</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="vendor/password-checker.js"></script> <!-- Password Checker -->
<script src="js/bootstrap.js"></script> <!-- UI -->
<script src="js/init.js"></script> <!-- All Scripts -->
<script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
</body>
</html>