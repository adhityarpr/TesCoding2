<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$NPWP           = $_POST['NPWP'];
$NamaWP          = $_POST['NamaWP'];
$Alamat       = $_POST['Alamat'];
$Email       = $_POST['Email'];
$NoTelepon       = $_POST['NoTelepon'];

//query insert data ke dalam database
$query = "INSERT INTO wajibpajak_data (NPWP, NamaWP, Alamat, Email, NoTelepon) VALUES ('$NPWP', '$NamaWP', '$Alamat', '$Email', $NoTelepon')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: menuindex.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>