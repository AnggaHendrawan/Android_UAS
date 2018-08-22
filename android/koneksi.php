<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "mylogin";
$con = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()) {
echo "Gagal terkoneksi: " . mysqli_connect_error();
}
?>