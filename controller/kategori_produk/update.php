<?php

    include '../config.php';

    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    $query = "UPDATE kategori_produk SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";

    mysqli_query($conn, $query);

    header('location:../../view/kategori_produk/index.php');
