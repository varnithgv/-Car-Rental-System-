<?php
$conn=mysqli_Connect('localhost','root','','reg');
@$sql1="select * from signup where username= '".$_SESSION["username"]."'";
$res=mysqli_query($conn,$sql1);
@$row=mysqli_fetch_array($res);
@$a=$row['Name'];
@$b=$row['username'];
@$c=$row['Email'];
@$d=$row['password'];
@$e=$row['city'];
?>