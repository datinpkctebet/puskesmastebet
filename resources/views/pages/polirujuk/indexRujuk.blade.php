@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Daftar Rujukan Puskesmas Kecamatan Tebet"
    {{-- description="add a short description here"  --}}
    />

  <!--- Test-list ---->
  <div class="test-list">
    <div class="container">
      <h3>Daftar Rujukan</h3>
      {{-- <p>Klik pada Daftar Pelayanan untuk Info Lebih Lanjut</p> --}}

      <table style="width:100%">
        <tr>
          <th>No</th>
          <th>Daftar Rujukan</th>
         
        </tr>

        <tr>
          <td>1</td>
          <td>.</td>
        
        </tr>

        <tr>
          <td>2</td>           
          <td>.</td>
        
        </tr>
        
        <tr>
          <td>3</td>
          <td>.</td>
         
        </tr>
        

      </table>
    </div>
  </div>
  <!--- /Test-list ---->
</section>

@endsection
