<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <!-- Lien vers Font Awesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
      
        .sidebar {
            width: 250px;
            background-color: #162d2b;
            color: white;
            display: flex;
            flex-direction: column;
        }
        .sidebar-header {
            padding: 20px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            background-color: #1e3d3a;
        }
        .menu-item {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .menu-item:hover {
            background-color: #1e3d3a;
            cursor: pointer;
        }
        .menu-item i {
            margin-right: 15px;
            font-size: 18px;
        }
        .menu-item:last-child {
            margin-top: auto;
        }
        @media (max-width: 768px) {
           .sidebar {
                width: 100%;
                height: auto;
                position: static;
            }
        } 
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-store"></i> Gestion Stock
        </div>
        <a href="dashboard.php" class="menu-item">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="produits.php" class="menu-item">
            <i class="fas fa-box"></i> Produits
        </a>
        <a href="fournisseurs.php" class="menu-item">
            <i class="fas fa-truck"></i> Fournisseurs
        </a>
        <a href="categories.php" class="menu-item">
            <i class="fas fa-tags"></i> Catégories
        </a>
        <a href="ventes.php" class="menu-item">
            <i class="fas fa-shopping-cart"></i> Ventes
        </a>
        <a href="scan.php" class="menu-item">
            <i class="fas fa-qrcode"></i> Scan
        </a>
        <a href="historique.php" class="menu-item">
            <i class="fas fa-history"></i> Historique
        </a>
        <a href="logout.php" class="menu-item">
            <i class="fas fa-sign-out-alt"></i> Déconnexion
        </a>
    </div>
</body>
</html>
