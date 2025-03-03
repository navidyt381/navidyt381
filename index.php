<?php
include("head.html");
?>

<div class="row">
    <p class="col">
        <span class="fw-bold">لیست اخبار</span>
    </p>
</div>

<?php
$connect = mysqli_connect("localhost", "root", "", "parsnovindb");
$result = mysqli_query($connect, "SELECT * FROM newsly");
while ($row = mysqli_fetch_array($result)) {
?>
<div class="row m-1">
    <img src="<?php echo $row['imageurl']; ?>" alt="باز نشد" class="col-12 img-thumbnail">
    <div class="col-12">
        <span class="h5 fw-bold"><?php echo $row['title']; ?></span>
    </div>
    <span class="col-12 h6"><?php echo $row['description']; ?></span>
</div>
<?php
}
mysqli_close($connect);
include("foot.html");
?>
