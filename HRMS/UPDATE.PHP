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
$query = mysql_query("UPDATE  `hrmanagement`.`emp_details` SET  `first_name` =  '$Fname','last_name' = '$Lname','emp_address' = '$Address','sex' = '$Gender','dob_day' = '$Day','dob_month' = '$Month','dob_year' = '$Year','emp_contactnumber' = '$Contact','emp_emailid' = '$Email' WHERE  `emp_details`.`emp_id` =".$Empid);
$db_result = mysql_query($query, $connection);
if($db_result)
{
echo "Data Updated";
}
else
{
echo "Updatio Failed";
}
mysql_close($connection);
header('Location: http://localhost/HRMS/update.html')
?>   
