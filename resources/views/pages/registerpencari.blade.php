@extends('layouts.default')
@section('content')
<div class="card2">
<div class="container">
  <h2>Daftar sebagai Pencari</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="Nama Lengkap">Nama Lengkap:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Nama Anda.." name="nama">
    </div>
    <div class="form-group">
      <label for="ttl">Tempat/Tanggal Lahir:</label>
      <input type="ttl" class="form-control" id="ttl" placeholder="Tempat & tanggal lahir Anda.." name="ttl">
    </div>
    <div class="form-group">
      <label for="universitas">Universitas:</label>
      <select class="form-control" type="univ" class="form-control" id="univ" placeholder="Universitas yang Anda kunjungi.." name="univ">
        <option>Institut Pertanian Bogor</option>
        <option>Universitas Pakuan</option>
        <option>Institut Teknologi Bandung</option>
      </select>
    </div>
    <div class="form-group">
      <label for="jurusan">Jurusan:</label>
      <select class="form-control" type="jurusan" class="form-control" id="jurusan" placeholder="Jurusan Anda.." name="jurusan">
        <option>A</option>
        <option>B</option>
        <option>C</option>
      </select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="photo">
      <label>Upload Foto Anda:</label>
          <div class="btn btn-default btn-sm">
              <input type="file">
          </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
@stop
