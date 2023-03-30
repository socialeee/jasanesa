@extends('pages.user.layout.homepage')
{{-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
{{-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> --}}


@section('title', 'testing')

@section('content')
    @include('pages.user.layout.partial_homepage.header')
    <div class="container">
        <div class="row">
            <div class="col">Column1</div>
            {{-- <div class="col">Column2</div> --}}
            <div class="w-100"></div>
            <div class="col">Column3</div>
            <div class="col">Column4</div>
        </div>
    </div>
@endsection
