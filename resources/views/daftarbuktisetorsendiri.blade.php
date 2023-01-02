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
  <title>PPh yang disetor sendiri | E-Bupot</title>
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
      <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px;  width: 860px">
        <a class="btn btn-outline-light" href="{{('/pajakpenghasilan')}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB4UlEQVRIie3WP08WQRAG8J+2SolRQaLyKvR+BTsVaQnfwD9YCH4PS6I2ViAS1GhMKLWESkzUmBAT7azECoS8Fjcvqxe52zuMseBJNpebe2ae2dmdveUA/wiHGnCHcBWXcBqDYf+CT3iOp/j8t5IbwCy20a0ZO3gUie0L4/geQTcxhwmM4EiMkbDNB6eLDYy1Fb2lmEEXj3E2w2cYi9Lsp5qKjofjNm43dcZ0+O9oMPNBqbxtRHuYkcp+MsfhgVTe/WIpYt2rIw4pyrtp7zU9hlW8zhDuRKxtqf3+iJuR4VyF6FpwVjKEKdqri+tVpJdBmqgRXYv3HEyGz4sq0scgnSvZ+/Emvr3D8UxRij7v4n0VaSNIfSX7qvpTqzfKa98n7e5dHG6QeS66bZw+hOP5kr1c6hMNYo7+4reL8ozX43mhZP+Ki3gbgZblb65erPUq0o3Ibn6P723aaSH416pIp6QDZLhCfAWvMkQ72MIPNQcI3I8MFzMC1+FJxJrNIQ9IbTW9D9E7EeObBptxTPqtzbQU7flfaeo8JV0ElhTrVYeOVN4dxdnfCmNS2bcUB/6koqWOxhgN20JweuW93Fa0h37cVezMnMveQxlr2uR6Oyhdb8/4/Xq7rvj7PIv3A/w/+Am/TqGFCMnpPgAAAABJRU5ErkJggg=="></a>
        <div style="background-color: #FFFFFF">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #FFFFFF; font-weight: bold;">
                  <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                  Daftar Bukti Setor atas PPh yang disetor sendiri
                </span>
              </div>
  <form>
    <span>
        Pencarian Berdasarkan 
    </span>
    <div class="col-auto my-1">
    <select type="" class="" id="" placeholder="periode" style="width: 15%; height:30px;">
<option></option>
<option>Nomor Bukti Setor</option>
<option>Periode</option>
    </select>  
  </div>
    <span>
        Kata Kunci
    </span>
    <div class="col-auto my-1">
    <input type="" class="form-control" id="FormControlInput1" placeholder="" style="width: 15%; display: inline-block">
      </div>
    </div>    
  </div>
    </div>
  
    <div style="padding:5px;"></div>
  <button type="button" class="button button1">
  <span>Cari</span></button>
  <div style="padding:5px;"></div>
              <div style="padding: 0px 15px;"></div>
              <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Tampilkan</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
      <label class="mr-sm-2" for="inlineFormCustomSelect">entri</label>
      <table class="table">
              <div style="padding: 0px 15px;">
                <table id="tabsendiri" class="table w-100 table-bordered table-hover">
                  <thead>
                    <tr style="background-color: rgb(4, 153, 195);">
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        PERIODE <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        KODE OBJEK PAJAK<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        NOMOR BUKTI SETOR <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        JUMLAH PENGHASILAN BRUTO(RP) <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        PPH DISETOR(RP) <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($daftarpphsendiri as $data)
                    <tr class="text1" style="background-color: #FFFFFF;">
                      <th scope="row">{{ $data['masa_pajak'] }}-{{ $data['tahun_pajak'] }}</th>
                      <th>{{ $data['kode_objek_pajak'] }}</th>
                      <th>{{ $data['nomor_bukti'] }}</th>
                      <th>{{ $data['jumlah_penghasilan_bruto'] }}</th>
                      <th>{{ $data['jumlah_setor'] }}</th>
                      <td><img  type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAACbElEQVRIid2VvWsUQRiHn3c3ICjJGQtBCVocnpaiBDzTebe7dxc/8B8QFEEsbFJpt1gFNEUawcLWJiBE8O52sxsUhVjYiRLlLkJioV2UJERub8YiH6yb5D5iGn1hWHh/85vnfWeGHfhfQvZqoVKpdDyKokwqlZqemJhoxjVjLwC2bV+Iougj4C8uLk4Wi8V9cf2PTizLyonIHWAgsc5qs9m8EYbh5ySgWCwONJvNWeDARk5r/WJoaOiy67oKwIwBSiJSBU4BRxPjmGmaYb1e/5SE1Gq1n+l0WgH5zcpFMvPz86/n5ua+QGy7ROTuemdPRMSKD631oOd5k4ktOm9Z1kNAfN8fBe7F5BUR2ey6JyZkAJRS40EQvE9WHI98Pn8OqIhIn+M4qWw2e8t13VHHcRpa6/sicsXzvIWN+fGDNwBM01StAI7jnDEMowz0AWitb87MzDx2XdfwPG/MNM2TnucFcU9Xt6tQKAxqrUOgP55fBz0AqFQqX5O+jiGWZZ1WSlWBg9vIy0qp5zt5O4IMDw/3i0gIHNpGXlJKFaampl79FaTRaOR2ACwbhnEpCII3rfwdQbTWuW3SK4ZhXKxWqy/b+TuCiEgSsiIiWwCWZV3N5XKZpL8nmUhGPp9PASeABWBaRMIoivwwDL/H59m2fRZ4ZprmWyDbFSQIgh+lUulIuVz+1mqeYRi9SimA3i1aOwhAO0C72JNffTcQDaC13tVDFvPppBY/kzpwWESu27b9dBeca+vfWivIOJDVWo8AI90StF7bCOBRUtt8tOr1+od0Oj3L2iO1H/gFrHY4loB3InLb932/2wL/nfgNOb/pbMQz5O4AAAAASUVORK5CYII=">
                    <a href="{{url('/hapus_pphsendiri/'.$data['id'])}}">
                    <img type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABmJLR0QA/wD/AP+gvaeTAAABkUlEQVRIid3VsWpVQRAG4C8mRK9EExvNjVrZWehL6AvkJYJVUoqgYGEtNppCwfcQtNLKB1AURFESixAIghLxxmLnxOW4596z4Vb5Ydmd3Zn5d/6zZ5fjhpkK31PYwI2wX+ARfk1zQyfxBgf4Eu0Ar2NtatiIxLclFWZwJ+bW+ySYy8aLuIeFgt9NjHAFmzE3G3PruFqI+YH72GsvXMd+7HIabR/XuiocYDUc13Cusq1F7GrkOkQuHfzExxifwW7XjjpwNvoPkesQJwrOW9EvF5JczOxLWeIGF6LfbictEe3gN4at+Sd4ldkv8bjlM4zYnT5EI3wvEC1iKbOXWjasSNWM+hCR5GtL1wfL/knfi2jb/xX1wVDh+4wj2pJkGXSslzCQ5K2qqOvkjUOjQLV0eXANUbV01FXU+B5JuryiP9G67IaoWFH7CmpQku5By76Fb5k9VrouzEs/3dOKmGcRM19DBO/xTr8jfjrzL6JLOngo3W+f8HUC0WWcl56JImbHBL+VnowVk6v6jLt4PsHvGOEvunthR8ketLcAAAAASUVORK5CYII=">
                    </a>   
                    </td>
                    </tr>
                    @endforeach
                      </tbody>
                </table>
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
                 <div style="padding:5px;"></div>
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
           <script src=" https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"></script>

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