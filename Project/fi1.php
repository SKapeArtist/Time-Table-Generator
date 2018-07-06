<?php
$a=$_POST['fname'];
$b=$_POST['department'];
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db("timetable",$conn);
mysqli_query($conn,"insert into faculty(f_name,department) values('$a','$b')");
header("location:fi.php");
?>
<html>
<head>
<!--<meta http-equiv="refresh" content="0; url=my.php">!-->
</head>
</html>