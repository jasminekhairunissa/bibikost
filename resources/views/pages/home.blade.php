@extends('layouts.default')
@section('content')
  <div class="bg"></div>
  <div class="logo">
    <img src="bikost.png" alt="Bibi Kost" width="400" height="400"></img>
  </div>
  <div class="signin">
    <a href="{{( route('register.pemilik'))}}"><button class="button">Daftar Sekarang!</button>
  </div>
@stop
