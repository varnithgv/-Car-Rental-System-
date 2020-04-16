<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$username=$_GET['username'];
if(isset($_POST['submit']))
{
@$a=$_POST['username'];
@$b=$_POST['password'];
@$sql="Select * from signup where username='$a' AND password='$b'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$c=mysqli_num_rows($res);
if($c==1){
$_SESSION['username']=$a;
$a=$_SESSION['username'];
header("location:cars.php");
}
else{
  echo "<script>alert('Incorrect Username or Password');</script>";
}	
}
?>

