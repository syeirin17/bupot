<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Posting</title>
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
    <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width: 860px">
      <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
          <a style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link" type="button">Dashboard</a>
          <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link active" id="nav-pajak-tab" data-bs-toggle="tab" data-bs-target="#nav-pajak" type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
          <a href="{{url('/sptmasa')}}" style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
          <a style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
          <img src="{{ asset('logobupot.jpg') }}" width="100px" style="margin-left:120px; height:103%; width:15%;" alt="" srcset="">
        </div>
      </nav>
      <div class="dropdown">
        <div style="padding:5px;"></div>
        <button style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButtonLink" data-bs-toggle="dropdown" aria-expanded="false">
          <span style="color: #FFFFFF;">PPh yang disetor sendiri</span></button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLink">
          <li><a class="dropdown-item" href="{{url('/daftarbuktisetorsendiri')}}" type="button" class="btn btn-dark text-white" data-toggle="button" aria-pressed="false" autocomplete="off">
              Daftar PPh yang disetor sendiri</a></li>
          <li><a class="dropdown-item" href="{{url('/rekampph1sendiri')}}" type="button" class="btn btn-dark text-white" data-toggle="button" aria-pressed="false" autocomplete="off">
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
      <div style="background-color: #FFFFFF">
        <div class="tab-content" id="nav-tabContent" style="margin-top: 10px;">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
              <span style="color: #FFFFFF; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABp0lEQVRIie3Vu2sUURQH4DMx4CIqFqaTLSx8kNZagtqJJAH1D1BIqZWNVQgItvZpLIQUgkWCrQEVFLE0EK20Ei00sVl87GexI1yGeewrC0J+3cw5c76ZO3d3IvbzvwcHMIcH+IjnaX16zFgrIi5FxEJEzEfE8arekWEcioiLEXEtx45WtD4Z1QrM4CY20FGebqE2NyzWxhLW8bMC+5cfeJTj8BX9ry5O4jZeJEOa8gFXsZOcW+0Hm8Uy3vUJpXmqtzJbhfOXm9DNITB6q7GCab33nmZXb7fXwi+HQHewkF+/UlJf62eZW3g4APoes/m188r3wfVGOLmBJc07dwPH8v7T+F7S00HV77oSP4/PJcO6uI+pvO+I6o24PhCa4CfwOhm0i8WknuFxzarcGArOhx/EKrZxtlBbrkF/Y2ZoOEFaheMr+FMDb46MltzEKXyrQeHWuNGW5n+1Ltp1c6YGhbMs60TEq4a2t1mWfRp0dmPyp35T88R3x44meBtfKuAzewbn+AX8KqDbe4om+J0CfG9ScIa1BD43ETjHD+t9Up8hmxi8n37yF0yjGoZBrhYOAAAAAElFTkSuQmCC" style="width: 25px">
                Posting Data Pajak Penghasilan
              </span>
            </div>
            <form>
              <div id="form1"></div>
              <div class="container">
                <div class="row">
                  <div class="col-6">
                    <label for="" style="margin-left: 50%">Tahun Pajak</label>
                  </div>
                  <div class="col-6" style="width: 30%">
                    <select class="form-select" id="validationDefault04" required>
                      <option selected disabled value="">Pilih Tahun Pajak</option>
                      <option>2022</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label for="" style="margin-left: 50%">Masa Pajak</label>
                  </div>
                  <div class="col-6" style="padding-top: 5px; width: 30%">
                    <select class="form-select" id="validationDefault04" required>
                      <option selected disabled value="">Pilih Masa Pajak</option>
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
                <div style="padding:10px;"></div>
                <div class="col">
                  <a type="button" class="button button1" style="margin-left:45%; width: 60px" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAy0lEQVQokaXRPWpCQRSG4UcUUkVwCzZ2qV1AeteQysJOEFKJ7iF9IJDORQQk4Bq0stdOjYKohXPJMMSbe/GDw/y+5ztzhjtULXm/jVe0MCsCNDHEHOcQb3lAA11McQrACZswb6dAFc/4wDZyOeMHk5BggUoM9rBKgCyWeIlch6nr4Ab4jaeQICu9+dc7Rwn4iTq+or3prSbBGEf0w/o9SdjNg+ExjP0E3Lv+wr+qhwpieFIEzDRO4E4ZmN8mrvGQHtYKwFvscCjrnKsL5IVIU7V8oH8AAAAASUVORK5CYII=">
                    Cek
                  </a>
                  <div class="modal fade" id="exampleModal" tabindex=" -1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="background-color:lavender;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="card-header bg-transparent border-light" style="margin-left:40%;">
                          <img src="data:image/png;base64,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">
                        </div>
                        <div class="card-body text-dark">
                          <h5 class="card-title" style="margin-left:40%;font-weight: bold;">Posting</h5>
                          <p class="card-secondary" style="margin-left:13%; font-weight: bold; color:red;">Anda akan buat SPT Baru 2022/02 revisi ke-0?</p>
                          <div class="row" style="padding-left: 45%; padding-right:33%;">
                            <div class="col">
                              <div class="d-grid gap-4 d-md-flex justify-content-md-end">
                                <button class="button button2" type="button">Batal</button>
                                <a type="button" class="button button1" style="margin-right:54%; width: 60px " data-bs-toggle="modal" data-bs-target="Modal" data-bs-whatever="@mdo">
                                  Oke</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="padding:15px;"></div>



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
    const myElement = document.getElementById("");
    myElement.style.display = "block";


  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "none";
    document.getElementById("form2").style.display = "block";

  }

  function changeform2(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>