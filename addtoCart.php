<?php
    session_start();
    // $database_name = "cart";
  // if(!isset($_SESSION["s_name"]))
  // {
  //     header("Location:adminlogin.php");
      $name=$_SESSION["s_name"];
      $itemNo=$_GET["item"];
      $price1=$_GET["price"];
   

    $connection =mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");


    $sql_close = "insert into cart values('$name','$itemNo','$price1')";
      
    if(mysqli_query($connection,$sql_close))
    {
      // echo "Recordes inserted ..!!";

       header("Location:menu.php");

    }
    else
    { 
     echo"Error".mysqli_error($connection);
    }



    // if (isset($_POST["add"])){
    //     if (isset($_SESSION["cart"])){
    //         $item_array_id = array_column($_SESSION["cart"],"product_id");
    //         if (!in_array($_GET["id"],$item_array_id)){
    //             $count = count($_SESSION["cart"]);
    //             $item_array = array(
    //                 'product_id' => $_GET["id"],
    //                 'item_name' => $_POST["hidden_name"],
    //                 'product_price' => $_POST["hidden_price"],
    //                 'item_quantity' => $_POST["quantity"],
    //             );
    //             $_SESSION["cart"][$count] = $item_array;
    //             echo '<script>window.location="Cart.php"</script>';
    //         }else{
    //             echo '<script>alert("Product is already Added to Cart")</script>';
    //             echo '<script>window.location="Cart.php"</script>';
    //         }
    //     }else{
    //         $item_array = array(
    //             'product_id' => $_GET["id"],
    //             'item_name' => $_POST["hidden_name"],
    //             'product_price' => $_POST["hidden_price"],
    //             'item_quantity' => $_POST["quantity"],
    //         );
    //         $_SESSION["cart"][0] = $item_array;
    //     }
    // }

    // if (isset($_GET["action"])){
    //     if ($_GET["action"] == "delete"){
    //         foreach ($_SESSION["cart"] as $keys => $value){
    //             if ($value["product_id"] == $_GET["id"]){
    //                 unset($_SESSION["cart"][$keys]);
    //                 echo '<script>alert("Product has been Removed...!")</script>';
    //                 echo '<script>window.location="Cart.php"</script>';
    //             }
    //         }
    //     }
    // }

    ?>
