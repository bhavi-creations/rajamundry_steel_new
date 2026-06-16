```php
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['name'])){

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // YOUR GMAIL
        $mail->Username   = 'manimalladi05@gmail.com';

        // YOUR APP PASSWORD
        $mail->Password   = 'cvarqcchfjpawxvo';

        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('manimalladi05@gmail.com', 'Website Enquiry');
        $mail->addAddress('manimalladi05@gmail.com');

        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);

        $mail->Subject = "New Website Enquiry";

        $mail->Body = "
        <h2>New Enquiry Received</h2>

        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Service:</strong> {$service}</p>
        <p><strong>Message:</strong> {$message}</p>
        ";

        $mail->send();

        echo "<script>
        alert('Message Sent Successfully');
        window.location='index.php';
        </script>";

    } catch (Exception $e) {

        echo 'Mailer Error: ' . $mail->ErrorInfo;

    }
}
?>
```
