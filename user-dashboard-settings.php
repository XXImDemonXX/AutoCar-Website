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
                    <div class="user-login-panel logged-in-user">
                        <a href="#" class="user-login-btn" id="userdropdown" data-toggle="dropdown">
                            <img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt="">
                            <span class="user-informa">
                                <span class="meta-data">Welcome</span>
                                <span class="user-name">Username dss</span>
                            </span>
                            <span class="user-dd-dropper"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="userdropdown">
                            <li><a href="user-dashboard.php">Dashboard</a></li>
                            <li><a href="user-dashboard-saved-searches.php">Saved Searches</a></li>
  s</a></li>
                            <li><a href="#">Manage Ads</a></li>
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
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
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full dashboard-pages">
        	<div class="container">
            	<div class="dashboard-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <!-- SIDEBAR -->
                            <div class="users-sidebar tbssticky">
                            	<a href="user-dashboard.php" class="btn btn-block btn-primary add-listing-btn">New Ad listing</a>
                                <ul class="list-group">
                                    <li class="list-group-item"> <span class="badge">5</span> <a href="user-dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
                                    <li class="list-group-item"> <span class="badge">5</span> <a href="user-dashboard-saved-searches.php"><i class="fa fa-folder-o"></i> Saved Searches</a></li>
                                    <li class="list-group-item"> <span class="badge">12</span> <a href="user-dashboard-saved-cars.php"><i class="fa fa-star-o"></i> Saved Cars</a></li>
                                    <li class="list-group-item"> <a href="add-listing-form.php"><i class="fa fa-plus-square-o"></i> Create new Ad</a></li>
                                    <li class="list-group-item"> <span class="badge">2</span> <a href="user-dashboard-manage-ads.php"><i class="fa fa-edit"></i> Manage Ads</a></li>
                                    <li class="list-group-item"> <a href="user-dashboard-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
                                    <li class="list-group-item active"> <a href="user-dashboard-settings.php"><i class="fa fa-cog"></i> Account Settings</a></li>
                                    <li class="list-group-item"> <a href="javascript:void(0)"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8">
                        	<h2>My Alerts Settings</h2>
                            <div class="dashboard-block">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Saved Car Alerts</h3>
                                            </div>
                                            <div class="panel-body">
                                              	<label class="checkbox-inline"><input type="checkbox" checked>Send me notification email when price changes or a special offer is available</label>
                                                <div class="spacer-10"></div>
                                              	<label class="checkbox-inline"><input type="checkbox" checked>Send me notification email when the car has been sold</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Saved Searches Alerts</h3>
                                            </div>
                                            <div class="panel-body">
                                              	<label class="checkbox-inline"><input type="checkbox" checked>Send me notification email when a vehicle gets available for my search</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Subscribe to our Newsletter</h3>
                                            </div>
                                            <div class="panel-body">
                                              	<label class="checkbox-inline"><input type="checkbox" checked>Send me latest news and offers Newsletter</label>
                                          		<p class="small">We send our latest offers and news every week to our verified users. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         	</div>
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