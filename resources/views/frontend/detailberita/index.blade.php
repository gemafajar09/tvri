@extends('frontend.template')
@section('title')
Detail Berita
@endsection

@section('content')
<div class="container">
    <div class="row" data-aos="zoom-out" style="margin-top:100px">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <center>
                        <img src="{{asset('/news/'.$news->foto)}}" style="width:80%; heigth:200px;"
                            class="img-responsive animate__animated" alt="">
                    </center>
                    <br>
                    <center>
                        <h3>{{$news->judul}}</h3>
                    </center>
                    <div style="word-wrap: break-word;">
                        <?= $news->deskripsi ?>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
        @include('frontend.navigarot')
        {{--  --}}
        <div class="col-md-12">
            <br>
            <center>
                <h3>Artikel Lainya</h3>
            </center>
            <hr style="border: 2 solid:black">
            <div class="container row" data-aos="zoom-out">
                <div class="owl-carousel owl-theme">
                    @foreach($lainnya1 as $key => $a)
                        <div class="card item" style="padding:2px">
                            <img src="{{asset('/news/'.$a->foto)}}" width="100%" height="120px" alt="">
                            <div class="card-body">
                                <b style="font-size: 12px">{{substr($a->judul,0,30)}} ...</b>
                                <i style="font-size:11px"><?= substr($a->deskripsi,0,75)?> ...</i>
                                <br>
                                <div align="center">
                                    <a class="btn btn-outline-info btn-block"
                                        href="{{route('detailberita',encrypt($a->id_news))}}"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
