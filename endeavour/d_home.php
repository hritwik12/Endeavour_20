<?php
	

	$my=new mysqli('localhost','root','','endeavour');

	session_start();
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-Book Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container" style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <p id="heading"> Welcome </p>
<?php
$sql= 'select count(p_name) from appointment';
			$query=mysqli_query($my,$sql);
while($s=mysqli_fetch_row($query))
{
}
echo $s;
?>
		<ul id="count">
			<li>Total Students : </li>
		</ul>
    </div>
  </div>
  <div id="navigation">
   <?php include "d_nav.php"; ?>
  </div>
</div>
</body>
</html>
