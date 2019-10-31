<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon"
        href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/dd4byb2-1fc5e70f-4099-4e15-b194-7f450ac735fe.png/v1/fill/w_800,h_800,strp/avengers__endgame__2019__avengers_snap_logo_png__by_mintmovi3_dd4byb2-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODAwIiwicGF0aCI6IlwvZlwvODQ2YTkwODYtOGE0MC00M2UwLWFhMTAtMmZjN2Q2ZDczNzMwXC9kZDRieWIyLTFmYzVlNzBmLTQwOTktNGUxNS1iMTk0LTdmNDUwYWM3MzVmZS5wbmciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.soebOX2_vOWgPcZuFxyAq5rPW2okbZogwJUq0YwF3PE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Apon</title>
    <?php include 'headerLogin.php';?>
    <style>
      #alamat:focus{
        outline:none;
      }
      #BtnTransk:hover{
        background-color:white;
      }
      #TDKbtn:hover{
        background-color:white;
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:40px;">
      <h1 style="margin-bottom:20px;">Detail Pengiriman</h1>
      <div class="card" style="float:right; padding-bottom:63px; padding-right:30px; border:2px solid #13B1E2;">
        <div class="card-body">
          <h6 style="margin-bottom:20px; "><span style="left:0px;">Metode Pembayaran</span></h6>
          <div class="d-inline-flex p-3 ">
            <div class="p-2">Harga Barang</div>
            <div class="p-2">:</div>
            <div class="p-2">RP 35.000,00</div>
          </div>
          <br>
          <div class="d-inline-flex p-3">
            <div class="p-2 ">Harga Ongkir</div>
            <div class="p-2 ">:</div>
            <div class="p-2 ">RP 12.000,00</div>
          </div>
          <br>
          <div class="d-inline-flex p-3">
            <div class="p-2 ">Jumlah Barang</div>
            <div class="p-2 ">:</div>
            <div class="p-2 ">3</div>
          </div>
          <br>
          <br>
          <div class="d-inline-flex p-3">
            <div class="p-2 "><b>Total</b></div>
            <div class="p-2 "><b>:</b></div>
            <div class="p-2 "><b>RP 47.000,00</b></div>
          </div>
          <br>
          <button id="BtnTransk" data-toggle="modal" data-target="#ONLINE" class="btn btn-light" type="button" name="button" style="width:250px; border:1px solid #13B1E2; margin-left:20px; margin-bottom:20px;"><span style="color:#13B1E2">Bayar Offline</span></button>
          <br>
          <button id="BtnTransk" data-toggle="modal" data-target="#OFFLINE" class="btn btn-light" type="button" name="button" style="width:250px; border:1px solid #F35410; margin-left:20px;"><span style="color:#F35410">Transfer</span></button>
        </div>
      </div>

      <!-- The Modal ONLINE -->
      <div class="modal" id="ONLINE">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h5 style="margin-left:10%;"><b>Anda Yakin Ingin Membeli <span style="color:#F35410;">Produk</span> Ini?</b></h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <center>
                <button type="submit" class="btn btn-light" data-dismiss="modal" style="margin-right:10%; background-color:#F35410; padding:5px 20px 10px;"><span style="color:white">YA</span></button>
                <button id="TDKbtn" type="button" class="btn btn-light" data-dismiss="modal" style="border:1px solid #13B1E2;"><span style="color:#13B1E2;">Tidak</span></button>
              </center>
            </div>

          </div>
        </div>
      </div>

      <!-- The Modal OFFLINE -->
      <div class="modal" id="OFFLINE">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h5 style="margin-left:10%;"><b>Anda Yakin Ingin Membeli <span style="color:#F35410;">Produk</span> Ini?</b></h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <center>
                <button type="submit" class="btn btn-light" data-dismiss="modal" style="margin-right:10%; background-color:#F35410; padding:5px 20px 10px;"><span style="color:white">YA</span></button>
                <button id="TDKbtn" type="button" class="btn btn-light" data-dismiss="modal" style="border:1px solid #13B1E2;"><span style="color:#13B1E2;">Tidak</span></button>
              </center>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body" style="padding-bottom:90px; border:2px solid #F35410;">
              <h5>Alamat Pengiriman</h5>
              <input id="alamat" type="text" name="" value="" style="width:450px; border:none; " placeholder="Apabila obat akan diambil di apotik, alamat tidak perlu ditulis">
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top:30px; margin-bottom:40px;">
        <div class="col">
          <div class="card" style="border:2px solid #F35410;">
            <div class="card-body" style="padding-bottom:40px;">
              <div class="row">
                <div class="col">
                  <img src="file:///C:/Users/asus/Pictures/Nelco.png" alt="Icon" style="border:1px solid #F35410;">
                </div>
                <div class="col">
                  <h3 style="margin-top:25px;">Nelco Syrup</h3>
                  <h6 style="margin-top:20px;">Obat Batuk</h6>
                  <h6 style="margin-top:20px;"><span style="color:#F35410;">Rp 35.000,00</span></h6>
                  <p style="margin-top:20px;"><b>Jumlah : 1</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
