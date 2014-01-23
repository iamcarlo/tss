<?php 

$cn = mysql_connect("localhost","root","1234");
if (!$cn) {die('Could not connect: ' . mysql_error());}
mysql_select_db("tssdb", $cn);

$ip_address       = $_SERVER['REMOTE_ADDR'] ;
$timestamp = date("Y-m-d H:i A"); 
$date_now           = date("Y-m-d");
$session_username   = $_SESSION['myusername']; 

### CHANGE PASSWORD SCRIPT
if(isset($_POST['btn_change_pw'])){
    $username = $_SESSION['myusername'];
    $opass    = ereg_replace("[^a-zA-Z0-9]","",$_POST['opass']);
    $npass    = ereg_replace("[^a-zA-Z0-9]","",$_POST['npass']);
    $rpass    = ereg_replace("[^a-zA-Z0-9]","",$_POST['rpass']);
    
    if(strlen($opass) == 0 || strlen($npass) == 0 || strlen($rpass) == 0){
        echo"
        <script LANGUAGE=\"JavaScript\"> 
            alert(\"Invalid password\");
            self.location=\"index.php?a=changepass&changepass=true\";
        </script>";          
        die();     
    }   
    
    if($npass != $rpass){  
        echo"
        <script LANGUAGE=\"JavaScript\"> 
            alert(\"The password you retyped does not match\");
            self.location=\"index.php?a=changepass&changepass=true\";
        </script>";          
        die();         
    }   
    
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$opass'";
    $result = mysql_query($query);     
    if(mysql_num_rows($result) <= 0){
        echo"
        <script LANGUAGE=\"JavaScript\"> 
            alert(\"Your old password is incorrect\");
            self.location=\"index.php?a=changepass&changepass=true\";
        </script>";       
        die(); 
    } 
    
    $query = "UPDATE users SET PASSWORD = '$npass' WHERE username = '$username' AND PASSWORD = '$opass'";  
    mysql_query($query);
    echo" 
    <script LANGUAGE=\"JavaScript\"> 
        alert(\"Password change completed successfully\");
        self.location=\"index.php\";
    </script>";        
    die(); 
}  

if(isset($_POST['add_button'])){
    $timestamp = date("Y-m-d H:i A");
    $task = ereg_replace("[^a-zA-Z0-9]","",$_POST['task']); 
    $prob = ereg_replace("[^a-zA-Z0-9]","",$_POST['prob']); 
    $sol = ereg_replace("[^a-zA-Z0-9]","",$_POST['sol']); 
    $query = "SELECT * FROM tasktb WHERE username = '$session_username'";  
    $result = mysql_query($query);
    
        $inserttask = "INSERT INTO tasktb VALUES ('id','$timestamp','$task','$prob','$sol','$session_username')";        
        mysql_query($inserttask); 
        echo"<script LANGUAGE='JavaScript'> self.location='index.php?a=home';</script>   ";}

