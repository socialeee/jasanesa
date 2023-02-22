@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pakar Management</h1>
@stop
@section('content')

    
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" href="{{ route('pakar.create') }}">
            add konsultan
        </button>
        <!-- Modal -->
        @include('pages.admin.pakar.create')
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
                    $index = $index+1;
                    @endphp
                        <tr>
                            <td>{{ $index }}</td>
                            <td><img src={{ URL::to("/images".$pakar->foto_profil) }}></td>
                            <td>{{ $pakar->nama_pakar }}</td>
                            <td>{{ $pakar->bidang }}</td>
                            <td>{{ number_format($pakar->harga_jasa, 2, ',', '.') }}</td>
                            <td>{{ $pakar->deskripsi }} </td>
                            <td>
                                <a href="{{ route('pakar.show', $pakar->id) }}" class="btn btn-success">
                                    Lihat
                                </a>
                            </td>
                            <form action="{{ route('pakar.destroy', $pakar->id) }}" method="POST">
                            <td>
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="{{ route('pakar.edit', $pakar->id) }}"
                                    class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm ('Apakah Anda Yakin?');"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $pakars->links() }}
    </div>
@stop
