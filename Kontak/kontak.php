<!DOCTYPE html>
<html lang="en">
<head>
    <title>PT Luar Biasa Teknologi</title>
    <link rel="stylesheet" href="MPTI/Kontak/style.css" type="text/css">
</head>
<body>
    <hr>
    <div class="kontak-tentang">
        <a href="about-us"> <p class="tentang">Tentang Kami</p> </a>
        <a href="contact-us"> <p class="kontak">Kontak Kami</p> </a>
    </div>

    <div class="alamat-perusahaan">
        <p class="perusahaan">{{$perusahaan->nama_perusahaan}}</p>
        <p class="alamat">{{$kontak->alamat}}</p>
    </div>

    <div class="peta text-center align-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9010580937593!2d110.33064801058373!3d-7.80029909218743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57b144f4e4f3%3A0xec833a1a245fd6a0!2sPT.%20Luar%20Biasa%20Teknologi!5e0!3m2!1sid!2sid!4v1690736130734!5m2!1sid!2sid" class="img-peta" width="650" height="355" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="sosmed">
        <a href="#"> <img src="MPTI/Gambar/instagram.png" alt="instagram" class="ikon"> </a>
        <a href="#"> <img src="MPTI/Gambar/linkedin.png" alt="linkedin" class="ikon"> </a>
        <a href="#"> <img src="MPTI/Gambar/facebook.png" alt="facebook" class="ikon"> </a>
    </div>

    <hr>

    <div class="phone-mail">
        <img src="MPTI/Gambar/phone.png" alt="phone" class="ikon">0274-453053</img>
        <img src="MPTI/Gambar/mail.png" alt="mail" class="ikon"> luarbiasatek@gmail.com</img>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
</html>
