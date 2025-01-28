<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gestionstock', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Générer un hash du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Supprimer l'utilisateur existant avec le même nom ou email (si nécessaire)
        $pdo->exec("DELETE FROM users WHERE nom = '$nom' OR email = '$email'");

        // Insérer un nouvel utilisateur avec le mot de passe hashé
        $stmt = $pdo->prepare("INSERT INTO users (nom, email, password) VALUES (:nom, :email, :password)");
        $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':password' => $hashed_password
        ]);

        // echo "Utilisateur ajouté avec succès avec le mot de passe hashé.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #162d2b;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: rgb(243, 247, 250);
        }

        label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin-bottom: 5px;
            color: rgb(223, 233, 242);
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2c3e50;
        }

        .error-message {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .register-link {
            margin-top: 15px;
            color:rgb(242, 246, 250);
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inscription Utilisateur</h2>

        <!-- Formulaire pour l'inscription -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>

            <button type="submit">S'inscrire</button>
        </form>
        <div class="register-link">
            Vous avez un compte ? <a href="login.php">se connecter</a>
        </div>
    </div>
</body>
</html>

