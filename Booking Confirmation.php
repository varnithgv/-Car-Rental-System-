 
<?php 
$name=$_GET['car_name'];
$conn=mysqli_Connect('localhost','root','','reg');
$sql="SELECT D.contact_no,D.name,D.dl_no FROM driver_info D,product_info P         WHERE (P.car_name LIKE '$name%') and (D.car_id=P.car_id)";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
@$a=$row['name'];
@$b=$row['contact_no'];
@$c=$row['dl_no'];
?>