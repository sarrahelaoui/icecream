<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #ffe4e9; /* soft pink background like your site */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-box {
      width: 360px;
      padding: 30px;
      background: #fff0f5; /* lighter pink */
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
      color: #ff4f87; /* bright pink title */
      font-weight: 900;
    }

    input {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0;
      border: 2px solid #ffc0cb; /* soft pink border */
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

    /* Small playful touches */
    input::placeholder {
      color: #ffb6c1;
      font-weight: 500;
    }
  </style>
</head>
<body>
  <?php
require_once 'include/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    // Validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm)) {
        echo "❌ Tous les champs sont obligatoires";
        exit;
    }

    if ($password !== $confirm) {
        echo "❌ Les mots de passe ne correspondent pas";
        exit;
    }

    // Vérifier si email existe
    $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $check->execute([$email]);
    if ($check->rowCount() > 0) {
        echo "❌ Email déjà utilisé";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert
    $sql = "INSERT INTO users (username, email, password, created_at)
            VALUES (?, ?, ?, NOW())";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $email, $hashedPassword]);

    header("Location: login.php");
    exit;
}
?>

<div class="form-box">
  <h2>Inscription</h2>
<form action="inscription.php" method="POST">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="password" name="confirm_password" placeholder="Confirmer mot de passe" required>
    <button type="submit">S'inscrire</button>
  </form>
</div>

</body>
</html>
