<?php
	include("header.php");
?>
<table width="1000" align="center" id="content" cellpadding="10">
<tr>
<td valign="top">
	<?php
		include("db/connection.php");
	?>
	<?php
		$delid=$_REQUEST['delid'];
		mysql_query("DELETE FROM account WHERE id='$delid'") or die(mysqli_error());  
// Get all the data from the "account" table
		$result = mysql_query("SELECT * FROM account") or die(mysql_error());  

		echo "<table  id='select_table'>";
		echo "<tr> <th>Name</th> <th>Address</th> <th>DOB</th> <th>Mobile</th><th>E Mail</th>".
		     "<th>IMEI</th><th>KEY NO</th><th>Del</th></tr>";
// keeps getting the next row until there are no more to get
		while($row = mysql_fetch_array( $result ))
		{
			echo "<tr><td>"; 
			$id=$row['id'];	
			echo $row['name']."</td><td>";
			echo $row['address']."</td><td>";
			echo $row['dob']."</td><td>";
			echo $row['mobile']."</td><td>";
			echo $row['email']."</td><td>";
			echo $row['imei']."</td><td>";
			echo $row['key_no']."</td><td>";
			echo "<a href='?delid=$id'>Del</a></td></tr>";
		}
	
		echo "</table>"; 
	
	?>
    </td>
  	</tr>
</table>
