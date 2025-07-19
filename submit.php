<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  echo "<h2>Thank you, $name!</h2>";
  echo "<p>Your message has been received. We'll get back to you at $email.</p>";
  echo "<p>Message: $message</p>";
} else {
  echo "Invalid Request!";
}
?>
