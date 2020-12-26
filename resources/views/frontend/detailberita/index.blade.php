@extends('frontend.template')
@section('title')
    Detail Berita
@endsection

@section('content')
    <div class="row" data-aos="zoom-out" style="margin-top:100px">
        <div class="col-md-8">
            <center>
                <img src="{{asset('/news/'.$news->foto)}}" style="width:80%; heigth:200px;" class="img-responsive animate__animated" alt="">
            </center>
            <br>
            <center>
                <h3>{{$news->judul}}</h3>
            </center>
            <div style="word-wrap: break-word; padding-left:10%">
                <?= $news->deskripsi ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-header" style="background-color: dimgrey; color:white">
                    <h6><i class="fas fa-newspaper"></i> Artikel Lainya</h6>
                </div>
                <div class="card-body">
                    @foreach($lainnya as $a)
                        <div class="card animate__animated">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{asset('/news/'.$a->foto)}}" style="width:100%;"  class="img-responsive" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h6><a href="{{route('detailberita',encrypt($a->id_news))}}">{{$a->judul}}</a></h6>
                                        <p><?= substr($a->deskripsi,0,20)?>&nbsp;....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
@endsection