<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
include ("phpfunctions.php"); 
?>



<link rel="stylesheet" href="css/loginform.css" type="text/css" media="all">
<link rel="stylesheet" href="css/ddcolortabs.css" type="text/css" media="all"> 
<script type='text/javascript' src='js/ddtabmenu.js'></script>
<script type='text/javascript'>
ddtabmenu.definemenu('ddtabs1', 0)
ddtabmenu.definemenu('ddtabs2', 1)
ddtabmenu.definemenu('ddtabs2', 2)

</script>
<div class='user_panel'>
<center>
<div class='mainhead'>  
<table width='900' border='0' class='topnav'>
<tr>
<td>
<span>:::::&nbsp; <a class='hehe'>Welcome <b>Sir <?php echo"$session_username"?>!</b></a> &nbsp;&nbsp;:::::</span>
</td>
<td align='right'>
<span class='cplo'>::::: &nbsp;
<a href='index.php?a=chap' class='cplo1'>Change Password</a> || <a href='phplogout.php' class='cplo2'>Logout</a>
         &nbsp; :::::</span>
</td>
</tr>
</table>
    <div class='header1'>
    <img src='logo.gif' class='tests'></img>
    </div>  
    <div id='ddtabs4' class='ddcolortabs'>
    <ul>
    <li><a href='index.php?a=home' rel='ct1'><span>HOME</span></a></li>
    <li><a href='index.php?a=add' rel='ct2'><span>ADD NEW TASK</span></a></li>
    <li><a href='index.php?a=syslog' rel='ct2'><span>SYSTEM LOG</span></a></li>
    </ul>
    </div>
    </div>
    <div class='ddcolortabsline'>&nbsp;</div>
</div>
</center>
<div class='content_container'>
<div class='content_header'>

<?php
switch ($_GET['a']) { 
case 'home':
echo"<br><center><h2 class='head'>WELCOME</h2></center>";
echo"<script LANGUAGE='JavaScript'>document.title = 'LLCC - Home';</script>";
include ("phphome.php");
    break;     
case 'add':
echo"<br><center><h2 class='head'>ADD NEW TASK</h2></center>";
echo"<script LANGUAGE='JavaScript'>document.title = 'LLCC - Add New Task';</script>";
include ("main.php");
    break;
case 'syslog':
echo"<br><center><h2 class='head'>SYSTEM LOG</h2></center>";
echo"<script LANGUAGE='JavaScript'>document.title = 'LLCC - Test Tab';</script>";
include ("phpsyslog.php");
    break;
case 'chap':
echo"<br><center><h2 class='head'>CHANGE PASSWORD</h2></center>";
echo"<script LANGUAGE='JavaScript'>document.title = 'LLCC - Change Password';</script>";
include ("phpchangepass.php");
    break;
default: 
echo"<script LANGUAGE='JavaScript'>document.title = 'LLCC TECHNICAL SUPPORT - LOGIN';</script>";              
include ("phphome.php");
    
}             
?>          
</div>