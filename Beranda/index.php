<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../style.css">

    <link rel="icon" href="../Assets/img/lbt.png" type="image/x-icon">

    <title>Home</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../Assets/img/lbt.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="">Beranda</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link"  href="../Tentang Kami">Tentang Kami</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#">Layanan</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#">Karir</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <section id="hero">
    <img src="../Gambar/homepagewoman.jpg" alt="" class="img-hero">
        <div class="container h-100">
            <div class="row h-100 text-center">
            <p style="font-family: 'Montserrat'; font-size: 42px;">Our Service<br>We Deliver</p>
            <hr class="grs" style="background-color: white;">
            </div>
        </div>
    </section>

    </section>

    <div class="tombol">
        <button class="tbl-chld">test</button>
        <button class="tbl-chld">test</button>
        <button class="tbl-chld">test</button>
    </div>

    <div class="page2">
        <img src="../Gambar/youngMan.png" class="youngMan">
            <!-- <h3 class="tentangKami">Tentang Kami</h3> -->

        <div class="tentangKami">
            <h3>TENTANG KAMI</h3>
            <HR class="grs hr-page3">
            <P>
                Berdiri sejak pada tahun 2021, PT. Luar Biasa Teknologi 
                merupakan perusahaan Business Process Outsourcing 
                (BPO) berfokus pada aktifitas Collection yang telah 
                di naungi AFPI dan OJK. 
            </P>
            <button class="readMore">Let's look at more</button>

        </div>

    </div>
    
    <div class="page3">
        <br>
        <h1 class="sertifikasi">SERTIFIKASI</h1>
        <hr class="grs hr-page4">
        <img src="../Gambar/AFPI.png" class="afpi">
        

        <p>Terdaftar sebagai Anggota <br> Asosiasi Fintech Pendanaan Bersama Indonesia <br> Nomor 032/REG/DCO/202</p>
        <br>
        
        <hr>
        <br>
        <h1>Diawasi</h1>
        <hr class="grs hr-page4">
        <img src="../Gambar/OJK.png" class="ojk">
        <br><br>
    </div>

    <div class="page4">
        <hr>
        <br>
        <h1>KLIEN KAMI</h1>
        <hr class="grs hr-page4"> 

      <img src="../Gambar/klienKamiAbu.png" class="klien"> 
    
    </div>

    <div id="halaman-kontak"></div>
</body>
</html>
<script>
        function fileKontak() {
            fetch('../kontak.php')
            .then(response => response.text())
            .then(data => {
            document.getElementById('halaman-kontak').innerHTML = data;
            });
        }
        function floating(){
          fetch('../floating.html')
            .then(response => response.text())
            .then(data => {
            document.getElementById('floating-menu').innerHTML = data;
            });
          }
        window.onload = function() {
            fileKontak();
            floating()
        };
       
    </script>