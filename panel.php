<?php
	if($_GET['delete1']!="")
	{
		$de="DELETE FROM cardetail WHERE id='$_GET[delete1]'";
		$cn=mysqli_connect('localhost','root','','vi');
		mysqli_query($cn,$de);
	}
	$update1=$_POST['upbut1'];
	if(isset($update1)){
		echo $update;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="csss/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/styles.csss" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="csss/font.css" type="text/css"/>
<link href="css/font-awesome.csss" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="jss/jquery2.0.3.min.js"></script>
<script src="jss/modernizr.js"></script>
<script src="jss/jquery.cookie.js"></script>
<script src="jss/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="csss/table-style.css" />
<link rel="stylesheet" type="text/css" href="csss/basictable.css" />
<script type="text/javascript" src="jss/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>

</head>
<body>
<div class="table-heading">
					<h2 align="center">Admin </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>Cars Details</h3>
					    <table id="table" style="border:2px solid;">
						<thead>
						  <tr>
							<th>ID</th>
							<th>Year</th>
							<th>Brand</th>
							<th>Name</th>
							<th>Model</th>
							<th>Body</th>
							<th>Mileage</th>
							<th>Transmission</th>
							<th>Condition</th>
							<th>Cylinder</th>
							<th>Power</th>
							<th>Fuel Type</th>
							<th>Start</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Engine Type</th>
							<th>Compression</th>
							<th>Horse Power (HP)</th>
							<th>Torque (RPM)</th>
							<th>Fuel System</th>
							<th>Recommended Fuel</th>
							<th>Wheelbase (mm)</th>
							<th>Overall Width (mm)</th>
							<th>Overall Hieght (mm)</th>
							<th>Turning Circle (m)</th>
							<th>Heafroom (mm)</th>
							<th>Sunroof (mm)</th>
							<th>Legroom (mm)</th>
							<th>Sholder (mm)</th>
							<th>Seating</th>
							<th>Cargo (L)</th>
							<th>Total Interior (L)</th>
							<th>Fuel Tank (L)</th>
							<th>Operations</th>
						  </tr>
						</thead>
						<tbody>
						<?php  
								$con=mysqli_connect('localhost','root','','vi');
								$select="select * from cardetail";
								$qr=mysqli_query($con,$select);
						while ($fc=mysqli_fetch_row($qr)) {
							if($_GET['update1']=="$fc[0]"){?>
							<form method="post">
								<tr>
							<td><?php echo $fc[0];?></td>
							<td><input type="text" name="cyear" value="<?php echo $fc[1];?>"></td>
							<td><input type="text" name="cbrand" value="<?php echo $fc[2];?>"></td>
							<td><input type="text" name="cname" value="<?php echo $fc[3];?>"></td>
							<td><input type="text" name="cmodel" value="<?php echo $fc[4];?>"></td>
							<td><input type="text" name="cbody" value="<?php echo $fc[5];?>"></td>
							<td><input type="text" name="cmileage" value="<?php echo $fc[6];?>"></td>
							<td><input type="text" name="ctransmission" value="<?php echo $fc[7];?>"></td>
							<td><input type="text" name="ccondition" value="<?php echo $fc[8];?>"></td>
							<td><input type="text" name="ccylinder" value="<?php echo $fc[9];?>"></td>
							<td><input type="text" name="cpower" value="<?php echo $fc[10];?>"></td>
							<td><input type="text" name="cfuel" value="<?php echo $fc[11];?>"></td>
							<td><input type="text" name="cstart" value="<?php echo $fc[12];?>"></td>
							<td><input type="text" name="cprice" value="<?php echo $fc[13];?>"></td>
							<td><img src="f/<?php echo $fc[14];?>" style="width: 65px;height:60px;" ></td>
							<td><input type="text" name="cengtype" value="<?php echo $fc[15];?>"></td>
							<td><input type="text" name="ccompression" value="<?php echo $fc[16];?>"></td>
							<td><input type="text" name="chp" value="<?php echo $fc[17];?>"></td>
							<td><input type="text" name="ctorque" value="<?php echo $fc[18];?>"></td>
							<td><input type="text" name="cfsystem" value="<?php echo $fc[19];?>"></td>
							<td><input type="text" name="crfuel" value="<?php echo $fc[20];?>"></td>
							<td><input type="text" name="cwheel" value="<?php echo $fc[21];?>"></td>
							<td><input type="text" name="cwidth" value="<?php echo $fc[22];?>"></td>
							<td><input type="text" name="chieght" value="<?php echo $fc[23];?>"></td>
							<td><input type="text" name="cturning" value="<?php echo $fc[24];?>"></td>
							<td><input type="text" name="chead" value="<?php echo $fc[25];?>"></td>
							<td><input type="text" name="csun" value="<?php echo $fc[26];?>"></td>
							<td><input type="text" name="cleg" value="<?php echo $fc[27];?>"></td>
							<td><input type="text" name="csholder" value="<?php echo $fc[28];?>"></td>
							<td><input type="text" name="cseat" value="<?php echo $fc[29];?>"></td>
							<td><input type="text" name="ccargo" value="<?php echo $fc[30];?>"></td>
							<td><input type="text" name="cinterior" value="<?php echo $fc[31];?>"></td>
							<td><input type="text" name="cftank" value="<?php echo $fc[32];?>"></td>
							<td><input type="submit" name="upbut1" value="Update" class="btn btn-prime btn-sm"></td>
							</tr>

							</form>
							<?php } 
							else{?>
						  <tr>
							<td><?php echo $fc[0];?></td>
							<td><?php echo $fc[1];?></td>
							<td><?php echo $fc[2];?></td>
							<td><?php echo $fc[3];?></td>
							<td><?php echo $fc[4];?></td>
							<td><?php echo $fc[5];?></td>
							<td><?php echo $fc[6];?></td>
							<td><?php echo $fc[7];?></td>
							<td><?php echo $fc[8];?></td>
							<td><?php echo $fc[9];?></td>
							<td><?php echo $fc[10];?></td>
							<td><?php echo $fc[11];?></td>
							<td><?php echo $fc[12];?></td>
							<td><?php echo $fc[13];?></td>
							<td><img src="f/<?php echo $fc[14];?>" style="width: 65px;height:60px;" ></td>
							<td><?php echo $fc[15];?></td>
							<td><?php echo $fc[16];?></td>
							<td><?php echo $fc[17];?></td>
							<td><?php echo $fc[18];?></td>
							<td><?php echo $fc[19];?></td>
							<td><?php echo $fc[20];?></td>
							<td><?php echo $fc[21];?></td>
							<td><?php echo $fc[22];?></td>
							<td><?php echo $fc[23];?></td>
							<td><?php echo $fc[24];?></td>
							<td><?php echo $fc[25];?></td>
							<td><?php echo $fc[26];?></td>
							<td><?php echo $fc[27];?></td>
							<td><?php echo $fc[28];?></td>
							<td><?php echo $fc[29];?></td>
							<td><?php echo $fc[30];?></td>
							<td><?php echo $fc[31];?></td>
							<td><?php echo $fc[32];?></td>
							<td><a href="panel.php?delete1=<?php echo $fc[0]; ?>"><i class="fas fa-trash">D</i></a>&nbsp; &nbsp; &nbsp;<a href="panel.php?update1=<?php echo $fc[0]; ?>"><i class="fas fa-pen" style="color: bluel">U</i></a></td>
						</tr>
						  <?php }} ?>
						</tbody>
					  </table>
					</div>
				  
			
				  <h3>User Registration</h3>
				  <table id="table-breakpoint">
					<thead>
					  <tr>
						<th>ID</th>
						<th>User Name</th>
						<th>Gender</th>
						<th>Birthday</th>
						<th>Email</th>
						<th>Password</th>
						<th>City</th>
						<th>Mobile</th>
						<th>User</th>
						<th>Operations</th>
					  </tr>
					</thead>
					<tbody>

						<?php
							$conne=mysqli_connect('localhost','root','','vi');
							$sr="select * from registration";
							$qry=mysqli_query($conne,$sr);
							while ($ftc=mysqli_fetch_row($qry)) {
						?>

					  <tr>
						<td><?php echo $ftc[0];?></td>
						<td><?php echo $ftc[1];?></td>
						<td><?php echo $ftc[2];?></td>
						<td><?php echo $ftc[3];?></td>
						<td><?php echo $ftc[4];?></td>
						<td><?php echo $ftc[5];?></td>
						<td><?php echo $ftc[6];?></td>
						<td><?php echo $ftc[7];?></td>
						<td><?php echo $ftc[8];?></td>
						<td><a href="#"><i class="fas fa-trash"></i></a>&nbsp; &nbsp; &nbsp;<a href="#"><i class="fas fa-pen" style="color: bluel"></i></a></td>
					  </tr>
					<?php } ?>
					 
					</tbody>
				  </table>

				  
			
				  <h3>Car Enquery</h3>

				 
				  <table id="table-force-off">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Brand</th>
						<th>Car Name</th>
						<th>Car Image</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Pin</th>
						<th>Comment</th>
						<th>Operations</th>
					  </tr>
					</thead>
					<tbody>
						<?php
						$econn=mysqli_connect('localhost','root','','vi');
						$esel="select * from enquiry";
						$eft=mysqli_query($econn,$esel);
						while ($ftch=mysqli_fetch_row($eft)) {
							?>
						
						
					  <tr>
						<td><?php echo $ftch[0];?></td>
						<td><?php echo $ftch[1];?></td>
						<td><?php echo $ftch[2];?></td>
						<td><img src="f/<?php echo $ftch[3];?>" style="width: 65px;height:60px;"></td>
						<td><?php echo $ftch[4];?></td>
						<td><?php echo $ftch[5];?></td>
						<td><?php echo $ftch[6];?></td>
						<td><?php echo $ftch[7];?></td>
						<td><?php echo $ftch[8];?></td>
						<td><a href="#"><i class="fas fa-trash"></i></a>&nbsp; &nbsp; &nbsp;<a href="#"><i class="fas fa-pen" style="color: bluel"></i></a></td>
					  </tr>
					<?php } ?>
					  
					</tbody>
				  </table>

				  

				  <h3>Feedback</h3>
				 <table id="table-max-height" class="max-height">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Website</th>
						<th>Feedback</th>
						<th>Operations</th>
						
					  </tr>
					</thead>
					<tbody>
						<?php 
						$fcon=mysqli_connect('localhost','root','','vi');
						$fsel="select * from feedback";
						$fcom=mysqli_query($fcon,$fsel);
						while ($ffet=mysqli_fetch_row($fcom)) { ?>
							
						

					
					  <tr>
						<td><?php echo $ffet[0];?></td>
						<td><?php echo $ffet[1];?></td>
						<td><?php echo $ffet[2];?></td>
						<td><?php echo $ffet[3];?></td>
						<td><?php echo $ffet[4];?></td>
						<td><a href="#"><i class="fas fa-trash"></i></a>&nbsp; &nbsp; &nbsp;<a href="#"><i class="fas fa-pen" style="color: bluel"></i></a></td>
					  </tr>
					<?php } ?>
					  
					</tbody>
				  </table>

				  

				  <h3>Test Drive</h3>
				 
				  <table id="table-no-resize">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Brand Name</th>
						<th>Car Name</th>
						<th>Date</th>
						<th>Mobile</th>
						<th>Time</th>
						<th>Operations</th>
					  </tr>
					</thead>
					<tbody>
						<?php
						$tcon=mysqli_connect('localhost','root','','vi');
						$tsel="select * from testdrive";
						$tcomb=mysqli_query($tcon,$tsel);
						while ($ftf=mysqli_fetch_row($tcomb)) { ?>
						
					  <tr>
						<td><?php echo $ftf[0];?></td>
						<td><?php echo $ftf[1];?></td>
						<td><?php echo $ftf[2];?></td>
						<td><?php echo $ftf[3];?></td>
						<td><?php echo $ftf[4];?></td>
						<td><?php echo $ftf[5];?></td>
						<td><?php echo $ftf[6];?></td>
						<td><?php echo $ftf[7];?></td>
						<td><a href="#"><i class="fas fa-trash"></i></a>&nbsp; &nbsp; &nbsp;<a href="#"><i class="fas fa-pen" style="color: bluel"></i></a></td>
					  </tr>

					<?php } ?>

					 
					</tbody>
				  </table>

				   <h3>Car Sell</h3>
				 
				  <table id="table-no-resize">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Brand</th>
						<th>Name</th>
						<th>Manufacture Year</th>
						<th>Seat</th>
						<th>Gear</th>
						<th>Drive Type</th>
						<th>Cylinder</th>
						<th>Fuel Type</th>
						<th>Car Model</th>
						<th>Body Type</th>
						<th>Doors</th>
						<th>Transmission</th>
						<th>Engine Type</th>
						<th>Engine Capacity</th>
						<th>Chassis Number</th>
						<th>Photo</th>
						<th>User Name</th>
						<th>Phone</th>
						<th>Comment</th>
						<th>Operation</th>
						
					  </tr>
					</thead>
					<tbody>
						<?php
						$secon=mysqli_connect('localhost','root','','vi');
						$sesel="select * from carsell";
						$secomb=mysqli_query($secon,$sesel);
						while ($setf=mysqli_fetch_row($secomb)) { ?>
						
					  <tr>
						<td><?php echo $setf[0];?></td>
						<td><?php echo $setf[1];?></td>
						<td><?php echo $setf[2];?></td>
						<td><?php echo $setf[3];?></td>
						<td><?php echo $setf[4];?></td>
						<td><?php echo $setf[5];?></td>
						<td><?php echo $setf[6];?></td>
						<td><?php echo $setf[7];?></td>
						<td><?php echo $setf[8];?></td>
						<td><?php echo $setf[9];?></td>
						<td><?php echo $setf[10];?></td>
						<td><?php echo $setf[11];?></td>
						<td><?php echo $setf[12];?></td>
						<td><?php echo $setf[13];?></td>
						<td><?php echo $setf[14];?></td>
						<td><?php echo $setf[15];?></td>
						<td><img src="f/<?php echo $setf[16]; ?>" style="width: 65px; height: 60px;"></td>
						<td><?php echo $setf[17];?></td>
						<td><?php echo $setf[18];?></td>
						<td><?php echo $setf[19];?></td>
						<td><a href="#"><i class="fas fa-trash"></i></a>&nbsp; &nbsp; &nbsp;<a href="#"><i class="fas fa-pen" style="color: bluel"></i></a></td>
					</tr>

					<?php } ?>

					 
					</tbody>
				  </table>
</body>
</html>