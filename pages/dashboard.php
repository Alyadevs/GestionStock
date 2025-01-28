<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .content {
            display: flex;
            flex: 1;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
        }
     </style>
</head>

<body>
<?php include('../includes/navbar.php'); ?>
<div class="content">
   <?php include('../includes/sidbar.php'); ?>
         <div class="main-content">
            <!-- Contenu du dashboard -->
             
            <h1>Bienvenue sur le dashboard</h1>
            <p>Ceci est le contenu principal de votre dashboard.</p>
        </div>
 </div>
</body>
</html>

