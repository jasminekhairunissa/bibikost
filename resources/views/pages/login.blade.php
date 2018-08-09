<<<<<<< HEAD
@extends('layouts.default')
@section('content')
<div class="container">
<div class="col-sm-5">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-1">
        <img src="searcher.png" class="img-rounded" alt="Masuk sebagai Pencari">
      </div>
      <div class="col-sm-8">
        <a href="{{ url('/loginpencari')}}">
          <button type=button class="buttonlogreg">Masuk sebagai Pencari</button>
        </a>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-1">
      <img src="employees.png" class="img-rounded" alt="Masuk sebagai Pemilik">
    </div>
    <div class="col-sm-8">
      <a href="{{ url('/loginpemilik')}}">
        <button type=button class="buttonlogprem">Masuk sebagai Pemilik</button>
      </a>
    </div>
  </div>
  </div>
</div>
</div>
=======
@extends ('layouts/default')
@section ('content')
>>>>>>> 60985ab0fc14333b82892f745e61b5bd23f8b84a
@stop
