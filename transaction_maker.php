<?php
error_reporting(0);
include("header.php");
?>
<table width="1000" align="center" id="content" cellpadding="10">
<tr>
<td valign="top">
<?php
	include("db/connection.php");
	include("encryption.php");
	if(isset($_POST['submit']))
	{
		include('db/connection2.php');
		$result = mysql_query("SELECT * FROM settings where stype='$_POST[data_type]'") 
		or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$discount=$row['discount'];	
		$tax=$row['tax'];	
		$discount=$_POST['amt']*$discount;
		$tax=$tax*$discount;
		
		$key=$_SESSION['seedblock'];



$key = "E4HD9h4DhS23DYfhHemkS3Nf";// 24 bit Key
$iv = "fYfhHeDm";// 8 bit IV
$input = "Text to encrypt";// text to encrypt
$bit_check=8;// bit amount for diff algor.

//$str= encrypt($input,$key,$iv,$bit_check);
//echo "Start: $input - Excrypted: $str - Decrypted: ".decrypt($str,$key,$iv,$bit_check);




		$discount=encrypt($discount,$key,$iv,$bit_check);
		$tax=encrypt($tax,$key,$iv,$bit_check);

		//echo decrypt($tax,"$key", $salt='!kQm*fF3pXe1Kbm%9');
		include('db/connection.php');
		mysql_query("INSERT INTO transation_maker ".
					"(name, data_type,date1,amt,location,discount,tax,user)".
					"VALUES".
		            "('$_POST[name]','$_POST[data_type]','$_POST[date1]','$_POST[amt]','$_POST[location]',".
		        	" '$discount','$tax','$_SESSION[user]' ) ") 
        or die(mysql_error());
		
	}
?>





  
    <script type="text/javascript" src="jquery_002.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
jQuery.validator.addMethod("notEqual", function(value, element, param) {return this.optional(element) || value != param;}, "Please enter your name");
			$(document).ready(function() {
			$("#register_form").validate({
				submitHandler:function(form) 
				{
					SubmittingForm();
				},
				rules: 
				{
					mobile: 
					{
						required: true,
						number: true			
					},// simple rule, converted to {required:true}
					name
					: 
					{
						required: true
					},
					email: 
					{
						required: true,
					    email: true	
					},
					amt: 
					{
						required: true,
					    number: true	
					},
					remark: 
					{
						required: true	
					},
					comment: 
					{
						required: true
					}
					},
					messages: 
					{
						comment: "Please enter a comment."
					}
			});	
		});	
</script>

<link type="text/css" href="jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
	$('#t').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript">
$(function() {
	$('#tt').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>


















<form action="" method="post"  name='register_form' id='register_form'>

<table width="700" border="0" id="form_table">
  <tr>
    <td>Name</td>
    <td><input type='text' name='name' /></td>
  </tr>
  <tr>
    <td>Type</td>
    <td><input type='text' name='data_type' /></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><input type='text' name='date1'id='t' /></td>
  </tr>
  <tr>
    <td>Amount</td>
    <td><input type='text' name='amt' /></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input type="text" name="location" /></td>
  </tr> 
  <tr>
    <td ><input type="submit" name="submit" /></td>
    <td ><input type="reset" value="Clear" /></td>
  </tr>
</table>

<?php
	$delid=$_REQUEST['delid'];
	mysql_query("DELETE FROM transation_maker WHERE id='$delid'") 
	or die(mysqli_error());  
// Get all the data from the "example" table
	$result = mysql_query("SELECT * FROM transation_maker where user='$_SESSION[user]'") 
	or die(mysql_error());  

	echo "<table  id='select_table'>";
	echo "<tr> <th>Name</th> <th>Data Type</th> <th>Date</th> <th>Amt</th><th>Dis</th><th>Tax</th>".
	     "<th>Location</th><th>Del</th></tr>";
// keeps getting the next row until there are no more to get
	while($row = mysql_fetch_array( $result ))
	{
		echo "<tr><td>"; 
		$id=$row['id'];	
		echo $row['name'] ."$key</td><td>";
		echo $row['data_type']."</td><td>";
		echo $row['date1']."</td><td>";
		echo $row['amt']."</td><td>";
		echo $row['discount']."</td><td>";
		echo $row['tax']."</td><td>";
		//echo decrypt($row['discount'],$key,$iv,$bit_check)."</td><td>";
		//echo decrypt($row['tax'],$key,$iv,$bit_check)."</td><td>";
		echo $row['location']."</td>";
		echo "<td><a href='?delid=$id'>Del</a></td></tr>";
	}
	
	echo "</table>"; 
	
?>
</td>
</tr>
</table>
