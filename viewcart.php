<?php
include "authgaurd.php";
include "menu.html";
include "../shared/connection.php";
$sql_result= mysqli_fetch_assoc($conn,"select* from cart ");
while($dbrow=mysqli_fetch_assoc($sql_result)){
    print_r($dbrow);
    echo"<br>";
}

?>