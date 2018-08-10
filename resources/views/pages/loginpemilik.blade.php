@extends('layouts.default')
@section('content')
<div class="card2">
<div class="container">
  <h2>Masuk sebagai Pemilik</h2>
  <form action="/action_page.php">
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
    <button name="submitbtn" value="pencari" type="submit" class="btn btn-default">Login sebagai pencari</button>
    <button name="submitbtn" value="pemilik" type="submit" class="btn btn-default">Login sebagai pemilik</button>
  </form>
</div>
</div>
@stop
