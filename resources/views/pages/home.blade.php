@extends('layouts.default')
@section('content')
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
      <div class="col">

      </div>
      <div class="col">
        <div class="logo">
          <img src="bikost.png" alt="Bibi Kost" width="100%" height="100%"></img>
        </div>
      </div>
      <div class="col">

      </div>
  </div>
  <div class="row h-100 justify-content-center align-items-center">
      <div class="signin">
        <a href="{{( route('register.pemilik'))}}"><button class="button">Daftar Sekarang!</button>
      </div>
  </div>
</div>
@stop
