@extends('layouts.default')
@section('content')
    <div class="container-fluid">
		<h1>Daftar Properti</h1>
    <div class="row">
        <div class="col-md-8 offset-md-1 pt-2">
			<form action="{{route('prop.store')}}" method="POST">
			  @csrf
			  <div class="form-group row">
			    <label class="col-form-label col-sm-2" for="tipe_prop">Tipe properti:</label>
			    <div class="col-sm-10">
			      <select name="tipe_prop" class="form-control" id="tipe_prop">
			      	<option value="0">Kost</option>
			      	<option value="1">Kontrakan</option>
			      	<!--<option>Toko</option>-->
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label class="col-form-label col-sm-2" for="namaprop">Nama properti:</label>
			    <div class="col-sm-10">
			      <input name="namaprop" type="text" class="form-control" id="namaprop" placeholder="Masukkan nama properti" aria-describedby="namaprophelp">
			      <small id="namaprophelp" class="form-text text-muted"><i>Nama ini yang akan ditampilkan pada pencarian</i></small>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label class="col-form-label col-sm-2" for="alamatprop">Alamat properti:</label>
			    <div class="col-sm-10"> 
			      <input name="alamatprop" type="text" class="form-control" id="alamatprop" placeholder="Masukkan alamat properti" aria-describedby="namaprophelp">
			      <small id="namaprophelp" class="form-text text-muted"><i>Masukkan alamat lengkap dari RT/RW, kelurahan, kecamatan, hingga kota</i></small>
			    </div>
			  </div>
			  <div class="form-group row"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input name="agreement" type="checkbox" id="agreement" onchange="userAgreement()"> Saya telah setuju dengan Syarat dan Ketentuan Penggunaan</label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group row"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button name="submitprop" id="submitprop" type="submit" class="btn btn-default" disabled>Submit</button>
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
		function userAgreement() {
	    	var setuju = document.getElementById("agreement");
	    	var submitbtn = document.getElementById("submitprop");
	    	submitbtn.disabled = !setuju.checked;
		}
	</script>
	<script>document.title="Daftar Properti - Bibikost"</script>
@stop
