<?php
include("header.php");
error_reporting();
$dir = "SERVER_FOLDER/enc";
$dh  = opendir($dir);
$seed = $_SESSION['seedblock'];
$user = $_SESSION['user'];
?>
<table id="form_table">
<tr>
<td>
	<form method="post" action="">
		Your Backup Files List : <select name="list" />
						 		 <option>Select File</option>
		<?php
		include("db/connection2.php");
		$result = mysql_query("SELECT * FROM file ") //owner
		or die(mysql_error());  

		// keeps getting the next row until there are no more to get
		while($row = mysql_fetch_array( $result )) 
		{
			$pathStr=$row['path'];
			$path=basename($pathStr);
			echo "<option value='$path'>".$path."</option>";
		}
		?>

		</select>
		<input type="submit" name="submit" />

	</form></td></tr></table>
	<?php
	
	$filename=$_POST['list'];//value selected from select list
	if(isset($_POST['submit']))
	{
		//$data="http://aumentoglobal.com/TRUST_DB/SERVER_FOLDER/enc/$filename";
		$data="http://localhost/TRUST_DB/SERVER_FOLDER/enc/$filename";
		echo "The Enc -filename is....". $data;
//$data="http://allievo.in/SERVER_FOLDER/enc/$filename";
//$data="http://allievo.in/SERVER_FOLDER/enc/dataset_iris.sql";
//echo $data;
//$data=$_REQUEST['link'];

		$theData = file_get_contents($data);
		$data=trim($data);
//echo "<br>".$data."<br>";

		$msg=$theData;
		$c=$msg;
		$mlen=strlen($msg);
	/*imp	include('db/connection2.php');
		$result = mysql_query("SELECT * FROM account") or die(mysql_error());  
		$row = mysql_fetch_array($result);
		$key=$row['seedblock'];	
    */
        $key=$seed;
		echo "key is : " .$key;
		$klen=strlen($key);
		$dd ="";
		if($mlen!=$klen)
		{
			while($klen<$mlen)
			{
				$dd=$dd.stringMaker();	
				$klen=strlen($dd);
			}
		}
//echo $klen."---".$mlen;
		$dd=$key.$dd;
		$newkey=substr($dd,0,$mlen);
		$newlen=strlen($newkey);
		$key=$newkey;
//$c = $msg^$key;
//echo $c."<br>";
//echo $newkey."<br>";
		$x=$c^$newkey; //c =file msg
//echo $x;

//download decrypted file from backup

		$myFile = "SERVER_FOLDER/dec/$filename";
		$fh = fopen($myFile, 'w') or die("can't open file");
		$stringData = $x;
		fwrite($fh, $stringData);
		fclose($fh);
		echo "<center><a href='$myFile' target='_blank'>Get Decrypted File Download</a></center>";


//copy restored file details to main cloud db
		$dest = "upload/".$filename;
		$src ="SERVER_FOLDER/dec/$filename";
		echo $src. "...The source";
	
		if(copy($src,$dest))
		{	
			echo "copied successfully";
		}
		else {
			echo "copy failed";
		}
		$date=date("Y-m-d");

		include('db/connection.php');
		$path = "upload/$filename";
		$updateQuery="update file set remark ='active',date ='$date' where path ='$path'".
		             " and status ='$user' and remark ='deleted' ";
		if(mysql_query($updateQuery))
		{
			echo "updated $filename in uploads successfully";
		}
		else{
			echo "failed to update in restored file";
		}
}

function stringMaker()
{
$data="00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000";
return $data;
}

	
?>