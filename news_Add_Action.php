<?php
include("head.html");

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
$query = "INSERT INTO newsly (imageurl, title, description) VALUES ('$imageurl', '$title', '$description')";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "ذخیره شد.";
} else {
    echo "ذخیره نشد.";
}
mysqli_close($connect);
include("foot.html");
?>
