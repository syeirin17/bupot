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
  <title>Dashboard</title>
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
      <div class="" style="background-color: white ; padding:  10px 20px 0px 20px; width:860px;">
        <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
            <a style="border-radius: 2px 30px 8px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link active" type="button">Dashboard</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link" type="button" style="height: 40px;">Pajak Penghasilan</a>
            <a style="border-radius: 2px 30px 8px 30px; padding: 8px 20px; text-align: center;" href="{{url('/sptmasa')}}" class="nav-link" type="button" style="height: 40px;">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:120px; height:103%; width:15%;" alt="" srcset="">
          </div>
        </nav>
        <div style="background-color: #FFFFFF">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 10px 10px">
                <span style="color: #FFFFFF; font-weight: bold">
                  <img style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                  Daftar SPT Masa PPh Unifikasi yang telah dikirim
                </span>
                <a href="{{('/dashboard')}}" style="justify-content: space-between; margin-left: 36%; color:white">Refresh </a>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAABk0lEQVQ4jdWUv0vVURiHnyPXH7e7aJKTNpU06R4U4nCnSHAQB9v8B4yInJRAF+dag7ZaFARxDIey/yEcrm6FOJiGiE+D77cu916/X7046AdezuE973nOe369cNuUso5aAsaArZTSSfj6gUngCTAEdAB7wBdgLaX0s3AF9bnnmlbL6lv12P86C8t0qC6p3UXgmZgwr36Pfk19qT5QO9VS9OdiTHVbvXcZ8Em0H9Q7OfHliFH9qvYUgbNt76jvC3aZ6uCLFwVNqfsN9ikPHPMq6q56pPYVxV9J6uvIejbzdVwTez3ax01gdVQdbxP8A/gDDDaNqBvxNkvtkNWqOtJqILvdR+2AG1V/xtvRPrsO8D+pd+ML19TKJeI/t3ieU00Zp5T2gRXOi807NbXg1esXcAD0An1hXRdlUY6/n33pck7GFfVjQxmYydviQIsi9DCKUKc6rL5S9yLmm/qmEBzwbnVZ/d1QP+rL5pG6oPaoL8I3mTFyz1EdACaAp8B94AyoAVvAatwLahdQBTZTSqe5Wd9Y/QVLxO1c+lzd2gAAAABJRU5ErkJggg==">
              </div>
              <div style="padding: 0px 15px;"></div>
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
                              N0 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              NO.BPE/NTTE<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              MASA/TAHUN PAJAK <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              PBTL KE <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              TANGGAL KIRIM <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text1" style="background-color: #FFFFFF;">
                            <td scope="row">1</td>
                            <td>546772396592278</td>
                            <td>2021-09</td>
                            <td>Normal</td>
                            <td>14-10-2021</td>
                            <td>
                              <img a type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAABDklEQVQ4jdXUMS5EQRjA8R9hF1kketoNKlbhBEpxAqUDKCg1GgdwAlEo1C5Bwd5BpUAEEbsU+zZ5mezMm7cV/2Ty5c3M9595M1+G/8bEiL4ZbBUxRg9dPOUu1MQDfjLaM9q54s1M6bAdxkRTwXejiG84T2xgF6ul+ZXiIXPYQT8yvpxYNCmexEZV8jhieBHf8WKxeG3xK44NLmgUB+ikxCHb6lXFJfawFIqSv5PJPK4wW+5MHcWR6qPo4gIrWMdtlXgBZ9KXV6YXulJVESbXIibu4158x220xhG/4xrfkfF9rNURfxWxhdNUYsF0ERul3JE0DY4gt44fcYIbwYMUe+g7grpM8IE7fGbO/6P8AibbUDQGiKOcAAAAAElFTkSuQmCC"></button>
                              <img a type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAASklEQVQ4je3QsQ2AMBBD0ZewDyj7T5GFSAroKO+QkMiX3Fr25+sUbNhRg10nOjSMpLToqgfFdfWQdLnepaksh3GWwzg/cxhe9DoT0RZTYSvqYukAAAAASUVORK5CYII="></button>
                              <img a type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAwUlEQVQokaXSsW0CQRAF0Id1KQWYkABCAqcU4TLIoYArABfga4DACbkJbRFDSEBAgJ3RgKVzcIvYw9yC8JdG2tn5f2fnazghR3lD5EdBpo4VJpoxjZNz8QGLhPgQJw8J4lVkqhke8YQOXhP8PtqB/8VtJsXxjTXKe769xAxa4bW78G/DYmzwkuCP0WvqvEfRICxCvda5VM3ehB1+LtyXGUboYhgVutH5TX2zPvGBbdwxx7Pruz0P3D+GDfCeEAti8Au8ATS2dGdJPwAAAABJRU5ErkJggg=="></button>
                              <img a type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAiElEQVRIie2UQQqAIBBFX90hqfvWBWvRVXJVGwcsNLTGhdSHAUV5T1QGvpIJsMDuygKjpsCHS22aAoHG5tG0mqf4BfUIOmDm/CVj8fesQJ8qDklC3/QRPCRZgeFmLRt+J1GDSwywOOByGZu3cMn1TVROHpMUgUsMitdSRxpvnNTfc9nFe1H9OQDMPjgyCnuv6wAAAABJRU5ErkJggg=="></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                      <div>
                        <p style="font-size: 15px">Menampilkan 1 sampai 2 dari 2 entri</p>
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
                    
                    <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                          <span style="color: #FFFFFF; font-weight: bold">
                            <img style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                            Daftar bukti potong pada SPT Masa PPh Unifikasi
                          </span>
                        </div>
                        <div style="padding: 0px 15px;"></div>
                        <table class="table w-100 table-bordered table-hover">
                          <thead>
                            <tr style="background-color: rgb(4, 153, 195);">
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                N0 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                ID DIPOTONG<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                KD OBJEK PAJAK <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                NO BUKTI POTONG <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                TANGGAL BUKTI POTONG <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                JML PENGHASILAN BRUTO(RP) <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">
                                PPH (RP) <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                              </th>
                              <th class="text" style="color: #FFFFFF;" scope="col">KETERANGAN</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text1" style="background-color: #FFFFFF;">
                              <td scope="row">1</td>
                              <td>546772396592278</td>
                              <td>20-6173-18</td>
                              <td>101</td>
                              <td>14-10-2021</td>
                              <td>RP. 1.000.000</td>
                              <td>200.000</td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow-sm " id="footer" style="background-color: rgba(0,0,0,0.7); height:auto">
      <div align="center" class="col-sm-3">
        <img src="{{ asset('taxcentre.png') }}" alt="">
      </div>
      <div align="center" class="col-sm-4">
        <span style="color: #FFF;"> <i>Alamat</i> </span>
        <div align="left" class="col-sm-8">
          <span style="color: #FFF;"><i>Jl. Ahmad Yani Batam Kota. Kota Batam. <br> kepulauan Riau.
              Indonesia</i> </span>
        </div>
        <div align="left" class="col-sm-8">
          <span style="color: #FFF;"><i><br> Email : info@polibatam.ac.id <br>Phone : +62-778-469858 Ext.1017
              <br>Fax : +62-778-463620 <br>
              Email : info@polibatam.ac.id</i> </span>
        </div>
      </div>
      <div align="center" class="col-sm-12">
        <span style="color: #FFF; font-size: 36px; font-family:'Satisfy',serif;"> <i>Tax Center</i> </span>
      </div>
      <div align="center" class="col-sm-12">
        <span style="color: #FFF; font-size: 14px"> <i>Politeknik Negeri Batam</i> </span>
      </div>
      <div align="center" class="col-sm-12" style="padding-top: 30px;">
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
      </div>

      <div align="center" class="col-sm-12">
        <div class="copyright">
          <i class="fa-regular fa-copyright"></i> Copyright
          <strong>Polibatam Software Team</strong>
          All Rights Reserved
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
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

</html>