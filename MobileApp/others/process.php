<?php
// This is a simple form processor for demonstration purposes

// Get form data
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validate the form data (server-side validation)
$errors = array();

if (empty($username)) {
    $errors[] = 'Username is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
}

if (empty($subject)) {
    $errors[] = 'Subject is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// Check if there are any errors
if (count($errors) > 0) {
    // If there are errors, redirect back to the form
    header('Location: ../contact.html');
    exit;
}

// If no errors, proceed with processing the form
// In a real application, you would save the data to a database, send an email, etc.

// For demonstration purposes, we'll just redirect to a thank you page
// In a real world scenario, you might process the data and send an email
header('Location: ../main.html');
exit;
?> 