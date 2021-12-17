<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $harga = $_POST['price'];
    $targetPath = "upload/";
    $targetPath = $targetPath . basename($_FILES['foto']['name']);

    if(move_uploaded_file($_FILES['foto']['tmp_name'], $targetPath)){
    $query = "UPDATE product SET product_name='$nama', harga='$harga', url_foto = '$targetPath'
    WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
        ?>
        <a href="homeCRUD.php"> Lihat data </a>
        <?php
    }
    else{
        echo "gagal update data" . mysqli_error($connect);
    }}
    ?>