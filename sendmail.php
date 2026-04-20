<?php


        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "phoenixcyber18@gmail.com";
        $mail->Password   = "veglksbsxbzljykr";
        $mail->IsHTML(true);
        $mail->AddAddress("shopez.shopez@gmail.com", "recipient-name");
        $mail->SetFrom($_POST['Email'], $_POST['Name']);
        $mail->AddReplyTo($_POST['Email'], $_POST['Name']);
        $mail->AddCC("shopez.shopez@gmail.com", "cc-recipient-name");
        $mail->Subject = "From PORTFOLIO ".$_POST['Subject'];
        $content = "<b>Name : ".$_POST['Name']."</b> <b>Email is : ".$_POST['Email']."</b> <p>".$_POST['Message']."</p>";
        $mail->MsgHTML($content); 
        if(!$mail->Send()) {
          echo "<script>alert('Message Is Not Send.')location.href='http://localhost/shopez/contact.php';</script>";
        } else {
          echo "<script>alert('Message Is Send Successfully.')
            location.href='http://localhost/shopez/contact.php';</script>
          ";

        }
      
?>