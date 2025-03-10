<?php
include "authgaurd.php";
include "menu.html";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class= "d-flex justify-content-center align-items-center vh-100">
 
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input class = "form-control" type="text" name="pname" placeholder="Product name">
        <input class ="form-control" type="number" name="pprice" placeholder="Product price">
        <textarea class= "form-control" name="pdetail" cols="40" rows="15" placeholder="product descr"></textarea>
                <input  name="pdtimg" type = "file" >
                <div class="text-center p-4">
                <button>upload</button>
</div>

</form>
</div>
</body>
</html>