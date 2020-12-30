@extends('backend.template')
@section('title')
    Tentang Kami
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
                    <h5 class="m-0">Tentang Kami</h5>
                </div>
                <div class="float-right">
                    <a href="{{route('addinfo')}}" class="btn btn-round btn-outline-success btn-sm"><i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:40px; text-align:center">No</th>
                            <th style="width:150px; text-align:center">Judul</th>
                            <th style="width:250px; text-align:center">Isi</th>
                            <th style="width:60px; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($isi as $i => $a)
                        <tr>
                            <td style="width:40px;text-align:center">{{$i+1}}</td>
                            <td>{{$a->title}}</td>
                            <td>
                                <?php if($a->type == 1){
                                    echo $a->isi;
                                }else{ ?>
                                    <img src="{{asset('/tentang/'.$a->isi)}}" style="width:100px" alt="">
                                <?php } ?>
                            </td>
                            <td style="text-align:center">
                                <a href="{{route('editinfo',encrypt($a->id_tentang))}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('deleteinfo',encrypt($a->id_tentang))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash">
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