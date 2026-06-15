<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name           = trim($_POST['full_name'] ?? '');
    $phone               = trim($_POST['phone'] ?? '');
    $email               = trim($_POST['email'] ?? '');
    $company             = trim($_POST['company'] ?? '');
    $project_location    = trim($_POST['project_location'] ?? '');
    $product_required    = trim($_POST['product_required'] ?? '');
    $quantity            = trim($_POST['quantity'] ?? '');
    $quantity_unit       = trim($_POST['quantity_unit'] ?? '');
    $requirement_details = trim($_POST['requirement_details'] ?? '');

    if ($full_name == '' || $phone == '' || $email == '' || $project_location == '' || $product_required == '' || $quantity == '') {
        echo "<script>alert('Please fill all required fields.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
        exit;
    }

    $full_name_safe           = htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8');
    $phone_safe               = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $email_safe               = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $company_safe             = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
    $project_location_safe    = htmlspecialchars($project_location, ENT_QUOTES, 'UTF-8');
    $product_required_safe    = htmlspecialchars($product_required, ENT_QUOTES, 'UTF-8');
    $quantity_safe            = htmlspecialchars($quantity, ENT_QUOTES, 'UTF-8');
    $quantity_unit_safe       = htmlspecialchars($quantity_unit, ENT_QUOTES, 'UTF-8');
    $requirement_details_safe = nl2br(htmlspecialchars($requirement_details, ENT_QUOTES, 'UTF-8'));

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'YOUR_NEW_GMAIL_APP_PASSWORD';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('manimalladi05@gmail.com', 'Rajahmundry Steels Quote Form');
        $mail->addAddress('manimalladi05@gmail.com');
        $mail->addReplyTo($email_safe, $full_name_safe);

        $mail->isHTML(true);
        $mail->Subject = 'New Steel Quote Request';

        $mail->Body = "
        <h2>New Steel Quote Request</h2>

        <table border='1' cellpadding='10' cellspacing='0' width='100%' style='border-collapse:collapse;font-family:Arial,sans-serif;'>
            <tr>
                <th align='left'>Full Name</th>
                <td>{$full_name_safe}</td>
            </tr>
            <tr>
                <th align='left'>Phone Number</th>
                <td>{$phone_safe}</td>
            </tr>
            <tr>
                <th align='left'>Email Address</th>
                <td>{$email_safe}</td>
            </tr>
            <tr>
                <th align='left'>Company / Organization</th>
                <td>{$company_safe}</td>
            </tr>
            <tr>
                <th align='left'>Project Location</th>
                <td>{$project_location_safe}</td>
            </tr>
            <tr>
                <th align='left'>Product Required</th>
                <td>{$product_required_safe}</td>
            </tr>
            <tr>
                <th align='left'>Quantity</th>
                <td>{$quantity_safe} {$quantity_unit_safe}</td>
            </tr>
            <tr>
                <th align='left'>Requirement Details</th>
                <td>{$requirement_details_safe}</td>
            </tr>
        </table>
        ";

        $mail->AltBody = "
New Steel Quote Request

Full Name: $full_name
Phone: $phone
Email: $email
Company: $company
Project Location: $project_location
Product Required: $product_required
Quantity: $quantity $quantity_unit
Requirement Details: $requirement_details
        ";

        $mail->send();

        echo "
        <script>
            alert('Thank you! Your request has been submitted successfully.');
            window.location.href='index.php';
        </script>
        ";
        exit;

    } catch (Exception $e) {
        echo "Mail Error: " . $mail->ErrorInfo;
    }
}
?>