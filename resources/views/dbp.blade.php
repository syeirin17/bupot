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
     *{
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
      
      background-repeat: no-repeat;
      background-size: cover;
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
  <div>
    <header class=" mb-3 border-bottom">
      <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;"><img src="{{ asset('taxcentre1.png') }}" alt="" srcset="">
        <div class="d-flex align-items-center">
          <form class="w-100 me-3"></form>
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
  </div>
  <div class='content' style="padding-top :20px; padding-left:350px; padding-right:250px">
    <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width: 860px">
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
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABp0lEQVRIie3Vu2sUURQH4DMx4CIqFqaTLSx8kNZagtqJJAH1D1BIqZWNVQgItvZpLIQUgkWCrQEVFLE0EK20Ei00sVl87GexI1yGeewrC0J+3cw5c76ZO3d3IvbzvwcHMIcH+IjnaX16zFgrIi5FxEJEzEfE8arekWEcioiLEXEtx45WtD4Z1QrM4CY20FGebqE2NyzWxhLW8bMC+5cfeJTj8BX9ry5O4jZeJEOa8gFXsZOcW+0Hm8Uy3vUJpXmqtzJbhfOXm9DNITB6q7GCab33nmZXb7fXwi+HQHewkF+/UlJf62eZW3g4APoes/m188r3wfVGOLmBJc07dwPH8v7T+F7S00HV77oSP4/PJcO6uI+pvO+I6o24PhCa4CfwOhm0i8WknuFxzarcGArOhx/EKrZxtlBbrkF/Y2ZoOEFaheMr+FMDb46MltzEKXyrQeHWuNGW5n+1Ltp1c6YGhbMs60TEq4a2t1mWfRp0dmPyp35T88R3x44meBtfKuAzewbn+AX8KqDbe4om+J0CfG9ScIa1BD43ETjHD+t9Up8hmxi8n37yF0yjGoZBrhYOAAAAAElFTkSuQmCC" style="width: 25px">Kirim sptmasa
            </span>
          </div>
          <div>
            <form>
              <div class="container">
                <div class="row">
                  <div class="col-3" style="padding: 8px">
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
        <td><a href="dopp"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-dopp-tab" data-bs-toggle="tab" data-bs-target="#nav-dopp" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Lampiran DOPP</button></a></td>
        <td><a href="dbp1"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-dbp1-tab" data-bs-toggle="tab" data-bs-target="#nav-dbp1" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Lampiran DBP Bagian 1</button></a></td>
        <td><button style="color: black; 8px 20px; text-align: center;" class="nav-link active" id="nav-dbp-tab" data-bs-toggle="tab" data-bs-target="#nav-dbp" type="button" role="tab" aria-controls="nav-dbp" aria-selected="true">Lampiran DBP Bagian 2</button></td>
        <td><a href="indukspt"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-indukspt-tab" data-bs-toggle="tab" data-bs-target="#nav-indukspt" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Induk SPT</button></a></td>
        <td><a href="uploadspt"><button style="color:grey; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-kirim-tab" data-bs-toggle="tab" data-bs-target="#nav-kirim" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kirim SPT</button></a></td>
      </tr>
    </thead>
  </table>
</div>
<div class="tab-content" id="nav-tabContent" style="margin-top: 40px;">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="table"; style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px">
      <span style="color: white; font-weight: bold;  width: 25px">B. Daftar Surat Setoran Pajak, Bukti Penerimaan Negara dan Bukti Pemindahbukuan</span>
    </div>
    <div class="bodyproof">
      <table class="table" style="text-align: right;"> 
        <thead>
          <tr style="font-size: 13px; font-weight: 200; color: white; background-color: rgb(4, 153, 195); text-align: center;">
            <td>KODE AKUN PAJAK</td>
            <td>KODE JENIS SETORAN</td>
            <td>NTPN/NO BUKTI PBK</td>
            <td>TANGGAL SSP/BPN/BUKTI PBK</td>
            <td>JUMLAH PPH DISETOR</td>
          </tr>
        </thead>
        <tbody>
          <tr style="font-weight: 200; font-size: 15px; text-align: center;">
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</body>

<div class="shadow-sm" id="footer" style="background-color: rgba(0,0,0,0.7); height:auto">
  <div class="container text-center text-md-start mt-5">
    <img src="{{ asset('taxcentre.png') }}" alt="">
      <div>
          <span style="color: #FFF;"><i>Alamat: <br>
          Jl. Ahmad Yani Batam Kota. Kota Batam. <br>
          Kepulauan Riau. Indonesia <br><br>
          Email : info@polibatam.ac.id <br>
          Phone : +62-778-469858 Ext.1017 <br>
          Fax : +62-778-463620 <br>
          Email : info@polibatam.ac.id</i></span>
      </div>
  </div>
<div class="text-center">
  <span style="color: #FFF; font-size: 36px; font-family:'Satisfy',serif;"><i>Tax Center</span><br>
  <span style="color: #FFF; font-size: 14px">Politeknik Negeri Batam</i></span><br>

  <div class="media-social">
    <a href=""><i class="fa-brands fa-twitter"></i></a>
  </div>
  <div class="media-social">
    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
  </div>
  <div class="media-social">
    <a href=""><i class="fa-brands fa-instagram"></i></i></a>
  </div>
  <div class="media-social">
    <a href=""><i class="fa-brands fa-skype"></i></a>
  </div>
  <div class="media-social">
    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
  </div>

  <div class="copyright">
    <i class="fa-regular fa-copyright"></i> Copyright
    <strong>Polibatam Software Team</strong>
    All Rights Reserved
  </div>
</div>
</div>