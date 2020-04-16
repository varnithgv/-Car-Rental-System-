<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$a=$_POST['image'];
@$b=$_POST['car_name'];
@$c=$_POST['rent'];
@$d=$_POST['reg_year'];
@$e=$_POST['fuel_type'];
@$f=$_POST['seats'];
@$g=$_POST['c1'];
@$h=$_POST['c2'];
@$i=$_POST['c3'];
$sql="INSERT INTO product_info(image,car_name,rent,reg_year,fuel_type,seats,ac,automatic_gear,air_bag) VALUES ($a','$b','$c','$d','$e','$f','$g','$h','$i')";
$res=mysqli_query($conn,$sql);
if($res){
    echo "<script>alert('successful');</script>";
}
else{
     echo "<script>alert('failed');</script>";
}
}
?>