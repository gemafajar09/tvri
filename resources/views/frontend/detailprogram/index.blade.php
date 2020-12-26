@extends('frontend.template')
@section('title')
    Detail Program
@endsection

@section('content')
<div class="container" style="margin-top:80px;padding-bottom:20px">
    <div class="row" data-aos="zoom-out">
        @foreach($detail as $key => $a)
        <div class="col-md-3 mx-2">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('/artikel/'.$a->foto)}}" style="width:100%; height:250px" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$a->judul}}</h5>
                  <p class="card-text"><?= substr($a->descripsi,0,50)?> ...</p>
                  <a href="{{route('programdetail',encrypt($a->id_artikel))}}" class="btn btn-outline-primary">Selengkapnya</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection