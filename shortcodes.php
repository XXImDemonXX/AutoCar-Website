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
        	<h1 class="page-title">Shortcodes</h1>
       	</div>
    </div>
    <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Shortcodes</li>
                    </ol>
            	</div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
      	</div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
            <div class="container">
              	<div class="row">
                	<div class="col-md-6">
                        <h2>Tabs</h2>
                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"> <a data-toggle="tab" href="#sampletab1"> Sample Tab #1 </a> </li>
                                <li> <a data-toggle="tab" href="#sampletab2"> Sample Tab #2 </a> </li>
                                <li> <a data-toggle="tab" href="#sampletab3"> Sample Tab #3 </a> </li>
                            </ul>
                            <div class="tab-content">
                                <div id="sampletab1" class="tab-pane active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor.</p>
                                </div>
                                <div id="sampletab2" class="tab-pane">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque.</p>
                                </div>
                                <div id="sampletab3" class="tab-pane">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum. </p>
                                </div>
                            </div>
                        </div>
                  	<h2>Progress Bars</h2>
                  	<div class="progress-bars">
                    	<div class="progress-label"> <span>HTML/CSS</span> </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%"> <span class="progress-bar-tooltip">90%</span> </div>
                        </div>
                        <div class="progress-label"> <span>Photoshop</span> </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="95%" data-appear-animation-delay="200"> <span class="progress-bar-tooltip">95%</span> </div>
                        </div>
                        <div class="progress-label"> <span>Joomla</span> </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="400"> <span class="progress-bar-tooltip">75%</span> </div>
                        </div>
                        <div class="progress-label"> <span>Wordpress</span> </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%" data-appear-animation-delay="600"> <span class="progress-bar-tooltip">100%</span> </div>
                        </div>
                        <div class="progress-label"> <span>Stripped Progress Bar</span> </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                        </div>
                        <div class="progress-label"> <span>Colored Progress Bars</span> </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" style="width: 60%"> <span>60% Complete (warning)</span> </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" style="width: 80%"> <span class="sr-only">80% Complete</span> </div>
                        </div>
                	</div>
                </div>    
                <div class="col-md-6">
                    <h2>Accordion</h2>
                    <!-- Start Accordion -->
                    <div class="accordion" id="accordionArea">
                        <div class="accordion-group panel">
                            <div class="accordion-heading accordionize"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea"> Accordion Panel #1 <i class="fa fa-angle-down"></i> </a> </div>
                            <div id="oneArea" class="accordion-body in collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                  Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. 
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. 
                  Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                            </div>
                        </div>
                        <div class="accordion-group panel">
                            <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea"> Accordion Panel #2 <i class="fa fa-angle-down"></i> </a> </div>
                            <div id="twoArea" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                  Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. 
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. 
                  Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. 
                  Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                        <div class="accordion-group panel">
                            <div class="accordion-heading accordionize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#threeArea"> Accordion Panel #3 <i class="fa fa-angle-down"></i> </a> </div>
                            <div id="threeArea" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                  Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. 
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. 
                  Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. 
                  Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                    <div class="spacer-30"></div>
                    <h2>Toggles</h2>
                    <div class="accordion" id="toggleArea">
                        <div class="accordion-group panel">
                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Toggle Panel #1 <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                            <div id="collapseOne" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                  Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. 
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. 
                  Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. 
                  Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                        <div class="accordion-group panel">
                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Toggle Panel #2 <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                  Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. 
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. 
                  Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. 
                  Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Toggle Panel #3 <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                            <div id="collapseThird" class="accordion-body collapse">
                                <div class="accordion-inner"> Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. 
                  Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. 
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Donec sed odio dui. 
                  Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. 
                  Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Toggle --> 
                </div>
            </div>
            <hr class="fw">
            <h2>Icon Boxes</h2>
            <div class="spacer-30"></div>
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-outline">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-outline">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-outline">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-border">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-rounded">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-rounded">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-rounded">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-plain">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-plain">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-plain">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-center">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-dark">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-outline ibox-center">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-outline ibox-center ibox-dark">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-outline ibox-center ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-center">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-center ibox-dark">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-center ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-center ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-center ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-border ibox-center ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-rounded">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-rounded ibox-dark">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-rounded ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-plain">
                        <div class="ibox-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-plain ibox-dark">
                        <div class="ibox-icon">
                            <i class="fa fa-android"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            	<div class="col-md-4">
                    <div class="icon-box ibox-center ibox-plain ibox-light">
                        <div class="ibox-icon">
                            <i class="fa fa-apple"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
            
            
            <hr class="fw">
            
            <div class="row">
                <div class="col-md-12" data-appear-animation="bounceInRight">
                    <h2>Alert Boxes</h2>
                    <div class="alert alert-standard fade in"> <a class="close" data-dismiss="alert" href="#">&times;</a> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                    <div class="alert alert-warning fade in"> <a class="close" data-dismiss="alert" href="#">&times;</a> <strong>Warning!</strong> Best check yo self, you're not looking too good. </div>
                    <div class="alert alert-error fade in"> <a class="close" data-dismiss="alert" href="#">&times;</a> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                    <div class="alert alert-info fade in"> <a class="close" data-dismiss="alert" href="#">&times;</a> <strong>Heads up!</strong> This alert needs your attention, but it's not super important. </div>
                    <div class="alert alert-success fade in"> <a class="close" data-dismiss="alert" href="#">&times;</a> <strong>Well done!</strong> You successfully read this important alert message. </div>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
                <div class="col-md-6">
                    <h2>Tooltips</h2>
                    <p>Tight pants next level keffiyeh <a href="#" data-toggle="tooltip" data-original-title="Default tooltip" > you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel<a href="#" id="back-top" data-placement="left"  data-toggle="tooltip" title="" data-original-title="Another tooltip"> have a</a> terry richardson vinyl chambray. </p>
                </div>
                <div class="col-md-6">
                    <h2>Modal Box</h2>
                    <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                    <p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body"> One fine body... </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default inverted" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="fw">
            </div>
            <section class="counters accent-color text-align-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="fact-ico"> <i class="fa fa-glass fa-4x"></i> </div>
                            <div class="clearfix"></div>
                            <div class="timer" data-perc="9000"> <span class="count">9000</span> </div>
                            <div class="clearfix"></div>
                            <span class="fact">Drinks Consumed</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="fact-ico"> <i class="fa fa-map-marker fa-4x"></i> </div>
                            <div class="clearfix"></div>
                            <div class="timer" data-perc="96"> <span class="count">96</span> </div>
                            <div class="clearfix"></div>
                            <span class="fact">Places Visited</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="fact-ico"> <i class="fa fa-music fa-4x"></i> </div>
                            <div class="clearfix"></div>
                            <div class="timer" data-perc="1500"> <span class="count">1500</span> </div>
                            <div class="clearfix"></div>
                            <span class="fact">Songs Played</span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="fact-ico"> <i class="fa fa-dribbble fa-4x"></i> </div>
                            <div class="clearfix"></div>
                            <div class="timer" data-perc="1400"> <span class="count">1400</span> </div>
                            <div class="clearfix"></div>
                            <span class="fact">hours played</span>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container margin-40">
                <hr class="fw">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Forms</h2>
                        <p>Individual form controls automatically receive some global styling.</p>
                        <form action="" type="post">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Your name *</label>
                                    <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label>Your email address *</label>
                                    <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Comment *</label>
                                    <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Submit" class="btn btn-primary" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <hr class="visible-sm visible-xs tall" />
                    <h2>Pagination</h2>
                    <p class="short">Large</p>
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <p class="short">Default</p>
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <p class="short">Small</p>
                    <ul class="pagination pagination-sm">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr class="fw">
            <div class="row">
                <div class="col-md-6">
                    <h2>Buttons</h2>
                    <button type="button" class="btn btn-default">Default</button>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <br><br>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <h2 class="spaced">Buttons Disabled</h2>
                    <button type="button" class="btn btn-primary" disabled="disabled">Primary button</button>
                    <button type="button" class="btn btn-default" disabled="disabled">Button</button>
                    <h2 class="spaced">Labels</h2>
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                    <span class="label label-dark">Dark</span>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <hr class="visible-sm visible-xs tall" />
                    <h2>Buttons Sizes</h2>
                    <p>
                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                        <button type="button" class="btn btn-default btn-lg">Large button</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary">Default button</button>
                        <button type="button" class="btn btn-default">Default button</button>
                    </p>
                    <p>
                         <button type="button" class="btn btn-primary btn-sm">Small button</button>
                        <button type="button" class="btn btn-default btn-sm">Small button</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                        <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                    </p>
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