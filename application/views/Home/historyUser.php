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
      th{
        style:border:1px solid #f35410 ;
      }
      td{
        style:border:1px solid #f35410;
      }
    </style>
  </head>
  <body>
    <br>
    <button type="button" class="btn btn-primary" style="float:left; margin-left:3%;">Kembali</button>
    <br>
    <center>
        <h1 class="Hello" style="margin-top:30px;">History <span style="color:#f35410">Transaksi</span></h1>
        <hr size="30px" width="50%" style="background-color:#f35410">
    </center>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Metode Pembayaran</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Example</td>
            <td>Example</td>
            <td>Example</td>
            <td>Example</td>
            <td><button data-toggle="modal" data-target="#Confir" type="button" name="button" class="btn btn-primary">Example</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- The Modal ONLINE -->
    <div class="modal" id="Confir">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h5 style="margin-left:10%;"><b>Anda Yakin Ingin Merubah <span style="color:#F35410;">Status</span> Ini?</b></h5>
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
  </body>
</html>
