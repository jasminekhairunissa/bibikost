<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<div class="row">
  <a class="navbar-brand" href= "{{ url('/')}}">
    <img class="img-fluid my-auto"alt="BibiKost" src="{{ asset('bikos3.png') }}" style="width:100%;height:auto">
  </a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/bergabung')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
