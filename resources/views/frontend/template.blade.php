<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TVRI Aceh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="/owl/owl.theme.default.min.css">
  <link href="/assets/css/loading.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- data table -->
  <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

</head>
<style>
  body {
    background-image: url('{{asset('/image/4853433.jpg')}}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>

<body>
  <script src="{{asset('/assets/vendor/jquery/jquery.min.js')}}"></script>

  <?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $tanggal = date("Ymd");
    $cek = DB::table('tb_statistik')->where('ip',$ip)->where('tanggal',$tanggal)->first();
    if($cek == TRUE)
    {
      DB::table('tb_statistik')->where('ip',$ip)->update(['klik' => $cek->klik +1]);
    }else{
      DB::table('tb_statistik')->insert(['ip' => $ip,'tanggal' => $tanggal,'klik'=> 1]);
    }
  ?>

{{-- fixed-top d-flex  --}}
<header id="header" style="padding-top:1%; height: 65px;" class="fixed-top align-items-center  header-transparent ">
  {{-- berita terkini --}}
  <!-- <style>
  .berita {
    position: fixed;
    left: 0;
    top: 0;
    z-index: 100;
    width: 100%;
    height: 7%;
    text-align: center;
  }
  </style> -->
  <!-- {{-- <section class="topbar berita text-white" style="background: linear-gradient(to top, #131f37, #192d50); padding:1%;"> --}}
  <div class="container berita text-white">
    <div>
      <div class="row">
        <div class="col-md-2">
          <b>Berita Terkini :</b>
        </div>
        <div class="col-md-10">
            <marquee>
              <?php
                $list = DB::table('tb_news')->get();
                foreach ($list as $a){
              ?>
              <span style="text-white" style="color:#fff !important;"><?= substr(strip_tags($a->deskripsi),0,300) ?>....<a  style="color:#fff" href="{{route('detailberita',encrypt($a->id_news))}}" target="_blank">Baca Selengkapnya</a></span>
            <?php } ?>
            </marquee>
        </div>
      </div>
    </div>
  </div>
  {{-- </section> --}} -->
    
  <div class="container d-flex align-items-center">
    
    <div class="logo mr-auto">
      <h1 class="text-light"><a href="{{route('index')}}"><img src="{{asset('/image/TVRI_Aceh.png')}}" alt=""></a></h1>
    </div>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class=""><a href="{{route('index')}}">Home</a></li>
        <li class="drop-down"><a href="">Program</a>
          <ul>
            <?php
              $datamenu = DB::table('tb_kategori')->get();
            ?>
            @foreach($datamenu as $i => $kat)
              <li><a href="{{route('showprogram',encrypt($kat->id_kategori))}}">{{$kat->kategori}}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="drop-down"><a href="">Tentang Kami</a>
          <ul>
            <?php
              $tentang = DB::table('tb_tentang')->get();
            ?>
            @foreach($tentang as $i => $a)
              <li><a href="{{route('tentang_kami',encrypt($a->id_tentang))}}">{{$a->title}}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{route('schedulelist')}}">Jadwal TV</a></li>
        <li id="live" class="active"><a href="{{route('live')}}">Live</a></li>
        <li><a href="{{route('gallerys')}}">Galery</a></li>
        <li class="drop-down"><a href="#">Rate Card</a>
          <ul>
            <li><a href="{{ route('rate_produksi') }}">Rate Penyiaran</a></li>
            <li><a href="{{ route('rate_penyiaran') }}">Rate Produksi</a></li>
          </ul>
        </li>
        <li><a href="{{route('showartikel')}}">Artikel</a></li>
        <li><a href="{{route('mosque_info')}}">Masjid</a></li>
      </ul>
    </nav>

  </div>
</header>

    @yield('content')

  <footer style="" style="background: linear-gradient(to top, #1e3c72, #2a5298);position: fixed; bottom: 0;z-index: 100;" id="footer" pb-3>
    <div class="container">
      <div class="row">
        <div class="col-md-4" data-aos="fade-down">
          <b style="font-size: 13px">TELEVISI REPUBLIK INDONESIA STASIUN ACEH</b>
          <p>
            JL. Jendral Sudirman Mata Le Banda Aceh <br>
            Telp : (0651) 41773, 41779 - Fax : (0651) 41784 <br>
            Email : humas@tvriaceh.com <br>
            Website : <a href="http://www.tvriaceh.com">www.tvriaceh.id</a>
          </p>
          <div class="row">
            <div class="col-md-4 col-sm-12 pt-1">
              <b>Follow Us :</b>
            </div>
            <div class="col-md-8 text-left">
              <?php
              $tw = DB::table('tb_mediasoal')->where('kategori','Twitter')->first();
              $ins = DB::table('tb_mediasoal')->where('kategori','Instagram')->first();
              $fb = DB::table('tb_mediasoal')->where('kategori','Facebook')->first();
              $yt = DB::table('tb_mediasoal')->where('kategori','YouTube')->first();
              ?>
              <div class="social-links" style="font-size: 9px">
                <a href="{{$tw->link}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$fb->link}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$ins->link}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$yt->link}}" class="google-plus"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-1 col-sm-12">
          {{-- kunjungan --}}
          <div data-aos="fade-down">
            <b style="font-size: 13px">Kunjungan Hari Ini</b>
            <br>
            <div class="form-inline">
              <div class="mx-1" style="text-align:center">
                <i style="font-size:22px; color:white" class="fas fa-globe-europe"></i>
                <label for="" id="kemarin"></label>
                <label for="">Kemarin</label>
              </div>
              <div class="mx-1" style="text-align:center">
                <i style="font-size:22px; color:green" class="fas fa-globe-europe"></i>
                <label for="" id="sekarang"></label>
                <label for="">Sekarang</label>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-md-8 col-sm-12">
          <div class="row">
            <div class="col-md-6 col-sm-12" data-aos="fade-down">
              <h4 class="text-white topicof" style="margin-left: 1em;font-size: 20px;"><img src="{{asset('image/towersignalantenna-115836_115793.png')}}" style="width:10%; height:10%; no-repeat left; color:white" alt=""> &nbsp; &nbsp; TVRI Aceh</h4>
              <ul class="site-menu main-menu js-clone-nav mr-auto d-lg-block">
                @foreach($tentang as $i => $a)
                  <li style="font-size: 13px;padding-top: 0px;padding-bottom: 0px;"><a href="{{route('tentang_kami',encrypt($a->id_tentang))}}" class="text-white">{{$a->title}}</a></li>
                @endforeach
              </ul>
            </div>
      
            <div class="col-md-6 col-sm-12" data-aos="fade-down">
              <h4 class="text-white topicof" style="margin-left: 1em;font-size: 20px;"><img src="{{asset('image/towersignalantenna-115836_115793.png')}}" style="width:10%; height:10%; no-repeat left; color:white" alt=""> &nbsp; &nbsp; Link Lainnya</h4>
              <ul class="site-menu main-menu js-clone-nav mr-auto d-lg-block">
                <?php $tautan = DB::table('tb_tautan')->get(); ?>
                @foreach($tautan as $t)
                <li style="font-size: 13px;padding-top: 0px;padding-bottom: 0px;"><a href="{{$t->link_tautan}}" target="_blank" class="text-white">{{$t->nama_tautan}}</a></li>
                @endforeach
              </ul>
              {{-- <p align="right"><a class="text-white" style="margin-top: 5px;" href="http://tvrisumbar.co.id/link">» Link Lainnya</a></p> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          All Rights Reserved by 
          <a href="http://mediatamaweb.co.id" target="_blank">MEDIATAMAWEB.CO.ID</a>. 
          <!-- Developed by <a href="https://instagram.com/taufanomt" target="_blank">Taufano</a>. -->
          </div>
        </div>
    </div>
  </footer>

  <a href="#" style="margin-bottom: 3%" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/aos/aos.js')}}"></script>
  <script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>
  <script src="{{asset('/owl/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/assets/js/main.js')}}"></script>
  <script src="{{asset('/assets/js/anime.min.js')}}"></script>
  
  <!-- data table -->
  <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

  <script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
          loop:false,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
      });

      anime({
        targets: '.specific-prop-params-demo .el',
        translateX: {
          value: 250,
          duration: 800
        },
        rotate: {
          value: 360,
          duration: 1800,
          easing: 'easeInOutSine'
        },
        scale: {
          value: 2,
          duration: 1600,
          delay: 800,
          easing: 'easeInOutQuart'
        },
        delay: 250 // All properties except 'scale' inherit 250ms delay
      });

        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    })

    setInterval(function(){ pengunjung() },2000)

    function pengunjung(){
      $.ajax({
        url: "{{route('statistik')}}",
        type: "GET",
        dataType: "json",
        success: function(data){
          console.log(data.sekarang)
          $('#sekarang').html(data.sekarang)
          $('#kemarin').html(data.kemarin)
        }
      })
    }

    setInterval(function(){ 
      $('#live').fadeOut();
      $('#live').fadeIn();  
    }, 1000);

    function showprofile()
    {
        $('#profilemodal').modal()
    }

  </script>

</body>

</html>