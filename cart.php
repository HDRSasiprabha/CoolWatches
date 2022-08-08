<?php session_start();?>
   
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title>Cool Watches.lk</title>
    <link rel="stylesheet" href="./StyleSheet/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    img
    {
      border-radius: 8px;
    }
    .btn-order
      {
        background: yellow;
        outline: none;
        border-radius: 5px;
        border: none;
        margin-top: 5px;
        width: 150px;
        height: 50px;
        font-weight: bold;
        transition: 0.5s;
        align-items: center;

      }
      .btn-order:active
      {
        background: green;
        color: white;

      }
      .tablehead
     {
          color:#9999FF;
     }
     .tablerow
     {
      color:#E5CCFF;
     }
     .btnodr
     {

     }
    </style>
  </head>
  <body>

    <!---header--->
    <header>
      <div class="container">
        <div id="candea">
          <h1>Cool Watches.lk</h1></a>
        </div>
        <div class="navbar">
          <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
           <a href="menu.php"><i class="fa fa-clock-o"></i>Watches</a>
            <a href="signup.php"><i class="fa fa-fw fa-user"></i>Signup</a>
          </div>
        </header>
        <section id="main">
          <div class="container">

          <font size=5pt><h1><center>Shopping Cart</center></h1></font>
        </section>
        <div style="clear: both"></div>

<div class="table-responsive">
  <table class="table-bordered" align="center">
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
          <td><?php echo $value["product_name"];?></td>
          <td><?php echo $value["product_quantity"];?></td>
          <td><?php echo $value["product_price"];?></td>
          <td><?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
          <td><a href="menu.php?action=delete&id=<?php echo $value["product_id"];?>"><span class="text-danger">Remove</span></a></td>
            
         </tr>
       <?php
        $total=$total+($value["product_quantity"]*$value["product_price"]);
       
      }
         ?>
         <tr align="center"><td>  - </td><td> -  </td><td>  - </td><td>  - </td><td>  - </td></tr>

          <tr class="tablerow">
           <td  align="center">Total</td>
           <td colspan="3" align="right" text-colour="white"><?php echo number_format($total,2);?></td>
           <td></td>
         </tr>
         <tr><td></td></tr>
         <tr >

          <td colspan="3" align="right">
          <form method="post" action="adminlogin.php" >    
          <input  type="submit" name="order" value="Order Now" class="btn-order" >
          </form>
          </td>
          </tr>
        <?php
      }
   
                  
?>


 </table>
</div>




     <footer>
          <p>Cool Watches.lk | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2021</p>
        </footer>
      </body>
</html>
