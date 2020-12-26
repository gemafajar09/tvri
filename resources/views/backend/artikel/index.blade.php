@extends('backend.template')
@section('title')
Play List Program
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
                    <h5 class="m-0">Play List Program</h5>
                </div>
                <div class="float-right">
                    <a href="{{route('addartikel')}}" class="btn btn-round btn-outline-success btn-sm"><i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:40px; text-align:center">No</th>
                            <th style="width:100px">Judul</th>
                            <th style="width:100px">Kategori</th>
                            <th style="width:250px;">Description</th>
                            <th style="width:80px;">Foto</th>
                            <th style="width:60px; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $i => $a)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$a->judul}}</td>
                            <td>{{$a->kategori}}</td>
                            <td><?= substr($a->descripsi,0,200) ?></td>
                            <td><img src="{{asset('/artikel/'.$a->foto)}}" style="width:120px; height:100px" alt=""></td>
                            <td style="text-align:center">
                                <a href="{{route('editartikel',encrypt($a->id_artikel))}}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('deleteartikel',encrypt($a->id_artikel))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
@endsection