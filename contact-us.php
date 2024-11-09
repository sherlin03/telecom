
<!--  -->
<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include database configuration
// include('shared/db/dbConfig.php');

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Function to validate email
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $company = sanitizeInput($_POST['company']);
    $message = sanitizeInput($_POST['message']);
    $phoneNumber = sanitizeInput($_POST['phoneNumber']);

    // Validate email
    if (!isValidEmail($email)) {
        header('location: contact.php?error=invalidemail');
        exit();
    }

 
    // Send email
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.wenetworkllc.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hr@wenetworkllc.com';
        $mail->Password = 'Nkt@1596*';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $name);
        $mail->addAddress('hr@wenetworkllc.com', 'We Network');

        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body = "<p>Name: $name</p><p>Email: $email</p><p>Company: $company</p><p>Message: $message</p><p>Mobile Number: $phoneNumber</p>";
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';

        $mail->send();
        echo "Mail has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Redirect to success page or do further processing
    // header('location: contact.php?error=success');
    exit();
}

// If the form is not submitted, redirect to contact.php
// header('location: contact.php');
exit();
?>
