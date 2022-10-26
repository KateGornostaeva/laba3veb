<?php
$title="Cat breeds";

$today= date("d.m.y");
$time = date("G:i:s");

$s = date("s");
$os = (int)$s % 2;

$img1;

if($os == 0){
    $img1 = "cat";
} else {
    $img1 = "cat2";
}
?>

<?php require("components/header.php")?>
<?php require("components/main.php")?>
<?php require("components/footer.php")?>