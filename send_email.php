<?php

error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json');

    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    $to = 'royschor@gmail.com';

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($to, $subject, $email_content, $email_headers)) {
        echo json_encode(['message' => 'Thank you for your message. It has been sent.']);
    } else {
        echo json_encode(['message' => 'Oops! Something went wrong and we couldn\'t send your message.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Request must be POST.']);   
}
?>