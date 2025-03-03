<?php 
include("head.html");

$id = $_GET["id"];
$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "DELETE FROM newsly WHERE id='$id'");

if ($result) {
    echo "حذف شد.";
} else {
    echo "حذف نشد.";
}
mysqli_close($connect);
include("foot.html");
?>
