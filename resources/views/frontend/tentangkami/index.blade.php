@extends('frontend.template')
@section('title')
    Tentang Kami
@endsection

@section('content')
<div class="container" style="margin-top:80px;padding-bottom:20px">
    <div class="row" data-aos="zoom-out">
        @foreach($detail as $key => $a)
        <div class="col-md-12">
            <div class="section-title" data-aos="zoom-out">
                {{-- <h2 style="color:#2533cc">{{$a->title}}</h2> --}}
            </div>
            @if($a->type == 1)
                <div>
                    <?= $a->isi ?>
                </div>
            @elseif($a->type == 2)
                <center>
                    <img src="{{asset('/tentang/'.$a->isi)}}" style="width:50%;" alt="">
                </center>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection