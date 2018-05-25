<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);
$a=$_POST['uid'];
$b=$_POST['pwd'];
$res="select username,password from records";
$c=mysql_query($res,$con);
while($row=mysql_fetch_array($c))
{
  if($row['username']==$a && $row['password']==$b)
  {
	header("Location:http://localhost/hosp/3.html");
	}
	else
	{
	  header("Location:http://localhost/hosp/1.html");
	  }
}
?>

	