<?php
ob_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title>COOL WATCHES</title>
    <link rel="stylesheet" href="./StyleSheet/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #8B4513  ;
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
            <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="about.php"><i class="fa fa-fw fa-rss"></i>About</a>
            
               <a href="menu.php"><i class="fa fa-clock-o"></i>Watches</a>
               <a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a>
             </div>


        </header>
        <section id="showcase">
          <div class="container">
            <div class="imgs">
              <img border="0" alt="cafe" img src="./images/icon/login5.jpg" width="200" height="200"></a>
            </div>
            <div class="imgs2">
              <img border="0" alt="cafe" img src="./images/icon/login4.jpg" width="270" height="200"></a>
            </div>
          </div>
        </section>
        <div id="cont">
          <div class="loginbox">
            <img width="100px" height="100px" src="images/icon/dog.png" class="avatar">
            <h3>Login Here</h3>
            <form class="orderform" action="#" method="POST">
              <table class="formtable">
                <p>User Name</p>
                <input type="text" name="uname" placeholder="Enter Username"   required>
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password" required>
                <input type="submit" name="btnLogin" value="Login">
                <a href="signup.php">Don't have an account?</a>
              </table>
            </form>
          </div>
        </div>
        <footer>
          <p>Cool Watches.lk | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2021</p>
        </footer>
      </body>
</html>


<?php // require_once('connection/conn.php');  ?>

<?php 






 

if(isset($_POST["btnLogin"]))
{
  
    $connection =mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");

    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    

    $cookie_name = "username";

    //  $sql="select * from log where name='".$uname."' AND password= '".$pass."' limit 1";
  //    $result=mysqli_query($connection,$sql);
  //    if (mysqli_num_rows($result)>0)
  //    {
  //       //echo "login sucses";
  //      header('Location: deliver.php');
  //      echo "<script type='text/javascript'>alert('login sucess');</script>";

        
  //    }
  //    else
  //    {
  //      echo "<script type='text/javascript'>alert('login Fail check email and password ');</script>";
  //    }
   
    
    //echo $uemail;
    //echo $pass;
$sql = "SELECT * FROM log where name='$uname' AND password='$pass'";
    $result = mysqli_query($connection, $sql);

  if($row = mysqli_fetch_array($result))
  {
    $cookie_value = $uname;
    setcookie($cookie_name,$cookie_value,time() + (180), "/");
     
    
    header("Location:deliver.php");
ob_end_flush();
  }
  else
  {
     echo "<script type='text/javascript'>alert('Login Failed. Check username and password ');</script>";
  }
   mysqli_close($connection);



  
  }
 ?>
