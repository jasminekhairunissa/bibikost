<!doctype html>
<html>
<head>
    @include('includes.head')
    <style>
      container .main {
        padding-top: 10px;
      }
    </style>
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

</div>
</body>
</html>
