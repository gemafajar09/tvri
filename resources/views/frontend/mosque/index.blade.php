@extends('frontend.template')

@section('content')
<center>
    <h3 style="margin-top:100px;"><b>INFAQ</b></h3>
</center>
<div class="" style="padding-bottom:20px; background: linear-gradient(to top, #131f37, #192d50);">
    <div class="row" data-aos="zoom-out" style="margin-top:2%">
        <div class="col-md-1"></div>
        <div class="col-md-6 mt-4" style="margin-right: -13px">
            <div class="border-bottom" style="color: #fff;
                                            background: transparent;">LAPORAN INFAQ</div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="border-bottom" style="margin-left: -13px;
                                            color: #fff;
                                            background: transparent;">MARI BER-INFAQ</div>
        </div>
    </div>
    <div class="row" data-aos="zoom-out">
        <div class="col-md-1"></div>
        <div class="col-md-6" style="margin-right: -12px">
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
        <div class="col-md-4 bg-light mt-4 mb-3">
            <div class="mt-3 text-bolt" style="color: #192d50;">LAPORAN SALDO DANA INFAQ</div>
            <hr style="margin-top:-1px">
            <h2 style="color: #192d50;">SALDO: <strong style="float: right; color: #192d50;">Rp Total,-</strong></h2>
            <h6 style="color: #192d50;">Salurkan infaq Anda melalui rekening berikut</h6><hr>
            <div style="text-align:center; background: linear-gradient(to top, #131f37, #192d50); height: 100px; color:#fff">
                <strong>Nama Bank</strong>
                <div>Kode:</div>
                <div>----------</div>
                <div>Atas Nama:-----</div>
            </div>
            <div class="btn mt-2 font-weight-bold" style="border: 3px solid #192d50; background:transparent; color: #192d50; float: right;">LIHAT LAPORAN</div>
        </div>
    </div>
    <br>
</div>
    @include('frontend.instagram')
@endsection