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
            </li>
		<li><a href="login.php">Log Off</a></li>
		</ul>
<p class=" t "></p>
<br>
<br>
<br>
<br>
<br>
<form action="fi1.php" method="post">
<table align="center">

<tr>
<td>Enter Faculty name :</td>
<td><input type="text" name="fname" required="required"></td>
</tr>
<tr>
<td>Enter Department :</td>
<td><input type="text" name="department" required="required"></td>
</tr>
<tr>
<td><input type="submit" value="Add"></td>
<td><input type="Reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>