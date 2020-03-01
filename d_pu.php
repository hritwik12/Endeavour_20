<?php
	$db = new mysqli('localhost','root','','endeavour');
	session_start();
//	if(!isset($_SESSION["ID"]))
//	{
//		echo "<script>window.open('user_login.php','_self')</script>";
//	}
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
      <h3 id="heading">Change Password</h3>
		<div id="center">
	<?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM doctor WHERE username='{$_POST["username"]}' and Name='{$_POST['name']}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$s="update doctor set fees='{$_POST["fees"]}',address='{$_POST["address"]}',mobile='{$_POST["mobile"]}',mail='{$_POST["email"]}' WHERE Name='{$_POST['name']}' and username='{$_POST["username"]}'";
				$db->query($s);
				echo "<p class='success'>Profile Changed Successfully.<p>";
			}
			else
			{
				echo "<p class='error'>Invalid ID</p>";
			}

		}
	?>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<br><br><label>Username</label>
			<input type="text" name="username" required><br>
			<label>Name</label>
			<input type="text" name="name" required><br>
			<label>Fees</label>
			<input type="text" name="fee" required><br>
			<label>Address</label>
			<input type="text" name="address" required><br>
			<label>Mobile</label>
			<input type="text" name="mobile" required><br>
			<label>E-mail id</label>
			<input type="email" name="email" required><br>
			<input type="reset" name="reset"></input>
			<button type="submit" name="submit">Update Now</button>
			</form>
		</div>
    </div>
  </div>
  <div id="navigation">
   <?php include "d_nav.php"; ?>
  </div>
  <div id="footer">

  </div>
</div>
</body>
</html>
