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
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"timetable");
$x=mysqli_query($conn,"select sub_allocation_id from sub_allocation");
$sub=mysqli_query($conn,"select subject.sub_name from subject inner join sub_allocation on subject.s_id=sub_allocation.s_id");
$fac=mysqli_query($conn,"select faculty.f_name from faculty inner join sub_allocation on faculty.f_id=sub_allocation.f_id");
while($row=mysqli_fetch_array($sub))
{
$c[]=$row['sub_name'];
}
while($r=mysqli_fetch_array($x))
{
$id[]=$row['sub_allocation_id'];
}
while($ro=mysqli_fetch_array($fac)){
$d[]=$ro['f_name'];
}
if(isset($id))
$co=count($id)."<br>";
echo"<table border align=center cellpadding=2>
<tr>
<th rowspan=2> DAY </th>
<th colspan=6 rowspan=1> LECTURE TIMING </th> 
</tr>
<tr>
<th>9:00 to 10:00</th>
<th>10:00 to 11:00</th>
<th>11:10 to 12:10</th>
<th>12:10 to 1:10</th>
<th>1:40 to 2:40</th>
<th>2:40 to 3:40</th>
</tr>
<tr>
<th> MON </th>";

for($i=0;$i<=5;$i++){
$ran=rand(1,6);
$abc=mysqli_query($conn,"select s.sub_name,f.f_name from subject s, faculty f,sub_allocation sa where s.s_id=sa.s_id and f.f_id=sa.f_id and sub_allocation_id=$ran");
while($t=mysqli_fetch_array($abc)){
if($t['sub_name']!='\0' && $t['f_name']!='\0'){
echo "<td>" .$t['sub_name']."(".$t['f_name'].")</td>";
}
}
}
echo"</tr><tr>
<th> TUE </th>";
for($i=0;$i<=5;$i++){
$ran=rand(1,6);
$abc=mysqli_query($conn,"select s.sub_name,f.f_name from subject s, faculty f,sub_allocation sa where s.s_id=sa.s_id and f.f_id=sa.f_id and sub_allocation_id=$ran");
while($t=mysqli_fetch_array($abc)){
if($t['sub_name']!='\0' && $t['f_name']!='\0'){
echo "<td>" .$t['sub_name']."(".$t['f_name'].")</td>";
}
}
}
echo"</tr><tr>
<th> WED </th>";
for($i=0;$i<=5;$i++){
$ran=rand(1,6);
$abc=mysqli_query($conn,"select s.sub_name,f.f_name from subject s, faculty f,sub_allocation sa where s.s_id=sa.s_id and f.f_id=sa.f_id and sub_allocation_id=$ran");
while($t=mysqli_fetch_array($abc)){
if($t['sub_name']!='\0' && $t['f_name']!='\0'){
echo "<td>" .$t['sub_name']."(".$t['f_name'].")</td>";
}
}
}
echo"</tr><tr>
<th> THU </th>";
for($i=0;$i<=5;$i++){
$ran=rand(1,6);
$abc=mysqli_query($conn,"select s.sub_name,f.f_name from subject s, faculty f,sub_allocation sa where s.s_id=sa.s_id and f.f_id=sa.f_id and sub_allocation_id=$ran");
while($t=mysqli_fetch_array($abc)){
if($t['sub_name']!='\0' && $t['f_name']!='\0'){
echo "<td>" .$t['sub_name']."(".$t['f_name'].")</td>";
}
}
}
echo"</tr><tr>
<th> FRI </th>";
for($i=0;$i<=5;$i++){
$ran=rand(1,6);
$abc=mysqli_query($conn,"select s.sub_name,f.f_name from subject s, faculty f,sub_allocation sa where s.s_id=sa.s_id and f.f_id=sa.f_id and sub_allocation_id=$ran");
while($t=mysqli_fetch_array($abc)){
if($t['sub_name']!='\0' && $t['f_name']!='\0'){
echo "<td>" .$t['sub_name']."(".$t['f_name'].")</td>";
}
}
}
echo"</tr><tr>
<th> SAT </th>";
for($i=0;$i<=5;$i++){
$ran=rand(1,6);
$abc=mysqli_query($conn,"select s.sub_name,f.f_name from subject s, faculty f,sub_allocation sa where s.s_id=sa.s_id and f.f_id=sa.f_id and sub_allocation_id=$ran");
while($t=mysqli_fetch_array($abc)){
if($t['sub_name']!='\0' && $t['f_name']!='\0'){
echo "<td>" .$t['sub_name']."(".$t['f_name'].")</td>";
}
}
}
echo"</tr>
</table>";
?>
</body>
</html>
