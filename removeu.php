<?php
$con = mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");
$uname=$_GET['uname'];
$sql = "delete FROM admin where name ='$uname'";
$data=mysqli_query($con,$sql);
if ($data) {
	echo "User deleted successfully !";
}
else
{

}
?>