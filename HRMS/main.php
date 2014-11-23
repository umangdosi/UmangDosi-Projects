<?php 

$Fname=$_POST['name']; 
$Lname=$_POST['subject']; 
$Address=$_POST['message'];
$Email=$_POST['email'];
$depart=$_POST['feature'];


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
$query = mysql_query("INSERT INTO complaint (name, subject, message, email, department) VALUES ('$Fname', '$Lname', '$Address', '$Email', '$depart')");
$db_result = mysql_query($query,$connection);
if($db_result)
{
echo "Data Saved";
}
else
{
echo "Data Saved";
}
mysql_close($connection);
header('Location: http://localhost/HRMS/index.html')
?>   
