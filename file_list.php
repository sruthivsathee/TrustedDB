<?php
error_reporting(0);
$dir = "upload/";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
	echo $filename." - ".filesize($filename)."   <br>";
}
?>