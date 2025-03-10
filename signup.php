<?php
$conn=new mysqli("localhost","root","","completed",3306);
mysqli_query($conn,"insert into kk(username,password,usertype) values('$_POST[username]','$_POST[password1]','$_POST[usertype]')");
?>
