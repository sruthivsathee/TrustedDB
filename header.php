<?php
session_start();
error_reporting(0);


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
margin-top:10px;
margin-right:20px;	
}
#user_div
{
float:right;
font-size:12px;	
}
#clear
{
clear:both;	
}
</style>
    
<div id="header">
<img src="logo2.png" style="margin-top:14px;margin-left:40px;">
<div id="login_form">
	<?php
		echo "<div id='user_div'>Welcome $_SESSION[seedblock]".$_SESSION['user']."</div>";
	?>
<br />

<?php
if($_SESSION['user']=="admin")
{
	?>
    <!--<a href="user.php">ADD EMPLOYEE</a>
    <a href="transaction_makerA.php">TRANSACTION MAKER</a> |-->
<a href="file_uploadA.php"> FILE UPLOAD</a> |
<a href="server_download2A.php">FILE DOWNLOAD</a> |
<a href="setting.php">SETTINGS</a> |
    <?php
}
else
{
?>
<!--<a href="userpanel.php">MY PROFILE</a> |-->
<a href="transaction_maker.php">TRANSACTION MAKER</a> |
<a href="file_upload.php">MY CLOUD / FILE UPLOAD</a> |
<a href="server_download2.php">MY BACK UP SERVER /FILE DOWNLOAD</a> |<br />
<?php
}
?>
<a href="index.php">LOG OUT</a> 
</div>
</div>
    