<?php
include("head.html");

$title=$_POST["title"];
$description=$_POST["description"];

$imageurl="images/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
$connect=mysqli_connect("localhost","root","","parsnovindb");
$result=mysqli_query($connect,"INSERT INTO `newsly`(`imageurl`, `title`, `description`) VALUES ('$imageurl','$title','$description');");

mysqli_close($connect);
if($result===true){
    echo("ذخیره شد.");
}else{
    echo("ذخیره نشد.");
}
?>

<?php
include("foot.html");
?>