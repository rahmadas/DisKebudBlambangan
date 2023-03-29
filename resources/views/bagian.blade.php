<!-- 
@extends('beranda.home')

@section('container') -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>


    <!-- new -->
    <section class="about" id="about" >

        <h1 class="heading"> Berita<span> me</span> </h1>
        <br>
        <hr>
        
        <div class="cardAbout">
            
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">
                    Nama Lengkap : Rahmad Adhi Sasono
                </p>
                <p class="card-text">
                    Jenis Kelamin : Pria
                </p>
                <p class="card-text">
                    Usia : 21
                </p>
                <p class="card-text">
                    Alamat : Jawa Timur, Kab. Banyuwangi, Kec. Wongsorejo, Desa Sumberekencono.
                </p>
                <p class="card-text">
                    Hobi : Sepak Bola, Futsal, Bilyard
                </p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
                </div>
            </div>
        </div>

        <div class="pAbout">
            <p> 
                Mahasiswa aktif Politeknik Negeri Banyuwangi
                dan juga aktif di kegiatan organisasi luar kampus.
                
                Kesibukan Mengantar telur dan juga coding,
                coding disini antara lain 
                <li>1. Coding tugas dari dosen</li>
                <li>2. Coding untuk latian pribadi</li>
            </p>
        </div>
    </section>



    <section class="education" id="education"> 
        
        <h1 class="heading"> My<span> |Education</span> </h1>
        <br>
        <hr>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="Gambar SD Negeri 2 Sumberekencono">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card h-100">
                    <img src="pic/smk.jpg" class="card-img-top" alt="Gambar Smk Negeri Wongsorejo">
                    <div class="card-body">
                    <h5 class="card-title"><b> SMK NEGERI WONGSOREJO</b></h5>
                    <p class="card-text"> <b> AKUNTANSI</b> <P> 2017 - 2020</P></p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">rahmadgang</small>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card h-100">
                    <img src="pic/poliwangi.png" class="card-img-top" alt="Gambar Politeknik Negeri Banyuwangi">
                    <div class="card-body">
                    <h5 class="card-title"><b> POLITEKNIK NEGERI BANYUWANGI</b></h5>
                    <p class="card-text"> <b> D4 - TEKNOLOGI REKAYASA PERANGAKAT LUNAK</b> <P> 2020 - Sekarang</P></p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">rahmadgang</small>
                    </div>
                </div>
                </div>
            </div>
    </section>



    <section class="skills" id="skills">

        <h1 class="heading"> My<span> |Skills</span> </h1>
        <br>
        <hr>

        <div class="box-container">

            <div class="box">
                <img src="pic/1.jpg" alt="">
            </div>

            <div class="box">
                <img src="pic/2.jpg" alt="">
            </div>
        </div>
    </section>



    <section class="refrensi" id="refrensi">

        <h1 class="heading"> My<span> |Refrensi</span> </h1>
        <br>
        <hr>

        <div class="box-container">

            <div class="box">
                <img src="pic/1.jpg" alt="">
            </div>

            <div class="box">
                <img src="pic/2.jpg" alt="">
            </div>
        </div>
    </section>


</body>
</html>
<!-- @endsection -->
