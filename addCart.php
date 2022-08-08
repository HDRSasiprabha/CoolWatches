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