@extends('frontend.template')
@section('title')
    Program Acara
@endsection

@section('content')
    <div class="row" data-aos="zoom-out" style="margin-top:100px">
        <div class="col-md-8">
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
            <br>
            <center><h3>Program Acara Terkait</h3></center>
            <hr style="border: 2 solid:black">
            <div class="container row" data-aos="zoom-out">
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
        <div class="col-md-4">
            <div class="card card-primary card-outline  animate__animated">
                <div class="card-header" style="background: linear-gradient(to right, #3399ff 5%, #000099 100%); color:white">
                    <h6><i class="fas fa-newspaper">&nbsp;</i> Program Lainya</h6>
                </div>
                <div class="card-body">
                    @foreach($lainnya as $a)
                        <div class="row py-1">
                            <div class="col-md-4">
                                <img src="{{asset('/artikel/'.$a->foto)}}" style="width:100%; height:100%"  class="img-responsive" alt="">
                            </div>
                            <div class="col-md-8">
                                <h6><a href="{{route('programdetail',encrypt($a->id_artikel))}}">{{$a->judul}}</a></h6>
                                <p><?= substr($a->descripsi,0,40)?>&nbsp;....</p>
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