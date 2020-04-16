<?php
$conn=mysqli_Connect('localhost','root','','reg');
$sql="CALL contactSQL()";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>