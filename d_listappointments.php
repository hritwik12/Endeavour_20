<?php
	$db = new mysqli('localhost','root','','endeavour');
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
      <h3 id="heading">View Student Comments</h3>
	<?php 
if(isset($_POST['submit'])){
				$b=$_POST['name'];
$c=date();
$sql="select p_name,problem,time,date from appointments where d_name='{$name}' and date=$c;
		$res=$db->query($sql);
		if($res->num_rows > 0)
		{
			echo "<table>";
					echo "<tr>";
						echo "<th>SNO</th>";
						echo "<th>Patient Name</th>";
						echo "<th>Problem</th>";
						echo "<th>Time</th>";
						echo "<th>Date</th>";
					echo "</tr>";
					$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["p_name"]}</td>";
					echo "<td>{$row["problem"]}</td>";
					echo "<td>{$row["time"]}</td>";
					echo "<td>{$row["date"]}</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else
		{
			echo "<p class='error'>No Appointment Found</p>";
		}
}
	?><div id="center">
		   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		
			<label>Name</label>
			<input type="text" name="name" required>
				
			<button type="submit" name="submit">Search</button>
		  </form>
		</div>
	
    </div>
  </div>
  <div id="navigation">
   <?php include "admin_side_nav.php"; ?>
  </div>
  <div id="footer">

  </div>
</div>
</body>
</html>
