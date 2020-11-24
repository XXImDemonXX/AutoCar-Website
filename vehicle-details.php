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
                            
                            <li><a href="add-listing-pricing.php">Sell</a></li>
                            <li>
                               <?php if($_GET['user']!=""){
                                    echo $_GET['user'];
                               }?>
                            </li>
                            <li><a href="joinus.php">Join</a></li>

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
                    <a href="#" class="visible-sm visible-xs" id="menu-toggl    e"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="joinus.php">Signup</a></li>
                                <li><a href="404.php">404 Error Page</a></li>
                                
                                <li><a href="shortcodes.php">Shortcodes</a></li>
                                
                                
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
                        <li><a href="javascript:void(0)">Listing</a>
                            <ul class="dropdown">
                                
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
    <div class="page-header parallax" style="background-image:url(http://placehold.it/1200x250&amp;text=IMAGE+PLACEHOLDER);">
    	<div class="container">
        	<h1 class="page-title">Vehicle Details</h1>
       	</div>
    </div>
    <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Vehicle Details</li>
                    </ol>
            	</div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                	<span class="share-text"><i class="icon-share"></i> Share this</span>
                	<ul class="utility-icons social-icons social-icons-colored">
                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    	<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    	<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    	<li class="delicious"><a href="#"><i class="fa fa-delicious"></i></a></li>
                    </ul>
                </div>
            </div>
      	</div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
        	<div class="container">
            	<!-- Vehicle Details -->
                <article class="single-vehicle-details">
                    <div class="single-vehicle-title">
                        <?php  
                            $id=$_GET['id'];
                            $scd="select * from cardetail where id=$id";
                            $cn=mysqli_connect('localhost','root','','vi');
                            $qr=mysqli_query($cn,$scd);
                            $sd=mysqli_fetch_row($qr);
                        ?>
                        <span class="badge-premium-listing">Premium listing</span>
                        <h2 class="post-title"><?php echo $sd[2]; echo " "; echo $sd[3];?></h2>
                    </div>
                    <div class="single-listing-actions">
                        <div class="btn-group pull-right" role="group">
                            <a href="#" class="btn btn-default" title="Save this car"><i class="fa fa-star-o"></i> <span>Save this car</span></a>
                            <a href="#" data-toggle="modal" data-target="#infoModal" class="btn btn-default" title="Request more info"><i class="fa fa-info"></i> <span>Request more info</span></a>
                            <a href="#" data-toggle="modal" data-target="#testdriveModal" class="btn btn-default" title="Book a test drive"><i class="fa fa-calendar"></i> <span>Book a test drive</span></a>
                            <a href="#" data-toggle="modal" data-target="#offerModal" class="btn btn-default" title="Make an offer"><i class="fa fa-dollar"></i> <span>Make an offer</span></a>
                            <a href="#" data-toggle="modal" data-target="#sendModal" class="btn btn-default" title="Send to a friend"><i class="fa fa-send"></i> <span>Send to a friend</span></a>
                            <a href="#" class="btn btn-default" title="Download Manual"><i class="fa fa-book"></i> <span>Download Manual</span></a>
                            <a href="javascript:void(0)" onclick="window.print();" class="btn btn-default" title="Print"><i class="fa fa-print"></i> <span>Print</span></a>
                        </div>
                        <!--Price lable-->
                        <div class="btn btn-info price"><span><i class="fa fa-inr" aria-hidden="true"></i><?php echo $sd[13]; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="single-listing-images">
                                <div class="featured-image format-image">
                                    <a href="http://placehold.it/890x600&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="f/<?php echo $sd[14]; ?>" alt=""></a>
                                </div>
                                <div class="additional-images">
                                        <ul class="owl-carousel" data-columns="4" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
                                            <li class="item format-video"> <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                            <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                            <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                            <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                            <li class="item format-image"> <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                        </ul>
                                </div>
                            </div>
                      	</div>
                        <div class="col-md-4">
                            <div class="sidebar-widget widget">
                                <ul class="list-group">
                                    <li class="list-group-item"> <span class="badge">Year</span><?php echo $sd[1]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Brand</span><?php echo $sd[2]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Name</span><?php echo $sd[3]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Model</span><?php echo $sd[4]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Body style</span><?php echo $sd[5]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Mileage</span> <?php echo $sd[6]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Transmission</span><?php echo $sd[7]; ?></li>
                                    <li class="list-group-item"> <span class="badge">Condition</span> <?php echo $sd[8]; ?></li>
                                    
                                    
                                    <li class="list-group-item"> <span class="badge">Cylinders</span><?php echo $sd[9];?></li>
                                    <li class="list-group-item"> <span class="badge">Power</span><?php echo $sd[10];?></li>
                                    <li class="list-group-item"> <span class="badge">Fuel type</span><?php echo $sd[11];?></li>
                                    
                                </ul>
                            </div>
                        </div>
                   	</div>
                 	<div class="spacer-50"></div>
                    <div class="row">
                    	<div class="col-md-8">
                            <div class="tabs vehicle-details-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#vehicle-overview">Overview</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-specs">Specifications</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-add-features">Additional Features</a></li>
                                    <li> <a data-toggle="tab" href="#vehicle-location">Location</a> </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="vehicle-overview" class="tab-pane fade in active">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                    </div>
                                    <div id="vehicle-specs" class="tab-pane fade">
                                        <div class="accordion" id="toggleArea">
                                          	<div class="accordion-group panel">
                                            	<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Engine <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            	<div id="collapseOne" class="accordion-body collapse">
                                              		<div class="accordion-inner">
                                                    	<table class="table-specifications table table-striped table-hover">
                                                            <tbody>
                                                            	<tr>
                                                            		<td>Engine type</td>
                                                            		<td><?php echo $sd[15]; ?></td>
                                                            	</tr>
                                                                <tr>
                                                            		<td>Compression ratio</td>
                                                            		<td><?php echo $sd[16]; ?></td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Horsepower SAE net</td>
                                                            		<td><?php echo $sd[17]; ?> </td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Torque SAE net lb. ft.</td>
                                                            		<td><?php echo $sd[18]; ?></td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Fuel system</td>
                                                            		<td><?php echo $sd[19]; ?></td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Recommended fuel</td>
                                                            		<td><?php echo $sd[20]; ?></td>
                                                            	</tr>
                                                            </tbody>
                                                  		</table>
                                                    </div>
                                            	</div>
                                          	</div>
                                          	<div class="accordion-group panel">
                                            	<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Exterior <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            	<div id="collapseTwo" class="accordion-body collapse">
                                              		<div class="accordion-inner">
                                                    	<table class="table-specifications table table-striped table-hover">
                                                            <tbody>
                                                            	<tr>
                                                            		<td>Wheelbase/overall length (mm)</td>
                                                            		<td><?php echo $sd[21];?> mm</td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Overall width (mm)</td>
                                                            		<td><?php echo $sd[22];?> mm</td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Overall height (mm)</td>
                                                            		<td><?php echo $sd[23];?> mm</td>
                                                            	</tr>
                                                            	<tr>
                                                            		<td>Turning circle, curb-to-curb (m)</td>
                                                            		<td><?php echo $sd[24];?> m</td>
                                                            	</tr>
                                                            </tbody>
                                                       	</table>
                                                    </div>
                                            	</div>
                                          	</div>
                                          	<div class="accordion-group panel">
                                            	<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Interior <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            	<div id="collapseThird" class="accordion-body collapse">
                                              		<div class="accordion-inner">
                                                    	<table class="table-specifications table table-striped table-hover">
                                                    		<tbody>
                                                                <tr>
                                                                	<td>Headroom (fr/rr) (mm)</td>
                                                                	<td><?php echo $sd[25];?></td>
                                                                </tr>
                                                                <tr>
                                                                	<td>Sunroof (mm)</td>
                                                                	<td><?php echo $sd[26];?> mm</td>
                                                                </tr>
                                                                <tr>
                                                                	<td>Legroom (fr/rr) (mm)</td>
                                                                	<td><?php echo $sd[27];?> mm</td>
                                                                </tr>
                                                                <tr>
                                                                	<td>Shoulder room (fr/rr) (mm)</td>
                                                                	<td><?php echo $sd[28];?> mm</td>
                                                                </tr>
                                                        	</tbody>
                                                      	</table>
                                                    </div>
                                            	</div>
                                          	</div>
                                          	<div class="accordion-group panel">
                                            	<div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseForth"> Capacities <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                                            	<div id="collapseForth" class="accordion-body collapse">
                                              		<div class="accordion-inner">
                                                    	<table class="table-specifications table table-striped table-hover">
                                                    		<tbody>
                                                                <tr>
                                                                	<td>Seating</td>
                                                                	<td><?php echo $sd[29];?></td>
                                                                </tr>
                                                                <tr>
                                                                	<td>Cargo volume (L)</td>
                                                                	<td><?php echo $sd[30];?> (L)</td>
                                                                </tr>
                                                                <tr>
                                                                	<td>Total interior volume (L)</td>
                                                                	<td><?php echo $sd[31];?> (L)</td>
                                                                </tr>
                                                                <tr>
                                                                	<td>Fuel tank (L)</td>
                                                                	<td><?php echo $sd[32];?> (L)</td>
                                                                </tr>
                                                        	</tbody>
                                                       	</table>
                                                    </div>
                                            	</div>
                                          	</div>
                                  		</div>
                                        <!-- End Toggle --> 
                                    </div>
                                    <div id="vehicle-add-features" class="tab-pane fade">
                                    	<ul class="add-features-list">
                                        	<li>6 Speaker Stereo</li>
                                            <li>Driver &amp; Passenger Airbags</li>
                                            <li>Antilock Brakes</li>
                                            <li>Park Assist</li>
                                            <li>Cruise Control</li>
                                            <li>Power Steering</li>
                                            <li>17" Alloy Wheels</li>
                                        </ul>
                                    </div>
                                    <div id="vehicle-location" class="tab-pane fade">
                                        <iframe width="100%" height="300px" frameBorder="0" src="http://a.tiles.mapbox.com/v3/imicreation.map-zkcdvthf.php?secure"></iframe>
                                    </div>
                                </div>
                    		</div>
                            <div class="spacer-50"></div>
                            <!-- Recently Listed Vehicles -->
                            <section class="listing-block recent-vehicles">
                                <div class="listing-header">
                                    <h3>Related Vehicles</h3>
                                </div>
                                <div class="listing-container">
                                    <div class="carousel-wrapper">
                                        <div class="row">
                                            <ul class="owl-carousel carousel-fw" id="vehicle-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-default vehicle-age">2018</span>
                                                        <span class="label label-success premium-listing">Premium Listing</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes-benz SL 300</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Grey color, by <abbr class="user-type" title="Listed by an individual user">Individual</abbr></span>
                                                        <a href="#" title="View all Sedans" class="vehicle-body-type"><img src="images/body-types/sedan.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$48500</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-primary vehicle-age">Brand New</span>
                                                        <h5 class="vehicle-title"><a href="#">Nissan Terrano first hand</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by an dealer">Dealer</abbr></span>
                                                        <a href="#" title="View all SUVs" class="vehicle-body-type"><img src="images/body-types/suv.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$28000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-default vehicle-age">2013</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes Benz E Class</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Silver Blue, by <abbr class="user-type" title="Listed by an individual">Individual</abbr></span>
                                                        <a href="#" title="View all convertibles" class="vehicle-body-type"><img src="images/body-types/convertible.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$76000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-default vehicle-age">2018</span>
                                                        <h5 class="vehicle-title"><a href="#">Newly launched Nissan Sunny</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by Autostars">Autostars</abbr></span>
                                                        <a href="#" title="View all coupes" class="vehicle-body-type"><img src="images/body-types/coupe.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$31999</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-default vehicle-age">2018</span>
                                                        <span class="label label-success premium-listing">Premium Listing</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes-benz SL 300</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Grey color, by <abbr class="user-type" title="Listed by an individual user">Individual</abbr></span>
                                                        <a href="#" title="View all Sedans" class="vehicle-body-type"><img src="images/body-types/sedan.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$48500</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-primary vehicle-age">Brand New</span>
                                                        <h5 class="vehicle-title"><a href="#">Nissan Terrano first hand</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by an dealer">Dealer</abbr></span>
                                                        <a href="#" title="View all SUVs" class="vehicle-body-type"><img src="images/body-types/suv.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$28000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-default vehicle-age">2013</span>
                                                        <h5 class="vehicle-title"><a href="#">Mercedes Benz E Class</a></h5>
                                                        <span class="vehicle-meta">Mercedes, Silver Blue, by <abbr class="user-type" title="Listed by an individual">Individual</abbr></span>
                                                        <a href="#" title="View all convertibles" class="vehicle-body-type"><img src="images/body-types/convertible.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$76000</span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="vehicle-block format-standard">
                                                        <a href="#" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                                        <span class="label label-default vehicle-age">2018</span>
                                                        <h5 class="vehicle-title"><a href="#">Newly launched Nissan Sunny</a></h5>
                                                        <span class="vehicle-meta">Nissan, Brown beige, by <abbr class="user-type" title="Listed by Autostars">Autostars</abbr></span>
                                                        <a href="#" title="View all coupes" class="vehicle-body-type"><img src="images/body-types/coupe.png" width="30" alt=""></a>
                                                        <span class="vehicle-cost">$31999</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                       	</div>
                        <!-- Vehicle Details Sidebar -->
                        <div class="col-md-4 vehicle-details-sidebar sidebar">
                        
                            <!-- Vehicle Enquiry -->
                            <div class="sidebar-widget widget seller-contact-widget">
                                <?php


                                ?>
                              	<h4 class="widgettitle">Send enquiry</h4>
                                <div class="vehicle-enquiry-in">
                                    <form method="post">
                                        <input type="text" name="name" placeholder="Name*" class="form-control" required>
                                        <input type="email" name="mail" placeholder="Email address*" class="form-control" required>
                                        <div class="row">
                                            <div class="col-md-7"><input type="text" name="phone" placeholder="Phone no.*" class="form-control" required></div>
                                            <div class="col-md-5"><input type="text" name="pin" placeholder="Zip*" class="form-control" required></div>
                                        </div>
                                        <textarea name="comments"  class="form-control" placeholder="Your comments"></textarea>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Subscribe To <strong>AutoStars Newsletter</strong>
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option2"> Remember my details
                                        </label>
                                        <input type="submit" name="btn" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                                <div class="vehicle-enquiry-foot">
                                    <span class="vehicle-enquiry-foot-ico"><i class="fa fa-phone"></i></span>
                                    <strong>1800 011 2211</strong>Seller: <a href="#">Carcheck Sellers</a>
                                </div>
                            </div>
                            
                            <!-- Financing Calculator -->
                            <div class="sidebar-widget widget calculator-widget">
                                <h4>Loan Estimator</h4>
                                <form>
                                    <div class="loan-calculations">
                                        <input type="text" class="form-control" placeholder="Loan amount">
                                        <div class="form-group">
                                            <label>Loan term in months</label>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-info active">
                                                  	<input type="radio" name="Loan Tenure" id="option1" autocomplete="off" checked> 24
                                                </label>
                                                <label class="btn btn-info">
                                                  	<input type="radio" name="Loan Tenure" id="option2" autocomplete="off"> 36
                                                </label>
                                                <label class="btn btn-info">
                                                  	<input type="radio" name="Loan Tenure" id="option3" autocomplete="off"> 48
                                                </label>
                                                <label class="btn btn-info">
                                                  	<input type="radio" name="Loan Tenure" id="option3" autocomplete="off"> 60
                                                </label>
                                           	</div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Down payment">
                                            <input type="text" class="form-control" placeholder="Rate of Interest eg.10%">
                                        </div>
                                    </div>
                                    <div class="calculations-result">
                                    	<span class="meta-data">This is the payment you need to make per month</span>
                                        <span class="loan-amount">$300<small>/month</small></span>
                                    </div>
                                </form>
                         	</div>
                        </div>
                    </div>
                </article>
                <div class="clearfix"></div>
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
                <form method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </form>
           	</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
        </div>
    </div>
