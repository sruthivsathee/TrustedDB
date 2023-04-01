<?php
	include("db/connection.php");
$tags = get_meta_tags('https://www.youtube.com/watch?v=04U9ikKZ8ZY');


echo "Keyword :".$tags['keywords'];    
echo "<br>Description :".$tags['description']; 

$tag=$tags['description'];
$result = mysql_query("SELECT * FROM category1") 
or die(mysql_error());  
while($row = mysql_fetch_array( $result )) 
{
	$cat=$row['ctype'];
	$cat = strtolower($cat);
	$tag = strtolower($tag);
	
	if (strpos($tag,$cat) !== false) {
    echo "<br>".'true - '.$cat;
}
	
	
}

?>