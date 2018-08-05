<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
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

li span {
  padding-left: 0px;
}
.active {
    background-color: #131F28;
}
.micon {
  width: 30px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
  left: 5px;
}
</style>
</head>
<body>
  <ul>
    <li>
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">
        <div class="micon"></div>
        <div class="micon"></div>
        <div class="micon"></div>
      </span>
    </li>
    <li><a class="active" href=home.php>Home</a></li>
    <li style="float:right"><a href=aboutus.php>Tentang Kami</a></li>
  </ul>
  <div class="box">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
