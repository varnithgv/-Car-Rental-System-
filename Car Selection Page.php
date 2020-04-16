<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$id=$_GET['car_id'];
@$sql="SELECT * FROM product_info";
@$x=$_POST['search'];
@$y=$_POST['range'];
@$u=$y;
if($y==2500){
    @$l=1000;
}
else if($y==499){
    @$l=0;
}
else if($y==799){
    @$l=500;
}
else if($y==999){
    @$l=800;
}
else{
    @$l=0;
    @$u=2500;
}

$sql="SELECT * FROM product_info WHERE (car_name LIKE '$x%') AND (rent BETWEEN $l AND $u)";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
    $_SESSION['car_id']=$id;
    $id=$_SESSION['car_id'];
?>
 