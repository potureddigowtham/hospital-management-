<?php
$con=mysql_connect("localhost","root","");
/*$a="create database hospital";
if(mysql_query($a,$con))
{
echo "database created";
}
else 
echo "database not created";*/
mysql_select_db("hospital",$con);
/*$b="create table records(pid varchar(10),pname varchar(10),age int(10),bloodgroup varchar(3),did varchar(10),dname varchar(10)
,specialisation varchar(20),visithours varchar(10),firstname varchar(20),lastname varchar(20),username varchar(10),password 
varchar(20))";
if(mysql_query($b,$con))
{
echo "table created";
}
else
echo "table not created";*/
$c="insert into records values(100,'kavitha',20,'Bp','12A','chandra','ortho','5to7','mohan','sai','sandeep','sapp')";
$d="insert into records values(101,'savitha',25,'Ap','13A','manoj','dental','5to9','harish','kumar','nanda','kumar')";
$e="insert into records values(102,'saritha',30,'Bn','14A','pradeep','entsplist','6to10','avinash','shetty','kutty','barath')";
mysql_query($c,$con);
mysql_query($d,$con);
mysql_query($e,$con);

?>