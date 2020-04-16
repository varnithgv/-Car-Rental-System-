<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$a=$_POST['username'];
@$b=$_POST['password'];
$sql="Select * from admin where username='$a' AND password='$b'";
$res=mysqli_query($conn,$sql);
$c=mysqli_num_rows($res);
if($c==1){
  header('location:admin_home.php');
}
else{
  echo "not";
}
}
?>