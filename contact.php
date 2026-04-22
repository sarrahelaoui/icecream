<?php
require 'include/database.php';

$success = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {

        $stmt = $pdo->prepare("
            INSERT INTO contact_messages (name, email, message)
            VALUES (?, ?, ?)
        ");

        if ($stmt->execute([$name, $email, $message])) {
            $success = "Message sent successfully!";
        } else {
            $error = "Something went wrong!";
        }

    } else {
        $error = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>

<!-- ✅ IMPORTANT: your main CSS -->
<link rel="stylesheet" href="css/style.css">

<style>
body {
    font-family: Verdana;
    background: #ffe0e6;
}

/* CONTAINER */
.contact-container {
    width: 400px;
    margin: 80px auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    color: #db2626;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    background: #db2626;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #ff4b4b;
}

.success { color: green; text-align: center; }
.error { color: red; text-align: center; }
</style>
</head>

<body>

<!-- ✅ NOW NAVBAR HERE -->
<?php include 'components/navbar.php'; ?>

<div class="contact-container">
    <h2>Contact Us 🍦</h2>

    <?php if($success): ?>
        <p class="success"><?= $success ?></p>
    <?php endif; ?>

    <?php if($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="message" rows="5" placeholder="Your Message"></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<?php include 'components/footer.php'; ?>

</body>
</html>