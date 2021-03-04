@extends('backend.template')
@section('title')
Link Streaming
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
                    <h5 class="m-0">Link Streaming</h5>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:40px; text-align:center">No</th>
                            <th style="width:200px">Link</th>
                            <th style="width:60px; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:40px; text-align:center">1</td>
                            <td>{{$data->link}}</td>
                            <td style="text-align:center">
                                <button type="button" onclick="tampil('<?= $data->id_link ?>','<?= $data->link ?>')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="linkedit" style="background-color:transparent">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
        <form action="{{ route('uplink')}}" method="POST">
            @csrf
            <input type="hidden" id="id_link" name="id_link">
            <div class="form-group">
                <label for="">Link</label>
                <input type="text" class="form-control" name="link" id="link">
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
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
    function tampil(id,link){
        $('#id_link').val(id);
        $('#link').val(link);
        $('#linkedit').modal()
    }
</script>
@endsection