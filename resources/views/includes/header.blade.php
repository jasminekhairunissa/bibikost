<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/')}}">
        <img class="img-responsive "alt="BibiKost" src="bikos3.png">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/carikosan')}}">Cari Kosan!</a></li>
      <li><a href="{{ url('/kerjasama')}}">Kerjasama</a></li>
      <li><a href="{{ url('/aboutus')}}">Tentang Kami</a></li>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
