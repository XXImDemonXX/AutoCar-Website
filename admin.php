<?php
error_reporting(1);
$db=mysqli_connect("localhost","root","","vi");	
$year=$_POST['year'];
$brand=$_POST['brand'];
$name=$_POST['name'];
$model=$_POST['model'];
$body=$_POST['body'];
$mileage=$_POST['mile'];
$trans=$_POST['trans'];
$condi=$_POST['condi'];


$cylin=$_POST['cylin'];
$power=$_POST['pow'];
$ft=$_POST['ft'];
$key=$_POST['start'];
$price=$_POST['price'];
$file=$_FILES['f1']['name'];
$tin=$_FILES['f1']['tmp_name'];

/*Engine Specification*/
$etype=$_POST['engtype'];
$comp=$_POST['compress'];
$hp=$_POST['hp'];
$rpm=$_POST['rpm'];
$fy=$_POST['fy'];
$refuel=$_POST['recofuel'];

/*Exterior Specification*/
$wheel=$_POST['wheel'];
$width=$_POST['width'];
$hieght=$_POST['hieght'];
$turn=$_POST['turning'];

/*Interior Specification*/
$head=$_POST['head'];
$sun=$_POST['sun'];
$leg=$_POST['leg'];
$sholder=$_POST['sholder'];

/*Capacity Specification*/
$seat=$_POST['seat'];
$cargo=$_POST['cargo'];
$total=$_POST['total'];
$tank=$_POST['tank'];


$sub=$_POST['btn'];
if(isset($sub))
{
		$in="insert into cardetail values('','$year','$brand','$name','$model','$body','$mileage','$trans','$condi','$cylin','$power','$ft','$key','$price','$file','$etype','$comp','$hp','$rpm','$fy','$refuel','$wheel','$width','$hieght','$turn','$head','$sun','$leg','$sholder','$seat','$cargo','$total','$tank')";
		$imgs="f/".$file;
		move_uploaded_file($tin,$imgs);
		mysqli_query($db,$in);
		header('location:admin.php');
}	
?>
<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Admin Site</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
<div class="cont">	
<form method="post" enctype="multipart/form-data">

<div class="premium">
	<h3>Premium Listing</h3>
	<select name="year" id="select">
		<option selected>Enter Year</option>
		<option value="2019">2019</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
	</select><br>
		<select name="brand" id="select">
			<option selected>Select Brand</option>
		<option value="Audi">Audi</option>
		<option value="BMW">BMW</option>
		<option value="Mercdes">Mercdes</option>
		<option value="Maruti">Maruti</option>
		<option value="Jeep">Jeep</option>
		<option value="Toyota">Toyota</option>
		<option value="Nexa">Nexa</option>
		<option value="Hyundai">Hyunday</option>
		<option value="Ford">Ford</option>
		<option value="Nissan">Nissan</option>
	</select><br>
	
	<input type="text" name="name" placeholder="Name"><br>
	<input type="text" name="model" placeholder="Model"><br>
	<select name="body"  id="select">
		<option selected>Select Body Type</option>
		<option value="convertible">Convertible</option>
		<option value="coupe">Coupe</option>
		<option value="hatchback">Hatchback</option>
		<option value="heavy commercials">Heavy Commercials</option>
		<option value="sedan">Sedan</option>
		<option value="ute">Ute</option>
		<option value="van">Van</option>
		<option value="tray">Tray</option>
		<option value="cab chassis">Cab Chassis</option>
		<option value="wagon">Wagon</option>
		<option value="others">Others</option>
	</select><br>
	<input type="text" name="mile" placeholder="Mileage"><br>
	<select name="trans"  id="select">
		<option selected>Select Transmission</option>
		<option value="automatic">Automatic</option>
		<option value="manual">Manual</option>
	</select><br>
	<select name="condi"  id="select">
		<option selected>Select Car Condition</option>
		<option value="old">Old</option>
		<option value="new">New</option>
	</select><br>
	<input type="text" name="cylin" placeholder="Cylinders"><br>
	<input type="text" name="pow" placeholder="Power"><br>
	<select name="ft"  id="select">
		<option selected>Select Fuel Type</option>
		<option value="diesel">Diesel</option>
		<option value="awd">AWD</option>
		<option value="dual fuel">Dual Fuel</option>
		<option value="electric">Electric</option>
		<option value="gas">Gas</option>
		<option value="hybrid">Hybrid</option>
		<option value="leaded petrol">Leaded Petrol</option>
		<option value="premium unleaded petrol">Premium Unleaded Petrol</option>
		<option value="unleaded petrol">Unleaded Petrol</option>
		<option value="unknown">Unknown</option>
		</select><br>
	<select name="start"  id="select">
		<option selected>Select Car Start</option>
		<option value="key">Key</option>
		<option value="push start button">Push Start Button</option>
	</select><br>
	<input type="text" name="price" placeholder="Ex-Showroom Price"><br>
	<input type="file" name="f1" style="display: none;"	id="f1"><br>
	<label id="f" for="f1">Photo</label><br><br>
