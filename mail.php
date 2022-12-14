<?php
// Uncomment next line if you're not using a dependency loader (such as Composer)
// require_once 'vendor/sendgrid/sendgrid/sendgrid-php.php';
require 'vendor/autoload.php';
use SendGrid\Mail\Mail;

$email = new Mail();
$companyEmail = "abahoallans@gmail.com";
$name = $_POST['name'];
$message = $_POST['message'];
$emailAddress = $_POST['email'];
// $package = $_POST['package'];             Package: $package,<br>
$subject = "New Application";
$email->setFrom($emailAddress, "WCK Markets Member");
$email->setSubject($subject);
$email->addTo($companyEmail, "WCK Markets Admin");
$email->addContent(
    "text/html", "<p>Hello Admin,<br>
            Please find my details below,<br>
            Name: $name,<br>
            Email: $emailAddress, <br>
            Message: $message.<br>
            kr,
            $name.
    </p>"
);
$sendgrid = new \SendGrid('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');
if($sendgrid->send($email)){
    echo "Thank you for applying. We'll get back to you shortly";
}
// try {
//     $response = $sendgrid->send($email);
//     // return $response;
// } catch (Exception $e) {
//     echo 'Caught exception: '. $e->getMessage() ."\n";
// }
?>