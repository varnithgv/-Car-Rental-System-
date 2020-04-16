<?php
session_start();
$conn=mysqli_Connect('localhost','root','','reg');
@$id=$_GET['car_id'];

$sql="SELECT * FROM product_info";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
$_SESSION['car_id']=$id;
$id=$_SESSION['car_id'];
?>
