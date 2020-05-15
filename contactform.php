<?php

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "crpaz@asu.edu";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$email.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>