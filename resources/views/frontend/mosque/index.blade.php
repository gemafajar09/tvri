@extends('frontend.template')

@section('content')
<center>
    <h3 style="margin-top:82px;"><b>INFAQ</b></h3>
</center>
<div class="" style="padding-bottom:20px; background: linear-gradient(to top, #131f37, #192d50);">
    <div class="">
        <div class="col-md-6 mx-auto text-light">
            <div class="row  pt-2">
                <div class="col-md-6">
                    <h6>Waktu sholat di Aceh Besar</h6>
                </div>
                <div class="col-6">
                    <h6 class="float-right"><strong style="color: #fc7c1f;">{{ $data_jadwal['tanggal'] }}</strong></h6>
                </div>
            </div>
            <table class="table">
                <tr class="table-light">
                    <td style="text-align:center; padding: 4px; font-size: 12px; background-color: #EBE9EA;">Subuh <br> <strong style="font-size: 20px"> {{ $data_jadwal['subuh'] }} </strong></td>
                    <td style="text-align:center; padding: 4px; font-size: 12px; ">Terbit <br> <strong style="font-size: 20px"> {{ $data_jadwal['terbit'] }} </strong></td>
                    <td style="text-align:center; padding: 4px; font-size: 12px; background-color: #EBE9EA;">Dzuhur <br> <strong style="font-size: 20px"> {{ $data_jadwal['dzuhur'] }} </strong></td>
                    <td style="text-align:center; padding: 4px; font-size: 12px; ">Ashar <br> <strong style="font-size: 20px"> {{ $data_jadwal['ashar'] }} </strong></td>
                    <td style="text-align:center; padding: 4px; font-size: 12px; background-color: #EBE9EA;">Maghrib <br> <strong style="font-size: 20px"> {{ $data_jadwal['maghrib'] }} </strong></td>
                    <td style="text-align:center; padding: 4px; font-size: 12px; ">Isya <br> <strong style="font-size: 20px"> {{ $data_jadwal['isya'] }} </strong></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row" data-aos="zoom-out">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-6 col-sm-6 mt-4" style="padding-right: 23px">
            <div class="border-bottom" style="color: #fff;
                                            background: transparent;">LAPORAN INFAQ</div>
        </div>
        <div class="col-md-4 col-sm-4 mt-4 d-none d-md-block">
            <div class="border-bottom" style="margin-left: -35px;
                                            color: #fff;
                                            background: transparent;">MARI BER-INFAQ</div>
        </div>
    </div>
    <div class="row" data-aos="zoom-out" style="margin-right: 0px">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-6 col-sm-12 col-12" style="margin-right: -13px">
            <table style="width:100%;" class="table table-striped table-responsive mt-4">
                <thead class="table-light">
                    <tr>
                        <th style="width:10%; text-align:center">No</th>
                        <th style="width:20%; text-align:center">Tanggal</th>
                        <th style="width:20%; text-align:center">Keterangan</th>
                        <th style="width:30%; text-align:center">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $i => $a)
                    <tr class="text-light">
                        <td style="text-align:center">{{$i+1}}</td>
                        <td style="text-align:center">{{ $a->tgl_kas }}</td>
                        <td style="text-align:center">{{ $a->keterangan }}</td>
                        <td style="text-align:center">Rp {{ number_format($a->pemasukan) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4 col-sm-12 col-12 bg-light mt-4 mb-3">
            <div class="mt-3 text-bolt" style="color: #192d50;">LAPORAN SALDO DANA INFAQ</div>
            <hr style="margin-top:-1px">
            
            <h2 style="color: #192d50;">SALDO: <strong style="float: right; color: #192d50;">Rp {{ number_format($total_saldo->total) }},-</strong></h2>

            <h6 style="color: #192d50;">Salurkan infaq Anda melalui rekening berikut</h6><hr>
            <div style="text-align:center; background: linear-gradient(to top, #131f37, #192d50); height: 100px; color:#fff">
                <strong>Nama Bank</strong>
                <div>Kode:</div>
                <div>----------</div>
                <div>Atas Nama:-----</div>
            </div>
            <a href="{{route('mosque_info_detail')}}" class="btn mt-2 mb-2 font-weight-bold" style="border: 3px solid #192d50; background:transparent; color: #192d50; float: right;">LIHAT LAPORAN</a>
        </div>
    </div>
    <br>
</div>
    <!-- @include('frontend.instagram') -->
@endsection