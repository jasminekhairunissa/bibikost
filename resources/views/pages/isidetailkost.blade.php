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
   	<h1>Tipe Kamar (id)</h1>
    <div class="row">
        <div class="col-md-9 offset-md-1">
			<form action="/action_page.php">
			 	<div class="form-group row">
			    	<label class="col-form-label col-sm-2" for="hargatahunan">Harga tahunan:</label>
			    	<div class="col-sm-9">
			    	  <div class="input-group">
				    	  <input type="text" class="form-control" id="hargatahunan" placeholder="contoh: 7000000" aria-describedby="hargatahunanhelp">
				    	  <div class="input-group-prepend">
					      	<div class="input-group-text">/tahun</i></div>
					      </div>
					  </div>
			    	  <small id="hargatahunanhelp" class="form-text text-muted"><i>Masukkan angka tanpa tanda pisah apapun. Masukkan 0 jika tidak disewakan tahunan</i></small>
			    	</div>
			  	</div>
			  	<div class="form-group row">
			    	<label class="col-form-label col-sm-2" for="hargabulanan">Harga bulanan:</label>
			    	<div class="col-sm-9">
			    	  <div class="input-group">
				    	  <input type="text" class="form-control" id="hargabulanan" placeholder="contoh: 1000000" aria-describedby="hargabulananhelp">
				    	  <div class="input-group-prepend">
					      	<div class="input-group-text">/bulan</i></div>
					      </div>
					  </div>
			    	  <small id="hargabulananhelp" class="form-text text-muted"><i>Masukkan angka tanpa tanda pisah apapun. Masukkan 0 jika tidak disewakan bulanan</i></small>
			    	</div>
			  	</div>
			  	<div class="form-group row">
			    	<label class="col-form-label col-sm-2" for="hargaharian">Harga harian:</label>
			    	<div class="col-sm-9">
			    	  <div class="input-group">
				    	  <input type="text" class="form-control" id="hargaharian" placeholder="contoh: 200000" aria-describedby="hargaharianhelp">
				    	  <div class="input-group-prepend">
					      	<div class="input-group-text">/hari</i></div>
					      </div>
					  </div>
			    	  <small id="hargaharianhelp" class="form-text text-muted"><i>Masukkan angka tanpa tanda pisah apapun. Masukkan 0 jika tidak disewakan harian</i></small>
			    	</div>
			  	</div>
				<div class="form-group row">
				    <label class="col-form-label col-sm-2" for="ukuranpanjang">Ukuran kamar:</label>
				    <div class="col-sm-2 input-group">
				      <input type="text" class="form-control" id="ukuranpanjang" placeholder="panjang">
				      <div class="input-group-prepend">
				      	<div class="input-group-text">m</i></div>
				      </div>				      
				    </div>
				    <div class="col-sm-1 text-center" style="align-items: center"> 
				      x
				    </div>
				    <div class="col-sm-2 input-group">
				      <input type="text" class="form-control" id="ukuranlebar" placeholder="lebar">
				      <div class="input-group-prepend">
				      	<div class="input-group-text">m</i></div>
				      </div>				      
				    </div>
				</div>
				<div class="form-group row">
					<label class="control-form-label col-sm-2" for="fasilitaskost">Fasilitas:</label>
					<div class="col-sm-9">
						<div class="input-group">
							<div class="col-sm-3"><label><input type="checkbox" id="kamarmandi" onclick="showKeteranganFasilitas()"> Kamar mandi</label></div>
					        <div class="col-sm-4"><input type="text" class="form-control" id="keterangankm" placeholder="Keterangan (luar/dalam)" style="display:none"></div>
				    	</div>
				        <div class="col-sm-3"><label><input type="checkbox" id="wifi"> Wi-Fi</label></div>
				        <div class="col-sm-3"><label><input type="checkbox" id="ac"> AC</label></div>
				        <div class="col-sm-3"><label><input type="checkbox" id="dapurumum"> Dapur umum</label></div>
				        <div class="input-group">
					        <div class="col-sm-3"><label><input type="checkbox" id="laundry" onclick="showKeteranganFasilitas()"> Laundry</label></div>
					        <div class="col-sm-4"><input type="text" class="form-control" id="keteranganlaundry" placeholder="Keterangan" style="display:none"></div>
				    	</div>
				    	<div class="input-group">
					        <div class="col-sm-3"><label><input type="checkbox" id="listrik" onclick="showKeteranganFasilitas()"> Listrik</label></div>
					        <div class="col-sm-4"><input type="text" class="form-control" id="keteranganlistrik" placeholder="Keterangan" style="display:none"></div>
				    	</div>
				        <div class="col-sm-3"><label><input type="checkbox" id="kasur"> Kasur</label></div>
				        <div class="col-sm-3"><label><input type="checkbox" id="meja"> Meja</label></div>
				        <div class="col-sm-3"><label><input type="checkbox" id="kursi"> Kursi</label></div>
				        <div class="col-sm-3"><label><input type="checkbox" id="lemari"> Lemari</label></div>
				        <div class="col-sm-3"><label><input type="checkbox" id="rak"> Rak</label></div>
			    	</div>
				</div>
				<div class="form-group row"> 
				    <label class="col-form-label col-sm-2" for="hargaharian">Deskripsi tambahan:</label>
			    	<div class="col-sm-9">
			    	  <div class="input-group">
				    	  <textarea rows="5" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi lain yang ingin ditambahkan"></textarea>
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
    <script>
		function showKeteranganFasilitas() {
	    	var kamarmandi = document.getElementById("kamarmandi");
	    	var keterangankm = document.getElementById("keterangankm");
	    	if (kamarmandi.checked == true){
		        keterangankm.style.display = "block";
		    } else {
		       keterangankm.style.display = "none";
		    }
	    	var laundry = document.getElementById("laundry");
	    	var keteranganlaundry = document.getElementById("keteranganlaundry");
	    	if (laundry.checked == true){
		        keteranganlaundry.style.display = "block";
		    } else {
		       keteranganlaundry.style.display = "none";
		    }
	    	var listrik = document.getElementById("listrik");
	    	var keteranganlistrik = document.getElementById("keteranganlistrik");
	    	if (listrik.checked == true){
		        keteranganlistrik.style.display = "block";
		    } else {
		       keteranganlistrik.style.display = "none";
		    }
		}
	</script>
  </body>
</html>
