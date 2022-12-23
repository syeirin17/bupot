<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Surat Setoran Pajak</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: arial;
      font-size: 16px;
      line-height: 1.6;
      background-image: url("{{ asset('poltek.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .content {
      /* background-image: url("{{ asset('poltek.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover; */
      height: 620px;
    }

    .navbar-expand-lg {
      background-color: #191970;
      font-variant: normal;
    }

    .nav-link {
      color: #FFFFFF;
    }

    .container {
      max-width: 1000px;
      margin: 20px auto;
    }


    .tab_triger ul {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
    }


    .tab_triger ul li label {
      position: relative;
      display: block;
      padding: 8px 15px;
      cursor: pointer;
      min-width: 150px;
      background: #e6e6e6;
      text-align: center;
      font-weight: 700;
      border-radius: 8px 40px 0 0;
    }

    .tab_triger ul li:nth-child(1) label {
      background: #191970;
      color: #FFFFFF;
    }

    .tab_triger ul li:nth-child(2) label {
      background: #C0C0C0;
      color: #FFFFFF;
    }


    .tab_container_wrap input {
      position: absolute;
      width: 0;
      height: 0;
      margin: 0;
      z-index: -100;
      top: -1000px;


    }

    .tab_container_wrap input:checked+.tab_content_box {
      display: block;
    }

    .tab_content_box {
      background: #F5F5F5;
      padding: 20px;
      display: none;
    }

    .tab_content_box:nth-child(1) {
      background: #f0f0f0;

    }

    .tab_content_box:nth-child(2) {
      background: #f0f0f0;
    }


    .tab_content_box h2 {
      margin: 0 0 20px;
    }
    

    .text {
      font-size: 12px;
      font-family: Arial;
      text-align: center;
    }

    .text1 {
      font-size: 14px;
      font-family: Arial;
      text-align: center;
    }
  </style>
</head>

<body>
  <header class=" mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;"><img src="{{ asset('taxcentre1.png') }}" alt="" srcset="">
      <div class="d-flex align-items-center">
        <form class="w-100 me-3">
        </form>
        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <span>User &nbsp;</span><img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
    <div class='content' style="padding-top :10px; padding-left:250px; padding-right:250px">
      <div class="" style="background-color: #f5f5f5 ; padding: 10px 20px 0px 20px ; ">
        <div style="background-color: #FFFFFF">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #FFFFFF; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAABO0lEQVQ4jd3SPUtcURDG8d+qEV8wIHa6WMkGSSEEguAHsLGy0EL7NOIHsVJTCRa2mkZWyH6A1UIsLax0wUDEt1goSIzKWuxZcrncs8iqjQeGc3meOf+Z4Q7v8eQwhyNcYwN9L4F9RzUVP2IPBrGKCq5C/EahAayKv/gAbQnYMMpoxSYugn6DEyxhPtLIHR7T4g6O0Z8x5nKks3ospGH5YHxrAlZEexr4NZhjrwGD0ZAwmtAWm4VlAQeeCfuYBrVECnyKVcYWptS24QwTzwEWInoJ0/iHTnSgNwv4EO5cuPMZsCIm1XYumVtNJtUXuxKMIexiBb/wB5chDlKP61OcR6ZRxj66YwmpRkqhUFfSyCW+R7CNU6zhMALLYwZfMIv1RpU/4yfuNV6bPYxnAXJZYhipJ+Ld+v9j3v48Aav2cb2zx30qAAAAAElFTkSuQmCC">
                Perekaman data Bukti Setor atas PPh yang disetor sendiri
                </span>
              </div>
        <div class="container">
          <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Jenis Bukti Penyetoran</label>    
            </div>
            <div class="col">  
            <div class="row">
            <div class="col">
              <input class="form-check-input" type="radio" name="bertindak sebagai" id="flexRadioDefault1">
              <label class="form-check-label" for="bertindak sebagai">Surat Setoran Pajak</label>
            </div>
            <div class="col">
            <input class="form-check-input" type="radio" name="bertindak sebagai" id="flexRadioDefault2" onclick="changeform(this)">
            <label class="form-check-label" for="bertindak sebagai">Pemindahbukuan</label>
            </div>
            </div>
            </div>
          </div>

        <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Masa Pajak</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" placeholder="" aria-label="default input" disabled>
            </div>
          </div>
          <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Jenis Pajak(MAP)</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" placeholder="" aria-label="default input" disabled>
            </div>
          </div>
          <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Jenis Setoran</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" placeholder="" aria-label="default input" disabled>
            </div>
          </div>
          <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Kode Objek Pajak</label>
            </div>
            <div class="col">
            <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Pilih Kode Objek Pajak</option>
      <option>22-100-07	Penjualan Hasil Produksi Kepada Distributor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Semen)</option>
