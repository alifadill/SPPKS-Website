<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPPKS UPI</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

    {{-- logo Title --}}
    <link rel="icon" href="{{asset('img\Logo SPPKS.png')}}" type="image/x-icon">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Poppins:wght@300;400;700&family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">

    {{-- CDN Chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"> </script>

    {{-- CDN JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script>
      $(document).ready(function(){
        $('.navbar-nav a').click(function(){
          $(this).parent().addClass('active');
        });
      });
    </script> --}}


    <link rel="stylesheet" href="{{asset('style.css')}}">

    <style>
        body{
            font-family: 'Poppins', sans-serif;

        }
    </style>
</head>
<body>
{{-- Navbar --}}
    <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img\Logo SPPKS.png')}}" alt="Logo" class="d-inline-block align-text-top p-0 m-0">
                </a>
                <div class="row">
                    <div class="col-lg-12">SPPKS UPI</div>
                    <div class="col-11">Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual</div>
                    <div class="col-lg-10">Universitas Pendidikan Indonesia</div>
                </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-0">
              <li class="nav-item ms-5">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link" href="#viewStatistik">Statistik</a>
              </li>
              {{-- <li class="nav-item ms-5">
                <a class="nav-link" href="#berita">Berita</a>
              </li> --}}
              <li class="nav-item ms-5">
                <a class="nav-link" href="#Artikel">Artikel</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
{{-- Hero section --}}
      <section id="hero">
        <div class="container vh-90">
            <div class="row h-100 justify-content-center">
                <div class="col-10 col-lg-6 mt-5 justify-content-center">
                    <img src="{{asset('img\Logo UPI.png')}}" alt="" height="100%" id="img-hero" class="mx-auto d-block">
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <h1 class="fw-bold fs-2 border-bottom pb-3">Komitmen SATGAS PPKS UPI</h1>
                    
                    <p class="text-panjang" style="font-weight:300;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, numquam libero molestiae veniam aut dicta quod sed voluptas sit temporibus, blanditiis quia saepe cumque. Praesentium eaque debitis molestias quidem consectetur.</p>
                    <button class="btn btn-lg btn-warning mt-3" id="lapor"> Laporkan Kasus!</button>
                    <button class="btn btn-outline-secondary ms-2 mt-3">Petunjuk Pelaporan</button>
                </div>
            </div>
        </div>
      </section>
      <p id="viewStatistik"></p>
      
      <section id="statistik">
        <div class="container vh-100">
          <h1 class="d-flex justify-content-center fw-bold mb-4 border-bottom pb-4">Statistik</h1>
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-6">
              <h3>Lorem ipsum dolor sit amet.</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ut perferendis corrupti consequuntur error iure ipsam accusantium debitis illum fuga.</p>

            </div>
            <div class="col-sm-12 col-md-8 col-lg-6">
              <canvas id="myChart" style="width:100%;max-width:700px" aria-label="Statistik Laporan Kasus per Bulan" role="img">
                <h3>Statistik Laporan Kasus Kekerasan Seksual per Bulan.</h3>
              </canvas>
            </div>
          </div>
        </div>
      </section>

{{-- Artikel Section --}}
      <section id="artikel">
        <div class="container">
          <h1 class="d-flex justify-content-center fw-bold mb-4 border-bottom pb-4">Artikel</h1>
          <div class="row row-cols-3 align-items-center justify-content-center">
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="..." height="150rem">
                <div class="card-body">
                  <h5 class="card-title">Judul Berita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, possimus.</p>
                  <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="..." height="150rem">
                <div class="card-body">
                  <h5 class="card-title">Judul Berita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, possimus.</p>
                  <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="..." height="150rem">
                <div class="card-body">
                  <h5 class="card-title">Judul Berita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, possimus.</p>
                  <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                </div>
              </div>
            </div>

            {{-- Baris 2 --}}
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="..." height="150rem">
                <div class="card-body">
                  <h5 class="card-title">Judul Berita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, possimus.</p>
                  <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="..." height="150rem">
                <div class="card-body">
                  <h5 class="card-title">Judul Berita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, possimus.</p>
                  <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="..." height="150rem">
                <div class="card-body">
                  <h5 class="card-title">Judul Berita</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, possimus.</p>
                  <a href="#" class="btn btn-primary">Baca selengkapnya...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="footer">
        <div class="footer"></div>
      </section>

    
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script>
      const xValues = ['Jan','Feb','Mar','Apr','Mei','Juni','Juli','Agu','Sep','Okt','Nov','Des'];
      dataRandom = [];
      for(x of xValues){
        const randomNumber = Math.floor(Math.random()*10);
        // console.log(randomNumber);      
        dataRandom.push(randomNumber);
      }

      new Chart("myChart", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [{
            label: 'Laporan Kasus',
            // data: [10,8,7,10,7,1,3,2,3,1,3,1],
            data: dataRandom,
            borderColor: "red",
            fill: false
          // },{
          //   data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          //   borderColor: "green",
          //   fill: false
          // },{
          //   data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
          //   borderColor: "blue",
          //   fill: false
          }]
        },
        options: {
          // min: 0,
          // showZero: true,
          scales: {
            yAxes:[{
              display:true,
              ticks:{
                beginAtZero: true 
              }
            }]
          },
          legend: {
           display: true,
           position: 'bottom',
          //  align:'start',
            // title: "Legenda",
            // labels: {
            //   // Menentukan nama data pada legenda
            //   fontColor: "#FFFFFF",
            //   fontFamily: "sans-serif",
            //   fontSize: 12
            // }
          },
          hover:{
            mode: 'nearest',
            intersect: true
          }
        }
      });

    </script>
</body>
</html>