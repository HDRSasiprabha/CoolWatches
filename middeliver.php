<?php ob_start();  ?>
<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
    
    
   $email=$_POST['mm'];
   
   $connection =mysqli_connect("localhost","id16372884_candea2021","Abc@12345678","id16372884_candea");

$name = $_POST["ina"];
  
   $tel=$_POST["em"];
   $address=$_POST["pw"];
 
 
 //$sql = "INSERT INTO tblEmployee ".
//"(emp_id,emp_name,emp_address, emp_salary) ".
//"VALUES ( “E001” “Kamal Perera", “Galle", 20000)";

  $sql="INSERT INTO od(name,Telephone,Address)VALUES('$name','$tel','$address')";

  
 
 
//   mysqli_close($connection);
 
if(mysqli_query($connection,$sql))
{
  //echo "<script>alert('You have already created an ad.!');</script>";
    // header("Location:orders.php");
}
else
{
  echo"Error".mysqli_error($connection);
}



    
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'cafezero123@gmail.com';                     // SMTP username
        $mail->Password   = 'cafegmailpass';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('cafezero123@gmail.com', 'cafegmailpass');
        $mail->addAddress($email, 'TEst');     // Add a recipient
    
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = ' - Thank you shopping with us';
        $mail->Body    = 'Dear customer,
                              We recived your order please be patience,
                              For more details please contact following number,
                              0769956445
                              HAVE A NICE DAY';
       // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header("Location:index.php");
        // echo 'Message has been sent';

    } catch (Exception $e) {
      header("Location:index.php");
      ob_end_flush();
      
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

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
  </head>
  <body>
    <form method="POST" action="index.php">
    <scipt>
    alert("Your order has confirmed successfully..Thank you!!!");
    </scipt></form>
  </body>
  </html>