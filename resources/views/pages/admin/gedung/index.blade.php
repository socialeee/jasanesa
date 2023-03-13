@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pakar Management</h1>
@stop
@section('content')
    <div class="card shadow">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead class="thead-light">
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama Pakar</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Harga Jasa</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    @foreach ($pakars as $pakar)
                        <tr>
                            {{-- <td>{{ $pakar->number }}</td> --}}
                            <td>Cikal Foto</td>
                            <td>{{ $pakar->nama_pakar }}</td>
                            <td>{{ $pakar->bidang }}</td>
                            <td>{{ number_format($pakar->harga_jasa, 2, ',', '.') }}</td>
                            <td>{{ $pakar->deskripsi }} </td>
                            <td>
                                <a href="{{ route('pakar.show', $pakar->id) }}" class="btn btn-success">
                                    Lihat
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('pakar.edit', $pakar->id) }}"
                                    class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </a>
                                <a href="{{ route('pakar.show', $pakar->id) }}"
                                    class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $pakars->links() }}
    </div>
@stop
