<!DOCTYPE HTML>
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
    }
    .signin {
      position: relative;
      top: 450px;
      text-align: center;
    }
    .box  {
      border-radius: 10px;
      width: 500px;
      height: 430px;
      text-align: left;
      position: relative;
      top: 50px;
      left: 430px;
      background-color: rgba(255, 255, 255, 0.7);
      font-family: Arial;
    }
    p {
      padding: 10px;
    }
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .masuk {
      width: 100%;
      background-color: #131F28;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }
    </style>
  </head>
  <body>
      <ul>
        <li><a href=home.php>Home</a></li>
        <li><a href=carikosan.php>Cari Kosan!</a></li>
        <li><a href=kerjasama.php>Kerjasama</a></li>
        <li style="float:right"><a href=aboutus.php>Tentang Kami</a></li>
        <li style="float:right"><a class="active" href=login.php>Log In</a></li>
      </ul>
      <div class="box">
        <form>
          <p>Username: <br>
          <input type="text" name="Username"></p>
          <p>Password: <br>
          <input type="text" name="Password"></p>
          <p>Nomor Telepon: <br>
          <input type="text" name="Nomor Telepon"></p>
          <p><a href=homeuser.php><button class="masuk" value="homeuser.php" >Log In</button></a></p>
        </form>
      </div>
  </body>
</html>
