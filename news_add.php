<?php
include("head.html");
?>
<form action="news_add_action.php" method="post" enctype="multipart/form-data" class="row">
    <input type="file" name="image" class="col-12 col-md m-1" placeholder="تصویر">
    <input type="text" name="title" class="col-12 col-md m-1" placeholder="عنوان">
    <input type="text" name="description" class="col-12 col-md m-1" placeholder="توضیح">
    <input type="submit" value="ذخیره" class="col-12 col-md m-1">
</form>
<?php
include("foot.html");
?>