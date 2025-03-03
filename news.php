<?php
include("head.html");
?>
<div class="row">
    <p class="col">
        <a href="news_add.php" class="link-underline-light fw-bold">+</a>
        <span class="fw-bold">لیست اخبار</span>
    </p>
</div>
<?php
$connect=mysqli_connect("localhost","root","","parsnovindb");
$result=mysqli_query($connect,"SELECT * FROM `newsly`");
mysqli_close($connect);
$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row m-1">
    <img src="<?php echo($row["imageurl"]); ?>" alt="" class="col-12  img-thumbnail">
    <div class="col-12 ">
        <a href="news_edit.php" class="link-underline-light fw-bold">*</a>
        <a href="news_delete.php" class="link-underline-light fw-bold">-</a>
        <span class="h5 fw-bold"><?php echo($row["title"]); ?></span>
    </div>
    <span class="col-12  h6"><?php echo($row["description"]); ?></span>
</div>
<?php
$row=mysqli_fetch_all($result);
}
include("foot.html");
?>