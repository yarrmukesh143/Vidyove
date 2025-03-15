<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Email recipient (change this)
    $to = "yarrmukesh143433@gmail.com";  // 🔹 Replace with your email

    // Email details
    $subject = "New Contact Form Submission";
    $body = "You have received a new message:\n\nName: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Try again later.'); window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='index.html';</script>";
}
?>
