<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $harga = $_POST['price'];
    $targetPath = "upload/";
    $targetPath = $targetPath . basename($_FILES['foto']['name']);

    if(move_uploaded_file($_FILES['foto']['tmp_name'], $targetPath)){
    $sql= "INSERT INTO product(id, product_name, harga, url_foto)
    VALUES('$id', '$nama', '$harga', '$targetPath')";

    if(mysqli_query($connect, $sql)){
        echo "Data berhasil ditambahkan";
    }
    else{
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }
}
    mysqli_close($connect);
    ?>
    