@extends('frontend.template')
@section('title')
    Detail Berita
@endsection

@section('content')
<div class="container" style="margin-top:80px;padding-bottom:20px">
    <div class="row" data-aos="zoom-out">
        @foreach($show as $key => $a)
        <div class="col-md-3 mx-2">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('/news/'.$a->foto)}}" style="width:100%; height:150px" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$a->judul}}</h5>
                  <p class="card-text"><?= substr($a->deskripsi,0,50)?> ...</p>
                  <a href="{{route('detailberita',encrypt($a->id_news))}}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection