<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Aplikasi Nilai</h1>
        <h3>Tabel Jurusan dan Tabel Siswa</h3>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?n=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?n=siswa">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?n=siswa">Siswa</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>

    </header>
    <div class="konten container">
        <?php
        if (isset($_GET['n'])) {
            $n = $_GET['n'];
            switch ($n) {
                case 'home';
                    include 'home.php';
                    break;
                case 'siswa';
                include 'siswa/index.php';
                break;
                case 'siswa';
                include 'siswa/index.php';
                break;
                
                default;
                include 'home.php';
                break;
            }
        } else {
            include 'home.php';
        }
        ?>


    </div>
    <footer>
        &copy; Dibuat oleh Muhammad Samy El Islamy <a href="http://muhidin.web.id" target="_blank" rel="noopener noreferrer">Kelas TKJ</a>
            TKJ Angkatan ke 29 <a href="http://rumahgemilaing.com" target="_blank" rel="noopener noreferrer">RGI</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>