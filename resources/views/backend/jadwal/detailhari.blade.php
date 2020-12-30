@extends('backend.template')
@section('title')
Schedule
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
                    <a href="{{route('schedule')}}" class="btn btn-round btn-sm btn-outline-danger"><i class="fas fa-backspace"></i></a>
                </div>
                    <center>
                        <h5 style="margin-left:20px" class="m-0">Schedule</h5>
                    </center>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:10px; text-align:center">No</th>
                            <th style="width:50px">Tanggal Tayang</th>
                            <th style="width:50px">Jam Tayang</th>
                            <th style="width:100px">Program Acara</th>
                            <th style="width:60px; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hari as $i => $a)
                        <tr>
                            <td style="text-align:center">{{$i+1}}</td>
                            <td>{{tanggal_indonesia($a->tanggal)}}</td>
                            <td>{{$a->jam}}</td>
                            <td>{{$a->nama_acara}}</td><td style="text-align:center">
                                <button type="button" onclick="editjadwal('{{$a->id_jadwal}}','{{$a->jam}}','{{$a->nama_acara}}')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="editjadwal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
            <div class="card card-danger card-outline">
                <form action="{{route('editschedule')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="id_jadwal" id="id_jadwal">
                        <div class="form-group">
                            <label for="">Jam Tayang</label>
                            <input type="text" id="jam" name="jam" class="form-control" required placeholder="EXAMPLE:08.00">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Program Acara</label>
                            <input type="text" id="program" name="program" class="form-control" required placeholder="Program Acara">
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
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
    function editjadwal(id,jam,program)
    {
        $('#id_jadwal').val(id);
        $('#jam').val(jam);
        $('#program').val(program);
        $('#editjadwal').modal()
    }
</script>
@endsection