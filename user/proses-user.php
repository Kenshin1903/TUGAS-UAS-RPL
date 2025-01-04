<?php

require_once "../config.php"


//jika tombol d simpan
if (isset($_POST['simpan'])) {
    //ambil value elemen yang diposting
    $username   = trim(htmlspecialchars( $_POST['username']));
    $nama       = trim(htmlspecialchars($_POST['nama']));
    $jabatan    = $_POST['jabatan'];
    $alamat     = trim(htmlspecialchars($_POST['alamat']));
    $gambar     = trim(htmlspecialchars($_FILES['image']['nama']));
    $password   = 1234;
    $password   = password_hash($password, PASSWORD_DEFAULT);

    // cek username
    $cekUsername = mysqli_query($koneksi, "SELECT * FROM student WHERE 
    username = '$username'");
    if (mysqli_num_rows($cekUsername) > 0 ) {
        header("location:add-user.php?msg=cencel");
        return;
    }
    if ($gambar !== null) {
        $url = 'add-user.php';
        $gambar = uploading($url);
    } else {
        $gambar = 'ic_shop.png';
    }

    mysqli_query($koneksi, "INSERT INTO student VALUES(null, '$username',
    '$pass','$nama','$alamat','$jabatan','$gambar') ");

    header("location:add-user.php?msg=added");
    return;
}

?>