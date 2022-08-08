<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title>COOL WATCHES</title>
    <link rel="stylesheet" href="./StyleSheet/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
      <div class="container">
        <div id="candea">
          <h1>COOL WATCHES.LK</h1></a>
        </div>

        

<div class="navbar">
	<a href="administration.php"><i class="fa fa-fw fa-user"></i>Administration</a>
            <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="about.php"><i class="fa fa-fw fa-rss"></i>About</a>
            <a href="admin.php"><i class="fa fa-fw fa-user"></i>Logout</a>
            
               
             </div>


        </header>
        <br/>
	</body>
	</html>

<?php

$con = mysqli_connect("localhost","root","","candea");

//select database


//perform sqk operations
$sql = "SELECT * FROM product";
$result = mysqli_query($con,$sql);

//print result

echo "<table  width=100% border=1 >";
echo "<tr bgcolor=green>";
echo "<th>PID</th>";
echo "<th>Description</th>";
echo "<th>Image</th>";
echo "<th>Price</th>";

echo "</tr>";
$count = 0;
$color =" white";
while($row = mysqli_fetch_array($result))
{
	$count++;
	if($count%2 ==0)
	{
		$color = "white";

	}
	else
	{
		$color ="Cyan";

	}
	echo "<tr bgcolor=$color>";
	echo "<td>$row[0] </td>";
	echo "<td>$row[1] </td>";
	echo "<td><img src=image/$row[2] width=300px height=250px /> </td>";//if we write like this-echo "<td>$row[3] </td>"; this will print image name only
	echo "<td>$row[3] </td>";
	
	echo "</tr>";
}

echo "</table>";
//close connection
mysqli_close($con);

?>

