@extends('frontend.template')

@section('content')
<style>
.dataTables_length{
    color: #fff;
}
.dataTables_filter{
    color: #fff;
}
.dataTables_info{
    color: #fff;
}
</style>
<center>
    <h3 style="margin-top:100px;"><b>DETAIL INFAQ</b></h3>
</center>
<div class="" style="padding-bottom:20px; background: linear-gradient(to top, #131f37, #192d50);">
    <!-- <div class="row" data-aos="zoom-out" style="margin-top:2%">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-4" style="margin-right: -13px">
            <div class="border-bottom" style="color: #fff; background: transparent;">DETAIL INFAQ</div>
        </div>
    </div> -->
    <div class="row" data-aos="zoom-out">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="margin-right: -12px; margin-top:20px">
            <table style="width:100%;" id="example1" class="table table-striped table-responsive mt-4">
                <thead class="table-light">
                        <tr>
                            <th style="width:10%; text-align:center">No</th>
                            <th style="width:20%; text-align:center">Tanggal</th>
                            <th style="width:30%; text-align:center">Transaksi</th>
                            <th style="width:20%; text-align:center">Keterangan</th>
                            <th style="width:30%; text-align:center">Pemasukan</th>
                            <th style="width:30%; text-align:center">Pengeluaran</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $i => $a)
                        <tr class="text-light">
                            <td style="text-align:center">{{$i+1}}</td>
                            <td style="text-align:center">{{ $a->tgl_kas }}</td>
                            <td style="text-align:center">{{ $a->jenis_kas }}</td>
                            <td style="text-align:center">{{ $a->keterangan }}</td>
                            <td style="text-align:center">Rp {{ number_format($a->pemasukan) }}</td>
                            <td style="text-align:center">Rp {{ number_format($a->pengeluaran) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                        <tfoot>
                            <tr class="text-light">
                                <td></td>
                                <td colspan="4" style="text-align:center">Total Saldo</td>
                                <td style="text-align:center"><strong> Rp {{ number_format($total_saldo->total) }},-</strong></td>
                            </tr>
                        </tfoot>
            </table>
        </div>
        <!-- <div class="col-md-4 bg-light mt-4 mb-3">
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
            <div class="btn mt-2 font-weight-bold" style="border: 3px solid #192d50; background:transparent; color: #192d50; float: right;">LIHAT LAPORAN</div>
        </div> -->
    </div>
    <br>
</div>
    @include('frontend.instagram')
@endsection