@extends('backend.template')
@section('title')
Rate Card
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
                    <h5 class="m-0">Rate Card</h5>
                </div>
                <div class="float-right">
                    {{-- <button type="button" onclick="add()" class="btn btn-round btn-outline-success btn-sm"><i class="fa fa-plus"></i></button> --}}
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:10%; text-align:center">No</th>
                            <th style="width:20%; text-align:center">Kategori Rate Card</th>
                            <th style="width:20%; text-align:center">Foto Rate Card</th>
                            <th style="width:30%; text-align:center">Deskripsi</th>
                            <th style="width:20%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $i => $a)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td style="text-align:center">{{$a->kategori_rate}}</td>
                            <td style="text-align:center"><img src="{{asset('/rate/'.$a->image_rate)}}" style="width:40%;" alt=""></td>
                            <td style="text-align:center"><?= $a->deskripsi_rate ?></td>
                            <td style="text-align:center">
                                <button type="button" onclick="edit('{{$a->id_rate}}','{{$a->kategori_rate}}','{{$a->image_rate}}','{{$a->deskripsi_rate}}')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                                {{-- <a href="{{route('retecarddelete',encrypt($a->id_rate))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
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
          <form action="{{route('retecardsave')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-grou">
                  <label for="">Kategori Rate</label>
                  <input type="hidden" name="id_rate" id="id_rate">
                  <input type="text" readonly class="form-control" name="kategori_rate" id="kategori_rate" required>
              </div>
              <div class="form-group">
                  <label for="">Image Rate</label>
                  <input type="file" class="form-control" name="image" id="">
                  <p>
                      <span id="dis"><i style="color:red" id="foto"></i></span>
                  </p>
                </div>
              <div class="form-group">
                  <label for="">Deskripsi</label>
                  <textarea name="deskripsi_rate" id="deskripsi_rate" class="form-control" id="" cols="30" rows="10"></textarea>
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
        $('#dis').hide()
    }

    function edit(id,kategori,image,desc)
    {
        $('#id_rate').val(id);
        $('#kategori_rate').val(kategori);
        $('#foto').html(image);
        $('#dis').show()
        $('#deskripsi_rate').val(desc);
        $('#tautan').modal()
    }
</script>
@endsection