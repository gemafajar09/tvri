<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TVRI Aceh</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <link href="{{asset('/assets/css/loading.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
  <div class="preloader">
    <div class="loading">
      <img src="{{asset('/loading/load.gif')}}" alt="">
    </div>
  </div>
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
  {{-- ip --}}
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('index')}}"><img src="{{asset('/image/TVRI_Aceh.png')}}" alt=""></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="{{route('index')}}">Home</a></li>
          <li id="live" class="active"><a href="{{route('live')}}">Live Streaming</a></li>
          <li class="drop-down"><a href="">Kategories</a>
            <ul>
              <?php
                $datamenu = DB::table('tb_kategori')->get();
              ?>
              @foreach($datamenu as $i => $kat)
                <li><a href="{{route('showprogram',encrypt($kat->id_kategori))}}">{{$kat->kategori}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{route('schedulelist')}}">Schedule</a></li>
          <li><a href="{{route('showartikel')}}">Artikel</a></li>
          <li><a href="{{route('tentang_kami')}}">Tentang Kami</a></li>

        </ul>
      </nav>

    </div>
  </header>

    @yield('content')

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>TVRI Aceh</h3>
          <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <div>
            <h5>Kunjungan Hari Ini</h5>
            <br>
            <div class="form-inline">
              <div class="mx-5" style="text-align:center">
                <i style="font-size:22px; color:white" class="fas fa-globe-europe"></i>
                <label for="" id="kemarin"></label>
                <label for="">Kemarin</label>
              </div>
              <div class="mx-5" style="text-align:center">
                <i style="font-size:22px; color:green" class="fas fa-globe-europe"></i>
                <label for="" id="sekarang"></label>
                <label for="">Sekarang</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2037402.2035230293!2d95.46551408082419!3d4.161073397935724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd339312534ff3a36!2sTVRI%20Aceh!5e0!3m2!1sid!2sid!4v1608967967091!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Mediatama Web</span></strong>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <script src="{{asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/aos/aos.js')}}"></script>
  <script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>

  <script src="{{asset('/assets/js/main.js')}}"></script>
  <script>
    $(document).ready(function(){
      // setInterval(function(){$(".preloader").fadeOut(); },2000)
      $(".preloader").fadeOut();
      
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

    $('.marquee').marquee({
        duration: 16000,
        gap: 0,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
    });
  </script>

</body>

</html>