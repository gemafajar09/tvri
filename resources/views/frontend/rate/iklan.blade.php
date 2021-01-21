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
                        <img src="{{asset('/rate/'.$data->image_rate)}}" style="width:50%; heigth:50%;" class="img-responsive animate__animated" alt="">
                    </center>
                    <br>
                    <div style="word-wrap: break-word; padding-left:10%">
                        <?= $data->deskripsi_rate?>
                    </div>
                </div>
            </div>
            
        </div>
        @include('frontend.navigarot')
        <br>
    </div>
</div>
@endsection