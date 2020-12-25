@extends('frontend.template')
@section('title')
    Detail Berita
@endsection

@section('content')
    <div class="row" data-aos="zoom-out" style="margin-top:80px">
        <div class="col-md-12">
            <iframe class="responsive-iframe" width="100%" height="550px" src="{{$live->link}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
@endsection