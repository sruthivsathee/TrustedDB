<?php
	include("header.php");
?>
<style>
body
{
margin:0px;	
background:#F2F2F2;

}

#form_table
{
margin:0px auto;
border:1px solid #ccc;
padding:10px;	
margin-top:10px;
}


#select_table
{
margin:0px auto;
border:1px solid #ccc;
padding:10px;	
margin-top:10px;
}

#form_table input[type="text"]
{
width:250px;	
margin-bottom:10px;
height:26px;
border:1px solid #CCC;
}
#form_table input[type="password"]
{
width:250px;	
margin-bottom:10px;
height:26px;
border:1px solid #CCC;
}

#form_table input[type="date"]
{
width:250px;	
margin-bottom:10px;
height:26px;
border:1px solid #CCC;
}

#form_table input[type="submit"]
 {
        -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        background-color:#F5E347;
        
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:7px;
        
        border:1px solid #CCFF00;
        
        display:inline-block;
        color:#000;
        font-family:Trebuchet MS;
        font-size:17px;
        font-weight:bold;
        padding:6px 11px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #8f7f24;
}
 
  /*      background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fbb450), color-stop(1, #f89306));
        background:-moz-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-webkit-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-o-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:-ms-linear-gradient(top, #fbb450 5%, #f89306 100%);
        background:linear-gradient(to bottom, #fbb450 5%, #f89306 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89306',GradientType=0);*/
        
  #form_table input[type="reset"]
 {
        -moz-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffe0b5;
        box-shadow:inset 0px 1px 0px 0px #ffe0b5;
     
        background-color:#F5E347;
        
        -moz-border-radius:7px;
        -webkit-border-radius:7px;
        border-radius:7px;
        
        border:1px solid #CCFF00;
        
        display:inline-block;
        color:#000;
        font-family:Trebuchet MS;
        font-size:17px;
        font-weight:bold;
        padding:6px 11px;
        text-decoration:none;
        
        text-shadow:0px 1px 0px #8f7f24;
}

#select_table
{
margin-top:10px;	
border-spacing:0px;
width:750px;
}

#select_table th
{
	background:#5D81A6;
	color:#FFF;
}

#select_table tr:nth-child(even) {background: #CCC}
#select_table tr:nth-child(odd) {background: #FFF}
#header
{
width:100%;
height:100px;
background:#09F;	
color:#FFF;
font-size:36px;
font-family:Tahoma, Geneva, sans-serif;
}
#header a
{
color:#FFF;
font-size:12px;	
}
#menu_wrapper
{
background:#900;
color:#FFF;	
width:100%;
height:30px;
}
#menu
{
float:right;	
}


#menu a
{
font-family:Tahoma, Geneva, sans-serif;
text-decoration:none;
color:#FFF;
margin-right:10px;	
margin-top:4px;
padding:3px;
}

#content
{
font-family:"Arial Black", Gadget, sans-serif;
background:#FFF;
text-align:justify;
}
#login_form
{
float:right;
font-size:14px;
margin-top:40px;
margin-right:20px;	
}

</style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
					name: 
					{
						required: true
					},
					email: 
					{
						required: true,
					    email: true	
					},
					amount: 
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

 



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
<table width="1000" align="center" id="content" cellpadding="10">
<tr>
 
    <td>
    <?php
	include('db/connection.php');
	if (isset($_POST['submit']))
	{
		$name     = $_POST['name'];
 		$adr      = $_POST['address'];
		$dob      = $_POST['dob'];
		$email    = $_POST['email'];
		$mobile   = $_POST['mobile'];
		$password = $_POST['password'];
		$key_no   = $_POST['key_no'];
	//Registering user with main cloud
	
		$qry  = "insert into account (name,address,dob,mobile,email,password,key_no)".
				" VALUES ".
	"('".$name."','".$adr."','".$dob."','".$mobile."','".$email."','".$password."','".$key_no."')";
		
		$data = mysql_query($qry) or die(mysql_error());
	
		$myid = mysql_insert_id();
	//Keeping seed block in remote cloud
	
	    include('db/connection2.php');
	    $rand=rand(100,10000);
	    echo $myid."---------".$rand;
	
	    $seedblock=$rand*$myid;
	    $qry = "insert into account (user_id,seedblock) VALUES ('$myid','$seedblock')";
	mysql_query($qry) or die(mysql_error());
	echo "Successfully registered... Login now";
	}
	
	?>
    
    <a href="user_view.php">View User</a>
    
    <form action="" method="post"  name='register_form' id='register_form'>
    <table width="500"  id="form_table">
    <tr><th colspan="2">Get Register</th></tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address"/></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><input type="date" name="dob"></td>
  </tr>
  <tr>
    <td>Mobile</td>
    <td><input type="text" name="mobile"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
  </tr>
 
  <tr>
    
    <td><input type="submit" name="submit"></td>
    <td><input type = "reset" value = "Clear" /></td>
  </tr>
  
</table>

    </form>
    </td>
  </tr>
</table>
