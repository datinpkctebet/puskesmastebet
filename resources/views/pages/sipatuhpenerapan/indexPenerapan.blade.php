@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Si Patuh Penerapan"
    description="" />

 <!--- instruments ---->
 <div class="instruments">
  <div class="container">

    <p align="center">
      <img src="{{ URL('images/sipatuh_list.png') }}" title="instrument" alt="" style="width: 100%;"></p>
<br>
    <p align="center">
      <img src="{{ URL('images/sipatuh_penerapan.png') }}" title="instrument" alt="" style="width: 100%;"></p> 
      
</section>

@endsection
