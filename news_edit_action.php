<?php 
include("head.html");

$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];

$imageurl = "";
if ($_FILES["image"]["error"] == 0) {
    $targetDir = "images/";
    $fileName  = $_FILES["image"]["name"];
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $imageurl = $targetFile;
}

$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
if ($imageurl != "") {
    $query = "UPDATE newsly SET imageurl='$imageurl', title='$title', description='$description' WHERE id='$id'";
} else {
    $query = "UPDATE newsly SET title='$title', description='$description' WHERE id='$id'";
}
$result = mysqli_query($connect, $query);

if ($result) {
    echo "ذخیره شد.";
} else {
    echo "ذخیره نشد.";
}
mysqli_close($connect);
include("foot.html");
?>
