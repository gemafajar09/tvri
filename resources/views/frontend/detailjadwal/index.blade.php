@extends('frontend.template')

@section('content')
<div class="container" style="margin-top:80px;padding-bottom:20px">
    <div class="row" data-aos="zoom-out">
        <div class="col-md-12" style="margin-bottom:30px">
            <form action="{{route('schedulesearch')}}" method="post" class="float-right">
                @csrf
                <div class="form-inline">
                    <label for="">Filter :</label>
                    <input type="month" name="bulan" class="mx-3 form-control">
                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        @foreach($show as $a)
        <div class="col-md-4">
            <div class="card" style="background: linear-gradient(to right, #000046, #1cb5e0); color:white">
                <div class="card-header">
                    {{tanggal_indonesia($a->tanggal)}}
                </div>
                <div class="card-body">
                    <?php $data = DB::table('tb_jadwal')->where('tanggal',$a->tanggal)->get(); ?>
                    <table style="width:100%; color:white" class="table table-striped table-responsive">
                        <thead>
                            @foreach($data as $b)
                            <tr>
                                <th style="width:10%">{{$b->jam}}</th>
                                <th style="padding-left:20px">{{$b->nama_acara}}</th>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection