@extends('layouts.default')
@section('content')
<div class="container">
  <div class="row justify-content-center"> 
<div class="card bg-dark col-md-4 align-self-center ">
  <div class="card-body">
    <div class="row ">
      <div class="col-md-12 ">
        <img src="searcher.png" class="img-rounded" alt="Daftar sebagai Pencari">
      </div>
      <div class="col-md-12">
        <a href="{{ route('register')}}">
          <button type=button class="buttonlogreg">Daftar sebagai Pencari</button>
        </a>
      </div>
    </div>
    <div class="row mt-2">
    <div class="col-md-12">
      <img src="employees.png" class="img-rounded" alt="Daftar sebagai Pemilik">
    </div>
    <div class="col-md-12">
      <a href="{{ route('register.pemilik')}}">
        <button type=button class="buttonlogprem">Daftar sebagai Pemilik</button>
      </a>
    </div>
  </div>
  </div>
</div>
</div>
@stop
