@extends('layouts.default')
@section('content')
<div class="card2">
<div class="container">
  <h2>Daftar sebagai Pemilik</h2>
  <!--@if($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
  @endif-->
  <form action="{{ route('register.pemilik.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="Nama Lengkap">Nama Lengkap:</label>
      <input id="nama" type="text" placeholder="Nama Anda.." class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

      @if ($errors->has('nama'))
        @foreach ($errors->get('nama') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="ttl">Tempat/Tanggal Lahir:</label>
      <input type="text" class="form-control" id="ttl" placeholder="Tempat & tanggal lahir Anda.." name="ttl" value="{{ old('ttl') }}" required>

      @if ($errors->has('ttl'))
        @foreach ($errors->get('ttl') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="ktp">Nomor KTP:</label>
      <input type="text" class="form-control" id="ktp" placeholder="No. KTP Anda.." name="ktp" value="{{ old('ktp') }}" required>

      @if ($errors->has('ktp'))
        @foreach ($errors->get('ktp') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Alamat Anda.." name="alamat" value="{{ old('alamat') }}" required></textarea>

      @if ($errors->has('alamat'))
        @foreach ($errors->get('alamat') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}" required>

      @if ($errors->has('email'))
        @foreach ($errors->get('email') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="no_telp">Nomor telepon:</label>
      <input type="text" class="form-control" id="no_telp" placeholder="Enter email" name="no_telp" value="{{ old('no_telp') }}" required>

      @if ($errors->has('no_telp'))
        @foreach ($errors->get('no_telp') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>

      @if ($errors->has('password'))
        @foreach ($errors->get('password') as $error)
          <span class="invalid-feedback">
              <strong>{{ $error }}</strong>
          </span>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      <label for="password-confirm">Confirm Password:</label>
      
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <div class="photo">
      <label>Upload Foto Anda:</label>
          <div class="btn btn-default btn-sm">
              <input type="file">
          </div>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
@stop
