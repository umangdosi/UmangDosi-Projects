<?php
$Empid=$_POST['employeeid'];
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
	$query = "SELECT * FROM emp_details WHERE emp_id=".$Empid;
	$db_result = mysql_query($query, $connection);	
	?>
    <body background="images/11-origami-simple-yatch_11.JPG">
    <p class="p1"><a href="index.html">Home</a></p>
	<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Employee_id</th><br />
          <th>Employee_First_Name</th><br />
          <th>Employee_Last_Name</th><br />
          <th>Employee_Address</th><br />
          <th>Employee_Contact Number</th><br />
          <th>Employee_Email</th><br />
          <td>DateofBirth: Day</td><br />
          <td>DateofBirth: Month</td><br />
          <td>DateofBirth: Year</td><br />
          <td>Salary</td><br />
          
        </tr>
      </thead>
      <tbody>
      </body>
        <?php
          while( $row = mysql_fetch_array($db_result)){
            echo
            "<tr>
              <td>{$row['emp_id']}</td>
              <td>{$row['first_name']}</td>
			  <td>{$row['last_name']}</td>
              <td>{$row['emp_address']}</td>
              <td>{$row['emp_contactnumber']}</td>
              <td>{$row['emp_emailid']}</td>
              <td>{$row['dob_day']}</td> 
			  <td>{$row['dob_month']}</td> 
			  <td>{$row['dob_year']}</td>
			  <td>{$row['salary']}</td> 
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connection); ?>
