@extends('backend.template')
@section('title')
Link Lainya
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
                    <h5 class="m-0">Link Lainya</h5>
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
                            <th style="width:35%; text-align:center">Nama Tautan</th>
                            <th style="width:35%; text-align:center">Link Tautan</th>
                            <th style="width:20%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $i => $a)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td style="text-align:center">{{$a->nama_tautan}}</td>
                            <td style="text-align:center">{{$a->link_tautan}}</td>
                            <td style="text-align:center">
                                <button type="button" onclick="edit('{{$a->id_tautan}}','{{$a->nama_tautan}}','{{$a->link_tautan}}')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                                <a href="{{route('linklainyadelete',encrypt($a->id_tautan))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
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
          <form action="{{route('linklainyasave')}}" method="post">
              @csrf
              <div class="form-grou">
                  <label for="">Nama Tautan</label>
                  <input type="hidden" name="id_tautan" id="id_tautan">
                  <input type="text" class="form-control" name="nama" id="nama" required>
              </div>
              <div class="form-group">
                  <label for="">Link Tautan</label>
                  <input type="text" class="form-control" name="link" id="link">
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
        $('#tautan').modal()
    }

    function edit(id,nama,link)
    {
        $('#id_tautan').val(id);
        $('#nama').val(nama);
        $('#link').val(link);
        $('#tautan').modal()
    }
</script>
@endsection