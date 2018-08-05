<!DOCTYPE html>
<html>
  <title>Bibi Kost - Kriteriamu Prioritas Kami</title>
  <head>
    <style>
    body {
      background-image: url("room4.png");
      background-repeat: no-repeat;
      background-size: cover;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #FFC82C;
        font-family: Arial;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #d8a617;
    }

    .active {
        background-color: #131F28;
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
    }
    .signin {
      position: relative;
      top: 50px;
      text-align: center;
    }
    .logo {
      position: relative;
      text-align: center;
      top: 50px;
    }
    </style>
  </head>
  <body>
      <ul>
        <li><a href=home.php>Home</a></li>
        <li><a href=carikosan.php>Cari Kosan!</a></li>
        <li><a class="active" href=kerjasama.php>Kerjasama</a></li>
        <li style="float:right"><a href=aboutus.php>Tentang Kami</a></li>
        <li style="float:right"><a href=login.php>Log In</a></li>
      </ul>
      <div class="logo">
        <img src="bikost.png" alt="Bibi Kost" width="400" height="400"></img>
      </div>
      <div class="signin">
        <button class="button">Daftar Sekarang!</button>
      </div>
  </body>
</html>
