<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>Penyiapan SPT Masa | E-Bupot</title>
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
      background-image: url("{{ asset('poltek.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover; */
      height: 800px;
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


    .body{
    width: 100%;
    height: 100%;
    padding-top: 1%, 1%, 1%;
    position: relative;
    }

    .orangebox{
        width: 100%;
        height: 200px;
        background-color: #FBC127;
        top: 150px;
        position: absolute;
        z-index: 1;
    }

    .form{
        width: 100%;
        height: 600px;
        background-color: white;
        top: 20px;
        position: absolute;
        z-index: 10;
    }

    .header{
        width: 100%;
        height: 130px;
        border-radius: 25px;
        background-color: white;
    }

    .boxitem{
        text-align: center;
        height: 120px;
        width: 100%;
        background-color: white;
    }

    .moneypng{
        width: 80px;
        height: 80px;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .blockrow{
        margin-top: 20px;
        width: 100%;
        height: 40px;
        padding-left: 20px;
        background-color: #2F0F5F;
    }

    .camerapng{
        width: 30px;
        height: 30px;
        margin-top: 5px;
        filter: invert(1);
    }

    .payments{
        padding: 10px;
        width: 100%;
        height: 80px;
        background-color: white;
    }

    .selecttax{
        background-color: white;
        border: 1px solid gray;
        margin-left: 100px;
        font-size: 12px;
        height: 30px;
        width: 35%;
    }

    .checktax{
        width: 95px;
        height: 30px;
        border-radius: 25px;
        margin-left: 360px;
        margin-top: -30px ;
        font-size: 12px;
        background-color: #2F0F5F;
        color: white;
        border: 0px;
        float: left;
    }

    .infotax{
        margin-top: 20px;
        width: 100%;
        height: 280px;
        background-color: white;
        padding: 1%;
    }

    .amounttax{
        width: 100%;
        height: 60px;
        background-color:#A1C4EC;
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .boxproof{
      width: 100%;
      height: 500px;
    }

    .headerproof{
      width: 100%;
      height: 40px;
      padding: 10px;
      background-color: #191970;
    }

    .headerproof h5{
      font-weight: 300;
      color: white;
    }

    .bodyproof{
      margin-top: 20px;
    }

    .buttonproof{
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 0;
      background-color: #191970;
    }

    .buttonaddproof{
      width: 100px;
      height: 30px;
      border: 0;
      border-radius: 25px;
      float: right;
      margin-top: -38px;
    }

    .numicon{
      width: 40px;
      height: 40px;
      background-color: #191970;
    }

    .accordion {
      background-color: rgb(4, 153, 195);
      color: black;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
    }

    .active, .accordion:hover {
      background-color: white;
    }

    .panel {
      padding: 3px;
      background-color: white;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
    }

    .button1 {
          background-color: white; 
          color: rgb(255, 157, 49); 
          border: 1px solid rgb(255, 157, 49);
          border-radius: 5px;
    }

    .button1:hover {
      background-color: rgb(255, 157, 49);
      color: white;
    }

    .button2 {
      background-color: white;  
      color: grey; 
      border: 2px solid lightgray;
      border-radius: 5px; 
    }

    .button2:hover {
      background-color: grey;
      color: white;
    }

    header {
      background-color: rgba(0, 0, 0, 0.7);
    }

    header span {
      color: rgb(255, 157, 49)
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

    .media-social {
      font-size: 18px;
      display: inline-block;
      background: #ffb727;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
    }

    .media-social i {
      color: #FFF;
    }

    .copyright {
      font-size: 12px;
      color: #FFF;
      padding-top: 30px;
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
    <div class='content' style="padding-top :20px; padding-left:350px; padding-right:250px">
      <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 10px; width: 860px">
        <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
          <a href= "{{url('/dashboard')}}"style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button">Dashboard</a>
            <a href= "{{url('/pajakpenghasilan')}}"style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button" >Pajak Penghasilan</a>
            <a href= "{{url('/sptmasa')}}" style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link active" type="button" >SPT Masa</a>
            <a href= "{{url('/pengaturan')}}" style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button" >Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left: 120px; height:103%; width:15%;" alt="" srcset="">
        </div>
        </nav>
        <div style="padding:10px;"></div>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABt0lEQVRYhe2VPWsUURSGn3NnwxZBLHZSmA+JkFJs7CT/ICCkE9NvkRDsBFkZ13VVsAwhmFZ/QBrBP5DSVCFVCCk2JBA3oiaFiZlzLDLrDvulFyZJMw8Mc3mHc99zzxzOhZycnGtGWos4Cu0qjYNaUwDcVZr2otBHbwS15u0sjeIobADjnXqvCjTUSTlLcwBDysBep95Vgf85uVVKY1qQdxgzifTJOZ5KtbnfL6ZQ+/oZmOjsNe8esOpoqAHrGI+Bm8kzp8q6PbtR8t3POwHV0+cgkwZfnLopp24K2ADu6FCxkmkCcTTyJo7Ck/hF6XVblVmAwGxe6oc7Uj/ccWYLF99sdnCsZwJgi8AwJosp8RYAQXHrrxIUN5PkRv8R65mA2BJwAraUUg8uXqd329Kve4lpuwl7x3bRbw4AELw8qgAd/9XWQJ6oyopVRx5xjqjacuK6NjjWM4FeuN9nr3So+BC4r2rbqRruOndW997PN0DeHh85xzTwEfgBfEfkg3PyQKo/v3nv11qkBsSeIeVkcGTGeRTOCKwCYzD4MhoXbDVLcwCB9y3zNP16oGtkXhbXfh3n5OTk/AEs1JCpQGpYDQAAAABJRU5ErkJggg=="
                style="width: 25px; margin: 0px 0px 0px 170px">
                <h6 class="card-title" style="padding: 0px 0px 0px 0px"></h6>
                <a href="{{url('/sptmasa')}}" class="btn btn-outline-light"style="margin: 0px 0px 0px 55px; font-weight: bold; color: black">Perekaman Bukti Penyetoran</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABs0lEQVRIie2VvW4TQRSFv3t3CQ/ADoifBinp0iAKBAQJngAJ6qQgisgToCAZszJvEQkJuYcnQEoREmjoqCIQDY6UrPMACO+9FFmjtWPHE8clp5o9M/udmXv3R5ihvHHlpku56cJdcT5LUq7KzOB5mDfzLeBG3xPno84qoAfzQBgIFe6k5wUf75xnStEoyZ4KvAcuAgjyJfWcOfPsDc4ycPVUGOykre7SIPy4LGZZlmh3vSQ8EfMPQCGmz1Oz0AJ/EblhGwWvrDWzjESL9R6XH6fqP6R18DMFXwZQ1fuSH+7Gl2Wwof9CPBxdaB2+7BsKXAOIhjfCwhg4wC8V3taNMzXZG2HB1LeA6yPhKo8kL77XzejHdBp4dMC08OiAUu3dGHjnNHhUgOfMCXJ7DPxhH95rXtrpNbNPw4simpwtUr2ZNZ0oiyD3Rt098QSlya3a5W/HdyeVpa6JJ0jUt8uStQT5ykHxTTb5EwOODpC8uwfsnQVa18w+1/8DzhWwD+B5WJqwdqz8VXhQDTvDcykibdw3zHy7bGZTBRhejaR9IkCleG0EcF+h+jdMoQ5IW7XIhyf+AseUuIUD94SdAAAAAElFTkSuQmCC" 
                style="width: 20px; margin: 0px 0px 0px 180px">
                <h6 class="card-title" style="padding: 0px 0px 0px 0px"></h6>
                <a href="{{url('/penyiapanspt')}}" class="btn btn-outline-light" style="margin: 0px 0px 0px 40px; font-weight: bold; color:black">Penyiapan SPT Masa PPh Unifikasi</a>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="table"; style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px">
              <span style="color: #FFFFFF; font-weight: bold">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABp0lEQVRIie3Vu2sUURQH4DMx4CIqFqaTLSx8kNZagtqJJAH1D1BIqZWNVQgItvZpLIQUgkWCrQEVFLE0EK20Ei00sVl87GexI1yGeewrC0J+3cw5c76ZO3d3IvbzvwcHMIcH+IjnaX16zFgrIi5FxEJEzEfE8arekWEcioiLEXEtx45WtD4Z1QrM4CY20FGebqE2NyzWxhLW8bMC+5cfeJTj8BX9ry5O4jZeJEOa8gFXsZOcW+0Hm8Uy3vUJpXmqtzJbhfOXm9DNITB6q7GCab33nmZXb7fXwi+HQHewkF+/UlJf62eZW3g4APoes/m188r3wfVGOLmBJc07dwPH8v7T+F7S00HV77oSP4/PJcO6uI+pvO+I6o24PhCa4CfwOhm0i8WknuFxzarcGArOhx/EKrZxtlBbrkF/Y2ZoOEFaheMr+FMDb46MltzEKXyrQeHWuNGW5n+1Ltp1c6YGhbMs60TEq4a2t1mWfRp0dmPyp35T88R3x44meBtfKuAzewbn+AX8KqDbe4om+J0CfG9ScIa1BD43ETjHD+t9Up8hmxi8n37yF0yjGoZBrhYOAAAAAElFTkSuQmCC" style="width: 25px">Kirim SPT</span>
            </div>
            <div>
              <form>
                <div class="container">
                  <div class="row">
                  <div class="col-3" style="padding: 8px; ">
                    <label style="font-size: 15px">Nama</label>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" placeholder="" style="width: 100%;">
                  </div>
                  <div class="col-3">
                    <label style="font-size: 15px">Tahun/Masa Pajak</label>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" placeholder="" style="width: 100%;">
                  </div>
                  <div class="col-3">
                    <label style="font-size: 15px">NPWP</label>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" placeholder="" style="width: 100%;">
                  </div>
                  <div class="col-3">
                    <label style="font-size: 15px">Pembetulan</label>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" placeholder="" style="width: 100%;">
                  </div>
                </div>
              </form>
            </div>
        </div>

<!--kirimspt dopp-->
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
          <table>
            <thead>
              <tr>
                <td><a href="kirimspt"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-doss-tab" data-bs-toggle="tab" data-bs-target="#nav-doss" type="button" role="tab" aria-controls="nav-doss" aria-selected="false">Lampiran DOSS</button></a></td>
                <td><button style="color: black; 8px 20px; text-align: center;" class="nav-link active" id="nav-dopp-tab" data-bs-toggle="tab" data-bs-target="#nav-dopp" type="button" role="tab" aria-controls="nav-dopp" aria-selected="true">Lampiran DOPP</button></td>
                <td><a href="dbp1"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-bagian1-tab" data-bs-toggle="tab" data-bs-target="#nav-bagian1" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Lampiran DBP Bagian 1</button></a></td>
                <td><a href="dbp"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-bagian2-tab" data-bs-toggle="tab" data-bs-target="#nav-bagian2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Lampiran DBP Bagian 2</button></a></td>
                <td><a href="indukspt"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-induk-tab" data-bs-toggle="tab" data-bs-target="#nav-induk" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Induk SPT</button></a></td>
                <td><a href="uploadspt"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-kirim-tab" data-bs-toggle="tab" data-bs-target="#nav-kirim" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kirim SPT</button></a></td>
              </tr>
            </thead>
          </table>
        </div>
          <div class="tab-content" id="nav-tabContent" style="margin-top: 40px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table"; style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px">
                <span style="color: white; font-weight: bold; width: 25px">Objek Pajak yang dilakukan Pemungutan/Pemotongan</span>
              </div>
              <div class="col-auto my-1" style="margin-left: 10px">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Tampilkan</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
                <label class="mr-sm-2" for="inlineFormCustomSelect">entri</label>
              </div>
              <div style="padding: 0px 15px;">
                <table class="table">
                  <thead>
                    <tr style="font-size: 13px; font-weight: 200; color: white; background-color: rgb(4, 153, 195); text-align: center">
                      <td>URAIAN</td>
                      <td>KODE OBJEK PAJAK</td>
                      <td>JUMLAH DPP (RP)</td>
                      <td>JUMLAH PPH (RP)</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='22-405-01' data-percent="0.0025">(PPh22)Penghasilan Sehubungan dengan Aset Kripto yang dipungut oleh Penyelenggara Perdagangan Melalui Sistem Elektronik yang Merupakan Pedagang Fisik Aset Kripto</td>
                      <td>22-405-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='22-405-02' data-percent="0.0025">(PPh22)Penghasilan Sehubungan dengan Aset Kripto yang dipungut oleh Penyelenggara Perdagangan Melalui Sistem Elektronik yang Bukan Merupakan Pedagang Fisik Aset Kripto</td>
                      <td>22-405-02</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='22-101-01' data-percent="0.0025">(PPh22)Penghasilan Sehubungan dengan Transaksi Penjualan Barang, Penyerahan Jasa, dan/atau Persewaan serta Penghasilan Lain Sehubungan dengan Penggunaan Harta yang Dilakukan Melalui Pihak Lain dalam Sistem Informasi Pengadaan</td>
                      <td>22-101-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='27-102-03' data-percent="0.0025">(PPh26)Bunga Obiligasi (PPh Pasal 26)</td>
                      <td>27-102-03</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='27-100-07' data-percent="0.0025">(PPh26)Penghasilan dari Penjualan/Pengalihan Saham (PPh Pasal 26)</td>
                      <td>27-100-07</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-02' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 1 bulan)</td>
                      <td>28-404-02</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-03' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 3 bulan)</td>
                      <td>28-404-03</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-04' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 6 bulan atau lebih)</td>
                      <td>28-404-04</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-05' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 1 bulan)</td>
                      <td>28-404-05</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-06' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 3 bulan)</td>
                      <td>28-404-06</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-07' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 6 bulan)</td>
                      <td>28-404-07</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-08' data-percent="0.0025">(PPh4-2)Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor lebih 6 bulan)</td>
                      <td>28-404-08</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-09' data-percent="0.0025">(PPh4-2)Bunga Deposito/Tabungan yang Ditempatkan di Luar Negeri Melalui Bank yang Didirikan atau Bertempat Kedudukan di Indonesia atau Cabang Bank Luar Negeri di Indonesia</td>
                      <td>28-404-09</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-401-06' data-percent="0.0025">(PPh4-2)Bunga Obligasi yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</td>
                      <td>28-401-06</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-401-01' data-percent="0.0025">(PPh4-2)Bunga Obligasi, Surat Utang Negara, atau  Obligasi Daerah yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</td>
                      <td>28-401-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-01' data-percent="0.0025">(PPh4-2)Bunga Tabungan dan Bunga Diskonto yang Ditempatkan di Dalam Negeri yang Dananya Bersumber Selain dari Devisa Hasil Ekspor (DHE)</td>
                      <td>28-404-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-10' data-percent="0.0025">(PPh4-2)Diskonto Sertifikat Bank Indonesia</td>
                      <td>28-404-10</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-401-04' data-percent="0.0025">(PPh4-2)Diskonto Surat Perbendaharaan Negara yang diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</td>
                      <td>28-401-04</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-401-05' data-percent="0.0025">(PPh4-2)Diskonto Surat Perbendaharaan Negara yang Diterima Wajib Pajak Penduduk/Berkedudukan di Luar Negeri</td>
                      <td>28-401-05</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-405-01' data-percent="0.0025">(PPh4-2)Hadiah Undian (yang diterima Wajib Pajak dalam negeri)</td>
                      <td>28-405-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-404-11' data-percent="0.0025">(PPh4-2)Jasa Giro</td>
                      <td>28-404-11</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-406-01' data-percent="0.0025">(PPh4-2)Transaksi Penjualan Saham di Bursa Efek (Bukan Saham Pendiri)</td>
                      <td>28-406-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td value='28-407-01' data-percent="0.0025">(PPh4-2)Transaksi Penjualan Saham di Bursa Efek (Saham Pendiri)</td>
                      <td>28-407-01</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>
                    <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                      <td>(PPh4-2)Transaksi Penjualan Saham Milik Perusahaan Modal Ventura Tidak di Bursa Efek</td>
                      <td>28-410-02</td>
                      <td>0</td>
                      <td>0</td>
                    </tr>    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1"  style="color: grey">Sebelumnya</a>
                </li>
                <li class="page-item"><a class="page-link" href="#" style="color: rgb(255, 157, 49)">1</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: rgb(255, 157, 49)">2</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: rgb(255, 157, 49)">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" style="color: rgb(255, 157, 49)">Selanjutnya</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div style="padding: 5px"></div>
      </div>
    </div>

         

</body>
    