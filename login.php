<?php
$conn=new mysqli("localhost","root","","completed",3306);
$query="select*from kk where username='$_POST[username]'and password='$_POST[password]'";
echo $query;
$sql_result=mysqli_query($conn,$query);
echo"<br>";
print_r($sql_result);
echo"<br>";
    if($sql_result->num_rows>0){
       echo"login sucess";
$dbrow=mysqli_fetch_assoc($sql_result);

echo"<br>";
print_r($dbrow);
if($dbrow['usertype']=='vendor'){
     header("location:../completed//vendor/home.html");
}
else if($dbrow['usertype']=='customer'){
    header("location:../completed/customer/home.html");
}
}
else{
  echo  "login failed";
}
?>