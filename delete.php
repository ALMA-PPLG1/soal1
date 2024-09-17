<?php
include 'database.php';
$id = $_GET['id'];

mysqli_connect($data , "DELETE FROM data WHERE id='$id' ");
header("location:index.php");