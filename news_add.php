<?php
include("head.html");
?>
<form action="news_add_action.php" method="post" enctype="multipart/form-data" class="row">
    <div class="col-12 col-md m-1">
        <label>تصویر: </label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="col-12 col-md m-1">
        <label>عنوان: </label>
        <input type="text" name="title" class="form-control" placeholder="عنوان">
    </div>
    <div class="col-12 col-md m-1">
        <label>توضیح: </label>
        <input type="text" name="description" class="form-control" placeholder="توضیح">
    </div>
    <div class="col-12 m-1">
        <input type="submit" value="ذخیره" class="btn btn-primary">
    </div>
</form>
<?php
include("foot.html");
?>
