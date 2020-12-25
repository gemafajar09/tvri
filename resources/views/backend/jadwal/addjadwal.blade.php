@extends('backend.template')
@section('title')
Add Schedule
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
                        <a href="{{route('schedule')}}" class="btn btn-round btn-sm btn-outline-danger"><i class="fas fa-backspace"></i></a>
                </div>
                <center>
                    <h5 style="margin-left:20px" class="m-0">Add Schedule</h5>
                </center>
            </div>
            <div class="card-body">
                <form action="{{route('saveschedule')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center">
                    <div class="form-inline">
                        <label class="mx-2" for="">Tanggal Tayang</label>&nbsp;
                        <input type="date" name="tanggal" style="width:" class="form-control" id="">
                        <button type="button" class="btn btn-primary mx-5" id="addrow"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                    <div class="row py-2" id="row_add">
                        <div class="col-md-3">
                            <div class="card card-danger card-outline">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Jam Tayang</label>
                                        <input type="text" name="jam[]" class="form-control" required placeholder="EXAMPLE:08.00">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Program Acara</label>
                                        <input type="text" name="program[]" class="form-control" required placeholder="Program Acara">
                                    </div>
                                </div>
                            </div>
                        </div>
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
    $('#addrow').click(function(){
        var body = "<div id='rm' class='rm col-md-3'><div class='card card-danger card-outline'><div class='card-body'><div class='form-group'><label for=''>Jam Tayang</label><input type='text' name='jam[]' class='form-control' required placeholder='EXAMPLE:08.00'></div><div class='form-group'><label for=''>Nama Program Acara</label><input type='text' name='program[]' class='form-control' required placeholder='Program Acara'></div></div></div></div>"
        $('#row_add').append(body);
    })
</script>
@endsection