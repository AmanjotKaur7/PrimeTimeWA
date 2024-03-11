<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $vehicle = $_POST['vehicle'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $service = $_POST['service'];
    $moreinfo = $_POST['moreinfo'];

    // Set up email forwarding
    $to = "nizarm@uw.edu"; // Change this to your email address
    $subject = "Contact Form Submission";
    $message = "Full Name: $fullname\nVehicle: $vehicle\nPhone: $phone\nEmail: $email\nLocation: $location\nService: $service\nMore Information: $moreinfo";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
