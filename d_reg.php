<?php
	$db = new mysqli("localhost","root","","endeavour");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Appointment Booking Portal</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container"  style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">Appointment Booking Portal</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <h3 id="heading">Register Here</h3>
	    <?php
	if(isset($_POST["submit"]))
		{
			$uname=$_POST["uname"];
			$pass=$_POST["pass"];
			$name=$_POST["name"];
			$mob=$_POST["mob"];
			$mail=$_POST["mail"];
			$specilization=$_POST["specilization"];
			$address=$_POST["address"];
			$degree=$_POST["degree"];
			$timing=$_POST["timing"];
			$fees=$_POST["fees"];
		
		 $sql="INSERT INTO doctor(username,password,name,mobile,mail,specilization,address,degree,timing,fees)
		 VALUES ('{$uname}','{$pass}','{$name}','{$mob}','{$mail}','{$specilization}','{$address}','{$degree}','{$timing}','{$fees}')";
					
			 if($db->query($sql))
			{
				echo "<p class='success'>User Registration Success.</p>";
			}
			else
			{
				echo "<p class='success'>Registration Failed.</p>";
			}

		}
?>
	<div id="center">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	
		<label>Username</label>
		<input type="text" name="uname" required>
			<label>Password</label>
		<input type="password" name="pass" required>
		<label>Name</label>
		<input type="text" name="name" required>
		<label>Mobile Number</label>
		<input type="text" name="mob" required>
			<label>E - Mail</label>
		<input type="email" name="mail" required>
		<label>Specilization</label>
		<input type="text" name="specilization" required>
		<label>Clinic Address</label>
		<input type="text" name="address" required>
		<label>Degree</label>
		<input type="text" name="degree" required>
		<label>Clinic Timings</label>
		<input type="text" name="timing" required>
		<label>Consultation Charges</label>
		<input type="text" name="fees" required>
		<button type="submit" name="submit">Save Details</button>
	  </form>
    </div>
    </div>
  </div>
  <div id="navigation">
   <?php include "i_nav.php"; ?>
  </div>

</div>
</body>
</html>
