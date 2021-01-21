@extends('backend.template')
@section('title')
Sosial Media
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
                    <h5 class="m-0">Sosial Media</h5>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:10%; text-align:center">No</th>
                            <th style="width:35%;">Sosial Media</th>
                            <th style="width:35%">Link</th>
                            <th style="width:20%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $i => $a)
                        <tr>
                            <td style="width:40px; text-align:center">{{$i+1}}</td>
                            <td>{{$a->kategori}}</td>
                            <td>{{$a->link}}</td>
                            <td style="text-align:center">
                                <button type="button" onclick="tampil('{{$a->id_sosial}}','{{$a->kategori}}','{{$a->link}}')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                        @endforeach
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
              <input type="hidden" id="id_sosial" name="id_sosial">
              <div class="form-group">
                  <label for="">Sosial Media</label>
                  <input type="text" readonly class="form-control" name="kategori" id="kategori">
              </div>
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
    function tampil(id,kategori,link){
        $('#id_sosial').val(id);
        $('#kategori').val(kategori);
        $('#link').val(link);
        $('#linkedit').modal()
    }
</script>
@endsection