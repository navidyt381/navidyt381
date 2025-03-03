<?php 
include("head.html");

$id = $_GET["id"];
$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "SELECT * FROM newsly WHERE id='$id'");
$row = mysqli_fetch_array($result);
mysqli_close($connect);

$title = isset($row['title']) ? $row['title'] : "";
$description = isset($row['description']) ? $row['description'] : "";
$imageurl = isset($row['imageurl']) ? $row['imageurl'] : "";
?>
<form action="news_edit_action.php" method="post" enctype="multipart/form-data" class="row m-2">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="col-12 col-md m-1">
        <label>تصویر جدید (اختیاری): </label>
        <input type="file" name="image">
    </div>
    <div class="col-12 col-md m-1">
        <label>عنوان: </label>
        <input type="text" name="title" value="<?php echo $title; ?>" placeholder="عنوان" class="form-control">
    </div>
    <div class="col-12 col-md m-1">
        <label>شرح: </label>
        <input type="text" name="description" value="<?php echo $description; ?>" placeholder="شرح" class="form-control">
    </div>
    <div class="col-12 m-1">
        <input type="submit" value="ذخیره" class="btn btn-primary">
    </div>
</form>
<?php
include("foot.html");
?>
