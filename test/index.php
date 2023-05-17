<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
       <title>Bootstrap Login Form UTS PBW</title>
    <!--Ini merupakan Link Font Montserrat-->
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">     
    <!-- ini merupakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
</head>
<body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body" style="text-align: center;">
                <h1 style="color: #3995EA; font-weight: bold ; font-family: 'Montserrat'; font-style: normal;">Login</h1>
                <p style="font-size: 27px; font-family: 'Montserrat'; color: #686868;">Masukkan nim dan Password</p>
                <!-- <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> -->
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <form action="config_log.php" method="POST">
                  <input type="text" name="Username" id="" class="form-control my-4 py-2" placeholder="Username" style="font-family: 'montserrat'; border-radius: 10px;" href="Mahasiswa.php" method="GET"/>
                  <input type="password" name="Password" id="" class="form-control my-4 py-2" placeholder="Password" style="font-family: 'montserrat'; border-radius: 10px;" method="GET"/>
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary" style = "box-sizing: border-box; width: 410px; border-radius: 25px; font-family: 'Montserrat'; background-color: #2C7FCC;"><i data-feather="Masuk"></i>Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>