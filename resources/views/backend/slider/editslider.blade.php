@extends('backend.template')
@section('title')
Add Slider
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
                        <a href="{{route('viewslider')}}" class="btn btn-round btn-sm btn-outline-danger"><i class="fas fa-backspace"></i></a>
                </div>
                <center>
                    <h5 style="margin-left:20px" class="m-0">Add Slider</h5>
                </center>
            </div>
            <div class="card-body">
                <form action="{{route('updateslider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_slider" value="{{$data->id_slider}}">
                    <div class="form-group">
                        <label for="">Uploa dFile</label>
                        <input type="file" name="slider" id="slider" class="form-control">
                        <i style="color:red">File : <a style="color:black" href="{{asset('/slider/'.$data->image)}}">{{$data->image}}</a></i>
                    </div>
                    <div class="form-group">
                        <label for="">Deskription</label>
                        <textarea name="deskripsi" id="" class="form-control">{{$data->description}}</textarea>
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