@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pakar Management</h1>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script> --}}
@stop
@section('content')


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
        data-href="{{ route('pakar.create') }}" data-container=".app-modal">
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
                            <label for="exampleInputEmail1" class="form-label">NIP</label>
                            <input type="text" name="pakarNIP" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email konsultan</label>
                            <input type="text" name="pakarEmail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">bidang</label>
                            <select name="pakarBidang" class="form-control" required>
                                <option value="">Pilih Bidang</option>
                                @foreach ($bidangs as $id => $nama)
                                    <option value="{{ $id }}">{{ $nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">deskripsi</label>
                            <input type="text" name="pakarDeskripsi" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">pengalaman</label>
                            <input type="text" name="pakarPengalaman" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">harga jasa</label>
                            <input type="number" name="pakarHarga" class="form-control" required>
                        </div>
                        <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                data-dismiss="modal">tutup</button><button class="btn btn-primary"
                                type="submit">Simpan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <hr>

    <div class="card shadow">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="example" class="display nowrap" style="width:100%">
                <thead class="thead-light">
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Pakar</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Pengalaman Kerja</th>
                    <th scope="col">Harga Jasa</th>
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
                            <td>{{ $pakar->NIP }}</td>
                            <td>{{ $pakar->email_pakar }}</td>
                            <td>{{ $pakar->bidang_id }}</td>
                            <td>{{ $pakar->deskripsi }} </td>
                            <td>{{ $pakar->pengalaman }} </td>
                            <td>{{ number_format($pakar->harga_jasa, 2, ',', '.') }}</td>
                            <td class="d-flex align-items-center justify-content-center gap-1">

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
                                        <form action="{{ route('pakar.update', $pakar) }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ method_field('PUT') }}
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Unggah Foto Profil
                                                        consultant</label>
                                                    <input class="form-control" type="file" id="image"
                                                        name="pakarFoto" required>
                                                </div>
                                                <label for="exampleInputEmail1" class="form-label">Nama
                                                    konsultan</label>
                                                <input type="text" name="pakarName" class="form-control"
                                                    value="{{ $pakar->nama_pakar }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">NIP</label>
                                                <input type="text" name="pakarNIP" class="form-control"
                                                    value="{{ $pakar->NIP }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">email</label>
                                                <input type="text" name="pakarEmail" class="form-control"
                                                    value="{{ $pakar->email_pakar }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">bidang</label>
                                                <select name="pakarBidang" class="form-control" required>
                                                    <option value="">Pilih Bidang</option>
                                                    @foreach ($bidangs as $id => $nama)
                                                        <option value="{{ $id }}">{{ $nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">deskripsi</label>
                                                <input type="text" name="pakarDeskripsi" class="form-control"
                                                    value="{{ $pakar->deskripsi }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">pengalaman
                                                    kerja</label>
                                                <input type="text" name="pakarPengalaman" class="form-control"
                                                    value="{{ $pakar->pengalaman }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">harga jasa</label>
                                                <input type="number" name="pakarHarga" class="form-control"
                                                    value="{{ $pakar->harga_jasa, 2, ',', '.' }}" required>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">tutup</button><button class="btn btn-primary"
                                                    type="submit">Simpan</button></div>
                                        </form>
                                    </div>
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
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });
    </script>
@stop
