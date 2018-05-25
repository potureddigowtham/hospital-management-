<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);
$a=$_POST['pid'];
$b=$_POST['pname'];
$d=$_POST['did'];
$e=$_POST['dname'];
$res="select * from records";
$c=mysql_query($res,$con);
echo "<table border=1 align='center'>";
echo "<tr>";
echo "<th>patientid</th>";
echo "<th>patientname</th>";
echo "<th>Age</th>";
echo "<th>Blood group</th>";
echo "<th>doctorid</th>";
echo "<th>doctorname</th>";
echo "<th>Specialisation</th>";
echo "<th>visiting hours</th>";
echo "</tr>";
while($row=mysql_fetch_array($c))
{
  if($row['pid']==$a && $row['pname']==$b && $row['did']==$d && $row['dname']==$e)
  {
  echo "<tr>";
  echo "<td>".$row['pid']."</td>";
  echo "<td>".$row['pname']."</td>";
  echo "<td>".$row['age']."</td>";
  echo "<td>".$row['bloodgroup']."</td>";
  echo "<td>".$row['did']."</td>";
  echo "<td>".$row['dname']."</td>";
  echo "<td>".$row['specialisation']."</td>";
  echo "<td>".$row['visithours']."</td>";
  echo "</tr>";
  }
  }
  ?>
  </body>
  </html>