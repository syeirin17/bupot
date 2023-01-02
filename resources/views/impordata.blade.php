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
  <title>Impor Data PPh | E-Bupot</title>
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
      height: 1000px;
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
      <div class="" style="background-color: #f5f5f5 ; padding: 10px 20px 0px 10px; width: 860px">
        <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
            <a style="border-radius: 2px 30px 8px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link " type="button">Dashboard</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link active" id="nav-pajak-tab" data-bs-toggle="tab" data-bs-target="#nav-pajak" type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
            <a href="{{url('/sptmasa')}}" style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:120px; height:103%; width:15%;" alt="" srcset="">
          </div>
        </nav>
        <div class="dropdown">
          <div style="padding:5px;"></div>
          <button style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButtonLink" data-bs-toggle="dropdown" aria-expanded="false">
            <span style="color: #FFFFFF;">PPh yang disetor sendiri</span></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLink">
            <li><a class="dropdown-item" href="{{url('/daftarbuktisetorsendiri')}}" type="button" class="btn btn-dark text-white" data-toggle="button" aria-pressed="false" autocomplete="off">
                Daftar PPh yang disetor sendiri</a></li>
            <li><a class="dropdown-item" href="{{url('/rekampphsendiri')}}" type="button" class="btn btn-dark text-white" data-toggle="button" aria-pressed="false" autocomplete="off">
                Rekam PPh yang Disetor Sendiri</a></li>
          </ul>
          <button style="font-size:14px; background-color: rgb(4, 153, 195); " class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <span style="color: #FFFFFF;">PPh pasal 4 Ayat(2), 15, 22, 23</span></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{url('/daftarbuktipotongBPPs')}}">Daftar BP Ps4(2), 15, 22, 23</a></li>
            <li><a class="dropdown-item" href="{{url('/rekambp1')}}">Rekam BP Ps4(2), 15, 22, 23</a></li>
          </ul>
          <button style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <span style="color: #FFFFFF;">PPh non Residen</span></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="{{url('/daftarbupotnon')}}">Daftar Bukti Potong PPh Non Residen</a></li>
            <li><a class="dropdown-item" href="{{url('/rekambupotnon')}}">Rekam Bukti Potong PPh Non Residen</a></li>
          </ul>
          <a href="{{url('/impordata')}}" style="font-size:14px;background-color: rgb(4, 153, 195);" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
            <span style="color: #FFFFFF;">Impor data PPh</span></a>
          <a href="{{url('/posting')}}" style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
            <span style="color: #FFFFFF;">Posting</span></a>
        </div>
        <div style="padding:5px;"></div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card border-light mb-4" style="max-width: 18rem;">
              <div class="card-header bg-warning text-white" style="font-weight: bold">Petunjuk Pengisian</div>
              <div class="card-body text-dark">
                <p class="card-text">Deskripsi Form: Form ini digunakan untuk menggunggah data bukti pemotongan dalam format excel(.xlsx.). Ditujukan bagi Pemotong PPh yang menerbitkan bukti pemotongan dalam jumlah banyak yang tidak dapat direkam menggunakan fitur key in.</p>
                <p class="card-text">Untuk format excel yang diupload Anda dapat mengunduhnya <a href="{{url('/download_folder')}}" class="link-primary">disini</a></p>
                <p class="card-title">Terdapat 2 bagian pada form</p>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="card border-light mb-8">
              <div class="card-header bg-info text-white" style="font-weight: bold">Impor Data Pajak Penghasilan</div>
              <div class="card-body text-dark">
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                  <div class="col">
                    <label for="inputnpwp" class="col-sm-6 col-form-label">NPWP</label>
                  </div>
                  <div class="col">
                    <input class="form-control" style="height:73%;" type="text" placeholder="" aria-label="default input">
                  </div>
                </div>
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                  <div class="col">
                    <label for="inputjenisbupot">Jenis Bukti Potong</label>
                  </div>
                  <div class="col">
                    <input class="form-control" style="height:90%;" type="text" placeholder="" aria-label="default input">
                  </div>
                </div>
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                  <div class="col">
                    <label for="">Tahun Pajak</label>
                  </div>
                  <div class="col">
                    <select class="form-select" id="validationDefault04" required>
                      <option selected disabled value="">Pilih Tahun Pajak</option>
                      <option>2022</option>
                    </select>
                  </div>
                </div>
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px; ">
                  <div class="col">
                    <label for="">Masa Pajak</label>
                  </div>
                  <div class="col">
                    <select class="form-select" id="validationDefault04" required>
                      <option selected disabled value=""> Pilih Masa Pajak</option>
                      <option>Januari</option>
                      <option>Februari</option>
                      <option>Maret</option>
                      <option>April</option>
                      <option>Mei</option>
                      <option>Juni</option>
                      <option>Juli</option>
                      <option>Agustus</option>
                      <option>September</option>
                      <option>Oktober</option>
                      <option>November</option>
                      <option>Desember</option>
                    </select>
                  </div>
                </div>
                <form>
                  <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                    <div class="col">
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Upload file</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".xlsx">
                      </div>
                </form>
                <div class="col">
                  <p class="text-secondary"><small>Ukuran file maksimal 2MB berformat .xlsx</small></p>
                  <p class="text-danger"><small> Pastikan tidak melakukan impor excel dengan data yang sama apabila terdapat excel yang belum selesai diproses sebelumnya.</small></p>
                </div>
              </div>
              <div class="col" style="margin-left: 70px;">
                <button class="button button1" type="button">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAABmJLR0QA/wD/AP+gvaeTAAAAkUlEQVQokZ3PsQ3CMBCF4c9JVqCGmiajZCMKCiraIERLwQwZhCkgBSwABY5khLEQTzrJZ7//3ZlPVdhig5B5f1PADo9YhxIU0CfmIhSwz5in6ieoisAiXgyZyQMazHNrdZn0LjVUGaiov4A26e8Zzy05twEXzJKAFZaxP2Pt9RfRa0T9wzY1xgYnXJOUbwo4PgGiuyM7j6ErlwAAAABJRU5ErkJggg==">
                  Unggah</button>
                <button class="button button2" type="button">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAy0lEQVQoka3RvUpDQRAF4C/m4gso4QpiYW8n2FnkCYL4BrYWtr5KUqX1HSRNrKzEF7AzhAhaKDZyLRzMctkVr3hg2J/Zs+fMDP+M6rcPN1rnGqO/qNQ4Rj/2sIkd3OG9Te7Fuo1hENs4wBnmOMdjyXYO9xjjBLeJq2+lNzxhLz6c4SFigWccYT/iKqdS4zRz38MUDV79MJFc3XAZ5CYcZmv+KJAHSX5VUs5hFy+het2FWOHG2vKwC/kwIU7SRKk5KZbY8jXjC+WedMMnvqYkZlP41hUAAAAASUVORK5CYII=">
                   Batal</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; width: 98%; margin: 10px 0px 10px 12px; padding: 10px">
        <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
        <span style="font-weight: bold; color: white">Daftar Dokumen</span>
        <a href="{{('/impordata')}}" style="padding-left:70%; color:white;">Refresh </a>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAABk0lEQVQ4jdWUv0vVURiHnyPXH7e7aJKTNpU06R4U4nCnSHAQB9v8B4yInJRAF+dag7ZaFARxDIey/yEcrm6FOJiGiE+D77cu916/X7046AdezuE973nOe369cNuUso5aAsaArZTSSfj6gUngCTAEdAB7wBdgLaX0s3AF9bnnmlbL6lv12P86C8t0qC6p3UXgmZgwr36Pfk19qT5QO9VS9OdiTHVbvXcZ8Em0H9Q7OfHliFH9qvYUgbNt76jvC3aZ6uCLFwVNqfsN9ikPHPMq6q56pPYVxV9J6uvIejbzdVwTez3ax01gdVQdbxP8A/gDDDaNqBvxNkvtkNWqOtJqILvdR+2AG1V/xtvRPrsO8D+pd+ML19TKJeI/t3ieU00Zp5T2gRXOi807NbXg1esXcAD0An1hXRdlUY6/n33pck7GFfVjQxmYydviQIsi9DCKUKc6rL5S9yLmm/qmEBzwbnVZ/d1QP+rL5pG6oPaoL8I3mTFyz1EdACaAp8B94AyoAVvAatwLahdQBTZTSqe5Wd9Y/QVLxO1c+lzd2gAAAABJRU5ErkJggg==">
      </div>
      <div class="form-row align-items-center">
        <div class="col-auto my-1">
          <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">Tampilkan</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
            <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">entri</label>
          <table class="table table-bordered">
            <div style="padding: 0px 15px;">
              <table class="table w-100 table-bordered table-hover">
                <thead>
                  <tr style="background-color: rgb(4, 153, 195);">
                    <th class="text" style="color: #FFFFFF;" scope="col">
                      N0MOR TIKET<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                    </th>
                    <th class="text" style="color: #FFFFFF;" scope="col">
                      NAMA FILE<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                    </th>
                    <th class="text" style="color: #FFFFFF;" scope="col">
                      TANGGAL UPLOAD <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                    </th>
                    <th class="text" style="color: #FFFFFF;" scope="col">
                      JUMLAH BARIS <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                    </th>
                    <th class="text" style="color: #FFFFFF;" scope="col">
                      STATUS <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                    </th>
                    <th class="text" style="color: #FFFFFF;" scope="col">
                      KETERANGAN UPLOAD <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                    </th>
                    <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text1" style="background-color: #FFFFFF;">
                    <th scope="row">12</th>
                    <td>123456789390.xls</td>
                    <td>12/02/2021 08:15:25</td>
                    <td>11</td>
                    <td>Sukses Validasi</td>
                    <td>SUCCESS003 Data Bukti Potong/Pungut Unifikasi Berhasilan Dibentuk</td>
                    <td>
                      <img a type="button" style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAD9klEQVRoge2YTUxcVRTHf+cNHxPTUowyH28mIyVGoyxJm2pRm9KYaFnYpbbdFGNdqfEzNnFlgonfXZk0wS5s7dLYgCuIpoKJId2Y4KJRAg3cN4AJEIgZHOYeF53BoQJz38Cu77d6993/Oed/5r1733sDERERERERERH3LrKXyRKJRDIWiz3qeV6Hqu4H7itP/S0iK9baP0ul0q35+fm5vaq5qwZyudz96+vrp4Ae4BjgO4Ya4CdguKmp6bupqamlej3U1UA6nX7a87zXVLUXaK63eJk1ERm01l4MguDnsMGhGkilUs94ntcPPBm2kCNjqnohCIIbrgFODSQSiWRDQ8NnwEuOMUuqOgzcBsTzvJyq9gCtDrEqIleLxeLbLmulphnf908AV4CkQ/F5Vf3A9/3LN2/eLFZPdHV1NRpjzonIh0CbQ648cNYYM7yTaMcGfN9/D+gHPIeCE8DzxpjbO4nS6fRDIvID8LhDTgu8b4z5eDvBdg1IJpP5XFXfcCgCsKCqh4IgmK6cyGQyR4AnAETkl5mZmV8rc6lUqt3zvHHgQZfkIvLl7Ozsm4C6NOD5vn8J6HM0j6qeD4LgEkB7e3trsVj8VlWfu0s2FI/HT09OTi4DZDKZV1X1K9cawIAx5hXuXJX/zO7WPLDo+/7lymAb8wAnC4XClcqgtbX1a2A5RJ2+srdNnqsH9ZhHVUcqCzaTyRzZxnyF3mw2exhgYmLiHxEZCVOLLZrYOEin0y8S0jyAiExXDY/W0qtqd+XYWjsVth7QV/YKuO0uYfjfIqtT48xGA0EQXAMGwiYQkfaq47Fa+lKpNFqlPxi2HjBQ9gpsvgK2vMpDNaGqPZ2dnU0A5a1yaAf59Xw+Pw5QjjkephZb7ER330L1NNG6tLR0rjKIx+OngcEtdNcLhcLZymBxcfFl4ECIOltuo3v1IPvLWnson89vLMpsNntYVY9aa1VVxyq/PEAymTwYi8XGgQdckqvqF0EQvIXjg2wD3/ffBT7CbbH/bq09Wd3EVpTNDwGPOeQscedV4pPtBLGdoldWVsZaWlpGgWeB/TWKtYnImZaWltVcLvfbwsJCqXqys7OzqbGx8bznedeAnIP5QEROGWOu7iRyep1OJpOJhoaGT1X1jGPMsoiMWGunYWOnOo7bPa+q+o219p25ubn5WuJQHzTpdPopEekHumuK6+MGcMEYU3M7rlDXJ6Xv+92q+rqI9ALxenJUUVDVQRG5aIwZrS3fzK4+6js6Og6sra29AJxQ1WNA1jF0RkR+BIabm5u/r7yh1sOe/q2SSqXaPM97REQeVtV9wL7y1KqIrKrqH9baW/l8fmEv60ZERERERERE3Kv8C+hPjLg4WUumAAAAAElFTkSuQmCC">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div style="display: flex; justify-content: space-between;">
              <div style="font-size: 15px"z`>
                Menampilkan 1 sampai 3 dari 3 entri
              </div>
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