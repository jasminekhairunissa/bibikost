@extends('layouts.default')
@section('content')
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <form class="col-8">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <button class="buttonlogreg" name="submitbtn" value="pencari" type="submit" class="btn btn-default">Login sebagai Pencari</button>
      <button class="buttonlogprem" name="submitbtn" value="pemilik" type="submit" class="btn btn-default">Login sebagai Pemilik</button>
    </form>
  </div>
</div>
@stop
