<?php
$conn=mysqli_Connect('localhost','root','','reg');
$sql="SELECT * FROM product_info WHERE car_id='".$_GET['car_id']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$a=$row['car_id'];
$b=$row['car_name'];
$c=$row['reg_year'];
$d=$row['fuel_type'];
$e=$row['seats'];
$f=$row['image'];
$g=$row['rent'];
$c1=$row['ac'];
$c2=$row['automatic_gear'];
$c3=$row['air_bag'];
?>
<?php
if(isset($_POST['submit']))
{
$car_name=$_POST['car_name'];
$reg_year=$_POST['reg_year'];
$fuel_type=$_POST['fuel_type'];
$seats=$_POST['seats'];
$image=$_POST['image'];
$rent=$_POST['rent'];
$a1=$_POST['x1'];
$a2=$_POST['x2'];
$a3=$_POST['x3'];
$sq="UPDATE product_info SET rent='$rent' ,seats='$seats' ,car_name='$car_name' ,reg_year='$reg_year' ,fuel_type='$fuel_type' ,ac='$a1' ,automatic_gear='$a2' ,air_bag='$a3' WHERE car_id='".$_GET['car_id']."'";
$rs=mysqli_query($conn,$sq);
if($rs)
{
   echo "<script> alert('successful');</script>";
}
else{
    echo "<script> alert('not');</script>";
}
}
?>