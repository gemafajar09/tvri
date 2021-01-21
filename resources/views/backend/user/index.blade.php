@extends('backend.template')
@section('title')
User
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
                    <h5 class="m-0">User</h5>
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
                            <th style="width:20%; text-align:center">Nama</th>
                            <th style="width:20%; text-align:center">Email</th>
                            <th style="width:30%; text-align:center">Status</th>
                            <th style="width:20%; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $i => $a)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td style="text-align:center">{{ $a->nama_user }}</td>
                            <td style="text-align:center"><?= $a->username ?></td>
                            <td style="text-align:center">
                                <?php 
                                if($a->level == 'Acara'){
                                    echo "Admin Acara";
                                }elseif($a->level == 'Berita'){
                                    echo "Admin Berita";
                                } else{
                                    echo $a->level;
                                }
                                ?>
                            </td>
                            <td style="text-align:center">
                                <button type="button" onclick="edit('{{$a->id_user}}','{{$a->nama_user}}','{{$a->username}}','{{$a->level}}')" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i></button>
                                <a href="{{route('deleteuser',encrypt($a->id_user))}}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
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
            <form action="{{route('saveuser')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="hidden" name="id_user" id="id_user">
                    <input type="text" class="form-control" name="nama_user" id="nama_user" required>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <span style="color: red; display: none;" id="pesan_edit"><i>*Abaikan Jika Tidak Ingin Ganti Password</i></span>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="">-Pilih-</option>
                        <option value="Superadmin">Superadmin</option>
                        <option value="Acara">Admin Acara</option>
                        <option value="Berita">Admin Berita</option>
                    </select>
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
        $('#id_user').val('');
        $('#nama_user').val('');
        $('#username').val('');
        $('#level').val('').change();
        $('#pesan_edit').css('display', 'none');
        $('#tautan').modal()
    }

    function edit(id,nama_user,username,level)
    {
        $('#id_user').val(id);
        $('#nama_user').val(nama_user);
        $('#username').val(username);
        $('#level').val(level).change();
        $('#password').prop('required',false);
        $('#pesan_edit').css('display', 'block');
        $('#tautan').modal()
    }
</script>
@endsection