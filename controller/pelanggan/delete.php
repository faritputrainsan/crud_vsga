<?php

include '../config.php';

$id_ = $_GET['id_pelanggan'];

$query = "DELETE from pelanggan where id_pelanggan='$id_'";

mysqli_query($conn, $query);

header('location:../../view/pelanggan/index.php');