</div>
<!-- REQUEST MORE INFO POPUP -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Request more info</h4>
            </div>
            <div class="modal-body">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="row">
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                      	</div>
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                      	</div>
                   	</div>
             		<input type="submit" class="btn btn-primary pull-right" value="Request Info">
                    <label class="btn-block">Preferred Contact</label>
                    <label class="checkbox-inline"><input type="checkbox"> Email</label>
                    <label class="checkbox-inline"><input type="checkbox"> Phone</label>
                </form>
           	</div>
        </div>
    </div>
</div>
<!-- BOOK TEST DRIVE POPUP -->
<div class="modal fade" id="testdriveModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Book a test drive</h4>
            </div>
            <div class="modal-body">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <form method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="tname" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="row">
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="tmail" class="form-control" placeholder="Email">
                            </div>
                      	</div>
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" name="tphone" class="form-control" placeholder="Phone">
                            </div>
                      	</div>
                   	</div>
                    <div class="row">
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="tdate" id="datepicker" class="form-control" placeholder="Preferred Date">
                            </div>
                      	</div>
                    	<div class="col-md-6">
                            <div class="input-group input-append bootstrap-timepicker">
                                <span class="input-group-addon add-on"><i class="fa fa-clock-o"></i></span>
                                <input type="text" name="ttime" id="timepicker" class="form-control" placeholder="Preferred time">
                            </div>
                      	</div>
                   	</div>
             		<input type="submit" name="tsubmit" class="btn btn-primary pull-right" value="Schedule Now">
                    <label class="btn-block">We will Contact you</label>
                    <label>Using Email Or Using Phone</label>
                </form>
           	</div>
        </div>
    </div>
