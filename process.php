
<?php
  //require_once 'mailer/class.phpmailer.php'; 
  require_once './mailer/class.phpmailer.php'; 
  // creates object
  $mail = new PHPMailer(true); 
  if(isset($_POST['btn_send']))
  {
   $email      = strip_tags($_POST['email']);
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello";      
   $message  = strip_tags($_POST['message']);
 try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port        = '465';             
    $mail->AddAddress($email);
    $mail->Username   ="zakia.antary@gmail.com";//"divyasundarsahu@gmail.com";  
    $mail->Password   ="062456880z";//"gmail-password";            
    $mail->SetFrom("abdessamiaa.antary@gmail.com","abdo antary");//('divyasundarsahu@gmail.com','Divyasundar Sahu');
    $mail->AddReplyTo("zakia.antary@gmail.com","zakia antary");//("divyasundarsahu@gmail.com","Divyasundar Sahu");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {
     
     $msg = "Hi, Your mail successfully sent to".$email." ";
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  } 
  
?>