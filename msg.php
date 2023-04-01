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

mysql_query("DELETE FROM msg WHERE id='$delid'") 
or die(mysqli_error());  
// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM msg") 
or die(mysql_error());  

echo "<table  id='select_table'>";
echo "<tr> <th>Sender IMEI No</th> <th>Receiver Mobile No</th> <th>Date Time</th> <th>Msg</th><th>Del</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	$id=$row['id'];
	
	echo $row['sender_imei_no']."</td><td>";
	echo $row['receiver_mobile_no']."</td><td>";
	echo $row['date_time']."</td><td>";
	echo $row['msg']."</td><td>";
	echo "<a href='?delid=$id'>Del</a></td></tr>";
}
	
	echo "</table>"; 
	
	?>
    </td>
  </tr>
</table>
