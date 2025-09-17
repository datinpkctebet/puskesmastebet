@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Si Patuh Pengaduan"
    description="" />

 <!--- instruments ---->
 <div class="instruments">
  <div class="container">
    
    <p align="center">
    <img src="{{ URL('images/sipatuh_list.png') }}" title="instrument" alt="" style="width: 100%;"></p>
    {{-- <h3 class="last-updated"> </h3> --}}

    <p align="center">
       <img src="{{ URL('images/sipatuh_pengaduan.png') }}" title="instrument" alt="" style="width: 100%;"></p>
    <br>
   <p align="center"> <a href="https://bit.ly/3lNEPQW">
    <img alt=""  style="width: 30%;"src="{{ URL('images/sipatuh_klik.png') }}">
      
</section>

@endsection
