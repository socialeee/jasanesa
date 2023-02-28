@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pakar Management</h1>
@stop
@section('content')


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
        data-href="{{ route('pakar.create') }}" data-container=".my-modal">
        add konsultan
    </button>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Input gagal.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">add consultant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pakar.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Unggah Foto Profil consultant</label>
                                <input class="form-control" type="file" id="image" name="pakarFoto" required>
                            </div>
                            <label for="exampleInputEmail1" class="form-label">Nama konsultan</label>
                            <input type="text" name="pakarName" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">bidang</label>
                            <input type="text" name="pakarBidang" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">harga jasa</label>
                            <input type="number" name="pakarHarga" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">deskripsi</label>
                            <input type="text" name="pakarDeskripsi" class="form-control" required>
                        </div>
                        {{-- <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">email</label>
                          <input type="email" name="deskripsi" class="form-control" required>
                      </div> --}}
                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                data-dismiss="modal">tutup</button><button class="btn btn-primary"
                                type="submit">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <hr>

    <div class="card shadow">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead class="thead-light">
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Pakar</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Harga Jasa</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @php
                        $index = 0;
                    @endphp
                    @foreach ($pakars as $pakar)
                        @php
                            $index = $index + 1;
                        @endphp
                        <tr>
                            <td>{{ $index }}</td>

                            <td><img src="{{ $pakar->showImage() }}" width="50" height="80"></td>
                            <td>{{ $pakar->nama_pakar }}</td>
                            <td>{{ $pakar->bidang }}</td>
                            <td>{{ number_format($pakar->harga_jasa, 2, ',', '.') }}</td>
                            <td>{{ $pakar->deskripsi }} </td>
                            <td class="d-flex align-items-center justify-content-center gap-1">
                                {{-- <a href="{{ route('pakar.show', $pakar->id) }}" class="btn btn-success">
                                    Lihat
                                </a> --}}
                                <button class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal"
                                    data-target="#exampleModal{{ $pakar->id }}">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                                <form action="{{ route('pakar.destroy', $pakar->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm ('Apakah Anda Yakin?');"
                                        class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    {{-- <td>
                                        <button data-toggle="modal" data-target="modaledit{{$pakar->id}}" type="button"
                                            class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                            <i class="fa fa-lg fa-fw fa-pen"></i>
                                        </button>
                                        
                                    </td> --}}
                                </form>
                            </td>

                        </tr>
                        <div class="modal fade" id="exampleModal{{ $pakar->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal Edit
                                            {{ $pakar->nama_pakar }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('pakar.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Unggah Foto Profil
                                                        consultant</label>
                                                    <input class="form-control" type="file" id="image"
                                                        name="pakarFoto" required>
                                                </div>
                                                <label for="exampleInputEmail1" class="form-label">Nama konsultan</label>
                                                <input type="text" name="pakarName" class="form-control"
                                                    value="{{ $pakar->nama_pakar }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">bidang</label>
                                                <input type="text" name="pakarBidang" class="form-control"
                                                    value="{{ $pakar->bidang }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">harga jasa</label>
                                                <input type="number" name="pakarHarga" class="form-control"
                                                    value="{{ $pakar->harga_jasa, 2, ',', '.' }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">deskripsi</label>
                                                <input type="text" name="pakarDeskripsi" class="form-control"
                                                    value="{{ $pakar->deskripsi }}" required>
                                            </div>
                                            {{-- <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">email</label>
                                          <input type="email" name="deskripsi" class="form-control" required>
                                      </div> --}}
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">tutup</button><button class="btn btn-primary"
                                                    type="submit">Simpan</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $pakars->links() }}
    </div>
    <div class="modal fade my-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true"></div>
@stop
