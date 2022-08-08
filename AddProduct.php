<?php
if(isset($_POST["txtPID"]))
{
	//Acccept form data
	$id = $_POST["txtPID"];
	$desc = $_POST["txtDesc"];
	$price = $_POST["txtPrice"];
	$file_name = $_FILES["imgfile"]["name"];


	//save to mysql table
	$con = mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");

//select database


//perform sqk operations
$sql = "INSERT INTO product(id,description,image,price) VALUES('$id','$desc','$file_name','$price')";

if (mysqli_query($con,$sql))
{

//ob_end_flush();
echo "product added successfully";

}
else
{
echo "Error".mysqli_error($con);
}

mysqli_close($con);


//upload file
move_uploaded_file($_FILES['imgfile']['tmp_name'],"image/$file_name");
//imgfile is the name given to image in html
//images-folder name
//$file_name-variable
	// header('Location: viewproduct.php');







}


?>




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
            <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="about.php"><i class="fa fa-fw fa-rss"></i>About</a>
            <a href="admin.php"><i class="fa fa-fw fa-user"></i>Logout</a>
            
               
           </div>


        </header>
        <br/>

<body>
	<div id="cont">
          <div class="loginbox">
	<form name="frmProduct" method="post" action="#" enctype="multipart/form-data" >
		<table class="formtable">

		<p>PID : <p>        <input type="text" name="txtPID"><br>
		<p>Description :<p> <input type="text" name="txtDesc"> </input><br>
		<p>Price : <p>   <input type="text" name="txtPrice"><br/>
		<p>Image :   <p>    <input type="file" name="imgfile"><br>
		

		<input type="submit" name="btnSave" value="Save Data">
		<input type="reset" name="btnReset" value="Reset"><br>

		</table>
	</form>
</div>
</div>


</body>
</html>