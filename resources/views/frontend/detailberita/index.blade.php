@extends('frontend.template')
@section('title')
    Detail Berita
@endsection

@section('content')
    <div class="row" data-aos="zoom-out" style="margin-top:100px">
        <div class="col-md-8">
            <center>
                <img src="{{asset('/news/'.$news->foto)}}" style="width:80%; heigth:200px;" class="img-responsive animate__animated" alt="">
            </center>
            <br>
            <center>
                <h3>{{$news->judul}}</h3>
            </center>
            <div style="word-wrap: break-word; padding-left:10%">
                <?= $news->deskripsi ?>
            </div>
            <br>
            <center><h3>Artikel Lainya</h3></center>
            <hr style="border: 2 solid:black">
            <div class="container row" data-aos="zoom-out">
                @foreach($lainnya1 as $key => $a)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/news/'.$a->foto)}}" style="width:100%; height:150px" alt="Card image cap">
                        <div class="card-body">
                        <h5 style="font-size:10pt;color:blue" class="card-title">{{$a->judul}}</h5>
                        <p class="card-text"><?= substr($a->deskripsi,0,50)?> ...</p>
                        <a href="{{route('detailberita',encrypt($a->id_news))}}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-header" style="background: linear-gradient(to right, #3399ff 5%, #000099 100%); color:white">
                    <h6><i class="fas fa-newspaper"></i> Artikel Lainya</h6>
                </div>
                <div class="card-body">
                    @foreach($lainnya as $a)
                        <div class="row animate__animated py-2">
                            <div class="col-md-4">
                                <img src="{{asset('/news/'.$a->foto)}}" style="width:100%;"  class="img-responsive" alt="">
                            </div>
                            <div class="col-md-8">
                                <h6><a href="{{route('detailberita',encrypt($a->id_news))}}">{{$a->judul}}</a></h6>
                                <p><?= substr($a->deskripsi,0,20)?>&nbsp;....</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
            {{-- intagram --}}
            <div class="card card-primary card-outline animate__animated">
                <div class="card-header" style="background: linear-gradient(to right, #3399ff 5%, #000099 100%); color:white">
                    <h6><i class="fab fa-instagram">&nbsp;</i>Terbaru Dari Instagram</h6>
                </div>
                <div class="card-body">
                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/a431e4a01053535aab0dafb6503e6f13.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection