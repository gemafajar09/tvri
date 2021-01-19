@extends('frontend.template')
@section('title')
    Gallery
@endsection

@section('content')
<div class="container" style="margin-top:80px;padding-bottom:20px">
    <center>
        <h3><b>GALLERY</b></h3>
    </center>
    <div class="row" data-aos="zoom-out" style="padding-top:5%">
        @foreach($gallery as $a)
        <div class="col-md-3 col-sm-12">
            <img src="{{asset('/gallery/'.$a->foto)}}" style="width:100%;height:100%" alt="">
        </div>
        @endforeach
    </div>
    <br>
    @include('frontend.instagram')
</div>
@endsection