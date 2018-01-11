<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>
  <title>Pendaftaran</title>

<body>
  <div class="py-5" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-6" id="book">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Form Pendaftaran</h3>
              <form  action="proses_daftar.php" method="post" enctype="multipart/form-data">
                <div class="form-group"> <label>NIS</label>
                  <input class="form-control" name="nis" placeholder="masukan NIS"> </div>
                <fieldset class="form-group"> <label class="form-control-label">Nama</label>
                  <div class="input-group"> <span class="" id="basic-addon1"></span>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Jenis Kelamin</label>
                  <div class="input-group"> <span class=""></span>
                    <input type="text" name="jenis_kelamin" class="form-control" placeholder="masukan jenis kelamin" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Tempat Lahir</label>
                  <div class="input-group"> <span class=""></span>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="masukkan tempat lahir" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Tanggal Lahir</label>
                  <div class="input-group"> <span class=""></span>
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Foto</label>
                  <div class="input-group"> <span class=""></span>
                    <input type="file" name="foto" class="form-control" placeholder="masukan foto" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Alamat</label>
                  <div class="input-group"> <span class=""></span>
                    <textarea class="form-control" name="alamat" placeholder="masukan alamat" aria-describedby="basic-addon1"></textarea> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Username</label>
                  <div class="input-group"> <span class=""></span>
                    <input type="text" class="form-control" name="username" placeholder="masukan username" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <fieldset class="form-group"> <label class="form-control-label">Password</label>
                  <div class="input-group"> <span class=""></span>
                    <input type="password" class="form-control" name="password" placeholder="masukan passsword" aria-describedby="basic-addon1"> </div>
                </fieldset>
                <button name="simpan" type="submit" class="btn btn-primary">Daftar</button>
				 <a class="btn btn-danger" href="index.php"> Batal</a>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="pendik.png" style="border-radius:5%;" width="630px" height="400px">
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>