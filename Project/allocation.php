<?php
$z=$_POST['n'];
$y=$_POST['na'];
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db("timetable",$conn);
mysqli_query($conn,"insert into sub_allocation(s_id, f_id) values($z,$y)");

header("location:my.php");
?>
<html>
<head>
<!--<meta http-equiv="refresh" content="0; url=my.php">!-->
</head>
</html>