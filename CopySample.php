<?php
		$filename = "Forest.jpg";
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
?>