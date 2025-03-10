 <?php 
print_r($_POST);
echo"<br>";
print_r($_FILES['pdtimg']);
$source=$_FILES['pdtimg']['tmp_name'];
$target="../shared/images/".$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);

?>