<?php
	session_start();
	 date_default_timezone_set("Asia/Calcutta"); 
	include('db/connection.php');
	$tbl_name="account";  

	// username and password sent from Login form 
	$myusername = $_POST['UserName']; 
	$mypassword = $_POST['Password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	//echo $mypassword.$myusername."llllllllllllllllllllllllll";
	if(isset($_POST['login']))
	{
		
	//	echo $mypassword.$myusername;
		if($myusername=="admin" && $mypassword=="admin")
		{
			$_SESSION['user'] = $myusername;
		header("location:adminpanel.php");	
		echo "admin page";
		}
		
		$sql    = "SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
		$result = mysql_query($sql);
		$count  = mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
		{
			// Register $myusername, $mypassword and redirect to file "login_success.php"
		$result = mysql_query("SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'")
 				or die('Could not connect: ' . mysql_error());

		while($row = mysql_fetch_array($result))
		{
			$type=$row['type'];
			include('db/connection2.php');
			$id=$row[id];
			$result = mysql_query("SELECT * FROM account where user_id='$id'") or die(mysql_error());  
			$row = mysql_fetch_array($result);
	
			$_SESSION['seedblock'] = $row['seedblock'];	
			$_SESSION['user'] = $myusername;
   		    $_SESSION['permission'] =$permission;
//echo $_SESSION['user'];
//echo $_SESSION['pass'];
//session_register("myusername");
//session_register("mypassword"); 
//echo "sucess";
   			 $d = date('Y:m:d H:i:s');

  		     $ip= $_SERVER['REMOTE_ADDR'];
    	     $_SESSION['login_user']=$myusername;
//mysql_query("insert into log_in (user_name,date1,ip) values ('$myusername','$d','$ip')") or die ("Error ".mysql_error());
	
			header("location:userpanel.php");
		  }
		}
		else
		{
			if($myusername!="admin" && $mypassword!="admin")
		{
			header("location:index.php?a=1");
		}
		}
	}
?>
 
 



