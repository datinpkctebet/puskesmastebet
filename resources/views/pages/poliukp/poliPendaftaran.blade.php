@extends('layout.default')

@section('content')

<section class="test-menu">
  <x-partial.title
    title="Pendaftaran / Rekam Medis"
    description="" />

  <div class="test-desc">
    <div class="container">
      <h3>Pelayanan Pendaftaran / Rekam Medis</h3>
      <p><h1 style=font-family:arial align="justify"><font size="4">
        Pelayanan dilakukan setiap hari senin s/d minggu selama 24 Jam, termasuk hari libur dan hari besar. Dilayani oleh petugas yang sudah terlatih dalam hal pendaftaran.
        Melayani pendaftaran pasien, penerimaan retribusi, administrasi dan pembayaran pemeriksaan penunjang.
      </h1></p>

      <table>
        <tr>
          <th style=font-family:arial align="justify"><font size="4">Jenis Pelayanan</th>
          <td style=font-family:arial align="justify"><font size="4">Harga</td>
        </tr>
        <tr>
          <th>Layanan 24 Jam/Tindakan</th>
          <td>Rp.20.000/Rp.10.000</td>
        </tr>
        <tr>
          <th>Pelayanan PTM</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Lansia</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Gigi</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Pelayanan Umum</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Pelayanan MTBS</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Sahabat</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan KI (Ibu Hamil)</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Pelayanan KI (KB & Nifas)</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Pelayanan KA (Imunisasi,MTBM,SDIDTK)</th>
          <td>Rp.10.000/Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Gizi dan Konseling Laktasi</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan DOTS</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Kesehatan Haji</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Metadone</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Caten</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Konseling/Psikologi</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>Pelayanan UBM</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Yankestrad</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan Sanitasi</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Pelayanan PKPR</th>
          <td>Rp.15.000</td>
        </tr>
      </table>

      <table>
        <tr>
          <th style=font-family:arial align="justify"><font size="4">Jenis Pelayanan Laboratorium</th>
          <td style=font-family:arial align="justify"><font size="4">Harga</td>
        </tr>
        <tr>
          <th>Tes Kehamilan</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>HB</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Darah Lengkap</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>Golongan Darah</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>LED</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Glukosa Darah Se-waktu</th>
          <td>Rp.20.000</td>
        </tr>
        <tr>
          <th>Glukosa Darah Puasa</th>
          <td>Rp.20.000</td>
        </tr>
        <tr>
          <th>Glukosa Puasa 2 Jam PP</th>
          <td>Rp.20.000</td>
        </tr>
        <tr>
          <th>Cholesterol</th>
          <td>Rp.25.000</td>
        </tr>
        <tr>
          <th>Trigliserida</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>Asam Urat</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>SGOT</th>
          <td>Rp.25.000</td>
        </tr>
        <tr>
          <th>SGPT</th>
          <td>Rp.25.000</td>
        </tr>
        <tr>
          <th>Ureum</th>
          <td>Rp.25.000</td>
        </tr>
        <tr>
          <th>Creatinin</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>Widal</th>
          <td>Rp.30.000</td>
        </tr>
        <tr>
          <th>BTA 2x</th>
          <td>Rp.20.000</td>
        </tr>
        <tr>
          <th>Urine Reduksi</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Urine Protein</th>
          <td>Rp.10.000</td>
        </tr>
        <tr>
          <th>Urine Lengkap</th>
          <td>Rp.15.000</td>
        </tr>
        <tr>
          <th>Tes Narkoba</th>
          <td>Rp.160.000</td>
        </tr>
        <tr>
          <th>HBSAG</th>
          <td>Rp.55.000</td>
        </tr>
        <tr>
          <th>HIV</th>
          <td>Rp.75.000</td>
        </tr>
        <tr>
          <th>TPHA</th>
          <td>Rp.50.000</td>
        </tr>
      </table>

      {{-- <div class="clinic-significant">
        <h3>Clinical Significance</h3>
        <ol start="1">
          <li>Lorem Ipsum is simply dummy text of a more-or-less normal distribution of letters, as opposed  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
          <li>Sed ut perspiciatis unde omnis iste inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
          <li>Lorem Ipsum is simply dummy text of the more-or-less normal distribution of letters, as opposed  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
        </ol>

        <h6>CLINICAL APPLICATION</h6>
        <p>It is a long established fact readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        <p>Contrary to popular belief a going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. </p>
        <p> Richard McClintock, a Latin professor at Hampden classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance</p>
        <h6>Elevated</h6>
        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
        <p>first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour</p>
        <h6>Hyperthyroidism due to</h6>
        <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</p>
        <p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        <h6>Availability</h6>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
      </div>
    </div>
  </div> --}}
</section>

@endsection
