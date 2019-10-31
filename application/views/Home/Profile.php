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
    <?php include 'headerUser.php'; ?>
    <style>
      .form-control{
        border:1px solid #13B1E2;
      }
      .form{
        outline: none;
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:5%;">
      <div class="row" style="margin-left:10%">
        <div class="col">
          <div class="row">
            <div class="col">
              <button id="btndaftar" type="button" name="button" class="btn btn-secondary" style="margin-top:-20px; margin-left:7%; padding:60px 60px 60px; border-radius:50%;">AZ</button>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-light text-dark" name="button" data-toggle="modal" data-target="#GanttPass" style="border:1px solid #F35410; width:40%; margin-top:10px;"><span style="color:#F35410;">Ganti Password</span></button>
            </div>
          </div>
          <!-- The Modal DAFTAR-->
          <div class="modal" id="GanttPass">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header" style="border:none">
                  <h4 class="modal-title"><b style="color:#13B1E2">Ganti Password</b></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                    <div class="formgroup">
                      <label for="pwd" style="float:left; margin-left:10px;">Password Lama</label>
                      <br>
                      <input type="password" class="form" id="pwd" name="pwd" placeholder="Masukan Password anda" required
                      style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                  <br>
                  <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                    <div class="formgroup">
                      <label for="pwd" style="float:left; margin-left:10px;">Password Baru</label>
                      <br>
                      <input type="password" class="form" id="pwd" name="pwd" placeholder="Masukan Password anda" required
                      style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                  <br>
                  <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                    <div class="formgroup">
                      <label for="pwd" style="float:left; margin-left:10px;">Ketik Ulang Password</label>
                      <br>
                      <input type="password" class="form" id="pwd" name="pwd" placeholder="Masukan Password anda" required
                      style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" style="border:none">
                  <button type="submit" class="btn" style="background-color:#13B1E2"><span style="color:white">Ganti</span></button>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-outline-light text-dark" name="button" style="border:1px solid #F35410; background-color:#F35410; width:40%; margin-top:10px;"><span style="color:white">History Transaksi</span></button>
            </div>
          </div>
        </div>
        <div class="col" style="margin-left:-10%">
          <form action="">
            <div class="form-group">
              <label for="text">Nama:</label>
              <input type="text" class="form-control" name="" value="">
            </div>
            <div class="form-group">
              <label for="text">Username:</label>
              <input type="text" class="form-control" name="" value="">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="text">Nomor HP:</label>
              <input type="text" class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
