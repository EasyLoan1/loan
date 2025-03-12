<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'loaneasy377@gmail.com';
$subject = 'New Loan Inquiry from Website';

$body = "
Name: $name\n
Email: $email\n
Phone: $phone\n
Message: $message\n
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to, $subject, $body, $headers);

echo "Thank you for your inquiry! We'll get back to you soon.";
?>
