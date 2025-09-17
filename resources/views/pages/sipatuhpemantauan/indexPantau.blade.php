@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Si Patuh Pemantauan"
    description="" />

 <!--- instruments ---->
 <div class="instruments">
  <div class="container">
   

    <p align="center">
      <img src="{{ URL('images/sipatuh_list.png') }}" title="instrument" alt="" style="width: 100%;"></p>
  <br>
    <p align="center">
      <img src="{{ URL('images/sipatuh_pemantauan.png') }}" title="instrument" alt="" style="width: 100%;"></p> 
      {{-- <p style="font-family:arial;"h1 align="justify"><font size="4">Puskesmas merupakan pusat penggerak pembangunan berwawasan kesehatan, pusat pemberdayaan masyarakat dalam kemandirian hidup sehat, pusat Pelayanan Kesehatan Strata Pertama. Untuk dapat melaksanakan fungsi tersebut, maka perlu ditunjang sarana dan prasarana yang memadai, berupa sarana fisik (bangunan gedung, peralatan medis maupun non medis) serta sumber daya manusia. Selain itu, agar dapat melaksanakan fungsi Puskesmas sebagaimana mestinya, harus ditunjang dengan manajemen yang baik, dimana diperlukan perencanaan yang jelas, strategi pelaksanaan yang terarah. Demikian juga diperlukan pengawasan, pengendalian, penilaian dan evaluasi terhadap semua kegiatan Puskesmas.
      </h1></p> --}}
      
      <p align="center"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSeiiaREIgazQzOv60LSJ4qY0ocW9ZcDLoeBD85ylNfxn_gLtA/viewform">
    <img alt=""style="width: 100%;" src="{{ URL('images/pemantauan.png') }}">
</section>

@endsection
