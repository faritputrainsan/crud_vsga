<?php

    include '../config.php';

    $nama_pelanggan = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $username = $_POST['email'];
    $password = $_POST['pass'];

    $query = "INSERT INTO pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat='$alamat', jenis_kelamin='$jenis',
     username='$username', password='$password'";

    mysqli_query($conn, $query);
    header('location: ../../view/pelanggan/index.php');
