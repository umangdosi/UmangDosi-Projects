<?php 
$Empid=$_POST['Employ'];
$Fname=$_POST['firstname']; 
$Lname=$_POST['lastname']; 
$Address=$_POST['area'];
$Gender=$_POST['sex'];
$Day=$_POST['day'];
$Month=$_POST['month'];
$Year=$_POST['year'];
$Contact=$_POST['Contact']; 
$Email=$_POST['Emailid']; 


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
$query = mysql_query("INSERT INTO emp_details (emp_id, first_name, last_name, emp_address, sex, dob_day, dob_month, dob_year, emp_emailid, emp_contactnumber) VALUES ('$Empid', '$Fname', '$Lname', '$Address', '$Gender', '$Day', '$Month', '$Year', '$Email', '$Contact')");
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
header('Location: http://localhost/HRMS/enteremployeedetails.html')
?>   
