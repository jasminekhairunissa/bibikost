@extends('layouts.default')
@section('content')
<div class="card-deck">
  <div class="containercard">
    <div class="card" style="width:300px">
      <img class="card-img-top" src="kos.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">Kosan 1</h4>
        <p class="card-text">lalalalalallalalalalalalaalalalalla</p>
          <button data-toggle="collapse" data-target='#demo' class="btn btn-primary">Detail</button>
          <div id="demo" class="collapse">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Harga: Rp. ----</li>
              <li class="list-group-item">Ukuran Kamar: -- X -- m</li>
              <li class="list-group-item">Daya Tampung: --- orang</li>
              <li class="list-group-item">Fasilitas: ---,---,---</li>
              <li class="list-group item">Deskripsi Tambahan:<p>-------</p></li>
            </ul>
          </div>
          <a href="#" class="btn btn-info">Contact</a>
      </div>
    </div>
    <br>
  </div>
  <div class="containercard">
    <div class="card" style="width:300px">
      <img class="card-img-top" src="kos.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">Kosan 2</h4>
        <p class="card-text">lalalalalallalalalalalalaalalalalla</p>
          <button data-toggle="collapse" data-target='#demo2' class="btn btn-primary">Detail</button>
          <div id="demo2" class="collapse">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Harga: Rp. ----</li>
              <li class="list-group-item">Ukuran Kamar: -- X -- m</li>
              <li class="list-group-item">Daya Tampung: --- orang</li>
              <li class="list-group-item">Fasilitas: ---,---,---</li>
              <li class="list-group item">Deskripsi Tambahan:<p>-------</p></li>
            </ul>
          </div>
          <a href="#" class="btn btn-info">Contact</a>
      </div>
    </div>
    <br>
  </div>

</div>
@stop
