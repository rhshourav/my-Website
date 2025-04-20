<?php
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $message = isset($_POST['message']) ? sanitize_input($_POST['message']) : '';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid email format']);
        exit;
    }

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(['error' => 'All fields are required']);
        exit;
    }

    // Email configuration
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Log the submission (optional)
        $log_file = 'contact_log.txt';
        $log_entry = date('Y-m-d H:i:s') . " - New submission from $name ($email)\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND);

        // Return success response
        http_response_code(200);
        echo json_encode(['message' => 'Message sent successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to send message']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
?> 