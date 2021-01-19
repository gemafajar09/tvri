@extends('frontend.template')
@section('title')
    Detail Berita
@endsection

@section('content')
<div class="container" style="margin-top:80px;padding-bottom:20px">
    <center>
        <h3><b>ARTIKEL</b></h3>
    </center>
    <div class="row" data-aos="zoom-out" style="margin-top:5%">
        @foreach($show as $key => $news)
        <div class="col-md-3">
            <div class="card item" style="padding:2px">
                <img src="{{asset('/news/'.$news->foto)}}" width="100%" height="120px" alt="">
                <div class="card-body">
                  <b style="font-size: 12px">{{substr($news->judul,0,50)}} ...</b>
                  <i style="font-size:11px"><?= substr($news->deskripsi,0,100)?> ...</i>
                  <br>
                  <div align="center">
                    <a class="btn btn-outline-info btn-block" href="{{route('detailberita',encrypt($news->id_news))}}"><i class="fa fa-eye"></i></a>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
    @include('frontend.instagram')
</div>
@endsection