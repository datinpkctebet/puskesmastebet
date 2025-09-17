@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Daftar Pelayanan UKM Puskesmas Kecamatan Tebet"
    {{-- description="add a short description here"  --}}
    />

  <!--- Test-list ---->
  <div class="test-list">
    <div class="container">
      <h3>Daftar Pelayanan UKM</h3>
      {{-- <p>Klik pada Daftar Pelayanan untuk Info Lebih Lanjut</p> --}}

      <table style="width:100%">
        <tr>
          <th>No</th>
          <th>Daftar UKM Esensial</th>
          <th>Hari Pelayanan</th>
        </tr>

        {{-- <tr style="cursor: pointer;"
          onclick="location='{{ URL('/poliukm/poliPromkes') }}'"> --}}
          <td>1</td>
          <td>Pelayanan Promosi Kesehatan</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
          onclick="location='{{ URL('/poliukm/poliKesling') }}'"> --}}
          <td>2</td>
          <td>Pelayanan Kesehatan Lingkungan</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliKesibu') }}'"> --}}
          <td>3</td>
          <td>Pelayanan Kesehatan Ibu, Anak dan Keluarga Berencana</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliUgizi') }}'"> --}}
          <td>4</td>
          <td>Pelayanan Gizi</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliPpp') }}'"> --}}
          <td>5</td>
          <td>Pelayanan Pencegahan dan Pengendalian Penyakit</td>
          <td>Disesuaikan</td>
        </tr>
      </table>

      <table style="width:100%">
        <tr>
          <th>No</th>
          <th>Daftar UKM Pengembangan</th>
          <th>Hari Pelayanan</th>
        </tr>

        {{-- <tr style="cursor: pointer;"
          onclick="location='{{ URL('/poliukm/poliKpldh') }}'"> --}}
          <td>1</td>
          <td>Ketuk Pintu Layani Dengan Hati (KPLDH)</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
          onclick="location='{{ URL('/poliukm/poliKesmas') }}'"> --}}
          <td>2</td>
          <td>Perawatan Kesehatan Masyarakat</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliKeswa') }}'"> --}}
          <td>3</td>
          <td>Pelayanan Kesehatan Jiwa</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliUkgm') }}'"> --}}
          <td>4</td>
          <td>Pelayanan Upaya Kesehatan Gigi Masyarakat (UKGM)</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliKeslansia') }}'"> --}}
          <td>5</td>
          <td>Pelayanan Kesehatan Lansia</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliKesjaor') }}'"> --}}
          <td>6</td>
          <td>Pelayanan Kesehatan Kerja dan Olahraga</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliKespkpr') }}'"> --}}
          <td>7</td>
          <td>Pelayanan Kesehatan Peduli Remaja (PKPR)</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliKtpa') }}'"> --}}
          <td>8</td>
          <td>Pelayanan Kesehatan Kekerasan terhadap Perempuan dan Anak (KTPA)</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliBatra') }}'"> --}}
          <td>9</td>
          <td>Pengobatan Tradisional (Batra)</td>
          <td>Disesuaikan</td>
        </tr>

        {{-- <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukm/poliUks') }}'"> --}}
          <td>10</td>
          <td>Pelayanan Upaya Kesehatan Sekolah (UKS)</td>
          <td>Disesuaikan</td>
        </tr>

      </table>
    </div>
  </div>
  <!--- /Test-list ---->
</section>

@endsection
