<html>
<link rel="stylesheet" href="ex.css">
<body align="center">
<h1>Timetable Generator</h1>
<ul id="nav">
			<li><a href="my.php">Home</a></li>
			<li><a href="demo3.php">TimeTable</a></li>
			<li class="sub"><a href="#">Details</a>
                <ul>
                	                	<li><a href="isub.php">Subject</a></li>
                	<li><a href="fi.php">Faculty</a></li>
                	
                </ul>
            </li>
			<li class="sub"><a href="#">Insert Data</a>
                <ul>
                	                	<li><a href="isub.php">Subject</a></li>
                	<li><a href="fi.php">Faculty</a></li>
                </ul>
            </li>
			<li><a href="login.php">Log Off</a></li>
		</ul>
<p class=" t "></p>
<br>
<br>
<br>
<br>
<br>
<table align="center" border=1 cellspacing=0 cellpadding=7>
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"timetable");
$sub=mysqli_query($conn,"select * from subject");
echo "<tr><th>SUBJECT ID</th><th>SUBJECT NAME</th><th>SUBJECT CODE</th>";
while($row=mysqli_fetch_array($sub))
{
echo "<tr><td>".$row['s_id']."</td>"."<td>".$row['sub_name']."</td>"."<td>".$row['sub_code']."</td></tr>";
}
?>
</table>

</body>
</html>
