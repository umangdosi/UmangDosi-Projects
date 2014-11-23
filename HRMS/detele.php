<?php 
$Empid=$_POST['Employ'];
$Fname=$_POST['firstname']; 
$Lname=$_POST['lastname'];  
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
$query = mysql_query("DELETE FROM emp_details WHERE emp_id =".$Empid);
$db_result = mysql_query($query, $connection);
mysql_close($connection);
header('Location: http://localhost/HRMS/delete.html')

?>   
