@extends('layouts.default')
@section('content')
<div class="container-fluid" >
  <div class="row justify-content-center">
    <div class="card2">
      <div class="card-body">
        <!--@if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
        @endif-->
        <h2>Daftar sebagai Pencari</h2>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <label for="Nama Lengkap">Nama Lengkap:</label>
            <input type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" id="nama" placeholder="Nama Anda.." name="nama" value="{{ old('nama') }}" required autofocus>

            @if ($errors->has('nama'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="ttl">Tempat/Tanggal Lahir: (nanti ini dibikin pake datetime picker)</label>
            <input type="text" class="form-control" id="ttl" placeholder="Tempat & tanggal lahir Anda.." name="ttl" value="{{ old('ttl') }}" required>

            @if ($errors->has('ttl'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('ttl') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="universitas">Universitas:</label>
            <select class="form-control" class="form-control" id="univ" placeholder="Universitas yang Anda kunjungi.." name="univ" value="{{ old('univ') }}" required>
              <option value="Institut Pertanian Bogor">Institut Pertanian Bogor</option>
              <option value="Universitas Pakuan">Universitas Pakuan</option>
              <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <select class="form-control" class="form-control" id="jurusan" placeholder="Jurusan Anda.." name="jurusan"  value="{{ old('jurusan') }}" required>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
          </div>
          <div class="form-group">
            <label for="angkatan">Angkatan (tahun masuk): (nanti ini dibikin pake datetime picker)</label>
            <input type="text" class="form-control" class="form-control" id="angkatan" placeholder="Tahun masuk" name="angkatan"  value="{{ old('angkatan') }}" required>

            @if ($errors->has('angkatan'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('angkatan') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <label for="no_telp">Nomor Telepon:</label>
            <input type="text" class="form-control" id="no_telp" placeholder="Masukkan nomor telepon" name="no_telp" value="{{ old('no_telp') }}" required>

            @if ($errors->has('no_telp'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('no_telp') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
              <label for="password-confirm">Confirm Password:</label>
              <input id="password-confirm" type="password" class="form-control" placeholder="Enter password again" name="password_confirmation" required>
          </div>

          <div class="photo">
            <label>Upload Foto Anda:</label>
                <div class="btn btn-default btn-sm">
                    <input name="foto" type="file">
                </div>
          </div>
          <button type="submit" class="btn btn-block btn-default">Submit</button>
        </form>
     </div>
    </div>
  </div>
</div>
@stop
