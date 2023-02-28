@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<h1>hai</h1>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
    $('.btn-modal').on('click', function(e) {
        var t = $(this).data('container')
        $.ajax({
            url: $(this).data('href'),
            dataType: 'html',
            success: function(e) {
                $(t).html(e).modal('show')
            }
        })
    })
    </script>
@stop