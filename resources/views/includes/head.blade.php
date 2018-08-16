<!DOCTYPE HTML>
<html>
  <title>BibiKost - Kriteriamu Prioritas Kami</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- Bootstrap --}}
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      {{-- Font Awesome 5.2.0 --}}
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
    .navbar-dark {
      color: white;
    }
    body, html {
      height: 100%;
      font-family: "Lato", sans-serif;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url("{{ asset('room4.png') }}");
      background-position: center;
      background-attachment: fixed;
      display: grid;
      align-items: center;

    }
    .button {
      background-color: #131F28;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      left: 0px;
    }
    .buttonlogreg {
      padding: 15px 32px;
      width: auto;
      height: 100%;
      border: none;
      color: white;
      text-align: center;
      cursor: pointer;
      background-color: black;
      border-radius: 5px;
    }
    .buttonlogreg:hover {
      background-color: #252626;
    }
    .buttonlogprem {
      padding: 15px 32px;
      width: auto;
      height: 100%;
      border: none;
      border-radius: 5px;
      color: black;
      text-align: center;
      cursor: pointer;
      background-color: gold;
    }
    .buttonlogprem:hover{
      background-color: #edbc0e;
    }
    .signin {
      position: relative;
      text-align: center;
      top: 50px;
    }
    .col-sm-7 {
      float: none;
      display: block;
      background-color: rgba(0,0,0,0.5);
      border-radius: 10px;
      text-align: center;
      position: absolute;
      transform: translate(50%, 100%);
      margin: auto;
    }
    .card2 {
      float: none;
      display: block;
      background-color: rgba(0,0,0,0.5);
      border-radius: 10px;
      position: fixed;
      top: 80px;
      color: white;
      padding-bottom: 20px;
    }
    .card-body {
      padding: 10px;
      text-align: center;
    }
    .col-sm-8 {

    }
    .containercard {
      width: 300px;
      height: auto;
      margin-left: 10px;
      margin-right: 10px;
      margin-top: 5px;
      margin-bottom: 5px;

    }
    .card {
      border-radius: 20px;
    }
    .card-img-top {
      border-radius: 20px;
    }
    .logo {
      position: relative;
      text-align: center;
      top: 50px;
    }
    .navbar-brand {
      width:130px;
      height: 18px;
      text-align: center;
    }
    .img-responsive {
      height: auto;
      width: 100%;
      display: block;
      padding: none;
    }
    </style>
  </head>
</html>
