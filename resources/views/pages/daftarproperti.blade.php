<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Daftar Properti - Bibikost</title>
  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-1">
			<form action="/action_page.php">
			  <div class="form-group row">
			    <label class="col-form-label col-sm-2" for="tipeprop">Tipe properti:</label>
			    <div class="col-sm-10">
			      <select class="form-control" id="tipeprop">
			      	<option>Kost</option>
			      	<option>Kontrakan</option>
			      	<!--<option>Toko</option>-->
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label class="col-form-label col-sm-2" for="namaprop">Nama properti:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="namaprop" placeholder="Masukkan nama properti" aria-describedby="namaprophelp">
			      <small id="namaprophelp" class="form-text text-muted"><i>Nama ini yang akan ditampilkan pada pencarian</i></small>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label class="col-form-label col-sm-2" for="alamatprop">Alamat properti:</label>
			    <div class="col-sm-10"> 
			      <input type="text" class="form-control" id="alamatprop" placeholder="Masukkan alamat properti" aria-describedby="namaprophelp">
			      <small id="namaprophelp" class="form-text text-muted"><i>Masukkan alamat lengkap dari RT/RW, kelurahan, kecamatan, hingga kota</i></small>
			    </div>
			  </div>
			  <div class="form-group row"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox" id="agreement"> Saya telah setuju dengan Syarat dan Ketentuan Penggunaan</label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group row"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Submit</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
