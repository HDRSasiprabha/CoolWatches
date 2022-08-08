<?php 

  session_start();
  $db_name="id16372884_candea";
   $connection =mysqli_connect()("localhost","id16372884_candea2021","Abc@12345678",$db_name);
   if(isset($_POST["add"]))
   {
    if(isset($_SESSION["shopping_cart"]))
    {
      $item_array_id=array_column($_SESSION["shopping_cart"],"product_id");

      if(!in_array($_GET["id"],$item_array_id))
      {
        $count = count($_SESSION["shopping_cart"]);
        $item_array = array(
      'product_id' => $_GET["id"],
      'product_name'=>$_POST["hidden_name"],
      'product_price'=>$_POST["hidden_price"],
      'product_quantity'=>$_POST["quantity"]
    );
       $_SESSION["shopping_cart"][$count]=$item_array; 
       echo '<script>alert("Item added to cart Successfully.") </script>';
       echo'<script>window.location="menu.php"</script>';
      
      }
      else
      {
        echo'<script>alert("Product is already in tne cart")</script>';
        echo'<script>window.location="menu.php"</script>';
      }

    }

    else
    {
      $item_array = array(
      'product_id' => $_GET["id"],
      'product_name'=>$_POST["hidden_name"],
      'product_price'=>$_POST["hidden_price"],
      'product_quantity'=>$_POST["quantity"]
    );
       $_SESSION["shopping_cart"][$count]=$item_array; 
        
    }
   }
   if (isset($_GET["action"]))
   {
    if($_GET["action"]=="delete")
    {
      foreach($_SESSION["shopping_cart"] as $keys => $value)
      {
        if($value["product_id"]==$_GET["id"])
        {
          unset($_SESSION["shopping_cart"][$keys]);
          echo'<script>alert("Product has been removed")</script>';
        echo'<script>window.location="cart.php"</script>';
        }
      }
    }
   }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title >Cool Watches.lk</title>
    <link rel="stylesheet" href="./StyleSheet/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style type="text/css">

      .btn-success:active
      {
        background: blue;
        color: white;
      }
      .btn-success
      {
        margin-top: 5px;
        background: red;
        outline: none;
        border-radius: 5px;
        border: none;
        transition: 0.5s;
        height: 30px;
        width: 100px;
        font-weight: bold;
      }
      
    </style>
  </head>
  <body>
    <!---header--->
    <header>
      <div class="container">
        <div id="candea">
          <h1>COOL WATCHES.LK </h1></a>
        </div>
        <div class="navbar">
          <a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="about.php"><i class="fa fa-fw fa-rss"></i>About</a>
            <a href="signup.php"><i class="fa fa-fw fa-user"></i>Signup</a>
            <a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a>
            
          </div>
        </header>
         <div class="container" style="width: 65%">
          <br><br>
          <?php
          $query="select * from product order by id asc";
          $result=mysqli_query($connection,$query);//execute 
          if(mysqli_num_rows($result)>0){
            

            while($row=mysqli_fetch_array($result))
            {
              ?>
              <div class="column" style="float: left;">
                <form method="post" action="menu.php?action=add&id=<?php echo $row["id"];?>">
                  <div class="product">
                      <img src="<?php echo $row["image"];?>" width="190px" height="200px" class="img-responsive">
                      <h5 class="text-info"><?php echo $row["description"];?></h5>
                      Enter Quantity : 
                    <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" min="0" value="1" >
                      <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                      <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"><br>
                      <input type="submit" name="add" class="btn-success" value="Add To Cart" >


                    
                  </div>
                  <br>
                </form>
              </div>
      <?php
            }

          }
          ?>
        </div>
      </div>

         <footer>

          <p>Cool Watches.lk | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2021</p>
        </footer>
      </body>
</html>