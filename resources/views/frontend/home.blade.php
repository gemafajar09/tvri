@extends('frontend.template')
@section('content')

  <section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <?php foreach($slider as $i => $slid){ ?>

          <div class="carousel-item {{ $i == 0 ? ' active' : ''  }}">
              <img src="{{asset('/slider/'.$slid->image)}}" style="width:auto;" class="img-responsive animate__animated d-block w-100" alt="">
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

  </section>

  <main id="main">

    <section id="about" style="padding-top:20px" class="about">
      <div class="container">

        <div class="row content" data-aos="fade-up">
          <div class="col-md-7">
            <div class="section-title" data-aos="zoom-out">
              <h2 style="color:#2533cc">Live</h2>
              {{-- <p>Who we are</p> --}}
            </div>
                <iframe class="responsive-iframe" width="100%" height="355" src="{{$link->link}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-5 pt-4 pt-lg-0">
            <div class="section-title" data-aos="zoom-out">
              <h2 style="color:#2533cc">Schedule</h2>
              {{-- <p>Who we are</p> --}}
            </div>
            <div data-aos="zoom-in-left" style="overflow-y: scroll;height:355px;background: linear-gradient(to right, #3399ff 5%, #000099 100%);" class="card" height="355">
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
    </section>

    <div style="text-align:center" data-aos="zoom-out">
      <h2 style="color:#2533cc">News</h2>
    </div>
    <section id="" class="" style="padding-top:5px; padding-bottom:5px">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($news as $i => $news)
            <div class="carousel-item {{ $i == 0 ? ' active' : ''  }}">
              <div class="row" data-aos="zoom-out">
                <div class="col-lg-4 text-center text-lg-left">
                  <img src="{{asset('/news/'.$news->foto)}}" width="100%" height="200px" alt="">
                </div>
                <div class="col-lg-8 text-center text-lg-left">
                  <h3>{{substr($news->judul,0,100)}}</h3>
                  <p><?= substr($news->deskripsi,0,300)?> ...</p>
                  <br>
                  <a class="cta-btn align-middle" href="{{route('detailberita',encrypt($news->id_news))}}">Show Detail</a>
                </div>
                {{-- class dan id cta --}}
              </div>
            </div>
            @endforeach
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
      </div>

    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2 style="color:#2533cc">Program Acara</h2>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">
          @foreach($programacara as $i => $program)
          <div class="testimonial-item" >
            <a href="{{route('programdetail',encrypt($program->id_artikel))}}">
              <img src="{{asset('/artikel/'.$program->foto)}}" class="img-responsive" width="250px" height="300px" alt="">
            </a>
          </div>
          @endforeach
        </div>

      </div>
    </section>

    <section data-aos="fade-up" id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2 style="color:#2533cc">Instagram</h2>
        </div>

        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/a431e4a01053535aab0dafb6503e6f13.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

      </div>
    </section>

    <center><h3 style="color:#2533cc">Kategori Program Acara</h3></center>
    <section id="team" class="team">
      <div class="container">
        @foreach($kategori as $i => $kategori)
        <div class="section-title" data-aos="zoom-out">
          <h2 style="color:#2533cc">{{$kategori->kategori}}</h2>
        </div>
          <?php $bagikategori = DB::table('tb_artikel')->where('id_kategori',$kategori->id_kategori)->get(); ?>
          <div class="owl-carousel testimonials-carousel" data-aos="fade-up">
            
            @foreach($bagikategori as $bagi)
            <div style="margin-left:10px; margin:right:10px" class="testimonial-item">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('/artikel/'.$bagi->foto)}}" style="width:350px; height:300px" class="img-fluid" alt="">
                  <div class="social">
                    <a href="{{route('programdetail',encrypt($bagi->id_artikel))}}"><i class="icofont-eye"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{$bagi->judul}}</h4>
                  <span><?= substr($bagi->descripsi, 0,40)?> ....</span>
                </div>
              </div>
            </div>
            @endforeach

          </div>

        @endforeach
      </div>
    </section>

  </main>
@endsection