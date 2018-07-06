<?php
$a=$_POST['sname'];
$b=$_POST['scode'];
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db("timetable",$conn);
mysqli_query($conn,"insert into subject(sub_name,sub_code) values('$a','$b')");
header("location:isub.php");
?>
<html>
<head>
<!--<meta http-equiv="refresh" content="0; url=my.php">!-->
</head>
</html>