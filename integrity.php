<style>
#error
{
background:#F9C;	
}
</style>

<?php
$dir = "SERVER_FOLDER/enc";
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("trust_db2") or die(mysql_error());

if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
     
	  $md5=md5_file("SERVER_FOLDER/enc/$file");
	
	  
	  $result666 = mysql_query("SELECT * FROM integrity where path='SERVER_FOLDER/enc/$file' ") 
or die(mysql_error());
while($row666=mysql_fetch_array($result666))
{
	$k=2;
	$myhash=$row666['hash'];
}
	  
	  if($k!=2)
	  {
	  mysql_query("INSERT INTO integrity 
(path,hash) VALUES('SERVER_FOLDER/enc/$file','$md5') ") 
or die(mysql_error());  
	  }
	  if($myhash==$md5)
	  {
		 echo "<div id='ok'>filename:" . $file . " $md5</div>";
	  }
	  else
	  {
	 echo "<div id='error'>filename:" . $file . " $md5</div>";
	  }
	  
	  
    }
    closedir($dh);
  }
}
?>