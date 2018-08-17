@extends('layouts.default')
@section('content')

<div class="container">
@if (session('status'))
<div class="alert alert-danger">
    {{ session('status') }}
</div>
@endif
    <div class="row">
      <div class="card-body">
      <div class="col-sm-5">
      <!--<div class="col-sm-1">
        <img src="searcher.png" class="img-rounded" alt="Masuk sebagai Pencari">
      </div>-->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label class="col-form-label col-sm-2" for="email">Email:</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group">
              <label class="col-form-label col-sm-2" for="password">Password:</label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

              @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                  <label class="col-form-label col-sm-3"><input type="checkbox" name="remember"> Remember me</label>    
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">
                    Masuk sebagai pencari
                </button>
                <button type="submit" class="btn btn-info" formaction="{{ route('login.pemilik') }}">
                    Masuk sebagai pemilik
                </button>
                </div>
            </div>
            </form>
        </div>
        </div>
      </div>
@stop
