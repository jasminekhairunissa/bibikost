<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href= "{{ url('/')}}">
    <img class="img-responsive "alt="BibiKost" src="{{ asset('bikos3.png') }}">
  </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/carikosan')}}">Cari Kosan!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/kerjasama')}}">Kerjasama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/aboutus')}}">Tentang Kami</a>
      </li>
    </ul>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
      </li>
    </ul>
    </div>
</nav>
