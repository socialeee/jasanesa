{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User Management</h1>
@stop
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Siswa</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('user.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{ route('user.store') }}" method="POST"> 
    @csrf

     {{-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                <input type="text" name="NIS" class="form-control" placeholder="NIS SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Siswa:</strong>
                <input type="text" name="NamaSiswa" class="form-control" placeholder="NAMA SISWA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> --}}
    
    <!-- Modal -->
    <div class="modal fade" id="modal_frame" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
                <div class="mb-3">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Unggah Foto Profil</label>
                      <input class="form-control" type="file" id="formFile" name="" multiple="true" required>
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Nama user</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">username</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">email</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">tutup</button><button class="btn btn-primary" type="submit">Simpan</button></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal -->  
    <hr>

</form>
@endsection

