<?php
 $conn=mysqli_Connect('localhost','root','','reg');
 if(isset($_POST['submit']))
 {
@$name=$_POST['name'];
@$email=$_POST['email'];
@$username=$_POST['username'];
@$password=$_POST['password'];
@$gender=$_POST['gender'];
@$city=$_POST['city'];
@$number=$_POST['number'];

$sql="Insert Into signup Values('$name','$email','$username','$password','$gender','$city','$number')";
$res=mysqli_query($conn,$sql);
  }
?>