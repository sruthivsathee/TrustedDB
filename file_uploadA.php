<?php
error_reporting(0);
	session_start();
	
	$user =$_SESSION['user'];

	if(isset($_POST['submit']))
	{
		$target_path = "upload/";
		$fname= basename( $_FILES['uploadedfile']['name']);
		$ff=str_replace(" ", "_", $fname);
		
		//$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
		$target_path = $target_path.$ff ; 
	//	echo "Path is : " . $target_path;
		
		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
		{
		//	echo "ddd";
			include('db/connection.php');
			$date=date("Y-m-d");
			//uploading file details to main cloud db
    		mysql_query("INSERT INTO file (path,title,status,date,remark)".
						" VALUES".
						"('$target_path','$_POST[title]','$user','$date','active') ") 
    		or die(mysql_error());
	
			//adding to backup db
			include('db/connection2.php');
			mysql_query("INSERT INTO file (path,title,status,date)".
						" VALUES".
						"('$target_path','$_POST[title]','$user','$date') ") 
    		or die(mysql_error());
	
	 
			include('db/connection.php');
			//encrypting and keeping file in server
			//header("location:server_file.php?link=http://aumentoglobal.com/TRUST_DB/$target_path");
			header("location:server_file.php?link=http://localhost/TRUST_DB/$target_path");
	//header("location:http://allievo.in/server_file.php?link=http://localhost/TRUST_DB/$target_path");
		    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    			 " has been uploaded successfully";
		} else{
    			echo "There was an error uploading the file, please try again!";
		}
	}
include("header.php");
	?>
<table width="1000" align="center" id="content" cellpadding="10">
<tr>
<td valign="top">
    <?php
		include("db/connection.php");
		if(isset($_POST['submit']))
		{
		
	

		
			}
		?>
<form enctype="multipart/form-data" action="" method="POST">

<table width="700" border="0" id="form_table">
<tr>
    <td>Title</td>
    <td><input type="text" name="title" /></td>
</tr>
<tr>
    <td>File Upload</td>
    <td><input type="file" name="uploadedfile" /></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Upload File" /></td>
    <td><input type="reset" name="reset" value="Clear" /></td>
</tr>
</table>

<?php
//removing specified file from directory
	$file=$_REQUEST['path'];
	echo $file;
	error_reporting();
	if($file!="")
	{
		if (!unlink($file))
  		{
 			 echo ("Error deleting $file");
  		}
		else
 		 {
  			 echo ("Deleted $file");
 		 }
	}
	error_reporting(0);
//deleting file details from main cloud db	
	$dir = "upload/";

	$delid=$_REQUEST['id'];

	mysql_query("UPDATE file SET remark = 'deleted' WHERE id='$delid'") or die(mysql_error());  
// Get the users uploaded files list from the "file" table
	$result = mysql_query("SELECT * FROM file ")
	 or die(mysql_error());  

	echo "<table  id='select_table'>";
	echo "<tr> <th>Name</th> <th>Type</th> <th>Date</th><th>View</th> <th>Del</th></tr>";

	while($row = mysql_fetch_array( $result ))
	{
		echo "<tr><td>"; 
		$id=$row['id'];
		echo $row['title'] ."$key</td><td>";
		echo $row['path']."</td><td>";
		echo $row['date']."</td>";
		echo "<td><a href='$row[path]' target='_blank'>view</a></td><td><a href='?id=$id'>Del</a></td><td>";
		echo "</tr>";
	}
	
	echo "</table>"; 	
?>