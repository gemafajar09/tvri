@extends('backend.template')
@section('title')
Gallery
@endsection

@section('content')
<style>
    .dnow-regionsContent {
    background-color: SlateGray;
    position: relative;
    width: 100%;
    height: 100%;
    opacity: 0.8;
    }
    .dnow-regionsContent .card-img-overlay img {
        max-height: 40rem;
    }
</style>
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
                    <h5 class="m-0">Gallery</h5>
                </div>
                <div class="float-right">
                    <button class="btn btn-outline-primary btn-sm" type="button" onclick="add()"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach($gallery as $a)
                    <div class="col-md-3 col-sm-12">
                        <section class="dnow-regionsWrap">
                            <div class="dnow-regionsContent">
                               <div class="card bg-dark text-white">
                                  <img src="{{asset('/gallery/'.$a->foto)}}" style="width:100%; height:100%" alt="">
                                  <div class="card-img-overlay d-flex align-items-center container">
                                     <div class="row  mb-5">
                                        <div class=" col-sm-12 text-content">
                                           <a href="{{ route('deletegallery',encrypt($a->id_gallery)) }}" class="fa fa-trash" style="color:grey"></a>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                        </section>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="addgallery" style="background-color:transparent">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <form action="{{ route('savegallery')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="">Foto</label>
                  <input type="file" class="form-control" name="foto" id="foto">
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
    function add()
    {
        $('#addgallery').modal();
    }
</script>
@endsection