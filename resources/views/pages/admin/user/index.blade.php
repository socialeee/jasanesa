@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User Management</h1>
@stop

@section('content')
    @if ($message = Session::get('succes'))
     <div class="alert alert-success">
         <p>{{ $message }}</p>
     </div>
     @endif
    {{-- Setup data for datatables --}}
    @php
        $heads = ['ID', 'Name', ['label' => 'Username', 'width' => 10], ['label' => 'Email', 'width' => 25], ['label' => 'Phone', 'width' => 20], ['label' => 'Actions', 'no-export' => true, 'width' => 20]];
        $index = 0;
    @endphp
    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
        <!-- Button trigger modal -->
        <a class="btn btn-info btn-modal" href="javascript:void(0);" data-href="{{ route('user.create') }}" data-container=".app-modal"><i class="ft-plus"></i> Tambah</a>

        @foreach ($users as $row)
        @php
        $index = $index+1;
        @endphp
            <tr>
                <td>{{ $index }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->nohp }}</td>
                <td>
                    <form action="{{ route('user.destroy', $row->id) }}" method="POST">
                        <a href="{{ route('user.edit',$row->id) }}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>
                        {{-- <button href="{{ route('user.create') }}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="create new">
                            <i class="fa fa-lg fa-fw fa-eye"></i> --}}
                        </button>
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
    {{ $users->links() }}    
@stop
<div class="modal app-modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true"></div>