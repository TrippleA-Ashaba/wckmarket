<?php
// Uncomment next line if you're not using a dependency loader (such as Composer)
// require_once 'vendor/sendgrid/sendgrid/sendgrid-php.php';
require 'config.php';
require 'vendor/autoload.php';
use SendGrid\Mail\Mail;

$email = new Mail();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$experience = $_POST['experience'];
$location = $_POST['location'];
$dob = $_POST['dob'];   
$course = $_POST['course'];
$reason = $_POST['reason'];
$emailAddress = $_POST['email'];
$subject = "New Application";
$name = $fname.' '.$lname;
$email->setFrom($emailAddress, "WCK Markets Member");
$email->setSubject($subject);
$email->addTo($companyEmail, "WCK Markets Admin");
$email->addContent(
    "text/html", "<p>Hello Admin,<br>
            Please find my details below,<br>
            Full Name: $name,<br>
            Email: $emailAddress, <br>
            Phone Number: $phone, <br>
            Location: $location, <br>
            Date Of Birth: $dob, <br>
            Course: $course, <br>
            Experience: $experience, <br>
            Reason: $reason.<br>
            kr,<br>
            $name
    </p>"
);
$sendgrid = new \SendGrid($apiKey);
if($sendgrid->send($email)){
    header("Location: index.php?message=success");
    die();
}
// try {
//     $response = $sendgrid->send($email);
//     // return $response;
// } catch (Exception $e) {
//     echo 'Caught exception: '. $e->getMessage() ."\n";
// }
