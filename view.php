<html>
    <head>
        <style>
            .pdt-img{
                width:100%;
                height:70%;
            }
        </style>
    </head>
<?php
include "authgaurd.php";
include "../shared/connection.php";
include "menu.html";
$sql_result=mysqli_query($conn,"select* from product where owner=$_SESSION[userid]");
while($dbrow=mysqli_fetch_assoc($sql_result)){
//print_r($dbrow);
//echo"<br>";
echo"<div class='pdt'>
<div>$dbrow[name]</div>
<div>$dbrow[price]</div>
<img class='pdt-img' src='$dbrow[impath]'>
<div>$dbrow[detail]</div>
<div>
<div>
<a href='edit.php?pid=$dbrow[pid]'>
<button>edit</button>
</a>
<a href='delete.php?pid=$dbrow[pid]'>
<button>delete</button>
</a>
</div>
</div>
</div>";

}
?>