</div>
<!-- MAKE AN OFFER POPUP -->
<div class="modal fade" id="offerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Make an offer</h4>
            </div>
            <div class="modal-body">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="row">
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                      	</div>
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                      	</div>
                   	</div>
                    <div class="row">
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                <input type="text" class="form-control" placeholder="Offered Price">
                            </div>
                      	</div>
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                <select type="text" class="form-control selectpicker">
                                	<option selected>Financing required?</option>
                                	<option>Yes</option>
                                	<option>No</option>
                                </select>
                            </div>
                      	</div>
                   	</div>
                    <textarea class="form-control" placeholder="Additional comments"></textarea>
             		<input type="submit" class="btn btn-primary pull-right" value="Submit">
                    <div class="clearfix"></div>
                </form>
           	</div>
        </div>
    </div>
</div>
<!-- SEND TO A FRIEND POPUP -->
<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Make an offer</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="row">
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                      	</div>
                    	<div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Friend's Email">
                            </div>
                      	</div>
                   	</div>
                    <textarea class="form-control" placeholder="Message"></textarea>
             		<input type="submit" class="btn btn-primary pull-right" value="Submit">
                    <div class="clearfix"></div>
                </form>
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
<script type="text/javascript">
	$('#timepicker').timepicker({defaultTime: false});
	$('#datepicker').datepicker();
</script>
</body>
</html>
<!-----------------------------------------------Enquery's php's codes-------------------------------------------------------------->
<?php
/*Car Enquiry Booking*/
$conn=mysqli_connect('localhost','root','','vi');
$name=$_POST['name'];
$email=$_POST['mail'];
$phone=$_POST['phone'];
$pin=$_POST['pin'];
$comment=$_POST['comments'];
$submit=$_POST['btn'];

/*Test Drive Booking*/
$tname=$_POST['tname'];
$tmail=$_POST['tmail'];
$tphone=$_POST['tphone'];
$tdate=$_POST['tdate'];
$ttime=$_POST['ttime'];
$tsubmit=$_POST['tsubmit'];
if (isset($tsubmit)) 
{
    $tin="insert into testdrive values('','$tname','$tmail','$sd[2]','$sd[3]','$tdate','$tphone','$ttime')";
    mysqli_query($conn,$tin);
}

if(isset($submit))
{
    $in="insert into enquiry values('','$sd[2]','$sd[3]','$sd[14]','$name','$email','$phone','$pin','$comment')";
    mysqli_query($conn,$in);
}
?>
