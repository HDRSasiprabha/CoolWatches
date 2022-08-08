<?php

session_start();
$cookie_name = "username";
if(isset($_COOKIE[$cookie_name]))
{
 $cookie_value = $_COOKIE[$cookie_name];


}




?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title>Cool Watches.lk</title>
    <link rel="stylesheet" href="./StyleSheet/deliver.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  function display()
  {
   alert("Your Order added successfully! Please check your email.")
   <?php
   session_destroy();
   ?>
  }
</script>
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
            <a href="menu.php"><i class="fa fa-clock-o"></i>Watches</a>
            <a href="adminlogin.php"><i class="fa fa-fw fa-user"></i>Logout</a>
          </div>
        </header>
        <section id="showcase">
          <div class="container">
            <div class="imgs">
            <img style="padding-left: 330px" src="./images/foods/ebd7.jpg" width="550" height="800">
          </div>
        </section>



         
  

        <div id="cont">
          <div class="orderbox">
            <h3>Pre-Order form</h3>
            <br/>
            <form style="color: yellow;" class="orderform" action="middeliver.php" method="POST">
              <table style="color: yellow;" border="1" class="formtable">
                <p>Name</p>
                <input type="text" id="ina" name="ina" placeholder="Enter Name"   <?php echo "value=$cookie_value"   ?> required>
                
                <p>Telephone No</p>
                <input type="text" id="em" name="em" placeholder="Enter Telephone" required>
                <p>Address</p>
                <input type="text" id="pw" name="pw" placeholder="Enter Addess" required>
                <p>Email Address</p>
                <input type="text" id="mm" name="mm" placeholder="Enter Email Addess" required>

                <div class="table-responsive">
  <table border="1px" class="table-bordered" align="center">
    <tr class="tablehead">
      <th width="30%">Product Description</th>
      <th width="10%">Qunatity</th>
      <th width="13%">Price Details</th>
      <th width="10%">Total Price</th>
      <th width="17%">Remove Items</th>
    </tr> 

<?php
 

    if(!empty($_SESSION["shopping_cart"]))
    {
      $total=0;
      foreach ($_SESSION["shopping_cart"] as $key => $value) 
      {
        ?>
        
         <tr align="center" class="tablerow">
          <td style="color: white;"><?php echo $value["product_name"];?></td>
          <td style="color: white;"><?php echo $value["product_quantity"];?></td>
          <td style="color: white;"><?php echo $value["product_price"];?></td>
          <td style="color: white;"><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
          <td style="color: white;"><a href="menu.php?action=delete&id=<?php echo $value["product_id"];?>"><span class="text-danger">Remove</span></a></td>
            
         </tr>
       <?php
        $total=$total+($value["product_quantity"]*$value["product_price"]);
       
      }
         ?>
         <tr align="center"><td>  - </td><td> -  </td><td>  - </td><td>  - </td><td>  - </td></tr>

          <tr class="tablerow">
           <td  style="color: white;" align="center">Total</td>
           <td style="color: white;"colspan="3" align="right" text-colour="white"><?php echo number_format($total,2);?></td>
           <td></td>
         </tr>
         <tr><td></td></tr>
         <tr >

          <td colspan="3" align="right">
         
          </form>
          </td>
          </tr>
        <?php
      }
   
                  
?>


 </table>
 <br/>
 <br/>

                <input type="submit" name="order" value="Order" onclick="display();">



              </table>
            </form >
            <br/>

          </div>
        </div>
        <footer>
          <p>COOL WATCHES.LK | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2020</p>
        </footer>
      </body>
</html>
