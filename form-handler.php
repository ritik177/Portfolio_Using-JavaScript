<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='officialritik177@gmail.com';
$email_subject='New form Submission';
$email_body="User Name: $name.\n".
             "User Email: $email.\n".
             "Subject: $subject.\n".
             "Message: $Message.\n".

$to='ritikpatel82993@gmail.com';
$headers="From: $email_from \r\n";
$headers.="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>




<!-- 

// Retrieve form data using the $_POST superglobal
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Define sender information
$email_from = 'officialritik177@gmail.com';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n" .
              "User Email: $email.\n" .
              "Subject: $subject.\n" .
              "Message: $message.\n";  // Concatenate form data into the email body

// Define recipient email address
$to = 'ritikpatel82993@gmail.com';

// Create email headers
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

// Send the email using the mail() function

// mail($to, $email_subject, $email_body, $headers);

// Attempt to send the email
if (mail($to, $email_subject, $email_body, $headers)) {
    // Email sent successfully
    echo "Email sent successfully!";
} else {
    // Email sending failed
    echo "Email sending failed!";
}


// Redirect user to a different page after the form submission
header("Location: index.html");
?> -->






<!-- 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "ritikpatel82993@gmail.com"; // Replace with your email address
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    $email_body = "You have received a new message from $name:\n\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message: \n$message\n";

    // Use mail() function to send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
// Redirect user to a different page after the form submission
header("Location: index.html");
?> -->
