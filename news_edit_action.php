<?php 
include("head.html");

$id=$_POST["id"];
$title=$_POST["title"];
$description=$_POST["description"];

$imageurl="images/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$connect=mysqli_connect("localhost","root","","parsnovindb");
$result=mysqli_query($connect,"UPDATE `newsly` SET `imageurl`='$imageurl',`title`='$title',`description`='$description' WHERE `id`='$id'");

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