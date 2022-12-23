<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>SPT Masa</title>
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

  </style>
</head>

<body>
  <div>
    <div class="shadow-sm  mb-3  " style="background-color: rgba(0,0,0,0.7);"><img src="{{ asset('logo.png') }}" width="70px" style="margin-left: 10px" alt="" srcset="">
        <a style="margin-left: 1050px;">User</a>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVRIie3UMUoDYRDF8Z8psqUpLBRrBS+gx7ATD6E5iSjeQQ/gJUzEwmChnZZaKZiQ0ljsLkhQM5/5Agr74DX7DfOfgZ1Hoz+qAl30Marcx2H1thCtY4DJN76parKqmAH9DM+6eTcArX2QE3yVAO7lBA8TwMNIw6UgeJI46My+rWCjUQL0LVIUBd8lgEO1UfBZAvg8oXamCuWNRu64nRNMmUo/wReSXLXayoDoKc9miMvqW/ZNG2VRNLla2MYudrCFTvX2intlnl/gGu/zDraGYzyLZ/UTjrD6G2AHpxgnAKc9xgmWo9BNPM4BnPYDNiLg24zQ2oNpyFdZvRKZLlGhnvvKPzXXti/Yy7hEo3+iD9EHtgdqxQnwAAAAAElFTkSuQmCC">
    </div>
    <div class='content' style="padding-top :30px; padding-left:250px; padding-right:250px">
    <div class="" style="background-color: #f5f5f5 ; padding: 0px 3px 20px 0px ;  "  >
        <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
                <button style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dashboard</button>
                <button style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pajak Penghasilan</button>
                <button style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;"  href= "{{url('/sptmasa')}}" class="nav-link active" id="nav-dashboard-tab" data-bs-toggle="tab" data-bs-target="#nav-dashboard" type="button" role="tab" aria-controls="nav-dashboard" aria-selected="true">SPT Masa</button>
                <button style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pengaturan</button>
            </div>
        </nav>
        <div class="body">
          <div class="form">
            <div class="header">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6" style=" width: 50%; height: 130px; background-color: white;">
                    <button class="boxitem" onclick="showProof()">
                      <img src="money.png" width="70px">
                      <h6 style="background-color: white;"><a style="background-color: white; color: black; text-decoration: none;">Perekaman Bukti Penyetoran</a></h6>
                    </div>
                  </button>
                  <div class="col-sm-6" style=" width: 50%; height: 130px; background-color: white;">
                    <a href="penyiapanspt"><button class="boxitem" onclick="showProof()">
                      <img src="draft.png" width="60px">
                      <h6 style="background-color: white;"><a style="background-color: white; color: black; text-decoration: none;">Penyiapan SPT Masa PPh Unifikasi</h6>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
             	<div class="table"; style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px">
                <span style="color: #FFFFFF; font-weight: bold; ">Perekaman Bukti Penyetoran</span>
            </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6">
                      <label style="background-color: white;">Tahun Pajak</label>
                      <select name="taxyear" id="taxyear" class="selecttax">
                        <option value="pilih">Pilih Tahun Pajak</option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <label style="background-color: white;">Masa Pajak</label>
                      <select name="taxyear" id="taxyear" class="selecttax">
                        <option value="pilih">Pilih Masa Pajak</option>
                      </select>
                      <button style="border-radius:25px; "class="btn btn-info me-md-6" type="button">Cek</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!--JUMLAH TAGIHAN PER MASA PAJAK-->

    <button class="accordion" style="font-weight: bold; border-radius: 10px; background-color:rgb(4, 153, 195)">Jumlah Tagihan Per Masa Pajak</button>
    <div class="panel">
        <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; margin: 10px 0px 0px; padding: 10px">
            <span style="color: #FFFFFF; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
                Daftar Tagihan Pemotongan atas Bukti Pemotongan PPh Unifikasi
            </span>
        </div>
      <label>Tampilkan</label>
      <select>
        <option value="1">1</option>
      </select>
      <label>entri</label>
      <div class="bodyproof">
        <table class="table table-bordered">
          <thead>
            <tr style="font-size: 15px; font-weight: 200; color: white; background-color: rgb(4, 153, 195); text-align: center;">
              <td>JENIS PAJAK</td>
              <td>JENIS SETORAN</td>
              <td>PPH YANG DIPOTONG</td>
              <td>ID BILLING</td>
              <td>AKSI</td>
            </tr>
          </thead>
          <tbody>
            <tr style="font-weight: 200; font-size: 15px; text-align: center;">
              <td>411122</td>
              <td>100</td>
              <td>1.000.000</td>
              <td></td>
              <td>
                <a href="sptmasa"><button class="buttonproof" style="background-color: lightgray">
                    <img src="billing.png" style="width: 20px"></button></a>
                <a href="sptmasa"><button class="buttonproof" style="background-color: lightgray">
                  <img src="print.png" style="width: 20px"></button></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
<!--BUKTI REKAM PENYETORAN-->                
    <button class="accordion" style="font-weight: bold; border-radius: 10px; background-color:rgb(255, 157, 49)">Bukti Rekam Penyetoran</button>
    <div class="panel">
        <div class="table" style="background-color: rgb(4, 153, 195); height: 50px; margin: 10px 0px 0px; padding: 10px">
            <span style="color: #FFFFFF; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
                Daftar Bukti Setor
            </span>
        <button type="button" class="btn btn-warning btn-sm" style="margin: 0px 0px 0px 800px; border-radius: 20px; background-color:rgb(255, 157, 49)">Tambah</button>
    </div>
  
            <label style="margin-top: 10px; margin-left: 10px; ">Tampilkan</label>
                <select>
                    <option value="1">1</option>
                </select> 
            <label>entri</label>
                <div class="bodyproof">
                    <table class="table" style="text-align: right;"> 
                      <thead>
                        <tr style="font-size: 15px; font-weight: 200; color: white; background-color: rgb(4, 153, 195); text-align: center;">
                          <td>NO</td>
                          <td>NOMOR BUKTI</td>
                          <td>JENIS PAJAK</td>
                          <td>JENIS SETORAN</td>
                          <td>MASA TAHUN PAJAK</td>
                          <td>TANGGAL SETOR</td>
                          <td>JUMLAH SETOR</td>
                          <td>AKSI</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="font-weight: 200; font-size: 15px; text-align: center;">
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>ikon</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
                

<!--RINGKASAN PEMBAYARAN-->
    <button class="accordion" style="font-weight: bold; border-radius: 10px; background-color:rgb(4, 153, 195)">Ringkasan Pembayaran</button>
    <div class="panel">
      <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; margin: 10px 0px 0px; padding: 10px">
        <span style="color: #FFFFFF; font-weight: bold;">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
            Daftar Ringkasan Pembayaran
        </span>
    </div>
                  <label style="margin-top: 10px; margin-left: 10px; ">Tampilkan</label>
                  <select>
                    <option value="1">1</option>
                  </select>
                  <label>entri</label>
                  <div class="bodyproof">
                    <table class="table" style="text-align: right;"> 
                      <thead>
                        <tr style="font-size: 15px; font-weight: 200; color: white; background-color: rgb(4, 153, 195); text-align: center;">
                          <td>JENIS PAJAK</td>
                          <td>JENIS SETORAN</td>
                          <td>PPH YANG DIPOTONG</td>
                          <td>PPH YANG DISETOR</td>
                          <td>SELISIH</td>
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
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
                
        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
        });
        }
    </script>     
  </div>
  </div>
  </div>    
  </div>
 </div>
</body>
</html>


<button type="button" class="button button1" onclick="tambahrow()" style="text-align:center">Tambahkan</button>
