<?php
include 'database.php';

$id = $_POST ['Fid'];
$nama = $_POST ['Fnama'];
$jurusan = $_POST ['Fjurusan'];

mysqli_query ($data, "INSERT INTO data VALUES ('$id', '$nama', '$jurusan')");
header("location:index.php");
?>