</div>
<div class="engine">
<!--Specification Engine-->
<h3>Engine Specification</h3>
	<select name="engtype"  id="select">
		<option selected>Select Engine Type</option>
		<option value="electric motor">Electric Motor</option>
		<option value="hybrid">Hybrid</option>
		<option value="piston in-line">Piston In-line</option>
		<option value="piston horizontal opposed">Piston Horizontal Opposed</option>
		<option value="piston v">Piston V</option>
	    <option value="piston w">Piston W</option>
		<option value="rotary">Rotary</option>
	    <option value="unknown">Unknown</option>
	</select><br>
	<input type="text" name="compress" placeholder="Compression"><br>
	<input type="text" name="hp" placeholder="Horse Power"><br>
	<input type="text" name="rpm" placeholder="Torque/RPM"><br>
	<input type="text" name="fy" placeholder="Fuel System"><br>
	<input type="text" name="recofuel" placeholder="Recommended Fuel"><br>
</div>
<div class="exterior">
<!--Specification Exterior-->
<h3>Exterior Specification</h3>
	<input type="text" name="wheel" placeholder="Wheelbase(mm)"><br>
	<input type="text" name="width" placeholder="Overall Width(mm)"><br>
	<input type="text" name="hieght" placeholder="Overall Hieght(mm)"><br>
	<input type="text" name="turning" placeholder="Turning Circle(m)"><br>
</div>
<div class="interior">
<!--Specification Interior-->
<h3>Interior Specification</h3>
	<input type="text" name="head" placeholder="Headroom(mm)"><br>
	<input type="text" name="sun" placeholder="Sunroof(mm)"><br>
	<input type="text" name="leg" placeholder="Legroom(mm)"><br>
	<input type="text" name="sholder" placeholder="Sholder room(mm)"><br>
</div>
<div class="capacity">
<!--Specification Capacity-->
<h3>Capacity Specification</h3>
	<input type="text" name="seat" placeholder="Seating"><br>
	<input type="text" name="cargo" placeholder="Cargo Volume (L)"><br>
	<input type="text" name="total" placeholder="Total Interior (L)"><br>
	<input type="text" name="tank" placeholder="Fuel Tank (L)"><br>
	<input type="submit" name="btn" value="Submit">
</div>
</form>
</div>
<!-----------News Updates---------->
<div class="news">
<form method="post" enctype="multipart/form-data">
	<h2>News Updates</h2>
<label>Select Date</label>
<input type="Date" name="date"><br>
<label>Select Brand</label>
<select name="brand"  id="select">
	<option selected>Select</option>
	<option value="Maruti">Maruti</option>
	<option value="Jeep">Jeep</option>
	<option value="Nexa">Nexa</option>
	<option value="Ford">Ford</option>
	<option value="Fiat">Fiat</option>
	<option value="Tata">Tata</option>
	<option value="BMW">BMW</option>
</select><br>
<label>Enter Car Name</label>
<input type="text" name="name" placeholder="Enter Car Name"><br>
<label>Enter Model</label>
<input type="text" name="model" placeholder="Enter Car Model"><br>
<label>Upload Photo</label>
<input type="file" name="photo"><br>
<label>Enter Comment</label>
<textarea name="comment"></textarea><br>
<input type="submit" name="subcn" value="Submit">
</form>
</div>

<!-----------News Updates php Section---------->
<?php
$ncon=mysqli_connect('localhost','root','','vi');
$date=$_POST['date'];
$brand=$_POST['brand'];
$name=$_POST['name'];
$model=$_POST['model'];
$photo=$_FILES['photo']['name'];
$oto=$_FILES['photo']['temp_name'];
$comment=$_POST['comment'];
$nsubmit=$_POST['subcn'];
if (isset($nsubmit)) 
{
	$nin="insert into news values('','$date','$brand','$name','$model','$photo','$comment')";
	mysqli_query($ncon,$nin);
	$img="f/".$photo;
	move_uploaded_file($oto,$img);
	header('location:admin.php');
}
?>
<div class="devloper">
	<form method="post" enctype="multipart/form-data">
	<h2>Devloper Update</h2>
	<label>Name</label>
	<input type="text" name="name" placeholder="Enter Name"><br>
	<label>Email</label>
	<input type="text" name="mail" placeholder="Enter Email"><br>
	<label>Mobile Number</label>
	<input type="text" name="mobile" placeholder="Enter Mobile Number"><br>
	<label>Upload Your Photo</label>
	<input type="file" name="photo"><br>
	<label>Enter About Your Self</label>
	<textarea name="about"></textarea><br>
	<input type="submit" name="sub" value="Submit">
</form>
</div>
<!---------------Devloper Update php Section------------->
<?php
$dcon=mysqli_connect('localhost','root','','vi');
$name=$_POST['name'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$photo=$_FILES['photo']['name'];
$doto=$_FILES['photo']['tmp_name'];
$about=$_POST['about'];
$submit=$_POST['sub'];
if (isset($submit)) 
{
	$din="insert into devlopers values('','$name','$mail','$mobile','$photo','$about')";
	mysqli_query($dcon,$din);
	$dimg="devlop/".$photo;
	move_uploaded_file($doto,$dimg);
	header('location:admin.php');
}
?>
</body>
</html>

