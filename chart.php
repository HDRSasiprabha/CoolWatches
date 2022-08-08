
<?php

$connect=mysqli_connect("localhost","root","","candea");


$query="select year,purchase,sale,profit from acount";

$result=mysqli_query($connect,$query);

$chart_data='';

while ($row=mysqli_fetch_array($result)) 
{
 $chart_data .="{year:'".$row["year"]."',profit:".$row["profit"].",purchase:".$row["purchase"].", sale:".$row["sale"]."},";

}

$chart_data=substr($chart_data,0,-1);

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="./images/icon/cafe.jpg">
    <title>Cool Watches.lk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 
    <link rel="stylesheet" href="./StyleSheet/about.css">
  
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
            <a href="index.php"><i class="fa fa-fw fa-user"></i>Log Out</a>
          </div>
        </header>
        
          <div class="container" style="width: 1300px; height: 800px;">

          <font size=5pt color="yellow"><h1><center>Annual Sales,Purchases and Profit</center></h1></font>
       
        <div id="chart"></div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    




     <footer>
          <p>Cool Watches.lk | No : 219/ B1/ A-36 , Main Street , Kollupitiya @ Copyright &copy; 2021</p>
        </footer>
      </body>
</html>


<script>
 Morris.Bar({

    element:'chart',
    data:[<?php echo $chart_data; ?>],
    xkey:'year',
    ykeys:['profit','purchase','sale'],
    labels:['profit','purchase','sale'],
    hideHover:'auto'
  });
</script>
