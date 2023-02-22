@extends('layout.homepage')

@section('title', 'Jasa Pakar Fakultas')
  
@section('content')
    
  @include('partial_homepage.header')
  
    @include('service.pakar_partial.kategori_fakultas')

@endsection