<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Lien vers Font Awesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
      
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #162d2b;
            color: white;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .navbar .icon {
            color: white;
            font-size: 20px;
            cursor: pointer;
            z-index: 10; /* S'assurer que l'icône est visible */
        }
        .navbar .search-bar {
            flex-grow: 1;
            margin: 0 20px;
            position: relative;
        }
        .navbar .search-bar input {
            width: 20%;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            outline: none;
        }
        .navbar .login-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

         @media (max-width: 768px) {
            .navbar .search-bar {
                margin: 0 10px;
            }
        } 
    </style>
</head>
<body>
    <div class="navbar">
        <!-- Icône de menu à gauche -->
        <div class="icon">
            <i class="fas fa-bars"></i>
        </div>
        <!-- Barre de recherche au centre -->
        <div class="search-bar">
            <input type="text" placeholder="Rechercher...">
            <i class="fas fa-search"></i>
        </div>
        <!-- Icône de notification à droite -->
        <div class="icon">
            <i class="fas fa-bell"></i>
        </div>
        <a href="login.php" >
        <button class="login-btn">Connexion</button>
          </a>
       
    </div>
</body>
</html>
