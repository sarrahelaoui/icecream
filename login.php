<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #ffe4e9; /* fond rose doux */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-box {
      width: 360px;
      padding: 30px;
      background: #fff0f5; /* rose clair */
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(255, 105, 180, 0.3);
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .form-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 25px rgba(255, 105, 180, 0.5);
    }

    .form-box h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #ff4f87; /* rose vif */
      font-weight: 900;
    }

    input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border: 2px solid #ffc0cb;
      border-radius: 10px;
      outline: none;
      transition: border 0.3s, box-shadow 0.3s;
    }

    input:focus {
      border-color: #ff4f87;
      box-shadow: 0 0 8px rgba(255, 79, 135, 0.5);
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 15px;
      background: linear-gradient(45deg, #ff7aa2, #ff4f87);
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      transition: background 0.3s, transform 0.3s;
    }

    button:hover {
      background: linear-gradient(45deg, #ff4f87, #ff1f57);
      transform: scale(1.05);
    }

    input::placeholder {
      color: #ffb6c1;
      font-weight: 500;
    }
  </style>
</head>
<body>
<?php
session_start();
require_once 'include/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        die("❌ Tous les champs sont obligatoires");
    }

    // Chercher l'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        die("❌ Email incorrect");
    }

    // Vérifier mot de passe hashé
    if (!password_verify($password, $user['password'])) {
        die("❌ Mot de passe incorrect");
    }

    // Login OK → session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header("Location: index.php");
    exit;
}
?>

<div class="form-box">
  <h2>Connexion</h2>
  <form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
  </form>
</div>

</body>
</html>
