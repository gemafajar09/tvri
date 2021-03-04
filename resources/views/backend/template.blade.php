<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" onclick="showprofile()" role="button">
        {{session()->get('nama_user')}}&nbsp;<i class="fa fa-user-circle"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('/image/TVRI_Aceh.png')}}" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">TVRI Aceh</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        @if(session()->get('level') == 'Superadmin')
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewkategori')}}" class="nav-link">
              <i class="nav-icon fas fa-cloud"></i>
              <p>
                Kategori Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewslider')}}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewartikel')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Play List Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('link')}}" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Link Sreaming
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('schedule')}}" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Acara TV
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tentangkami')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Tentang kami
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ratecardindex')}}" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Rate Card
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewnews')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('media-sosial')}}" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Sosial Media
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gallery')}}" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('linklainya')}}" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Link Lainnya
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('viewinfaq')}}" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Kas Masjid
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('viewuser')}}" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
        @elseif(session()->get('level') == 'Acara')
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewkategori')}}" class="nav-link">
              <i class="nav-icon fas fa-cloud"></i>
              <p>
                Kategori Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewartikel')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Play List Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('link')}}" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Link Sreaming
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('schedule')}}" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Acara TV
              </p>
            </a>
          </li>
        </ul>
        @elseif(session()->get('level') == 'Berita')
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tentangkami')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Tentang kami
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ratecardindex')}}" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Rate Card
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('viewnews')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('linklainya')}}" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Link Lainnya
              </p>
            </a>
          </li>
        </ul>
        @endif
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://mediatamaweb.co.id">Mediatama Web Indonesia</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
      <!--  -->
    </div>
  </footer>
</div>
<!-- profile -->
<div class="modal" id="profilemodal" style="background-color:transparent">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <center>
            <img src="{{asset('/image/TVRI_Aceh.png')}}" style="height:180px; width:180px" class="rounded-circle">
            <br>
            <strong><h4>{{session('nama_user')}}</h4></strong>
        </center>
        <ul class="list-group">
            <li class="list-group-item"><a class="btn btn-outline-warning btn-block">Setting</a></li>
            <li class="list-group-item"><a href="{{route('keluar')}}" class="btn btn-outline-danger btn-block">Keluar</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
    function showprofile()
    {
        $('#profilemodal').modal()
    }

    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    })
</script>
</body>
</html>
