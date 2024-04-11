<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize them
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // Set up the email parameters
    $to = "davidkvasilev@gmail.com"; // Change this to your email address
    $subject = "New Message from $name";
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Form was not submitted
    echo "Sorry, form submission is not allowed.";
}
?>
