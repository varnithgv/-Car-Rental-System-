<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$sql="SELECT * FROM product_info WHERE car_id='".$_GET['car_id']."'"; 
if(@$_SESSION["username"]!="")  {
    @$user=$_SESSION["username"];
}
else{
    @$user="Null";
    header ('location: login.php');
}
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
@$i=$row['car_name'];
@$j=$row['rent'];
@$id=$row['car_id'];
if(isset($_POST['submit']))
{
@$A=$_POST['lease_duration'];
@$B=$_POST['total_rent'];
@$C=$_POST['contact_no'];
@$D=$_POST['delivery_date'];
@$E=$_POST['delivery_address'];
@$G=$_POST['payment_mode'];
$si="INSERT INTO booking(car_id, username, lease_duration, total_rent, contact_no, delivery_date, delivery_address, payment_mode, driver_id) VALUES('$id', '$user', '$A','$B','$C','$D','$E','$G','$id')";
$ri=mysqli_query($conn,$si);
if($ri==1){
 header("Location: ord_details.php?car_name=$i"); 
?>
<?php
}
else{
echo "not";
}
}
?>