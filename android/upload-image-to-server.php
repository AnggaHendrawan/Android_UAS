<?php
include 'koneksi.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$DefaultId = 0;
$ImageData = $_POST['image_data'];
$ImageName = $_POST['image_tag'];
$Nim = $_POST['nim'];
$NoHp = $_POST['nohp'];
$Tanggal = $_POST['tanggal'];
$str=$ImageName;
$underscore=str_replace(" ", "_", $str);
$ImagePath = "upload/$underscore.jpg";
$ServerURL = "$ImagePath";
$InsertSQL = "INSERT INTO imageupload (image_path,image_name,nim,nohp,tanggal)
values('$ServerURL','$ImageName','$Nim','$NoHp','$Tanggal')";
if(mysqli_query($con, $InsertSQL)){
file_put_contents($ImagePath,base64_decode($ImageData));
echo "Your Image Has Been Uploaded.";
}
mysqli_close($con);
}else{
echo "Please Try Again";
}
?>