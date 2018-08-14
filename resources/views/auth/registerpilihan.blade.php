@extends('layouts.default')
@section('content')
<div class="container">
<div class="col-sm-5">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-1">
        <img src="searcher.png" class="img-rounded" alt="Daftar sebagai Pencari">
      </div>
      <div class="col-sm-8">
        <a href="{{ route('register')}}">
          <button type=button class="buttonlogreg">Daftar sebagai Pencari</button>
        </a>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-1">
      <img src="employees.png" class="img-rounded" alt="Daftar sebagai Pemilik">
    </div>
    <div class="col-sm-8">
      <a href="{{ route('register.pemilik')}}">
        <button type=button class="buttonlogprem">Daftar sebagai Pemilik</button>
      </a>
    </div>
  </div>
  </div>
</div>
</div>
@stop
