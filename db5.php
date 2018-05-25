<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);
$a=$_POST['pname'];
$b=$_POST['age'];
$c=$_POST['bg'];
$d="select * from records";
$e=mysql_query($d,$con);
echo "<table border=1 align='center'>";
while($row=mysql_fetch_array($e))
{
  if($row['pname']==$a && $row['age']==$b && $row['bloodgroup']==$c)
  {
     echo "<tr>";
	 echo "<td>".$row['pname']."</td>";
	 echo "<td>".$row['age']."</td>";
	 echo "<td>".$row['bloodgroup']."</td>";
	 echo "<tr>";
	 }
	 }
	 echo "</table>";
 ?>
 </body>
 </html>