<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<!doctype html>
<html>
<head>
	<script>
		var toggle = function (obj) {
			var el = document.getElementById(obj);
			if (el.style.display !== 'none') {
				el.style.display = 'none';
			} else {
				el.style.display = '';
			
			}
		}
	</script>
        <link rel="stylesheet" href="cpform.css" type="text/css" media="all">
</head>




<body>

	<table width="900" align="center"><tr class="trouble" width="200px"><td>
<input type="checkbox" id="check" onclick="toggle('comments')"><span> TROUBLESHOOTING</span> <br/>
	</td></tr></table>
 
<?php 

echo"<div class='container'>    
<table border='0' align='center'>
<form action='index.php' method='post' class='myform'>
<br>
<!--
<tr>
    <td class='f1l'><p>Category :</p></td>
    <td><select name='userlevel' class='optgroup'>
  <optgroup label='Hardware'>
    <option value='1'>1111111</option>
    <option value='2'>2222222</option>
    <option value='3'>3333333</option>
    <option value='4'>4444444</option>
  </optgroup>
  <optgroup label='Software'>
    <option value='1'>1111111</option>
    <option value='2'>2222222</option>
    <option value='3'>3333333</option>
    <option value='4'>4444444</option>
  </optgroup>
    <optgroup label='Networking'>
    <option value='1'>1111111</option>
    <option value='2'>2222222</option>
    <option value='3'>3333333</option>
    <option value='4'>4444444</option>
  </optgroup>
  </select></td></tr>
<tr>

  <td class='f1l'><p>Priority :</p></td>
  <td>
    <div class='subject'>
    <input type='radio' name='priority' value='low'>Low&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='radio' name='priority' value='medium'>Medium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type='radio' name='priority' value='high'>High
    </div>
    </td>  
</tr>
-->
<tr colspan='2'>
<center><div>
<p>Task :</p><textarea name='task'></textarea>
</center></div>
</tr>
<tr colspan='2'><center>
<div id='comments' style='display:none'>
<p>Problem Encountered :</p><textarea name='prob'>None</textarea>
<p>Solution Applied :</p><textarea name='sol'>None</textarea>
</div>
</center>
</tr>
<tr><td class='add_button' align='center' colspan='2'>
<br><input type='submit' name='add_button' value='SAVE'></td></tr>
</table></div>";?>





</body>
</html>
