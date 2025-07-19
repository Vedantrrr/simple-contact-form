<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Contact Us</h2>
    <form action="submit.php" method="POST">
      <label>Name:</label><br>
      <input type="text" name="name" required><br><br>

      <label>Email:</label><br>
      <input type="email" name="email" required><br><br>

      <label>Message:</label><br>
      <textarea name="message" required></textarea><br><br>

      <button type="submit">Send</button>
    </form>
  </div>
</body>
</html>
