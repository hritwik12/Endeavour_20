<?php
	session_start();
	$my= new mysqli("localhost","root","","endeavour");
	if($my)
	{
		//echo 'y';
	}
	else 
	{
		echo 'n';
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Appointment Booking Portal </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container"  style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"s><h1><a href="index.php">Appointment Booking Portal</a></h1></div>
  <div id="wrapper">
    <div id="content">
       <h3 id="heading">Doctor Login Here. </h3>
	    <?php
	if(isset($_POST['submit']))
		{
                        $red=$_POST['aname'];
			$re=$_POST['apass'];
			$sql='SELECT * FROM doctor';
			$query=mysqli_query($my,$sql);
			while($s=mysqli_fetch_row($query))
			{
				if($s[1]==$re && $s[0]==$red)
			{
				
				echo "<script>window.open('d_home.php','_self')</script>";
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>";
			}
			}
			//echo $sql;
			
		}
?>
		<div id="center">
		   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		
			<label>Username</label>
			<input type="text" name="aname" required>
				<label>Password</label>
			<input type="password" name="apass" required>
				
			<button type="submit" name="submit">Login Now</button>
		  </form>
		</div>
    </div>
  </div>
  <div >
   <?php include "i_nav.php"; ?>
  </div>
</div>
</body>
</html>