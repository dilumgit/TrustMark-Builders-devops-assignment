<?php

require_once dirname(__FILE__) . '/db.php';



$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    mysqli_query($conn,
        "INSERT INTO contact_messages (name, phone, email, message)
         VALUES ('$name','$phone','$email','$message')"
    );

    $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>Contact Us</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="contact-banner">
    <img src="images/3.jpg" alt="Construction site">
</section>

<section class="contact-form">
    <?php if($success): ?>
        <p class="success">Message sent successfully!</p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="text" name="phone" placeholder="Phone Number">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

</body>
</html>
