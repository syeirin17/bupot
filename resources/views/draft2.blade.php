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
                    <img src="draft.png" style="width: 25px">Lengkapi SPT</span>
        </div>
        <div>
            <form>
            <div class="container">
                <div class="row">
                <div class="col-3" style="padding: 8px; ">
                    <label style="font-size: 15px">Nama</label>
                </div>
                <div class="col-3">
                    <input type="text" placeholder="" style="width: 100%;">
                </div>
                <div class="col-3">
                    <label style="font-size: 15px">Tahun/Masa Pajak</label>
                </div>
                <div class="col-3">
                    <input type="text" placeholder="" style="width: 100%;">
                </div>
                <div class="col-3">
                    <label style="font-size: 15px">NPWP</label>
                </div>
                <div class="col-3">
                    <input type="text" placeholder="" style="width: 100%;">
                </div>
                <div class="col-3">
                    <label style="font-size: 15px">Pembetulan</label>
                </div>
                <div class="col-3">
                    <input type="text" placeholder="" style="width: 100%;">
                </div>
            </div>
            </form>
        </div>
    </div>
<!--LAMPIRAN DOSS-->
<div class="" style="background-color: white; padding: 0px 10px 0px 10px ; ">
    <div style="background-color: #FFFFFF">
      <div class="accordion" id="accordion">
        <div class="accordion-item"></div>
          <h6 class="accordion-header" id="headingOne">
            <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Perekaman Lampiran DOSS
            </button>
          </h6>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
            <div class="accordion-body">
              <div id="form1">
                <p>Imbalan yang Diterima/Diperoleh Sehubungan dengan Pengangkutan Orang dan/atau Barang Termasuk Penyewaan Kapal Laut Oleh Perusahaan Pelayaran Dalam Negeri</p>
              </div>
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-4"></div>
                      <div class="col-4">
                        <label style="font-size: 15px">Jumlah Dasar Pengenaan Pajak (RP)</label>
                      </div>
                      <div class="col-4">
                        <label style="font-size: 15px; padding: 0px 0px 5px 40px">Jumlah PPh (RP)</label>
                      </div>
                <div class="col-4" style="padding: 3px">
                  <label style="font-size: 15px">a. Penghasilan dari Indonesia</label>
                </div>      
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>     
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>

                <div class="col-4" style="padding: 3px">
                  <label style="font-size: 15px">b. Penghasilan dari Luar Indonesia</label>
                </div>
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>

                <div class="col-4" style="padding: 3px">
                  <label style="font-size: 15px">c. PPh Pasal 24 yang dapat diperhitungkan</label>
                </div>
                <div class="col-4" style="padding: 3px"></div>
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>
  
                <div class="col-4" style="padding: 3px">
                  <label style="font-size: 15px">d. PPh Pasal yang dipotong Pihak Lain</label>
                </div>
                <div class="col-4" style="padding: 3px"></div>
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>

                <div class="col-4" style="padding: 3px">
                <label style="font-size: 15px">e. PPh yang disetor sendiri</label>
                </div>
                <div class="col-4" style="padding: 3px"></div>
                <div class="col-4" style="padding: 3px">
                  <input type="text" placeholder="0" style="width: 70%;">
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--LAMPIRAN DOPP-->
<div style="padding:5px;"></div>
    <div class="accordion-item">
        <h6 class="accordion-header" id="headingTwo">
            <button class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Perekaman Lampiran DOPP
            </button>
        </h6>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
            <div class="accordion-body">
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-6"></div>
                    <div class="col-3">
                      <label style="font-size: 15px; text-align:center">Jumlah Dasar Pengenaan Pajak (RP)</label>
                    </div>
                    <div class="col-2">
                      <label style="font-size: 15px;  text-align:center">Jumlah PPh (RP)</label>
                    </div>

                    <div class="col-6">
                      <label value='22-101-01' data-percent="0.0025" style="font-size: 15px">22-101-01 - Penghasilan Sehubungan dengan Transaksi Penjualan Barang, Penyerahan Jasa, dan/atau Persewaan serta Penghasilan Lain Sehubungan dengan Penggunaan Harta yang Dilakukan Melalui Pihak Lain dalam Sistem Informasi Pengadaan</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="22-101-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="22-101-01" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='22-405-01' data-percent="0.0025" style="font-size: 15px">22-405-01 - Penghasilan Sehubungan dengan Aset Kripto yang dipungut oleh Penyelenggara Perdagangan Melalui Sistem Elektronik yang Merupakan Pedagang Fisik Aset Kripto</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="22-405-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="22-405-01" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='22-405-02' data-percent="0.0025" style="font-size: 15px">22-405-02 - Penghasilan Sehubungan dengan Aset Kripto yang dipungut oleh Penyelenggara Perdagangan Melalui Sistem Elektronik yang Bukan Merupakan Pedagang Fisik Aset Kripto</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="22-405-02" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="22-405-02" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='27-100-07' data-percent="0.0025" style="font-size: 15px">27-100-07 - Penghasilan dari Penjualan/Pengalihan Saham (PPh Pasal 26)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="27-100-07" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="27-100-07" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='27-102-03' data-percent="0.0025" style="font-size: 15px">27-102-03 - Bunga Obiligasi (PPh Pasal 26)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="27-102-03" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="27-102-03" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-401-01' data-percent="0.0025" style="font-size: 15px">28-401-01 - Bunga Obligasi, Surat Utang Negara, atau  Obligasi Daerah yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap.</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-01" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-401-04' data-percent="0.0025" style="font-size: 15px">28-401-04 - Diskonto Surat Perbendaharaan Negara yang diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-04" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-04" placeholder="0" style="width: 60%;">
                    </div>
                  
                    <div class="col-6">
                      <label value='28-401-05' data-percent="0.0025" style="font-size: 15px">28-401-05 - Diskonto Surat Perbendaharaan Negara yang Diterima Wajib Pajak Penduduk/Berkedudukan di Luar Negeri</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-05" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-05" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-401-06' data-percent="0.0025" style="font-size: 15px">28-401-06 - Bunga Obligasi yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-06" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-401-06" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-01' data-percent="0.0025" style="font-size: 15px">28-404-01 - Bunga Tabungan dan Bunga Diskonto yang Ditempatkan di Dalam Negeri yang Dananya Bersumber Selain dari Devisa Hasil Ekspor (DHE)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-01" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-02' data-percent="0.0025" style="font-size: 15px">28-404-02 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 1 bulan)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-02" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-02" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-03' data-percent="0.0025" style="font-size: 15px">28-404-03 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 3 bulan)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-03" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-03" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-04' data-percent="0.0025" style="font-size: 15px">28-404-04 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 6 bulan atau lebih)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-04" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-04" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-05' data-percent="0.0025" style="font-size: 15px">28-404-05 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 1 bulan)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-05" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-05" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-06' data-percent="0.0025" style="font-size: 15px">28-404-06 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 3 bulan)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-06" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-06" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-07' data-percent="0.0025" style="font-size: 15px">28-404-07 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 6 bulan)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-07" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-07" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-08' data-percent="0.0025" style="font-size: 15px">28-404-08 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor lebih 6 bulan)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-08" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-08" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-09' data-percent="0.0025" style="font-size: 15px">28-102-09 - Bunga Deposito/Tabungan yang Ditempatkan di Luar Negeri Melalui Bank yang Didirikan atau Bertempat Kedudukan di Indonesia atau Cabang Bank Luar Negeri di Indonesia</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-09" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-09" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-10' data-percent="0.0025" style="font-size: 15px">28-404-10 - Diskonto Sertifikat Bank Indonesia</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-10" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-10" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-404-11' data-percent="0.0025" style="font-size: 15px">28-404-11 - Jasa Giro</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-11" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-404-11" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-406-01' data-percent="0.0025" style="font-size: 15px">28-406-01 - Transaksi Penjualan Saham di Bursa Efek (Bukan Saham Pendiri)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-406-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-406-01" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-407-01' data-percent="0.0025" style="font-size: 15px">28-407-01 - Transaksi Penjualan Saham di Bursa Efek (Saham Pendiri)</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-407-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-407-01" placeholder="0" style="width: 60%;">
                    </div>

                    <div class="col-6">
                      <label value='28-408-01' data-percent="0.0025" style="font-size: 15px">28-408-01 - Transaksi Penjualan Saham Milik Perusahaan Modal Ventura Tidak di Bursa Efek</label>
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-408-01" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                    </div>
                    <div class="col-3" style="padding: 5px">
                      <input type="text" id="28-408-01" placeholder="0" style="width: 60%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--DAFTAR BUKTI SETOR-->
