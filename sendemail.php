<?php

$mg_api = '98b1b5442c6cbb58e26fb97b63d32f5d-623424ea-7bd66881';
$mg_domain = 'sandbox62d839fd3ae5472d871d931ae03093ea.mailgun.org';

$to = 'loaneasy377@gmail.com';
$subject = 'Test Email from Loan Easy';
$body = 'Hello, this is a test email from Loan Easy.';

require 'vendor/autoload.php';

use Mailgun\Mailgun;

$mg = new Mailgun($mg_api);
$domain = $mg_domain;

$result = $mg->sendMessage($domain, array(
    'from'    => 'postmaster@' . $mg_domain,
    'to'      => $to,
    'subject' => $subject,
    'text'    => $body
));

if ($result->http_response_code == 200) {
    echo 'Email sent successfully!';
} else {
    echo 'Error sending email.';
}

?>
