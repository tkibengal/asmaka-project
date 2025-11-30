<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "swapna.dp2009@gmail.com";
  $subject = "New Contact Form Submission";
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $sub =htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/plain; charset=UTF-8";

  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Mail Sent Successfully!";
  } else {
    echo "Failed to send mail.";
  }
}
?>
