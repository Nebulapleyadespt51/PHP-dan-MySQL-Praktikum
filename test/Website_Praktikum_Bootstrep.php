<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Penggunaan Bootstrep By Nebula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS Bootstrep.css" type="text/css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid" style="background-color:aquamarine; height: 4rem;">
          <a class="navbar-brand" href="#" style="color:white;">PBW</a>
          <a class="navbar-brand" href="#" style = "color:white">Selamat Datang, Nebula Pleyades Putra Taurus</a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Praktikum PBW A</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Mahasiswa.php">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informasi Tugas</a>
                </li>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" style="margin-top: 23rem; background-color: red;" onClick="index.php">Logout</button>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <h1 style="margin-top: 6rem; text-align: center;">Website Praktikum</h1>
      <h1 style="margin-top: 1rem; text-align: center;">Pemrograman Berbasis Web</h1>

    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="card" style = "width: 100%; margin-left: 1cm; margin-right: 1cm;">
            <img src="Gambar User PNG.png" class="card-img-top" alt="Gambar User">
            <div class="card-body">
              <h5 class="card-title">Nebula Pleyades Putra Taurus</h5>
              <small>220441100005 -Praktikan</small>
              <p class="card-text">Halo, perkenalkan nama saya Nebula Pleyades Putra Taurus, sapaanku Nebula. 
                Saya adalah mahasiswa prodi sistem Informasi Universitas Trunojoyo Madura, 
                hobi saya adalah mengerjakan tugas tepat waktu</p>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card" style = "width: 100%; margin-left: 3cm; margin-right: 3cm;">
            <img src="Gambar User PNG.png" class="card-img-top" alt="Gambar User">
            <div class="card-body">
              <h5 class="card-title">Nebula Pleyades Putra Taurus</h5>
              <small>220441100005 -Praktikan</small>
              <p class="card-text">Halo, perkenalkan nama saya Nebula Pleyades Putra Taurus, sapaanku Nebula. 
                Saya adalah mahasiswa prodi sistem Informasi Universitas Trunojoyo Madura, 
                hobi saya adalah mengerjakan tugas tepat waktu</p>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card" style = "width: 100%; margin-left: 5cm; margin-right: 5cm;">
            <img src="Gambar User PNG.png" class="card-img-top" alt="Gambar User">
            <div class="card-body">
              <h5 class="card-title">Nebula Pleyades Putra Taurus</h5>
              <small>220441100005 -Praktikan</small>
              <p class="card-text">Halo, perkenalkan nama saya Nebula Pleyades Putra Taurus, sapaanku Nebula. 
                Saya adalah mahasiswa prodi sistem Informasi Universitas Trunojoyo Madura, 
                hobi saya adalah mengerjakan tugas tepat waktu</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>