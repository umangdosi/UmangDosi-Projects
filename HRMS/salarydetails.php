<?php
$Empid=$_POST['empid'];
$Fname=$_POST['fname']; 
$Pay=$_POST['pay']; 
$connection = mysql_connect("localhost", "root", ""); 
if(!$connection) 
{
die("Connection failed " . mysql_error());
}
$db_conn = mysql_select_db("hrmanagement", $connection);
if(!$db_conn)
{
die("Connection failed " . mysql_error());
}
$query = mysql_query("INSERT INTO emp_details (salary) VALUES ('$Pay') WHERE emp_id=".$Empid);
$db_result = mysql_query($query, $connection);
if($db_result)
{
echo "Data Saved Succesfully";
}
else
{
echo "Data Saved Succesfully";
}
mysql_close($connection);
//header('Location: http://localhost/HRMS/salary.html')
?>   


