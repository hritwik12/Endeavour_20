<?php
	$db = new mysqli("localhost","root","","endeavour");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-Book Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container"  style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
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
			$age=$_POST["age"];
		
		 $sql="INSERT INTO patient(username,password,name,mobile,mail,age)
		 VALUES ('{$uname}','{$pass}','{$name}','{$mob}','{$mail}','{$age}')";
					
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
		<label>Age</label>
		<input type="text" name="age" required>
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