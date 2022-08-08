<?php
$con = mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");
$id=$_GET['id'];
$sql = "delete FROM product where id ='$id'";
$data=mysqli_query($con,$sql);
if ($data) {
	echo "Product deleted successfully !";
}
else
{

}
?>