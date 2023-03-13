@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Faculty Management</h1>
@stop

@section('content')
    @if ($message = Session::get('succes'))
     <div class="alert alert-success">
         <p>{{ $message }}</p>
     </div>
     @endif
    {{-- Setup data for datatables --}}
    @php
        $heads = [['label' => 'ID', 'width' => 10], ['label' => 'Name', 'width' => 50], ['label' => 'Actions', 'no-export' => true, 'width' => 20]];
        $index = 0;
    @endphp
    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            add fakultas
        </button>
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
                        <label for="exampleInputEmail1" class="form-label">Nama fakultas</label>
                        <input type="text" name="name" class="form-control" required>
                      </div>
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">tutup</button><button class="btn btn-primary" type="submit">Simpan</button></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal -->  
        <hr>

        @foreach ($faculties as $row)
        @php
        $index = $index+1;
        @endphp
            <tr>
                <td>{{ $index }}</td>
                <td>{{ $row->name }}</td>
                <td>
                    <form action="{{ route('user.destroy', $row->id) }}" method="POST">
                        <a href="{{ route('user.edit',$row->id) }}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>
                        {{-- <button href="{{ route('user.show',$row->id) }}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </button> --}}
                        <a href="{{ route('user.show',$row->id) }}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm ('Apakah Anda Yakin?');"
                        class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                            <i class="fa fa-lg fa-fw fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>
    {{ $faculties->links() }}
@stop
