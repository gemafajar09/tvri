@extends('frontend.template')
@section('title')
    Program Acara
@endsection

@section('content')
<div class="container">
    <div class="row" data-aos="zoom-out" style="margin-top:100px">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <center>
                        <img src="{{asset('/artikel/'.$artikel->foto)}}" style="width:50%; heigth:50%;" class="img-responsive animate__animated" alt="">
                    </center>
                    <br>
                    <center>
                        <h3>{{$artikel->judul}}</h3>
                    </center>
                    <div style="word-wrap: break-word; padding-left:10%">
                        <?= $artikel->descripsi?>
                    </div>
                </div>
            </div>
            
        </div>
        @include('frontend.navigarot')
        <br>
        <div class="col-md-12">
            <br>
            <center><h3>Program Acara Terkait</h3></center>
            <hr style="border: 2 solid:black">
            <div class="row" data-aos="zoom-out">
                @foreach($lainnya1 as $key => $a)
                <div class="col-md-3 py-2">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/artikel/'.$a->foto)}}" style="width:100%;">
                        <div class="card-body">
                            <h5 style="font-size:10pt;color:blue" class="card-title">{{$a->judul}}</h5>
                            <p style="font-size:8pt"><?= substr($a->descripsi,0,45)?> ...</p>
                            <a href="{{route('programdetail',encrypt($a->id_artikel))}}" class="btn btn-outline-primary">Selengkapnya</a>
                        </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection