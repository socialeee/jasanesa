@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>diklat Management</h1>
@stop
@section('content')

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
        data-href="{{ route('diklat.create') }}" data-container=".app-modal">
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
                    <form action="{{ route('diklat.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">judul</label>
                            <input type="text" name="diklatName" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">informasi diklat</label>
                            <input type="textarea" name="diklatInfo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">pembahasan</label>
                            {{-- <input type="textarea" name="diklatBahas" class="form-control" required> --}}
                            <textarea class="form-control" name="diklatBahas" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">tanggal</label>
                            <input type="date" name="diklatDate" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">pukul</label>
                            <input type="time" name="diklatTime" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">harga</label>
                            <input type="number" name="diklatHarga" class="form-control" required />
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
                    <th scope="col">judul</th>
                    <th scope="col">informasi diklat</th>
                    <th scope="col">pembahasan diklat</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">waktu</th>
                    <th scope="col">harga</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody>
                    @php
                        $index = 0;
                    @endphp
                    @foreach ($diklat as $pelatihan)
                        @php
                            $index = $index + 1;
                        @endphp
                        <tr>
                            <td>{{ $index }}</td>


                            <td>{{ $pelatihan->judul }}</td>
                            <td>{{ $pelatihan->informasi_diklat }}</td>
                            <td>{{ $pelatihan->pembahasan_diklat }}</td>
                            <td>{{ $pelatihan->date_start }}</td>
                            <td>{{ $pelatihan->time_start }}</td>
                            <td>{{ number_format($pelatihan->harga, 2, ',', '.') }}</td>
                            <td class="d-flex align-items-center justify-content-center gap-1">

                                <button class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal"
                                    data-target="#exampleModal{{ $pelatihan->id }}">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                                <form action="{{ route('diklat.destroy', $pelatihan->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm ('Apakah Anda Yakin?');"
                                        class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        <div class="modal fade" id="exampleModal{{ $pelatihan->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal Edit
                                            {{ $pelatihan->judul }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('diklat.update', $pelatihan) }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ method_field('PUT') }}
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">judul</label>
                                                <input type="text" name="diklatName" class="form-control"
                                                    value="{{ $pelatihan->judul }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">informasi
                                                    diklat</label>
                                                <input type="text" name="diklatInfo" class="form-control"
                                                    value="{{ $pelatihan->informasi_diklat }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">pembahasan
                                                    diklat</label>
                                                <textarea class="form-control" name="diklatBahas" id="exampleFormControlTextarea1" rows="3"
                                                    value="{{ $pelatihan->pembahasan_diklat }}" required></textarea>
                                                {{-- <input type="text" name="diklatBahas" class="form-control"
                                                    value="{{ $pelatihan->pembahasan_diklat }}" required> --}}
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">tanggal</label>
                                                <input type="date" name="diklatDate" class="form-control"
                                                    value="{{ $pelatihan->date_start }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">pukul</label>
                                                <input type="time" name="diklatTime" class="form-control"
                                                    value="{{ $pelatihan->time_start }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">harga jasa</label>
                                                <input type="number" name="diklatHarga" class="form-control"
                                                    value="{{ $pelatihan->harga, 2, ',', '.' }}" required>
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
        {{ $diklat->links() }}
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
