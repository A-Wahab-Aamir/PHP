 
<?php

$to_email = "awamir@students.uit.edu";

$subject = "PR2-2023-06C !";

$body = "ANSAR ALI KAHN";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {

    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
