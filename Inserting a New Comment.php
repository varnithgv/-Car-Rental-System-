<?php
$conn=mysqli_Connect('localhost','root','','reg');
if(isset($_POST['submit']))
{
@$a=$_POST['name'];	
@$b=$_POST['email'];
@$c=$_POST['contact_no'];
@$d=$_POST['message'];
$sql="INSERT INTO contact VALUES('','$a','$b','$c','$d')";
$res=mysqli_query($conn,$sql);
if($res){
  echo "<script>alert('message sent');</script>";
}
else{
  echo "<script>alert('message not sent');</script>";
}
}
?>