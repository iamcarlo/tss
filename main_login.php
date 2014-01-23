<?php
session_start();
if(session_is_registered(myusername)){
header("location:index.php?a=syslog");
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
<link rel="stylesheet" href="css_main_login.css" type="text/css" media="all">
        <center><marquee>UNDER CONSTRUCTION!...</marquee>
    <br><br><br>
<fieldset>
    <legend></legend>
<form action='phpchecklogin.php' method='post' name='form1' class='myform'>
<div class='elements'>
<label for='myusername'>Username :</label>
<input name='myusername' type='text' id='myusername'>
</div>
<div class='elements'>
<label for='mypassword'>Password :</label>
<input name='mypassword' type='password' id='mypassword'>
</div>
<div class='submit' align='center'>
<input type='submit' name='Submit' value='LOGIN' class='sab'>
</div>
</form>
</fieldset>
</center>
    </body>
</html>
