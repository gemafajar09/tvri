@extends('backend.template')
@section('title')
Add Tentang Kami
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
                        <a href="{{route('tentangkami')}}" class="btn btn-round btn-sm btn-outline-danger"><i class="fas fa-backspace"></i></a>
                </div>
                <center>
                    <h5 style="margin-left:20px" class="m-0">Add Tentang Kami</h5>
                </center>
            </div>
            <div class="card-body">
                <form action="{{route('saveinfo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Inputan Berupa</label>
                        <select name="pilihan" id="pilihan" class="form-control">
                            <option value="">-SELECT-</option>
                            <option value="1">Text</option>
                            <option value="2">File</option>
                        </select>
                    </div>
                    <div class="form-group" id="satu" style="display:none">
                        <textarea name="isi" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group" id="dua" style="display:none">
                        <input name="file" type="file" class="form-control">
                    </div>
                    <div class="float-right">
                        <button style="width:200px" type="reset" class="btn btn-outline-success">Reset</button>
                        <button style="width:200px" type="submit" class="btn btn-outline-primary">Save</button>
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
<script>
    $('#pilihan').change(function()
    {
        var id = $(this).val();
        console.log(id);
        if(id == 1)
        {
            $('#satu').show()
            $('#dua').hide()
        }else if(id == 2){
            $('#satu').hide()
            $('#dua').show()
        }
    })
</script>
@endsection