<?php error_reporting(0); ?>
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
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integerity="sha384-fnn0CqbTlWIljaLyTjo7mOUStjsKCpOpQbqyi7RrhN7udi9RwhKkMHpvLbhG9Sr" crossorigin="anonymouse">
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
<body class="home">
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
                            <?php
                            session_start();
                            $user=$_SESSION['User'];?>
                            <li><a href="add-listing-form.php?user=<?php echo $user; ?>">Sell</a></li>
                            
                            <li><?php
                            session_start();
                            $user=$_SESSION['User'];
                            echo $user;
                            $_SESSION['User']=$user;
                            ?></li>
                            <li>
                                <?php if($user!=""){?>
                                    <a href="index.php">Log out</a>
                                    <?php   $_SESSION['User']="";

                                 }
                                 else{?>
                                    <a href="login.php">log in</a>
                                 <?php }?>
                            </li>
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
                    <span><i class="fa fa-phone"></i> Call us <strong>8000 319651</strong> <em>or</em> search</span>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="javascript:void(0)">Home</a>
                            
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="joinus.php">Signup</a></li>
                                <li><a href="404.php">404 Error Page</a></li>
                                
                                <li><a href="shortcodes.php">Shortcodes</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                
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
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                </ul>
                                                <a href="results-list.php" class="basic-link">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
                                                <option>2019</option>
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
                                                <option>2019</option>
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
                                                <option>Blue</option>
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
    <div class="hero-area">
        <!-- Start Hero Slider -->
        <div class="hero-slider heroflex flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-speed="7000" data-pause="yes">
            <ul class="slides">
                <li class="parallax" style="background-image:url(cars/Wallpapers/2.jpg);"></li>
               <li class="parallax" style="background-image:url(cars/Wallpapers/4.jpg);"></li>
               <li class="parallax" style="background-image:url(cars/Wallpapers/5.jpg);"></li>
                <li class="parallax" style="background-image:url(cars/Wallpapers/8.jpg);"></li>
                <li class="parallax" style="background-image:url(cars/Wallpapers/lamborghini.jpg);"></li>
            </ul>
        </div>
        <!-- End Hero Slider -->
    </div>
    <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-8">
                	<div class="toggle-make">
                		<a href="#"><i class="fa fa-navicon"></i></a>
                    	<span>Browse by body style</span>
                    </div>
                </div>
            	<div class="col-md-8 col-sm-6 col-xs-4">
                	<ul class="utility-icons social-icons social-icons-colored">
                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    	<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
          	</div>
      	</div>
    	<div class="by-type-options">
    		<div class="container">
               	<div class="row">
                  	<ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
                    	<li class="item"> <a href="results-list.php#"><img src="images/body-types/minicar.png" alt=""> <span>Minicar</span></a></li>
                    	<li class="item"> <a href="results-list.php"><img src="images/body-types/sedan.png" alt=""> <span>Sedan</span></a></li>
                  	</ul>
               	</div>
            </div>
        </div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full padding-b0">
            <div class="container">
            	<!-- Welcome Content and Services overview -->
            	<div class="row">
                	<div class="col-md-6">
                    	<h1 class="uppercase strong">Welcome to CarsInfo<br>Listing portal</h1>
                        <p class="lead">CarsInfo is the world's leading portal for<br>easy and quick <span class="accent-color">car buying and selling</span></p>
                    </div>
                    <div class="col-md-6">
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, <span class="accent-color">consectetur adipiscing</span> elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
                <div class="spacer-75"></div>
                <!-- Recently Listed Vehicles -->
                <section class="listing-block recent-vehicles">
                	<div class="listing-header">
                    	<h3>Recently Listed Vehicles</h3>
                    </div>
                    <div class="listing-container">
                        <div class="carousel-wrapper">
                            <div class="row">
                                <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="4" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                    <?php
                                    $se="select * from cardetail";
                                    $cn=mysqli_connect('localhost','root','','vi');
                                    $s=mysqli_query($cn,$se);
                                    while ($f=mysqli_fetch_row($s)){
                                     ?>
                                    <li class="item">
                                        <div class="vehicle-block format-standard">
                                            <a href="vehicle-details.php?<?php echo "user="; echo $user;echo "&";?>id=<?php echo $f[0]; ?>" class="media-box"><img src="f/<?php echo $f[14]; ?>" style="width:250px;height:180px;" alt=""></a>
                                            <div class="vehicle-block-content">
                                                <span class="label label-default vehicle-age"><?php  echo $f[2]; ?></span>
                                                <h5 class="vehicle-title"><a href="vehicle-details.php?id=<?php echo $f[0]; ?>">Newly launched <?php echo $f[2]; echo " "; echo $f[3]; ?></a></h5>
                                                <span class="vehicle-meta">Engine &nbsp;<abbr class="user-type" title="Listed by Autostars"><?php echo $f[12]; ?></abbr></span>
                                                <a href="results-list.php" title="View all coupes" class="vehicle-body-type">
                                                    <img src="images/body-types/coupe.png" width="30" alt=""></a>
                                                <span class="vehicle-cost"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $f[13];?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-60"></div>
             	<div class="row">
                    <!-- Latest News -->
                    <div class="col-md-8 col-sm-6">
                        <section class="listing-block latest-news">
                            <div class="listing-header">
                            	<a href="blog.php" class="btn btn-sm btn-default pull-right">All news</a>
                                <h3>Latest auto news</h3>
                            </div>
                            <div class="listing-container">
                            	<div class="carousel-wrapper">
                                    <div class="row">
                                        <ul class="owl-carousel" id="news-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="2" data-items-mobile="1">
        <?php 
        $nco=mysqli_connect('localhost','root','','vi');
        $nse="select * from news";
        $nmq=mysqli_query($nco,$nse);
        while ($nfc=mysqli_fetch_row($nmq)) { ?>
        
            
            
                                            <li class="item">
                                                <div class="post-block format-standard">
                                                    <a href="single-post.php" class="media-box post-image"><img src="f/<?php echo $nfc[5];?>" style="width:100%;height:200px;" alt=""></a>
                                                    <div class="post-actions">
                                                        <div class="post-date">Date: <?php echo $nfc[1];?></div>
                                                        <div class="comment-count"><a href="single-post.php"><i class="icon-dialogue-text"></i> 12</a></div>
                                                    </div>
                                                    <h3 class="post-title"><a href="single-post.php">Comment:</a></h3><?php echo $nfc[6];?>
                                                    <div class="post-content">
                                                        <p>Brand: <?php echo $nfc[2];?>, <?php echo $nfc[3];?>, <?php echo $nfc[4];?></p>
                                                    </div>
                                                    <div class="post-meta">
                                                        <!--Posted in: <a href="blog-masonry.php">Financial</a>-->
                                                    </div>
                                                </div>
                                            </li>
                                          
                                      <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                      	</section>

<!--------------------------------------------------------------------Old Cars Section----------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--Old car php section-->
    <section class="listing-block latest-news">
                            <div class="listing-header">
                                <a href="blog.php" class="btn btn-sm btn-default pull-right">All Cars</a>
                                <h3>Old Cars</h3>
                            </div>
                            <div class="listing-container">
                                <div class="carousel-wrapper">
                                    <div class="row">
                                        <ul class="owl-carousel" id="news-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="yes" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="2" data-items-mobile="1">
                                            <?php
                                                $co=mysqli_connect('localhost','root','','vi');
                                                $ose="select * from carsell";
                                                $omq=mysqli_query($co,$ose);
                                                while ($os=mysqli_fetch_row($omq)) { ?>
                                            <li class="item">
                                                <div class="post-block format-standard">
                                                    <a href="single-post.php" class="media-box post-image"><img src="f/<?php echo $os[16]; ?>" style="width:100%;height:200px;" alt=""></a>
                                                    <div class="post-actions">
                                                        <div class="post-date">Manufacture Year <?php echo $os[3];?></div>
                                                        <div class="comment-count"><a href="single-post.php"><i class="icon-dialogue-text"></i> 12</a></div>
                                                    </div>
                                                    <h3 class="post-title"><a href="single-post.php">Comments</a></h3><?php echo $os[19]; ?>
                                                    <div class="post-content">
                                                        <p>Contact: <?php echo $os[17];?>, <?php echo $os[18];?></p>
                                                    </div>
                                                    <div class="post-meta">
                                                        <!-- Posted in: <a href="blog-masonry.php">Financial</a>-->
                                                    </div>
                                                </div>
                                            </li>
                                           <?php }?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                		<div class="spacer-40"></div>
                        <!-- Latest Testimonials -->
                        <section class="listing-block latest-testimonials">
                            <div class="listing-header">
                                <h3>Devlopers</h3>
                            </div>
                            <div class="listing-container">
                            	<div class="carousel-wrapper">
                                    <div class="row">
                                        <ul class="owl-carousel carousel-fw" id="testimonials-slider" data-columns="2" data-autoplay="5000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                          
                             <?php
                             $dcon=mysqli_connect('localhost','root','','vi');
                             $dsel="select * from devlopers";
                             $dmq=mysqli_query($dcon,$dsel);
                             while ($dft=mysqli_fetch_row($dmq)) { ?>
                                 
                                            <li class="item">
                                                <div class="testimonial-block">
                                                    <blockquote>
                                                        <p><?php echo $dft[5];?></p>
                                                    </blockquote>
                                                    <div class="testimonial-avatar"><img src="f/<?php echo $dft[4];?>" width="60" height="60"></div>
                                                    <div class="testimonial-info">
                                                        <div class="testimonial-info-in">
                                                            <strong><?php echo $dft[1];?></strong><span><?php echo $dft[2];?> <br> <?php echo $dft[3];?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Latest Reviews -->
                    <div class="col-md-4 col-sm-6 sidebar">
                        <section class="listing-block latest-reviews">
                            <div class="listing-header">
                            	<a href="blog-masonry.php" class="btn btn-sm btn-default pull-right">All reviews</a>
                                <h3>Recent reviews</h3>
                            </div>
                            <div class="listing-container">
                            	<div class="post-block post-review-block">
                                	<div class="review-status">
                                    	<strong>3.6</strong>
                                        <span>Out of 5</span>
                                    </div>
                                 	<h3 class="post-title"><a href="single-post-review.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
                                    <div class="post-content">
                                        <div class="post-actions">
                                        	<div class="post-date">November 29, 2018</div>
                                        	<div class="comment-count"><i class="fa fa-thumbs-o-up"></i> 3 <i class="fa fa-thumbs-o-down"></i> 0</div>
                                        </div>
                                    </div>
                                </div>
                            	<div class="post-block post-review-block">
                                	<div class="review-status">
                                    	<strong>4.1</strong>
                                        <span>Out of 5</span>
                                    </div>
                                 	<h3 class="post-title"><a href="single-post-review.php">Curabitur nec nulla lectus, non hendrerit lorem porttitor</a></h3>
                                    <div class="post-content">
                                        <div class="post-actions">
                                        	<div class="post-date">November 14, 2018</div>
                                        	<div class="comment-count"><i class="fa fa-thumbs-o-up"></i> 7 <i class="fa fa-thumbs-o-down"></i> 1</div>
                                        </div>
                                    </div>
                                </div>
                            	<div class="post-block post-review-block">
                                	<div class="review-status">
                                    	<strong>5.0</strong>
                                        <span>Out of 5</span>
                                    </div>
                                 	<h3 class="post-title"><a href="single-post-review.php">2018 Proin enim quam, vulputate at lobortis quis</a></h3>
                                    <div class="post-content">
                                        <div class="post-actions">
                                        	<div class="post-date">October 31, 2018</div>
                                        	<div class="comment-count"><i class="fa fa-thumbs-o-up"></i> 11 <i class="fa fa-thumbs-o-down"></i> 0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      	</section>
                		<div class="spacer-40"></div>
                        <!-- Connect with us -->
                        <section class="connect-with-us widget-block">
                            <h4><i class="fa fa-rss"></i> Connect with us</h4>
                            <form role="form">
                                <label for="NewsletterInput" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="NewsletterInput" placeholder="Subscribe via email">
                                <button type="submit" class="btn btn-sm btn-primary">Subscribe</button>
                                <span class="meta-data">Don't worry, we won't spam you</span>
                            </form>
                            <hr>
                            <h4><i class="fa fa-twitter"></i> Twitter feed</h4>
                            <div class="twitter-widget" data-tweets-count="2"></div>
                        </section>
                    </div>
              	</div>
           	</div>
            <div class="spacer-50"></div>
            <div class="lgray-bg make-slider">
            	<div class="container">
                    <!-- Search by make -->
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <h3>Search by Brands </h3>
                            <a href="#" class="btn btn-default btn-lg">All make &amp; models</a>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="row">
                                <ul class="owl-carousel" id="make-carousel" data-columns="5" data-autoplay="6000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="5" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/Audi.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/Mercedes.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/BMW.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/Lambo.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/Hyundai.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/Nissan.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="images/Logos/Volkswagen.png" alt=""></a></li>
                                    <li class="item"> <a href="results-grid.php"><img src="http://placehold.it/100x100&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                </ul>
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
  	<a h id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
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