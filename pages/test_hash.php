<?php
$password = 'monmotdepasse';  // Mot de passe saisi
$hashedPasswordFromDb = '$2y$10$hO/2KzVU.udBDVc3vypzBu/ji38M94JHQrj44U6Ulvj99oMrewIFu';  // Votre hash

if (password_verify($password, $hashedPasswordFromDb)) {
    echo "Le mot de passe est correct.";
} else {
    echo "Le mot de passe est incorrect.";
}
?>


