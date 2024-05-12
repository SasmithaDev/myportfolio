<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "thimash.sasmitha.2@gmail.com"; // Change this to your actual email address

    // Set email subject
    $subject = "New Message from Contact Form";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $email_message)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request!";
}
?>
