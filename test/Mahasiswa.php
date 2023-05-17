<?php
require("config.php");
//ngentot
$query = "SELECT * FROM tbl_crud";
$result = mysqli_query($conn, $query);
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Ini merupakan Link Font Montserrat-->
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="CSS Website Daftar Mahasiswa.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Tugas UTS Halaman Web Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span>PBW</span></a>
        <a class="navbar-brand" href="#">Selamat Datang, Nebula Pleyades Putra Taurus</a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="font-family: Montserrat;">Praktikum PBW A</h5>
            <button type="button" class="btn-close btn-close-white" 
            data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" style="font-family: Montserrat;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Website_Praktikum_Bootstrep.php" style="font-family: Montserrat;">Daftar Asprak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" style="font-family: Montserrat;">Informasi Tugas</a>
              </li>
            </ul>
            <div>
              <button class="btn btn-danger" type="submit">
                <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg></i>Logout</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>


    <div class="container mt-3">
    <div class="row">
      <h1><span>DAFTAR</span> MAHASISWA</h1>
      <h1> PRAKTIKUM PEMROGRAMAN BERBASIS <span>WEB</span></h1>
      <div class="col">
        <div class="card " >
            
           
            <div class="p">
                <a href = "tambah_tombol.php"><button type="button" class="btn btn-success btn-sm" style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px; background-color: #72FF70;">Tambah Data</button></a>
                <button type="button" class="btn btn-danger btn-sm" style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px; background-color: #FF4343;">Cetak Laporan <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                </svg></i></button>
            <form class="d-flex" role="search" style="float: right;margin-top: 10px;margin-bottom: 10px;">
                <input class="form-control me-2" type="search" placeholder="Cari Berdasarkan NIM" aria-label="Search" style="background-color: rgb(246, 238, 238);">
                <button class="btn btn-outline-success" type="submit"><a href="#"><i data-feather="search"></i></a></button>
              </form>
            </div>
            <table class="table table-striped table-hover" border="1px" >
                <tr style="background-color: #98CDFE;">
                  <th scope="col">NO</th>
                  <th scope="col">NIM</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">Dosen</th>
                  <th scope="col">Status</th>
                  <th scope="col">Ket</th>
                  <th scope="col" style="text-align: center;justify-content: center;">Aksi</th>
                </tr>
            <?php
              if ($result) {
                if (mysqli_num_rows($result) > 0) {

                  while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['NIM']."</td>";
                echo "<td>".$row['NAMA']."</td>";
                echo "<td>".$row['Dosen']."</td>";
                echo "<td>".$row['Status']."</td>";
                echo "<td>".$row['Ket']."</td>";
                echo "<td>";
                echo "<a href='Edit_tombol.php?id=".$row['NO']."' class='btn btn-primary' style='background-color: #87A9FF;'>EDIT</a> ";
                echo "<a href='hapus_tombol.php?id=".$row['NO']."' class='btn btn-primary' style='background-color: #FF5E5E;'>HAPUS</a>";
                echo "</td>";
                echo "</tr>";
             } } else {
                  echo "Tidak ada pengguna yang ditemukan.";
                  }
               } else {
                  echo "Terjadi kesalahan dalam menjalankan query.";
              }
              
              // Menutup koneksi
              mysqli_close($conn);
           ?>
              </table>
            </div>
          </div>
        </div>
    </div>
    </div>

    <script>
      feather.replace();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