<div style="padding:5px;"></div>
    <div class="accordion-item">
        <h6 class="accordion-header" id="headingThree">
            <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Daftar Bukti Setor
            </button>
        </h6>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
            <div class="accordion-body">
                <div style="padding:5px;"></div>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Tampilkan</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        <label class="mr-sm-2" for="inlineFormCustomSelect">entri</label>
                        <table class="table">
                            <div style="padding:10px;"></div>
                                <thead>
                                    <tr style="background-color: rgb(4, 153, 195);">
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        N0<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        NOMOR BUKTI<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        JENIS PAJAK <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        JENIS SETORAN <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        MASA TAHUN PAJAK<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        TANGGAL SETOR <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                        <th class="text" style="color: #FFFFFF; font-size: 15px" scope="col">
                                        JUMLAH SETOR <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>BDFG123455678976</td>
                                        <td>441234</td>
                                        <td>100</td>
                                        <td>08082021</td>
                                        <td>22-11-2021</td>
                                        <td>10.00.000</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--PENANDATANGAN-->
<div style="padding:5px;"></div>
    <div class="accordion-item">
        <h6 class="accordion-header" id="headingFour">
            <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Penandatangan
            </button>
        </h6>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
            <div class="accordion-body">
                <div style="padding: 0px 10px;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label style="font-size: 15px;">Penandatangan Sebagai</label>
                        </div>
                        <div class="col-sm-6">
                            <select name="taxyear" id="taxyear" class="selecttax">
                              <option value="pilih">Pengurus</option>
                              <option value="pilih">Wakil Pajak</option>
                            </select>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-6 ">
                                    <label style="font-size: 15px">Penandatangan Bukti Potong</label>
                                </div>
                                <div class="col-sm-6">
                                    <select name="taxyear" id="taxyear" class="selecttax">
                                      <option value="pilih">Budi</option>
                                      <option value="pilih">Wati</option>
                                    </select>
                                </div>
                                <div class="container">
                                  <div class="row" style="padding: 0% 0% 10% 41%">
                                    <div class="col">
                                        <button class="button button1" type="submit">
                                          <span style="font-size: 18px">Simpan</span></button>
                                        <button class="button button2" type="riset">
                                          <span style="font-size: 18px">Batal</span></button>
                                    </div>
                                  </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>
  </div>
  
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>
<script>
  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";
  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }

  function changeform2(src) {
    document.getElementById("button-check").style.display = "inline-block";
    document.getElementById("valid").style.display = "inline-block";
    document.getElementById("invalid").style.display = "inline-block";

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>