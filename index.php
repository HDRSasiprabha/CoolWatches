<!DOCTYPE html>
<html>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title>COOL WATCHES.LK</title>
    <link rel="stylesheet" href="./StyleSheet/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #8B4513;
  
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #D2691E;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

header {
  margin-top: 0;
    color: navy;
    
    clear: left;

    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
}






</style>






  </head>

  <body>
    <!---header--->
    <header>
     




      <div class="container">
        <div id="candea">
          <h1>COOL WATCHES.LK</h1></a>
        </div>
        


<div class="navbar">
            <a href="about.php"><i class="fa fa-fw fa-rss"></i>About</a>
            <a href="menu.php"><i class="fa fa-clock-o"></i>Watches</a>
            <a href="signup.php"><i class="fa fa-fw fa-user"></i>Signup</a>
            <a href="admin.php"><i class="fa fa-fw fa-user"></i>Admin</a>
          </div>
        </header>
       


       
 




        <center><div class="w3-content w3-display-container" style="max-width:1200px">

        <a  href="menu.php"><img class="mySlides"  src="./images/slide/C1.jpg" style="width:100%"  ></a>
         <a  href="menu.php"><img class="mySlides"  src="./images/slide/B1.jpg" style="width:100%"  ></a>
  <a  href="menu.php"><img class="mySlides"  src="./images/slide/A1.jpg" style="width:100%" ></a></div>
</center>
 
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
   
  </div>
</div>

<script>
    var myIndex = 0;
    carousel();
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
        

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <br><br><br><br><br>
          <h2 class="heading" align="center">Mens Range</h2>
          <br>
          <figure><a class="imgover" href="menu.php"><center><img style="width:500px;height:400px;" src="m1.jpg" alt=""></center></a>
            <figcaption>
              
              <center><p>Shop best quality deeply discounted watches on your favourite brands at our mens range.Stock is extremely limited.</p></center>
            </figcaption>
          </figure>
        </li>
        <li class="one_third"><br><br><br><br><br>
          <h2 class="heading" align="center">Womens Range</h2><br>
          <figure><a class="imgover" href="menu.php"><center><img style="width:500px;height:400px;" src="w1.jpg" alt=""></center></a>
            <figcaption>
              
              <center><p>Shop best quality deeply discounted watches on your favourite brands at our womens range.Stock is extremely limited.</p></center>
            </figcaption>
          </figure>
        </li>
        <li class="one_third"><br><br><br><br><br>
           <h2 class="heading" align="center" >Kids Range</h2><br>
          <figure><a class="imgover" href="menu.php"><center><img style="width:500px;height:400px;" src="k3.jpeg" alt=""></center></a>
            <figcaption>
             
              <center><p>Shop best quality deeply discounted watches on your favourite brands at our kids range.Stock is extremely limited.</p></center>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>




 
<center>
  <br><br><br><br><br><br><br>
<div style="align-items: center;justify-content: center;display: flex;color: white;">
  <div>
              <a href="https://www.facebook.com">
              <img  border="0" alt="facebook" img src="./images/logos/fb.png" width="50" height="50"></a><br>
              <h6>Facebook</h6>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div>
              <a href="https://www.gmail.com">
              <img border="0" alt="gmail" img src="./images/logos/em.png" width="50" height="50"></a><br>
              <h6>Mail Us</h6>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div>
              <a href="https://www.messenger.com">
              <img border="0" alt="messenger" img src="./images/logos/mg.jpg" width="50" height="50"></a><br>
              <h6>Messenger</h6>
</div>
</div>
</center>
        


<br><br><br><br><br><br><br>

        <footer>
          <p>Cool Watches.lk | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2021</p>
        </footer>
      </body>
</html>
