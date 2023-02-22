@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sport Management</h1>
@stop
@section('content')

     <!-- Modal -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <label for="exampleInputEmail1" class="form-label">Nama Lapangan</label>
                    <input type="text" name="nomor_so" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi Lapangan</label>
                    <input type="text" name="nama" class="form-control" required>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Harga Lapangan</label>
                      <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">tutup</button><button class="btn btn-primary" type="submit">Simpan</button></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="card shadow">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead class="thead-light">
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama sport</th>
                    <th scope="col">Harga Jasa</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody>
                    @foreach ($sports as $sport)
                        <tr>
                            {{-- <td>{{ $sport->number }}</td> --}}
                            <td>{{ $sport->id }}</td>
                            <td>Cikal Foto</td>
                            <td>{{ $sport->nama_lapangan }}</td>
                            <td>{{ number_format($sport->harga_jasa, 2, ',', '.') }}</td>
                            <td>{{ $sport->deskripsi }} </td>
                            {{-- <td>
                                <a href="{{ route('sport.show', $sport->id) }}" class="btn btn-success">
                                    Lihat
                                </a>
                            </td> --}}
                            <td>
                                {{-- <a href="{{ route('sport.edit', $sport->id) }}" --}}
                                <a href="#"
                                    class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </a>
                                {{-- <a href="{{ route('sport.show', $sport->id) }}" --}}
                                <a href="#"
                                    class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $sports->links() }}
    </div>
@stop
