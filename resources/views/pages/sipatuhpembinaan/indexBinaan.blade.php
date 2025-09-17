@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Si Patuh Pembinaan"
    description="" />

 <!--- instruments ---->
 <div class="instruments">
  <div class="container">
   
    <p align="center">
      <img src="{{ URL('images/sipatuh_list.png') }}" title="instrument" alt="" style="width: 100%;"></p>
<br>
    <p align="center">
      <img src="{{ URL('images/sipatuh_pembinaan.png') }}" title="instrument" alt="" style="width: 100%;"></p> 
      
      <p align="center"> <a href="https://bit.ly/3kiQohA">
        <img alt=""  style="width: 30%;"src="{{ URL('images/ebook.png') }}">

</section>

@endsection
