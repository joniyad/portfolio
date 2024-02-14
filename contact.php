<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["Subject"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "yohannesabebe65@gmail.com";

    // Set the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Build the email content
    $email_content = "Name: " . $name . "<br>";
    $email_content .= "Email: " . $email . "<br>";
    $email_content .= "Phone: " . $phone . "<br>";
    $email_content .= "Message: " . nl2br($message);

    // Set the email headers
    $headers = "From: " . $name . " <" . $email . ">" . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8" . "\r\n";
    $headers .= "X-Priority: 1" . "\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_content, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>