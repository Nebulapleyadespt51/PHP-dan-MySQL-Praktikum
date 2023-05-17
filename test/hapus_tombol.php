<?php
require_once "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $query = "DELETE FROM tbl_crud WHERE NO=?";
        $t1 = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($t1, "i", $id);
        mysqli_stmt_execute($t1);
        
        if (mysqli_stmt_affected_rows($t1) > 0) {
            header("Location: Mahasiswa.php");
            exit;
        } else {
            echo "Data tidak ditemukan.";
        }
    } catch (Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
} else {
    header("Location: Mahasiswa.php");
    exit;
}

mysqli_close($conn);
?>