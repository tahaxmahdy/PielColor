<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pcolor@pielcolorsae.com"; // ضع هنا البريد الإلكتروني المستلم
    $subject = "New Message from Contact Form";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
