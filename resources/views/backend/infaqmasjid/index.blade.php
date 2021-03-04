@extends('backend.template')
@section('title')
Kas Masjid
@endsection

@section('content')
<div class="row py-3">
    <div class="col-md-12">
        <div style="display:none" id="error" class="alert alert-danger">
            {{session('error')}}
        </div>
        <div style="display:none" id="success" class="alert alert-success">
            {{session('pesan')}}
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="float-left">
                    <h5 class="m-0">INFAQ</h5>
                </div>
                <div class="float-right">
                    <button type="button" onclick="add()" class="btn btn-round btn-outline-success btn-sm"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:10%; text-align:center">No</th>
                            <th style="width:20%; text-align:center">Tanggal</th>
                            <th style="width:30%; text-align:center">Transaksi</th>
                            <th style="width:20%; text-align:center">Keterangan</th>
                            <th style="width:30%; text-align:center">Pemasukan</th>
                            <th style="width:30%; text-align:center">Pengeluaran</th>
                            <th style="width:20%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $i => $a)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td style="text-align:center">{{ $a->tgl_kas }}</td>
                            <td style="text-align:center">{{ $a->jenis_kas }}</td>
                            <td style="text-align:center">{{ $a->keterangan }}</td>
                            <td style="text-align:center">Rp. {{ number_format($a->pemasukan) }}</td>
                            <td style="text-align:center">Rp. {{ number_format($a->pengeluaran) }}</td>
                            <td style="text-align:center">
                                <button type="button" onclick="edit('{{$a->id_kas_masjid}}','{{$a->tgl_kas}}','{{$a->jenis_kas}}','{{$a->keterangan}}','{{$a->pemasukan}}','{{$a->pengeluaran}}')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                                <a href="{{route('deleteinfaq',encrypt($a->id_kas_masjid))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="tautan" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
            <form action="{{route('saveinfaq')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="hidden" name="id_kas_masjid" id="id_kas_masjid">
                    <input type="date" class="form-control" name="tgl_kas" id="tgl_kas" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kas</label>
                    <select name="jenis_kas" id="jenis_kas" class="form-control">
                        <option value="">-Pilih-</option>
                        <option value="Pemasukan">Pemasukan</option>
                        <option value="Pengeluaran">Pengeluaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                </div>
                <div align="right">
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
            </form>
            </div>
        </div>
    
    </div>
</div>

@if (session('validasi'))
	<script>
		$('#error').show();
		setInterval(function(){ $('#error').hide(); }, 5000);
	</script>
@endif
@if (session('pesan'))
	<script>
		$('#success').show();
		setInterval(function(){ $('#success').hide(); }, 5000);
	</script>
@endif

<script>
    function add()
    {
        $('#id_kas_masjid').val('');
        $('#tgl_kas').val('');
        $('#jenis_kas').val('').change();
        $('#keterangan').val('');
        $('#pemasukan').val('');
        $('#pengeluaran').val('');
        $('#pesan_edit').css('display', 'none');
        $('#tautan').modal()
    }

    function edit(id,tgl_kas,jenis_kas,keterangan,pemasukan,pengeluaran)
    {
        $('#id_kas_masjid').val(id);
        $('#tgl_kas').val(tgl_kas);
        $('#jenis_kas').val(jenis_kas).change();
        $('#keterangan').val(keterangan);
        $('#pemasukan').val(pemasukan);
        $('#pengeluaran').val(pengeluaran);
        $('#pesan_edit').css('display', 'block');
        $('#tautan').modal()
    }
</script>
@endsection