<option>22-100-08 Penjualan Hasil Produksi Kepada Distributor Di Dalam Negeri Oleh Badan Usaha/Industri Terntu (Industri Baja)</option>
<option>22-100-09	Penjualan Hasil Produksi Kepada Distributor Di Dalam Negeri Oleh Badan Usaha/Industri Terntu (Industri Otomotif)</option>
<option>22-100-10	Penjualan Hasil Produksi Kepada Distributor Di Dalam Negeri Oleh Badan Usaha/Industri Terntu (Industri Farmasi)</option>
<option>22-100-11	Penjualan Hasil Produksi Kepada Distributor Di Dalam Negeri Oleh Badan Usaha/Industri Terntu (Industri Kertas)</option>
<option>22-100-12	Penjualan Kendaraan Bermotor Di Dalam Negeri Oleh Atpm, Apm, Dan Importir Umum Kendaraan Bermotor</option>
<option>22-100-13	Pembelian Oleh Badan Usaha Berupa Komoditas Tambang Batubara, Mineral Logam, Dan Mineral Bukan Logam Dari Badan Atau Orang Pribadi Pemegang Iup</option>
<option>22-100-14	Penjualan Emas Batangan Di Dalam Negeri Oleh Badan Usaha </option>
<option>22-100-15	Pembeliaan Bahan Hasil Kehutanan Yang Belum Melalui Proses Industri Manufkatur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
<option>22-100-16	Pembelian Bahan Hasil Perkebunan Belum Melalui Proses Industri Manufkatur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
<option>22-100-17	Pembelian Bahan Hasil Pertanian Belum Melalui Proses Industri Manufkatur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
<option>22-100-18	Pembelian Bahan Hasil Perternakan Belum Melalui Proses Industri Manufkatur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
<option>22-100-19	Pembelian Bahan Hasil Perikanan Belum Melalui Proses Industri Manufkatur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
<option>22-100-20	Penjualan Bbm Oleh Pertamina/Anak Perusahaan Pertamina Kepada Selain Spbu/Agen/Penyalur (Tidak Final)</option>
<option>22-100-21	Penjualan Bbm Oleh Selain Pertamina/Anak Perusahaan Pertamina Kepada Selain Spbu/Agen/Penyalur (Tidak Final)</option>
<option>22-100-22	Penjualan Pelumas Oleh Importir/Produsen</option>
<option>22-100-23	Penjualan Pulsa Dan Kartu Perdana Oleh Penyelenggara Distribusi Tingkat Kedua</option>
<option>22-100-24	Penjualan Bbg Oleh Produsen/Importir Kepada Selain Spbu /Agen/Penyalur (Tidak Final)</option>
<option>22-401-01	Penjualan Bbm Oleh Pertamina/Anak Perusahaan Pertamina Kepada Selain Spbu/Agen/Penyalur (Final)</option>
<option>22-401-02	Penjualan Bbm Oleh Selain Pertamina/Anak Perusahaan Pertamina Kepada Selain Spbu/Agen/Penyalur (Final)</option>
<option>22-401-03	Penjualan Bbg Oleh Produsen/Importir Kepada Selain Spbu /Agen/Penyalur (Final)</option>
<option>22-403-01	Penjualan Barang Yang Tergolong Sangat Mewah </option>
<option>22-403-02	Penjualan Barang Yang Tergolong Sangat Mewah Untuk Rumah Berserta Tanah, Apartemen, Kondominium Dan Sejenisnya</option>
<option>22-404-01	Ekspor Komoditas Tambang Batubara, Mineral Logam, Dan Mineral Bukan Logam Yang Dilakukan Oleh Eksportir Kecuali Wp Yang Terikat Dalam Pkp2B Dan Kk</option>
<option>22-900-01	Pembayaran Atas Pembelian Dan/Atau Bahan Untuk Kegiatan Usahanya Oleh Bumn/Badan Usaha Tertentu</option>
<option>23-100-01	Impor Yang Dipunggut Ditjen Bea Dan Cukai Yang Dikenakan Tarif 10%</option>
<option>23-100-02	Impor Yang Dipunggut Ditjen Bea Dan Cukai Yang Dikenakan Tarif 7,5%</option>
<option>23-100-03	Impor Yang Dipunggut Ditjen Bea Dan Cukai Yang Dikenakan Tarif 0,5%</option>
<option>23-100-04	Impor Yang Dipunggut Ditjen Bea Dan Cukai Atas Importir/Pemilik Barang Yang Memiliki Api</option>
<option>23-100-05	Impor Yang Dipunggut Ditjen Bea Dan Cukai Atas Importir/Pemilik Barang Yang Tidak Memiliki Api</option>
<option>24-100-01	Hadiah, Penghargaan, Bonus, Dan Lainnya Selain Yang Telah Dipotong PPh Pasal 21 Ayat (1)Huruf E UU PPh</option>
<option>24-100-02	Sewa Dan Penghasilan Lain Sehubungan Penggunaan Harta Kecuali Sewa Tanah/Bangunan Yang Telah Dikenai PPh Pasal 4 Ayat (2) UU PPh</option>
<option>24-101-01	Dividen</option>
<option>24-102-01	Bunga Selain Yang Dikenakan PPh Pasal 4 Ayat (2) </option>
<option>24-103-01	Royalti</option>
<option>24-104-01	Jasa Teknik</option>
<option>24-104-02	Jasa Manajemen</option>
<option>24-104-03	Jasa Konsultan</option>
<option>24-104-04	Jasa Penilai (Appraisal</option>)
<option>24-104-05	Jasa Aktuaris</option>
<option>24-104-06	Jasa Akuntansi, Pembukuan, Dan Atestasi Laporan Keuangan</option>
<option>24-104-07	Jasa Hukum</option>
<option>24-104-08	Jasa Arsitektur</option>
<option>24-104-09	Jasa Perencanaan Kota Dan Arsitektur Landscape</option>
<option>24-104-10	Jasa Perancangan (Design)</option>
<option>24-104-11	Jasa Pengeboran (Drilling) Dibidang Penambangan Minyak Dan Gas Bumi (Migas) Kecuali Yang Dilakukan Oleh Badan Usaha Tetap (But)</option>
<option>24-104-12	Jasa Penunjang Dibidang Usaha Panas Bumi Dan Penambangan Minyak Dan Gas Bumi (Migas)</option>
<option>24-104-13	Jasa Penambangan Dan Jasa Penunjang Selain Dibidang Usaha Panas Bumi Dan Penambangan Minyak Dan Gas Bumi (Migas) </option>
<option>24-104-14	Jasa Penunjang Dibidang Penerbangan Dan Bandar Udara</option>
<option>24-104-15	Jasa Penebangan Hutan </option>
<option>24-104-16	Jasa Pengolahan Limbah</option>
<option>24-104-17	Jasa Penyedia Tenaga Kerja Dan/Atautenaga Ahli (Outsourcing Services)</option>
<option>24-104-18	Jasa Perantara Dan/Atau Keagenan</option>
<option>24-104-19	Jasa Bidang Perdagangan Surat-Surat Berharga, Kecuali Yang Dilakukan Bursa Efek, Kustodian Sentral Efek Indonesia (Ksei) Dan Kliring Penjamin Efek Indonesia (Kpei)</option>
<option>24-104-20	Jasa Kustodian/Penyimpanan/Penitipan, Kecuali Yang Dilakukan Oleh Ksi</option>
<option>24-104-21	Jasa Pengisian Suara (Dubbing) Dan/ Atau Sulih Suara</option>
<option>24-104-22	Jasa Mixing Film</option>
<option>24-104-23	Jasa Pembuatan Sarana Promosi Film, Iklan, Poster, Foto, Slide, Klise, Banner, Pamphlet, Baliho Dan Folder</option>
<option>24-104-24	Jasa Sehubungan Dengan Software Atau Hardware Atau Sistem Komputer, Termasuk Perawatan, Pemeliharaan Dan Perbaikan</option>
<option>24-104-25	Jasa Pembuatan Dan/ Atau Pengelolaan Website</option>
<option>24-104-26	Jasa Internet Termasuk Sambungannya</option>
<option>24-104-27	Jasa Penyimpanan, Pengelolaan, Dan/ Atau Penyaluran Data, Informasi Dan/ Atau Program</option>
<option>24-104-28	Jasa Instalasi Atau Pemasangan Mesin, Peralatan, Listrik, Telepon, Air, Gas, Ac Atau/ Tv Kabel, Selain Yang Dilakukan Oleh Wajib Pajak Yang Ruang Lingkupnya Di Bidang Konstruksi Dan Mempunyai Izin Dan/ Sertifikasi Sebagai Pengusaha Konstruksi </option>
<option>24-104-29	Jasa Perawatan/Perbaikan/Pembenaran Mesin, Peralatan, Listrik, Telepon, Air, Gas, Ac Atau/ Tv Kabel, Selain Yang Dilakukan Oleh Wajib Pajak Yang Ruang Lingkupnya Di Bidang Konstruksi Dan Mempunyai Izin Dan/ Sertifikasi Sebagai Pengusaha Konstruksi </option>
<option>24-104-30	Jasa Perawatan Kendaraan Dan/ Atau Alat Transportasi Darat, Laut Dan Udara </option>
<option>24-104-31	Jasa Maklon</option>
<option>24-104-32	Jasa Penyelidikan Dan Keamanan </option>
<option>24-104-33	Jasa Penyelenggara Kegiatan Atau Event Organizer</option>
<option>24-104-34	Jasa Penyedia Tempat Dan/ Atau Waktu Dalam Media Massa, Media Luar Ruang Atau Media Lain Untuk Menyampaian Informasi, Dan/ Atau Jasa Periklanan</option>
<option>24-104-35	Jasa Pembasmi Hama</option>
<option>24-104-36	Jasa Kebersihan Atau Cleaning Service</option>
<option>24-104-37	Jasa Sedot Septi Tank</option>
<option>24-104-38	Jasa Pemeliharaan Kolam</option>
<option>24-104-39	Jasa Katering Atau Tata Boga</option>
<option>24-104-40	Jasa Forwarding </option>
<option>24-104-41	Jasa Logistik </option>
<option>24-104-42	Jasa Pengurusan Dokumen</option>
<option>24-104-43	Jasa Pengepakan</option>
<option>24-104-44	Jasa Loading Dan Unloading</option>
<option>24-104-45	Jasa Laboratorium Dan/ Atau Pengujian Kecuali Yang Dilakuka Oleh Lembaga Atau Institusi  Pendidikan Dalam Rangka Penelitian Akademis</option>
<option>24-104-46	Jasa Pengelolaan Parkir</option>
<option>24-104-47	Jasa Penyondiran Tanah</option>
<option>24-104-48	Jasa Penyiapan Dan/ Atau Pengelolaan Limbah</option>
<option>24-104-49	Jasa Pembibitan Dan/ Atau Penanaman Bibit</option>
<option>24-104-50	jasa pemeliharaan tanaman </option>
<option>24-104-51	jasa pamanen</option>
<option>24-104-52	jasa pengolahan hasil pertanian, pekebunan, perikanan, peternakan dan/ perhutanan </option>
<option>24-104-53	jasa dekorasi </option>
<option>24-104-54	jasa percetakan / penerbitan</option>
<option>24-104-55	jasa penerjemahan</option>
<option>24-104-56	jasa pengangkutan/ekspedisi kecuali yang telah diatur dalam pasal 15 Undang-undang pajak penghasilan </option>
<option>24-104-57	jasa pelayanan pelabuhan</option>
<option>24-104-58	jasa pengangkutan melalui jalur pipa</option>
<option>24-104-59	jasa pengelolaan penitipan anak</option>
<option>24-104-60	jasa pelatuhan dan/ atau kursus</option>
<option>24-104-61	jasa pengiriman dan pengisian uang ke ATM</option>
<option>24-104-62	jasa sertifikasi</option>
<option>24-104-63	jasa survey</option>
<option>24-104-64	jasa tester</option>
<option>24-104-65	jasa selain jasa-jasa tersebut diatas yang pembayaran dibebankan kepada APBN (Anggaran pendapatan dan belanja negara) atau APBD (anggaran pendapatan dan belanja daerah)</option>
<option>24-104-66	jasa penyelenggaran layanan transaksi pembayaran terkait dengan distribusi token oleh penyelenggara distribusi </option>
<option>24-104-67	jasa pemasaran dengan media voucher oleh penyelenggara voucher</option>
<option>24-104-68	jasa penyelenggara transaksi pembayaran terkait dengan ditribusi voucher oleh penyelenggara voucher dan penyelenggara distribusi</option>
<option>24-104-69	jasa penyelenggara program loyalitas  dan penghargaan pelanggan (costumer loyalty/reward program) oleh penyelenggara voucher</option>
<option>24-105-01	bunga pinjaman yang diterima wjib pajak dalam negeri dan bentuk usaha tetap melalui layanan pinjam meminjam uang berbasis teknologi informasi </option>
<option>28-403-02	Persewaan tanah dan/atau bangunan</option>
<option>28-405-01	hadiah undian (yang diterima wajib pajak dalam negeri</option>
<option>28-409-08	perencanaan kontruksi (dengan kualifikasi usaha)</option>
<option>28-409-09	perencanaan kontruksi (tanpa kualifikasi usaha)</option>
<option>28-409-10	pelaksanaan kontruksi (kualifikasi usaha kecil)</option>
<option>28-409-11	pelaksanaan kontruksi (kualifikasi usaha menegah dan besar)</option>
<option>28-409-12	pelaksanaan kontruksi (tanpa kualifikasi usaha)</option>
<option>28-409-13	pengawasan kontruksi (dengan kualifikasi usaha)</option>
<option>28-409-14	pengawasan kontruksi (tanpa kualifikasi usaha)</option>
<option>28-409-22	pekerjaan kontruksi yang dilakukan oleh penyedia jasa yang memiliki sertifikat badan usaha kualifikasi kecil</option>
<option>28-409-23	pekerjaan kontruksi yang dilakukan oleh penyedia jasa yang tidak memiliki sertifikat badan usaha atau sertifikat kompetensi kerja untuk usaha orang perseorangan </option>
<option>28-409-24	pekerjaan kontruksi yang dilakukan oleh penyedia jasa yang memilliki sertifikat selain sertifikat badan usaha kualifikasi kecil atau sertifikat kompetensi kerja untuk usaha orang perseorangan</option>
<option>28-409-25	pekerjaan kontruksi terintegrasi yang dilakukan oleh penyedia jasa yang memiliki sertifikat badan usaha</option>
<option>28-409-26	pekerjaan kontruksi terintegrasi yang dilakukan oleh penyedia jasa yang tidak memiliki sertifikat badan usaha</option>
<option>28-409-27	jasa konsultasi kontruksi yang dilakukan oleh penyedia jasa yang memiliki sertifikat badan usaha atau sertifikat kompetensi kerja untuk usaha orang perseorangan </option>
<option>28-409-28	jasa konsultasi kontruksi yang dilakukan oleh penyedia jasa yang tidak memiliki sertifikat badan usaha atau sertifikat kompetensi kerja untuk usaha orang perseorangan </option>
<option>28-410-02	imbalan yang dibayarkan/terutang kepada perusahaan pelayaran dalam negeri</option>
<option>28-411-02	imbalan charter kapal laut dan/atau pesawat udara yang dibayarkan/terutang kepada perusahaan pelayaran dan/atau penerbangan luar negeri melalui BUT di Indonesia</option>
<option>28-417-01	bunga simpanan yang dibayarkan oleh koperasi kepada anggota wajib pajak orang pribadi (bunga sampai dengan Rp240.000)</option>
<option>28-417-02	bunga simpanan yang dibayarkan oleh koperasi kepada anggota wajib pajak orang pribadi (bunga diatas Rp240.000)</option>
<option>28-419-01	dividen yang diterima/diperoleh wajib pajak orang pribadi dalam negeri</option>
<option>28-421-01	Uplift hulu migas</option>
<option>28-421-02	Participating interest eksplorasi hulu migas</option>
<option>28-421-03	Participating interest eksploitasi hulu migas</option>
<option>28-423-01	Transaksi dengan wajib pajak yang menggunakan tarif peraturan pemerintah nomor 23 tahun 2018</option>
<option>29-101-01	Imbalan charter pesawat udara yang dibayarkan/terutang kepada perusahaan penerbangan dalam negeri oleh pemotong pajak</option>
    </select>           
   </div>
          </div>
          <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Jumlah Penghasilan Bruto</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" placeholder="0" aria-label="default input">
            </div>
          </div>
          <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Jumlah Setor(RP)</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" placeholder="" aria-label="default input" disabled>
            </div>
          </div>
          <div style="padding:5px;"></div>
        <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
            <div class="col">
              <label for="">Tanggal Setor</label>
            </div>
            <div class="col">
              <input class="form-control" type="text" placeholder="" aria-label="default input" disabled>
            </div>
          </div>
          <div style="padding:20px;"></div>
          <div class="row" style="padding-left: 54%; padding-right:55%;">
          <div class="col">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href= "{{url('/pajakpenghasilan')}}" class="btn btn-outline-info me-md-2" style="background-color: rgb(4, 153, 195); " type="button">
          <span style="color: #FFFFFF;">Simpan</span></a>
         <a href= "{{url('/pajakpenghasilan')}}" class="btn btn-outline-light"  style="background-color: rgb(255, 157, 49);"type="button">
         <span style="color: #FFFFFF;">Batal</span></a>
        </div>
</div>
</div>
<div style="padding:5px;"></div>

        </div>
      </div>
    </div>
  </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

</body>
<script>
  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";


  }

  function changeForm(src) {
    document.getElementById("form1").style.display = "none";
    document.getElementById("form2").style.display = "block";

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>