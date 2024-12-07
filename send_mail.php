<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['full-name'];
    $email = $_POST['email'];
    $phoneno = $POST['phone-no'];
    $coverLetter = $_POST['cover-letter'];

    // Prepare email content
    $subject = "Job Application - " . $fullName;
    $message = "Full Name: " . $fullName . "\n";
    $message .= "Email: " . $email . "\n";
    $messege .= "phone-no: " . $phoneno . "\n";
    $message .= "Cover Letter:\n" . $coverLetter . "\n";

        // Send email
        $to = "karasalaratnakar2004@gmail.com";  // Change to your desired email address
        if (mail($to, $subject, $body, $headers)) {
            echo "Your application has been sent successfully!";
        } else {
            echo "There was an error sending your application.";
        }
    } else {
        echo "Error uploading resume. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
