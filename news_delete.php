<?php 
include("head.html");

$id=$_GET["id"];

$connect=mysqli_connect("localhost","root","","parsnovindb");
$result=mysqli_query($connect,"DELETE FROM `newsly` WHERE `id`='$id'");
mysqli_close($connect);
if($result===true){
    echo("حذف شد.");
}else{
    echo("حذف نشد.");
}
?>


<?php
include("foot.html");
?>