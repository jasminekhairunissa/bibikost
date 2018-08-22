@extends('layouts.default')
@section('content')
  <div class="bg"></div>
  <div class="logo">
    <img src="bikost.png" alt="Bibi Kost" width="400" height="400"></img>
  </div>
  <div class="signin">
    <a href="{{( route('logout.pemilik'))}}"><button class="button">Logout</button>
  </div>
  <div class="signin">
    <a href="{{( route('prop.show', [$prop, $nama]) )}}"><button class="button">Dashboard Properti</button>
  </div>
@stop
