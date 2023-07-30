<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <nav class="nav-stl">
            <div class="navbar-left">
                <img src="gambar/logo.png" alt="Logo Kiri">
            </div>

            <div class="nav justify-content-center ">
                <a class="nav-link navbar active" aria-current="page" href="#">Beranda</a>
                <a class="nav-link navbar" href="#">Tentang Kami</a>
                <a class="nav-link navbar" href="#">Layanan</a>
                <a class="nav-link navbar">Karir</a>
                <a class="nav-link navbar">Kontak Kami</a>
            </div>

            <div class="navbar-right">
                <img src="gambar/user.png" alt="Logo Kanan">
            </div>
        </nav>
    </div>

    <div class="page1"> 
        <!-- page 1 -->
        <!-- <img src="gambar/homepagewoman.jpg" alt=""> -->

        <div class="judul">
            <br>
            <p style="font-family: 'Montserrat';font-size: 42px; ">Our Service <br> We Deliver</p>
            <hr class="grs">
        </div>
    </div>

    <div class="tombol">
        <button class="tbl-chld">test</button>
        <button class="tbl-chld">test</button>
        <button class="tbl-chld">test</button>
    </div>

    <div class="page2">
        <img src="gambar/youngMan.png" class="youngMan">
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
        <img src="gambar/AFPI.png" class="afpi">
        

        <p>Terdaftar sebagai Anggota <br> Asosiasi Fintech Pendanaan Bersama Indonesia <br> Nomor 032/REG/DCO/202</p>
        <br>
        
        <hr>
        <br>
        <h1>Diawasi</h1>
        <hr class="grs hr-page4">
        <img src="gambar/OJK.png" class="ojk">
        <br><br>
    </div>

    <div class="page4">
        <hr>
        <br>
        <h1>KLIEN KAMI</h1>
        <hr class="grs hr-page4">
        
        <img src="gambar/klienKamiAbu.png" class="klien">

    </div>

    <div id="halaman-kontak"></div>

</body>
</html>

<script>
        
    function fileKontak() {
        fetch('kontak.php')
        .then(response => response.text())
        .then(data => {
        document.getElementById('halaman-kontak').innerHTML = data;
        });
    }


    window.onload = function() {
        fileKontak();
    };

    // src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

</script>