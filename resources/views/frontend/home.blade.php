@extends('frontend.template')
@section('content')
<style>
  @font-face {
    font-family: "Bold";
    src: url('http://tvrisumbar.co.id/cssMediatama/Bold.ttf');
  }

  @font-face {
    font-family: "Regular";
    src: url('http://tvrisumbar.co.id/cssMediatama/Regular.ttf');
  }

  h1,
  h2,
  h5,
  .nav-link {
    font-family: "Bold" !important;
  }

  p {
    font-family: "Regular" !important;
  }

  .carousel-inner {
    width: 100%;
    margin-right: 10px;
    /* position: absolute; */
  }

  .main-carousel .carousel-inner .img-class {
    width: 100%;
  }

  /* position dots up a bit */
  .flickity-page-dots {
    bottom: 0px;
  }

  /* dots are lines */
  .flickity-page-dots .dot {
    height: 4px;
    width: 40px;
    margin: 0;
    border-radius: 0;
  }

  @media (min-width: 1200px) {
    .main-carousel .carousel-inner .card {
      position: absolute;
      top: 60%;
      left: 50%;
      right: 10%;
      bottom: 20%;
    }

    .repon {
      display: inline-block;
    }
  }

</style>
    {{-- carousel --}}
    <section style="padding-bottom: unset;">
      <div id="carouselExampleControls" class="carousel slide main-carousel" data-flickity='{ "autoPlay": 2000,"wrapAround": true }' data-ride="carousel">
        <div class="carousel-inner">

          <?php foreach($slider as $i => $slid){ ?>

            <div class="carousel-item {{ $i == 0 ? ' active' : ''  }}">
                <img src="{{asset('/slider/'.$slid->image)}}" style="width:100%;" class="img-responsive animate__animated" alt="">
            </div>
            <?php } ?>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="text-white" style="background: linear-gradient(to top, #1e3c72, #2a5298);">
        <div>
          <div class="row">
            <div class="col-md-2 text-center">
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
    </section>


    {{-- siaran tv --}}
    <center>
      <div class="mt-3"  data-aos="fade-up">
        <h3><b>SIARAN TV</b></h3>
      </div>
    </center>
    <div class="container my-3">
      <div class="row content" data-aos="fade-up">
        <div class="col-md-7">
          <iframe class="responsive-iframe" width="100%" height="355" src="{{$link->link}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-5">
          <div data-aos="zoom-in-left" style="overflow-y: scroll;height:355px;background: linear-gradient(to top, #131f37, #192d50);" class="card" height="355">
            <table style="color:white;" class="table table-striped">
                <tr>
                  <th colspan="2" style="text-align:right">
                    {{tanggal_indonesia(date('Y-m-d'))}}
                  </th>
                </tr>
                @foreach($jadwal as $i => $jadwal)
                <tr>
                  <th style="width:10%">{{$jadwal->jam}}</th>
                  <th style="padding-left:20px">{{$jadwal->nama_acara}}</th>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>

    </div>

    {{-- program acara --}}
    <center>
      <div class="my-4"  data-aos="fade-up">
        <h3><b>PROGRAM ACARA</b></h3>
      </div>
    </center>
    <div class="container my-4">
      <div class="owl-carousel owl-theme" data-aos="fade-up">
        @foreach($programacara as $i => $program)
        <div class="testimonial-item" >
          <a href="{{route('programdetail',encrypt($program->id_artikel))}}">
            <img src="{{asset('/artikel/'.$program->foto)}}" class="img-responsive" width="100%" height="260px" alt="">
          </a>
        </div>
        @endforeach
      </div>
    </div>

    {{-- newss --}}
    <center style="padding-top:1%">
      <div class="" data-aos="fade-up">
        <h3><b>NEWS</b></h3>
      </div>
    </center>
    <div class="container my-4" data-aos="fade-up">
        <div class="owl-carousel owl-theme">
          @foreach($news as $i => $news)
                <div class="card item" style="padding:2px">
                  <img src="{{asset('/news/'.$news->foto)}}" width="100%" height="170px" alt="" style="object-fit: cover;">
                  <div class="card-body">
                    <b style="font-size: 12px">{{substr($news->judul,0,50)}} ...</b>
                    <i style="font-size:11px"><?= substr($news->deskripsi,0,100)?> ...</i>
                    <br>
                    <div align="center">
                      <a class="btn btn-outline-info btn-block" href="{{route('detailberita',encrypt($news->id_news))}}"><i class="fa fa-eye"></i></a>
                    </div>

                  </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- instagram --}}
    @include('frontend.instagram')

    {{-- all program acara --}}
    <!--<center style="padding-top:1%">-->
    <!--  <div class="" data-aos="fade-up">-->
    <!--    <h3><b>SEMUA PROGRAM ACARA</b></h3>-->
    <!--  </div>-->
    <!--</center>-->
    <!--<div class="container">-->
    <!--  @foreach($kategori as $i => $kategori)-->
    <!--    <?php $bagikategori = DB::table('tb_artikel')->where('id_kategori',$kategori->id_kategori)->get(); ?>-->
    <!--    <div style="padding-top:2%" class="owl-carousel owl-theme" data-aos="fade-up">-->
    <!--      @foreach($bagikategori as $bagi)-->
    <!--      <div style="margin-left:10px; margin:right:10px" class="item">-->
    <!--        <div class="member" data-aos="fade-up">-->
    <!--          <div class="member-img">-->
    <!--            <a href="{{route('programdetail',encrypt($program->id_artikel))}}">-->
    <!--              <img src="{{asset('/artikel/'.$bagi->foto)}}" style="width:100%; height:200px" class="img-fluid" alt="">-->
    <!--            </a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      @endforeach-->

    <!--    </div>-->

    <!--  @endforeach-->
    <!--</div>-->

    {{-- lokasi kami --}}
    <center>
      <div class="" data-aos="fade-up">
        <h3><b>LOKASI KAMI</b></h3>
      </div>
    </center>
    <div class="container pb-2 my-4" data-aos="fade-up">
      <iframe style="margin-top:0%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2037402.2035230293!2d95.46551408082419!3d4.161073397935724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd339312534ff3a36!2sTVRI%20Aceh!5e0!3m2!1sid!2sid!4v1608967967091!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

@endsection