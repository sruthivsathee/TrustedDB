<?php
$data="http://allievo.in/SERVER_FLODER/enc/dataset_iris.sql";

echo $data;
//$data=$_REQUEST['link'];
$theData = file_get_contents($data);
$data=trim($data);
echo "<br>".$theData."<br>";

?>