@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Daftar Pelayanan UKP Puskesmas Kecamatan Tebet"
    {{-- description="add a short description here"  --}}
    />

  <!--- Test-list ---->
  <div class="test-list">
    <div class="container">
      <h3>Daftar Pelayanan</h3>
      <p>Klik pada Daftar Pelayanan untuk Info Lebih Lanjut</p>

      <table style="width:100%">
        <tr>
          <th>No</th>
          <th>Daftar Pelayanan</th>
          <th>Hari dan Jam Pelayanan</th>
          <th>Keterangan</th>
        </tr>

        <tr style="cursor: pointer;"
          onclick="location='{{ URL('/poliukp/poliPendaftaran') }}'">
          <td>1</td>
          <td>Pendaftaran / Rekam Medis</td>
          <td>Senin - Minggu</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
          onclick="location='{{ URL('/poliukp/poliFarmasi') }}'">
          <td>2</td>
          <td>Farmasi</td>
          <td>Senin - Minggu</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliLaboratorium') }}'">
          <td>3</td>
          <td>Laboratorium</td>
          <td>Senin - Sabtu</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliLay24') }}'">
          <td>4</td>
          <td>Layanan 24 Jam / Tindakan</td>
          <td>Senin - Minggu</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliRb') }}'">
          <td>5</td>
          <td>Ruang Bersalin</td>
          <td>Senin - Minggu</td>
          <td>Terletak di PKM Tebet Barat</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliPtm') }}'">
          <td>6</td>
          <td>Unit Pelayanan PTM</td>
          <td>Senin, Rabu dan Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliLansia') }}'">
          <td>7</td>
          <td>Unit Pelayanan Lansia</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliGigi') }}'">
          <td>8</td>
          <td>Unit Pelayanan Gigi</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliUmum') }}'">
          <td>9</td>
          <td>Unit Pelayanan Umum</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliMtbs') }}'">
          <td>10</td>
          <td>Unit Pelayanan MTBS</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliSahabat') }}'">
          <td>11</td>
          <td>Unit Pelayanan Sabahat (HIV,IMS,Jiwa)</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliKia') }}'">
          <td>12</td>
          <td>Unit Pelayanan KI (Ibu Hamil) </td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliKb') }}'">
          <td>13</td>
          <td>Unit Pelayanan KI (KB & Nifas) </td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliKa') }}'">
          <td>14</td>
          <td>Unit Pelayanan KA (Imunisasi,MTBM,SDIDTK)</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliGizi') }}'">
          <td>15</td>
          <td>Unit Pelayanan Gizi dan Konseling Laktasi</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliDots') }}'">
          <td>16</td>
          <td>Unit Pelayanan DOTS</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliHaji') }}'">
          <td>17</td>
          <td>Unit Pelayanan Kesehatan Haji</td>
          <td>Kondisional</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliMetadone') }}'">
          <td>18</td>
          <td>Unit Pelayanan Metadone</td>
          <td>Senin - Minggu</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliCaten') }}'">
          <td>19</td>
          <td>Unit Pelayanan Caten</td>
          <td>Senin - Jumat</td>
          <td>Senin, Rabu dan Jumat Pembuatan Sertifikat | Selasa dan Kamis Pengambilan Sertifikat</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliPsikologi') }}'">
          <td>20</td>
          <td>Unit Pelayanan Konseling / Psikologi </td>
          <td>Senin, Rabu dan Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliUbm') }}'">
          <td>21</td>
          <td>Unit Pelayanan UBM</td>
          <td>Senin, Rabu dan Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliYankestrad') }}'">
          <td>22</td>
          <td>Unit Pelayanan Yankestrad</td>
          <td>Selasa dan Kamis</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;"
        onclick="location='{{ URL('/poliukp/poliSanitasi') }}'">
          <td>23</td>
          <td>Unit Pelayanan Sanitasi</td>
          <td>Selasa dan Kamis</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;" o
          onclick="location='{{ URL('/poliukp/poliPkpr') }}'">
          <td>24</td>
          <td>Unit Pelayanan PKPR</td>
          <td>Senin - Jumat</td>
          <td>..</td>
        </tr>

        <tr style="cursor: pointer;" o
          onclick="location='{{ URL('/poliukp/poliBankeslap') }}'">
          <td>25</td>
          <td>Dukkeslap / Bankeslap</td>
          <td>Kondisional</td>
          <td>..</td>
        </tr>

        <tr>
         <td>26</td>
         <td>Surat Keterangan Sehat</td>
         <td>Senin - Jumat</td>
         <td>..</td>
        </tr>

        <tr>
         <td>27</td>
         <td>Surat Keterangan Bebas Napza</td>
         <td>Senin - Jumat</td>
         <td>..</td>
        </tr>

        <tr>
         <td>28</td>
         <td>Tes Buta Warna</td>
         <td>Senin - Jumat</td>
         <td>..</td>
        </tr>

        <tr>
         <td>29</td>
         <td>Surat Keterangan Penyebab Kematian Pemeriksaan Jenazah</td>
         <td>Senin - Minggu</td>
         <td>..</td>
        </tr>

        <tr>
          <td>30</td>
          <td>Surat Keterangan Melapor Kematian</td>
          <td>Senin - Jumat</td>
          <td>..</td>
          </tr>
      </table>
    </div>
  </div>
  <!--- /Test-list ---->
</section>

@endsection
