<?php

$name = $_POST["name"];
$email = $_POST["email"];
$sub = $_POST["subject"];
$msg = $_POST["message"];

$ret = mail("support@bigradium.com", $sub, htmlspecialchars($msg) . "\n\n from: " . $name . "\n email: " . $email);

if ($ret) {
    header("Location: http://www.bigradium.com/contact-us-thankyou.html");
      exit();
} else {
    header("Location: http://www.bigradium.com/contact-us-error.html");
      exit();
}

?>

