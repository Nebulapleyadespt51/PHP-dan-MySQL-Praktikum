<?php
// Menghubungkan ke database
require("config.php");

// Mengambil data dari tabel
$id = $_GET['id'];
$query = "SELECT * FROM tbl_crud WHERE NO='$_GET[id]'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Nggak jelas masbro ini, datanya nggak ada lah.";
    exit;
}
mysqli_close($conn);
?>
<form method="post" action="Update_data.php">
 
  <input type="hidden" name="id" value="<?php echo $row['NO']; ?>"><br><br>
  <label for="nim">NIM:</label>
  <input type="text" id="nim" name="nim" value="<?php echo $row['NIM']; ?>"><br><br>
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" value="<?php echo $row['NAMA']; ?>"><br><br>
  <label for="dosen">Dosen:</label>
  <input type="text" id="dosen" name="dosen" value="<?php echo $row['Dosen']; ?>"><br><br>
  <label for="status">Status:</label>
  <input type="text" id="status" name="status" value="<?php echo $row['Status']; ?>"><br><br>
  <label for="keterangan">Keterangan:</label>
  <input type="text" id="keterangan" name="keterangan" value="<?php echo $row['Ket']; ?>"><br><br>
  <input type="submit" value="Update">
</form>