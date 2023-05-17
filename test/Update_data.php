<?php
//koneksi database
require_once "config.php";

//mengambil data yang di-post dari form
$no = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$dosen = $_POST['dosen'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];

//query update data
$query = "UPDATE tbl_crud SET NIM='$nim', NAMA='$nama', Dosen='$dosen', Status='$status', Ket='$keterangan' WHERE NO='$no'";
$update = mysqli_query($conn, $query);

if ($update) {
    //redirect ke halaman dashboard.php setelah update berhasil
    header("Location: Mahasiswa.php");
    exit;
} else {
    echo "Update gagal coy.";
}

//menutup koneksi
mysqli_close($conn);
?>
