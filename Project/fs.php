<html>
<link rel="stylesheet" href="ex.css">
<body align="center">
<h1>Timetable Generator</h1>
<ul id="nav">
			<li><a href="my.php">Home</a></li>
			<li><a href="demo3.php">TimeTable</a></li>
			<li class="sub"><a href="#">Details</a>
                <ul>
                	<li><a href="ss.php">Subject</a></li>
                	<li><a href="fs.php">Faculty</a></li>
                	
                </ul>
            </li>
			<li class="sub"><a href="#">Insert Data</a>
                <ul>
                	                	<li><a href="isub.php">Subject</a></li>
                	<li><a href="fi.php">Faculty</a></li>
                </ul>
                <li><a href="login.php">Log Off</a></li>
            </li>
			
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
$sub=mysqli_query($conn,"select * from faculty");
echo "<tr><th>FACULTY ID</th><th>FACULTY NAME</th><th>DEPARTMENT</th>";
while($row=mysqli_fetch_array($sub))
{
echo "<tr><td>".$row['f_id']."</td>"."<td>".$row['f_name']."</td>"."<td>".$row['department']."</td></tr>";
}
?>
</table>
</body>
</html>
