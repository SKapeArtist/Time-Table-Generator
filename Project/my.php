<html>
<link rel="stylesheet" href="ex.css" type="text/css"/>
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
<p class="t"></p>
<br>
<br>
<br>
<br>
<br>
<form action="allocation.php" method="post">
<table align="center" cellspacing=1 cellpadding=3 style="margin-top:0px">
<tr align="center"><td colspan=3>
<h2>Enter Your Data Below</h2></td></tr>
<tr>
<td>SUBJECT :            <select id="i" name="n" required="required">
<option></option>
<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn){
die(mysqli_error());
}
$db=mysqli_select_db($conn,"timetable");
$sub=mysqli_query($conn,"select * from subject");
while($row=mysqli_fetch_array($sub))
{
?>
	<option value="<?php echo $row['s_id']?>"><?php echo $row['sub_name'];?>
	</option>
	<?php
}

?>
</td>
</tr>
</select>
<tr>
<td><br>
</td></tr>
<tr>
<td>FACULTY :               <select id="id" name="na" required="required">
<option></option><br>
<?php
$sub=mysqli_query($conn,"select * from faculty");
while($row=mysqli_fetch_array($sub))
{
?>
	<option value="<?php echo $row['f_id']?>"><?php echo $row['f_name'];?>
	</option>
	<?php
} 

?>
</td>
</tr>
</select>
<tr>
<td><br>
</td></tr>
<tr>
<td>
<input  type="submit" value="Submit">                         
<input  type="reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>