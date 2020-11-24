<?php
/*Registration Section*/

$db=mysqli_connect("localhost","root","","vi");
$user=$_POST['un'];
$gender=$_POST['gen'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$city=$_POST['city'];
$contact=$_POST['phone'];
$submit=$_POST['btn'];
if(isset($submit))
{
    $inn="insert into registration values('','$user','$gender','','$email','$password','$city','$contact','1')";
    mysqli_query($db,$inn);
    session_start();
    $_SESSION['User']=$user;
    header('location:index.php');

}
if (isset($_POST['login'])) 
{

    $db=mysqli_connect("localhost","root","","vi");
    $us=$_POST['username'];
    $pass=$_POST['password'];
    $se="select * from registration where User_Name='$us' and Password='$pass'";
    $q=mysqli_query($db,$se);
    $c=mysqli_fetch_row($q);
    if ($c[0]>0) {
        session_start();
        $_SESSION[ 'User']=$us;
        header('location:index.php');
    }
    else{
        echo "hey............";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<body>
    <?php 
    if($_GET['reg']==1){?>
        <!-------------------------------------------------------------------------Registration Section--------------------------------------------------------------------------------------->
<div class="col-md-4" style="margin-left:33%;">
                        <section class="signup-form sm-margint">
                            <form method="post">
                                <!-- Regular Signup -->
                                <div class="regular-signup">
                                    <h3>Create an account</h3>
                                    
                                    <input type="text" name="un" class="form-control" placeholder="User Name">
                                    <input type="radio" name="gen" value="Male">Male &nbsp<input name="gen" type="radio" value="Female">Female<br><br>
                                    <input type="text" name="mail" class="form-control" placeholder="Enter your email">
                                    <input type="password" class="form-control password-input margin-5" placeholder="Type your password"/>
                                    <a href="javascript:void(0);" class="password-generate pass-actions"><i class="fa fa-refresh"></i></a>
                                    <div class="progress"><div class="progress-bar password-output" style="width: 0%"></div></div>
                                    <div class="clearfix spacer-20"></div>
                                     <input type="password" name="pass" class="form-control password-input margin-5" placeholder="Confirm Password"/>
                                    <select name="city" class="form-control">
                                        <option value="Surat">Surat</option>
                                        <option value="Navsari">Navsari</option>
                                        <option value="Amdavad">Amdavad</option>
                                        <option value="Baroda">Baroda</option>
                                       <option value="Bharuch">Bharuch</option>
                                       <option value="Valsad">Valsad</option> 
                                    </select>
                                    <input type="text" name="phone" class="form-control" placeholder="Mobile Number">
                                    <label class="checkbox-inline"><input type="checkbox">By signing up, I agree to the <a href="#">terms &amp; conditions</a> and <a href="#">privacy policy</a></label>
                                    <div class="spacer-20"></div>
                                    <input type="submit" name="btn" class="btn btn-primary btn-lg btn-block" value="Create account">
                                    <a href="login.php" class="btn btn-primary btn-lg btn-block">already have an account</a>
                                </div>
                            </form>
                                <!-- Social Signup -->
                                <form>
                                <div class="social-signup">
                                    <span class="or-break">or</span>
                                    <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Signup with Facebook</button>
                                    <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Signup with Twitter</button>
                                </div>
                            </form>
                        </section>
                    </div>
    <?php } 
    else{?>


    <!-------------------------------------------------------------------------Login Section--------------------------------------------------------------------------------------->
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
    <div class="modal-header">
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
                    </div><br>
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                    <a href="login.php?reg=1" class="btn btn-primary">Registration</a>
                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i><a href="www.facebook.com"><font color="white">Login with Facebook</font></a></button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i><a href="www.twitter.com"><font color="white"> Login with Twitter</font></a></button>
            </div>
        </div>
    </div>
<?php } ?>
</body>
</html>
 