<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../jquery.simplePagination.js"></script>
    <link href="../simplePagination.css" rel="stylesheet" type="text/css" />
    
    
        <style type="text/css">
    table {
        width: 40em;
        margin: 2em auto;
        }
    
        thead {
        background: #000;
        color: #fff;
        }
    
        td {
        width: 10em;
        padding: 0.3em;
        }
    
        tbody {
        background: #ccc;
        }
    
        </style>
    
        <script>
    
    function test(pageNumber)
    {
    
      var page="#page-id-"+pageNumber;
      $('.select').hide()
      $(page).show()
    
    }
    
    </script>
    
    </head>
    
</head>
<body>
    <div class="tab-content" id="nav-tabContent" style="margin-top: 10px;">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="table"; style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px">
            <span style="color: black; width: 25px">Objek Pajak yang dilakukan Pemungutan/Pemotongan</span>
          </div>
          <div class="col-auto my-1" style="margin-left: 10px">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Tampilkan</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
            <label class="mr-sm-2" for="inlineFormCustomSelect">entri</label>
          </div>
          <div style="padding: 0px 15px;">
            <table class="table w-100">
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
                  <td>(PPH22)Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Semen)</td>
                  <td>22-100-07</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                  <td>(PPH22)Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Baja)</td>
                  <td>22-100-08</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                  <td>(PPH22)Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Otomotif)</td>
                  <td>22-100-09</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                  <td>(PPH22)Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Kertas)</td>
                  <td>22-100-11</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr style="font-weight: 200; font-size: 15px; text-align: left;">
                  <td>(PPH22)Penjualan Kendaraan Bermotor Di Dalam Negeri Oleh ATPM, APM, dan Importir Umum Kendaraan Bermotor</td>
                  <td>22-100-12</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
    </div>
    <script language="javascript">
        $(function() {
            $('#choose').pagination({
                items: 20,
                itemsOnPage: 2,
                cssStyle: 'light-theme',
                onPageClick: function(pageNumber){test(pageNumber)}
            });
        });
        </script>
</body>
</html>