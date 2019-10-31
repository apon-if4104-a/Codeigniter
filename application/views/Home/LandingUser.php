<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/dd4byb2-1fc5e70f-4099-4e15-b194-7f450ac735fe.png/v1/fill/w_800,h_800,strp/avengers__endgame__2019__avengers_snap_logo_png__by_mintmovi3_dd4byb2-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODAwIiwicGF0aCI6IlwvZlwvODQ2YTkwODYtOGE0MC00M2UwLWFhMTAtMmZjN2Q2ZDczNzMwXC9kZDRieWIyLTFmYzVlNzBmLTQwOTktNGUxNS1iMTk0LTdmNDUwYWM3MzVmZS5wbmciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.soebOX2_vOWgPcZuFxyAq5rPW2okbZogwJUq0YwF3PE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Apon</title>
  <style type="text/css">
    * {
      margin: 0px;
      padding: 0px;
    }

    #btndaftar:hover {
      background-color: white;
    }

    #btnUnggah:hover {
      background-color: white;
    }

    .form {
      outline: none;
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="row" style="margin-top:40px;">
      <div class="col">
        <a class="unggah" href="<?= base_url(); ?>Home/Input_Resep">
          <button id="btnUnggah" type="button" name="button" class="btn btn-outline-light text-dark" style="border:3px solid #F35410;  margin:10px 20px 10px; width:15%; float:right;"><b style="color:#F35410;">Unggah Resep</b></button>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h4 style="color:#F35410; margin:10px 20px 20px; float:left; display:block;"><b><u>Katalog Obat</u></b></h4>
      </div>
    </div>

    <div class="row" style="margin-bottom:40px;">
      <div class="col-sm-3" style="margin-right:80px; margin-left:20px;">
        <div class="card" style="width:105%; border:2px solid #13B1E2;">
          <div class="card-header" style="background-color:white; border:none;"><img src="file:///C:/Users/asus/Pictures/Nelco.png" alt="Icon"></div>
          <div class="card-body" style=" border:none"><b>Nellco Syrup</b></div>
          <div class="card-footer" style="color:#F35410; background-color:white; border:none"><b>Rp. 35.000</b></div>
          <div class="card-footer" style="background-color:white; border:none">Obat Batuk</div>
        </div>
      </div>
      <div class="col-sm-3" style="margin-right:80px;">
        <div class="card" style="width:105%;; border:2px solid #13B1E2;">
          <div class="card-header" style="background-color:white; border:none"><img src="file:///C:/Users/asus/Pictures/Nelco.png" alt="Icon"></div>
          <div class="card-body" style="border:none"><b>Nellco Syrup</b></div>
          <div class="card-footer" style="color:#F35410; background-color:white; border:none"><b>Rp. 35.000</b></div>
          <div class="card-footer" style="background-color:white; border:none">Obat Batuk</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width:105%; border:2px solid #13B1E2;">
          <div class="card-header" style="background-color:white;border:none"><img src="file:///C:/Users/asus/Pictures/Nelco.png" alt="Icon"></div>
          <div class="card-body" style="border:none"><b>Nellco Syrup</b></div>
          <div class="card-footer" style="color:#F35410; background-color:white;border:none"><b>Rp. 35.000</b></div>
          <div class="card-footer" style="background-color:white;border:none">Obat Batuk</div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>