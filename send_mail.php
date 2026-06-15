<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name        = trim($_POST['name'] ?? '');
    $email       = trim($_POST['email'] ?? '');
    $phone       = trim($_POST['phone'] ?? '');
    $requirement = trim($_POST['requirement'] ?? '');
    $message     = trim($_POST['message'] ?? '');

    if ($name == '' || $email == '' || $phone == '' || $requirement == '' || $message == '') {
        echo "<script>alert('Please fill all fields'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter valid email'); window.history.back();</script>";
        exit;
    }

    $safe_name        = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safe_email       = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safe_phone       = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safe_requirement = htmlspecialchars($requirement, ENT_QUOTES, 'UTF-8');
    $safe_message     = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'YOUR_NEW_GMAIL_APP_PASSWORD';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->CharSet = 'UTF-8';

        $mail->setFrom('manimalladi05@gmail.com', 'Rajahmundry Steels Website');
        $mail->addAddress('manimalladi05@gmail.com', 'Rajahmundry Steels');
        $mail->addReplyTo($safe_email, $safe_name);

        $mail->isHTML(true);
        $mail->Subject = 'New Steel Product Enquiry - Website';

        $mail->Body = "
            <h2>New Steel Product Enquiry</h2>
            <table border='1' cellpadding='10' cellspacing='0' style='border-collapse:collapse;width:100%;font-family:Arial,sans-serif;'>
                <tr>
                    <th align='left'>Name</th>
                    <td>{$safe_name}</td>
                </tr>
                <tr>
                    <th align='left'>Email</th>
                    <td>{$safe_email}</td>
                </tr>
                <tr>
                    <th align='left'>Phone</th>
                    <td>{$safe_phone}</td>
                </tr>
                <tr>
                    <th align='left'>Requirement</th>
                    <td>{$safe_requirement}</td>
                </tr>
                <tr>
                    <th align='left'>Message</th>
                    <td>{$safe_message}</td>
                </tr>
            </table>
        ";

        $mail->AltBody = "
New Steel Product Enquiry

Name: $name
Email: $email
Phone: $phone
Requirement: $requirement
Message: $message
        ";

        if ($mail->send()) {
            echo "<script>
                alert('Thank you! Your enquiry has been submitted successfully.');
                window.location.href='index.php';
            </script>";
            exit;
        }

    } catch (Exception $e) {
        echo "Mail Error: " . $mail->ErrorInfo;
    }
}
?>