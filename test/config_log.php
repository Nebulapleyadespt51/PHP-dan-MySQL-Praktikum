<?php 
include 'config.php';
$user = $_POST['Username'];
$pass = $_POST['Password'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE Username ='$user' AND Password = '$pass'");
$cek = mysqli_num_rows ($login);

if ($cek > 0) {
    session_start();
    $_SESSION['Username'] = $username;
    $_SESSION['status'] = "login berhasil, HORE! HORE!";
    header ("location: Mahasiswa.php");
}
else {
    echo "
        <script>
            alert('Login gagal');
            document.location.href='index.php';
        </script>
        ";
}

?>