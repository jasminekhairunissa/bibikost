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
    color: #f1f1f1;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #ed6f09;
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
    text-decoration: none;
    font-size: 15px;
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
.tentangkami :hover {
    background-color: #d8a617;
}

li span {
  padding-left: 0px;
}
.active {
    background-color: #fcaa11;
}
.micon {
  width: 30px;
  height: 5px;
  background-color: white;
  margin: 6px 0;

}
.logout {
  background-color: #131F28;
}
.logout:hover {
  background-color: #ff8800;
}
/* Dropdown Button */
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
.searchbox {
  
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
    <li class="logout" style="float:right">
      <a class="dropdown-item" href="{{ route('logout') }}"
                                     
        onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <span class="glyphicon glyphicon-log-out"></span>  
           Logout
          
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form></li>
    <li class="tentangkami" style="float:right"><a href="{{ url('/aboutus')}}">Tentang Kami</a></li>
  </ul>
  <div class="box">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="{{ url('/carikosan')}}">Cari Kosan!</a>
  <a href="#">Data Anda</a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#">Upgrade Akun</a>
</div>

<div class="searchbox">
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Pilih lokasi..</button>
    <div id="myInputLocation" class="dropdown-content">
      <a href="#">Bara</a>
      <a href="#">Bateng</a>
      <a href="#">Balio</a>
      <a href="#">Perwira</a>
    </div>
  </div>

  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Pilih harga..</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="#">1-3</a>
      <a href="#">3-5</a>
      <a href="#">5-7</a>
      <a href="#">>7</a>
    </div>
  </div>
</div>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>


</body>
</html>
