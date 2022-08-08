<?php 
ob_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Cool Watches.lk</title>
    <link rel="icon" href="./images/icon/cafe.jpg">
   
    <link rel="stylesheet" href="./StyleSheet/signup.css">
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
<script language="javascript" type="text/javascript">
    function validations()
    {
      if (document.formadduser.uname.value.length=="")
        {
          alert ("Username cannot be blank");
          return false;
        }
      else if (document.formadduser.tp.value.length=="")
        {
          alert ("Telephone cannot be blank");
          return false;
        }
        else if(isNaN(document.formadduser.tp.value)) 
        {
          alert ("Telephone should have only numbers");
          return false;
        }
        else if (document.formadduser.pass.value.length=="")
        {
          alert ("Password cannot be blank");
          return false;
        }
        else if (document.formadduser.cpass.value.length=="")
        {
          alert ("Confirm Password cannot be blank");
          return false;
        }
        // else if ((document.formadduser.pass.value.length=="") &&(document.formadduser.cpass.value.length==""))
        // {
        //   alert ("Both passwords should be same.");
        //   return;
        // }

    }
  </script>
  </head>
  <body>
    <!---header--->
    <header>
      <div class="container">
        
        <div id="candea">
          <h1>COOL WATCHES.lk</h1></a>
        </div>
        

           <div class="navbar">
            <a href="administration.php"><i class="fa fa-fw fa-user"></i>Administration</a>
            <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            
               <a href="menu.php"><i class="fa fa-clock-o"></i>Watches</a>
                <a href="adminlogin.php"><i class="fa fa-fw fa-user"></i>Login</a>

              </div>


        </header>
        <section id="showcase">
          <div class="container">
            <div class="imgs">
              <img border="0" alt="cafe" img src="user.jpg" width="240" height="240"></a>
            </div>
            <div class="imgs2">
             
            </div>
          </div>
        </section>
        <div id="cont">
          <div class="signupbox">
            <img width="100px" height="100px" action="#" src="images/icon/dog.png" class="avatar">
            <h3>Add Users</h3>
            <form name="formadduser" class="orderform" method="POST">
              <table class="formtable">
                <p>Username</p>
                <input type="text"  id="uname" name="uname" placeholder="Enter Username" maxlength="50">
                <p>Telephone</p>
                <input type="text"  id="tp" name="tp" placeholder="Enter Telephone Number" maxlength="10">
                <p>Password</p>
                <input type="password" id="pass"  name="pass" placeholder="Enter Password" maxlength="20">
                <p>Confirm Password</p>
                <input type="password" id="cpass"  name="cpass" placeholder="Enter Password" maxlength="20">
                <input type="submit" id=""  name="btnadduser" value="Add User" onclick="validations();" >
              </table>
            </form>
          </div>
        </div>
        <footer>
          <p>Cool Watches.lk | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2021</p>
        </footer>
      </body>
</html>


<?php  //require_once('connection/conn.php');  ?>
<?php 
    
    if(isset($_POST["btnadduser"]))
{
$connection =mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");


  $name=$_POST["uname"];
  $password=$_POST["cpass"];


   
    $sql="insert into admin values('$name','$password')";

  if (mysqli_query($connection,$sql))
   {
    header('Location: adduser.php');
    ob_end_flush();
    echo "account created";
     
  }
  else
  {
    echo "Error".mysqli_error($connection);
  }



  mysqli_close($connection);
 

}

   




 ?>