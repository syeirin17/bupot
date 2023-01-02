<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <title>Perekaman Data Bukti Setor | E-Bupot</title>
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
      width: 25px;
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
      <div class="" style="background-color: #f5f5f5 ; padding: 10px 20px 0px 20px; width:860px">
        <div style="background-color: #FFFFFF">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #FFFFFF; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAABO0lEQVQ4jd3SPUtcURDG8d+qEV8wIHa6WMkGSSEEguAHsLGy0EL7NOIHsVJTCRa2mkZWyH6A1UIsLax0wUDEt1goSIzKWuxZcrncs8iqjQeGc3meOf+Z4Q7v8eQwhyNcYwN9L4F9RzUVP2IPBrGKCq5C/EahAayKv/gAbQnYMMpoxSYugn6DEyxhPtLIHR7T4g6O0Z8x5nKks3ospGH5YHxrAlZEexr4NZhjrwGD0ZAwmtAWm4VlAQeeCfuYBrVECnyKVcYWptS24QwTzwEWInoJ0/iHTnSgNwv4EO5cuPMZsCIm1XYumVtNJtUXuxKMIexiBb/wB5chDlKP61OcR6ZRxj66YwmpRkqhUFfSyCW+R7CNU6zhMALLYwZfMIv1RpU/4yfuNV6bPYxnAXJZYhipJ+Ld+v9j3v48Aav2cb2zx30qAAAAAElFTkSuQmCC">
                 Perekaman Data Bukti Setor
                </span>
              </div>
              <form action="proses_tambah_rekamdatabuktisetor" method="POST">
                @csrf
              <div class="container">
                <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                    <div class="col">
                        <label for="">Jenis Bukti Penyetoran</label>
                    </div>
                    <div class="col">  
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" name="jenis_bukti_penyetoran" id="flexRadioDefault1" value="surat setoran pajak" onclick="changeform1(this)">
                                <label class="form-check-label" for="bertindak sebagai">Surat Setoran Pajak</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" name="jenis_bukti_penyetoran" id="flexRadioDefault2" value="pemindahbukuan" onclick="changeform2(this)">
                                <label class="form-check-label" for="bertindak sebagai">Pemindahbukuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="form2" style="display:none;">
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Nomor Pemindahbukuan</label>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" id="pemindahbukuan" maxlength="16" name="nomor_pemindahbukuan" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-label="default input">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 52%; padding-right:15%;">
                        <div class="col">
                            <button type="button" class="btn btn-outline-warning me-md-6"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVQ4ja3UTU5CQRAE4E8XuhfiUv69ArrUg7hRj4EeRyJ3cKWHwETxb6lL2IEuplEDDvAMlbx0Xk2npqa7Z1gTNjJ8A8fYwQdu8FhEuIweJvj89U1wjdKqIvcYooM6tsJdJ/j+KmK9SG5n1g9ivbtIpBH2O0s2u4i8Wi7hXKpFHduoBr8fsRp8M/JOZwU2I5YjvuEEtyHSRwt3wb9G3m7O0Vns1JAKXAm+FbESfNbRFHWr1egSYwtqRJqTodSdv3CIEa6WbKYk1WQodWd6zGY4GUnHyo3HnFjX/GSPw0k7/gd+Oov8XatJd62Md+muDWJtKvKEo4j/wh4ewtmz1KjvOSqCl3BS6DVYhKqZOq0FX1SlQcx+prHVAAAAAElFTkSuQmCC">Cek Pemindahbukuan</button>
                        </div>
                    </div>
                </div>
                <div style="padding:5px;"></div>
                <div id="form1">
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">NPWP</label>
                        </div>
                        <div class="col">
                            <input class="form-control" id="ntpn" maxlength="16" type="text" name="ntpn" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-label="default input">
                        </div>
                    </div>
                    <div class="form-check" style="margin: 0px 0px 10px 410px">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        <small>centang jika NPWP SSP berbeda dengan NPWP Pemotong</small>
                        </label>
                    </div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">NTPN</label>
                            </div>
                            <div class="col">
                            <input class="form-control" id="ntpn" maxlength="16" type="text" name="ntpn" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-label="default input">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Tahun Pajak</label>
                        </div>
                        <div class="col">
                            <select class="form-select" name="tahun_pajak"id="validationDefault04" required>
                                <option selected disabled value="">Pilih Tahun Pajak</option>
                                <option>2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding: 0% 15% 1% 52%">
                        <div class="col">
                            <button style="width:100%; height: 120%"type="button" class="button button1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVQ4ja3UTU5CQRAE4E8XuhfiUv69ArrUg7hRj4EeRyJ3cKWHwETxb6lL2IEuplEDDvAMlbx0Xk2npqa7Z1gTNjJ8A8fYwQdu8FhEuIweJvj89U1wjdKqIvcYooM6tsJdJ/j+KmK9SG5n1g9ivbtIpBH2O0s2u4i8Wi7hXKpFHduoBr8fsRp8M/JOZwU2I5YjvuEEtyHSRwt3wb9G3m7O0Vns1JAKXAm+FbESfNbRFHWr1egSYwtqRJqTodSdv3CIEa6WbKYk1WQodWd6zGY4GUnHyo3HnFjX/GSPw0k7/gd+Oov8XatJd62Md+muDWJtKvKEo4j/wh4ewtmz1KjvOSqCl3BS6DVYhKqZOq0FX1SlQcx+prHVAAAAAElFTkSuQmCC">Cek Surat Setoran Pajak</button>
                        </div>
                    </div>
                    <div style="padding:5px;"></div>        
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Masa Pajak</label>
                        </div>
                        <div class="col">
                        <select class="form-select" id="masapajak" name="masapajak" required>
                          <option selected disabled value="">Pilih Masa Pajak</option>
                          <option>JANUARI</option>
                          <option>FEBRUARI</option>
                          <option>MARET</option>
                          <option>APRIL</option>
                          <option>MEI</option>
                          <option>JUNI</option>
                          <option>JULI</option>
                          <option>AGUSTUS</option>
                          <option>SEPTEMBER</option>
                          <option>OKTOBER</option>
                          <option>NOVEMBER</option>
                          <option>DESEMBER</option>
                        </select>
                                              </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Jenis Pajak(MAP)</label>
                        </div>
                        <div class="col">
                            <input class="form-control" id="jenispajak" maxlength="6" type="text" name="jenis_pajak" placeholder="" aria-label="default input">
                        </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Jenis Setoran</label>
                        </div>
                        <div class="col">
                            <input class="form-control" id="jenissetoran" maxlength="3" type="text" name="jenis_setoran" placeholder="" aria-label="default input" >
                        </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Jumlah Setor(RP)</label>
                        </div>
                        <div class="col">
                            <input  class="form-control" id="jumlahsetor" oninput="handleChange5(this.value)" type="text" name="jumlah_setor" placeholder="" aria-label="default input" >
                        </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                        <div class="col">
                            <label for="">Tanggal Setor</label>
                        </div>
                        <div class="col">
                        <input type="date" value="2023-01-01" style="width: 100%;" />
                        </div>
                    </div>
                    <div class="container">
                      <div class="row" style="padding: 4% 0% 10% 45%">
                        <div class="col">
                            <a href="{{ url('/sptmasa') }}" class="button button1" type="submit">
                              <span style="font-size: 18px">Simpan</span></a>
                            <a href="{{ url('/sptmasa') }}" class="button button2" style="" type="riset">
                              <span style="font-size: 18px">Batal</span></a>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

</body>
<script>

// const formatter = new Intl.NumberFormat('en-US', {
//   style: 'currency',
//   currency: 'USD',

//   // These options are needed to round to whole numbers if that's what you want.
//   //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
//   //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
// });

// console.log(formatter.format(2500));


  let percent ;
  function formatPercent(number) {
    return `${(numeral(number).format()).replace(",",".")}`;
}
  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";

  }
  var selection = document.getElementById("objek_pajak");
  const myElement = document.getElementById("jmlbruto");
  const myElement2 = document.getElementById("jmlhasilbruto");
selection.onchange = function(event){
  var rc = event.target.options[event.target.selectedIndex].dataset.percent;
  
    percent = parseFloat(rc) ;
};
  function handleChange5(src) {
    let newVal = parseInt(src.split(",").join('')) * percent
    myElement2.value = numeral(src).format();
    myElement.value = formatPercent(newVal);
  }
  function maxLength(){
    console.log(1)
  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }
  function changeform2(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "block";

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>