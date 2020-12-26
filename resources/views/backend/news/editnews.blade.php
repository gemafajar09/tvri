@extends('backend.template')
@section('title')
Edit News
@endsection

@section('content')
<div class="row py-3">
    <div class="col-md-12">
        <div style="display:none" id="validasi" class="alert alert-danger">
            {{session('validasi')}}
        </div>
        <div style="display:none" id="success" class="alert alert-success">
            {{session('pesan')}}
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="float-left">
                        <a href="{{route('viewnews')}}" class="btn btn-round btn-sm btn-outline-danger"><i class="fas fa-backspace"></i></a>
                </div>
                <center>
                    <h5 style="margin-left:20px" class="m-0">Edit News</h5>
                </center>
            </div>
            <div class="card-body">
                <form action="{{route('updatenews')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="id_news" value="{{$data->id_news}}">
                    <div class="form-group">
                        <label for="">Judul news</label>
                        <input type="text" name="judul" id="judul" value="{{$data->judul}}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <i style="color:red">File : <a style="color:black" href="{{asset('/news/'.$data->foto)}}">{{$data->foto}}</a></i>
                    </div>
                    <div class="form-group">
                        <label for="">Deskription</label>
                        <textarea name="deskripsi ckeditor" id="" class="form-control">{{$data->deskripsi}}</textarea>
                    </div>
                    <div class="float-right">
                        <button style="width:200px" type="reset" class="btn btn-outline-success">Reset</button>
                        <button style="width:200px" type="submit" class="btn btn-outline-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if (session('validasi'))
	<script>
		$('#error').show();
		setInterval(function(){ $('#validasi').hide(); }, 5000);
	</script>
@endif
@if (session('pesan'))
	<script>
		$('#success').show();
		setInterval(function(){ $('#success').hide(); }, 5000);
	</script>
@endif
@endsection