<?php
session_start();
if(!isset($_SESSION["login_status"])){
    echo"sucess";
    die;
}

if($_SESSION["login_status"]==false){
    echo"unauthorized acesbnms";
    
    die;
}
if($_SESSION['usertype']!="vendor"){
    echo"acess denied";
    die;

}
?>