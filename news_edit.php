<?php 
include("head.html");
$id=$_GET["id"];
$connect=mysqli_connect("localhost","root","","parsnovindb");
$result=mysqli_query($connect,"SELECT * FROM `newsly` WHERE `id`='$id'");
mysqli_close($connect);
$row=mysqli_fetch_array($result);
$title="";
$description="";
$imageurl="";
if($row){
    $title=$row["title"];
    $description=$row["description"];
    $imageurl=$row["imageurl"];
}
?>
<form action="news_edit_action.php" method="post" enctype="multipart/form-data" class="row m-2">
    <input type="text" name="id" hidden value="<?php echo($id); ?>" class="col-12 col-md m-1" placeholder="عنوان">
    <input type="file" name="image" class="col-12 col-md m-1" placeholder="تصویر">
    <input type="text" name="title" hidden value="<?php echo($title); ?>" class="col-12 col-md m-1" placeholder="عنوان">
    <input type="text" name="description" hidden value="<?php echo($description); ?>" class="col-12 col-md m-1" placeholder="شرح">
    <input type="submit" value="ذخیره" class="col-12 col-md m-1" placeholder="عنوان">
</form>
<?php
include("foot.html");
?>